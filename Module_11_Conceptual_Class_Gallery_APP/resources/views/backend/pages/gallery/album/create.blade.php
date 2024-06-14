@extends('backend.layouts.master')

@section('title')
    Create Album
@endsection

@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-check-all me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                
            @endif
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Create Album</h4>
                        <a href="{{ route('admin.album.index') }}" class="btn btn-primary">All Albums</a>
                    </div>
                    {{-- end card header --}}
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-4">
                                    <div>
                                       <form method="POST" action="{{ route('admin.album.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <label for="formFileMultiple" class="form-label">
                                           <strong> Name</strong>
                                        </label>
                                        <input class="form-control" type="text" name="name" value="">
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                        <label for="formFileMultiple" class="form-label">
                                            <strong>Description</strong>
                                        </label>
                                        <input class="form-control" type="text" name="description" value="">
                                        @error('description')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        
                                        <label for="formFileMultiple" class="form-label">
                                            <strong>Cover Image</strong>
                                        </label>
                                        <input class="form-control" type="file" name="cover_image" >
                                        @error('cover_image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <button class="btn btn-primary mt-3">Create</button>
                                       </form>
                                    </div>
                                </div>
                            
                        </div>
                
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
    </div>
</div>

@endSection