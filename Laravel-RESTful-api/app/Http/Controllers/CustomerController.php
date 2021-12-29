<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    protected $customer;

    public function __construct(Customer $customer)
    {
//        $customer = new Customer();
        $this->customer = $customer;
    }

    public function index()
    {
        $customer = $this->customer->get();
        return response()->json($customer,200);
    }

    public function detail($id)
    {
        $customer = $this->customer->find($id);
        $status = 200;
        if(!$customer){
            $status = 404;
        }
        return response()->json($customer,$status);

    }
}
