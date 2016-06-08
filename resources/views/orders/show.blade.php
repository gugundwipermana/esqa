@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Order Detail</div>

                <div class="panel-body">
                <p>{{ strtoupper(date('d F Y', strtotime($order->created_at))) }}</p>
                  <p>{{ $order->user->name }}</p>
                  <h3>{{ $order->code }}</h3>
                  <hr/>
                  <p>{{ $order->address }}</p>
                  <hr/>

                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Product</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>

                    {{--*/ $no = 1 /*--}}
                    {{--*/ $total = 0 /*--}}
                    @foreach($order->orderdetails as $detail)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $detail->product->name }}</td>
                            <td>{{ $detail->product->price }}</td>
                            <td>{{ $detail->quantity }}</td>
                            <td>{{ $detail->product->price * $detail->quantity }}</td>
                        </tr>
                    {{--*/ $total = $total + ($detail->product->price * $detail->quantity) /*--}}
                    {{--*/ $no++ /*--}}
                    @endforeach

                        <tr>
                            <td colspan="4"><h4>Total</h4></td>
                            <td><h4>{{ $total }}</h4></td>
                        </tr>

                    </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
