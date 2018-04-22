@extends('layouts.app')

@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Edit Tabletop</h3>
    </div>
    <div class="panel-body">
        <form action="/tabletops/{{ $tabletop->id }}" method="post">
            <input type="hidden" name="_method" value="PATCH">
            {{ csrf_field() }}
            
            @include('tabletops.form')

            <button class="btn btn-primary pull-right">Save Tabletop</button>
        </form>

    
    </div>
</div>
@stop