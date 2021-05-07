@extends('layouts.app')

@section('title')

Offers- {{$settings["general"]->site_title}} 

@endsection

@section('content')
    
    
    <div id="offers-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-10 offset-md-1 ">
                    <h1>Sign up for offers and Rewards</h1>
                    <form class="" method="POST" action="/offers">
                            @csrf
                    <div class="row">

                      <div class="col-md-6">
                        
                        <div class="form-group">
                          <label for="inputfname">First Name</label>
                          <input id="inputfname" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus placeholder="John">

                            @error('fname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputlname">Last Name</label>
                          <input id="inputlname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus placeholder="Smith">

                            @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>

                    </div>

                    <div class="row">

                      <div class="col-md-6">
                        
                        <div class="form-group">
                          <label for="inputemail">Email</label>
                           <label for="inputemail">Last Name</label>
                          <input id="inputemail" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Exapmple@gmail.com">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="inputphone">Phone Number</label>
                          <input id="inputphone" type="tel" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus placeholder="555-555-1234">

                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>

                    </div>
                    

                    <div class="row">

                      <div class="col-md-8">
                        <p>In signing up I acknowledge that I am 18 years of age or older, want to receive email offers from Soul Food and, if I select to join Dine Rewards, agree to the terms and conditions of the program. </p>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Sign Up</button>
                          </div>
                      </div>
                    </div>
                        
                        
                          
                          
                      </form>
                        
                 </div>



             </div>
             
        </div>
    </div>
   
@endsection