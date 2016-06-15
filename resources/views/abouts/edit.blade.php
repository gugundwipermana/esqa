@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit About</div>

                <div class="panel-body">
                    
                    {!! Form::model($about, ['method' => 'PATCH', 'action' => ['AboutsController@update', $about->id], 'files' => true]) !!}

                      @include('abouts.form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
