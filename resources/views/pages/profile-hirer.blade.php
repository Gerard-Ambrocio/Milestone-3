@extends('layouts.app')

@section('content')


	<div class="container">
		<div class="text-center" >


			<div class="panel panel-default">
				<div class="panel-body">
					  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">POST A JOB</button>

				  <!-- Modal -->
				  <div class="modal fade text-left" id="myModal" role="dialog">
				    <div class="modal-dialog">
				    
				      <!-- Modal content-->
				      				      
				      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Describe the Job</h4>
				        </div>

				        <div class="modal-body">
				          

				     	<form class="form-horizontal" role="form" method="POST" action="profile-hirer">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 

                        <div class="form-group">
                        	<div class="col-md-offset-1 col-md-11">
                                <h3>Name of the Job</h3>
                                <br>
                            </div>
                            
                            <div class="col-md-6 col-md-offset-2">
                                <input id="job-name" type="text" class="form-control" name="job_name" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="job_description" class="col-md-4 control-label">Describe the work to be done</label>

                            <div class="col-md-6">
                                
                                <textarea rows="4" cols="50" name="job_description" class="form-control">
                                </textarea>
                            </div>
                        </div> 

                        <div class="form-group">
                            <div class="col-md-offset-1 col-md-11">
                                <h3>Location</h3>
                                <br>
                            </div>
                            
                            <div class="col-md-6 col-md-offset-2">
                                <select  id="job_location" type="text" class="form-control" name="job_location" required>

                                 @foreach($cities as $city)
                                  <option value="{{$city->city}}">{{$city->city}}</option>
                                 @endforeach   
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                        	<div class="col-md-offset-1 col-md-11">
                                <h3>Price of the Job</h3>
                                <br>
                            </div>
                            
                            <div class="col-md-6 col-md-offset-2">
                                <input id="job-description" type="text" class="form-control" name="job_price" >
                            </div>
                        </div>

                        <div class="form-group">  
                            <div class="col-md-offset-1 col-md-11">
                                <h3> Payment Scheme</h3>
                                <br>
                            </div>
                                        
                            <div class="col-md-offset-2 col-md-1 ">
                                <input id="pay1" type="radio" class="radio " name="job_scheme" value="hour" >
                            </div>
                            <label for="pay1" class="col-md-9">Pay by the hour</label>
                           
                        </div>

                        <div class="form-group">  
                            
                                        
                            <div class="col-md-offset-2 col-md-1 ">
                                <input id="pay2" type="radio" class="radio " name="job_scheme" value="fixed" >
                            </div>
                            <label for="pay2" class="col-md-9">Pay by a fixed price</label>
                           
                        </div>






                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>

                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                        </form>


                        	</div><!--  body -->

				        </div>	<!-- content -->	       				      
				    </div><!-- dialog -->
				  </div><!-- end of modal-->

				</div> <!-- panel body -->
			</div><!--  panel  -->
	   
	      
		<div class="col-lg-12 text-center" >
			<div class="panel panel-default">
				<div class="panel-body">
				    <div class="table-responsive">
                        <h1>Job Postings</h1>
                        <table class="table">
                            <tr>
                                <th>Job Name</th>
                                <th>Rate</th>
                                <th>Payment Scheme</th>                              
                                <th>Date Posted</th>
                                <th>Status</th>
                                <th>Options</th>
                            </tr>
                            

                             @foreach($jobs as $job)
                             <tr class="text-left">
                                <td>{{$job->job_name}}</td>
                                <td>${{$job->job_price}}</td>
                                <td>{{$job->job_scheme}}</td>
                                <td>{{$job->date_posted}}</td>




                                 @if(count($job->hired_applicants))
                                <td><a href='#'> <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#active">Active</button></td></a></td>

                                      <div class="modal fade text-left" id="active" role="dialog">
                                        <div class="modal-dialog modal-lg">
                                        
                                          <!-- Modal content-->
                                                              
                                          <div class="modal-content">

                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Hire Applicants</h4>
                                            </div>

                                            <div class="modal-body">
                                              

                                            <form class="form-horizontal" role="form" method="POST" action="profile-hirer">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                     
                                                         <div class="row">         


                                                              @foreach($job->hired_applicants as $applicant)
                                                            
                              
                            <div class="col-sm-12">
                              <div class="col-sm-2">
                                <img src='{{$applicant->profile->avatar}}' class="img-responsive img-circle">
                              </div>

                              <div class="col-sm-4">                                  
                                  <h4>{{$applicant->profile->first_name}} {{$applicant->profile->last_name}}</h4>
                                  <p>{{$applicant->profile->job_description}}</p>
                                  
                                                                  
                              </div>

                              <div class="col-sm-2">
                                <p> Regular rate: ${{$applicant->profile->rates}}/hr</p>                             
                              </div> 

                              <div class="col-sm-2">
                                <p>{{$applicant->profile->location}}</p>                               
                              </div> 

                              <div class="col-sm-2">
                                <a href="hire-applicant/{{$applicant->id}}/{{$job->id}}"><button>Invite to Job</button></a>                              
                              </div>   

                              <div class="col-sm-offset-2 col-sm-10 text-left">
                                <p>{{$applicant->profile->description}}</p>
                              </div> 
                             </div>
                             @endforeach






                           </div>

                                @else
                                <td>Inactive</td>
                                @endif                        
                                


                                <td><a href="delete-job/{{$job->id}}"><button class="btn btn-danger btn-sm" type="button">Delete</button></a>

                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#hire{{$job->id}}">Hire</button></td>

                              </tr>

                                  <div class="modal fade text-left" id="hire{{$job->id}}" role="dialog">
                                        <div class="modal-dialog modal-lg">
                                        
                                          <!-- Modal content-->
                                                              
                                          <div class="modal-content">

                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Describe the Job</h4>
                                            </div>

                                            <div class="modal-body">
                                              

                                            <form class="form-horizontal" role="form" method="POST" action="profile-hirer">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                     


                         <div class="row">         


                              @foreach($job->pending_applications as $applicant)
                            <div class="col-sm-12">
                              <div class="col-sm-2">
                                <img src='{{$applicant->profile->avatar}}' class="img-responsive img-circle">
                              </div>

                              <div class="col-sm-4">                                  
                                  <h4>{{$applicant->profile->first_name}} {{$applicant->profile->last_name}}</h4>
                                  <p>{{$applicant->profile->job_description}}</p>
                                  
                                                                  
                              </div>

                              <div class="col-sm-2">
                                <p> regular rate: ${{$applicant->profile->rates}}/hr</p>                             
                              </div> 

                              <div class="col-sm-2">
                                <p>{{$applicant->profile->location}}</p>                               
                              </div> 

                              <div class="col-sm-2">
                                <a href="hire-applicant/{{$applicant->id}}/{{$job->id}}"><button>Invite to Job</button></a>                              
                              </div>   

                              <div class="col-sm-offset-2 col-sm-10 text-left">
                                <p>{{$applicant->profile->description}}</p>
                              </div> 
                             </div>
                             @endforeach






                           </div>  
                             @endforeach  
                            
                         </table>
                    </div>  

                                  







                          



                           

                   
                        
               
          
                

            

        
           

				

			

		
				</div> <!-- panel body -->
			</div><!--  panel  -->
		</div><!-- 	col-lg-9 -->


	

		</div> <!-- text-center	 -->
	</div> <!-- container -->


@endsection