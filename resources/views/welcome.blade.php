@extends('header.header')


@push('js')
@endpush
@push('css')
@endpush


@section('name')
    <div class="row">
        <div class="col-md-12 col-12 col-lg-12">
            <div class="row mt-2">
               <div class="offset-md-4 col-md-4 offset-lg-4 col-lg-4 offset-2 col-8">
                    <div class="card">
                        <div class="card-header"><h4 class="card-title text-center">Ingreso a App</h4></div>
                        <div class="card-body">
                            <form class="row align-items-center g-3" method="POST" action="/SignIn">
                                @csrf
                                <div class="col-12">
                                    <div class="input-group">
                                        <div class="input-group-text">@</div>
                                        <input type="text" class="form-control" id="txtUsuario" name="user" placeholder="Teclea tu usuario..">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group">
                                        <div class="input-group-text">@</div>
                                        <input type="password" class="form-control" id="txtContra" name="password" placeholder="Teclea tu password..">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row mt-2">
                                        <div class="col-md-6 col-lg-6 col-6">
                                            <button type="submit" class="btn btn-primary col-12">Ingresar</button>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-6">
                                            <button type="reset" class="btn btn-danger col-12">Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                                @if ($errors->any())
                                    <div clas="col-12">
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger" role="alert">{{ $error }}</div>
                                        @endforeach
                                    </div>
                                @endif
                                @isset($status)
                                
                                @endisset
                            </form>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
 @endsection

