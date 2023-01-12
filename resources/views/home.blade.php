@extends('layouts.app')
@section('page-title', "Home DC-Comics")

@section('main')
    <div class="comics-section">

        <div class="container py-5">

            <div class="d-flex flex-wrap">

            @foreach ($comics as $element)

            <div class="card-container d-flex flex-column">
                <div class="card-image"> <img class="image-comic" src="{{$element['thumb']}}" alt=""></div>
                <div class="card-text text-white mb-4">{{$element['title']}}</div>
            </div>

            @endforeach

            </div>

            <div class="text-center">
                <button>LOAD MORE</button>
            </div>

        </div>

    </div>
@endsection