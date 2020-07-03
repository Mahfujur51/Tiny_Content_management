@extends('layouts.app')
@section('content')
<div class="col-md-8">
    <div class="card p-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        All Post
                    </div>
                    <div class="card-body">
                        {{$post->count()}}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Section 1 Post
                    </div>
                    <div class="card-body">
                        {{$s1_post->count()}}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card">
                        <div class="card-header">
                            Section 2 Post
                        </div>
                        <div class="card-body">
                            {{$s2_post->count()}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card">
                        <div class="card-header">
                            Un Published Post
                        </div>
                        <div class="card-body">
                            {{$uppost->count()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
