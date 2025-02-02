@extends('layouts.app')
@section('content')
<div class="d-flex w-100v mt-3">
    <div class="create-card w-25 me-4 p-4">
        <h3>Añadir empresa</h3>
        <hr width="80%">
        <h4 class="pt-3">Información principal</h4>
        <div class="d-flex my-3">
            <div class="img-card d-grid me-4">
                <img src="{{asset('img/Imagen.PNG')}}" alt="">
                <div id="select-img">
                    <input type="file" name="" id="select-img">
                </div>
            </div>
            <div class="">
                  <input type="text" class="form-control mb-2" name="name" id="" aria-describedby="helpId" placeholder="Nombre">
                  <input type="text" class="form-control mb-2" name="lastname" id="" aria-describedby="helpId" placeholder="Razón social">
                  <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Rut">
            </div>
        </div>
        <hr width="80%">
        <div class="d-flex my-3">
                <input type="text" class="form-control me-2" name="lastname" id="" aria-describedby="helpId" placeholder="Nit">
                <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Cod. verificación">
        </div>
        <div class="d-flex my-3">
            <input type="email" class="form-control me-2" name="lastname" id="" aria-describedby="helpId" placeholder="País(Casa matríz)">
            <input type="email" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Actividad económica">
        </div>
        <div class="d-flex my-3">
            <input type="email" class="form-control me-2" name="lastname" id="" aria-describedby="helpId" placeholder="Dirección">
            <input type="email" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Localidad">
        </div>
        <div class="d-flex my-3">
            <input type="email" class="form-control me-2" name="lastname" id="" aria-describedby="helpId" placeholder="Num empleados">
            <input type="email" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Tamaño empresa">
        </div>
        <div class="d-flex my-3">
            <input type="email" class="form-control me-2" name="lastname" id="" aria-describedby="helpId" placeholder="Representante legal">
            <input type="email" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Tamaño empresa">
        </div>
        <input type="email" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Página web">
    </div>
    <div class="w-25 me-2 p-4 align-items-center justify-content-center text-left">
        <h4 class="">Información contacto empresa</h4>
        <div class="d-flex my-3">
            <select class="w-25 me-2 text-center" name="" id="">
                <option selected value="">C.C</option>
            </select>
            <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Documento de identidad">
        </div>
        <div class="d-flex mb-3">
            <select class="me-2 text-center" name="" id="">
                <option selected value="">Área especializada</option>
            </select>            
            <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Cargo">
        </div>
        <div class="d-flex mb-3">
            <input type="text" class="form-control me-2" name="name" id="" aria-describedby="helpId" placeholder="Teléfono fijo">
            <input type="text" class="form-control" name="lastname" id="" aria-describedby="helpId" placeholder="Celular">
        </div>
        <input type="text" class="form-control mb-3" name="name" id="" aria-describedby="helpId" placeholder="Correo personal">
        <input type="text" class="form-control mb-3" name="lastname" id="" aria-describedby="helpId" placeholder="Correo profesional">
        <hr class="mt-1" width="80%">
        <h4 class="py-3">Documentos requeridos</h4>
        <div class="text-center mb-3">
            <a name="" id="" class=" px-5 w-100 btn btn-primary" href="#" role="button">Subir archivos</a>
        </div>
    </div>
    <div class="create-card w-25 me-4 p-4">
        <h4>Rol a desempeñar</h4>
        <select class="w-100 ps-2 py-2 me-2 text-left" name="" id="">
            <option selected value="">Área especializada</option>
        </select>
        <input type="text" class="form-control mt-3" name="lastname" id="" aria-describedby="helpId" placeholder="Cursos a realizar">
        <input type="text" class="form-control mt-3" name="lastname" id="" aria-describedby="helpId" placeholder="Cursos a realizar">
        <input type="text" class="form-control my-3" name="lastname" id="" aria-describedby="helpId" placeholder="Cursos a realizar">
        <select class="w-100 mb-3 ps-2 py-2 me-2 text-left" name="" id="">
            <option selected value="">Profesional encargado</option>
        </select>
        <hr width="80%">
        <h4 class="pt-3">Observaciones</h4>
        <input type="text" class="form-control h-25 me-2" name="lastname" id="" aria-describedby="helpId" placeholder="">
        <div class="text-center mt-3">
            <a name="" id="" class=" px-5 btn btn-primary" href="#" role="button">Guardar</a>
        </div>
    </div>
</div>
@endsection