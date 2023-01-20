@extends('dashboard')
@section('content')

<br>
<div class="d-flex justify-content-evenly">

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Products</h5>
      <h1 class="card-subtitle mb-2 text-muted">{{count($prod)}}</h1>
    </div>
</div>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Category</h5>
        <h1 class="card-subtitle mb-2 text-muted">{{count($cat)}}</h1>
    </div>
</div>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Users</h5>
        <h1 class="card-subtitle mb-2 text-muted">{{count($client)}}</h1>
    </div>
</div>
</div>


  @endsection
