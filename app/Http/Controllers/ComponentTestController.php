<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    //
    public function showComponent1(){
        $message = 'メッセージ';
        return view('components.tests.component-test1', compact('message'));
    }

    public function showComponent2(){
        return view('components.tests.component-test2');
    }

}
