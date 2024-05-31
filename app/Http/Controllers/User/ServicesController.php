<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {

        $services = Service::all();

        return view('user.services.index', compact('services'));
    }

    public function details($id)
    {
        $allServices = Service::all(); // Get all services for the sidebar
        $service = Service::findOrFail($id);
        return view('user.services.service', compact('service','allServices'));
    }
    
}
