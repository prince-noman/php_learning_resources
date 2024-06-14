@extends('backend.layouts.master')

@section('title')
    Album
@endsection

@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1"></h4>
                        {{-- Access Buttons --}}
                        <div>
                            <a href="{{ route('admin.album.index') }}" class="btn btn-primary">All Albums</a>
                        <a href="{{ route('admin.photo.create', ['album_id' => $albumA->id]) }}" class="btn btn-primary">Add Photo</a>
                        </div>
                        
                        
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-12">
                                    <div>
                                      {{-- Show All Albums in a card format by 3 columns --}}
                                      <div class="row g-3">
                                          @foreach ($album as $photo )
                                              
                                         
                                              <div class="col-md-3">
                                                  <div class="card">
                                                      <div class="card-body">
                                                          <img src="{{ asset($photo->photo) }}" class="img-thumbnail rounded" alt="Album Image">
                                                          <h3 class="card-title mt-3">{{ $photo->title }}</h3>
                                                          <p class="card-text">{{ $photo->photo_description }}</p>
                                                          {{-- Access Buttons  --}}
                                                          <div class="d-flex justify-content-end align-items-center">
                                                              <a href="">Delete</a>
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