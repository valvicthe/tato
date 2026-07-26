@extends('layouts.app')
@section('title', $game->title)

@section('content')
<div style="background: var(--card-bg); padding: 20px; border-radius: 6px;">
    <h2>{{ $game->title }}</h2>
    <p>By <a href="{{ route('users.profile', $game->creator_id) }}" style="color: #00A2FF;">{{ $game->creator_name }}</a></p>

    <div style="display: flex; gap: 20px; margin-top: 20px;">
        <!-- Thumbnail -->
        <div style="width: 540px; height: 304px; background: #111; border-radius: 6px;"></div>

        <!-- Play Container -->
        <div style="flex-grow: 1; background: #111213; padding: 20px; border-radius: 6px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <button id="play-btn" style="background: #00E676; border: none; color: #000; font-size: 24px; font-weight: bold; width: 80%; padding: 15px; border-radius: 8px; cursor: pointer;">
                ▶ Play
            </button>
        </div>
    </div>

    <!-- Game Stats -->
    <div style="display: flex; gap: 30px; margin-top: 20px; border-top: 1px solid var(--border-color); padding-top: 15px;">
        <div><small style="color: var(--text-muted);">Active</small><div><strong>{{ $game->active_players }}</strong></div></div>
        <div><small style="color: var(--text-muted);">Visits</small><div><strong>{{ number_format($game->visits) }}</strong></div></div>
        <div><small style="color: var(--text-muted);">Created</small><div><strong>{{ $game->created_at->format('m/d/Y') }}</strong></div></div>
        <div><small style="color: var(--text-muted);">Max Players</small><div><strong>{{ $game->max_players }}</strong></div></div>
    </div>
</div>
@endsection
