<?php use  App\Http\Controllers\CustomAuthController;?>
@include('pages.menu')
<meta charset="utf-8">
 <div class="container-fluid">
  <div class="row">


    <!-- sidebar -->
    <div class="col-md-3 col-lg-2  bg-white  sidebar" id="sidebar">
    <h2 class="bi bi-bootstrap text-primary d-flex my-4 justify-content-center">i gadget care </h3>
      <div class="list-group rounded-0">
        <a href="/home" class="list-group-item list-group-item-action   d-flex align-items-center">
          <span class="bi bi-border-all"></span>
          <span class="ml-2">Dashboard</span>
        </a>
        <a href="/home/bookrepair" class="list-group-item list-group-item-action active  align-items-center">
          <span class="bi bi-box"></span>
          <span class="ml-2">Book Repair</span>
        </a>
        <a href="/home/Tracking Status" class="list-group-item list-group-item-action   align-items-center">
          <span class="bi bi-box"></span>
          <span class="ml-2">Tracking Status</span>
        </a>
        <a class="list-group-item list-group-item-action lap border-0 align-items-center" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        <!-- <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#sale-collapse">
          <div>
            <span class="bi bi-cart-dash"></span>
            <span class="ml-2">Tracking Status</span>
          </div>
          <span class="bi bi-chevron-down small"></span>
        </button>
        <div class="collapse" id="sale-collapse" data-parent="#sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Customers</a>
            <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Sale Orders</a>
          </div>
        </div>

        <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#purchase-collapse">
          <div>
            <span class="bi bi-cart-plus"></span>
            <span class="ml-2">Purchase</span>
          </div>
          <span class="bi bi-chevron-down small"></span>
        </button> -->
        <div class="collapse" id="purchase-collapse" data-parent="#sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action ">Sellers</a>
            <a href="#" class="list-group-item list-group-item-action  ">Purchase Orders</a>
          </div>
        </div>
      </div>
    </div>
    <!-- overlay to close sidebar on small screens -->
    <div class="w-100 vh-100 position-fixed overlay d-none" id="sidebar-overlay"></div>
    <!-- note: in the layout margin auto is the key as sidebar is fixed -->
    <div class="col-md-9 col-lg-10 ml-md-auto px-0 ">
      <!-- top nav -->
     <br>
      <?php $user = auth()->user(); ?>
      <main class="container-fluid">
    
       
        <h2 style="" class="ml-2">Book Repair <?php $bookingid=mt_rand(100,10000000);?></h2><br>
        <div class="jumbotron jumbotron-fluid rounded bg-white border-0 shadow-sm border-left px-4">
  
        <div class="container">
      <div class="row">
          <div class="col-md-12">
          <h5 style="color: red;">Booking ID :{{$bookingid}}</h5><br>
          <div class="section-title center">
               
                <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">Your Booking Was Successful ! , Your Booking Id {{ Session::get('alert-' . $msg) }}  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div>
      
          <form action="/home/mobliebook" method="POST">
  <div class="form-row">
    <div class="col-md-6 ">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <label for="formGroupExampleInput">Name</label>
    <input type="hidden" name="userid" class="form-control" value="{{$user->id}}">
    <input type="hidden" name="bookid" class="form-control" value="{{$bookingid}}">
   
      <input type="text" class="form-control" value="{{$user->name}}" required>
    </div>
    <div class="col-md-6 ">
    <label for="formGroupExampleInput">Moblie</label>
      <input type="text" class="form-control"value="{{$user->moblie}}" required>
    </div>
    <div class="col-md-6 book">
    <label for="formGroupExampleInput">Email</label>
      <input type="text" class="form-control" value="{{$user->email}}" required>
    </div>
    <div class="col-md-6 book">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Address</legend>
      <div class="col-sm-10"><br>
      <?php  $userid=$user->id;
       $address= CustomAuthController::useraddress($user->id) ;
      foreach($address as $address)
      {?>
     
     
      
        <div class="form-check">
          <input class="form-check-input" type="radio" name="address" id="gridRadios1" value=" {{$address->id}}"  checked>
          <label class="form-check-label" for="gridRadios1">
           {{$address->address;}}
          </label>
        </div>
      <?php }?>
  
      </div>
    </div>
     
    </div>


    <div class="col-md-6 book ">
    <label for="formGroupExampleInput">Mobile Brands</label>
      <input type="text" name="mobliebrand" class="form-control"value="" required>
    </div>
    <div class="col-md-6 book ">
    <label for="formGroupExampleInput">Mobile Problem </label>

    <select name="moblieproble"   class="form-control "required >
     <?php  $problem=CustomAuthController::moblieproble() ;?>
     <option selected  disabled>Choose problem</option>
     @foreach($problem as $problem)
    <option value="{{$problem->problemtype}}">{{$problem->problemtype}}</option>
   @endforeach
