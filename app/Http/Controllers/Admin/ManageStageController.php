<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageStageController extends Controller
{
    public function index()
    {
        return view('admin.manage_stage');
    }

    public function edit()
    {
        return view('admin.edit_stage');
    }
}
