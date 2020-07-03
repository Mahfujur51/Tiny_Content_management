@extends('fontend.master')
@section('title','Tiny Content Management')
@section ('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-8 border-right">
            <div class="row">
                <div class="col-md-6 p-3">
                    @if ($section_one_latest->count()>0)
                    {{-- expr --}}

                    <div class="card">
                        <div class="card-img-top">
                            <img src="{{ asset($section_one_latest->image) }}" class="main_image" alt="" height="270" width="346" class="rounded">
                            @if ($section_one_latest->type==1)
                            <img src="{{ asset('image/audio.png') }}" class="icon_image" height="100" width="120" alt="">
                            @else
                            <img src="{{ asset('image/video.png') }}" class="icon_image" height="100" width="120" alt="">
                            @endif
                        </div>
                        <div class="card-text"><h3><a href="{{ route('single',$section_one_latest->id) }}">{{str_limit($section_one_latest->title,40)}}</a>
                        </h3></div>

                    </div>
                    @else
                    <p class="alert alert-warning">Please insert post </p>
                    @endif
                </div>
                <div class="col-md-6 p-4">
                    <div class="row">
                        @foreach ($section_one_post as $post)
                        {{-- expr --}}

                        <div class="col-md-6  mb-2">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="{{ asset($post->image) }}" alt=""  height="100" width="150" class="rounded">
                                    @if ($post->type==1)
                                    <img src="{{ asset('image/audio.png') }}" class="icon_image" height="40" width="40" alt="">
                                    @else
                                    <img src="{{ asset('image/video.png') }}" class="icon_image" height="40" width="40" alt="">
                                    @endif
                                    <div class="card-body">
                                        <div class="card-text text-center">
                                            <a  href="{{ route('single',$post->id) }}">{{str_limit($post->title,10)}}</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        @if ($section_two_latest->count()>0)
                        {{-- expr --}}

                        <div class="card">
                            <div class="card-img-top">

                                <img src="{{ asset($section_two_latest->image) }}" alt="" height="200" width="348" class="rounded">
                                 @if ($section_two_latest->type==1)
                                    <img src="{{ asset('image/audio.png') }}" class="icon_image" height="100" width="100" alt="">
                                    @else
                                    <img src="{{ asset('image/video.png') }}" class="icon_image" height="100" width="100" alt="">
                                    @endif





                                <div class="card-body">
                                    <div class="card-text text-center"><a href="{{ route('single',$section_two_latest->id) }}">{{str_limit($section_two_latest->title,35)}}</a></div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="alert alert-warning">
                            Please insert post
                        </div>
                        @endif
                    </div>
                </div>
                <div class="row p-1">
                    @if ($section_two_post->count()>0)
                    {{-- expr --}}

                    @foreach ($section_two_post as $post)
                    {{-- expr --}}

                    <div class="col-md-6  mb-2">
                       <div class="card">
                        <div class="card-img-top">

                            <img src="{{ asset($post->image) }}" alt="" height="100" width="155" class="rounded">
                            @if ($post->type==1)
                            <img src="{{ asset('image/audio.png') }}" class="icon_image" height="40" width="40" alt="">
                            @else
                            <img src="{{ asset('image/video.png') }}" class="icon_image" height="40" width="40" alt="">
                            @endif





                            <div class="card-body">
                                <div class="card-text text-center"><a href="{{ route('single',$post->id) }}">{{str_limit($post->title,15)}}</a></div>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
                @else
                <div class="alert alert-warning">Please insert post</div>
                @endif
            </div>
        </div>
    </div>
</div>
</div>

@endsection
