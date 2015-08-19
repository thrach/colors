<?php

namespace App\Http\Controllers;

use App\Color;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function getIndex()
    {
        return view('welcome');
    }

    public function getColors(Request $request)
    {
        $arrSearch = explode(' ',$request->search);

        return Color::whereIn('mouline', $arrSearch)->get();
    }

}