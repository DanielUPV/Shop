@extends('layouts.app')

@section('content')
<div>
<ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="container-fluid">
                <lista-component></lista-component>
            </div>
            <eliminarmodal-component></eliminarmodal-component>
           
</div>
@endsection
