{{--Add contact form page--}}
@extends('layouts.master')

@section('title')
    Add Contact
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}">
@endsection
@section('content')
    <h1>Add new contact</h1>
    @include('includes.info-box')
    {!! Form::model($contact,
    [
    'method' => 'patch',
    'route' => ['contact.update', $contact->id],
    ]) !!}
    <div class="row">
        <fieldset class="form-group col-md-7">
            {!! Form::label('firstName', 'First name') !!}
            {!! Form::text('firstName', $contact->firstName, ['class' => 'form-control', 'placeholder' => 'First name goes here']) !!}

        </fieldset>
        <fieldset class="form-group col-md-7">
            {!! Form::label('lastName', 'Last Name') !!}
            {!! Form::text('lastName', $contact->lastName, ['class' => 'form-control', 'placeholder' => 'Last Name goes here']) !!}
        </fieldset>
        <fieldset class="form-group col-md-7">
            {!! Form::label('phoneNumber', 'Phone Number') !!}
            {!! Form::text('phoneNumber', $contact->phoneNumber, ['class' => 'form-control', 'placeholder' => 'Phone Number goes here']) !!}
        </fieldset>
        <fieldset class="form-group col-md-7">
            {!! Form::label('address', 'Address') !!}
            {!! Form::text('address', $contact->address, ['class' => 'form-control', 'placeholder' => 'Address goes here']) !!}
        </fieldset>
        <fieldset class="form-group col-md-7">
            {!! Form::label('comment', 'Comment') !!}
            {!! Form::textarea('comment', $contact->comment, ['class' => 'form-control', 'cols' => 20, 'rows' => 5, 'placeholder' => 'Comment goes here']) !!}
        </fieldset>
        <fieldset class="form-group col-md-7">
            {!! Form::submit('Edit contact', ['class' => 'btn btn-primary']) !!}
        </fieldset>
    </div>
    {!! Form::close() !!}
@endsection