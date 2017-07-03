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
                <div class="home-form span3">
                    <form action="{{route('admin.features.update')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-control">
                            <label for="title">Title:</label>
                            <input type="text" value="{{$feature->t1}}">
                        </div>
                        <div class="form-control">
                            <label for="title">Description:</label>
                            <textarea name="desc" id="desc" cols="30" rows="10">{{$feature->d1}}</textarea>
                        </div>

                </div>
                    <div class="home-form span3">
                        <br>
                            <div class="form-control">
                                <img src="{{asset('storage/app/public/web-folder/images/'.$feature->i1)}}" alt="">
                            </div>
                            <br><br><br>
                            <div class="form-control">
                                <label for="title">Image:</label>
                                <input type="file">
                            </div>
                    </div>
                    <div class="home-form span3">
                            <div class="form-control">
                                <label for="title">Title:</label>
                                <input type="text" value="{{$feature->t2}}">
                            </div>
                            <div class="form-control">
                                <label for="title">Description:</label>
                                <textarea name="desc" id="desc" cols="30" rows="10">{{$feature->d2}}</textarea>
                            </div>

                    </div>
                    <div class="home-form span3">
                        <br>
                        <div class="form-control">
                            <img src="{{asset('storage/app/public/web-folder/images/'.$feature->i2)}}" alt="">
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
                        <div class="form-control">
                            <label for="title">Title:</label>
                            <input type="text" value="{{$feature->t3}}">
                        </div>
                        <div class="form-control">
                            <label for="title">Description:</label>
                            <textarea name="desc" id="desc" cols="30" rows="10">{{$feature->d3}}</textarea>
                        </div>

                </div>
                <div class="home-form span3">
                    <br>
                    <div class="form-control">
                        <img src="{{asset('storage/app/public/web-folder/images/'.$feature->i3)}}" alt="">
                    </div>
                    <br><br><br>
                    <div class="form-control">
                        <label for="title">Image:</label>
                        <input type="file">
                    </div>
                </div>
                <div class="home-form span3">
                        <div class="form-control">
                            <label for="title">Title:</label>
                            <input type="text" value="{{$feature->t4}}">
                        </div>
                        <div class="form-control">
                            <label for="title">Description:</label>
                            <textarea name="desc" id="desc" cols="30" rows="10">{{$feature->d4}}</textarea>
                        </div>

                </div>
                <div class="home-form span3">
                    <br>
                    <div class="form-control">
                        <img src="{{asset('storage/app/public/web-folder/images/'.$feature->i4)}}" alt="">
                    </div>
                    <br><br><br>
                    <div class="form-control">
                        <label for="title">Image:</label>
                        <input type="file">
                    </div>
                </div>
            </div><br>
            <div class="form-control text-center">
                <input class="btn btn-primary" type="submit">
            </div>
        </div>

    </div>
@endsection