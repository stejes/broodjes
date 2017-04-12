@extends('layouts.app')

@section('content')
    test
    <ul>
        @foreach( $order->orderlines as $orderline )
        <li><a href='{{ route('orders.show', $orderline->id) }}'>{{ $orderline->bread_id }} + {{ $orderline->spread_id }} - {{ $orderline->amount }} items</a></li>
        @endforeach
    </ul>
@endsection