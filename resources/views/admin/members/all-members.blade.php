@extends('layouts.admin')



@section('content')




       <div class="container-fluid  dashboard-content">
           <!-- ============================================================== -->
           <!-- pageheader -->
           <!-- ============================================================== -->
           <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                   <div class="page-header">
                       <h2 class="pageheader-title">All Offer Members </h2>
                       <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                       <div class="page-breadcrumb">
                           <nav aria-label="breadcrumb">
                               <ol class="breadcrumb">
                                   <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                   <li class="breadcrumb-item active" aria-current="page">All Offer members</li>
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
                           <h5 class="card-header">All Offers Memebers</h5>
                           <div class="card-body">
                               <table class="table">
                                   <thead>
                                       <tr>
                                           <th scope="col">ID</th>
                                           <th scope="col">First Name</th>
                                           <th scope="col">Last Name</th>
                                           <th scope="col">Email</th>
                                           <th scope="col">Phone Number</th>
                                           <th scope="col">Date</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                    @foreach ($members as $member)
                                    <tr>
                                        <th scope="row">{{ $member->id }}</th>
                                        <td>{{ $member->fname }}</td>
                                        <td>{{ $member->lname }}</td>
                                        <td>{{ $member->email }}</td>
                                        <td>{{ $member->phone_number }}</td>
                                        <td>{{ date('m/d/y', strtotime($member->updated_at)) }}</td>
                                        <td><a href="/admin/members/{{ $member->id }}/delete" onclick="if(! confirm('Are you sure you want to delete category?')) {return false; } " ><i class="far fa-trash-alt"></i></a></td>
                                    </tr>
                                    @endforeach



                                   </tbody>
                               </table>
                                {{ $members->links() }}
                           </div>
                       </div>
                   </div>
                   <!-- ============================================================== -->
                   <!-- end basic table -->
                   <!-- ============================================================== -->

               </div>
       </div>




@endsection


