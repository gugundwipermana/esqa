@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
                    <a href="{{ url('admin/products/create') }}">
                        <button class="btn btn-info btn-sm" data-toggle="tooltip" title="Tambah Event Baru">Add New</button>
                    </a>

                    <hr/>

                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Slug</th>
                          <th>Name</th>
                          <th>Sub Name</th>
                          <th>Price</th>
                          <th style="width: 100px"></th>
                        </tr>
                      </thead>
                      <tbody>

                    {{--*/ $no = 1 /*--}}
                    @foreach($products as $product)
                        
                        <tr>
                          <td>{{ $no }}</td> 
                          <td>{{ $product->slug }}</td>
                          <td>{{ $product->name }}</td>
                          <td>{{ $product->subname }}</td>
                          <td>{{ $product->price }}</td>
                          <td>
                            <div class="form-inline">
                              <div class="form-group">
                                <a href="{{ url('admin/products', $product->id) }}/edit" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                              </div>
                              <div class="form-group">
                                {!! Form::open(['method' => 'DELETE', 'route' => ['admin.products.destroy', $product->id]]) !!}

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
