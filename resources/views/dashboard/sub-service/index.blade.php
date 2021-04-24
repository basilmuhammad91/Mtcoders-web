@extends('layouts.masterdashboard')

@section('admin_body')

<div class="row">
	<div class="col-md-2 offset-10">
		@if($homepage->count() > 0)
		<a href="{{action('Admin\HomepageController@edit')}}?homepage_id={{$homepage2->homepage_id}}" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Edit Details</a>
		@else
		<a href="{{action('Admin\HomepageController@create')}}" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Add Details</a>
		@endif
        
	</div>
</div>
<div class="row p-3">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Banner Heading</th>
                        <th>Banner Tagline</th>
                        <th>Banner Text</th>
                    </tr>
                </thead>
                <tbody>
                	<?php $count = 1; ?>
                    @foreach($homepage as $h)
                    	<tr>
                            <td>{{ $count }}</td>
                            <td>{{$h->banner_heading}}</td>
                            <td>{{$h->banner_tagline}}</td>
                            <td>{{$h->banner_text}}</td>
                        </tr>
                        <?php $count++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection