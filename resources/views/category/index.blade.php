@extends('layouts.admin')

@section('pagetitle')
    Category
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Category List</h2>
            </div>
            <div class="pull-right pb-2">
                <a class="btn btn-success" href="{{ route('category.create') }}"> Create New Category</a>
            </div>
        </div>
    </div>

    @include('partial.flash')
    @include('partial.error')
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 1;
        @endphp
        @foreach ($categories as $category)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->detail }}</td>
            <td>
                <form action="{{ route('category.destroy',$category->id) }}" method="POST">
   
                    <a class="btn btn-info btn-sm" href="{{ route('category.show',$category->id) }}">Show</a>
    
                    <a class="btn btn-primary btn-sm" href="{{ route('category.edit',$category->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $categories->links() !!}
      
@endsection