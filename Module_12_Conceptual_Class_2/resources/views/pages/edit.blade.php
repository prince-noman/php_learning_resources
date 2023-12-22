@extends('layouts.app')

@section('content')

{{-- Update Blog Post Form --}}
    <div class="container mx-auto p-8">
        @session('success')
        <div class="bg-green-500 text-white p-4">
            {{ session('success') }}
        </div>
    @endsession
        <h1 class="text-2xl font-semibold mb-4">Update a Post</h1>

        {{-- Form  --}}
        <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Title Field -->
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium">Title</label>
                <input type="text" id="title" name="title"
                    class="mt-1 p-2 w-full bg-gray-800 text-white rounded-md shadow-sm focus:outline-none focus:border-blue-300" value="{{old('title', $post->title) }}">
                @error('title')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror    
            </div>

            <!-- Description Field -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium">Description</label>
                <textarea id="description" name="description"
                    class="mt-1 p-2 w-full h-32 bg-gray-800 text-white rounded-md shadow-sm focus:outline-none focus:border-blue-300">{{ old('description', $post->description) }}</textarea>
                @error('description')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Category Field -->
            <div class="mb-4">
                <label for="category" class="block text-sm font-medium">Category</label>
                <select id="category" name="category"
                    class="mt-1 p-2 w-full bg-gray-800 text-white rounded-md shadow-sm focus:outline-none focus:border-blue-300">
                    <option value="technology" @if (old('category', $post->category) == 'technology') selected @endif>Technology</option>
                    <option value="lifestyle" @if (old('category', $post->category) == 'lifestyle') selected @endif>Lifestyle</option>
                    <option value="travel" @if (old('category', $post->category) == 'travel') selected @endif>Travel</option>
                    <option value="fashion" @if (old('category', $post->category) == 'fashion') selected @endif>Fashion</option>
                </select>
                @error('category')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tags Field -->
            <div class="mb-4">
                <label class="block text-sm font-medium">Tags</label>
                <div class="flex flex-wrap">
                    <label class="inline-flex items-center mr-4">
                        <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="PHP" {{ in_array('PHP', $post->tags) ? 'checked' : '' }}>
                        <span class="ml-2">PHP</span>
                    </label>
                    <label class="inline-flex items-center mr-4">
                        <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="JS" {{ in_array('JS', $post->tags) ? 'checked' : '' }}>
                        <span class="ml-2">JS</span>
                    </label>
                    <label class="inline-flex items-center mr-4">
                        <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="Python" {{ in_array('Python', $post->tags) ? 'checked' : '' }}>
                        <span class="ml-2">Python</span>
                    </label>
                </div>
                @error('tags')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

             <!-- Published/Draft Field -->
             <div class="mb-4">
                <label class="block text-sm font-medium">Status</label>
                <div class="flex">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-blue-500" name="status" value="published" {{ $post->status == 'published' ? 'checked' : '' }}>
                        <span class="ml-2">Published</span>
                    </label>
                    <label class="ml-4 inline-flex items-center">
                        <input type="radio" class="form-radio text-blue-500" name="status" value="draft" {{ $post->status == 'draft' ? 'checked' : '' }}>
                        <span class="ml-2">Draft</span>
                    </label>
                </div>
                @error('status')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Featured Image Field -->
            <div>
                <img id="featuredImageDisplay" src="{{ asset('images/' . $post->featured_image) }}" alt="Featured Image" class="w-64">
            </div>
            <div class="mb-4">
                <label for="featuredImage" class="block text-sm font-medium">Featured Image</label>
                <input type="file" id="featuredImage" name="featured_image"
                    class="mt-1 p-2 w-full bg-gray-800 text-white rounded-md shadow-sm focus:outline-none focus:border-blue-300">
                @error('featured_image')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                Update Post
            </button>
        </form>
    </div>
@endsection



