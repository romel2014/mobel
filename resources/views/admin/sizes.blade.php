
@extends('admin-layout')


@section('content')

    <div class="col-lg-4">
    	<div class="sidebar">
    		<ul class="menu">
    			<li><a href="/products">Wardrobe Types</a></li>
    			<li class="active"><a href="/sizes">Sizes</a></li>
    			<li><a href="/frame">Frame</a></li>
    			<li><a href="/front-door">Front Door</a></li>
    		</ul>
   		</div>
    </div>	

    <div class="col-lg-8">
    	<div class="main-content">
    		<h4>Height</h4>
    		<form>
    			<label>List</label>
			  	<div class="input-group mb-3">
				  <input type="text" class="form-control" value="200cm" readonly>
				  <div class="input-group-append">
				    <button class="btn btn-danger" type="button">Delete</button>
				  </div>
				</div>
				<div class="input-group mb-3">
				  <input type="text" class="form-control" value="208cm" readonly>
				  <div class="input-group-append">
				    <button class="btn btn-danger" type="button">Delete</button>
				  </div>
				</div>
				<label>Add Item</label>
				<div class="input-group mb-3">
				  <input type="text" class="form-control"  >
				  <div class="input-group-append">
				    <button class="btn btn-primary" type="button">Add</button>
				  </div>
				</div>
			</form>

			<br>

			<h4>Width</h4>
    		<form>
    			<label>List</label>
			  	<div class="input-group mb-3">
				  <input type="text" class="form-control" value="200cm" readonly>
				  <div class="input-group-append">
				    <button class="btn btn-danger" type="button">Delete</button>
				  </div>
				</div>
				<div class="input-group mb-3">
				  <input type="text" class="form-control" value="208cm" readonly>
				  <div class="input-group-append">
				    <button class="btn btn-danger" type="button">Delete</button>
				  </div>
				</div>
				<label>Add Item</label>
				<div class="input-group mb-3">
				  <input type="text" class="form-control"  >
				  <div class="input-group-append">
				    <button class="btn btn-primary" type="button">Add</button>
				  </div>
				</div>
			</form>

			<br>

			<h4>Depth</h4>
    		<form>
    			<label>List</label>
			  	<div class="input-group mb-3">
				  <input type="text" class="form-control" value="200cm" readonly>
				  <div class="input-group-append">
				    <button class="btn btn-danger" type="button">Delete</button>
				  </div>
				</div>
				<div class="input-group mb-3">
				  <input type="text" class="form-control" value="208cm" readonly>
				  <div class="input-group-append">
				    <button class="btn btn-danger" type="button">Delete</button>
				  </div>
				</div>
				<label>Add Item</label>
				<div class="input-group mb-3">
				  <input type="text" class="form-control"  >
				  <div class="input-group-append">
				    <button class="btn btn-primary" type="button">Add</button>
				  </div>
				</div>
			</form>

    	</div><!-- ./main-content -->	
    </div>          

@endsection

