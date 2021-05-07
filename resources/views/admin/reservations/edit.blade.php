@extends('layouts.admin')



@section('content')




<div class="container-fluid  dashboard-content">
       <!-- ============================================================== -->
       <!-- pageheader -->
       <!-- ============================================================== -->
       <div class="row">
           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="page-header">
                   <h2 class="pageheader-title">Edit a Reservation</h2>
                   <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                   <div class="page-breadcrumb">
                       <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                               <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                               <li class="breadcrumb-item"><a href="/admin/reservations" class="breadcrumb-link"> All Reservations</a></li>
                               <li class="breadcrumb-item active" aria-current="page"> Edit a Reservation</li>
                           </ol>
                       </nav>
                   </div>
               </div>
           </div>
       </div>
       <!-- ============================================================== -->
       <!-- end pageheader -->
       <!-- ============================================================== -->


           <div class="row">
               <!-- ============================================================== -->
               <!-- basic form -->
               <!-- ============================================================== -->
               <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                   <div class="card">
                       <h5 class="card-header">Edit a new Reservation</h5>
                       <div class="card-body">
                        <form class="" method="POST" action="/admin/reservations/{{ $reservation->id }}">
                            @csrf
                            @method('PUT')
                               <div class="form-group">
                                   <label for="inputFirstName">First Name</label>
                                   <input id="inputFirstName" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname', $reservation->fname) }}" required autocomplete="fname" autofocus placeholder="First name">

                            @error('fname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                               </div>
                               <div class="form-group">
                                <label for="inputLastName">Last Name</label>
                                <input id="inputLastName" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname', $reservation->lname) }}" required autocomplete="lname" autofocus placeholder="Last name">

                            @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputphone">phone_number</label>
                                    <input id="inputphone" type="phone_number" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number', $reservation->phone_number) }}" required autocomplete="phone_number" placeholder="phone_number">

                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputguest">guest_total</label>
                                    <input id="inputguest" type="guest_total" class="form-control form-control-lg @error('guest_total') is-invalid @enderror" name="guest_total" value="{{ old('guest_total', $reservation->guest_total) }}" required autocomplete="guest_total" placeholder="guest_total">

                            @error('guest_total')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                </div>

                                <div class="form-group ">
                                    <label for="inputtime">time</label>
                                    <input id="inputtime" type="text" class="form-control form-control-lg @error('time') is-invalid @enderror" name="time" value="{{ old('time', $reservation->time) }}" required autocomplete="time" placeholder="time">

                            @error('time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                </div>


                           


                               <div class="row">
                                   <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">

                                   </div>
                                   <div class="col-sm-6 pl-0">
                                       <p class="text-right">
                                           <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                       </p>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
               <!-- ============================================================== -->
               <!-- end basic form -->
               <!-- ============================================================== -->

           </div>


   </div>




@endsection


