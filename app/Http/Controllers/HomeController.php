<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Wisata;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $wisata = wisata::all();

                return view('user.home', compact('wisata'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }
    public function index()
    {
        $wisata = wisata::all();

        return view('user.home', compact('wisata'));
    }
}
