@extends('layouts.default')

@section('content')
 
<div class="alert alert-success alert-dismissible fade show" role="alert">
    Selamat datang , <strong>{{ Auth::user()->name }} </strong> Dashboard Admin Shop !
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>

<!-- Animated -->
<div class="animated fadeIn">
    <!-- Widgets  -->
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-1">
                            <i class="pe-7s-cash"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text">Rp. <span class="count">{{$income}}</span></div>
                                <div class="stat-heading">Penghasilan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-2">
                            <i class="pe-7s-cart"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{$sales}}</span></div>
                                <div class="stat-heading">Penjualan</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Widgets -->

    <!--  /Traffic -->
    <div class="clearfix"></div>
    <!-- Orders -->
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Pembelian Terbaru </h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th>ID Transaksi</th>
                                        <th>Name</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->uuid }}</td>
                                    <td>{{ $item->customers_id }}</td>
                                    <td>{{ $item->products_id }}</td>
                                    <td>Rp. {{ $item->transaction_total }}</td>
                                    <td>
                                        @if($item->transaction_status == 'PENDING')
                                        <span class="badge badge-info">
                                        @elseif($item->transaction_status == 'SUCCESS')
                                        <span class="badge badge-success">
                                        @elseif($item->transaction_status == 'FAILED')
                                        <span class="badge badge-danger">
                                        @else
                                        <span>
                                        @endif
                                        {{ $item->transaction_status }}
                                        </span>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center p-5">
                                        Data tidak tersedia
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div> 
                    </div>
                </div>
            </div>  

            
        </div>
    </div>
    <!-- /.orders -->
<!-- /#add-category -->
</div>
<!-- .animated -->

@endsection