@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">About</div>

                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-4">
                      <a href="#" class="thumbnail">
                        <img src="{{ asset('/img') }}/{!! $about->image !!}" >
                      </a>
                    </div>

                    <div class="col-md-8">{!! $about->description !!}
                    <hr/>
                    <div class="form-group">
                      <a href="{{ url('admin/abouts', $about->id) }}/edit" class="btn btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i> Edit</a>
                    </div>
                    </div>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
