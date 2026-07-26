@extends('layouts.app')
@section('title', 'Buy Robux')

@section('content')
<div style="text-align: center; max-width: 800px; margin: 0 auto;">
    <h2>Get Robux</h2>
    <p style="color: var(--text-muted);">Get Robux to purchase upgrades for your avatar or special abilities in games!</p>

    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 30px;">
        <div style="background: var(--card-bg); padding: 25px; border-radius: 6px;">
            <h1 style="color: #00E676;">🪙 400</h1>
            <p>Play for 10 Minutes</p>
            <button style="background: #00A2FF; border: none; color: #fff; padding: 10px; width: 100%; border-radius: 4px; font-weight: bold;">Play Now!</button>
        </div>
        <div style="background: var(--card-bg); padding: 25px; border-radius: 6px; border: 2px solid #00A2FF;">
            <h1 style="color: #00E676;">🪙 800</h1>
            <p>Play for 1 Hour</p>
            <button style="background: #00A2FF; border: none; color: #fff; padding: 10px; width: 100%; border-radius: 4px; font-weight: bold;">Play Now!</button>
        </div>
        <div style="background: var(--card-bg); padding: 25px; border-radius: 6px;">
            <h1 style="color: #00E676;">🪙 1,700</h1>
            <p>Play for 1 Hour and 30 Minutes</p>
            <button style="background: #00A2FF; border: none; color: #fff; padding: 10px; width: 100%; border-radius: 4px; font-weight: bold;">Play Now!</button>
        </div>
    </div>
</div>
@endsection
