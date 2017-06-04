@extends('admin.layouts.master')
@section('content')
    <div id="content" class="span10">


        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="{{route('admin.home.index')}}">Dashboard</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="{{route('admin.home.index')}}">Home</a></li>
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
                                <label for="title">Question:</label>
                                <input class="span12" type="text">
                            </div>
                            <div class="form-control">
                                <label for="title">Answer:</label>
                                <textarea class="span12" name="desc" id="desc" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-control">
                                <input class="btn btn-primary" type="submit">
                            </div>
                    </div>
            </div>
        </div>

    </div>
@endsection