<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    public function index(Request $request)
    {
        # code...
        $clientes = User::where('profile',4)
        ->paginate(10);

        return view('admin.clients.index',compact('clientes'));
    }
}
