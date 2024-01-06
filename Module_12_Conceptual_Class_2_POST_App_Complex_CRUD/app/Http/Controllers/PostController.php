<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::where('status', 'published')->latest()->get();
        return view('pages.index', compact('posts'));
    }

    public function create(){
        return view('pages.create');
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required',
            'description' => 'nullable|string',
            'category' => 'required|string',
            'tags' => 'nullable|array',
            'status' => 'required|string',
            'featured_image' => 'required|image',
        ]);

        //Image Upload
        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $fileNameToStore = 'post_image_'.md5((uniqid())).time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $fileNameToStore);
        }

        //Post Save
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'tags' => $request->tags,
            'status' => $request->status,
            'featured_image' =>  $fileNameToStore,
        ]);

        return redirect()->back()->with('success', 'Post Created Successfully');    
    }

    public function show($id){
        $post = Post::findOrFail($id);
        return view('pages.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('pages.edit', compact('post'));
    }

    public function update(Request $request, $id){

        $request->validate([
            'title' => 'required',
            'description' => 'nullable|string',
            'category' => 'required|string',
            'tags' => 'nullable|array',
            'status' => 'required|string',
            'featured_image' => 'nullable|image',
        ]);

        //Image Upload
        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $fileNameToStore = 'post_image_'.md5((uniqid())).time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $fileNameToStore);
        }

        //Post Save
        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'tags' => $request->tags,
            'status' => $request->status,
            'featured_image' =>  $request->hasFile('featured_image') ? $fileNameToStore : $post->featured_image,
        ]);

        return redirect()->back()->with('success', 'Post updated Successfully');    
    }



    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->back()->with('success', 'Post Deleted Successfully');
    }
}