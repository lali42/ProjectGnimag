@extends('layouts.app')

@section('content')
<div>
    <img src="https://store.ubi.com/on/demandware.static/-/Sites-masterCatalog/default/dwca2ba5e0/images/pdpbanner/5afda8a96b54a4271407a85b.jpg" alt="">
</div> <br><br>
<div class="container">
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="card-header" style="margin: 20px;"><h1> {{ $game->name }} </h1></div>
                <div class="card-body">
                    <div class="card-body" style="margin: 20px;">
                        <p class="card-text"> {{ $game->type }}</p> <hr>
                        <p class="card-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $game->review }}</p> <hr>
                        <p class="card-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $game->description }}</p> <hr>
                        <p class="card-text">{{ $game->space }}</p> <hr>
                        <p class="card-text">{{ $game->language }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Comments</div>

                <div class="panel-body comment-container" >
                    
                    @foreach($comments as $comment)
                        <div class="well">
                            <h4>Unknow</h4>
                            <i><b> {{ $comment->name }} </b></i>&nbsp;&nbsp;
                            <span> {{ $comment->comment }} </span>
                            <div style="margin-left:10px;">
                                <div class="reply-form">
                                                                        
                                </div>                                
                            </div>
                        </div>
                    @endforeach
                    <a href="{{ action('HomeController@index') }}" class="btn btn-primary">BACK</a>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>