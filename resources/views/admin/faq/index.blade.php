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
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Dennis Ji</td>
                            <td class="center">2012/01/01</td>
                            <td class="center">Member</td>
                            <td class="center">
                                <a class="btn btn-success" href="{{route('index')}}/#faq">
                                    <i class="halflings-icon white zoom-in"></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="halflings-icon white edit"></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="halflings-icon white trash"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
            </div>
        </div>

    </div>
@endsection