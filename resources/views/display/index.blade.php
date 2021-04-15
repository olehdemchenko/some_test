@extends('layouts.app')

@section('title', 'Displays')

@section('content')
    <div class="container">
        <div class="container text-center">
            <a class="btn btn-success" href="{{ url('displays/create') }}">Create new display</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <Displays :displays="{{ $displays }}"/>
        </table>
    </div>
    <Modal/>

@endsection
