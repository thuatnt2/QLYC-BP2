@extends('layout.admin')

@section('content')
    <div class="page-header">
        <h1>Ships / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$ship->id}}</p>
                </div>
                <div class="form-group">
                     <label for="order_id">ORDER_ID</label>
                     <p class="form-control-static">{{$ship->order_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="order_id">ORDER_ID</label>
                     <p class="form-control-static">{{$ship->order_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="number_cv_pa71">NUMBER_CV_PA71</label>
                     <p class="form-control-static">{{$ship->number_cv_pa71}}</p>
                </div>
                    <div class="form-group">
                     <label for="number_news">NUMBER_NEWS</label>
                     <p class="form-control-static">{{$ship->number_news}}</p>
                </div>
                    <div class="form-group">
                     <label for="number_page">NUMBER_PAGE</label>
                     <p class="form-control-static">{{$ship->number_page}}</p>
                </div>
                    <div class="form-group">
                     <label for="file_name">FILE_NAME</label>
                     <p class="form-control-static">{{$ship->file_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="receive_name">RECEIVE_NAME</label>
                     <p class="form-control-static">{{$ship->receive_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="date_submit">DATE_SUBMIT</label>
                     <p class="form-control-static">{{$ship->date_submit}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ action('Admin\ShipController@index') }}">Back</a>
            <a class="btn btn-warning" href="{{ action('Admin\ShipController@edit', $ship->id) }}">Edit</a>
            <form action="{{ action('Admin\ShipController@destroy', $ship->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection