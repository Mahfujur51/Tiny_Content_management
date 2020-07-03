@extends('fontend.master')
@section('title',$post->title)
@section ('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="text-center">
                <h2>Title:{{$post->title}}</h2>
            </div>
            <div class="text-center">
                @if ($post->type==1)
                <img src="{{ asset($post->image) }}" alt="">
                @else
                {!! Embed::make($post->url)->parseUrl()->getIframe() !!}

                @endif

            </div>
            <div class="justify-content-center mt-3">
                <p>{{$post->description}}</p>
            </div>
            <div class="text-center">
              <!-- Go to www.addthis.com/dashboard to customize your tools -->
              <div class="addthis_inline_share_toolbox"></div>
          </div>

      </div>
  </div>






</div>


@endsection
