@extends('layouts.masterdashboard')

@section('admin_body')

<div class="row">
    <div class="col-md-2 offset-10">
       <a href="{{action('Admin\PortfolioController@create')}}" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Add Details</a>
    </div>
</div>

<div class="row p-3">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                	<?php $count = 1; ?>
                    @foreach($portfolio as $p)
                    	<tr>
                            <td>{{ $count }}</td>
                            <td>
                                <img src="{{asset('storage/'.$p->image)}}" class="img-fluid" height="70" width="70">
                            </td>
                            <td>{{$p->Category->name}}</td>
                            <td>{{$p->description}}</td>
                            <td>
                                <a href="{{action('Admin\PortfolioController@edit')}}?edit_id={{$p->portfolio_id}}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{action('Admin\PortfolioController@delete')}}?delete_id={{$p->portfolio_id}}" class="btn btn-danger btn-sm">Delete</a>
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