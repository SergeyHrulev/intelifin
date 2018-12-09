<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function dashboard(){

        return view('dashboard.cms-main');
    }

    public function mainProductDay(){
        return view('dashboard.pages.cms-main-product-day');
    }

    public function mainRecommended(){
        return view('dashboard.pages.cms-main-recommended');
    }

    public function mainSets(){
        return view('dashboard.pages.cms-main-sets');
    }

    public function mainInteresting(){
        return view('dashboard.pages.cms-main-interesting');
    }

    public function mainSale(){
        return view('dashboard.pages.cms-main-sale');
    }

    public function mainManuf(){
        return view('dashboard.pages.cms-main-manuf');
    }

    public function mainAbout(){
        return view('dashboard.pages.cms-main-about');
    }

    public function createArticle(){
        return view('dashboard.pages.cms-main-popular');
    }
}
