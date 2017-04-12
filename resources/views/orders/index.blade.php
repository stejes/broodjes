@extends('layouts.app')

@section('content')
    test
    <ul>
        @foreach( $orders as $order )
        <li><a href='{{ route('orders.show', $order->id) }}'>{{ $order->created_at }}</a></li>
        @endforeach
    </ul>
@endsection