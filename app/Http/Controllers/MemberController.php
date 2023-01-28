<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
     public function index()
    {
        $members = Member::all();
        return view('index')->with('members',$members);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $member = new Member();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->membership_expiration = $request->membership_expiration;
        $member->save();
    }

}
