@extends('layouts_c.app')

@section('content')

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Popular Categories List</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Popular Categories List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">

                        <div class="row">
                            <div class="col-12 col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Popular Categories List</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="mytable" class="table dataTable table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Name</th>
                                                         <th>Description</th>
                                                         <th>Image</th>
                                                         <th>Action</th>
                                                    </tr>
                                                </thead>

                                                @foreach ($categories as $category)
                                               <tr>
                                                        <td>{{ $category->id() }}</td>
                                                        <td>{{$category->data()['categoryName']}}</td>
                                                        <td>{{$category->data()['categoryDes']}}</td>
                                                        <td><img src="{{$category->data()['categoryImage']}}" alt="" height="100px" width="100px"></td>
                                                        <td>

                                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $category->id() }}" data-placement="top" title="Delete">
                                                                <i class="bi bi-trash"></i></button>
                                                        </td>
                                               </tr>


                                                        <div class="modal fade" id="delete{{ $category->id() }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                              <div class="modal-content">
                                                                <div class="modal-header">
                                                                  <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                  </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                  Do you really want to delete this record? This process cannot be undone.
                                                                </div>
                                                                <div class="modal-footer">

                                                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close">Close</button>

                                                                    {{-- <form method="POST" action="{{ route('crud.destroy', $category->id) }}"> --}}
                                                                      <form action="{{ route('admin.p_category.destroy', ['category' => $category->id()]) }}" method="POST">
                                                                      @csrf
                                                                      @method('DELETE')
                                                                      <div class="form-group">
                                                                        <input type="submit" value="Delete Category " class="btn btn-danger">
                                                                      </div>
                                                                    </form>

                                                                  </div>

                                                              </div>
                                                            </div>
                                                          </div>
                                                          @endforeach

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
