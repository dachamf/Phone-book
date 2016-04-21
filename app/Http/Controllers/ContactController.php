<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{
    public function getContactIndex()
    {
        //Fetch posts and paginate.
        return view('frontend.contact.index');
    }

    public function getContactAdd()
    {
        //Fetch posts and paginate.
        return view('frontend.contact.add');
    }
}
