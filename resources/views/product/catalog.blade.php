@extends('layout.layout')

@section('content')


    <body class="container-fluid">
    <!-- titre-->
    <section class="flex-row">
        <div class="align-content-center">
            <h1 class="title text-center text-uppercase">catalogue</h1>
        </div>
    </section>

    <div class="d-flex flex-wrap">
        <!-- container global-->
        <section class="d-flex ">
            <!-- text left -->
            <div class="d-none d-sm-block pr-5">
                <ul class="list-group mb-3">
                    <li class="list-group text-capitalize font-weight-bolder list-group-item-action">catégories</li>
                    <li class="list-group">hommes</li>
                    <li class="list-group">femmes</li>
                    <li class="list-group">enfant</li>
                    <li class="list-group">bébés</li>
                </ul>
                <ul class="list-group mb-3">
                    <li class="list-group text-capitalize font-weight-bolder list-group-item-action">produits</li>
                    <li class="list-group">vêtements</li>
                    <li class="list-group">accessoires</li>
                    <li class="list-group">boxes</li>
                </ul>
                <ul class="list-group mb-5">
                    <li class="list-group text-capitalize font-weight-bolder list-group-item-action">collections</li>
                    <li class="list-group">coldwear</li>
                    <li class="list-group">perestroïka</li>
                </ul>
                <ul class="list-group">
                    <li class="list-group text-capitalize font-weight-bolder list-group-item-action">marge de prix</li>
                    <li>
                        <button type="button" class="btn btn-light">0€</button>
                        -----------------
                        <button type="button" class="btn btn-light">1 000€</button>
                    </li>
                </ul>
                <div>
                    <form action="" method="get">
                        @if($sortby=='name')
                            <button type="submit" formaction="/catalog/sortbyprice"
                                    class="btn btn-outline-secondary float-right mb-3 d-none d-sm-block">Trier par prix
                            </button>
                         @endif
                        @if($sortby=='price')
                            <button type="submit" formaction="/catalog"
                                    class="btn btn-outline-secondary float-right mb-3 d-none d-sm-block">Trier par nom
                            </button>
                        @endif
                    </form>
                </div>
            </div>
            <!-- first teddy bear-->
            <form class="" action="" method="get">
                {{ csrf_field() }}
                <div class="d-flex flex-wrap">
                    @foreach($items as $item)
                        <div class="col-md-4 cadreGrey">
                           <a href="{{route('products.show',['productId'=>$item->id])}}">
                               <img src="{{ asset($item->image) }}" alt="{{$item->name}}" class="img-fluid rounded" >
                           </a>

                            <div class="flex-row">
                                <div class="d-flex align-items-center">
                                    <p>{{$item->name}}</p>
                                    <button class="btn btn-outline-light btn-sm d-none d-sm-block"><img
                                            src="{{ asset ("pictures/share.png")}}" class="img-fluid "></button>
                                    <button class="btn btn-outline-light btn-sm d-none d-sm-block"><img
                                            src="{{ asset ("pictures/heart.png")}}" class="img-fluid"></button>
                                </div>
                                <p>{{$item->description}}</p>
                                <div class="barreFine font-weight-bold">
                                    <p>{{$item->price}} €</p>
                                </div>
{{--                                <button class ="btn-secondary" type="submit">Voir détail</button>--}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </form>
        </section>

    </div>
    </body>

@endsection
