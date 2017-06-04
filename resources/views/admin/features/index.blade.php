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
                <div class="home-form span3">
                    <form action="">
                        {{csrf_field()}}
                        <div class="form-control">
                            <label for="title">Title:</label>
                            <input type="text">
                        </div>
                        <div class="form-control">
                            <label for="title">Description:</label>
                            <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
                        </div>

                </div>
                    <div class="home-form span3">
                        <br>
                            <div class="form-control">
                                <img src="{{asset('storage/web-folder/images/1.png')}}" alt="">
                            </div>
                            <br><br><br>
                            <div class="form-control">
                                <label for="title">Image:</label>
                                <input type="file">
                            </div>
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
                                <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
                            </div>

                    </div>
                    <div class="home-form span3">
                        <br>
                        <div class="form-control">
                            <img src="{{asset('storage/web-folder/images/2.png')}}" alt="">
                        </div>
                        <br><br><br>
                        <div class="form-control">
                            <label for="title">Image:</label>
                            <input type="file">
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="home-form span3">
                    <form action="">
                        {{csrf_field()}}
                        <div class="form-control">
                            <label for="title">Title:</label>
                            <input type="text">
                        </div>
                        <div class="form-control">
                            <label for="title">Description:</label>
                            <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
                        </div>

                </div>
                <div class="home-form span3">
                    <br>
                    <div class="form-control">
                        <img src="{{asset('storage/web-folder/images/1.png')}}" alt="">
                    </div>
                    <br><br><br>
                    <div class="form-control">
                        <label for="title">Image:</label>
                        <input type="file">
                    </div>
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
                            <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
                        </div>

                </div>
                <div class="home-form span3">
                    <br>
                    <div class="form-control">
                        <img src="{{asset('storage/web-folder/images/2.png')}}" alt="">
                    </div>
                    <br><br><br>
                    <div class="form-control">
                        <label for="title">Image:</label>
                        <input type="file">
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection