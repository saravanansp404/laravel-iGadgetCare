<?php
if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['msg'];


$to='kartvenk29@gmail.com';
$sub='Enquiry- iService Point';
$message='Name:'.$name.'
  Email:'.$email.'    
  Phone:'.$phone.'  
  Message:'.$message;

$headers='from:iservicepoint.in'."\r\n";
$send=mail($to,$sub,$message,$headers);


if($send)
{
	
	echo "<script>alert('Mail Sent Successfully');</script>";
}

else
{
echo "<script>alert('Sorry Try Again');</script>";
}
}
?>













<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact iservice point | call iservice point bangalore | macbook service center near me | iservice point address | book online gadgets repair </title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

@include('pages.menu')


    <div class="banner">
        <img src="../images/background/iservice-contact.png" alt="Contact iService Point - iphone service center bangalore" title="apple service center near me">
    </div>



    <div class="mobile-map">
    <div class="container">
        <iframe src="https://www.google.com/maps/d/embed?mid=15zXbv5aPSLwuIZlapPbtOqpL1aVzwsr0" frameborder="0" allowfullscreen></iframe>
    </div>
    </div>


  


<section class="contact-us">

    <div class="container">
        <div class="section-title center">
                <h2>Feel Free To <span>Contact Us</span></h2>
                <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div>
            </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-12">
                <div class="contact-box">

                    <form method="post" action="/contactus" class="contact-form">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">      
                        <div class="row clearfix">
                            <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                                <input type="text" name="name" value="" placeholder="Enter Your Name*"  required>
                            </div>

                           
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <input type="email" name="email" value="" placeholder="Email*">
                            </div>


                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <input type="text" name="moblie" value="" placeholder="Phone No" required>
                            </div>
                            
                            
                            <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                                <textarea name="message" placeholder="Message" required></textarea>
                            </div>

                            <div class="form-group col-lg-12 center">
                                <button type="submit" name="submit" class="btn-style-one center">Submit now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


        <div class="upper">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="item center">
                        <div class="icon">
                            <span class="icon-location"></span>
                        </div>
                        <div class="content">
                            <!-- <h4><a href="#">Address</a></h4> -->
                            <p><a href="">#1023, first floor ,80 feet road , 1st block, koramangla, Bangalore - 560095</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="item center">
                        <div class="icon">
                            <span class="icon-technology-2"></span>
                        </div>
                        <div class="content">
                            <!-- <h4><a href="#">Phone number</a></h4> -->
                            <p><a href="tel:8217505435">+(91) 82175 05435</a></p>
                            <!-- <p><a href="tel:09994514455">+(91) 9994514455</a></p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="item center">
                        <div class="icon">
                            <span class="icon-interface"></span>
                        </div>
                        <div class="content">
                            <!-- <h4><a href="#">Email id</a></h4> -->
                            <p><a href="mailto:igadgetcare21@gmail.com">igadgetcare21@gmail.com </a></p>
                            <!--<p><a href="mailto:icf.thecm@gmail.com">icf.thecm@gmail.com</a></p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
    


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
    
    </body>

</html>