<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class ProfiteController extends Controller {


    static  public function profite($amount){
        $profite = 10;
        return $profite * $amount / 100;
    }


}
