<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>catalogue</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("CSS/styles.css") }}">
</head>

<!-- content -->
<body class="container-fluid">
<!-- titre-->
<section class="flex-row">
    <div class="align-content-center">
        <h1 class="title text-center text-uppercase">catalogue</h1>
    </div>
</section>
<div>
    <button type="button" class="btn btn-outline-secondary float-right retraitFilter hidden">Filtrer</button>
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
            <ul class="list-group mb-3">
                <li class="list-group text-capitalize font-weight-bolder list-group-item-action">collections</li>
                <li class="list-group">coldwear</li>
                <li class="list-group">perestroïka</li>
            </ul>
        </div>
    </section>
    <!-- first teddy bear-->
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
</body>
</html>
