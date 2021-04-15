@extends('layouts.app')

@section('title', 'Displays')

@section('content')
    <form method="post" action="{{ url('/displays') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="serial-number" class="form-label">S/N</label>
            <input type="text" class="form-control" id="serial-number" name="serial_number" placeholder="Ass08KJ4tUsBL2DO7jTLG9Wop2NHODt8" value="{{ old('serial_number') }}">
            @error('serial_number')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Type</label>
            <select class="form-control" id="select-type" name="type">
                @foreach($types as $type)
                    <option value="{{ $type }}"  {{ (old("type") == $type)  ? "selected":"" }}>{{ $type }}</option>
                @endforeach
            </select>
            @error('type')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="reseller_id">Reseller ID</label>
            <select class="form-control" id="reseller_id" name="reseller_id">
                @foreach($resellers as $reseller)
                    <option value="{{ $reseller->id }}" {{ (old("reseller_id") == $reseller->id)  ? "selected":"" }}>{{ $reseller->name }}</option>
                @endforeach
            </select>
            @error('reseller_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" id="attach-file" name="attachment">
            @error('attachment')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
@endsection
