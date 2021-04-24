@extends('layouts.masterweb')
@section('web_body')

<section class="about-banner navbar pt-5 pb-5">
    <section class="m-auto text-center ">
      <section class="container ">
       
        <section class="container-fluid border ">
          <section class="row" style="align-items: center;">
            <section class="col-md-8 text-left">
              <h3 style="color: #D66828;">{{$service->service_name}}</h3>
              <h5 class="text-light">{{$service->service_text}}</h5>
            </section>

            <section class="col-md-4 p-0 m-0">
              <img src="assets/webdevelopment.jpeg" class="img-fluid" alt="">
            </section>
          </section>
          
        </section>
        <br>
        <section class="container ">
           <section class="row">

          <section class="col-md-4 p-4  border  service-card">
         
            <h1 style="color: #D66828;"><i class="bi bi-laptop service-icon"></i></h1>
  
            <h4 class="text-light">Website Designing</h4>
            
          </section>

          <section class="col-md-4 p-4  border  service-card">
         
            <h1 style="color: #D66828;"><i class="bi bi-file-code service-icon"></i></h1>
  
            <h4 class="text-light">Website Development</h4>
            
          </section>

          <section class="col-md-4 p-4  border  service-card">
         
            <h1 style="color: #D66828;"><i class="bi bi-window service-icon"></i></h1>
  
            <h4 class="text-light">Web Application</h4>
            
          </section>

          <section class="col-md-4 p-4  border  service-card">
         
            <h1 style="color: #D66828;"><i class="bi bi-window-sidebar service-icon"></i></h1>
  
            <h4 class="text-light">Web Portal</h4>
            
          </section>

          <section class="col-md-4 p-4  border  service-card">
         
            <h1 style="color: #D66828;"><i class="bi bi-gear service-icon"></i></h1>
  
            <h4 class="text-light">Open Source &amp; Customized</h4>
            
          </section>

          <section class="col-md-4 p-4  border  service-card">
         
            <h1 style="color: #D66828;"><i class="bi bi-bag service-icon"></i></h1>
  
            <h4 class="text-light">Open Source &amp; Customized E-Commerce Solutions</h4>
            
          </section>

          <section class="col-md-4 p-4  border  service-card">
         
            <h1 style="color: #D66828;"><i class="bi bi-sliders service-icon"></i></h1>
  
            <h4 class="text-light">Open Source &amp; Customized E-Commerce Solutions</h4>
            
          </section>
    
          
    
         
        </section>

        </section>

       
      </section>
    </section>
</section>

@endsection