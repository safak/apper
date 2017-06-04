<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeviceController extends BackendController
{
    public function index() {

        return view('admin.devices.index');

    }
}
