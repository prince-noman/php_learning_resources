<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //  Single Image Upload to Public Folder
    public function pubSingle(){
        return view('backend.pages.images.pub-single');
    }
    public function pubSingleUpload(Request $request){
    //    Validation
    $this->validate($request,[
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Image Upload
    if($request->hasFile('image')){
        $image = $request->file('image');
        $fileNameToStore = 'photo-' . md5(uniqid()) . '-' . time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads'), $fileNameToStore);
    }
    return redirect()->back();
    }


     //  Multiple Image Upload to Public Folder
     public function pubMultiple(){
        return view('backend.pages.images.pub-multiple');
    }

    public function pubMultipleUpload(Request $request){
        // Validation
        $this->validate($request,[
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Upload Images
        if($request->hasFile('images')){
            $images = $request->file('images');
            foreach($images as $image){
                $fileNameToStore = 'multiple-photo-' . md5(uniqid()) . '-' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/uploads'), $fileNameToStore);
            }
        }
        return redirect()->back();
    }



       //  Single Image Upload to Storage Folder
       public function storeSingle(){
        return view('backend.pages.images.store-single');
    }

    public function storeSingleUpload(Request $request){
        // Validation
        $this->validate($request,[
            'image' => 'required|image|mimes:png,gif,svg|max:2048',
        ],[
            'image.mimes' => 'Your Uploaded Image does not match our requirements',
        ]);

        // Image Upload
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileNameToStore = 'photo-' . md5(uniqid()) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/uploads', $fileNameToStore);
        }
        
        return redirect()->back();
    }


       //  Multiple Image Upload to Storage Folder
       public function storeMultiple(){
        return view('backend.pages.images.store-multiple');
    }


    public function storeMultipleUpload(Request $request){
        // Validation
        $this->validate($request,[
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

       if($request->hasFile('images')){
            $images = $request->file('images');
            foreach($images as $image){
                $fileNameToStore = 'multiple-photo-' . md5(uniqid()) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/uploads', $fileNameToStore);
            }
       }
        return redirect()->back();
    }
}