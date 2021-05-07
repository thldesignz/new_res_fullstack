<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

               <meta name="description"
          content="Looking to learn to code to get a job as a web developer, software engineer, frontend developer, backend developer, or HTML email developer this the best site.">
        <meta name="robots" content="follow,index,max-snippet:-1,max-video-preview:-1,max-image-preview:large">
        {{-- <link rel="canonical" href="https://codingphase.com/"> --}}
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{$settings["general"]->site_title}}- Learn How To Code | Get a Job | Passive Income">
        <meta property="og:description"
          content="{{$settings["seo"]->description}}">
        <meta property="og:url" content="https://codingphase.com/">
        <meta property="og:site_name" content="{{$settings["general"]->site_title}}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{$settings["general"]->site_title}} ">
        <meta name="twitter:description"
          content="Looking to learn to code to get a job as a web developer, software engineer, frontend developer, backend developer, or HTML email developer this the best site.">
    

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



    </head>
    <body>
    <section id="app-layout">
      @include('include.side-menu')
      <section id="content-section">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @yield('content')

      </section>
  </section>
    </body>
</html>
