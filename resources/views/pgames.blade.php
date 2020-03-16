@extends('layouts.app')

@section('content')

@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div>
    <img src="https://store.ubi.com/on/demandware.static/-/Library-Sites-shared-library-web/default/dwdc88c6d5/images/category-banners/CATBAN_AC_Spring_Sale.jpg" alt="">
</div>

<br><br>

<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-7">
      <h4>G N I M A G</h4>
  </div>
  <div class="col-md-3">
        <form action="/search" method="GET">
          <div class="input-group">
              <input type="search" name="search" class="form-control">
              <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary"> Search </button>
              </span>
          </div>
      </form>
    </div>
</div>

<br>

<div class="col-md-1"></div>
<div class="col-md-10">
<table class="table table-bordered">
    <thead>
      <tr>
          <th>Name</th>
          <th>Type</th>
          <th width ="80">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($games as $game)
        <tr>
            <td> {{ $game->name }} </td>
            <td> {{ $game->type}} </td>
            <td>
                  <a href="{{ action('PublicController@show', $game->id) }}" class="btn btn-info"> VIEW </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
  <div>
    <dr>
        {{ $games->links() }}
  </div>
</div>

    @endsection