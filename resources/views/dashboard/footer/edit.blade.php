@extends('layouts.masterdashboard')

@section('admin_body')

<div class="row p-5">
	<div class="col-md-12">
		<div class="card">
	        <div class="card-header">
	            <strong>Edit Footer Details</strong> 
	        </div>
			<form action="{{action('Admin\FooterController@update')}}" method="post" class="">
				@csrf
	        <div class="card-body card-block">
	                <div class="form-group">
	                    <label class="form-control-label">Footer Text</label>
	                    <input type="hidden" name="footer_id" value="{{$footer->footer_id}}">
	                    <textarea id="" name="text" class="form-control">{{$footer->text}}</textarea>
	                </div>
	                <div class="form-group">
	                    <label class="form-control-label">Facebook Link</label>
	                    <textarea id="" name="fb_link" class="form-control">{{$footer->fb_link}}</textarea>
	                </div>
	                <div class="form-group">
	                    <label class="form-control-label">Whatsapp Link</label>
	                    <textarea id="" name="wp_link" class="form-control">{{$footer->wp_link}}</textarea>
	                </div>
	                <div class="form-group">
	                    <label class="form-control-label">Email</label>
	                    <input type="text" name="email" class="form-control" value="{{$footer->email}}">
	                </div>
	                <div class="form-group">
	                    <label class="form-control-label">Phone</label>
	                    <input type="phone" name="phone" class="form-control" value="{{$footer->phone}}">
	                </div>
	                <div class="form-group">
	                    <label class="form-control-label">Phone2</label>
	                    <input type="phone" name="phone2" class="form-control" value="{{$footer->phone2}}">
	                </div>
	                <div class="form-group">
	                    <label class="form-control-label">Address</label>
	                    <textarea class="form-control" name="address">{{$footer->address}}</textarea>
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