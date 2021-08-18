
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>i Gadget Care | apple device service center bangalore | laptop service center kormangala | doorstep mobile repair bangalore | mobile service center bangalore | smart phone service center near me</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="../css/common-style.css">
    <link rel="stylesheet" href="../css/responsive.css">
     <link rel="shortcut icon" type="image/icon" href="../images/logo/favicon.png"/>
    <link href="../css/custom.css" rel="stylesheet">
    
     

</head>
<body class="" style="padding-right: 0px;">
<!-- <div class="preloader"></div> -->



<header class="header clearfix">
    <div class="main-header stricky bubble">

    <div class="container">
       <div class="matrix-black col-md-4">
        
            <div class="logo pull-left">

                <a href="../">
                    <img src="../images/logo/logo1.png" alt="Awesome Image">
                </a>
            </div>
         </div>
         

            <div class="nav-outer col-md-8">
                <div class="header-top">
                    <div class="contact">
                        <span class="icon fa fa-phone"></span>Call :  +91 82175 05435
                    </div>
                   <?php if(Auth::check())
                   { ?>
                      <div class="register">
                    <a href="/home" class="">{{ Auth::user()->name }}</a>
                </div>
                <div class="register">
                <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>
             
                 <?php  }else
                   {?>
                    <div class="register">
                    <a href="#small-dialog1" class="popup-with-zoom-anim">Register</a>
                </div>
                <div class="register">
                    <a href="#small-dialog" class="popup-with-zoom-anim">Login </a>
                </div>
                  <?php 
                   }
                
            ?>
                    
                    <div id="polyglotLanguageSwitcher">
                        <form action="#">
                            <select id="polyglot-language-options">
                                <option id="bangalore" value="Bangalore" selected>Bangalore</option>
                           
                               
                            </select>
                        </form>
                    </div>
                    <!-- <div id="top-search" class="top-search">
                        <span class="flaticon-search search"></span>
                        <ul class="search-box">
                            <li>
                                <form action="#">
                                    <input type="text" placeholder="Search for something...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>
                        </ul>
                    </div> -->
                    <div class="cart">
                        <a href="../track" title="Track Your Gadget Work Status"><i class="fa fa-map-marker"></i></a>
                    </div>
                </div>
                <nav class="mainmenu-area">
                    <div class="navbar" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            
                        </div>
                        <div class="navbar-collapse collapse text-center">  
                            <ul>
                                <li>
                                    <a href="../">Home</a>
                                   
                                </li>
                                <li class="">
                                    <a href="../about">About</a>
                                    
                                </li>
                                <li>
                                    <a href="../service">Services</a>
                                   
                                </li>
                                   <li class="dropdown">
                                    <a href="">Portfolio</a>
                                     <ul class="submenu">
                                        <li>
                                            <a href="../gallery">Gallery</a>
                                        </li>
                                        <li><a href="../video">Video</a></li>
                                     
                                    </ul>
                                </li>
                                <li>
                                    <a href="../track">Track</a>
                                    
                                </li>
                                <li>
                                    <a href="../book">Book Repair</a>
                                   
                                </li>
                                <li><a href="../contact">Contact</a></li>
                            </ul>  
                        </div> 
                    </div>
                </nav>
            </div>

        </div>
    </div>
</header>

<div id="small-dialog" class="mfp-hide">
    <div class="pop_up w3-agile">
      <div class="iservice-pop">
      <h4>iService Point Customer Login</h4>
      <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
      
          <div class="clearfix"> </div>
        
      </div>
    </div>
  </div>




  <div id="small-dialog1" class="mfp-hide">
    <div class="pop_up w3-agile">
      <div class="iservice-pop">
      <div class="card">
                <div class="card-header text-center text-capitalize">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Moblie Number') }}</label>

                            <div class="col-md-8">
                            <input id="moblie" type="text" class="form-control " name="moblie" required autocomplete="">

                                @error('moblie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">

                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>
    </div>
</div>

<style>
    .my-mfp-zoom-in.mfp-ready #small-dialog1 {
    opacity: 1;
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.my-mfp-zoom-in #small-dialog1 {
    opacity: 0;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    -webkit-transform: scale(0.8);
    -moz-transform: scale(0.8);
    -ms-transform: scale(0.8);
    -o-transform: scale(0.8);
    transform: scale(0.8);
}

#small-dialog1 {
    background: #fff;
    padding: 1em;
    max-width: 629px;
    margin: 40px auto;
    position: relative;
    text-align: left;
    border: 7px double #007eff;
    /* background: url(../images/services/time-ser1.png)no-repeat; */
    background-size: cover;
}
.card-header {
    /* border: 1px solid; */
    padding: 3%;
    margin-top: -6%;
    margin-bottom: 6%;
    font-size: 28px;
}
h1, h2, h3, h4, h5, h6 {
    position: relative;
    font-family: sans-serif;
    margin: 0px;
    background: none;
    color: #232323;
}

.list-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    margin-top: 5%;
    font-size: 18px;
    border-radius: .25rem;
}
.fa-map-marker {
    font-size: 2.3em !important;
    color: white;
}
</style>