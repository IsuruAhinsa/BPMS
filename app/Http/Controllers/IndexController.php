<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', [
            'sliders' => $this->getSliders(),
        ]);
    }

    public function getSliders()
    {
        return Slider::orderBy('id', 'desc')->get();
    }
}
