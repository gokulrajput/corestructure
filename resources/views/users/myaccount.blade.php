@extends('layouts.front')
@section('content')
<form action="">
    <div id='create_header' class="create_header">
        <h1>My Account section</h1>
        <p>Welcome to Project Manager program. Before getting started, Kindly read the steps and fill required information. You will get 60% code of your project's Admin section in just few minutes.</p>
    </div>
    <div id="wizard">
        <section>
			<div class="form-row" style="text-align: center; margin-bottom: 35px;">
			    <h1>User Information</h1>
			</div>
			<div class="form-row form-group">
			    <div class="form-holder">
			        <label for="">User Name </label> {{ Auth::user()->name }}
			    </div>	 
			</div>  
			<div class="form-row form-group">
			    <div class="form-holder">
			        <label for="">Email Id</label>  {{ Auth::user()->email }}      
			    </div>    
			</div>
		</section>
    </div>
</form>
@endsection