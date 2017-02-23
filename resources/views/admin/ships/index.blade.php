@extends('layout.admin')

@section('content')
    <div class="page-header">
        <h1>Ships</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ORDER_ID</th>
                        <th>ORDER_ID</th>
                        <th>NUMBER_CV_PA71</th>
                        <th>NUMBER_NEWS</th>
                        <th>NUMBER_PAGE</th>
                        <th>FILE_NAME</th>
                        <th>RECEIVE_NAME</th>
                        <th>DATE_SUBMIT</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($ships as $ship)
                <tr>
                    <td>{{$ship->id}}</td>
                    <td>{{$ship->order_id}}</td>
                    <td>{{$ship->order_id}}</td>
                    <td>{{$ship->number_cv_pa71}}</td>
                    <td>{{$ship->number_news}}</td>
                    <td>{{$ship->number_page}}</td>
                    <td>{{$ship->file_name}}</td>
                    <td>{{$ship->receive_name}}</td>
                    <td>{{$ship->date_submit}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ action('Admin\ShipController@show', $ship->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ action('Admin\ShipController@edit', $ship->id) }}">Edit</a>
                        <form action="{{ action('Admin\ShipController@destroy', $ship->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ action('Admin\ShipController@create') }}">Create</a>
        </div>
    </div>


@endsection