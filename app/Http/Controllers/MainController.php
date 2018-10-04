<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MainController extends Controller
{
    //

    public $template;
    public $vars;

    public $header;
    public $content;
    public $cssFiles;
    public $jsFiles;

    public function __construct()
    {
        $this->template = env('THEME').'.index';
        $this->vars = array();
        $this->cssFiles = $this->getContent('assets.css');
        $this->jsFiles = $this->getContent('assets.js');
    }


    public function renderOutput(){
        //
        $this->header = view(env('THEME').'.layouts.header')->with(['user' => Auth::user()])->render();
        $this->vars = array_add($this->vars, 'header', $this->header);
        $this->vars = array_add($this->vars, 'content', $this->content);
        $this->vars = array_add($this->vars, 'cssFiles', $this->cssFiles);
        $this->vars = array_add($this->vars, 'jsFiles', $this->jsFiles);

        return view($this->template)->with($this->vars);
    }

    public function getContent($view, $data = array()){
        return view(env('THEME').'.'.$view)->with($data)->render();
    }




}
