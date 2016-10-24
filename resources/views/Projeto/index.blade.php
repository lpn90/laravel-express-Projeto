<?php
/**
 * User: Leonardo
 * Date: 21/10/2016
 * Time: 11:52
 */
?>
@extends('template')

@section('title')
    Blog
@endsection

@section('content')
    <H1>Blog Leonardo</H1>

    <div class="col-md-6">
        Vamos rir um pouco com alguns posts engraçados, pois rir faz bem!
    </div>
    <br>
    <div class="col-md-6">
        <img src="{{URL::asset('/img/smille.jpg')}}" class="img-responsive" alt="Imagem Responsiva">
    </div>

@endsection
