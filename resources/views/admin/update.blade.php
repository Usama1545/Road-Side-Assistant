@extends('layouts_c.app')

@section('content')

        <div id="main">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Update Category Details</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update Category Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <br>
                <section>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-sm-10 col-12">
                                            <h4 class="card-title">Update Category Details</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">


                                        <form action=""{{ route('admin.category.update', ['category' => $com_data['categoryId']]) }}" method="POST"
                                            class="form form-horizontal">
                                          @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>ID</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="User ID" name="id" id="new_id"
                                                                    readonly="readonly" value="{{$com_data['categoryId']}}">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>Name</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Category name" name="name" value="{{$com_data['categoryName']}}"
                                                                   >
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Description</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <textarea type="text" class="form-control" rows='6'
                                                                    placeholder="Category Description" name="description" value=""
                                                                   >{{$com_data['categoryDes']}}</textarea>
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-pencil"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- <div class="col-md-4">
                                                        <label>Banner Image</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <input type="file" class="form-control" name="image" id="image"
                                                                    placeholder="Phone Number">
                                                                <div class="form-control-icon">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>-->
                                                        <input type="submit" name="submit"
                                                            style=" margin-top: 10px !important;"
                                                            class="btn btn-success me-1 mb-1 h-100"
                                                            value="Update Record">
                                                    </div>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                @endsection