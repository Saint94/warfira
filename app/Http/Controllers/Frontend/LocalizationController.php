<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function getLang() {
        return App::getLocale();
    }

    public function setLang($lang){
        session()->put('lang', $lang);
        return redirect()->back();
    }
}
