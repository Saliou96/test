@extends('dashboard')
@section('content')

<br>
<div>
<form class="d-flex" style="margin:0% 35% 0% 35%">
    <input id="myInput" class="form-control me-2" type="text" placeholder="Saisir..." aria-label="Search">
    <button class="btn btn-outline-success" type="submit" name="envoi">Search</button>
</form>
<br>
<a class="nav-link" href="{{ route('addcategory') }}"><input style="margin: 0% 0% 0% 1%" type="button" class="btn btn-primary" name="" id="" value="Add Category"></a><br>

    <table border="1" class="table m-5">
        <thead>
            <tr>
                <td>Title</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach ($cat as $cat )
            <tr>
                <td>{{$cat->title}} </td>
                <td>
                    <a href="{{ route('editcategory' , ['id' => $cat->id]) }}"><button type="button" class="btn btn-warning">EDIT</i></button></a>
                    <a href="{{ route('delcat' , ['id' => $cat->id]) }}"><button type="button" class="btn btn-danger">DELETE</i></button></a>
                    {{-- <form action="{{ route('destroy',$cat->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('editcategory',$cat->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form> --}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
