@extends('/layout/layout')
@section('content')

    <div class=" panel panel-default container col-md-9 p-5" >
        <div class="panel-heading">
            <h2 class="panel-title">Nouveau produit a été rajouté:</h2>
        </div>
        <div class="panel-body">
            <h3>Id:</h3>
            <p><b>{{ $item->id }}</b></p>

            <h3>Nom du produit:</h3>
            <p><b>{{ $item->name }}</b></p>

            <h3>Description:</h3>
            <p><b>{{ $item->description }}</b></p>

            <h3>L'image:</h3>
            <p><b><img src="{{ asset($item->image)}}"class="img-fluid" style="max-height:500px;"></b></p>

            <h3>prix:</h3>
            <p><b>{{ $item->price }}</b></p>

            <h3>poids en gramme:</h3>
            <p><b>{{ $item->weight }}</b></p>

            <h3>quantité en stock:</h3>
            <p><b>{{ $item->stockquantity }}</b></p>

            <h3>Disponible à la vente:</h3>
            <p><b>{{ $item->available }}</b></p>

            <h3>Categorie du produit:</h3>
            <p><b>{{ $item->categoryId}}</b></p>

        </div>
    </div>

@endsection
