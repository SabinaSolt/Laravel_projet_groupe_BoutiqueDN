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
        <link rel="stylesheet" href="{{ asset("CSS/styles.css") }}">
    </head>

   <!-- content -->
    <body class="container-fluid">
        <section class="">
            <div class="">
                <h1 class="title text-center text-uppercase">catalogue</h1>
            </div>
        </section>

        <div class="">
            <button type="button" class="btn btn-outline-secondary float-right">Filtrer</button>
        </div>
        <div>
            <img src="{{ asset("pictures/ours_olympique.jpg") }}" alt="image ours" class="img-fluid">
        </div>
        <div> <!-- partie texte sous la photo -->
            <div>
                Ours Olympique
            </div>
            <div class="barreFine font-weight-bold">
                40,00 €
            </div>
        </div>

    </body>
</html>
