@extends('layouts.app')
@section('title', 'Account Settings')

@section('content')
<h2>My Settings</h2>

<div style="background: var(--card-bg); padding: 20px; border-radius: 6px; max-width: 600px;">
    <h3>Account Info</h3>
    <div style="margin-bottom: 15px;">
        <label style="color: var(--text-muted); display: block; font-size: 12px;">Username</label>
        <strong>{{ Auth::user()->username ?? 'Player' }}</strong>
    </div>
    <div style="margin-bottom: 15px;">
        <label style="color: var(--text-muted); display: block; font-size: 12px;">Password</label>
        <button style="background: #393B3D; color: #fff; border: none; padding: 6px 12px; border-radius: 4px;">Change Password</button>
    </div>
</div>
@endsection
