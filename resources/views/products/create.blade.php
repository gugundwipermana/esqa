@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add Products</div>

                <div class="panel-body">
                    
                    {!! Form::open(['url' => 'products', 'files' => true]) !!}

                      @include('products.form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
