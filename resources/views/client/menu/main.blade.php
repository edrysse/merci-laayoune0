@extends('client.layout')
@section('content')
    @include('client.includes.aside')
    <base href="/public">
    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url(clientpage/images/bg-title-page-01.jpg);">
        <h2 class="tit6 t-center">
            Pato Menu
        </h2>
        
    </section>

<style>
        /*card menu*/
    .container-fluid{max-width: 1200px}
    .card{background: #fff;box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);border: 0;border-radius: 1rem}
    .card-img, .card .card-img-top{border-top-left-radius: calc(1rem - 1px);border-top-right-radius: calc(1rem - 1px)}
    .card h5{overflow: hidden;height: 56px;font-weight: 900;font-size: 1rem}
    .card .card-img-top{width: 100%;max-height: 180px;object-fit: contain;padding: 30px}
    .card h2{font-size: 1rem}
    .card:hover{transform: scale(1.05);box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06)}
    .label-top{position: absolute;background-color: #8bc34a;color: #fff;top: 8px;right: 8px;padding: 5px 10px 5px 10px;font-size: .7rem;font-weight: 600;border-radius: 3px;text-transform: uppercase}
    .top-right{position: absolute;top: 24px;left: 24px;width: 90px;height: 90px;border-radius: 50%;font-size: 1rem;font-weight: 900;background: #ff5722;line-height: 90px;text-align: center;color: white}
    .top-right span{display: inline-block;vertical-align: middle}
    @media (max-width: 768px){
        .card .card-img-top{
            max-height: 250px
        }
    }
    .over-bg{background: rgba(53, 53, 53, 0.85);box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);backdrop-filter: blur(0.0px);-webkit-backdrop-filter: blur(0.0px);border-radius: 10px}
    .btn{font-size: 1rem;font-weight: 500;text-transform: uppercase;padding: 5px 50px 5px 50px}
    .box .btn{font-size: 1.5rem}
    @media (max-width: 1025px){
        .btn{padding: 5px 40px 5px 40px}}
    @media (max-width: 250px){
        .btn{padding: 5px 30px 5px 30px}}
    .btn-warning{background: none #f7810a;color: #ffffff;fill: #ffffff;border: none;text-decoration: none;outline: 0;box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25);border-radius: 100px}
    .btn-warning:hover{background: none #ff962b;color: #ffffff;box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35)}
    .bg-success{font-size: 1rem;background-color: #f7810a !important}
    .bg-danger{font-size: 1rem}
    .price-hp{font-size: 1rem;font-weight: 600;color: darkgray}
    .amz-hp{font-size: .7rem;font-weight: 600;color: darkgray}
    .fa-question-circle:before{color: darkgray}
    .fa-plus:before{color: darkgray}
    .box{border-radius: 1rem;background: #fff;box-shadow: 0 6px 10px rgb(0 0 0 / 8%), 0 0 6px rgb(0 0 0 / 5%);transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12)}
    .box-img{max-width: 300px}
    .thumb-sec{max-width: 300px}
    @media (max-width: 576px){
        .box-img{max-width: 200px}
        .thumb-sec{max-width: 200px}
    }
    .inner-gallery{width: 60px;height: 60px;border: 1px solid #ddd;border-radius: 3px;margin: 1px;display: inline-block;overflow: hidden;-o-object-fit: cover;object-fit: cover}
    @media (max-width: 370px){
        .box .btn{padding: 5px 40px 5px 40px;font-size: 1rem}}
    .disclaimer{font-size: .9rem;color: darkgray}
    .related h3{font-weight: 900}
    /* footer{background: #212529;height: 80px;color: #fff} */
</style>

    <!-- Main menu -->

   
    

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    


<div style="position: relative;" class="navbarMenu">

    
   


    

    <section class="section-mainmenu p-b-70 bg1-pattern">
        <nav style=" width: 50%; margin:auto; padding-top: 30px; padding-bottom: 30px;" class="navMenu">
            <ul class="main_menu">
                <li>
                    <a href={{ route('starters') }}>starters</a>
                </li>
    
                <li>
                    <a href={{ route('drinks') }}>drinks</a>
                </li>
    
                <li>
                    <a href={{ route('main') }} style="color: #ec1d25; font-weight:900">main</a>
                </li>
    
                <li>
                    <a href={{ route('desserts') }}>desserts</a>
                </li>
    
        </nav>
        <div class="dropdown" style="width: 50%; margin: auto; padding-top: 50px; padding-bottom: 50px;">
            <button style="left: 50%; transform: translate(-50%, -50%); position: absolute;" class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Catégories
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href={{ route('starters') }}>STARTERS</a></li>
              <li><a class="dropdown-item" href={{ route('drinks') }}>DRINKS</a></li>
              <li><a class="dropdown-item" href={{ route('main') }}>MAIN</a></li>
              <li><a class="dropdown-item" href={{ route('desserts') }}>DESSERTS</a></li>
            </ul>
    </div>
        <div class="container">
            
            {{-- <div class="row">
                <div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
                    <div class="wrap-item-mainmenu p-b-22">
                        <h3 class="tit-mainmenu tit10 p-b-25" style="color:brown">
                            STARTERS
                        </h3>
                        @foreach ($starters as $item)
                            
                            <div class="item-mainmenu m-b-36">
                                <div class="flex-w flex-b m-b-3">
                                    <a href="{{ route('cart.show', $item->id) }}" class="name-item-mainmenu txt21">
                                        
                                        <button class="btn btn-danger flex-shrink-0 category" type="submit">
                                            <i class="bi-cart-fill me-1"></i>
                                            {{ $item->nom }}
                                        </button>
                                    </a>

                                    <div class="line-item-mainmenu bg3-pattern"></div>

                                    <div class="price-item-mainmenu txt22">
                                        {{ $item->prix }} DHs
                                    </div>
                                </div>

                                <span class="info-item-mainmenu txt23">
                                    {{ $item->description }}
                                </span>
                            </div>
                        @endforeach

                    </div>



                </div>

                <div class="col-md-10 col-lg-6 p-l-35 p-l-15-lg m-l-r-auto">
                    

                    
                </div>
            </div> --}}


            <h3 class="tit-mainmenu tit10 p-b-25" style="color:brown">
                MAIN
            </h3>
            <main> 
                
                <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;"> 
                    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3"> 
                        
                        @foreach ($main as $item)
                            <div class="col"> 
                                <div class="card h-100 shadow-sm"> 
                                    <img src="{{$item->image}}" class="card-img-top" alt="..."> 
                                    <div class="card-body"> 
                                        <div class="clearfix mb-3"> 
                                            <span class="float-start badge rounded-pill bg-danger" style="width: 80px; height: 28px; font-size: 0.9em;">{{$item->nom}}</span> 
                                            <span class="float-end price-hp" style="font-size: 1.25em;">{{$item->prix}} DH</span> 
                                        </div> 
                                        <p class="card-title">
                                            {{ $item->description }}
                                        </p> 
                                        <div class="text-center my-4"> 
                                            <a href="{{ route('cart.show', $item->id) }}" class="btn3 flex-c-m size13 txt11 trans-0-4" style="left: 50%;transform: translate(-50%, -50%); position: absolute;"
                                        >commander</a> 
                                        </div>
                                    </div> 
                                </div> 
                            </div>  
                        @endforeach       
                    </div> 
                </div> 
            </main>
            
            



        </div>
    </section>
</div>
    


@include('client.menu.repas')  
    @endsection