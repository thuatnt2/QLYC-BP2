@extends('layout.admin')

@section('content')
    <div class="page-header">
        <h1>Orders</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>USER_ID</th>
                        <th>NUMBER_CV</th>
                        <th>NUMBER_CV_PA71</th>
                        <th>ORDER_NAME</th>
                        <th>ORDER_PHONE</th>
                        <th>CUSTOMER_NAME</th>
                        <th>CUSTOMER_PHONE</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->user_id}}</td>
                    <td>{{$order->number_cv}}</td>
                    <td>{{$order->number_cv_pa71}}</td>
                    <td>{{$order->order_name}}</td>
                    <td>{{$order->order_phone}}</td>
                    <td>{{$order->customer_name}}</td>
                    <td>{{$order->customer_phone}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ action('Admin\OrderController@show', $order->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ action('Admin\OrderController@edit', $order->id) }}">Edit</a>
                        <form action="{{ action('Admin\OrderController@destroy', $order->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ action('Admin\OrderController@create') }}">Create</a>
        </div>
    </div>


@endsection