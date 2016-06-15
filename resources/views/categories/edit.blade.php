@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Category</div>

                <div class="panel-body">
                    
                    {!! Form::model($category, ['method' => 'PATCH', 'action' => ['CategoriesController@update', $category->id], 'files' => true]) !!}

                      @include('categories.form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
