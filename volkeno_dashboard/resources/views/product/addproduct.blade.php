@extends('dashboard')
@section('content')
<fieldset style="margin: 0% 0% 0% 1%">
    <h2>Product</h2>

    <form action="" method="POST" >
        @csrf
        <div class="row" style="margin: 0% 0% 0% 1%">
            <div class="col-md-2">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" name="libelle">
                    <label for="floatingInputGrid">Name</label>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" name="description">
                    <label for="floatingInputGrid">Description</label>
                </div>
            </div>
        </div><br>
        <input class="btn btn-primary" type="submit" name="" value="ENREGISTRER">
    </form>
</fieldset>
@endsection
