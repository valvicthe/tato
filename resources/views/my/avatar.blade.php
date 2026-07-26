@extends('layouts.app')

@section('title', 'Avatar Customizer')

@section('content')
<h2>Avatar Editor</h2>

<div style="display: flex; gap: 20px; margin-top: 20px;">
    <!-- 3D Avatar Viewport -->
    <div style="width: 350px; height: 350px; background: var(--card-bg); border-radius: 4px; display: flex; align-items: center; justify-content: center;">
        <p style="color: var(--text-muted);">[ 2020 Avatar R15/R6 Viewport ]</p>
    </div>

    <!-- Inventory / Wardrobe Picker -->
    <div style="flex-grow: 1; background: var(--card-bg); padding: 15px; border-radius: 4px;">
        <ul style="display: flex; gap: 15px; list-style: none; padding: 0; border-bottom: 1px solid var(--border-color); padding-bottom: 10px;">
            <li><strong>Clothing</strong></li>
            <li>Body</li>
            <li>Animation</li>
            <li>Outfits</li>
        </ul>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin-top: 15px;">
            <div style="background: #111213; padding: 10px; text-align: center; border-radius: 4px;">
                <div style="height: 80px; background: #333; margin-bottom: 5px;"></div>
                <small>Placeholder</small>
            </div>
        </div>
    </div>
</div>
@endsection
