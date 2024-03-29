@extends('layouts.admin')



@section('content')




<div class="container-fluid  dashboard-content">
       <!-- ============================================================== -->
       <!-- pageheader -->
       <!-- ============================================================== -->
       <div class="row">
           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="page-header">
                   <h2 class="pageheader-title">Create a Item</h2>
                   <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                   <div class="page-breadcrumb">
                       <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                               <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                               <li class="breadcrumb-item"><a href="/admin/food-items" class="breadcrumb-link">All Food items</a></li>
                               <li class="breadcrumb-item active" aria-current="page">New Food Item</li>
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
                       <h5 class="card-header">Create a new Item</h5>
                       <div class="card-body">
                         <form class="" method="POST" action="/admin/food-items">
                            @csrf
                               <div class="form-group">
                                   <label for="title">Title</label>
                                   <input id="title" type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus placeholder="Title">

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                               </div>
                               <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" name="description"  required autocomplete="description" autofocus placeholder="Description"> {{ old('description') }}</textarea>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image_url">Image_url</label>
                                    <input id="image_url" type="text" class="form-control form-control-lg @error('image_url') is-invalid @enderror" name="image_url" value="{{ old('image_url') }}"  autocomplete="image_url" placeholder="Image_Url">

                            @error('image_url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input id="price" type="text" class="form-control form-control-lg @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" placeholder="price">

                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                </div>




                            <div class="form-group">
                                    <label for="inputrole">Category</label>
                                    <select name="category_id" class="form-control" id="inputrole">
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                        @if ($category->title)
                                        @endif >{{ $category->title }}</option>

                                    @endforeach

                                    </select>
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


