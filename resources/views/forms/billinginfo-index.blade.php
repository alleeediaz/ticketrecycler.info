@extends('layouts.app')

@section('content')
<div class="container">
	<h1>Informacion de Facturacion</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>RFC</td>
            <td>Razon Social</td>
            <td>Calle</td>
            <td>No. Int</td>
            <td>No. Ext</td>
            <td>Municipio</td>
            <td>Estado</td>
            <td>C.P.</td>
            <td>.</td>
            

        </tr>
    </thead>
    <tbody>
    @foreach($rfcs as $key => $value)
        <tr>
            <td>{{ $value->rfc }}</td>
            <td>{{ $value->razon_social }}</td>
            <td>{{ $value->calle }}</td>
            <td>{{ $value->no_int}}</td>
            <td>{{ $value->no_ext}}</td>
            <td>{{ $value->municipio}}</td>
            <td>{{ $value->estado}}</td>
            <td>{{ $value->cp}}</td>
            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <!--<a class="btn btn-small btn-success" href="{{ URL::to('nerds/' . $value->id) }}">Mostrar RFC</a>-->
                <button type="button" class="btn btn-default" aria-label="Left Align"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> </button>
                <button type="button" class="btn btn-default" aria-label="Left Align"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </button>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <!--<a class="btn btn-small btn-info" href="{{ URL::to('nerds/' . $value->id . '/edit') }}">Editar RFC</a>-->

            </td>
        </tr>
    @endforeach
    </tbody>
</table>


	<?php
    	foreach ($rfcs as $rfc) { 
			echo $rfc->rfc.'<br/>';
			echo $rfc->razon_social.'<br/>';
		}
	?>
</div>
@endsection






