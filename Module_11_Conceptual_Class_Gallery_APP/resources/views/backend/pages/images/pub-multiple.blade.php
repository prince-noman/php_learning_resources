@extends('backend.layouts.master')

@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Multiple Image Upload to Public Folder</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row align-items-center g-3">
                                <div class="col-lg-4">
                                    <div>
                                       <form method="POST" action="{{ route('admin.pub-multiple-upload') }}" enctype="multipart/form-data">
                                        @csrf
                                        <label for="formFileMultiple" class="form-label">Multiple Files
                                            Input Example</label>
                                        <input class="form-control" type="file" name="images[]"  multiple>
                                        <button class="btn btn-primary mt-3">Upload</button>
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


