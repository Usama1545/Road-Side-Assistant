@extends('layouts_c.app')
@section('content')
<div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Welcome Admin</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Total Members</h4>
                                    </div>
                                    <div class="card-body" style="margin-top: 30px;">
                                        <h5 class="font-bold">{{ $user_num }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Total Service Provides</h4>
                                    </div>
                                    <div class="card-body"  style="margin-top: 30px;">
                                        <h5 class="font-bold">{{ $service_providers }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Total categories</h4>
                                    </div>
                                    <div class="card-body"  style="margin-top: 30px;">
                                        <h5 class="font-bold">8</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Lists of Recent Users</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="mytable" class="table dataTable table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone Num</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                      <td>{{ $user->id() }}</td>
                                                      <td>{{$user->data()['name']}}</td>
                                                      <td>{{$user->data()['email']}}</td>
                                                      <td>{{$user->data()['phoneNumber']}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    </div>
                </section>
            </div>

        </div>
    </div>
@endsection
