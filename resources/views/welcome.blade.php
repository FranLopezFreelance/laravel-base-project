@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                        <div class="col-md-6">
                            <h4>Push to User...</h4>
                            @foreach($users as $user)
                                @if(!Auth::guest() AND $user->id != Auth::user()->id)
                                    <li><a onclick="sendPush({{ $user->id }})">{{ $user->name }}</a></li>
                                @endif
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function sendPush( id) {
        $.get( "/push/" + id );
    }
</script>

@endsection
