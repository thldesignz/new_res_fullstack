@extends('layouts.app')

@section('title')

{{$foodItem}} - {{$settings["general"]->site_title}}

@endsection

@section('content')


    <div id="single-menu-page">

        <div class="content-box">

            <div class="row">
                <div class="col-md-12 head-title">
                    <h1>{{ $foodItem }}</h1>
                    <hr class="b">
                    <hr class="r">
                </div>
            </div>

            <div class="row">
                @foreach ($foodItems as $item)
                <div class="col-md-6">
                    <div class="item">
                        <div class="title">
                            <h4>{{ $item->title }}</h4>
                            <span class="price">{{ $item->price }}</span>
                        </div>
                        <div class="descrpition">
                            <p>
                                {{ $item->description }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </div>

@endsection
