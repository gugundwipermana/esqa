@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">categories</div>

                <div class="panel-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Slug</th>
                          <th>Name</th>
                          <th style="width: 100px"></th>
                        </tr>
                      </thead>
                      <tbody>

                    {{--*/ $no = 1 /*--}}
                    @foreach($categories as $category)
                        
                        <tr>
                          <td>{{ $no }}</td> 
                          <td>{{ $category->slug }}</td>
                          <td>{{ $category->name }}</td>
                          <td>
                            <div class="form-inline">
                              <div class="form-group">
                                <a href="{{ url('categories', $category->id) }}/edit" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                              </div>
                              <div class="form-group">
                                {!! Form::open(['method' => 'DELETE', 'route' => ['admin.categories.destroy', $category->id]]) !!}

                                  <button type="submit" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete?')" ><i class="fa fa-trash-o"></i></button>

                                {!! Form::close() !!}
                              </div>
                            </div>
                          </td>
                        </tr>

                    {{--*/ $no++ /*--}}
                    @endforeach
                      
                      </tbody>
                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
