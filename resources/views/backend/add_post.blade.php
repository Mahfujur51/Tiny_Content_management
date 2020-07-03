@extends('layouts.app')
@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">
            Add Product
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="card-body">
            <form action="{{ route('store.post') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-gorup">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-gorup">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="from-group">
                    <label for="">Section</label>
                    <select name="section" id="" class="form-control">
                        <option value="">Select Section</option>
                        <option value="1">Section One</option>
                        <option value="2">Section Two</option>
                    </select>
                </div>
                <div class="from-group">
                    <label for="">Content Type</label>
                    <select name="type" id="" class="form-control">
                        <option value="">Select Content Type</option>
                        <option value="1">Image</option>
                        <option value="2">Video</option>
                    </select>
                </div>
                <div class="form-gorup">
                    <label for="">Video Url  (if you select Type Video)</label>
                    <input type="text"  class="form-control" name="url">
                </div>
                <div class="form-gorup">
                    <label for="">Image / Vidoe Thumnil</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group mt-3">
                    <label for=""> Please Select Status</label>
                    <div class="radio">
                        <label><input type="radio" name="status" value="1" checked>Published</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" value="0" name="status">Unpublished</label>
                    </div>
                </div>
                <div class="form-gorup">
                    <div class="text-center">
                        <input type="submit" value="Add Post" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
