@extends('layouts.default')

@section('content')
<div class="orders">
    <div class="row">
        <div class="col-xl-12">
          @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
          @endif
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">List Data Pelanggan</h4>
                </div>
                <div class="card-body--">
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Transaction ID</th>
                                    <th>Customers ID</th>
                                    <th>Products ID</th>
                                    <th>Transaction Total</th>
                                    <th>Transaction Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>            
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->uuid }}</td>
                                    <td>{{ $item->customers_id }}</td>
                                    <td>{{ $item->products_id }}</td>
                                    <td>{{ $item->transaction_total }}</td>
                                    <td>
                                        @if($item->transaction_status == 'PENDING')
                                          <span class="badge badge-info">
                                        @elseif($item->transaction_status == 'SUCCESS')
                                          <span class="badge badge-success">
                                        @elseif($item->transaction_status == 'FAILED')
                                          <span class="badge badge-warning">
                                        @else
                                          <span>
                                        @endif
                                          {{ $item->transaction_status }}
                                          </span>
                                      </td>
                                      <td>
                                        @if($item->transaction_status == 'PENDING')
                                          {{--  <a href="{{ route('transactions.status', $item->id) }}?status=SUCCESS" class="btn btn-success btn-sm">
                                            <i class="fa fa-check"></i>
                                          </a>
                                          <a href="{{ route('transactions.status', $item->id) }}?status=FAILED" class="btn btn-warning btn-sm">
                                            <i class="fa fa-times"></i>
                                          </a>  --}}
                                        @endif
                                        <a href="#mymodal"
                                          data-remote="{{ route('transactions.show', $item->id) }}"
                                          data-toggle="modal"
                                          data-target="#mymodal"
                                          data-title="Detail Transaksi {{ $item->uuid }}"
                                          class="btn btn-info btn-sm">
                                          <i class="fa fa-eye"></i>
                                        </a>
                                        {{--  <a href="{{ route('transactions.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                          <i class="fa fa-pencil"></i>
                                        </a>  --}}
                                        <form action="{{ route('transactions.destroy', $item->id) }}" 
                                              method="post" 
                                              class="d-inline">
                                          @csrf
                                          @method('delete')
                                          <button class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                          </button>
                                        </form>
                                      </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center p-5">
                                            Data tidak tersedia !
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
    
@endsection