@extends('/layout/layout')

@section('content')
    <div class="container-fluid">
        <div class="offset-1 col-sm-5 cadreGrey ">
            <img src="{{ asset($item->image) }}" alt="image ours" class="img-fluid rounded">
            <div class="flex-row">
                <div class="d-flex align-items-center">
                    <p>{{$item->name}}</p>
                    <button class="btn btn-outline-light btn-sm d-none d-sm-block">
                        <img src="{{ asset ("pictures/share.png")}}"class="img-fluid ">
                    </button>
                    <button class="btn btn-outline-light btn-sm d-none d-sm-block">
                        <img src="{{ asset ("pictures/heart.png")}}"class="img-fluid">
                    </button>
                </div>
                <p>{{$item->description}}</p>
                <div class="barreFine font-weight-bold">
                    <p>{{$item->price}} €</p>
                </div>
                <a href="{{route('products.edit',['productId'=>$item->id])}}">
                    <button class="btn btn-secondary">Modifier produit
                    </button>
                </a>
                <form class="" action="{{route('products.delete',['productId'=>$item->id])}}" method="post">
                {{method_field('DELETE')}}
                {{ csrf_field() }}

                    <button type="submit" class="btn btn-warning">Supprimer de la BD!</button>
                </form>
            </div>
        </div>
    </div>
@endsection
