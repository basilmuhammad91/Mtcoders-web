@extends('layouts.masterweb')
@section('web_body')

<section class="contact-banner navbar">

    <section class="m-auto  ">

      <center>
        <h1 class="headings" style="color: #D66828; font-size: 40px;">Contact Us</h1>
      </center>
      <br>
      <section class="container ">
        
        <section class="row" style="align-items: center;">

          <section class="col-md-6">

            <p style="font-size: 20px;" class="text-light">
              <i class="fas fa-envelope mr-3" style="color: #D66828; width: 20px;"></i>{{$footer->email}}
            </p>

            <p style="font-size: 20px;" class="text-light">
              <i class="fas fa-mobile mr-3" style="color: #D66828;  width: 20px;"></i> {{$footer->phone}}
            </p>

            <p style="font-size: 20px;" class="text-light">
              <i class="fa fa-phone mr-3" style="color: #D66828;  width: 20px;"></i> + {{$footer->phone2}}
            </p>

            <p style="font-size: 20px;" class="text-light">
              <i class="fas fa-location-arrow mr-3" style="color: #D66828;  width: 20px;"></i> {{$footer->address}}
            </p>

          </section>

          <section class="col-md-6">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d929.7738454670114!2d67.06280922919122!3d24.860158915836923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e9c0e4ffb71%3A0xd6f6fa0ed6306ca5!2sAl-Ghani%20Group%20of%20Companies!5e1!3m2!1sen!2s!4v1614402497171!5m2!1sen!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

          </section>

          <section class="col-md-12">
<br><br>
            <form class="" action="{{action('Web\WebController@contact_submit')}}" method="post">
              <div class="form-group">
              @csrf
                <input type="text" class="form-control textfield" id="exampleInputEmail1" placeholder="Name" name="name">
               
              </div>

              <div class="form-group">
               
                <input type="text" class="form-control textfield" id="exampleInputPassword1" placeholder="Email" name="email">

              </div>

              <div class="form-group">
               
                <input type="text" class="form-control textfield" id="exampleInputPassword1" placeholder="Phone Number" name="phone">
                
              </div>

              <div class="form-group">
              
                <textarea class="form-control  textfield" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Type Your Message"></textarea>
              </div>
             
              <center>
                <input type="submit" class="mtbtn pl-2 pr-2  pt-1 pb-1">
                <br><br><br>
              </center>
             
            </form>
      
            
          </section>


        </section>
       
      </section>


    </section>
</section>

@endsection