@extends('dashboard')
@section('content')
<br/>
<div>
<form class="d-flex" style="margin:0% 35% 0% 35%">
    <input id="myInput" class="form-control me-2" type="text" placeholder="Saisir..." aria-label="Search">
    <button class="btn btn-outline-success" type="submit" name="envoi">Search</button>
</form>
<br>
<a class="nav-link" href="{{ route('addproduct') }}"><input style="margin: 0% 0% 0% 1%" type="button" class="btn btn-primary" name="" id="" value="Add Product"></a><br>

    <table border="1" class="table m-5">
        <thead>
            <tr>
                <td>Name</td>
                <td>Description</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach ($prod as $prod )
            <tr>
                <td>{{$prod->libelle}}</td>
                <td>{{$prod->description}}</td>
                <td><a href="{{ route('editproduct' , ['id' => $prod->id]) }}"><button type="button" class="btn btn-warning"><i class="bi bi-pencil"></i></button></a>
                    <a href="{{ route('delpro' , ['id' => $prod->id]) }}"><button type="button" class="btn btn-danger">DELETE</i></button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
