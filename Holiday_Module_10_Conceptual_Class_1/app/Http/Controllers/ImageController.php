<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        // $images = Image::all();
        return view('images.index');
    }

    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'images' => 'required',
            'images.*' => 'file|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = 'photo-'.uniqid().time().'.'.$image->extension();
                $image->move(public_path('uploads'), $imageName);

                // Image::create([
                //     'image_path' => 'uploads/'.$imageName,
                // ]);
            }
        }

        return redirect('/images')->with('success', 'Images uploaded successfully.');
    }
}