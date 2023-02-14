<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::all();
        // dd($addresses);
        return view('addresses.index', ['addresses' => $addresses]);
    }
}
