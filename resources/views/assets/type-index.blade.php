@extends('layouts.app')

@section('title', 'Counterparty ' . ucfirst(str_plural($type)))
@section('canonical', url(route('assets.typeIndex', ['type' => $type])))

@section('content')
<div class="container mt-1">
    <assets type="{{ $type }}" page="{{ $request->input('page', 1) }}" per_page="{{ $request->input('per_page', 10) }}"></assets>
</div>
@endsection