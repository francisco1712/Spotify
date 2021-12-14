@extends('layout')

@section('content')
    <article style="background-image: url('https://wallpaperaccess.com/full/1373265.png');
    height: 1000px;">
        <div class="p-1">
            <p class="p-3">SPOTIFY PREMIUM</p>
            <p class="display-6 ">
                <strong>
                    Consigue 3 meses de Premium gratis
                    Disfruta de música sin anuncios, sin conexión y mucho más. Cancelas cuando quieras.
                </strong>
            </p>
        </div>
        <a href="https://www.spotify.com/purchase/offer/reusable-unique-hero-trial-3m?marketing-campaign-id=holiday-2021" target="_blank">
            <div class="p-2 m-2 rounded text-light text-center w-25 " style="background-color:#8317DD; ">
                <span class="text-light">Consigue 3 meses gratis</span>
        </a>
        </div>
    </article>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
@endsection
