<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use App\User;

class ResultController extends Controller
{
    public function show()
    {
        $results = Result::select('score')->where('user_id', auth()->id())->first();

        return view('result', compact('results'));
    }

    public function allShow()
    {
        $result = Result::all();
        $users = User::get();

        return view('allResult', compact('result', 'users'));
    }
}
