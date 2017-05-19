@extends('layouts.app')

@section('content')


	<div class="container">
		<div class="text-center" >

		
	   <h1>Market</h1>
	      
		<div class="col-lg-12 text-center" >

           

				        

                        @foreach($jobs as $job)

            <div class="panel panel-default">
                <div class="panel-body">
                         <div class="row">                    
                            
                              <div class="col-sm-11 col-sm-offset-1 text-left">
                                <h3> {{$job->job_name}} </h3>
                                <h4> Hirer: {{$job->user->profile->first_name}} {{$job->user->profile->last_name}} </h4>
                              </div>

                              <div class="col-sm-4">                                  
                                  <span> $ {{$job->job_price}}  {{$job->job_scheme}}</span>                                        
                              </div>

                              <div class="col-sm-2">
                                <span>{{$job->job_location}}</span>                         
                              </div> 

                              <div class="col-sm-2">
                                <span>  {{$job->date_posted}} </span>                             
                              </div> 
                              
                              @if(null!==Auth::user() && Auth::user()->role == 'hiree')
                                <div class='col-sm-4'>
                                <a href="apply-job/{{$job->id}}"><button>Apply to Job-for hiree only</button></a>                              
                              </div>
                              @else

                                <div class='col-sm-4'>
                                                          
                                 </div>
                             
                              @endif

                              <div class="col-sm-12">
                                <hr>  
                              </div>

                              <div class="col-sm-offset-1 col-sm-9 text-left">
                            
                                    <h4>Description</h4>
                                  <p><em>"{{$job->job_description}}"</em></</p>     

                              </div>

                              

                          
                         </div>   
    </div> <!-- panel body -->
            </div><!--  panel  -->
                         @endforeach

                    
		
			
		</div><!-- 	col-lg-9 -->


	

		</div> <!-- text-center	 -->
	</div> <!-- container -->


@endsection