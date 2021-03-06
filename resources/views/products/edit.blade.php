@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Product</div>

                <div class="panel-body">
                    
                    {!! Form::model($product, ['method' => 'PATCH', 'action' => ['ProductsController@update', $product->id], 'files' => true]) !!}

                      @include('products.form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
