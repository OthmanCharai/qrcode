<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class QrCodeController extends Controller
{
    //

    /**
     * @return View
     */
    public function index():View
    {
      return view('qrcode');
    }

    /**
     * @return View
     */
    public function bitconcode():View{
        return view('bitcoincode');
    }

    /**
     * @return View
     */
    public function emailcode():View{
        return \view('emailcode');
    }

    /**
     * @return View
     */
    public function geocode():View{
        return \view('goecode');
    }

    /**
     * @return View
     */
    public function smscode():View{
        return view('phonecode');
    }

    public function wificode():view{
        return \view('wificode');
    }


}
