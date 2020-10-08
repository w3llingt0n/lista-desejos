@extends('layout.layout')
@section('main-content')
<section class="section">
    <div class="row">
        <form class="col s12" action="{{route('admin.save')}}" method="POST">
            {{-- cross-site request forgery --}}
            @csrf
            <div class="row">
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="name" id="name">
                        <label for="name">Nome</label>
                        @error('name')
                        <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="price" id="price">
                        <label for="price">Preço</label>
                        @error('price')
                        <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="store" id="store">
                        <label for="store">Loja</label>
                        @error('store')
                        <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="right-align">
                <a href="{{url()->previous()}}" class="btn-flat waves-effect">Cancelar</a>
                <button class="btn waver-effect waves-light" type="submit">Salvar</button>
            </div>
        </form>
    </div>
</section>
@endsection
