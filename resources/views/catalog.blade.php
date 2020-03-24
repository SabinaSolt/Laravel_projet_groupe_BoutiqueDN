<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>catalogue</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset("styles.css") }}">
    </head>

   <!-- content -->
    <body>
        <div>
            <h1 class="title">Catalogue</h1>
        </div>
        <div>
            <button type="button">Filtrer</button>
        </div>
        <div>
            <img src="{{ asset("ours_olympique.jpg") }}" alt="image ours">
        </div>
        <div> <!-- partie texte sous la photo -->
            <div>
                Nom du Produit
            </div>
            <div>
                Prix du Produit
            </div>
        </div>

    </body>
</html>
