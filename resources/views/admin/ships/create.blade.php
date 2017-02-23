@extends('layout.admin')

@section('content')
    <div class="page-header">
        <h1>Ships / Create </h1>
    </div>

    {!! \App\Libs\ErrorDisplay::getInstance()->displayAll($errors) !!}

    <div class="row">
        <div class="col-md-12">

            <form action="{{ action('Admin\ShipController@store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="order_id">ORDER_ID</label>
                     <input type="text" name="order_id" class="form-control" value="{{  Session::getOldInput('order_id') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "order_id") !!}
                </div>
                    <div class="form-group">
                     <label for="order_id">ORDER_ID</label>
                     <input type="text" name="order_id" class="form-control" value="{{  Session::getOldInput('order_id') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "order_id") !!}
                </div>
                    <div class="form-group">
                     <label for="number_cv_pa71">NUMBER_CV_PA71</label>
                     <input type="text" name="number_cv_pa71" class="form-control" value="{{  Session::getOldInput('number_cv_pa71') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "number_cv_pa71") !!}
                </div>
                    <div class="form-group">
                     <label for="number_news">NUMBER_NEWS</label>
                     <input type="text" name="number_news" class="form-control" value="{{  Session::getOldInput('number_news') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "number_news") !!}
                </div>
                    <div class="form-group">
                     <label for="number_page">NUMBER_PAGE</label>
                     <input type="text" name="number_page" class="form-control" value="{{  Session::getOldInput('number_page') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "number_page") !!}
                </div>
                    <div class="form-group">
                     <label for="file_name">FILE_NAME</label>
                     <input type="text" name="file_name" class="form-control" value="{{  Session::getOldInput('file_name') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "file_name") !!}
                </div>
                    <div class="form-group">
                     <label for="receive_name">RECEIVE_NAME</label>
                     <input type="text" name="receive_name" class="form-control" value="{{  Session::getOldInput('receive_name') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "receive_name") !!}
                </div>
                    <div class="form-group">
                     <label for="date_submit">DATE_SUBMIT</label>
                     <input type="text" name="date_submit" class="form-control" value="{{  Session::getOldInput('date_submit') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "date_submit") !!}
                </div>



            <a class="btn btn-default" href="{{ action('Admin\ShipController@index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</a>
            </form>
        </div>
    </div>


@endsection