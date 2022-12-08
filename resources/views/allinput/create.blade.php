@extends('layouts.admin')

@section('pagetitle')
    Add Form
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-info">Add Form</h6>
            <a href="{{url('allinput')}}" class="btn btn-info btn-circle btn-sm" title="Back to Form List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'allinput.store','class'=>'user','enctype'=>'multipart/form-data'])}}
            @include('allinput.form')

            <div class="form-group">
                {!! Form::submit('Add Input Type', ['class'=>'btn btn-info btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection