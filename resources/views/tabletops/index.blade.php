@extends('layouts.app')

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <a href="/tabletops/create" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i></a>
            <h3 class="panel-title">All Tabletops</h3>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Genre</th>
                    <th>Players</th>
                    <th style="width: 1px; white-space: nowrap;">
                        <i class="fa fa-cog"></i>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($tabletops as $tabletop)
                    <tr>
                        <td>{{ $tabletop->id }}</td>
                        <td>{{ $tabletop->title }}</td>
                        <td>{{ $tabletop->genre }}</td>
                        <td>{{ $tabletop->min_players }} - {{ $tabletop->max_players }}</td>
                        <td>
                            <a href="/tabletops/{{ $tabletop->id }}/edit" class="btn btn-xs btn-info">
                                <i class="fa fa-edit"></i>
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop