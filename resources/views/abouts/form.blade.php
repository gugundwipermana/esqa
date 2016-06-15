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
<a href="{{ url('/admin/abouts/1') }}" class="btn btn-default">CANCEL</a>