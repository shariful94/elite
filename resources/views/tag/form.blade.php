@include('partial.flash')
@include("partial.error")

<div class="form-group pb-3">
    {!! Form::label('name', 'Name', ['class' => 'form-label']); !!}
    {!! Form::text('name', null, ['required', 'class'=>'form-control', 'id'=>'name', 'placeholder'=>'Tag Name']) !!}
</div>
<div class="form-group pb-3">
    {!! Form::label('detail', 'Detail', ['class' => 'form-label']); !!}
    {!! Form::text('detail', null, ['class'=>'form-control', 'id'=>'detail', 'placeholder'=>'Tag Detail']) !!}
</div>
