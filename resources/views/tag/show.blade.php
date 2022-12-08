@extends('layouts.admin')

@section('pagetitle')
    Tag Details
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Tag Details</h6>
        <a href="{{url('tag')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Tag List">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <tr class="table-bordered">
                <th>Id</th>
                <td>{{ $tag->id }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Name</th>
                <td>{{ $tag->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Tag Number</th>
                <td>{{ $tag->detail }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection