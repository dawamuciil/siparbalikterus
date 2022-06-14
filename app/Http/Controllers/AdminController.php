<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\wisata;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_wisata');
    }

    public function upload(Request $request)
    {
        $wisata = new wisata;

        $image = $request->file;

        $imagename = time() . '.' . $image->getClientoriginalExtension();

        $request->file->move('wisataimage', $imagename);

        $wisata->image = $imagename;

        $wisata->name = $request->name;
        $wisata->phone = $request->number;
        $wisata->addres = $request->addres;
        $wisata->speciality = $request->speciality;

        $wisata->save();
        return redirect()->back()->with('message', 'Wisata Added Succsesfully');
    }
}
