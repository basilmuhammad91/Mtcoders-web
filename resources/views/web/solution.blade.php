@extends('layouts.masterweb')
@section('web_body')

<section class="about-banner navbar pt-5 pb-5">
    <section class="m-auto text-center">
      <h1 class="headings" style="color: #D66828; font-size: 40px;">Point on Sale</h1>
     
    </section>
</section>

<section class="container p-3"> 
      
      <section class="row">
        <section class="col-md-6">
        <h3 style=" color: #D66828 !important; font-family:monospace;">Point Of Sale</h3>
        <hr class="m-2">
         <!--  <ul class="list-style2" style="  list-style-type: square; color: #D66828;">
            <li><span class="text-dark">Add, manage, and categorize job listings.</span></li>
            <li><span class="text-dark">Searchable &amp; filterable ajax powered job listings added to your pages.</span></li>
            <li><span class="text-dark">Frontend forms for guests and registered users to submit &amp; manage job listings.</span></li>
            <li><span class="text-dark">Allow job listers to preview their listing before it goes live. The preview matches the appearance of a live job listing.</span></li>
            <li><span class="text-dark">Each listing can be tied to an email or website address so that job seekers can apply to the jobs.</span></li>
            <li><span class="text-dark">Developer friendly code — Custom Post Types, endpoints &amp; template files.</span></li>
            <li><span class="text-dark">Allow candidates to apply to jobs using a form &amp; employers to view and manage the applications from their job dashboard.</span></li>
            <li><span class="text-dark">Paid listing functionality </span></li>
            <li><span class="text-dark">Resume Manager</span></li>
            <li><span class="text-dark">Allow registered users to save their job searches and create alerts which send new jobs via email daily, weekly or fortnightly.</span></li>
           
           
            </ul> -->
            {{$sol->details}}
        </section>
        <section class="col-md-6">
          <img src="{{asset('storage/'.$sol->image)}}" class="img-fluid" alt="">
        </section>
      </section>
    </section>

@endsection