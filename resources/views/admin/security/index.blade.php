@extends('admin.layouts.master')
@section('content')
    <div id="content" class="span10">


        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="{{route('admin.home.index')}}">Dashboard</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="{{route('admin.security.index')}}">Security</a></li>
        </ul>

        <div class="container">
            <div class="row">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="home-form span4">
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
                <div class="home-img span4">
                        <div class="form-control">
                            <label for="title">Image:</label>
                            <input type="file">
                        </div><br>
                        <div class="form-control">
                            <input class="btn btn-primary" type="submit">
                        </div>
                    </form>
                </div>
                    <div class="home-img span4">
                        <div class="form-control">
                            <label for="title">Current Image:</label>
                            <img width="200" src="{{asset('storage/web-folder/images/secure.png')}}" alt="">
                        </div><br>
                    </div>
            </div>
        </div>

    </div>
@endsection