<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Profil,
    Tentang
};

class LandingPageController extends Controller
{
    //
    public function home(){

        


        return view('landingPage.home',[
            'tentang' => Tentang::first(),
            'profil' => Profil::first()
        ]);
    }
}