@extends('layout.admin')

@section('content')
    <div class="page-header">
        <h1>Purposes / Edit </h1>
    </div>

    {!! \App\Libs\ErrorDisplay::getInstance()->displayAll($errors) !!}

    <div class="row">
        <div class="col-md-12">

            <form action="{{ action('Admin\PurposeController@update', $purpose->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$purpose->id}}</p>
                </div>
                <div class="form-group">
                     <label for="symbol">SYMBOL</label>
                     <input type="text" name="symbol" class="form-control" value="{{ \App\Libs\ValueHelper::getOldInput($purpose,'symbol') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "symbol") !!}
                </div>
                    <div class="form-group">
                     <label for="comment">COMMENT</label>
                     <textarea name="comment" class="form-control">{{ \App\Libs\ValueHelper::getOldInput($purpose,'comment') }}</textarea>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "comment") !!}
                </div>



            <a class="btn btn-default" href="{{ action('Admin\PurposeController@index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection