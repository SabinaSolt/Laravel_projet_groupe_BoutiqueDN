




<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title> DN </title>
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/homestyle.css") }}">

</head>
    <body>
{{--@section('content')--}}

    <header class="hero" >
        <div class="container-fluid ">
            <h2 class ="container slogan_bordo " style="font-size:5rem;">Moins</h2>
            <h2 class ="container"  style="font-size:3rem;">c'est</h2>
            <h2 class ="container slogan_bordo "  style="font-size:7rem;">mieux </h2>
        </div>


    </header>
    <div class="container-fluid">
        <p> D.N pour Droujba Narodov, signifie littéralement en russe  “L’amitié des peuples”. </p>

        <p> Renouez avec les plus belles heures du communisme et ses notions de partage,
            d’égalité et du bien commun.
        </p>
    </div>
    <div class ="container col-lg-12 labox">
        <div class ="text-white" id="laboxmobile">LA BOX</div>
        <table class="table laboxtable">
            <tr class ="row">

                <td class ="col-lg-8">
                    <div ><img class ="img-fluid container-fluid" src ="{{ asset("pictures/box.jpg") }}" alt ="labox"></div>
                </td>

                <td class ="col-lg-3">
                    <div class ="text-white" id="laboxdesktop">LA BOX</div>
                    <div class ="text-white"><p>Découvrez nos boxes mensuelles, proposées à un tarif éthique et responsable.
                            Vous y trouverez des goodies, affiches exclusives et des épices
                            qui vous rappelleront les plus grandes périodes de disettes du monde moderne.
                        </p>
                    </div>
                    <div>EN SAVOIR PLUS</div>
                </td>

            </tr>
        </table>

    </div>

    <div class="container collections">
        <div>Collections</div>
        <div><p>Retrouvez nos collections,
                inspirées des époques marquantes de l’histoire du communisme.
            </p>
        </div>
        <img class ="img-fluid container-fluid" src ="{{ asset("pictures/chapka.jpg") }}" alt ="chapka">
        <div>Cold Wear</div>
        <div><p>Retrouvez notre collection “Cold Wear”, tournée vers le meilleur
                de la mode avant 1991 et succombez ainsi
                aux textiles d’époque et à une douceur incomparable...
            </p>
        </div>
        <div>trois points</div>
    </div>
    <div class ="container photo_histoire">
        <div>L'histoire en images</div>
        <div><p>Vous souhaitez apporter un côté rétro dans vos lieux de vie et de collaboration commune?

                Une large bibliothèque de tirages photo où vous aurez la possibilité d’obtenir,
                en qualité d’époque, des cartes postales et posters témoins de l’histoire.
            </p>
        </div>
        <img class ="img-fluid container-fluid" src ="{{ asset("pictures/nounours.jpg") }}" alt ="piscine_abandonnee">
        <div>quatre points</div>
    </div>
    <div class="container plus_articles">
        <div>Plus d'articles</div>
        <div>Pour elle</div>
        <img class ="img-fluid container-fluid" src ="{{ asset("pictures/chemise_large.jpg") }}" alt ="pour_elle">
        <div>deux points</div>
    </div>


{{--@endsection--}}


    </body>
</html>

