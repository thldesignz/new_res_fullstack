@extends('layouts.app')

@section('title')

Menu - {{$settings["general"]->site_title}}

@endsection

@section('content')


    <div id="menu-page">

       @include('include.food-categories-slider')

    </div>

@endsection
