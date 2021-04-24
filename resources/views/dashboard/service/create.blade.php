@extends('layouts.masterdashboard')

@section('admin_body')

<div class="row p-5">
	<div class="col-md-12">
		<div class="card">
	        <div class="card-header">
	            <strong>Add Service Details</strong> 
	        </div>
			<form action="{{action('Admin\ServiceController@submit')}}" method="post" class="">
				@csrf
	        <div class="card-body card-block">
	                <div class="form-group">
	                    <label class="form-control-label">Service</label>
	                    <input type="text" id="service_name" name="service_name" placeholder="Enter Service.." class="form-control">
	                </div>
	                <div class="form-group">
	                    <label class="form-control-label">Service Text</label>
	                    <textarea name="service_text" placeholder="Enter Service Text" class="form-control"></textarea>
	                </div>
	                <div class="form-group">
	                    <label class="form-control-label">Icon Class Link</label>
	                    <input type="text" id="icon_class" name="icon_class" placeholder="Enter Icon Class.." class="form-control">
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