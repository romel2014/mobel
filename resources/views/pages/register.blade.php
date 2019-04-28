@extends('layout')




@section('content')

	<section class="ptb-100 main-bg">
    
        <div class="container">
            
            <div class="row">

            	<div class="col-lg-4 offset-lg-4">
    				<form>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					    
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Confirm Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
					  </div>
					 
					  <button type="submit" class="btn btn-primary">Register</button>
					</form>
            	</div>	

            </div><!-- ./row -->

        </div> <!-- ./container -->

    </section>



@endsection