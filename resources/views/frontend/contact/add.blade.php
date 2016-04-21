{{--Add contact form page--}}
@extends('layouts.master')

@section('title')
    Add Contact
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}">
@endsection

@section('content')
    <form action="" method="post" id="add-contact-form">
        <div class="row">
            <fieldset class="form-group col-md-7">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="First name here">
            </fieldset>
            <fieldset class="form-group col-md-7">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Last name here">
            </fieldset>
            <fieldset class="form-group col-md-7">
                <label for="phoneNumber">Phone Number</label>
                <input type="number" class="form-control" id="phoneNumber" placeholder="Phone number here">
            </fieldset>
            <fieldset class="form-group col-md-7">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Address">
            </fieldset>
            <fieldset class="form-group col-md-7">
                <label for="comment">Comment</label>
                <textarea class="form-control" id="comment" placeholder="Last name here" cols="20" rows="5"></textarea>
            </fieldset>
            <fieldset class="form-group col-md-7">
                <input type="button" class="btn btn-primary" value="Add Contact">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </fieldset>
        </div>
    </form>
@endsection