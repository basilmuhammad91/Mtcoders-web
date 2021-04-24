@extends('layouts.masterdashboard')

@section('admin_body')

<div class="row">
	<div class="col-md-2 offset-10">
		<a href="{{action('Admin\PortfolioCategoryController@create')}}" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Add Details</a>
	</div>
</div>
<div class="row p-3">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Portfolio Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                	<?php $count = 1; ?>
                    @foreach($cat as $c)
                    	<tr>
                            <td>{{ $count }}</td>
                            <td>{{$c->name}}</td>
                            <td>
                                <a href="{{action('Admin\PortfolioCategoryController@edit')}}?edit_id={{$c->category_id}}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{action('Admin\PortfolioCategoryController@delete')}}?delete_id={{$c->category_id}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php $count++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection