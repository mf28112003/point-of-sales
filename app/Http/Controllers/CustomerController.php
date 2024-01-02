<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){


        // $data['list_customer'] = User::select('id', 'nama', 'email') ->get();
        $data['list_customer'] = Customer::all();

        return view('Customer.index', $data);
    }

    

    function create(){
        return view('customer.create');
    }

    public function store()
    {
    
        $customer = new Customer;
        $customer->nama = request('nama');
        $customer->user_id = request('user_id');
        $customer->email_id = request('email_id');
        $customer->alamat = request('alamat');
        $customer-> save();

        return redirect('admin/customer');
    }

    function show(customer $customer)
    {
        $data['customer'] = $customer;
        return view('customer.show', $data);
    }

    function edit(customer $customer)
    {
        $data['customer'] = $customer;
        return view('customer.edit', $data);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('admin/customer');
    }

}
