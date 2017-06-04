<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends BackendController
{
    public function index() {

        return view('admin.faq.index');

    }

    public function create() {

        return view('admin.faq.create');

    }

    public function store() {

        return view('admin.faq.index');

    }

    public function edit($id) {

        return view('admin.faq.index');

    }
}
