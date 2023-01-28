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

        return redirect()->route('member.index')->with('success', 'New members added');
    }

    public function edit(Request $request)
    {
        $member = Member::findorFail($request->id);
        return view('edit')
            ->with('member', $member);
    }

    public function destroy(Request $request)
    {
        $member= Member::findorFail($request->id);
        $member->delete();
        return redirect()->route('index')->with('success', 'Member is successfully deleted!');
    }

}
