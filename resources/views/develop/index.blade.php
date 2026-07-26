@extends('layouts.app')
@section('title', 'Develop')

@section('content')
<h2>Develop</h2>

<div style="display: flex; border-bottom: 1px solid var(--border-color); margin-bottom: 20px;">
    <div style="padding: 10px 20px; border-bottom: 2px solid #00A2FF; font-weight: bold;">My Creations</div>
    <div style="padding: 10px 20px; color: var(--text-muted);">Group Creations</div>
</div>

<div style="display: flex; gap: 20px;">
    <!-- Asset Type Selector -->
    <div style="width: 150px;">
        <ul style="list-style: none; padding: 0; line-height: 2; font-size: 14px;">
            <li><strong>Places</strong></li>
            <li>Shirts</li>
            <li>Pants</li>
            <li>Decals</li>
            <li>Models</li>
            <li>Badges</li>
            <li>Audio</li>
        </ul>
    </div>

    <!-- Creation Table -->
    <div style="flex-grow: 1; background: var(--card-bg); padding: 15px; border-radius: 4px;">
        <button style="background: #00A2FF; border: none; color: #fff; padding: 8px 15px; border-radius: 4px; font-weight: bold; float: right;">Create New Place</button>
        <h3>Places</h3>
        <table style="width: 100%; text-align: left; margin-top: 15px; font-size: 14px;">
            <thead>
                <tr style="border-bottom: 1px solid var(--border-color);">
                    <th>Name</th>
                    <th>Start Place</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Starter Place</td>
                    <td>Yes</td>
                    <td><button style="background: #393B3D; color: #fff; border: none; padding: 5px 10px; border-radius: 4px;">Configure</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
