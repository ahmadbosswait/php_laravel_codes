<?php

namespace App\Http\Controllers;

use App\Classes\Eventogy;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Create an instance of Eventogy class
        $eventogy = new Eventogy();

        // Timstamp
        $convertTimstamp = $eventogy->convertTimstamp(1533925763);

        // Check Email
        $checkEmail = $eventogy->checkValidEmail('ahmadbosswait@gmail.com');

        // FlipCoin
        $flipCoin = $eventogy->flipCoin(/* number of times a coin is fliping */10);

        return view('index')
        //->with('flipCoin', $flipCoin) it prints without calling because I use printing function inside the method
        ->with('checkEmail', $checkEmail)
        ->with('convertTimstamp', $convertTimstamp);
    }
}
