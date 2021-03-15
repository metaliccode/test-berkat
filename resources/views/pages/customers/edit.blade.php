@extends('layouts.default')

@section('content')

    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="box-title">Update Data Pelanggan <small>{{ $item->name }}</small></h4>
                    </div>
                    <div class="card-body">
                        <form class="col-12" method="POST" action="{{ route('customers.update', $item->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>Nama Pelanggan</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" 
                                        name="name" value="{{ old('name') ? old('name') : $item->name }}">
                                        @error('name')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                            </div>

                            <div class="row">
                                  <div class="col-md-6 form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" 
                                            name="email" value="{{ old('email') ? old('email') : $item->email }}">
                                            @error('email')
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                  </div>

                                  <div class="col-md-6 form-group">
                                    <label>No. Handphone</label>
                                        <input type="text" class="form-control @error('number') is-invalid @enderror" id="number" 
                                                name="number" value="{{ old('number') ? old('number') : $item->number }}">
                                        @error('number')
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                </div>
                            </div>            

                            <div class="form-group">
                                <label>Alamat</label>
                                    <textarea class="form-control @error('address') is-invalid @enderror" id="address" rows="3" 
                                            name="address" value="{{ old('address') ? old('address') : $item->address }}">
                                            {{ old('address') ? old('address') : $item->address }}
                                    </textarea>
                                    @error('address')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                            </div> 
       
                            <button type="submit" class="btn btn-primary">Ubah Data</button>
                        </form>  
                    </div>
                </div> 
            </div>         
        </div>
    </div>    
@endsection