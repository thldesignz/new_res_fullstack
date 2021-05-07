@extends('layouts.app')

@section('title')

Contact - {{$settings["general"]->site_title}} 

@endsection

@section('content')
    
    
    <div id="contact-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Contact Us</h1>
                        <h3>Address</h3>
                        <p>
                            {{$settings["general"]->address_1}}<br>
        {{$settings["general"]->city}}, {{$settings["general"]->state}} {{$settings["general"]->zipcode}}
                        </p>
                        <h3>Phone Number</h3>
                        <p>
                            {{$settings["general"]->phone_number}}
                        </p>
                 </div>
                 <div class="col-md-6">
                    

                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1958.1435886184208!2d-73.94601698563415!3d40.808858858132936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f60cd3f0c56f%3A0x42be8b74f8751a5e!2sSylvia&#39;s!5e0!3m2!1sen!2sus!4v1620091628942!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div> 
             </div>
        </div>
    </div>
   
@endsection
