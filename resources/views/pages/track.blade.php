@include('pages.menu')
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
        #contenitore{
        position: relative;
        width: 800px;
        margin: 20px auto;
        text-align:center;
        overflow:hidden;
        font: 14px 'Trebuchet MS', sans serif;
        }
        .left{
        float:left;
        width:48%;
        }
        #grafico{
        position:relative;
        height:300px;
        /*border-left:2px solid #000000;
        border-bottom: 2px solid #000000;*/
        width:100%;
        margin-top:20px;
        }
        .riga{
        position:absolute;
        left:0;
        height: 1px;
        background-color:gray;
        width: 100%;
        }
        .riga div{
        float:left;
        margin: -8px 0 0 -40px;
        }
        .canc{
        clear:both;
        }
        table{
        width:60%;
        background-color: white;
        color: #000;
        margin: 1em auto;
        }
        table caption{
        background-color: #D8EED8;
        color: #004156;
        text-align: left;
        }
        table tr:nth-child(2n){
        background-color: #D8EED8;
        }
        table tr:nth-child(2n+1){
        background-color: #BFDFFF;
        }
        table td{
        text-align:center;
        border-bottom: 1px solid #CDCDCD;
        padding: 6px;
        }
        .column{
        position:absolute;
        width: 16%;
        bottom: 0;
        background-color: #003366;
        margin-left:5%;
        }
        div.button {
            margin: 0 auto;
            text-align: center;
            width: 100px;
            background-color:#003366;
            border: 1px solid #003366;
            border-radius: 5px;
            padding: 8px;
            color: #E1E2CF;
            cursor: pointer;
        }
        .column div{
        margin-top:-20px;
        height:20px;
        }
        .refer{
            font-size: 1.5em;
            font-style: italic;
        }
    </style>

<?php
    //include_once '../admin/model/iservice-db.php';
    //$conn = db_connect();
    
 

?>


    <div class="banner">
        <img src="../images/background/iservice-track.png" alt="Track iService Point - iphone service center bangalore" title="apple service center near me">
    </div>
 

 

<div class="track-iserv">


    
 


<h2>Track the Work Status by Entering the Reference Number Below</h2>
    <div class="container">


        </div>
    <form action="../track" method="GET">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

        <input class="track-text" type="text" placeholder="Enter Reference Number" value="{{old('search')}}" name="search" required>
        <input class="track-btn" type="submit" name="search_btn">
    </form>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
             
    @foreach ($posts as $post)
               
       <?php $statu=$post->status;?>       
       <h2>The Work Status </h2>

         @if($statu== 'waiting for service')

         <div class="container">
  <div class="row">
						<div class="col-12 col-md-12 hh-grayBox pt45 pb20">
							<div class="row justify-content-between">
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>waiting for service<br><span></span></p>
								</div>
								<div class="order-tracking ">
									<span class="is-complete"></span>
									<p>in process<br><span></span></p>
								</div>
								<div class="order-tracking ">
									<span class="is-complete"></span>
									<p>completed<br><span></span></p>
								</div>
                                <div class="order-tracking ">
									<span class="is-complete"></span>
									<p>delivered<br><span></span></p>
								</div>
							</div>
						</div>
					</div>
                </div>
                @elseif($statu== 'in process')

                <div class="container">
  <div class="row">
						<div class="col-12 col-md-12 hh-grayBox pt45 pb20">
							<div class="row justify-content-between">
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>waiting for service<br><span></span></p>
								</div>
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>in process<br><span></span></p>
								</div>
								<div class="order-tracking ">
									<span class="is-complete"></span>
									<p>completed<br><span></span></p>
								</div>
                                <div class="order-tracking ">
									<span class="is-complete"></span>
									<p>delivered<br><span></span></p>
								</div>
							</div>
						</div>
					</div>
                </div>
                @elseif($statu== 'completed')
                <div class="container">
  <div class="row">
						<div class="col-12 col-md-12 hh-grayBox pt45 pb20">
							<div class="row justify-content-between">
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>waiting for service<br><span></span></p>
								</div>
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>in process<br><span></span></p>
								</div>
								<div class="order-tracking completed ">
									<span class="is-complete"></span>
									<p>completed<br><span></span></p>
								</div>
                                <div class="order-tracking ">
									<span class="is-complete"></span>
									<p>delivered<br><span></span></p>
								</div>
							</div>
						</div>
					</div>
                </div>

                @elseif($statu== 'delivered')
                <div class="container">
  <div class="row">
						<div class="col-12 col-md-12 hh-grayBox pt45 pb20">
							<div class="row justify-content-between">
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>waiting for service<br><span></span></p>
								</div>
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>in process<br><span></span></p>
								</div>
								<div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>completed<br><span></span></p>
								</div>
                                <div class="order-tracking completed">
									<span class="is-complete"></span>
									<p>delivered<br><span></span></p>
								</div>
							</div>
						</div>
					</div>
                </div>
            
                @endif


@endforeach 
 

</div>
   
@include('pages.footer')
    <script>
        function viewGraph(){
        $('.column').css('height','0');
        $('table tr').each(function(index) {
        var ha = $(this).children('td').eq(1).text();
        $('#col'+index).animate({height: ha}, 1500).html("<div>"+ha+"</div>");
        });
        }
        $(document).ready(function(){
        viewGraph();
        });
    </script>
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

    </body>

</html>
<style>
    .hh-grayBox {
	background-color: #F8F8F8;
	margin-bottom: 20px;
	padding: 35px;
  margin-top: 20px;
}
.h2, h2 {
    font-size: 3rem;
}
.pt45{padding-top:45px;}
.order-tracking{
	text-align: center;
	width: 24.33%;
	position: relative;
	display: block;
}
.order-tracking .is-complete{
	display: block;
	position: relative;
	border-radius: 50%;
	height: 30px;
	width: 30px;
	border: 0px solid #AFAFAF;
	background-color: #f7be16;
	margin: 0 auto;
	transition: background 0.25s linear;
	-webkit-transition: background 0.25s linear;
	z-index: 2;
}
.order-tracking .is-complete:after {
	display: block;
	position: absolute;
	content: '';
	height: 14px;
	width: 7px;
	top: -2px;
	bottom: 0;
	left: 5px;
	margin: auto 0;
	border: 0px solid #AFAFAF;
	border-width: 0px 2px 2px 0;
	transform: rotate(45deg);
	opacity: 0;
}
.order-tracking.completed .is-complete{
	border-color: #27aa80;
	border-width: 0px;
	background-color: #27aa80;
}
.order-tracking.completed .is-complete:after {
	border-color: #fff;
	border-width: 0px 3px 3px 0;
	width: 7px;
	left: 11px;
	opacity: 1;
}
.order-tracking p {
	color: #A4A4A4;
	font-size: 16px;
	margin-top: 8px;
	margin-bottom: 0;
	line-height: 20px;
}
.order-tracking p span{font-size: 14px;}
.order-tracking.completed p{color: #000;}
.order-tracking::before {
	content: '';
	display: block;
	height: 3px;
	width: calc(100% - 40px);
	background-color: #f7be16;
	top: 13px;
	position: absolute;
	left: calc(-50% + 20px);
	z-index: 0;
}
.order-tracking:first-child:before{display: none;}
.order-tracking.completed:before{background-color: #27aa80;}

</style>


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
