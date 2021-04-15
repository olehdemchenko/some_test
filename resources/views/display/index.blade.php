@extends('layouts.app')

@section('title', 'Displays')

@section('content')
    <div class="container">
        <div class="container text-center">
            <a class="btn btn-success" href="{{ url('displays/create') }}">Create new display</a>
        </div>
        <Displays :displays="{{ $displays }}"/>
    </div>
    <Modal/>

@endsection
