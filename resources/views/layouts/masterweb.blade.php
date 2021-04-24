<?php 
$service = DB::table('services')->get();

?>

<!doctype html>
<html>
<head>

	<link rel="icon" href="{{asset('WebsiteAssets')}}/assets/tablogo.png" type="image/icon type">
	
<link href="{{asset('WebsiteAssets')}}/css/Main StyleSheet.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('WebsiteAssets')}}/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('WebsiteAssets')}}/css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="{{asset('WebsiteAssets')}}/css/jquery-fab-button.css" rel="stylesheet">
<script src="{{asset('WebsiteAssets')}}/jQuery/jquery-3.4.1.min.js"></script>
<script src="{{asset('WebsiteAssets')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('WebsiteAssets')}}/js/wow.min.js"></script>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
<title></title>
</head>

<body>






    <!--------------------------------Navbar-------------------------------------->
   

    <nav class="navbar nav1 navbar-expand-lg  sticky-top">
      <section class="container-fluid">
        <a class="navbar-brand" href="{{asset('WebsiteAssets')}}/#"><img src="{{asset('WebsiteAssets')}}/assets/logo2.png" width="50px" height="auto" alt="" style="transform: scale(1.4);"></a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-three-dots"></i><br>
          
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{action('Web\WebController@homepage')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{action('Web\WebController@who_we_are')}}">Who We Are</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{asset('WebsiteAssets')}}/#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Our Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach($service as $s)
                  <a class="dropdown-item" href="{{action('Web\WebController@view_service')}}?service_id={{$s->service_id}}"><i class="bi bi-globe"></i> {{$s->service_name}}</a>
                @endforeach
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{asset('WebsiteAssets')}}/#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Solution
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{asset('WebsiteAssets')}}/solitions.html">Online Job Posting System</a>
                <a class="dropdown-item" href="{{asset('WebsiteAssets')}}/#">Insurance Customer Info System</a>
                <a class="dropdown-item" href="{{asset('WebsiteAssets')}}/#">Case Management System</a>
                <a class="dropdown-item" href="{{asset('WebsiteAssets')}}/#">Real State Customer System</a>
                <a class="dropdown-item" href="{{asset('WebsiteAssets')}}/#">Education Management System</a>
                <a class="dropdown-item" href="{{asset('WebsiteAssets')}}/#">Point Of Sale (POS)</a>
              </div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{action('Web\WebController@technology')}}">Technology</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{asset('WebsiteAssets')}}/Porfolio.html">Portfolio</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{asset('WebsiteAssets')}}/Contact.html">Contact</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{asset('WebsiteAssets')}}/login.html">Login</a>
            </li>

            <li class="nav-item">
              
              <section class="quotebtn " data-toggle="modal" data-target="#exampleModalLong"   ></section>
            
           
            </li>

            
          </ul>
        </div>
      </section>
      </nav>


      <!---------------------------------------------------->

      <section class="quotemobile" data-toggle="modal" data-target="#exampleModalLong"></section>


@yield('web_body')




    <section class="container=fluid p-3" style=" background-color: #00000038;">
      <section class="container">
        <center>
          <img src="{{asset('WebsiteAssets')}}/assets/logo2.png" width="100px" height="auto" alt="">
          <p>We make your business bright , as well as we promote your <br> business , also we solve your business .</p>

          <a href="{{asset('WebsiteAssets')}}/" class="m-1" style="font-size: 30px; color: rgb(0, 102, 255);"><i class="fab fa-facebook"></i></a>   <a href="{{asset('WebsiteAssets')}}/"  class="m-1" style="font-size: 30px; color: rgb(26, 223, 8);"><i class="fab fa-whatsapp"></i></a>  
         
         <br><br>
          <section class="row">

            <section class="col-md-3 ml-auto text-center">
              <p style="font-size: 17px;">
                <i class="fas fa-envelope mr-3" style="color: #D66828;"></i> info@mtcoders.com
              </p>
            </section>

            <section class="col-md-3 m-auto text-center">
              <p  style="font-size: 17px;">
                <i class="fas fa-mobile mr-3" style="color: #D66828;"></i> + 92 315 295 2995
              </p>
            </section>

            <section class="col-md-3 mr-auto text-center">
              <p  style="font-size: 17px;">
                <i class="fa fa-phone mr-3" style="color: #D66828;"></i> 021 34372995
              </p>
            </section>

            <section class="col-md-12 m-auto text-center">
              <p style="font-size: 17px;">
                <i class="fas fa-location-arrow mr-3"  style="color: #D66828;"></i> Suit No. 505 5th Floor Marine Faisal Nursury Shahra-e-Faisal Karachi
              </p>
            </section>

          </section>
         

        </center>
      </section>
    </section>
    <section class="container text-center pt-2">
      <p class="">© 2020 Copyright:
    
        <strong style="color: #D66828;"> mtcoders.com</strong>
    
      </p>
    </section>
    <!-- Floating Social Media bar Starts -->
