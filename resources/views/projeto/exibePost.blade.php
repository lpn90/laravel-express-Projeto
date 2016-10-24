<?php
/**
 * User: Leonardo
 * Date: 24/10/2016
 * Time: 18:57
 */
?>
@extends('template')

@section('title')
    Blog - Post {{ $id }}
@endsection

@section('content')
    <H1>Blog Leonardo - Post {{ $id }}</H1>

    <div id="news-list" class="col-xs-8">

        <a type="button" class="btn btn-primary" href="/posts"><span class="glyphicon glyphicon-chevron-left">Voltar</span></a>
        <br>

        <div class="media">
            <img src="{{URL::asset( $posts[$id-1] )}}" class="img-responsive" alt="Imagem Responsiva">
        </div>

        <br>
        <a type="button" class="btn btn-primary" src="/posts"><span class="glyphicon glyphicon-chevron-left">Voltar</span></a>

    </div>

@endsection

