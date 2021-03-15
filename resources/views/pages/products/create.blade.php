@extends('layouts.default')

@section('content')

    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="box-title">Tambah Data Produk</h4>
                    </div>
                    <div class="card-body">
                        <form class="col-12" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukan Nama" name="name" value="{{old('name')}}">
                                    @error('name')
                                      <div id="validationServer03Feedback" class="invalid-feedback">
                                          {{$message}}
                                      </div>
                                    @enderror
                                  </div>
                                  <div class="col-md-6 form-group">
                                      <label>Tipe Produk</label>
                                      <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" placeholder="Masukan Tipe" name="type" value="{{old('type')}}">
                                      @error('type')
                                      <div id="validationServer03Feedback" class="invalid-feedback">
                                          {{$message}}
                                      </div>
                                      @enderror
                                  </div>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi Produk</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3" name="description" value="{{old('description')}}"></textarea>
                                @error('description')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-3 form-group">
                                    <label>Harga</label>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="Masukan Harga" name="price" value="{{old('price')}}">
                                    @error('price')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                  @enderror
                                </div>

                                <div class="col-md-3 form-group">
                                    <label>Kuantitas</label>
                                    <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity" placeholder="Masukan Kuantitas" name="quantity" value="{{old('quantity')}}">
                                    @error('quantity')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                  @enderror
                                </div>
{{--  
                                <div class="col-md-3 form-group">
                                    <label>gambar</label>
                                    <input type="text" class="form-control @error('photo') is-invalid @enderror" id="photo" placeholder="Masukan Kuantitas" name="photo" value="{{old('photo')}}">
                                    @error('photo')
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                  @enderror
                                </div>  --}}

                                <div class="col-md-6 form-group">
                                    <label>Photo</label>
                                    <input type="file" class="form-control-file @error('photo') is-invalid @enderror" id="photo" placeholder="Masukan photo" name="photo" value="{{old('photo')}}">
                                    @error('photo')
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