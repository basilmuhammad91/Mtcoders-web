@extends('layouts.masterdashboard')

@section('admin_body')

<div class="row p-3">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>About Text</th>
                        <th>Vision Text</th>
                        <th>Value Text</th>
                        <th>Mission Text</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; ?>
                    @foreach($about as $a)
                        <tr>
                            <td>{{ $count }}</td>
                            <td>{{$a->about_text}}</td>
                            <td>{{$a->vision_text}}</td>
                            <td>{{$a->value_text}}</td>
                            <td>{{$a->mission_text}}</td>
                            <td>
                                <a href="{{action('Admin\AboutController@edit')}}?id={{$a->about_id}}" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Edit</a>
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