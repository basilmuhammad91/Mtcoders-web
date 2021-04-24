@extends('layouts.masterdashboard')

@section('admin_body')

<div class="row p-5">
	<div class="col-md-12">
		<div class="card">
	        <div class="card-header">
	            <strong>Add Portfolio Category Details</strong> 
	        </div>
			<form action="{{action('Admin\PortfolioCategoryController@submit')}}" method="post" class="">
				@csrf
	        <div class="card-body card-block">
	                <div class="form-group">
	                    <label class="form-control-label">Portfolio Category</label>
	                    <input type="text" id="name" name="name" placeholder="Enter Portfolio Category.." class="form-control">
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