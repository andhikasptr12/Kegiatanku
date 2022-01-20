<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $data = [
            'kegiatans'=>Activity::latest()->paginate(3),
            'activitys'=>Activity::all()->all(),
        ];

        return view('index', $data);
    }
}
