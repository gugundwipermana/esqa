@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Article</div>

                <div class="panel-body">
                    
                    {!! Form::model($info, ['method' => 'PATCH', 'action' => ['InfosController@update', $info->id], 'files' => true]) !!}

                      @include('infos.form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
