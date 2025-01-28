@extends('header.header', ['title' => 'modal-xl'])

@push('js')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#btn_add").on("click",function(){
                new bootstrap.Modal(document.getElementById("modal_crud"),{
                    backdrop:true,
                    keyboard:false
                }).show();
            });
        });
    </script>
@endpush
@push('css')
@endpush


@section('name')
    <div class="row mt-2">
        <div class="col-md-4 col-lg-3 col-3">

        </div>
        <div class="col-md-8 col-lg-9 col-9">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-12">
                                    <div class="card">
                                        <div class="card-header"><h5 class="card-title text-center">Controles para la Busqueda</h5></div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-7 col-lg-7 col-12">
                                                    <x-form-group name='fullname' id="txtFullName" tabindex="1" control="1" type="text">
                                                        <x-slot name='label'>Nombre Completo</x-slot>
                                                    </x-form-group>
                                                </div>
                                                <div class="col-md-5 col-lg-5 col-12">
                                                    <x-form-group name='profile' id="dblProfile" tabindex="2" control="2">
                                                        <x-slot name='label'>Perfil</x-slot>
                                                    </x-form-group>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-md-3 col-lg-4 col-12">
                                                    <x-form-group name='fecha' id="txtFechaAlta" tabindex="3" control="1" type="date">
                                                        <x-slot name='label'>Fecha Alta</x-slot>
                                                    </x-form-group>
                                                </div>
                                                <div class="col-md-5 col-lg-4 col-12">
                                                    <x-form-group name='email' id="txtCorreo" tabindex="4" control="1" type="email">
                                                        <x-slot name='label'>Correo</x-slot>
                                                    </x-form-group>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-12">
                                                    <x-form-group name='telephone' id="txtTelefono" tabindex="5" control="1" type="text">
                                                        <x-slot name='label'>Numero de Celular</x-slot>
                                                    </x-form-group>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-4 col-lg-2 col-6">
                                                    <button type="submit" class="btn btn-primary btn-sm col-12" tabindex="6">Buscar</button>
                                                </div>
                                                <div class="col-md-4 col-lg-2 col-6">
                                                    <button type="reset" class="btn btn-danger btn-sm col-12" tabindex="7">Cancelar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <button class="btn btn-primary btn-sm col-12" type="button" tabindex="8" id="btn_add">Agregar Nuevo Usuario</button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 col-lg-12 col-12">
                                    <div class="card">
                                        <div class="card-header"><h5 class="card-title text-center">Lista de Usuarios</h5></div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-md-12 col-lg-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-bordered">
                                                            <caption>Lista de Usuarios</caption>
                                                            <thead>
                                                                <tr>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">Nombre Completo</th>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">Correo</th>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">Celular</th>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">Fecha</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('mdl-content')
    <x-modal-header ModalTitle="Modal de Prueba"></x-modal-header>
    <div class="modal-body">
        <form class="container-fluid" method="POST" action="">
            <div class="card">
                <div class="card-body">
                    <div class="row"><div class="col-12 col-md-12 col-lg-12"><h5 class="card-title">Nuevo Usuario</h5></div></div>
                    <div class="row mt-2">
                        <div class="col-12 col-md-12 col-lg-12">
                            <ol class="list-group list-group-numbered list-group-flush">
                                <li class="list-group-item text-danger">Los Campos con * son Obligatorios</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-4 col-lg-6 col-6">
                            <x-form-group name='name' id="txtName" tabindex="0" control="1" type="text">
                                <x-slot name='label'>Nombre(s)</x-slot>
                            </x-form-group>
                        </div>
                        <div class="col-md-4 col-lg-3 col-6">
                            <x-form-group name='first_name' id="txtFirstName" tabindex="0" control="1" type="text">
                                <x-slot name='label'>Apellido Materno</x-slot>
                            </x-form-group>
                        </div>
                        <div class="col-md-4 col-lg-3 col-6">
                            <x-form-group name='last_name' id="txtLastName" tabindex="0" control="1" type="text">
                                <x-slot name='label'>Apellido Paterno</x-slot>
                            </x-form-group>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6 col-lg-3 col-6">
                            <x-form-group name='email' id="txtEmail" tabindex="0" control="1" type="email">
                                <x-slot name='label'>Correo</x-slot>
                            </x-form-group>
                        </div>
                        <div class="col-md-3 col-lg-4 col-6">
                            <x-form-group name='telephone' id="txtTelephone" tabindex="0" control="1" type="text">
                                <x-slot name='label'>Numero de Celular</x-slot>
                            </x-form-group>
                        </div>
                        <div class="col-md-3 col-lg-5 col-6">
                            <x-form-group name='emergency_telephone' id="txtEmergencyTelephone" tabindex="0" control="1" type="text">
                                <x-slot name='label'>Telefono de Emergencia</x-slot>
                            </x-form-group>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-4 col-lg-3 col-6">
                            <x-form-group name='username' id="txtUserName" tabindex="0" control="1" type="text">
                                <x-slot name='label'>Usuario App</x-slot>
                            </x-form-group>
                        </div>
                        <div class="col-md-4 col-lg-4 col-6">
                            <x-form-group name='password' id="txtPassword" tabindex="0" control="1" type="password">
                                <x-slot name='label'>Contraseña</x-slot>
                            </x-form-group>
                        </div>
                        <div class="col-md-4 col-lg-5 col-6">
                            <x-form-group name='confirm_password' id="txtPasswordConfirm" tabindex="0" control="1" type="password">
                                <x-slot name='label'>Confirmacion Contraseña</x-slot>
                            </x-form-group>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-3">
                        <div class="col-md-6 offset-lg-8 col-lg-2 col-6"><button type="button" class="btn btn-success btn-sm col-12">Guardar Usuario</button></div>
                        <div class="col-md-6 col-lg-2 col-6"><button type="button" class="btn btn-secondary btn-sm col-12" data-bs-dismiss="modal">Cancelar</button></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection