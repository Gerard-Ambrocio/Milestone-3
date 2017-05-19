@extends('layouts.app')

@section('content')
    <div class="container">

      <div class="row">
        <div class="col-md-5 ">
          <h1>Contact us </h1>
          <hr>
          <form>
            <div class="form-group">
              <label name="email">Email:</label>
              <input id="email" name="email" class="form-control">
            </div>

            <div class="form-group">
              <label name="subject">Subject:</label>
              <input id="subject" name="subject" class="form-control">
            </div>

            <div class="form-group">
              <label name="message">Message:</label>
              <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
            </div>

            <input type="submit" value="Send Message" class="btn btn-success">
          </form>
        </div>


        <div class="col-md-5 col-md-offset-2">  
        <br>
      

      <h3> Our Contact Details</h3>
       <br> 
      <h4><span class="glyphicon glyphicon-map-marker"></span> Manila,Philippines</h4>
      <h4><span class="glyphicon glyphicon-phone"></span> +02 911111</h4>
      <h4><span class="glyphicon glyphicon-envelope"></span> oopswork@oops.com</h4> 
    </div>
      </div>

    </div>
@endsection