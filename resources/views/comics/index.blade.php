@extends('layout.app')

@section('content')
{{-- Jumbotron --}}
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="btn_relative">
                    <button class="current_btn my_border my_bg">CURRENT SERIES</button> 
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Comics section --}}
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card-container">
                @foreach ($comics as $comic)
                    <div class="my-card">
                        <a class="text-decoration-none text-white " href="{{route('comics.show', $comic['id'])}}">
                            <img src="{{ $comic['thumb']}}" alt="">
                            <div class="card-body">
                                {{$comic['title']}}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-12">
            <div class="d-flex justify-content-center pb-5">
                <button class="load_btn my_border my_bg justify-content-center">LOAD MORE</button> 
            </div>
        </div>
    </div>
</div>

{{-- Subscription Banner --}}
<div class="banner">
    <div class="container">
        <ul class="list-unstyled m-0  d-flex justify-content-around  p-5 flex-wrap">
            @foreach ($blueBanner as $item)
                <li>
                    <img src="{{ Vite::asset($item['icon']) }}" alt="">
                    <span class="title">{{$item['title']}}</span>
                </li>    
            @endforeach
        </ul>
    </div>
</div>
@endsection