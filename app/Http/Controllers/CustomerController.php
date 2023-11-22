<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\User;

class CustomerController extends Controller
{
    public function index(){


        $data['list_customer'] = User::select('id', 'name', 'email') ->get();
        $data['list_customer'] = Customer::get();

        return view('Customer.index', $data);
    }

    

    function create(){
        return view('customer.create');
    }

    public function store(Request $s)
    {
    
        $customer = new Customer;
        $customer->id = request('id');
        $customer->email_id = request('email_id');

        return redirect('customer');
    }

    function show(customer $customer)
    {
        $data['customer'] = $customer;
        return view('customer.show', $data);
    }

}
