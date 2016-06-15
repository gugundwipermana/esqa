@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Product</div>

                <div class="panel-body">
                    
                    {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UsersController@update', $user->id], 'files' => true]) !!}

                      @include('users.form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
