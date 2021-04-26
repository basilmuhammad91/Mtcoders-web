@extends('layouts.masterweb')
@section('web_body')

<section class="about-banner navbar pt-5 pb-5">
    <section class="m-auto text-center ">
      <h1 class="headings" style="color: #D66828; font-size: 40px;">Our Portfolio</h1>
      <section class="container ">
       
      <br>


      <div id="myBtnContainer">
      	@foreach($cat as $c)

      	<button class="btn active" onclick="filterSelection('all')"> {{$c->name}}</button>
      	@foreach($c->portfolio as $p)
      	<td>{{$p->description}}</td>
      	@endforeach

      	@endforeach
        <!-- <button class="btn active" onclick="filterSelection('all')"> Show all</button>
        <button class="btn" onclick="filterSelection('website')"> Websites</button>
        <button class="btn" onclick="filterSelection('mobile')"> Mobile App</button>
        <button class="btn" onclick="filterSelection('logo')"> Logo</button>
        <button class="btn" onclick="filterSelection('3dhome')"> 3D Home Designing</button> -->
      </div>
      <br>
      
      <div class="container-fluid">

        <section class="row wrapper">

            <div class="filterDiv col-md-3 website show">
              <div class="card m-auto">
                <img src="https://images.unsplash.com/photo-1477666250292-1419fac4c25c?auto=format&amp;fit=crop&amp;w=667&amp;q=80&amp;ixid=dW5zcGxhc2guY29tOzs7Ozs%3D">
                <div class="info m-auto">
                  <h1>Design On Tech</h1>
              
                  <a href="#" class=" mtbtn pl-2 pr-2  pt-1 pb-1">More Details</a>

                </div>
              </div>
            
            </div>

            <div class="filterDiv col-md-3 mobile bg-danger show">
              <div class="card m-auto">
                <img src="https://images.unsplash.com/photo-1477666250292-1419fac4c25c?auto=format&amp;fit=crop&amp;w=667&amp;q=80&amp;ixid=dW5zcGxhc2guY29tOzs7Ozs%3D">
                <div class="info m-auto">
                  <h1>Design On Tech</h1>
            
                  <a href="#" class=" mtbtn pl-2 pr-2  pt-1 pb-1">More Details</a>
            
                </div>
              </div>
            
            </div>

            <div class="filterDiv col-md-3 website show">
              <div class="card m-auto ">
                <img src="https://images.unsplash.com/photo-1477666250292-1419fac4c25c?auto=format&amp;fit=crop&amp;w=667&amp;q=80&amp;ixid=dW5zcGxhc2guY29tOzs7Ozs%3D">
                <div class="info m-auto">
                  <h1>Design On Tech</h1>
            
                  <a href="#" class=" mtbtn pl-2 pr-2  pt-1 pb-1">More Details</a>
            
                </div>
              </div>
            
            </div>


            <div class="filterDiv col-md-3 website show">
              <div class="card m-auto">
                <img src="https://images.unsplash.com/photo-1477666250292-1419fac4c25c?auto=format&amp;fit=crop&amp;w=667&amp;q=80&amp;ixid=dW5zcGxhc2guY29tOzs7Ozs%3D">
                <div class="info m-auto">
                  <h1>Design On Tech</h1>
            
                  <a href="#" class=" mtbtn pl-2 pr-2  pt-1 pb-1">More Details</a>
            
                </div>
              </div>
            
            </div>


            <div class="filterDiv col-md-3 website show">
              <div class="card m-auto">
                <img src="https://images.unsplash.com/photo-1477666250292-1419fac4c25c?auto=format&amp;fit=crop&amp;w=667&amp;q=80&amp;ixid=dW5zcGxhc2guY29tOzs7Ozs%3D">
                <div class="info m-auto">
                  <h1>Design On Tech</h1>
            
                  <a href="#" class=" mtbtn pl-2 pr-2  pt-1 pb-1">More Details</a>
            
                </div>
              </div>
            
            </div>

           
              

        </section>
      
         
        
        
      </div>


      </section>
    </section>
</section>

@endsection