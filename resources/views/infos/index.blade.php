@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Articles</div>

                <div class="panel-body">
                    <a href="{{ url('admin/infos/create') }}">
                        <button class="btn btn-info btn-sm" data-toggle="tooltip" title="Tambah Event Baru">Add New</button>
                    </a>

                    <hr/>

                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Slug</th>
                          <th>Name</th>
                          <th>Date</th>
                          <th style="width: 100px"></th>
                        </tr>
                      </thead>
                      <tbody>

                    {{--*/ $no = 1 /*--}}
                    @foreach($infos as $info)
                        
                        <tr>
                          <td>{{ $no }}</td> 
                          <td>{{ $info->slug }}</td>
                          <td>{{ $info->name }}</td>
                          <td>{{ strtoupper(date('d F Y', strtotime($info->created_at))) }}</td>
                          <td>
                            <div class="form-inline">
                              <div class="form-group">
                                <a href="{{ url('admin/infos', $info->id) }}/edit" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                              </div>
                              <div class="form-group">
                                {!! Form::open(['method' => 'DELETE', 'route' => ['admin.infos.destroy', $info->id]]) !!}

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
