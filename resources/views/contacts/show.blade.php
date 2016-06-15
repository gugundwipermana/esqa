@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Contact</div>

                <div class="panel-body">

                <div class="row">
                    <div class="col-md-4">
                      <a href="#" class="thumbnail">
                        <img src="{{ asset('/img') }}/{!! $contact->image !!}" >
                      </a>
                    </div>

                    <div class="col-md-8">
                    
                        <h2>Contact Us</h2>
                          {!! $contact->contact_us !!}
                            
                           <h2>Head Office</h2>
                          {!! $contact->head_office !!}

                          <hr/>
                          <div class="form-group">
                                <a href="{{ url('admin/contacts', $contact->id) }}/edit" class="btn btn-primary" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i> Edit</a>
                          </div>

                    </div>
                  </div>

                  


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
