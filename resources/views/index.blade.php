@extends('layout')

@section('content')
<h1>Gym Membership Form 💪🏻</h1>
@if(session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif

<form action="{{ route('member.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="mb-3">
        <label for="membership_expiration" class="form-label">Membership Expiration</label>
        <input type="date" class="form-control" id="membership_expiration" name="membership_expiration" required>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
</form>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Member</th>
            <th>Email</th>
            <th>Expiration Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($members as $member)
        <tr>
            <td>{{$member->name}}</td>
            <td>{{$member->email}}</td>
            <td>{{$member->membership_expiration}}</td>
            <td> <a href={{ route('member.show', $member->id) }} class="btn btn-primary">View</a>
                <form action={{ route('member.destroy', $member->id) }} method="POST">
                    @csrf
                    <button class="btn btn-danger mb-2">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop