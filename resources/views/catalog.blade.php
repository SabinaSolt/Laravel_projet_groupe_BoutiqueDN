@extends('layout.layout')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset("/css/catalogstyles.css")}}">

    <body class="container-fluid">
        <!-- titre-->
        <section class="flex-row">
            <div class="align-content-center">
                <h1 class="title text-center text-uppercase">catalogue</h1>
            </div>
        </section>
        <div>
            <button type="button" class="btn btn-outline-secondary float-right mb-3 d-none d-sm-block">Filtrer</button>
        </div>
        <div class="d-flex flex-wrap">
            <!-- container global-->
            <section class="d-flex align-items-center">
                <div class="d-none d-sm-block ">
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
                        <li><button type="button" class="btn btn-light">0€</button>-----------------<button type="button" class="btn btn-light">1 000€</button></li>
                    </ul>
                </div>
            </section>
            <!-- first teddy bear-->
            <div class="offset-1 col-sm-3 col-md-3 col-lg-3 cadreGrey">
                <img src="{{ asset("pictures/ours_olympique.jpg") }}" alt="image ours" class="img-fluid rounded">
                <div class="flex-row">
                    <div class="d-flex align-items-center">
                        <p>Ours Olympique</p>
                        <button class="btn btn-outline-light btn-sm d-none d-sm-block"><img src="{{ asset ("pictures/share.png")}}"class="img-fluid "></button>
                        <button class="btn btn-outline-light btn-sm d-none d-sm-block"><img src="{{ asset ("pictures/heart.png")}}"class="img-fluid"></button>
                    </div>
                    <div class="barreFine font-weight-bold">
                        <p>40,00 €</p>
                    </div>
                </div>
            </div>
            <!-- second teddy bear-->
            <div class="offset-1 col-sm-3 col-md-3 col-lg-3 cadreGrey">
                <img src="{{ asset("pictures/ours_olympique.jpg") }}" alt="image ours" class="img-fluid ">
                <div class="flex-row">
                    <div class="d-flex align-items-center">
                        <p>Ours Olympique</p>
                        <button class="btn btn-outline-light btn-sm d-none d-sm-block"><img src="{{ asset ("pictures/share.png")}}"class="img-fluid "></button>
                        <button class="btn btn-outline-light btn-sm d-none d-sm-block"><img src="{{ asset ("pictures/heart.png")}}"class="img-fluid"></button>
                    </div>
                    <div class="barreFine font-weight-bold">
                        <p>40,00 €</p>
                    </div>
                </div>
            </div>
            <!-- third teddy bear -->
            <div class="offset-1 col-sm-3 col-md-3 col-lg-3 cadreGrey">
                <img src="{{ asset("pictures/ours_olympique.jpg") }}" alt="image ours" class="img-fluid ">
                <div class="flex-row">
                    <div class="d-flex align-items-center">
                        <p>Ours Olympique</p>
                        <button class="btn btn-outline-light btn-sm d-none d-sm-block"><img src="{{ asset ("pictures/share.png")}}"class="img-fluid "></button>
                        <button class="btn btn-outline-light btn-sm d-none d-sm-block"><img src="{{ asset ("pictures/heart.png")}}"class="img-fluid"></button>
                    </div>
                    <div class="barreFine font-weight-bold">
                        <p>40,00 €</p>
                    </div>
                </div>
            </div>
        </div>
    </body>

@endsection
