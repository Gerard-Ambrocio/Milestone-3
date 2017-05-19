@extends('layouts.app')

@section('content')


	<div class="container">
		

		<div class="col-lg-12 text-center" >
		<div class="panel panel-default">
			<div class="panel-body">
			<div>

			<div class="col-sm-3">
					<img src='{{ asset("img/".Auth::user()->profile->avatar) }}' class="img-responsive img-circle" type="button" data-toggle="modal" data-target="#myModal1">
					<!-- Modal -->
				  <div class="modal fade text-left" id="myModal1" role="dialog">
				    <div class="modal-dialog">
				    
				      <!-- Modal content-->
				      				      
				      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Upload photo</h4>
				        </div>

				        <div class="modal-body">
				          

				     	<form class="form-horizontal" role="form" method="POST" action="{{url('avatar')}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">                   
                 

                        <div class="form-group">
                        	<div class="col-md-offset-1 col-md-11">
                                <h3>Avatar</h3>
                                <br>
                            </div>
                            
                            <div class="col-md-6 col-md-offset-2">
                                <input id="job-description" type="file" class="form-control" name="avatar" >
                            </div>
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
			</div>

			<div class="col-sm-6 text-left">
				<h1>{{$profiles->display_name}}</h1>
				<h4>{{$profiles->job_description}}</h4>





				

					<p><p>{{$profiles->location}}</p></p>
				
					 <!-- Trigger the modal with a button -->
				  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">EDIT</button>



				  <!-- Modal -->
				  <div class="modal fade text-left" id="myModal" role="dialog">
				    <div class="modal-dialog">
				    
				      <!-- Modal content-->
				      				      
				      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Edit </h4>
				        </div>

				        <div class="modal-body">
				          

				     	<form class="form-horizontal" role="form" method="POST" action="">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">  
                            <div class="col-md-offset-1 col-md-11">
                                <h3>Display name</h3>
                                <br>
                            </div>
                                        
                            <div class="col-md-offset-2 col-md-1 ">
                                <input id="full2" type="radio" class="radio " name="display_name" value="full" >
                            </div>
                            <label for="full2" class="col-md-9">Show my full name (e.g. John Smith)</label>
                           
                        </div>

                        <div class="form-group">  
                            
                                        
                            <div class="col-md-offset-2 col-md-1 ">
                                <input id="full2" type="radio" class="radio " name="display_name" value="initial" >
                            </div>
                            <label for="full2" class="col-md-9">Show only my first name and last initial (e.g. John S.)</label>
                           
                        </div>
                 

                        <div class="form-group">
                        	<div class="col-md-offset-1 col-md-11">
                                <h3>Job Description</h3>
                                <br>
                            </div>
                            
                            <div class="col-md-6 col-md-offset-2">
                                <input id="job-description" type="text" class="form-control" name="job_description" value="{{$profiles->job_description}}" >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-1 col-md-11">
                                <h3>Location</h3>
                                <br>
                            </div>
                            
                            <div class="col-md-6 col-md-offset-2">
                                <select  id="job_location" type="text" class="form-control" name="job_location" value="{{$profiles->job_location}}">

                                 @foreach($cities as $city)
                                  <option value="{{$city->city}}">{{$city->city}}</option>
                                 @endforeach   
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                        	<div class="col-md-offset-1 col-md-11">
                                <h3>Usual rates ($)</h3>
                                <br>
                            </div>
                            
                            <div class="col-md-6 col-md-offset-2">
                                <input id="rates" type="text" class="form-control" name="rates" value="{{$profiles->rates}}">
                            </div>
                        </div>

                         <div class="form-group">

                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                
                                <textarea rows="4" cols="50" name="description" class="form-control" value="{{$profiles->description}}">
                                </textarea>
                            </div>
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
				</div>
			</div>
			

			<div class="col-sm-3 text-right">
					<h3>$ {{$profiles->rates}} /hr</h3>
				</div>

		

			<div class="col-sm-12 text-left">
			<hr style="height:1px;border:none;color:#333;background-color:#D3E0E9;" />
				<div class="col-sm-offset-1">
					
					<h2>Overview</h2>
					<p>{{$profiles->description}}</p>
				</div>
			</div>
				</div> <!-- panel body -->
		</div><!--  panel  -->
		</div><!-- 	col-lg-9 -->

<!-- BOTTOM PANEL -->


<div class="col-lg-12 text-center" >
			<div class="panel panel-default">
				<div class="panel-body">
				    <div class="table-responsive">
                        <h1>Job Postings</h1>
                        <table class="table">
                            <tr>
                                <th>Job Name</th>
                                <th>Hirer</th>
                                <th>Rate</th>
                                <th>Payment Scheme</th>                              
                                <th>Date Posted</th>                                
                            </tr>
                            

                             @foreach($jobs as $job)
                             <tr class="text-left">
                                <td>{{$job->job_name}}</td>
                                <td>{{$job->user->profile->first_name}} {{$job->user->profile->last_name}}</td>
                                <td>${{$job->job_price}}</td>
                                <td>{{$job->job_scheme}}</td>
                                <td>{{$job->date_posted}}</td>                             
                             </tr>


                           </div>  
                             @endforeach  
                            
                         </table>
                    </div>  

                                  
				</div> <!-- panel body -->
			</div><!--  panel  -->
		</div><!-- 	col-lg-9 -->













			
	</div>


@endsection