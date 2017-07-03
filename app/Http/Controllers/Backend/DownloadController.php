<?php

namespace App\Http\Controllers\Backend;

use App\Download;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DownloadController extends BackendController
{
    public function index() {

        $android = Download::find(1);
        $iphone = Download::find(2);
        $windows = Download::find(3);
        return view('admin.download.index', compact('android','iphone','windows'));

    }

    public function update() {

        return redirect()->route('admin.download.index')->with(['message' => 'You are in demo account']);

    }
}
