<?php

namespace App\Http\Controllers;

use App\Models\Sales_order;
use App\Models\Customer;
use App\Models\Product;

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

        return view('pages.salesorders.index')->with([
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

        return view('pages.salesorders.create')->with([
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
    public function store(Request $request)
    {
        $data = $request->all();

        $data['uuid'] = 'TRX' . mt_rand(10000, 99999) . mt_rand(100, 999);
        // $data['uuid'] = 'TRX' . mt_rand(10000, 99999) . mt_rand(100, 999);

        Sales_order::create($data);

        return redirect()->route('salesorders.index')->with('status', 'Data Transaksi Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Sales_order::findOrFail($id);
        $item->delete();

        return redirect()->route('salesorders.index')->with('status', 'Data Transaksi Berhasil Dihapus!');
    }
}
