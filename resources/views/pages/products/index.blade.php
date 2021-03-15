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
                    <h4 class="box-title">List Data Produk</h4>
                </div>
                <div class="card-body--">
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>      
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>
                                        <img src="{{url($item->photo)}}" alt="" width="auto" height="40">  
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>
                                         {{--  <a href="{{ route('products.gallery')}}" class="btn btn-info btn-sm">
                                             <i class="fa fa-picture-o"></i>
                                         </a>  --}}
                                         <a href="{{ route('products.edit', $item->id)}}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ route('products.destroy', $item->id) }}" method="post" class="d-inline">
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