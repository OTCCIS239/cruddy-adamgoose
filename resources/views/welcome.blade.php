@extends('layouts.app')

@section('content')
    <h1>This is the Home Page</h1>
@endsection

@section('scripts')
<script>
    $(function() {
        alert('Hello and welcome to my home page')
    })
</script>
@endsection