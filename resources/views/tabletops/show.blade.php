@extends('layouts.app')

@section('content')
{{ $tabletop->toJson() }}

<form action="/tabletops/{{ $tabletop->id }}" method="post">
    <input type="hidden" name="_method" value="delete">
    {{ csrf_field() }}

    <button class="btn btn-danger">
        <i class="fa fa-trash-o"></i>
    </button>
</form>
@stop