</select>
<p class="text-center">--or-- </p>
<textarea required  type="text" name="moblieproblemother" rows="5" class="form-control"value="&nbsp;" placeholder="Other Problem"></textarea>

    </div>
    
  </div><br>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
  
          </div>
          
  </div>
  </div>
  </div>

  </div>
</div>
      </main>
    </div>
  </div>
</div>




      <style>
    @import url('https://fonts.googleapis.com/css2?family=Barlow&display=swap');

body{
  font-family: 'Barlow', sans-serif;
}
.list-group-item {
    position: relative;
    display: block;
    padding: 10px 8px;
    margin-bottom: -1px;
    background-color: #fff;
     border: 0px solid #ddd; 
}
a:hover{
  text-decoration: none;
}

.border-left{
  border-left: 2px solid var(--primary) !important;
}
.book{
    margin-top: 3%;
}

.sidebar{
  top: 0;
  left : 0;
  z-index : 100;
  overflow-y: auto;
  box-shadow: 0 2px 23px -2px rgb(0 0 0 / 98%) !important;
}

.overlay{
  background-color: rgb(0 0 0 / 45%);
  z-index: 99;
}
@media screen and (min-width: 1030px){
  
#open-sidebar{
    visibility: hidden;
}
}
/* sidebar for small screens */
@media screen and (max-width: 767px){
  
  .sidebar{
    max-width: 18rem;
    transform : translateX(-100%);
    transition : transform 0.4s ease-out;
  }
  #open-sidebar {
    visibility: inherit;
}
  .sidebar.active{
    transform : translateX(0);
  }
  .nav1{
      margin-top: 3%;
  }

}
.title-n{
    visibility: hidden;
  }
.jumbotron-fluid {
    padding-right: 0;
    padding-left: 0;
    border-radius: 0;
    box-shadow: 0 2px 12px -2px rgb(0 0 0 / 98%) !important;
}
@media screen and (min-width: 767px){
  .lap{
    visibility: hidden;
  }
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
}
* {
    
    padding: 0px;
    border: none;
    outline: none;
    text-align: left;
}
.sidebar {
    top: 0;
    left: 0;
    height: 900px;
    z-index: 100;
    overflow-y: auto;
    box-shadow: 0 2px 23px -2px rgb(0 0 0 / 98%) !important;
}
.jumbotron {
    padding-top: 30px;
    padding-bottom: 30px;
    margin-bottom: 30px;
    color: inherit;
    background-color: white;
}
</style>
<script>
  $('#op').validate({ // initialize the plugin
            rules: {
          user_type:{ required: true},
         }
      });
</script>
<script>
    $(document).ready(()=>{
  
  $('#open-sidebar').click(()=>{
     
      // add class active on #sidebar
      $('#sidebar').addClass('active');
      
      // show sidebar overlay
      $('#sidebar-overlay').removeClass('d-none');
    
   });
  
  
   $('#sidebar-overlay').click(function(){
     
      // add class active on #sidebar
      $('#sidebar').removeClass('active');
      
      // show sidebar overlay
      $(this).addClass('d-none');
    
   });
  
});
</script>

<?php //include_once'footer.php';?>            
@include('pages.footer')





 <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
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