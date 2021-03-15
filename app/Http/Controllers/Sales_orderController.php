<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Sales_order;
use App\Http\Requests\Sales_orderRequest;
use Illuminate\Http\Request;

class Sales_orderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Sales_order::all();

        return view('pages.transactions.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $customers = Customer::all();

        return view('pages.transactions.create')->with([
            'products' => $products,
            'customers' => $customers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Sales_orderRequest $request)
    {
        //membuat requst ketentuan yang ada di Request
        $data = $request->all();

        //insert data ke table
        Sales_order::create($data);
        return redirect()->route('transactions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sales_order  $sales_order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Sales_order::with('details.product')->findOrFail($id);

        return view('pages.transactions.show')->with([
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sales_order  $sales_order
     * @return \Illuminate\Http\Response
     */
    public function edit(Sales_order $sales_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sales_order  $sales_order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales_order $sales_order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sales_order  $sales_order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales_order $sales_order)
    {
        //
    }
}
