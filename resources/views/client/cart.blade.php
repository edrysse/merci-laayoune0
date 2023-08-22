@extends('client.layout')
@section('content')
    <base href="/public">
    @include('client.includes.aside')
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url(clientpage/images/bg-event-03.jpg);">
        <h2 class="tit6 t-center">
            Commande
        </h2>
    </section>
    <section class="py-5">
         @if ($msg = Session::get('msg'))
            <div class="alert alert-success">
                {{ $msg }}
                <div>
                    <a href="{{ route('clientMenu.index') }}">
                        <button class="btn btn-success flex-shrink-0" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            retour au menu
                        </button>
                    </a>
                    <a href="{{ route('pannier.index') }}">
                        <button class="btn btn-success flex-shrink-0" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            aller au panier
                        </button>
                    </a>
                </div>
                
            </div> 
        @endif
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ $repas->image }}" alt="..." /></div>
                <div class="col-md-6">
                    <div class="meduiam mb-1">{{ $repas->type }}</div>
                    <h1 class="display-5 fw-bolder">{{ $repas->nom }}</h1>
                    <div class="fs-20 mb-7">
                        {{-- <span class="text-decoration-line-through">{{ $repas->prix }} DHS</span> --}}
                        <span>{{ $repas->prix }} DHS</span>

                    </div>
                    <p class="lead">{{ $repas->description }}</p>
                    <form action="{{ route('add_pannier', $repas->id) }}" method='get'>
                        
                        <div class="quantit">
                            {{-- <label for="">Quantité:</label> --}}
                            {{-- <input type="number" name="quantite" value="1" style="max-width: 3rem" /> --}}
                            <div class="number-input">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" type="button"></button>
                                <input class="quantity" min="1" name="quantite" value="1" type="number">
                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus" type="button"></button>

                                {{-- <span class="backgroundOPL"></span>
                                <span class="backgroundOPR"></span> --}}
                            </div>

                             <button class="btn btn-danger q flex-shrink-0" type="submit">
                                <i class="bi-cart-fill me-1"></i>
                                ajouter au panier
                            </button>

                        </div>
                        
                           

                        {{-- <div>
                            <button class="btn btn-danger flex-shrink-0" type="submit">
                                <i class="bi-cart-fill me-1"></i>
                                ajouter au panier
                            </button>
                        </div> --}}
                    </form>

                </div>
            </div>
        </div>
    </section>
   
@endsection