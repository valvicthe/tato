@extends('layouts.app')
@section('title', 'Avatar Shop')

@section('content')
<h2>Avatar Shop</h2>

<div style="display: flex; gap: 20px;">
    <!-- Filters Sidebar -->
    <div style="width: 180px;">
        <h4>Categories</h4>
        <ul style="list-style: none; padding: 0; font-size: 14px; line-height: 2;">
            <li><a href="#" style="color: #00A2FF;">All Items</a></li>
            <li><a href="#" style="color: #fff;">Collectibles</a></li>
            <li><a href="#" style="color: #fff;">Clothing</a></li>
            <li><a href="#" style="color: #fff;">Body Parts</a></li>
            <li><a href="#" style="color: #fff;">Gear</a></li>
        </ul>
    </div>

    <!-- Catalog Grid -->
    <div style="flex-grow: 1; display: grid; grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); gap: 15px;">
        @foreach($items as $item)
        <div style="background: var(--card-bg); padding: 10px; border-radius: 4px;">
            <div style="width: 100%; height: 130px; background: #111; border-radius: 4px;"></div>
            <div style="margin-top: 8px; font-weight: bold; font-size: 14px;">{{ $item->name }}</div>
            <div style="color: #00E676; margin-top: 4px;">🪙 {{ $item->price }}</div>
        </div>
        @endforeach
    </div>
</div>
@endsection
