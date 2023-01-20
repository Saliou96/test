@extends('dashboard')
@section('content')
<fieldset style="margin: 0% 0% 0% 1%">
    <h2>Category</h2>

    <form action="" method="POST" >
        @csrf
        <div class="row" style="margin: 0% 0% 0% 1%">
            <div class="col-md-2">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" name="firstname">
                    <label for="floatingInputGrid">First Name</label>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" name="lastname">
                    <label for="floatingInputGrid">Last Name</label>
                </div>
            </div>
        </div><br>
        <input class="btn btn-primary" type="submit" name="" value="ENREGISTRER">
    </form>
</fieldset>
@endsection
