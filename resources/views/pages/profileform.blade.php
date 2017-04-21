@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="" enctype="mutipart/form-data">
                        

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">


                        <div class="form-group">
                            <label for="first-name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="first-name" type="text" class="form-control" name="first_name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="last-name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="last-name" type="text" class="form-control" name="last_name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="job-description" class="col-md-4 control-label">Job Description</label>

                            <div class="col-md-6">
                                <input id="job-description" type="text" class="form-control" name="job_description" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="location" class="col-md-4 control-label">Location</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                
                                <textarea rows="4" cols="50" name="description" class="form-control">
                                </textarea>
                            </div>
                        </div>                    

                        <div class="form-group">
                            <label for="rates" class="col-md-4 control-label">Rates</label>

                            <div class="col-md-6">
                                <input id="rates" type="number" min="0" max="1000000" class="form-control" name="rates" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection