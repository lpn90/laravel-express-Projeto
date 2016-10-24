<?php
/**
 * User: Leonardo
 * Date: 21/10/2016
 * Time: 12:07
 */
?>

@extends('template')

@section('title')
    Blog - Posts
@endsection

@section('content')
    <H1>Blog Leonardo - Posts</H1>

    <div id="news-list" class="col-xs-8">

        <div class="media">
            <?php  $cont = 1; ?>
            @foreach($posts as $post)

                <a class="media-left" href="/posts/{{ $cont }}">
                    <img alt="150x100" width="150" height="100" src="{{URL::asset( $post )}}">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">Post <?php echo $cont; $cont++; ?>  </h4>
                    <p> <!-- Descrição do Post --> ... </p>
                </div>
                <br>
            @endforeach
        </div>
    </div>


@endsection
