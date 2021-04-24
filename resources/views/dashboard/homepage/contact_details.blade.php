@extends('layouts.masterdashboard')

@section('admin_body')

<div class="row p-3">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                	<?php $count = 1; ?>
                    @foreach($contact as $c)
                    	<tr>
                            <td>{{ $count }}</td>
                            <td>{{$c->name}}</td>
                            <td>{{$c->email}}</td>
                            <td>{{$c->phone}}</td>
                            <td>{{$c->message}}</td>
                            <td>{{$c->current_date}}</td>
                        </tr>
                        <?php $count++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection