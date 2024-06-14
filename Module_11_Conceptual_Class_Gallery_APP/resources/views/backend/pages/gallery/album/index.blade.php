@extends('backend.layouts.master')

@section('title')
    Create Album
@endsection

@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">All Albums</h4>
                        <a href="{{ route('admin.album.create') }}" class="btn btn-primary">Create Album</a>
                    </div>
                     {{-- end card header  --}}
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-12">
                                    <div>
                                      {{-- Show All Albums in a card format by 3 columns --}}
                                      <div class="row g-3">
                                          @foreach ($albums as $album)
                                              <div class="col-md-3">
                                                  <div class="card">
                                                      <div class="card-body">
                                                          <img src="{{ asset($album->cover_image) }}" class="img-thumbnail rounded" alt="Album Image">
                                                          <h3 class="card-title mt-3">{{ $album->name }}</h3>
                                                          <p class="card-text"></p>
                                                          {{-- Access Buttons --}}
                                                          <div class="d-flex justify-content-between align-items-center">
                                                              <a href="{{ route('admin.album.show', $album->id) }}" class="btn btn-primary">View</a>
                                                            
                                                              <form action="{{ route('admin.album.destroy', $album->id ) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                          </div>

                                                      </div>
                                                  </div>
                                              </div>
                                              @endforeach
                                          
                                          
                                      </div>

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