@extends('layouts.app')

@section('content')


	<div class="container">
		

		<div class="col-lg-9 text-center" >
			<div class="panel panel-default">
				<div class="panel-body">
			


				<div class="table-responsive">
                        <h1>Users List</h1>
                        <table class="table">
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>                              
                                <th>Email</th>
                                <th>Role</th>
                                <th>Option</th>
                            </tr>
                            

                             @foreach($profiles as $profile)

                             <tr class="text-left">
                                <td>{{$profile->first_name}}</td>
                                <td>{{$profile->last_name}}</td>
                            
                                <td>{{$profile->user->email}}</td>
                             
                                <td>{{$profile->role}}</td>

                             @if ($profile->role == 'admin')
                             	<td><button class='btn btn-danger btn-sm disabled' type='button' style='user-select:none'>-------</button></td>
                             @else 
                             	<td><a href='delete-user/{{$profile->user_id}}'><button class='btn btn-danger btn-sm' type='button' >Delete</button></a></td>
                             @endif
                                
                                
                             
                             </tr>
                             @endforeach  
                            
                         </table>
                    </div>  

			

		
				</div> <!-- panel body -->
			</div><!--  panel  -->
		</div><!-- 	col-lg-9 -->


	

			
	</div>


@endsection