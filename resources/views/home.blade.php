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
    <div class="col-md-3 col-lg-2 px-0  h-100 bg-white shadow-sm sidebar" id="sidebar">
    <h2 class="bi bi-bootstrap text-primary d-flex my-4 justify-content-center">i gadget care </h3>
      <div class="list-group rounded-0">
        <a href="#" class="list-group-item list-group-item-action active border-0 d-flex align-items-center">
          <span class="bi bi-border-all"></span>
          <span class="ml-2">Dashboard</span>
        </a>
        <a href="/home/bookrepair" class="list-group-item list-group-item-action border-0 align-items-center">
          <span class="bi bi-box"></span>
          <span class="ml-2">Book Repair</span>
        </a>
        <a href="/home/Tracking Status" class="list-group-item list-group-item-action border-0 align-items-center">
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
            <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Sellers</a>
            <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Purchase Orders</a>
          </div>
        </div>
      </div>
    </div>
    <!-- overlay to close sidebar on small screens -->
    <div class="w-100 vh-100 h-100 position-fixed overlay d-none" id="sidebar-overlay"></div>
    <!-- note: in the layout margin auto is the key as sidebar is fixed -->
    <div class="col-md-9 col-lg-10 ml-md-auto px-0 ">
      <!-- top nav -->
     
      <?php $user = auth()->user(); ?>
      <!-- main content -->
      <main class="container-fluid">
        <section class="row">
          <!-- <div class="col-md-6 col-lg-4">
           
            <article class="p-4 rounded shadow-sm border-left
               mb-4">
              <a href="#" class="d-flex align-items-center">
                <span class="bi bi-box h5"></span>
                <h5>
              
              
  
               </h5>
              </a>
            </article>
          </div>
          <div class="col-md-6 col-lg-4">
            <article class="p-4 rounded shadow-sm border-left mb-4">
              <a href="#" class="d-flex align-items-center">
                <span class="bi bi-person h5"></span>
                <h5 class="ml-2">Customers</h5>
              </a>
            </article>
          </div>
          <div class="col-md-6 col-lg-4">
            <article class="p-4 rounded shadow-sm border-left mb-4">
              <a href="#" class="d-flex align-items-center">
                <span class="bi bi-person-check h5"></span>
                <h5 class="ml-2">Sellers</h5>
              </a>
            </article>
          </div> -->
        </section><br>
        <h2  class=""> profile</h2><br>
        <div class="jumbotron jumbotron-fluid rounded bg-white border-0 shadow-sm border-left px-4">
  
        <div class="container">
      <div class="row">
      <div class="col-md-4 col-xs-6">
            
            <img src="img/user.png" class="user">
  </div>

  
 
  <div class="col-md-8 col-xs-6 address-c">
  <h2 class=" ml-2 ">Name : <?php echo $user->name?></h2>
  <h2 class=" ml-2 ">Phone Number : {{$user->moblie}}</h2>
  <h2 class=" ml-2 ">Email Id : {{$user->email}}</h2>
  
  <h4 class=" ml-2 "> 
    <?php  $userid=$user->id;
       $address= CustomAuthController::useraddress($userid) ;
      foreach($address as $address)
      {
      $address=$address->address;
      } ?>
      <h2 class=" m-2 ">Address :<?php if( $address){
        print_r($address);
      } else{
        echo "please add your  address ";
      } ?> </h2><br>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
 Add  address
</button>
   
    
 

 
</h5></div>
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

a:hover{
  text-decoration: none;
}

.border-left{
  border-left: 2px solid var(--primary) !important;
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
  .ph_img {
    width: 28% !important;
    height: 24% !important;
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
.user{
    width: 180px;
  }
  .jumbotron-fluid {
    padding-right: 0;
    padding-left: 0;
    border-radius: 0;
    box-shadow: 0 2px 12px -2px rgb(0 0 0 / 98%) !important;
}
.sidebar {
    top: 0;
    left: 0;
    height: 700px !important;
    /* height: 100% !important; */
    z-index: 100;
    overflow-y: auto;
    box-shadow: 0 2px 23px -2px rgb(0 0 0 / 98%) !important;
}
@media only screen and (max-width: 600px) {
  .sidebar {
    top: 0;
    left: 0;
    height: 100% !important;
  position: absolute;
    z-index: 100;
    overflow-y: auto;
    box-shadow: 0 2px 23px -2px rgb(0 0 0 / 98%) !important;
}
.title-n{
    visibility: hidden;
  }

}
@media screen and (min-width: 767px){
  .lap{
    visibility: hidden;
  }
}
.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 15px;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.h5, h5 {
    font-size: 2.25rem;
}
.btn {
  
    font-size: 15px;

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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="useradd/<?php echo $user->id ;?>" method="POST">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="form-group">
    
    <textarea type="text" rows="5" class="form-control" id="exampleInputEmail1" name="address" aria-describedby="emailHelp" placeholder="Enter Your Address" required></textarea>
    
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


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