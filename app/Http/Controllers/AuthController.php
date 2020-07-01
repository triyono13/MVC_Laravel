<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function auth(Request $request)
    {
    	$nama_depan = $request->fname;
    	$nama_belakang = $request->lname;
    	return view ('welcome', compact('nama_depan', 'nama_belakang'));
    }
}
