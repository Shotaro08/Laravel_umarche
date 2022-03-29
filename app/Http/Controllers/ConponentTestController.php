<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConponentTestController extends Controller
{
    //
    public function showConponent1(){
        $message = 'メッセージ';
        return view('components.tests.component-test1', compact('message'));
    }

    public function showConponent2(){
        return view('components.tests.component-test2');
    }

}
