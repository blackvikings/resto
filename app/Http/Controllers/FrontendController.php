<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderImage;

class FrontendController extends Controller
{
    public function index()
    {
        $sliderImage = SliderImage::all();
        return view('frontend.index', compact('sliderImage'));
    }
}
