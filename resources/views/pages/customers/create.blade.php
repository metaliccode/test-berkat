@extends('layouts.default')

@section('content')

    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="box-title">Tambah Data Pelanggan</h4>
                    </div>
                    <div class="card-body">
                        <form class="col-12" method="POST" action="{{ route('customers.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Nama Pelanggan</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukan Nama" name="name" value="{{old('name')}}">
                                    @error('name')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                            </div>

                            <div class="row">
                                  <div class="col-md-6 form-group">
                                      <label>Email</label>
                                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" name="email" value="{{old('email')}}">
                                        @error('email')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                  </div>
                                  <div class="col-md-6 form-group">
                                    <label>No. Handphone</label>
                                    <input type="text" class="form-control @error('number') is-invalid @enderror" id="number" placeholder="Masukan No. Handphone" name="number" value="{{old('number')}}">
                                        @error('number')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                </div>
                            </div>

                            

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" id="address" rows="3" name="address" value="{{old('address')}}"></textarea>
                                @error('address')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div> 
       
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </form>  
                    </div>
                </div> 
            </div>         
        </div>
    </div>    
@endsection