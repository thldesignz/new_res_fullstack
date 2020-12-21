@extends('layouts.app')



@section('content')


    <div id="waitlist-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Get on the List</h1>

                    <form>
                        <div class="form-group">
                            <label for="fnameinput">Full Name</label>
                            <input type="text" name="fname" class="form-control" id="fnameinput" placeholder="jane smith">
                          </div>
                        <div class="form-group">
                          <label for="emailinput">Email</label>
                          <input type="email" name="email" class="form-control" id="emailinput" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="phoneinput">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="phoneinput" placeholder="555-555-1234">
                          </div>
                        <div class="form-group">
                          <label for="guestinput">How Many Guest</label>
                          <select name="guest" class="form-control" id="guestinput">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>

                        <div class="form-group">
                            <label for="timeinput">What Time</label>
                            <select name="time" class="form-control" id="timeinput">
                              <option value="5">5:00 PM</option>
                              <option value="6" >6:00 PM</option>
                              <option value="7" >7:00 PM</option>
                              <option value="8" >8:00 PM</option>
                              <option value="9" >9:00 PM</option>
                            </select>
                          </div>
                          <div class="form-group">
                          <button type="submit" class="btn btn-primary">Confirm</button>
                          </div>
                      </form>

                 </div>

                 <div class="col-md-6">
                    <p>
                        Please Note: This is not a reservation. You will be added to our current wait list. You may have a short wait once you arrive wile we prepare your table.
                    </p>
                </div>


             </div>

        </div>
    </div>

@endsection
