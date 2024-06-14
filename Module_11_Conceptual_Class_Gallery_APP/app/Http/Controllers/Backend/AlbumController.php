<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{
    public function index(){
        $albums = DB::table('albums')->get();
        return view('backend.pages.gallery.album.index', compact('albums'));
    }

    public function create(){
        return view('backend.pages.gallery.album.create');
    }

    public function store(Request $request){
        //Validation
        $this->validate($request,[
            'name' => 'required|string|max:25',
            'description' => 'nullable|string|max:255',
            'cover_image' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:10000',
        ]);

        // Image Processing
        if($request->hasFile('cover_image')){
            $image = $request->file('cover_image');
            $fileNameToStore = 'cover_image_'. md5(uniqid()).time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('assets/gallery/albums'), $fileNameToStore);
        }

        // Save Data to Album Table
        DB::table('albums')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'cover_image' => 'assets/gallery/albums/'.$fileNameToStore,
        ]);

        return redirect()->back()->with('success', 'Album Created Successfully');
    }

    public function show($id){
        $albumA = DB::table('albums')->where('id', $id)->first();
        $album = DB::table('albums')
            ->leftJoin('photos', 'albums.id', '=', 'photos.album_id')
            ->where('albums.id', $id)
            ->get();
        return view('backend.pages.gallery.album.show', compact('album','albumA'));
    }

    public function destroy($id){
        $album = DB::table('albums')->where('id', $id)->first();
        $removedFile = unlink(public_path($album->cover_image));
        if($removedFile){
            $photos = DB::table('photos')->where('album_id', $id)->get();
            foreach($photos as $photo){
                unlink(public_path($photo->photo));
            }
            DB::table('albums')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Album Deleted Successfully');
        }
        return redirect()->back();
    }
}