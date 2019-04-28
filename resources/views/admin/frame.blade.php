
@extends('admin-layout')


@section('content')

    <div class="col-lg-4">
    	<div class="sidebar">
    		<ul class="menu">
    			<li><a href="/products">Wardrobe Types</a></li>
    			<li><a href="/sizes">Sizes</a></li>
    			<li class="active"><a href="/frame">Frame</a></li>
    			<li><a href="/front-door">Front Door</a></li>
    		</ul>
   		</div>
    </div>	

    <div class="col-lg-8">
    	<div class="main-content">
    		<h4>Add Types</h4>
    		<ul class="list-admin">
                <li><a href="#"><img src="{{ asset('img/frame/frame1.jpg')}}" alt=""></a> <button class="btn btn-danger btn-sm">Delete</button></li>
                <li><a href="#"><img src="{{ asset('img/frame/frame1.jpg')}}" alt=""></a> <button class="btn btn-danger btn-sm">Delete</button></li>
                <li><a href="#"><img src="{{ asset('img/frame/frame1.jpg')}}" alt=""></a> <button class="btn btn-danger btn-sm">Delete</button></li>
                <li><a href="#"><img src="{{ asset('img/frame/frame1.jpg')}}" alt=""></a> <button class="btn btn-danger btn-sm">Delete</button></li>
                <li><a href="#"><img src="{{ asset('img/frame/frame1.jpg')}}" alt=""></a> <button class="btn btn-danger btn-sm">Delete</button></li>
                <li><a href="#"><img src="{{ asset('img/frame/frame1.jpg')}}" alt=""></a> <button class="btn btn-danger btn-sm">Delete</button></li>
                <li><a href="#"><img src="{{ asset('img/frame/frame1.jpg')}}" alt=""></a> <button class="btn btn-danger btn-sm">Delete</button></li>
                
              </ul>
    		<form>
    			
				<label>Add Frame</label>
				<div class="input-group">
				  <div class="custom-file">
				    <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
				    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
				  </div>
				  <div class="input-group-append">
				    <button class="btn btn-primary" type="button" id="inputGroupFileAddon04">Button</button>
				  </div>
				</div>
			</form>

    	</div><!-- ./main-content -->	
    </div>          

@endsection

