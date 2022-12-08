@extends('layouts.admin')

@section('pagetitle')
    Update Tag
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Tag</h6>
            <a href="{{url('tag')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Tag List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($tag, ['method' => 'put','enctype'=>'multipart/form-data','class'=>'user','route' => ['tag.update', $tag->id]]) !!}
            @include('tag.form')

            <div class="form-group">
                {!! Form::submit('Update Tag', ['class'=>'btn btn-primary btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

