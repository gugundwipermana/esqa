@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Contact</div>

                <div class="panel-body">
                  <h2>Contact Us</h2>
                  {!! $contact->contact_us !!}
                    
                   <h2>Head Office</h2>
                  {!! $contact->head_office !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
