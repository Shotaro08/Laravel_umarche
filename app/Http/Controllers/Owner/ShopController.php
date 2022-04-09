<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use APP\Http\Requests\UploadImageRequest;
use App\Services\ImageService;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:owners');

        $this->middleware(function ($request, $next) {

            // dd($request->route()->parameter('shop')); //文字列
            // dd(Auth::id());

            $id = $request->route()->parameter('shop');
            if(!is_null($id)){
                $shopsId = Shop::findOrFail($id)->owner->id;
                $shopId = (int)$shopsId;
                $ownerId = Auth::id();
                if($shopId !== $ownerId){
                    abort(404);
                }
            }

            return $next($request);
        });
    }

    public function index()
    {

        // $ownerId = Auth::id();
        $shops = Shop::where('owner_id', Auth::id())->get();

        return view('owner.shops.index', compact('shops'));
    }

    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        return view('owner.shops.edit', compact('shop'));

    }

    public function update(Request $request, $id) //本当はUploadImageRequestがはいってバリデーション
    {
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'information' => ['required', 'string', 'max:1000'],
            'is_selling' => ['required'],
        ]);

        $imageFile = $request->image;
        if(!is_null($imageFile) && $imageFile->isValid()){
            // Storage::putFile('public/shops', $imageFile);

            // $fileName = uniqid(rand() . '_');
            // $extension = $imageFile->extension();
            // $fileNameToStore = $fileName. '.' . $extension;
            // $resizedImage = Image::make($imageFile)->resize(1920, 1080)->encode();

            // Storage::put('public/shops/' . $fileNameToStore, $resizedImage);
            $fileNameToStore = ImageService::upload($imageFile, 'shops');

        }

        $shop = Shop::findOrFail($id);
        $shop->name = $request->name;
        $shop->information = $request->information;
        $shop->is_selling = $request->is_selling;
        if(!is_null($imageFile) && $imageFile->isValid())
        {
            $shop->filename = $fileNameToStore;
        }

        $shop->save();

        return redirect()
        ->route('owner.shops.index')
        ->with(['message' => '店舗情報を更新しました', 'status' => 'info']);
    }
}
