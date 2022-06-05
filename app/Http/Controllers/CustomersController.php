<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $customers = [
            'john doe',
            'jane done',
            'bob the builder',
            'fahim',
        ];
        return view('internals.customers',[
            'customers' => $customers,
        ]);
    }
}
