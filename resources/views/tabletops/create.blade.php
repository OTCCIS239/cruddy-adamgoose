@extends('layouts.app')

@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">New Tabletop</h3>
    </div>
    <div class="panel-body">
        <form action="/tabletops" method="post">
            {{ csrf_field() }}
            
            @include('tabletops.form')

            <button class="btn btn-primary">Create Tabletop</button>
        </form>
    </div>
</div>
@stop