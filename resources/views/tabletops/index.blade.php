@extends('layouts.app')

@section('content')
    <h1>Here are some awesome Tabletop RPGs!</h1>

    <pre>{{ json_encode(\App\Tabletop::all(), JSON_PRETTY_PRINT) }}</pre>
@stop