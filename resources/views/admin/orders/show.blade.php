@extends('layout.admin')

@section('content')
    <div class="page-header">
        <h1>Orders / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$order->id}}</p>
                </div>
                <div class="form-group">
                     <label for="user_id">USER_ID</label>
                     <p class="form-control-static">{{$order->user_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="number_cv">NUMBER_CV</label>
                     <p class="form-control-static">{{$order->number_cv}}</p>
                </div>
                    <div class="form-group">
                     <label for="number_cv_pa71">NUMBER_CV_PA71</label>
                     <p class="form-control-static">{{$order->number_cv_pa71}}</p>
                </div>
                    <div class="form-group">
                     <label for="order_name">ORDER_NAME</label>
                     <p class="form-control-static">{{$order->order_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="order_phone">ORDER_PHONE</label>
                     <p class="form-control-static">{{$order->order_phone}}</p>
                </div>
                    <div class="form-group">
                     <label for="customer_name">CUSTOMER_NAME</label>
                     <p class="form-control-static">{{$order->customer_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="customer_phone">CUSTOMER_PHONE</label>
                     <p class="form-control-static">{{$order->customer_phone}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ action('Admin\OrderController@index') }}">Back</a>
            <a class="btn btn-warning" href="{{ action('Admin\OrderController@edit', $order->id) }}">Edit</a>
            <form action="{{ action('Admin\OrderController@destroy', $order->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection