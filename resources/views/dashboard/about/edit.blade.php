@extends('layouts.masterdashboard')

@section('admin_body')

<div class="row p-5">
	<div class="col-md-12">
		<div class="card">
	        <div class="card-header">
	            <strong>Edit About Us Details</strong> 
	        </div>
			<form action="{{action('Admin\AboutController@update')}}" method="post" class="">
				@csrf
	        <div class="card-body card-block">
	                <div class="form-group">
	                    <label class="form-control-label">About Text</label>
	                    <input type="hidden" name="about_id" value="{{$about->about_id}}">
	                    <textarea id="" name="about_text" class="form-control">{{$about->about_text}}</textarea>
	                </div>
	                <div class="form-group">
	                    <label class="form-control-label">Vision Text</label>
	                    <textarea id="" name="vision_text" class="form-control">{{$about->vision_text}}</textarea>
	                </div>
	                <div class="form-group">
	                    <label class="form-control-label">Value Text</label>
	                    <textarea id="" name="value_text" class="form-control">{{$about->value_text}}</textarea>
	                </div>
	                <div class="form-group">
	                    <label class="form-control-label">Mission Text</label>
	                    <textarea id="" name="mission_text" class="form-control">{{$about->mission_text}}</textarea>
	                </div>
	        </div>
	        <div class="card-footer">
	            <button type="submit" class="btn btn-primary btn-sm">
	                <i class="fa fa-dot-circle-o"></i> Update
	            </button>
	        </div>
			</form>

	    </div>
	</div>
</div>

@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">


</script>