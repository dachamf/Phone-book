{{--Contact index page.--}}
@extends('layouts.master')

@section('title')
    Search
@endsection

@section('content')
    <h1>
        Search
    </h1>
    @include('includes.info-box')
    <hr>
    @if(!empty($contacts))
        <div class="search-results">
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
                                    <a class="pull-left col-md-6"
                                       href="{{ URL::to('contact/' . $contact->id . '/edit') }}">Edit contact</a>
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
                <h5>
                    There is no results.
                </h5>
                <a href="{{ route('contact.index') }}">Back to home</a>
            @endif
        </div>
@endsection