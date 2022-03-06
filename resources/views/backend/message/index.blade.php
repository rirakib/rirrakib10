@extends('layout.backend')
@section('admin_title','Message')
@section('admin_content');
<div class="container">
    <div class="row">
        <div class="col-md-7 mx-auto">
            <table class="table table-bordered">
                <thead class="bg-info text-light text-center">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody class="bg-success text-light text-left">
                    @foreach($contact as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->subject}}</td>
                        <td>{{$data->message}}</td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection