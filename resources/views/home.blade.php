@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="home-container">
    <h2>Hello, {{ Auth::user()->username ?? 'Player' }}!</h2>

    <!-- Friend Activity / Feeds -->
    <div style="margin-top: 20px; background: var(--card-bg); padding: 15px; border-radius: 4px;">
        <h3>Recently Played</h3>
        <p style="color: var(--text-muted);">You haven't played any games on Tato yet!</p>
    </div>

    <!-- Friend List Grid -->
    <div style="margin-top: 20px; background: var(--card-bg); padding: 15px; border-radius: 4px;">
        <h3>Friends (0)</h3>
        <p style="color: var(--text-muted);">Use the search bar to find and add friends.</p>
    </div>
</div>
@endsection
