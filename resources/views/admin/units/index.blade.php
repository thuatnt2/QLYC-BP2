@extends('layout.admin')

@section('content')
    <div class="page-header">
        <h1>Units</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>SYMBOL</th>
                        <th>DESCRIPTION</th>
                        <th>BLOCK</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($units as $unit)
                <tr>
                    <td>{{$unit->id}}</td>
                    <td>{{$unit->symbol}}</td>
                    <td>{{$unit->description}}</td>
                    <td>{{$unit->block}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ action('Admin\UnitController@show', $unit->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ action('Admin\UnitController@edit', $unit->id) }}">Edit</a>
                        <form action="{{ action('Admin\UnitController@destroy', $unit->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> <button class="btn btn-danger" type="submit">Delete</button></form>
                    </td>
                </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ action('Admin\UnitController@create') }}">Create</a>
        </div>
    </div>


@endsection