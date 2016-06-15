@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Contact</div>

                <div class="panel-body">
                    
                    {!! Form::model($contact, ['method' => 'PATCH', 'action' => ['ContactsController@update', $contact->id], 'files' => true]) !!}

                      @include('contacts.form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
