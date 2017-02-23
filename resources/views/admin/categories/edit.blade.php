@extends('layout.admin')

@section('content')
    <div class="page-header">
        <h1>Categories / Edit </h1>
    </div>

    {!! \App\Libs\ErrorDisplay::getInstance()->displayAll($errors) !!}

    <div class="row">
        <div class="col-md-12">

            <form action="{{ action('Admin\CategoryController@update', $category->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$category->id}}</p>
                </div>
                <div class="form-group">
                     <label for="symbol">SYMBOL</label>
                     <input type="text" name="symbol" class="form-control" value="{{ \App\Libs\ValueHelper::getOldInput($category,'symbol') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "symbol") !!}
                </div>
                    <div class="form-group">
                     <label for="description">DESCRIPTION</label>
                     <textarea name="description" class="form-control">{{ \App\Libs\ValueHelper::getOldInput($category,'description') }}</textarea>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "description") !!}
                </div>



            <a class="btn btn-default" href="{{ action('Admin\CategoryController@index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Save</a>
            </form>
        </div>
    </div>


@endsection