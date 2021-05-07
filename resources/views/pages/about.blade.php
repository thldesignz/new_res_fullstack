@extends('layouts.app')

@section('title')

About - {{$settings["general"]->site_title}} 

@endsection

@section('content')
    
    
    <div id="about-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>About Page</h1>
                        <p>
                            I'm baby salvia post-ironic swag af beard, humblebrag typewriter before they sold out. Kinfolk scenester paleo brooklyn, wolf lo-fi beard humblebrag bespoke raw denim. Cloud bread organic 90's vexillologist waistcoat knausgaard schlitz. Art party raw denim pabst waistcoat, pop-up hoodie occupy etsy. Messenger bag cliche celiac raw denim la croix.
                        </p>
                        <p>
                            Tofu church-key 3 wolf moon next level affogato cred hashtag mlkshk street art meh. Scenester mixtape woke +1. Squid aesthetic gluten-free typewriter. Green juice selfies tattooed synth cloud bread pitchfork.
                        </p>
                 </div>
                 <div class="col-md-6">
                     <img src="https://i.ibb.co/cYk4MMb/Untitled-design-1.png" class="img-fluid">
                </div> 
             </div>
        </div>
    </div>
   
@endsection