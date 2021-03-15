@extends('layouts.default')

@section('content')

    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="box-title">Tambah Data Transaksi</h4>
                    </div>
                    <div class="card-body">
                        <form class="col-12" method="POST" action="{{ route('salesorders.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="customers_id">Nama Pelanggan</label>
                                <select name="customers_id"  
                                        class="form-control @error('customers_id') is-invalid @enderror">
        
                                    @foreach ($customers as $customer)
                                    <option value="{{ $customer->id}}">
                                        {{$customer->name}}
                                    </option>                                
                                    @endforeach
                                </select>
        
                                @error('customers_id') <div class="text-muted">{{ $message }}</div> @enderror
                            </div>

                            <div class="form-group">
                                <label for="products_id">Nama Produk</label>
                                <select name="products_id"  
                                        class="form-control @error('products_id') is-invalid @enderror">
        
                                    @foreach ($products as $product)
                                    <option value="{{ $product->id}}">
                                        {{$product->name}}
                                    </option>                                
                                    @endforeach
                                </select>
        
                                @error('products_id') <div class="text-muted">{{ $message }}</div> @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>Transaction Total</label>
                                    <input type="number" class="form-control @error('transaction_total') is-invalid @enderror" id="transaction_total" name="transaction_total" value="{{old('transaction_total')}}">
                                        @error('transaction_total')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Transaction Status</label>
                                    <select name="transaction_status" id="transaction_status"
                                        class="form-control @error('transaction_total') is-invalid @enderror">
                                        <option value="PENDING">PENDING</option>
                                        <option value="SUCCESS">SUCCESS</option>
                                        <option value="FAILED">FAILED</option>
                                    </select>
                                    @error('transaction_total')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                                    
       
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </form>  
                    </div>
                </div> 
            </div>         
        </div>
    </div>    
@endsection