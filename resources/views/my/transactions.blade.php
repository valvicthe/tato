@extends('layouts.app')
@section('title', 'My Transactions')

@section('content')
<h2>My Transactions</h2>

<div style="background: var(--card-bg); padding: 20px; border-radius: 6px;">
    <div style="font-size: 20px; margin-bottom: 15px;">
        My Balance: <strong style="color: #00E676;">🪙 {{ Auth::user()->robux ?? 0 }} Robux</strong>
    </div>

    <table style="width: 100%; text-align: left; font-size: 14px; border-collapse: collapse;">
        <thead>
            <tr style="border-bottom: 1px solid var(--border-color); color: var(--text-muted);">
                <th style="padding: 10px 0;">Date</th>
                <th>Action</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 10px 0;">--</td>
                <td>No transactions found</td>
                <td>--</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
