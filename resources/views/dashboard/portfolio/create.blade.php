@extends('layouts.masterdashboard')

@section('admin_body')

<div class="row p-5">
	<div class="col-md-12">
		<div class="card">
	        <div class="card-header">
	            <strong>Add Portfolio Details</strong> 
	        </div>
			<form action="{{action('Admin\PortfolioController@submit')}}" method="post" class="" enctype="multipart/form-data">
				@csrf
	        <div class="card-body card-block">
	                <div class="form-group">
	                    <label class="form-control-label">Select Portfolio Category</label>
	                    <select class="form-control" name="category_id">
	                    	@foreach($cat as $c)
	                    		<option value="{{$c->category_id}}">{{$c->name}}</option>
	                    	@endforeach
	                    </select>
	                </div>
	                <div class="form-group">
	                    <label class="form-control-label">Image</label>
	                    <input type="file" id="" name="image" accept="Image/*"  class="form-control">
	                </div>
	                <div class="form-group">
	                    <label class="form-control-label">Description</label>
	                    <textarea name="description" class="form-control"></textarea>
	                </div>
	        </div>
	        <div class="card-footer">
	            <button type="submit" class="btn btn-primary btn-sm">
	                <i class="fa fa-dot-circle-o"></i> Submit
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