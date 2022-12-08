@include('partial.flash')
@include("partial.error")

<div class="form-group">
    {!! Form::text('name', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'name', 'placeholder'=>'Name']) !!}
</div>

<div class="form-group">
    {!! Form::textarea('feature', null, ['required', 'class'=>'ckeditor form-control form-control-profile', 'id'=>'feature', 'placeholder'=>'Feature']) !!}
</div>
<div class="form-group">
    {!! Form::textarea('description', null, ['required', 'class'=>'ckeditor form-control form-control-profile', 'id'=>'description', 'placeholder'=>'Description']) !!}
</div>

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::text('regular_price', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'regular_price', 'placeholder'=>'Regular Price']) !!}
    </div>
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::text('price', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'price', 'placeholder'=>'Price']) !!}
    </div>
</div>
<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::text('discount', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'discount', 'placeholder'=>'Discount (%)']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::text('quantity', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'quantity', 'placeholder'=>'Quantity']) !!}
    </div>
</div>