@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <form method="post" action="{{ route('BlogStore') }}">
                        @csrf
                        <div class="form-group mb-3">
                          <label>Post Title</label>
                          <input type="text" name="title" class="form-control" placeholder="Post Title" required>
                        </div>

                        <div class="form-group mb-3">
                            <label>Post Description</label>
                            <textarea type="text" name="description" class="form-control" placeholder="Post Titledescription" rows="10" required> </textarea>
                        </div>

                        <div class="mb-3">
                            <label>Post Thumbnail</label>
                            <input type="file" class="form-control" name="PostThumbnail">
                        </div>

                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary">Post</button>
                        </div>
                      </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
