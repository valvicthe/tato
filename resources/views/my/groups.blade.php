@extends('layouts.app')
@section('title', 'Groups')

@section('content')
<div style="display: flex; gap: 20px;">
    <!-- Group List Sidebar -->
    <div style="width: 220px; background: var(--card-bg); border-radius: 6px; padding: 10px;">
        <input type="text" placeholder="Search Groups" style="width: 100%; padding: 8px; background: #111213; border: 1px solid var(--border-color); color: #fff; border-radius: 4px; box-sizing: border-box;">
        <div style="margin-top: 10px; padding: 10px; background: #111213; border-radius: 4px;">
            <strong>Tato Developers</strong>
        </div>
    </div>

    <!-- Active Group Content -->
    <div style="flex-grow: 1; background: var(--card-bg); padding: 20px; border-radius: 6px;">
        <h2>Tato Developers</h2>
        <p style="color: var(--text-muted);">1 Member | Public Group</p>
        <div style="background: #111213; padding: 15px; border-radius: 4px; margin-top: 15px;">
            <strong>Group Shout:</strong> Welcome to the official Tato revival community!
        </div>
    </div>
</div>
@endsection
