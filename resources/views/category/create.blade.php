@extends('layouts.admin')

@section('pagetitle')
    Add Category
@endsection

  
@section('content')

@include('partial.flash')
@include('partial.error')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Category</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{url('category')}}">Back</a>
        </div>
    </div>
</div>
   
<form action="{{ route('category.store') }}" method="POST">
    @csrf
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 pt-2">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection