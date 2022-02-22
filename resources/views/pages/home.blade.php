<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/df75158e35.js" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
<body>
@include('pages.nav-bar')
<div class=" container-fluid"style="min-height: 100vh; width: 100%" id="content">
    <div class="row">
        <div class="col-xl-3 col-lg-3">
            @include('pages.side-nav')
        </div>
        <div class="col-xl-6 col-lg-6">
            <a href="#" onclick="event.preventDefault(); $('#myModal').modal('show');" style="text-decoration: none; color: black;">
                <div class="card">
                    <div>
                        @if(auth()->user()->profile_img&&auth()->user()->google_id)
                            <img src="{{url(auth()->user()->profile_img)}}" class="userAvatar">
                        @elseif(auth()->user()->profile_img)
                            <img src="{{url('/images/users_profile_img/' . auth()->user()->profile_img)}}" class="userAvatar">
                        @else
                            <img src="/images/users_profile_img/user_default.svg" class="userAvatar">
                        @endif
                        <span class="ms-2">What's on your mind, <span class="users-name">{{auth()->user()->first_name}}</span>?</span>
                    </div>
                </div>
            </a>
            <home></home>
        </div>
    </div>
</div>
</body>
</html>