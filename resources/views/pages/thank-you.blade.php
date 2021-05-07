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
                    <p>Thank you for joing the mailing list. You will reseve all offers we have through email </p>
                        
                 </div>



             </div>
             
        </div>
    </div>
   
@endsection