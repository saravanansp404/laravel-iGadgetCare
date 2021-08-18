<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>mobile online repair | iphone repair book online | laptop service center kormangala | doorstep mobile repair bangalore | mobile service center bangalore | smart phone service center near me</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

@include('pages.menu')

<script type="text/javascript">

function checkmail()
{
 var email=document.getElementById("cemail").value;
 alert(email);

 if(email)
 {
  $.ajax({
  type: 'post',
  url: '../admin/controller/checkdata.php',
  data: {
   customer_email:email,
  },
//   console.log(data);
  success: function (response) {
   $( '#customer_email' ).html(response);
   if(response=="OK")   
   {
    return true;    
   }
   else
   {
    return false;   
   }
  }
  });
 }
 else
 {
  $( '#customer_email' ).html("");
  return false;
 }
}

</script>
<link href="../css/custom.css" rel="stylesheet">
                       


    <div class="banner">
        <img src="../images/background/iservice-book.png" alt="Book Doorstep Service iService Point - iphone service center bangalore" title="apple service center near me">
    </div>



<div class="form-reg">
<div class="form-reg11">
<div class="form-reg12">


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




<script>

function pass()

{

var a=document.getElementById('dp1').value;
var b=document.getElementById('dp2').value;

if(a!=b)
{

alert("sorry enter the password correctly");
document.getElementById('dp1').value="";
document.getElementById('dp2').value="";
return false;



}
return true;


}
</script>





<!-- pop-up-grid -->
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
  </div><a href="#small-dialog" class="popup-with-zoom-anim acc">i already have account?Sign in </a>

  <!-- //pop-up-grid --> 

@include('pages.footer')
    <!-- jQuery js -->
    <script src="../assets/jquery/jquery-1.12.3.min.js"></script>
    <!-- bootstrap js -->
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- jQuery ui js -->
    <script src="../assets/jquery-ui-1.11.4/jquery-ui.js"></script>

    <!-- wow js -->
    <script src="../assets/wow.js"></script>

    <!-- owl carousel js -->
    <script src="../assets/owl.carousel-2/owl.carousel.min.js"></script>              
    <script src="../assets/jquery.bxslider/jquery.bxslider.min.js"></script>
    
    <script src="../js/script.js"></script>
 
 <script src="../js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });
                                    
    });
  </script> 
<!-- //here ends scrolling icon --> 

    </body>

</html>
<style>
  .card-header{
    /* border: 1px solid; */
    padding: 3%;
    margin-top: -6%;
    margin-bottom: 6%;
    font-size: 28px;
}
.btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
    width: 10pc;
}
.acc{
  text-align: center;
  text-align: center !important;
    margin-left: 50%;
    position: absolute;
    margin-top: -9%;
    color: red;
}
@media only screen and (max-width: 600px) {
  .acc {
    text-align: center;
    text-align: center !important;
    margin-left: 22%;
    position: absolute;
    margin-top: -22%;
    color: red;
}
}

</style>