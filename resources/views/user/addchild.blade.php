@extends('layouts.app')

@section('title')
HBK - Add Your Children
@endsection

@section('content')
<center>
    <h1>Add Your Child’s Information</h1>
    <p class="lead" style="width:50%">
   		Please enter your child’s information to access registration and account information. 
    </p>
</center>
<div class="col-md-6 col-md-offset-3">
	<div class="panel panel-default">
        <div class="panel-heading">Registrant Information {{Auth::user()->id}}</div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ URL::action('ChildController@store', Auth::user()->id) }}">
            	{!! csrf_field() !!}

                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <label for="first_name" class="col-md-4 control-label">First Name</label>
                    <div class="col-md-4">
                        <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('firstname') }}" required autofocus>

                        @if ($errors->has('first_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <label for="last_name" class="col-md-4 control-label">Last Name</label>
                    <div class="col-md-4">
                        <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('firstname') }}" required autofocus>

                        @if ($errors->has('last_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                	<label for="dob" class="col-md-4 control-label">Date of Birth</label>
                    <div class="col-md-4">
                        <input id="dob" type="date" class="form-control" name="dob" required>

                        @if ($errors->has('dob'))
                            <span class="help-block">
                                <strong>{{ $errors->first('dob') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('health_card') ? ' has-error' : '' }}">
                    <label for="health_card" class="col-md-4 control-label">Health Card Number</label>
                    <div class="col-md-4">
                        <input id="health_card" type="number" class="form-control" name="health_card" required>

                        @if ($errors->has('health_card'))
                            <span class="help-block">
                                <strong>{{ $errors->first('health_card') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('family_physician') ? ' has-error' : '' }}">
                    <label for="family_physician" class="col-md-4 control-label">Family Physician Name</label>
                    <div class="col-md-4">
                        <input id="family_physician" type="text" class="form-control" name="family_physician" required>

                        @if ($errors->has('family_physician'))
                            <span class="help-block">
                                <strong>{{ $errors->first('family_physician') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="container">
					<div class="col-xs-4">
		                <div class="form-group {{ $errors->has('phone_number') ? ' has-error' : '' }}">
		                    <label for="family_physician" class="col-md-2 control-label">Phone Number</label>
		                    <div class="col-xs-3">
		                        <input type="tel" name="phone_number" class="form-control" size="3" maxlength="3" required="required">
		                    </div>
		                   	
		                    <div class="col-xs-3">
		                        <input type="tel" name="phone_number" class="form-control" size="3" maxlength="3" required="required">
		                    </div>
		                  	
		                    <div class="col-xs-4">
		                        <input type="tel" name="phone_number" class="form-control" size="4" maxlength="4" required="required">
		                    </div>

		                    @if ($errors->has('phone_number'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone_number') }}</strong>
                            </span>
                        	@endif
		                </div>
		            </div>
				</div>

				<p>Are you a client of Holland Bloorview?</p>
				<div class="radio">
				  <label>
				    <input type="radio" name="is_client" id="is_client" value="false" checked>
				   	No
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="is_client" id="is_client" value="true">
				   	Yes
				  </label>
				</div>

				<p>Have you been in our programs before?</p>
				<div class="radio">
				  <label>
				    <input type="radio" name="is_first_time" id="is_first_time" value="true" checked>
				   	No
				  </label>
				</div>
				<div class="radio">
				  <label>
				    <input type="radio" name="is_first_time" id="is_first_time" value="false">
				   	Yes
				  </label>
				</div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Save and Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="panel panel-default">
    	<div class="panel-heading">Contact Information</div>
        <div class="panel-body"></div>
    </div>

    <div class="panel panel-default">
    	<div class="panel-heading">Allergies and Medications</div>
        <div class="panel-body"></div>
    </div>

    <div class="panel panel-default">
    	<div class="panel-heading">Special Needs</div>
        <div class="panel-body"></div>
    </div>

    <div class="panel panel-default">
    	<div class="panel-heading">Seizures and Pain Management</div>
        <div class="panel-body"></div>
    </div>
</div>
@endsection