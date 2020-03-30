@extends('/layout/layout')

@section('content')
    <div class="jumbotron-fluid">
        <div class="offset-1 col-sm-5 cadreGrey ">
            <img src="{{ asset($item->imageProduit) }}" alt="image ours" class="img-fluid rounded">
            <div class="flex-row">
                <div class="d-flex align-items-center">
                    <p>{{$item->nomProduit}}</p>
                    <button class="btn btn-outline-light btn-sm d-none d-sm-block"><img src="{{ asset ("pictures/share.png")}}"class="img-fluid "></button>
                    <button class="btn btn-outline-light btn-sm d-none d-sm-block"><img src="{{ asset ("pictures/heart.png")}}"class="img-fluid"></button>
                </div>
                <p>{{$item->descriptionProduit}}</p>
                <div class="barreFine font-weight-bold">
                    <p>{{$item->prix}} €</p>
                </div>

            </div>
        </div>
    </div>
@endsection
