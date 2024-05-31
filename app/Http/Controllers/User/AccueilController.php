<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Service;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index(){
        $services = Service::all();
        $articles = Article::all();

        return view('welcome' ,compact('services','articles') );
    }
}
