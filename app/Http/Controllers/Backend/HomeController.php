<?php

namespace App\Http\Controllers\Backend;

use App\Device;
use App\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends BackendController
{
    public function index() {

        $devices = Device::all();
        $home = Home::find(1);
        return view('admin.home.index', compact('home','devices'));

    }

    public function update() {

        return redirect()->route('admin.home.index')->with(['message'=> 'You are in demo account']);

    }
}
