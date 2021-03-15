<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales_order;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // cek user admin
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $income = Sales_order::where('transaction_status', 'SUCCESS')->sum('transaction_total');
        $sales = Sales_order::count();
        $items = Sales_order::orderBy('id', 'DESC')->take(5)->get();

        return view('pages.dashboard')->with([
            'income' => $income,
            'sales' => $sales,
            'items' => $items
        ]);
    }
}
