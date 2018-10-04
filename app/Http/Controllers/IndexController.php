<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class IndexController extends MainController
{
    //
    public function index(){
        $this->content = $this->getContent('index.index');
        return $this->renderOutput();
    }


    public function test(){
        $user = Auth::user();
        $user->assignRole('super-admin');
    }




}
