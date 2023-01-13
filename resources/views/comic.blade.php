@extends('layouts.app')
@section('page-title', "Comic DC-Comics")

@section('main')

    <div class="blue-bar"></div>

    <section class="info-section">

        <div class="container">

            <div class="d-flex flex-column cover">
                <img src="{{$single_comic['thumb']}}" alt="">
                <div class="gallery">VIEW GALLERY</div>
            </div>

            <div class="d-flex justify-content-between">

                <div class="col-8 left-info d-flex flex-column">

                    <h1 class="comic-title">{{$single_comic['title']}}</h1>

                    <div class="green-bar mt-3 px-4 d-flex">

                        <div class="col-9 py-3 separator">

                            <div class="d-flex justify-content-between pe-4">

                                <div>U.S. Price: {{$single_comic['price']}}</div>

                                <div>AVAILABLE</div>

                            </div>

                        </div>

                        <div class="col-3 py-3 ps-4 check-availability">Check Availability</div>
                        
                    </div>

                    <div>
                        <p class="mt-3">{{$single_comic['description']}}</p>
                    </div>

                </div>

                <div class="col-4 right-info">

                    <div class="d-flex flex-column">

                        <div class="fw-semibold text-end">ADVERTISEMENT</div>

                        <img src="{{ asset('images/adv.jpg') }}" alt="adv">

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection