@extends('layouts.app')

@section('content')
    <div class="header" style="margin-left: 20px;">
        <!--h1><a href=" $permalink "> $title </a></h1-->
        <h1>Notícias do RSS do Google</h1>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-10">
    @foreach ($items as $item)
        <div class="item">
            <h2><a href="{{ $item->get_permalink() }}" target="_blank">{{ $item->get_title() }}</a></h2>
            <p>{!! $item->get_description() !!}</p>
            <p><small>Postado em {{ $item->get_date('d/m/Y H:i') }}</small></p>
        </div>
    @endforeach
    </div>
    <div class="col-md-1"></div>
@endsection