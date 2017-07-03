@extends('admin.layouts.master')
@section('content')
    <div id="content" class="span10">


        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="{{route('admin.home.index')}}">Dashboard</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="{{route('admin.features.index')}}">Features</a></li>
        </ul>

        <div class="container">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="row" style="margin-bottom: 50px">
                    <div class="home-form span1">
                        <img src="{{asset('storage/app/public/web-folder/images/android.png')}}" alt="">
                    </div>
                <div class="home-form span3">
                    <form action="{{route('admin.download.update')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-control">
                            <label for="title">Title:</label>
                            <input type="text" value="{{$android->name}}">
                        </div>
                        <div class="form-control">
                            <label for="title">Description:</label>
                            <input type="text" value="{{$android->desc}}">
                        </div>
                        <div class="form-control">
                            <label for="title">Link:</label>
                            <input type="text" value="{{$android->link}}">
                        </div>

                </div>
                    <div class="home-form span1">
                        <img src="{{asset('storage/app/public/web-folder/images/iphone.png')}}" alt="">

                    </div>
                    <div class="home-form span3">
                            <div class="form-control">
                                <label for="title">Title:</label>
                                <input type="text" value="{{$iphone->name}}">
                            </div>
                            <div class="form-control">
                                <label for="title">Description:</label>
                                <input type="text" value="{{$iphone->desc}}">
                            </div>
                            <div class="form-control">
                                <label for="title">Link:</label>
                                <input type="text" value="{{$iphone->link}}">
                            </div>

                    </div>
                    <div class="home-form span1">
                        <img src="{{asset('storage/app/public/web-folder/images/windowsphone.png')}}" alt="">
                    </div>
                    <div class="home-form span3">
                            <div class="form-control">
                                <label for="title">Title:</label>
                                <input type="text" value="{{$windows->name}}">
                            </div>
                            <div class="form-control">
                                <label for="title">Description:</label>
                                <input type="text" value="{{$windows->desc}}">
                            </div>
                            <div class="form-control">
                                <label for="title">Link:</label>
                                <input type="text" value="{{$windows->link}}">
                            </div>
                    </div>
                <div class="row">
                    <input type="submit" class="btn btn-primary" style="margin: 50px">
                </div>

            </div>
    </div>
@endsection