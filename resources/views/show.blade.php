@extends('layout')

@section('content')
    <div class="pt-5">
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h1>
                Member Details
            </h1>
            <div>
                <a href={{ route('member.index') }} class="btn btn-light">Go Back</a>
            </div>
        </div>
        @if (session('success'))
            <div class="mb-3 alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div>
            
                    <p>
                        Name: {{ $member->name }}
                    </p>
                    <p>
                        Email: {{ $member->email }}
                    </p>
                    <p>
                        Membership Expiration: {{ $member->membership_expiration }}
                    </p>
                   
               
        </div>
    </div>
@stop