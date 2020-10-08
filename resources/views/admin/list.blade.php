<?php
    setlocale(LC_MONETARY, 'pt_BR');
?>
@extends('layout.layout')
@section('main-content')
<section class="section">
    <table class="highlight">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Loja</th>
                <th class="right-align">Opções</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produtos as $produto)
                <tr>
                    <td>{{$produto->name}}</td>
                    <td>{{$produto->price}}</td>
                    <td>{{$produto->store}}</td>
                    <td class="right-align">Excluir - Remover</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Não existem produtos cadastrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="fixed-action-btn">
        <a href="{{route('admin.form')}}" class="btn-floating btn-large waves-effect waves-light">
            <i class="large material-icons">add</i>
        </a>
    </div>
</section>
@endsection
