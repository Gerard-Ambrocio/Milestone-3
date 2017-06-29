@extends('layouts.app')

@section('content')




<!-- -------- -->

  <div class="jumbotron text-center">
 
     <h1>Oopswork!</h1>
    <h3 class="lead">We are here to help find you help!</h3>
    <img src="{{asset('img/lazy.png')}}" id="lazy" class="img-responsive"> 
    <img src="{{asset('img/work.png')}}" id="work" class="img-responsive">

  </div>

<!-- -------- -->


<div class="container text-center well">
  <h2>How it works</h2>
  
  <br>
  <div class="row">
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-search"></span>
      <h4>FIND</h4>
      <p>Post a job to tell us about your project. We'll quickly match you with the right people.</p>
    </div>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-check"></span>
      <h4>HIRE</h4>
      <p>Browse profiles, reviews, and proposals then interview top candidates. Hire a favorite and begin your project.</p>
    </div>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-lock"></span>
      <h4>WORK</h4>
      <p>Use the Oopswork platform to chat, share files, and collaborate from your desktop or on the go.</p>
    </div>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-usd"></span>
      <h4>PAY</h4>
      <p>Invoicing and payments happen through Oopswork. With Oopswork Protection, only pay for work you authorize.</p>
    </div>
 </div>
 <div>
  </div> 
    </div>


<!-- ------ -->

<!-- ------ -->
<div class="container text-center well">
  <h2>About Us</h2>
  
   
      
      <div class="row">
      <div class="col-md-6">
        <img src="{{asset('img/explain.jpg')}}" class="img-responsive img-circle">
      </div>
        <div class="col-md-6  text-center">
          
          <h4 class="h4text">Technology is making online work similar to local work, with added speed, cost, and quality advantages.

To begin with, online work can happen wherever there’s a reliable Internet connection — an office, home, café, or rooftop. This also means you can choose who you work with, among a larger pool of people from around Philippines. 

We help you find the right people for the need you want!

</h4>
        </div>
      </div>

  
</div>
<!-- ------------ -->

<!-- ------------------------- -->



@endsection