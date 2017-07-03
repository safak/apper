<?php

namespace App\Http\Controllers\Backend;

use App\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends BackendController
{
    public function index() {

        $faqs = Faq::all();
        return view('admin.faq.index', compact('faqs'));

    }

    public function create() {

        return view('admin.faq.create');

    }

    public function store() {

        return redirect()->route('admin.faq.create')->with(['message'=> 'You are in demo account']);

    }

    public function edit($id) {

        return redirect()->route('admin.faq.index')->with(['message'=> 'You are in demo account']);

    }

    public function destroy($id) {

        return redirect()->route('admin.faq.index')->with(['message'=> 'You are in demo account']);

    }
}
