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
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="row">
                <div class="home-form span4">
                    <form action="{{route('admin.home.update')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-control">
                            <label for="title">Title:</label>
                            <input class="span12" type="text" value="{{$home->title}}">
                        </div>
                        <div class="form-control">
                            <label for="title">Description:</label>
                            <textarea class="span12" name="desc" id="desc" cols="30" rows="10">{{$home->desc}}</textarea>
                        </div>

                </div>
                <div class="home-img span4">
                    <div class="form-control">
                        <label for="title">Devices:</label>
                        <select name="devices" multiple id="devices">
                            <option value="">Android</option>
                            <option value="">iPhone</option>
                            <option value="">Windows</option>
                        </select>
                    </div><br>
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
                    <img width="180" src="storage/app/public/web-folder/images/{{$home->img}}">
                </div>
            </div>
        </div>
    </div>
@endsection