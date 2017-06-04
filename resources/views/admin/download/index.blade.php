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
            <div class="row" style="margin-bottom: 50px">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                    <div class="home-form span1">
                        <img src="{{asset('storage/web-folder/images/android.png')}}" alt="">
                    </div>
                <div class="home-form span3">
                    <form action="">
                        {{csrf_field()}}
                        <div class="form-control">
                            <label for="title">Title:</label>
                            <input type="text">
                        </div>
                        <div class="form-control">
                            <label for="title">Description:</label>
                            <input type="text">
                        </div>
                        <div class="form-control">
                            <label for="title">Link:</label>
                            <input type="text">
                        </div>
                        <div class="form-control">
                            <label for="title">Image:</label>
                            <input type="file">
                        </div>
                </div>
                    <div class="home-form span1">
                        <img src="{{asset('storage/web-folder/images/iphone.png')}}" alt="">

                    </div>
                    <div class="home-form span3">
                        <form action="">
                            {{csrf_field()}}
                            <div class="form-control">
                                <label for="title">Title:</label>
                                <input type="text">
                            </div>
                            <div class="form-control">
                                <label for="title">Description:</label>
                                <input type="text">
                            </div>
                            <div class="form-control">
                                <label for="title">Link:</label>
                                <input type="text">
                            </div>
                            <div class="form-control">
                                <label for="title">Image:</label>
                                <input type="file">
                            </div>
                    </div>
                    <div class="home-form span1">
                        <img src="{{asset('storage/web-folder/images/windowsphone.png')}}" alt="">
                    </div>
                    <div class="home-form span3">
                        <form action="">
                            {{csrf_field()}}
                            <div class="form-control">
                                <label for="title">Title:</label>
                                <input type="text">
                            </div>
                            <div class="form-control">
                                <label for="title">Description:</label>
                                <input type="text">
                            </div>
                            <div class="form-control">
                                <label for="title">Link:</label>
                                <input type="text">
                            </div>
                            <div class="form-control">
                                <label for="title">Image:</label>
                                <input type="file">
                            </div>
                    </div>
                <div class="row">
                    <input type="submit" class="btn btn-primary" style="margin: 50px">
                </div>

            </div>
    </div>
@endsection