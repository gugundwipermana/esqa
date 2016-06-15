<div class="form-group">
    {!! Form::label('contact_us', 'Contact Us') !!}
    {!! Form::textarea('contact_us', null, ['class' => 'form-control']) !!}    
</div>

<div class="form-group">
    {!! Form::label('head_office', 'Head Office') !!}
    {!! Form::textarea('head_office', null, ['class' => 'form-control']) !!}    
</div>

<div class="form-group">
    {!! Form::label('image', 'Image') !!}
    {!! Form::file('image', ['class' => 'form-control']) !!}    

    <p class="help-block">Size must , Max size 2MB</p>
</div>

<hr/>
<button type="submit" class="btn btn-primary">SAVE</button>
<a href="{{ url('/admin/contacts/1') }}" class="btn btn-default">CANCEL</a>