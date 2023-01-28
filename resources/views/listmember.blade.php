@extends('layout')

@section('content')
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
            <td><a href={{ route('member.show', $member->id) }} class="btn btn-primary">View</a>
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