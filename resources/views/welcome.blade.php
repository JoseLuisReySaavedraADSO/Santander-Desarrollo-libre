{{-- VISTA BIENVENIDA --}}

@extends('layouts.app')
@section('content')

<main class="main__container">

    <section class="container">
    
        <div class="changeBackground">
            <input class="input" type="radio" id="showImage1" name="changeImage" checked>
            <input class="input" type="radio" id="showImage2" name="changeImage">
        </div>

        <div class="title">
            <h1 class="title__main">Tu mejor amigo <span class="title__second">en casa!</span></h1>
        </div>

        <p class="paragraph">Adoptar la mascota perfecta de más de 700 refugios de animales...</p>

        <div class="picture picture__show" id="image1">
            <img class="picture__image" src="{{asset('images-frontEnd/slide1.png')}}" alt="">
        </div>
        
        <div class="picture picture__none" id="image2">
            <img class="picture__image" src="{{asset('images-frontEnd/slide2.png')}}" alt="">
        </div>

        <a class="link" href="{{ route('login') }}"><img src="{{asset('images-frontEnd/chevron-right.svg')}}" alt=""></a>

    </section>

</main>
    
@endsection
