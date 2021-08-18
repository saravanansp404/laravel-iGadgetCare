<?php use  App\Http\Controllers\CustomAuthController;?>
@include('pages.menu')
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <div class="container-fluid">
  <div class="row">


    <!-- sidebar -->
    <div class="col-md-3 col-lg-2 px-0  bg-white shadow-sm sidebar" id="sidebar">
      <h2 class="bi bi-bootstrap text-primary d-flex my-4 justify-content-center">i gadget care </h3>
      <div class="list-group rounded-0">
        <a href="/home" class="list-group-item list-group-item-action  border-0 d-flex align-items-center">
          <span class="bi bi-border-all"></span>
          <span class="ml-2">Dashboard</span>
        </a>
        <a href="/home/bookrepair" class="list-group-item list-group-item-action  border-0 align-items-center">
          <span class="bi bi-box"></span>
          <span class="ml-2">Book Repair</span>
        </a>
        <a href="/home/Tracking Status" class="list-group-item list-group-item-action active border-0 align-items-center">
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
            <span class="ml-2">Sales</span>
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
            <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Sellers</a>
            <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Purchase Orders</a>
          </div>
        </div>
      </div>
    </div>
    <!-- overlay to close sidebar on small screens -->
    <div class="w-100 vh-100 position-fixed overlay d-none" id="sidebar-overlay"></div>
    <!-- note: in the layout margin auto is the key as sidebar is fixed -->
    <div class="col-md-9 col-lg-10 ml-md-auto px-0 ">
      <!-- top nav -->
      <br>      <?php $user = auth()->user(); 
      $userid=$user->id;
      $mobliestatus= CustomAuthController::mobliestatus($user->id) ;
    //   print_r($mobliestatus);
      ?>
      <main class="container-fluid">
   
       @foreach($mobliestatus as $mobliestatus)
        <div class="jumbotron jumbotron-fluid rounded bg-white border-0 shadow-sm border-left ">
  
        <div class="container">
      <div class="row">
          <div class="col-md-12">
        
  <div class="row">   
<img src="../img/images.png" class="ph_img">

<div class="moblie-detail">
    <p><b>Booking Token : </b>{{$mobliestatus->booktoken}}</p>
    <p><b>Date :</b><?php $date= $mobliestatus->date;
  echo $newDate = date("d-m-Y", strtotime($date));?></p>
    <p><b>Moblie Brand :</b>{{$mobliestatus->mobliebrand}}</p>
    <p><b>Moblie Problem :</b>{{$mobliestatus->moblieproblem}}</p>
    <p style="color: red;"><b style="color: black;">Status :</b><?php $status=$mobliestatus->status;
    if($status=='')
    {
        echo "waiting for service";
    }
    elseif ($status=='in process') {
        echo 'in process';
    } 
    elseif($status=='completed'){
        echo 'completed';
    }
    elseif($status=='delivered'){
        echo "delivered";
    }
    
    
    ?></p>

</div>
</div>
        
          
</div>
          
  </div>
  </div>
 
  </div>
  @endforeach
  </div>
</div>
      </main>
    </div>
  </div>
</div>




      <style>
    @import url('https://fonts.googleapis.com/css2?family=Barlow&display=swap');
    @media (min-width: 576px){
.jumbotron {
    padding: 2rem 2rem;
}
    }
body{
  font-family: 'Barlow', sans-serif;
}
.moblie-detail{
    margin-left: 22%;
}
.ph_img{
    width: 15%;
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
.moblie-detail {
    margin-left: 10%;
}
.ph_img {
    width: 27% !important;
    height: 36%;
}
  .sidebar.active{
    transform : translateX(0);
  }
  .nav1{
      margin-top: 3%;
  }
  .title-n{
    visibility: hidden;
  }

}
.jumbotron-fluid {
    padding-right: 0;
    padding-left: 0;
    border-radius: 0;
    box-shadow: 0 2px 12px -2px rgb(0 0 0 / 98%) !important;
}
.ph_img{
    width: 15%;
}
@media screen and (min-width: 767px){
  .lap{
    visibility: hidden;
  }
}
</style>

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





        <!-- jQuery js -->
    <script src="assets/jquery/jquery-1.12.3.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- jQuery ui js -->
    <script src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>

    <!-- wow js -->
    <script src="assets/wow.js"></script>

    <!-- owl carousel js -->
    <script src="assets/owl.carousel-2/owl.carousel.min.js"></script>              <!-- jquery.bxslider js -->
    <script src="assets/jquery.bxslider/jquery.bxslider.min.js"></script>
    

    
    <!-- Gallery -->
    <script src="assets/jquery.mixitup.min.js"></script>
    <script src="assets/isotope.pkgd.min.js"></script>
    <script src="assets/jquery.countdown.min.js"></script>
    <script src="assets/masterslider/masterslider.js"></script>
    <script src="assets/SmoothScroll.js"></script>

    <!-- revolution slider js -->
    <script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

    <!-- Gallery sub -->
    <script src="assets/Polyglot-Language-Switcher-master/js/jquery.polyglot.language.switcher.js"></script>
    <script src="assets/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
    <script src="assets/scrollbar.js"></script>
 
    <script src="js/script.js"></script>



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