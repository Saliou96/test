@extends('dashboard')
@section('content')
<fieldset style="margin: 0% 0% 0% 1%">
    <h2>Propriétaire</h2>
    <form action="" method="POST" >
        @csrf
        <div class="row" style="margin: 0% 0% 0% 1%">
            <div class="col-md-2">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" name="new_title" value="{{ $cat->title }}">
                    <label for="floatingInputGrid">Title Category</label>
                </div>
            </div>
        </div><br>
        <input class="btn btn-primary" type="submit" name="" value="update">
    </form>
</fieldset>
@endsection
