@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="page-header">
                <h1>Bienvenido a tu cuenta!</h1>
                <div class="well">
                    <p>En esta sección podras tener un resumen general de tus Tickets, generar reportes, revisar solicitudes de otros usuarios ó responder a preguntas que te hayan enviado.</p>
                </div>
            </div>

            <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
                <div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
                <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Tickets</div>
                <div class="panel-body">
                    <a href="tickets/search" >Buscar ticket</a>
                </div>
                <div class="panel-body">
                    <a href="tickets/deposit" >Depositar ticket</a>
                </div>
                <div class="panel-body">
                    <a href="tickets/deposited" >Mis tickets depositados</a>
                </div>
                <div class="panel-body">
                    <a href="tickets/recycled" >Mis tickets reciclados</a>
                </div>
                <div class="panel-body">
                    <a href="tickets/searches" >Mis busquedas</a>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Catalogo de receptores</div>
                <div class="panel-body">
                    <a href="list/rfc" >Registrar RFC</a>
                </div>
                <div class="panel-body">
                    <a href="list/rfc" >Consultar RFC</a>
                </div>
                <div class="panel-body">
                    <a href="list/rfc" >Modificar RFC</a>
                </div>
                <div class="panel-body">
                    <a href="list/rfc" >Eliminar RFC</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
