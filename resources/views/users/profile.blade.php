@extends('layouts.app')
@section('title', 'User Profile')

@section('content')
<div style="background: var(--card-bg); padding: 20px; border-radius: 6px; display: flex; align-items: center; gap: 20px;">
    <div style="width: 120px; height: 120px; background: #111; border-radius: 50%;"></div>
    <div>
        <h2 style="margin: 0;">{{ $user->username }}</h2>
        <small style="color: var(--text-muted);">@ {{ $user->username }}</small>
        <div style="margin-top: 10px;">
            <button style="background: #00A2FF; color: #fff; border: none; padding: 8px 15px; border-radius: 4px; font-weight: bold;">Add Friend</button>
        </div>
    </div>
</div>

<!-- About Section -->
<div style="margin-top: 20px; background: var(--card-bg); padding: 20px; border-radius: 6px;">
    <h3>About</h3>
    <p style="color: var(--text-muted);">{{ $user->blurb ?? ' ' }}</p>
</div>
@endsection
