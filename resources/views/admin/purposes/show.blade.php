@extends('layout.admin')

@section('content')
    <div class="page-header">
        <h1>Purposes / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$purpose->id}}</p>
                </div>
                <div class="form-group">
                     <label for="symbol">SYMBOL</label>
                     <p class="form-control-static">{{$purpose->symbol}}</p>
                </div>
                    <div class="form-group">
                     <label for="comment">COMMENT</label>
                     <p class="form-control-static">{{$purpose->comment}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ action('Admin\PurposeController@index') }}">Back</a>
            <a class="btn btn-warning" href="{{ action('Admin\PurposeController@edit', $purpose->id) }}">Edit</a>
            <form action="{{ action('Admin\PurposeController@destroy', $purpose->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection