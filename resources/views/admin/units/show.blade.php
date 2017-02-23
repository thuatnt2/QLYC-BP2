@extends('layout.admin')

@section('content')
    <div class="page-header">
        <h1>Units / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$unit->id}}</p>
                </div>
                <div class="form-group">
                     <label for="symbol">SYMBOL</label>
                     <p class="form-control-static">{{$unit->symbol}}</p>
                </div>
                    <div class="form-group">
                     <label for="description">DESCRIPTION</label>
                     <p class="form-control-static">{{$unit->description}}</p>
                </div>
                    <div class="form-group">
                     <label for="block">BLOCK</label>
                     <p class="form-control-static">{{$unit->block}}</p>
                </div>
            </form>



            <a class="btn btn-default" href="{{ action('Admin\UnitController@index') }}">Back</a>
            <a class="btn btn-warning" href="{{ action('Admin\UnitController@edit', $unit->id) }}">Edit</a>
            <form action="{{ action('Admin\UnitController@destroy', $unit->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"><button class="btn btn-danger" type="submit">Delete</button></form>
        </div>
    </div>


@endsection