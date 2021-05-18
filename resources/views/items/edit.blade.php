@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/items/'.$item->id) }}" method="post"enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('items.form',['Modo' => 'Editar'])

</form>


</div>

@endsection
