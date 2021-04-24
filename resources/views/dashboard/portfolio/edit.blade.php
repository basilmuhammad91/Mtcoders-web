@extends('layouts.masterdashboard')

@section('admin_body')

<div class="row p-5">
	<div class="col-md-12">
		<div class="card">
	        <div class="card-header">
	            <strong>Edit Portfolio Details</strong> 
	        </div>
			<form action="{{action('Admin\PortfolioController@update')}}" method="post" class="" enctype="multipart/form-data">
				@csrf
	        <div class="card-body card-block">
	                <div class="form-group">
	                    <label class="form-control-label">Select Portfolio Category</label>
	                    <input type="hidden" name="portfolio_id" value="{{$portfolio->portfolio_id}}">
	                    <select class="form-control" name="category_id">
	                    	@foreach($cat as $c)
	                    		<option @if($c->category_id == $portfolio->category_id) {{'selected'}} @endif value="{{$c->category_id}}">{{$c->name}}</option>
	                    	@endforeach
	                    </select>
	                </div>
	                <div class="form-group">
	                    <label class="form-control-label">Image</label>
	                    <input type="file" name="image" accept="Image/*" class="form-control" id="imgUpload">
	                    <img src="{{asset('storage/'.$portfolio->image)}}" width="100" id="imgPreview">
	                </div>
	                <div class="form-group">
	                    <label class="form-control-label">Description</label>
	                    <textarea name="description" class="form-control">{{$portfolio->description}}</textarea>
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

$(document).ready(function(){
	$('#reset').click(function(){
		$('#banner_heading').val("");
		$('#banner_tagline').val("");
		$('#banner_text').val("");
	});
});

</script>



<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imgPreview').attr('src', e.target.result);
        }
          reader.readAsDataURL(input.files[0]);
    }
}
$(document).ready(function(){
$("#imgUpload").change(function(){
    readURL(this);
});
	
});
</script>