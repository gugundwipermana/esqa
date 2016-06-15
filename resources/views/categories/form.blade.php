<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug']) !!}
</div>

<div class="form-group">
    {!! Form::label('name', 'Category Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Category Name']) !!}    
</div>
<hr/>
<button type="submit" class="btn btn-primary">SAVE</button>
<a href="{{ url('/admin/categories') }}" class="btn btn-default">CANCEL</a>