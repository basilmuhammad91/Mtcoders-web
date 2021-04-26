@extends('layouts.masterweb')
@section('web_body')
   
    <!--------------------------Banner--------------------------->


<section class="banner navbar">
    <section class="m-auto text-center pl-5 pr-5">
      <span class="bannerheading">{{$homepage->banner_heading}}</span>
      <br>   
      <span style="color: white; font-size: 30px; font-weight: bold; line-height: 1;">{{$homepage->banner_tagline}}</span>
      <br>
      <h6 style="color: white; font-size: 15px; font-family: calibri;">{{$homepage->banner_text}}</h6>
    </section>
</section>

    <!----------------------------------------------------------->
    <br><br>

    <section class="container aboutbanner pt-3 pb-3" style="width: 60%;">

      <section class="row">
        <section class="col-md-5 bg-light border p-4" style="border-radius: 5px; position: relative; left: -30px;">
          <h1 class="headings" style="color: #D66828;">About Us</h1>
          <p>{{$about->about_text}}</p>
          
          <a href="{{asset('WebsiteAssets')}}/about.html" class=" mtbtn pl-2 pr-2  pt-1 pb-1">More Details</a>

<br>
         <br>

        </section>
      </section>

    </section>

   <br>  <br>

    <section class="container-fluid servicebanner p-5 text-center">

      <h1 class="headings" style="color: #D66828; font-size: 40px;">Our Service</h1>

      <br> <br>

      <section class="container">
        <section class="row">

          @foreach($service as $s)
          <section class="col-md-4 p-4  border  service-card">
            <i class="{{$s->icon_class}}"  style="font-size: 40px;"></i>
            <h4 class="text-light">{{$s->service_name}}</h4>
            <a href="{{action('Web\WebController@view_service')}}?service_id={{$s->service_id}}" class=" mtbtn pl-2 pr-2  pt-1 pb-1">More Details</a>
          </section>
          @endforeach

        

          <!-- <section class="col-md-4 p-4  border service-card">
            <i class="fa fa-mobile text-light mt-3"  style="font-size: 40px;"></i>
            <h4 class="text-light">Mobile App <br> Development</h4>
            <a href="{{asset('WebsiteAssets')}}/app-develop.html" class=" mtbtn pl-2 pr-2  pt-1 pb-1">More Details</a>
          </section>

          <section class="col-md-4 p-4  border service-card">
            <i class="bi bi-palette-fill text-light"  style="font-size: 40px;"></i>
            <h4 class="text-light">Graphic <br> Designing</h4>
            <a href="{{asset('WebsiteAssets')}}/Graphics.html" class=" mtbtn pl-2 pr-2  pt-1 pb-1">More Details</a>
          </section>

         

          <section class="col-md-4 p-4 ml-auto  border service-card">
            <i class="bi bi-megaphone-fill text-light"  style="font-size: 40px;"></i>
            <h4 class="text-light">Social Media & <br> Digital Marketing</h4>
            <a href="{{asset('WebsiteAssets')}}/Marketing.html" class=" mtbtn pl-2 pr-2  pt-1 pb-1">More Details</a>
          </section>

          <section class="col-md-4 p-4  mr-auto border service-card">
            <i class="fa fa-cube text-light mt-3"  style="font-size: 40px;"></i>
            <h4 class="text-light">3D Home <br> Designing</h4>
            <a href="{{asset('WebsiteAssets')}}/3dhome.html" class=" mtbtn pl-2 pr-2  pt-1 pb-1">More Details</a>
          </section> -->

          
        </section>
      </section>

    </section>


<br> <br>


    <section class="container-fluid latest-work text-center p-5" style="background-color: #0000000e;">

      <h1 class="headings" style="color: #D66828; font-size: 40px;">Our Latest Work</h1>

      <section class="container">
        <hr>
        <section class="row">
          <section class="col-md-2 col-6 p-3 border work-with" >
              <img src="{{asset('WebsiteAssets')}}/assets/logo1.jpg" class="img-fluid" alt="">
          </section>
  
          <section class="col-md-2  col-6 p-3 border work-with">
              <img src="{{asset('WebsiteAssets')}}/assets/logo2.jpg" class="img-fluid" alt="">
          </section>
  
          <section class="col-md-2  col-6 p-3 border work-with">
              <img src="{{asset('WebsiteAssets')}}/assets/logo3.jpg" class="img-fluid" alt="">
          </section>
  
          <section class="col-md-2 col-6 p-3 border work-with">
              <img src="{{asset('WebsiteAssets')}}/assets/logo4.png" class="img-fluid" alt="">
          </section>
  
          <section class="col-md-2 col-6 p-3 border work-with">
              <img src="{{asset('WebsiteAssets')}}/assets/logo5.jpg" class="img-fluid" alt="">
          </section>
  
          <section class="col-md-2 col-6 p-3 border work-with">
              <img src="{{asset('WebsiteAssets')}}/assets/logo6.jpg" class="img-fluid" alt="">
          </section>
        </section>
        <hr>
      </section>
      
    <br>

    <a href="{{asset('WebsiteAssets')}}/Porfolio.html" class=" mtbtn pl-2 pr-2  pt-1 pb-1">More Details</a>

    </section>


    <br><br>


@endsection()