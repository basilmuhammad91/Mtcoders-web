@extends('layouts.masterdashboard')

@section('admin_body')

<div class="row p-5">
	<div class="col-md-12">
		<div class="card">
	        <div class="card-header">
	            <strong>Add Sub Service Details</strong> 
	        </div>
			<form action="{{action('Admin\SubServiceController@submit')}}" method="post" class="">
				@csrf
	        <div class="card-body card-block">
	                <div class="form-group">
	                    <label class="form-control-label">Select Main Service</label>
	                    <select name="service_id" class="form-control">
	                    	@foreach($service as $s)
	                    		<option value="{{$s->service_id}}">{{$s->service_name}}</option>
	                    	@endforeach
	                    	
	                    </select>
	                </div>
	                
	                <div class="form-group">
	                    <label class="form-control-label">Sub Service Name</label>
	                    <input type="text" id="banner_text" name="name" placeholder="Enter Sub Service.." class="form-control">
	                </div>
	                <div class="form-group">
	                    <label class="form-control-label">Icon Class</label>
	                    <input type="text" id="banner_tagline" name="icon_class" placeholder="Enter Icon Class.." class="form-control">
	                </div>
	        </div>
	        <div class="card-footer">
	            <button type="submit" class="btn btn-primary btn-sm">
	                <i class="fa fa-dot-circle-o"></i> Submit
	            </button>
	            <button type="reset" id="reset" class="btn btn-danger btn-sm">
	                <i class="fa fa-ban"></i> Reset
	            </button>
	        </div>
			</form>

	    </div>
	</div>
</div>

@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	$('#reset').click(function(){
		$('#banner_heading').val("");
		$('#banner_tagline').val("");
		$('#banner_text').val("");
	});
});

</script>