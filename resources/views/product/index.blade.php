@extends('layouts.admin')

@section('pagetitle')
    Product
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Product List</h6>
        <div class="">
            <h6>
                <a href="{{url('product/create')}}">
                    <i class="fas fa-plus fa-sm fa-fw mr-2 text-primary"></i>
                    Add
                </a>
            </h6>
        </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Barcode</th>
                        <th>Feature</th>
                        <th>Description</th>
                        <th>Regular Price</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Barcode</th>
                        <th>Feature</th>
                        <th>Description</th>
                        <th>Regular Price</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($allproduct as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->barcode}}</td>
                        <td>{{$product->feature}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->regular_price}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>
                            <a href="{{url('product/'.$product->id.'/edit')}}" class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            {{-- delete --}}
                            <form action="{{url('product/'.$product->id)}}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-circle btn-sm" onclick="return confirm('Are you sure to delete?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                            {{-- show --}}
                            <a href="{{url('product/'.$product->id)}}" class="btn btn-info btn-circle btn-sm">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@section('script')
    <script>
    var BASE_URL = "{{url('/')}}";
        $(document).ready(function(){
            $('.delete').click(function(e){
                e.preventDefault();
                var id = $(this).val();
                // alert(id);
                // return;
                Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: 'POST',
                        url: BASE_URL + '/product_delete',
                        data: {
                            'product_id' : id,
                            'delete' : true
                        },
                        success: function(response){
                            Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        );
                        // $("#wish_table").load(location.href + " #wish_table");

                        setTimeout(function(){
                        location.reload();
                        }, 1000);
                        }
                    })   
                }
                })
            });
        });

        
    </script>
@endsection