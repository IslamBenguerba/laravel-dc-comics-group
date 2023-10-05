@extends('layouts.public')
@section('title', 'Create')
@section('content')
    {{-- @include('names.forms.upsert',= inserimento del componente upsert --}}
    {{-- passato come secondo argomento dell'include un array associatiovo 
        [
        'action' => route('names.store'),
        'method' => 'POST',
        'name' => null,
    ]) --}}
    {{-- 'action' => route('names.store'), = specifichiamo dove vogliamo inviare i dati --}}
    {{--  'method' => 'POST', = specifichiamo il metodo su come devono essere inviati i dati  --}}
    {{-- 'name' => null,= assegniamo il valore null perchè non abbiamo nessun dato da stampare --}}
    @include('names.forms.upsert', [
        //'action' => route('names.store'),
        'method' => 'POST',
        'name' => null,
    ])
@endsection
