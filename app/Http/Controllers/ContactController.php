<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('contact', [
            'title' => 'Contact',
            'name' => 'Giga Samesta',
            'class' => '11 PPLG 2',
            'linkedin' => 'https://www.linkedin.com/in/hafidz-giga-samesta-70a2a92a1/'
        ]);
    }
}
