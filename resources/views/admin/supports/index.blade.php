@extends('admin.layouts.app')

@section('title', 'Fórum')

@section('header')
@include('admin.supports.partials.header')
@endsection

@section('content')

<a href="{{ route('supports.create') }}">Novo Suporte</a>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th>Ações</th>
    </thead>

    <tbody>
        @foreach ( $supports->items() as $support )
        <tr>
            <td>{{ $support->subject }}</td>
            <td>{{ getSupportStatus($support->status) }}</td>
            <td>{{ $support->body }}</td>
            <td><a href="{{ route('supports.show', $support->id) }}">Ver</a></td>
            <td><a href="{{ route('supports.edit', $support->id) }}">Editar</a></td>
        </tr>
        @endforeach
</table>

<x-pagination :paginator="$supports" :appends="$filters" />

@endsection
