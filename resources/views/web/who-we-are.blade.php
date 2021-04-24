@extends('layouts.masterweb')
@section('web_body')

<section class="about-banner navbar pt-5 pb-5">
    <section class="m-auto text-center">
      <h1 class="headings" style="color: #D66828; font-size: 40px;">About Us</h1>
      <section class="container">
        <h5 class="text-light">{{$about->about_text}}</h5>
      <br>

      <section class="row">
        <section class="col-md-4 p-4  border  service-card">
       
          <h3 style="color: #D66828;">Our Vision</h3>

          <h5 class="text-light">{{$about->vision_text}}</h5>
          
        </section>
  
        <section class="col-md-4 p-4  border  service-card">
         
          <h3 style="color: #D66828;">Our Value</h3>

          <h5 class="text-light">{{$about->value_text}}</h5>
        
        </section>
  
        <section class="col-md-4 p-4  border  service-card">
         
          <h3 style="color: #D66828;">Our Mission</h3>

          <h5 class="text-light">{{$about->mission_text}}</h5>
          
        </section>
  
       
      </section>


      </section>
    </section>
</section>

@endsection