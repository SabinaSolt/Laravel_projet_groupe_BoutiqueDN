@extends('/layout/layout')
@section('content')

    <div class=" panel panel-default container col-md-9 p-5" >
        <div class="panel-heading">
            <h2 class="panel-title">Formulaire Ajouter un produit</h2>
        </div>
        <div class="panel-body">
            <form class="" action="/products" method="post">
                {{ csrf_field() }}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="name">Nom du produit:</label>
                    <input type="text" class="form-control" name="name" placeholder="name">
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" class="form-control" rows="8" cols="80"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">URL de l'image:</label>
                    <input type="text" class="form-control" name="image" placeholder="images/image.jpg">
                </div>
                <div class="form-group">
                    <label for="price">prix:</label>
                    <input type="number" class="form-control" name="price" placeholder="0.00">
                </div>
                <div class="form-group">
                    <label for="weight">poids en gramme:</label>
                    <input type="number" class="form-control" name="weight" placeholder="000">
                </div>
                <div class="form-group">
                    <label for="stockquantity">quantité en stock:</label>
                    <input type="number" class="form-control" name="stockquantity" value="1">
                </div>
                <div class="form-group">
                    <label for="available">Disponible à la vente:</label>
                    <select name="available" class="form-control">
                        <option value="1">oui</option>
                        <option value="0">non</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="categoryId">Categorie du produit:</label>
                    <select name="categoryId" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
