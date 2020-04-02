@extends('/layout/layout')
@section('content')

    <div class=" panel panel-default container col-md-9 p-5" >
        <div class="panel-heading">
            <h2 class="panel-title">Le produit avec #ID {{ $id }}
                a été supprimé de la base de données</h2>
        </div>
    </div>
@endsection
