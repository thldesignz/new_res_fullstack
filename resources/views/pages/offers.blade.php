@extends('layouts.app')



@section('content')
    
    
    <div id="offers-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-10 offset-md-1 ">
                    <h1>Sign up for offers and Rewards</h1>
                    <form>
                    <div class="row">

                      <div class="col-md-6">
                        
                        <div class="form-group">
                          <label for="firstnameinput">First Name</label>
                          <input type="text" name="fname" class="form-control" id="firstnameinput" placeholder="John">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="lastnameinput">Last Name</label>
                          <input type="text" name="lname" class="form-control" id="lastnameinput" placeholder="Smith">
                        </div>
                      </div>

                    </div>

                    <div class="row">

                      <div class="col-md-6">
                        
                        <div class="form-group">
                          <label for="emailinput">Email</label>
                          <input type="email" name="email" class="form-control" id="emailinput" placeholder="name@example.com">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="phoneinput">Phone Number</label>
                          <input type="text" name="phone" class="form-control" id="phoneinput" placeholder="555-555-1234">
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