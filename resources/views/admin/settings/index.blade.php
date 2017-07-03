@extends('admin.layouts.master')
@section('content')
    <div id="content" class="span10">


        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="{{route('admin.home.index')}}">Dashboard</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="{{route('admin.settings.index')}}">Settings</a></li>
        </ul>

        <div class="container">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="row">
                <div class="home-form span4">
                    <form action="{{route('admin.settings.update')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-control">
                            <label for="title">Title:</label>
                            <input class="span12" type="text" value="{{$setting->title}}">
                        </div>
                        <div class="form-control">
                            <label for="title">Description:</label>
                            <textarea class="span12" name="desc" id="desc" cols="30" rows="10">{{$setting->desc}}</textarea>
                        </div>
                        <div class="form-control">
                            <label for="title">Keywords:</label>
                            <input class="span12" type="text" value="{{$setting->keywords}}">
                        </div>
                        <div class="form-control">
                            <label for="title">Footer:</label>
                            <input class="span12" type="text" value="{{$setting->footer}}">
                        </div>
                </div>
                <div class="home-form span4">
                    <div class="form-control">
                        <label for="title">Logo:</label>
                        <input class="span12" type="file" value="{{$setting->logo}}">
                    </div>
                </div>
                <div class="home-img span4">
                    <div class="form-control">
                        <label for="title">Current Logo:</label>
                        <img width="180" src="{{asset('storage/app/public/web-folder/images/'.$setting->logo)}}">
                    </div>
                </div>
                </div>
            </div>
        <div class="form-control">
            <input class="btn btn-primary" type="submit">
        </div>
        </form>
        </div>
    </div>
@endsection