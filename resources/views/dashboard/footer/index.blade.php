@extends('layouts.masterdashboard')

@section('admin_body')

<div class="row p-3">
    <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Footer Text</th>
                        <th>Facebook</th>
                        <th>Whatsapp</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>PTCL / Phone2</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; ?>
                    @foreach($footer as $f)
                        <tr>
                            <td>{{ $count }}</td>
                            <td>{{$f->text}}</td>
                            <td>{{$f->fb_link}}</td>
                            <td>{{$f->wp_link}}</td>
                            <td>{{$f->email}}</td>
                            <td>{{$f->phone}}</td>
                            <td>{{$f->phone2}}</td>
                            <td>{{$f->address}}</td>
                            <td>
                                <a href="{{action('Admin\FooterController@edit')}}?id={{$f->footer_id}}" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Edit</a>
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