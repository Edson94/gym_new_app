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
        <div class="col-md-3 col-lg-2 col-3">

        </div>
        <div class="col-md-9 col-lg-10 col-9">
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
                                                <div class="col-md-7 col-lg-4 col-6">
                                                    <x-form-group name='type_product' id="txtTypeProduct" tabindex="1" control="2" cssIcon="fa-brands fa-product-hunt">
                                                        <x-slot name='label'>Tipo de Producto</x-slot>
                                                    </x-form-group>
                                                </div>
                                                <div class="col-md-5 col-lg-3 col-6">
                                                    <x-form-group name='date_init' id="txtDateInit" tabindex="3" control="1" type="date" cssIcon="fa-regular fa-calendar">
                                                        <x-slot name='label'>Fecha Inicio</x-slot>
                                                    </x-form-group>
                                                </div>
                                                <div class="col-md-12 col-lg-5 col-6">
                                                    <x-form-group name='name' id="txtName" tabindex="2" control="1" type="text" cssIcon="fa-brands fa-product-hunt">
                                                        <x-slot name='label'>Nombre del Producto</x-slot>
                                                    </x-form-group>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-md-7 col-lg-4 col-6">
                                                    <x-form-group name='validity' id="txtValidity" tabindex="4" type="number" control="1" cssIcon="fa-brands fa-product-hunt">
                                                        <x-slot name='label'>Vigencia(Meses)</x-slot>
                                                    </x-form-group>
                                                </div>
                                                <div class="col-md-5 col-lg-4 col-6">
                                                    <x-form-group name='cost' id="txtCost" tabindex="2" control="1" type="text" cssIcon="fa-solid fa-money-bill">
                                                        <x-slot name='label'>Costo</x-slot>
                                                    </x-form-group>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-4 col-lg-2 col-6">
                                                    <button type="submit" class="btn btn-primary btn-sm col-12" tabindex="6"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;Buscar</button>
                                                </div>
                                                <div class="col-md-4 col-lg-2 col-6">
                                                    <button type="reset" class="btn btn-danger btn-sm col-12" tabindex="7"><i class="fa-solid fa-xmark"></i>&nbsp;Cancelar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <button class="btn btn-primary btn-sm col-12" type="button" tabindex="8" id="btn_add"><i class="fa-solid fa-plus fa-beat"></i>&nbsp;Agregar Nuevo Producto</button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 col-lg-12 col-12">
                                    <div class="card">
                                        <div class="card-header"><h5 class="card-title text-center">Lista de Productos</h5></div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 col-md-12 col-lg-12">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-bordered">
                                                            <caption>Lista de Productos</caption>
                                                            <thead>
                                                                <tr>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">Tipo Producto</th>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">Nombre</th>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">Clave</th>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">Costo</th>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">Fecha Vigencia</th>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">Fecha Alta</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">SERVICIO</th>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">MEMBRESIA DE 6 MESES(GOLD)</th>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">MEM6MGOLD</th>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">$600</th>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">SIN VIGENCIA</th>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">31/01/2025</th>
                                                                    <th>
                                                                        <div class="btn-group" role="group">
                                                                            <button type="button" class="btn btn-outline-primary btn-sm" tabindex="0"><i class="fa-solid fa-trash"></i></button>
                                                                            <button type="button" class="btn btn-outline-primary btn-sm" tabindex="0"><i class="fa-solid fa-pencil"></i></button>
                                                                            <button type="button" class="btn btn-outline-primary btn-sm" tabindex="0"><i class="fa-regular fa-file"></i></button>
                                                                        </div> 
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">SERVICIO</th>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">MEMBRESIA(GOLD) - PROMOCION 3 MESES X 2</th>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">MEM6MGOLDPROM</th>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">$400</th>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">3 MESES</th>
                                                                    <th style="text-decoration: none;font-weight: normal;text-align: center;">31/01/2025</th>
                                                                    <th>
                                                                        <div class="btn-group" role="group">
                                                                            <button type="button" class="btn btn-outline-primary btn-sm" tabindex="0"><i class="fa-solid fa-trash"></i></button>
                                                                            <button type="button" class="btn btn-outline-primary btn-sm" tabindex="0"><i class="fa-solid fa-pencil"></i></button>
                                                                            <button type="button" class="btn btn-outline-primary btn-sm" tabindex="0"><i class="fa-regular fa-file"></i></button>
                                                                        </div> 
                                                                    </th>
                                                                </tr>
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
    <x-modal-header ModalTitle="Agregar/Editar [Producto]"></x-modal-header>
    <div class="modal-body">
        <form class="container-fluid" method="POST" action="">
            <div class="card">
                <div class="card-body">
                    <div class="row"><div class="col-12 col-md-12 col-lg-12"><h5 class="card-title">Modo:&nbsp;Nuevo Producto</h5></div></div>
                    <div class="row mt-2">
                        <div class="col-12 col-md-12 col-lg-12">
                            <ol class="list-group list-group-numbered list-group-flush">
                                <li class="list-group-item text-danger">Los Campos con * son Obligatorios</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 col-6">
                            <x-form-group name='type_product' id="txtTypeProduct" tabindex="1" control="2" cssIcon="fa-brands fa-product-hunt">
                                <x-slot name='label'>Tipo de Producto</x-slot>
                            </x-form-group>
                        </div>
                        <div class="col-md-6 col-lg-3 col-6">
                            <x-form-group name='date_init' id="txtDateInit" tabindex="3" control="1" type="date" cssIcon="fa-regular fa-calendar">
                                <x-slot name='label'>Fecha Inicio</x-slot>
                            </x-form-group>
                        </div>
                        <div class="col-md-12 col-lg-5 col-6">
                            <x-form-group name='name' id="txtName" tabindex="2" control="1" type="text" cssIcon="fa-brands fa-product-hunt">
                                <x-slot name='label'>Nombre del Producto</x-slot>
                            </x-form-group>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-6 col-lg-4 col-6">
                            <x-form-group name='validity' id="txtValidity" tabindex="4" type="number" control="1" cssIcon="fa-brands fa-product-hunt">
                                <x-slot name='label'>Vigencia(Meses)</x-slot>
                            </x-form-group>
                        </div>
                        <div class="col-md-6 col-lg-4 col-6">
                            <x-form-group name='date_validity' id="txtDateValidity" tabindex="5" type="date" control="1" cssIcon="fa-brands fa-product-hunt">
                                <x-slot name='label'>Fecha Vigencia</x-slot>
                            </x-form-group>
                        </div>
                        <div class="col-md-12 col-lg-4 col-6">
                            <x-form-group name='cost' id="txtCost" tabindex="2" control="1" type="text" cssIcon="fa-solid fa-money-bill">
                                <x-slot name='label'>Costo</x-slot>
                            </x-form-group>
                        </div>
                    </div>  
                    <div class="row mt-1">
                        <div class="col-md-4 col-lg-4 col-6">
                            <x-form-group name='iva' id="chkBitIva" tabindex="2" control="3">
                                <x-slot name='label'>Implica IVA</x-slot>
                            </x-form-group>
                        </div>
                        <div class="col-md-4 col-lg-4 col-6">
                            <x-form-group name='cost_iva' id="txtIva" tabindex="2" control="1" type="text" cssIcon="fa-solid fa-money-bill">
                                <x-slot name='label'>Costo IVA</x-slot>
                            </x-form-group>
                        </div>
                        <div class="col-md-4 col-lg-4 col-6">
                            <x-form-group name='total' id="txtTotal" tabindex="2" control="1" type="text" cssIcon="fa-solid fa-money-bill">
                                <x-slot name='label'>Total</x-slot>
                            </x-form-group>
                        </div>
                    </div>  
                    <div class="row mt-1">
                        <div class="col-md-4 col-lg-4 col-6">
                            <x-form-group name='cantidad' id="txtCantidad" tabindex="2" control="1" type="number" cssIcon="fa-solid fa-chevron-up">
                                <x-slot name='label'>Cantidad</x-slot>
                            </x-form-group>
                        </div>
                    </div>  
                    <hr>
                    <div class="row mt-3">
                        <div class="col-md-6 offset-lg-8 col-lg-2 col-6"><button type="button" class="btn btn-success btn-sm col-12"><i class="fa-regular fa-floppy-disk"></i>&nbsp;Guardar Usuario</button></div>
                        <div class="col-md-6 col-lg-2 col-6"><button type="button" class="btn btn-secondary btn-sm col-12" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i>&nbsp;Cancelar</button></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection