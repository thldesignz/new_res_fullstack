@extends('layouts.admin')



@section('content')




       <div class="container-fluid  dashboard-content">
           <!-- ============================================================== -->
           <!-- pageheader -->
           <!-- ============================================================== -->
           <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                   <div class="page-header">
                       <h2 class="pageheader-title">Reservations </h2>
                       <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                       <div class="page-breadcrumb">
                           <nav aria-label="breadcrumb">
                               <ol class="breadcrumb">
                                   <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                   <li class="breadcrumb-item active" aria-current="page">Reservations</li>
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
                   <!-- basic table -->
                   <!-- ============================================================== -->
                   <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                       <div class="card">
                           <h5 class="card-header">Reservations</h5>
                           <div class="card-body">
                               <table class="table">
                                   <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Guest Total</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Date Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <th scope="col">Jane Smith</th>
                                        <td>janesmith@email.com</td>
                                        <td>513-555-1234</td>
                                        <td>4</td>
                                        <td>4:00PM</td>
                                        <td>7/20/2020</td>
                                    </tr>

                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
                   <!-- ============================================================== -->
                   <!-- end basic table -->
                   <!-- ============================================================== -->

               </div>
       </div>




@endsection


