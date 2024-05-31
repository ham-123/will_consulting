<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RDV;
use Illuminate\Http\Request;

class AdminRDVController extends Controller
{
    public function index()
    {
        $rdvs = RDV::orderBy('created_at', 'desc')->get();
        return view('admin.rdvs.index', compact('rdvs'));
    }
}
