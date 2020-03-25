




<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title> DN </title>
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/homestyle.css") }}">

</head>
    <body>
{{--@section('content')--}}

    <header class="hero" >
        <div class="container ml-lg-15">
            <h2 class ="container slogan_bordo mb-0" style="font-size:200%;">Moins</h2>
            <h2 class ="container mb-0"  style="font-size:130%;">c'est</h2>
            <h2 class ="container slogan_bordo "  style="font-size:300%;margin-top:-1.5vh;">mieux </h2>
        </div>


    </header>
    <div class="jumbotron pitch  my-lg-15">
        <p class="text_description text-lg-center "> D.N pour Droujba Narodov, signifie littéralement en russe  “L’amitié des peuples”. </p>

        <p class="text_description text-lg-center "> Renouez avec les plus belles heures du communisme et ses notions de partage,
            d’égalité et du bien commun.
        </p>
    </div>

{{--Partie "La box"--}}
    <div class ="container col-lg-12 labox my-lg-5 text-lg-center">
        <div class ="text-white text_titles  " id="laboxmobile">LA BOX</div>
        <table class="table laboxtable">
            <tr class ="row">

                <td class ="col-lg-8">
                    <div ><img class ="img-fluid container-fluid" src ="{{ asset("pictures/box.jpg") }}" alt ="labox"></div>
                </td>

                <td class ="col-lg-3">
                    <div class ="text-white text_titles" id="laboxdesktop">LA BOX</div>
                    <div class ="text-white"><p class="text_description ">Découvrez nos boxes mensuelles, proposées à un tarif éthique et responsable.
                            Vous y trouverez des goodies, affiches exclusives et des épices
                            qui vous rappelleront les plus grandes périodes de disettes du monde moderne.
                        </p>
                    </div>
                    <div class="btn btn-light savoir_plus">En Savoir Plus</div>
                </td>

            </tr>
        </table>
    </div>

{{--Partie "Collections"--}}
    <div class="container collections ">
        <div class="text_titles2 ">COLLECTIONS</div>
        <div><p class="text_description">Retrouvez nos collections,
                inspirées des époques marquantes de l’histoire du communisme.
            </p>
        </div>


    </div>

{{--Creer un caroussel pour les collections--}}
<div id="carouselCaptions" class="carousel slide container" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselCaptions" data-slide-to="1"></li>

    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset("pictures/chapka.jpg") }}" class="d-block " style="height:500px;width:auto;" alt="chapka">
            <div class="carousel-caption d-none d-block">
                <h5 class ="text_titles2 text-dark">ColdWear</h5>
                <p  class="text_description">Retrouvez notre collection “Cold Wear”, tournée vers le meilleur
                    de la mode avant 1991 et succombez ainsi
                    aux textiles d’époque et à une douceur incomparable...</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset("pictures/veste.jpg") }}" class="d-block " style="height:500px; " alt="veste">
            <div class="carousel-caption d-none d-block">
                <h5  class ="text_titles2 ">Perestroika</h5>
                <p  class="text_description">Plus tourné vers le côté moderne ? Laissez vous tenter par la collection Perestroïka
                    symbolisant trois axes prioritaires : “L'accélération, la démocratisation et la transparence !” :
                    Des designs minimalistes, des prix accessibles et des lignes épurées !</p>
            </div>
        </div>

    </div>
    <a class="carousel-control-prev " href="#carouselCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next " href="#carouselCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>


</div>



{{--Partie tirage photo "Histoire en images"--}}
    <div class ="container photo_histoire">
        <div  class="text_titles2">L'HISTORE EN IMAGES</div>
        <div><p class="text_description">Vous souhaitez apporter un côté rétro dans vos lieux de vie et de collaboration commune?

                Une large bibliothèque de tirages photo où vous aurez la possibilité d’obtenir,
                en qualité d’époque, des cartes postales et posters témoins de l’histoire.
            </p>
        </div>
        <img class ="img-fluid container-fluid" src ="{{ asset("pictures/nounours.jpg") }}" alt ="piscine_abandonnee">
        <div>quatre points</div>
    </div>
    <div class="container plus_articles">
        <div class="text_titles">Plus d'articles</div>
        <div  class="text_titles2">Pour elle</div>
        <img class ="img-fluid container-fluid" src ="{{ asset("pictures/chemise_large.jpg") }}" alt ="pour_elle">
        <div>deux points</div>
    </div>


{{--@endsection--}}


    </body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
