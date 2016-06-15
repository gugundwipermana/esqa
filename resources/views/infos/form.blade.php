<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug']) !!}
</div>

<div class="form-group">
    {!! Form::label('name', 'Title') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}    
</div>

<div class="form-group">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}    
</div>

<div class="form-group">
    {!! Form::label('image', 'Image') !!}
    {!! Form::file('image', ['class' => 'form-control']) !!}    

    <p class="help-block">Size must , Max size 2MB</p>
</div>
<hr/>
<button type="submit" class="btn btn-primary">SAVE</button>
<a href="{{ url('/admin/infos') }}" class="btn btn-default">CANCEL</a>