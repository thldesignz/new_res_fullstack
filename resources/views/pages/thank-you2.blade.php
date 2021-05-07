@extends('layouts.app')

@section('title')

Thank You - {{$settings["general"]->site_title}} 

@endsection

@section('content')
    
    
    <div id="offers-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-10 offset-md-1 thanks">
                    <h1>Thank you</h1>
                    <p>Thank you for your reservation. You will recieve a confirmation through email </p>
                        
                 </div>



             </div>
             
        </div>
    </div>
   
@endsection