@extends('layouts.leftMenu')

@section('content')


<style>
    #special {
        position: absolute;
        top: 30vh;
        left: 40vw;
        text-align: center;
    }
    #special h1 {
        font-size: 80px;
    }
</style>

<div id="special">
    <a href="/chat">
        <h1>Comming soon</h1>
        <h2>Click to go to the chat</h2>
    </a>
</div>


@endsection
