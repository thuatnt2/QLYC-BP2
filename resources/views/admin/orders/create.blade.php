@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h1>Orders / Create </h1>
    </div>

    {!! \App\Libs\ErrorDisplay::getInstance()->displayAll($errors) !!}

    <div class="row">
        <div class="col-md-12">

            <form action="{{ action('Admin\OrderController@store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="user_id">USER_ID</label>
                     <input type="text" name="user_id" class="form-control" value="{{  Session::getOldInput('user_id') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "user_id") !!}
                </div>
                    <div class="form-group">
                     <label for="number_cv">NUMBER_CV</label>
                     <input type="text" name="number_cv" class="form-control" value="{{  Session::getOldInput('number_cv') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "number_cv") !!}
                </div>
                    <div class="form-group">
                     <label for="number_cv_pa71">NUMBER_CV_PA71</label>
                     <input type="text" name="number_cv_pa71" class="form-control" value="{{  Session::getOldInput('number_cv_pa71') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "number_cv_pa71") !!}
                </div>
                    <div class="form-group">
                     <label for="order_name">ORDER_NAME</label>
                     <input type="text" name="order_name" class="form-control" value="{{  Session::getOldInput('order_name') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "order_name") !!}
                </div>
                    <div class="form-group">
                     <label for="order_phone">ORDER_PHONE</label>
                     <input type="text" name="order_phone" class="form-control" value="{{  Session::getOldInput('order_phone') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "order_phone") !!}
                </div>
                    <div class="form-group">
                     <label for="customer_name">CUSTOMER_NAME</label>
                     <input type="text" name="customer_name" class="form-control" value="{{  Session::getOldInput('customer_name') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "customer_name") !!}
                </div>
                    <div class="form-group">
                     <label for="customer_phone">CUSTOMER_PHONE</label>
                     <input type="text" name="customer_phone" class="form-control" value="{{  Session::getOldInput('customer_phone') }}"/>
                     {!! \App\Libs\ErrorDisplay::getInstance()->displayIndividual($errors, "customer_phone") !!}
                </div>



            <a class="btn btn-default" href="{{ action('Admin\OrderController@index') }}">Back</a>
            <button class="btn btn-primary" type="submit" >Create</a>
            </form>
        </div>
    </div>


@endsection