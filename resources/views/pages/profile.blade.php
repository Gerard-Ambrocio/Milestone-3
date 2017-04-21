@extends('layouts.app')

@section('content')


	<div class="container">
		

		<div class="col-lg-9 text-center" >
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
				<h1>{{$profile->display_name}}</h1>
				<h4>{{$profile->job_description}}</h4>
				  <!-- Trigger the modal with a button -->
				  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-edit"></span></button>



				  <!-- Modal -->
				  <div class="modal fade text-left" id="myModal" role="dialog">
				    <div class="modal-dialog">
				    
				      <!-- Modal content-->
				      				      
				      <div class="modal-content">

				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Edit Name and Job Description</h4>
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
                                <input id="job-description" type="text" class="form-control" name="job_description" >
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




				

					<p><p>{{$profile->location}}</p></p>
					<p><p>{{$profile->skills}}</p></p>
					<button>glyphycon modal</button>
				</div>
			</div>

			<div class="col-sm-3 text-right">
					<h3>$ {{$profile->rates}} /hr</h3>
				</div>

		

			<div class="col-sm-12 text-left">
			<hr style="height:1px;border:none;color:#333;background-color:#D3E0E9;" />
				<div class="col-sm-offset-1">
					
					<h2>Overview</h2>
					<p>description</p>
				</div>
			</div>
				</div> <!-- panel body -->
		</div><!--  panel  -->
		</div><!-- 	col-lg-9 -->


		<div class="col-lg-3">
			<div class="panel panel-default">
				<div class="panel-body">
				</div>
			</div>
		</div>

			
	</div>


@endsection