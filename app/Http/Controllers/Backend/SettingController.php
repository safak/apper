<?php

namespace App\Http\Controllers\Backend;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends BackendController
{
    public function index() {

        $setting = Setting::find(1);
        return view('admin.settings.index', compact('setting'));

    }

    public function update(){

        return redirect()->route('admin.settings.index')->with(['message' => 'You are in demo account']);

    }
}
