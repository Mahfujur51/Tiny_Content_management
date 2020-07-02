@extends('fontend.master')
@section('title','Tiny Content Management')
@section ('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-8 border-right">
            <div class="row">
                <div class="col-md-6 p-3">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="{{ asset('image/5.jpg') }}" alt="" height="270" width="350" class="rounded">
                        </div>
                        <div class="card-text"><h3>The standard Lorem Ipsum passage,
                        </h3></div>

                    </div>
                </div>
                <div class="col-md-6 p-4">
                    <div class="row">
                        <div class="col-md-6  mb-2">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="{{ asset('image/1.jpg') }}" alt=""  height="100" width="150" class="rounded">
                                    <div class="card-body">
                                        <div class="card-text text-center">Title Demo</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="{{ asset('image/2.png') }}" alt="" height="100" width="150" class="rounded">
                                    <div class="card-body">
                                        <div class="card-text text-center">Title Demo</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="{{ asset('image/3.jpg') }}" alt="" height="100" width="150" class="rounded">
                                    <div class="card-body">
                                        <div class="card-text text-center">Title Demo</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="card">
                                <div class="card-img-top">
                                    <img src="{{ asset('image/4.jpg') }}" alt="" height="100" width="150" class="rounded">
                                    <div class="card-body">
                                        <div class="card-text text-center">Title Demo</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="{{ asset('image/1.jpg') }}" alt="" height="200" width="348" class="rounded">
                            <div class="card-body">
                                <div class="card-text text-center">Title Demo</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-1">
                <div class="col-md-6  mb-2">
                     <div class="card">
                        <div class="card-img-top">
                            <img src="{{ asset('image/2.png') }}" alt="" height="100" width="155" class="rounded">
                            <div class="card-body">
                                <div class="card-text text-center">Title Demo</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6  mb-2">
                     <div class="card">
                        <div class="card-img-top">
                            <img src="{{ asset('image/3.jpg') }}" alt="" height="100" width="155" class="rounded">
                            <div class="card-body">
                                <div class="card-text text-center">Title Demo</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6  mb-2">
                     <div class="card">
                        <div class="card-img-top">
                            <img src="{{ asset('image/4.jpg') }}" alt="" height="100" width="155" class="rounded">
                            <div class="card-body">
                                <div class="card-text text-center">Title Demo</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6  mb-2">
                     <div class="card">
                        <div class="card-img-top">
                            <img src="{{ asset('image/4.jpg') }}" alt="" height="100" width="155" class="rounded">
                            <div class="card-body">
                                <div class="card-text text-center">Title Demo</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
