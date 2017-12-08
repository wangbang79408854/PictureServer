<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //

    public function GetArticles(){

        return Article::all();

    }

    public function index(){
        return view('admin/article/index')->withArticles(Article::all());
    }
}
