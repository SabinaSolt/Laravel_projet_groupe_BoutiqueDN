@extends('/layout/layout')

@section('content')
    <div class="jumbotron-fluid">
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

            </div>
        </div>
    </div>
@endsection
