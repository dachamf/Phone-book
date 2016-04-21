{{--Contact index page.--}}
@extends('layouts.master')

@section('title')
    Contacts
@endsection

@section('content')
    <h1>
        Contacts
    </h1>
    @include('includes.info-box')
    <a href="{{ route('contact.create') }}">Add new contact</a>
    <hr>
    @if(!empty($contacts))
        <div class="row">
            @foreach($contacts as $contact)

                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading">{{ $contact->firstName . ' ' . $contact->lastName }}</div>
                        <div class="panel-body">
                            <div class="col-md-4">
                                <span class="glyphicon glyphicon-user user-gliph"></span>
                            </div>
                            <div class="colmd-8">
                                <div class="phone-number">
                                    <h5>Phone Number:</h5>
                                    {{ $contact->phoneNumber }}
                                </div>
                                <div class="address">
                                    <h5>Address:</h5>
                                    {{ $contact->address }}
                                </div>
                                <div class="comment">
                                    <h5>Comment:</h5>
                                    {{ $contact->comment }}
                                </div>
                                <div class="links">

                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <a class="pull-left col-md-6" href="{{ URL::to('contact/' . $contact->id . '/edit') }}">Edit contact</a>
                                {!! Form::open(['method' => 'delete', 'route' => ['contact.delete', $contact->id], 'class' => 'col-md-6']) !!}
                                {!! Form::submit('Delete contact', ['class' => 'btn btn-danger pull-right']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <hr>
        {{ $contacts->links() }}
    @else
        <h3>
            Currently there is no contacts.

        </h3>
    @endif
@endsection