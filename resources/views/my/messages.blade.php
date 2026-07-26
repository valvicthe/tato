@extends('layouts.app')
@section('title', 'Messages')

@section('content')
<h2>My Messages</h2>

<div style="background: var(--card-bg); border-radius: 6px; overflow: hidden;">
    <div style="display: flex; background: #111213; padding: 10px 20px; gap: 20px; font-weight: bold;">
        <span style="color: #00A2FF;">Inbox</span>
        <span>Sent</span>
        <span>Archive</span>
    </div>
    <div style="padding: 20px;">
        <p style="color: var(--text-muted); text-align: center;">No messages in your inbox.</p>
    </div>
</div>
@endsection