<div class="float-sm"  >
  <div class="fl-fl float-fb">
    <i class="fab fa-facebook " style="float: left !important;"></i>
  <a href="{{asset('WebsiteAssets')}}/https://www.facebook.com/MT-Coders-100486418658945"  target="_blank">
    <section class="Social-btn">Facebook</section>  
  </a>
  </div>
  <div class="fl-fl float-tw">
  <i class="fab fa-facebook-messenger" style="float: left !important;"></i>
  <a href="{{asset('WebsiteAssets')}}/https://www.facebook.com/messages/t/100486418658945" target="_blank">
    <section class="Social-btn">Messenger</section> 
  </a>
  </div>
  <div class="fl-fl float-gp">
  <i class="fab fa-whatsapp" style="float: left !important;"></i>
  <a href="{{asset('WebsiteAssets')}}/https://wa.me/923340210117?text=Hi%20I%27m%20interested%20in%20your%20Services" target="_blank">
    <section class="Social-btn">WhatsApp</section>  </a>
  </div>
  <div class="fl-fl float-rs">
  <i class="fab fas fa-phone" style="float: left !important;"></i>
  <a href="{{asset('WebsiteAssets')}}/tel:+92-3340210117" target="_blank">
    <section class="Social-btn">Call</section>  
  </a>
  </div>
</div>

<div class="fl-fl float-twr">
  <i class="fab fa-instagram" style="float: left !important;"></i>
  <a href="{{asset('WebsiteAssets')}}/https://twitter.com/navin_jsk" target="_blank">
    <section class="Social-btn">Instagram</section> 
  </a>
  </div>
</div>
<!-- Floating Social Media bar Ends -->



  <div class="modal fade mainmodal"  id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document"  style=" background-color: white !important;">
      <div class="modal-content"  style="backdrop-filter:blur(50px) !important; background-color: transparent !important;">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"  style="color: #D66828; font-size: 30px;">Quotation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="">
        
            <div class="form-group">
             
              <input type="text" class="form-control textfield" style="background-color: rgba(197, 197, 197, 0.281) !important;" id="exampleInputPassword1" placeholder="Name">
    
            </div>
    

            <div class="form-group">
             
              <input type="text" class="form-control textfield" style="background-color: rgba(197, 197, 197, 0.281) !important;" id="exampleInputPassword1" placeholder="Details">
    
            </div>
    

            <div class="form-group">
              <input type="text" class="form-control textfield" style="background-color: rgba(197, 197, 197, 0.281) !important;" id="exampleInputPassword1" placeholder="Deadline">
            </div>


            <div class="form-group">
              <select class="form-control textfield" name="" id="" style="background-color: rgba(197, 197, 197, 0.281) !important;">
                <selected value="">PHP</selected>
                <option value="">.NET</option>
                <option value="">Laravel</option>
                <option value="">Python</option>
                <option value="">Wordpress</option>
                <option value="">Magento</option>
                <option value="">HTML</option>
              </select>
            </div>

            <center>
              <a href="{{asset('WebsiteAssets')}}/" class=" mtbtn pl-2 pr-2  pt-1 pb-1">Submit</a>
    
              <br><br>
              
            
            </center>
           
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<script>
  AOS.init();
</script>
<script src="{{asset('WebsiteAssets')}}/js/jquery-fab-button.js"></script>


