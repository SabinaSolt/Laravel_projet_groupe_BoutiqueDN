@extends('/layout/layout')
@section('content')
    <div class=" panel panel-default container col-md-9 p-5" >
        <div class="panel-heading">
            <h2 class="panel-title">Modifiez un produit:</h2>
        </div>
        <div class="panel-body">
            <form class="" action="{{route('products.update',['productId'=>$item->id])}}" method="post">
                {{method_field('PUT')}}
                {{ csrf_field() }}
                <h3>Id:</h3>
                <p><b>{{ $item->id }}</b></p>
                <input type="hidden" class="form-control" name="id" value="{{ $item->id }}">
                <div class="form-group">
                    <label for="name"><h3>Nom du produit(modifiable):</h3></label>
                    <input type="text" class="form-control" name="name" value="{{ $item->name }}">
                </div>

                <h3>Description:</h3>
                <p><b>{{ $item->description }}</b></p>

                <h3>L'image:</h3>
                <p><b><img src="{{ asset($item->image)}}"class="img-fluid" style="max-height:500px;"></b></p>


                <div class="form-group">
                    <label for="price"><h3>prix(modifiable):</h3></label>
                    <input type="number" class="form-control" name="price" value="{{ $item->price }}">
                </div>

                <h3>Categorie du produit:</h3>
                <p><b>{{ $item->categoryId}}</b></p>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
