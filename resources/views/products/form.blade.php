<div class="row">
  <div class="col-md-6">

    <div class="form-group">
        {!! Form::label('slug', 'Slug') !!}
        {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name', 'Product Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Product Name']) !!}    
    </div>

    <div class="form-group">
        {!! Form::label('subname', 'Product Subname') !!}
        {!! Form::text('subname', null, ['class' => 'form-control', 'placeholder' => 'Product Subname']) !!}    
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Category') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    </div>

  </div>
  <div class="col-md-6">


    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}    
    </div>

    <div class="form-group">
        {!! Form::label('price', 'Price') !!}
        {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Price']) !!}    
    </div>

    <div class="form-group">
        {!! Form::label('image', 'Image') !!}
        {!! Form::file('image', ['class' => 'form-control']) !!}    

        <p class="help-block">Size must , Max size 2MB</p>
    </div>


  </div>
</div>

<hr/>
<button type="submit" class="btn btn-primary">SAVE</button>
<a href="{{ url('/admin/products') }}" class="btn btn-default">CANCEL</a>