@extends('layouts.app')
@section('title', 'Discover Games')

@section('content')
<h2>Discover</h2>

<!-- Category Section -->
<div style="margin-bottom: 30px;">
    <h3>Most Engaging</h3>
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap: 15px;">
        @foreach($games as $game)
        <a href="{{ route('games.show', [$game->id, Str::slug($game->title)]) }}" style="text-decoration: none; color: white;">
            <div style="background: var(--card-bg); border-radius: 6px; overflow: hidden; padding: 8px;">
                <div style="width: 100%; height: 110px; background: #111; border-radius: 4px; background-image: url('{{ $game->thumbnail }}'); background-size: cover;"></div>
                <h4 style="margin: 8px 0 4px 0; font-size: 14px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $game->title }}</h4>
                <small style="color: var(--text-muted);">👍 {{ $game->rating }}% | 👤 {{ $game->active_players }}</small>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
