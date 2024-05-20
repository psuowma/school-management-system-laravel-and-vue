@extends('layouts.master')
@section('page_title', 'My Dashboard')

@section('content')
    <h2>КОШ КЕЛДИҢИЗ {{ Auth::user()->name }}. Бул сиздин Дэшборд:</h2>
    @endsection