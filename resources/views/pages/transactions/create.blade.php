@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Foto Barang</strong>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('transactions.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>UUID Transaksi</label>
                        <input type="text" class="form-control @error('uuid') is-invalid @enderror" id="uuid" placeholder="Masukan UUID Transaksi" 
                            name="uuid" value="{{old('uuid')}}">
                            @error('uuid')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                    </div> 
                    <div class="form-group">
                        <label for="products_id">Nama Barang</label>
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
                    <div class="form-group">
                        <label for="customers_id">Nama Pelanggan</label>
                        <select name="customers_id"  
                                class="form-control @error('customers_id') is-invalid @enderror">

                            @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">
                                {{$customer->name}}
                            </option>                                
                            @endforeach
                        </select>

                        @error('customers_id') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                   
                    <div class="form-group">
                        <label for="transaction_status">Example select</label>
                        <select class="form-control" id="transaction_status" name="transaction_status">
                          <option value="PENDING">PENDING</option>
                          <option value="SUCCESS">SUCCESS</option>
                          <option value="FAILED">FAILED</option>
                        </select>
                        @error('transaction_status') <div class="text-muted">{{ $message }}</div> @enderror
                      </div>

                    <div class="form-group">
                        <label>Total Transaksi</label>
                        <input type="number" 
                            class="form-control @error('transaction_total') is-invalid @enderror" id="transaction_total" 
                            placeholder="Masukan Total" transaction_total="transaction_total" 
                            value="{{old('transaction_total')}}"
                            name="transaction_total"
                            >
                            @error('transaction_total')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                    </div>  
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">
                            Tambah Transaksi
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection