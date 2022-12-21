@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Companies') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        Showing Company {{$company->name}}
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table row table-borderless w-100 m-0 border">
                                <tbody class="col-lg-6 p-0">
                                <tr>
                                    <td><strong>Company Name :</strong> {{$company->name}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Email Address :</strong> {{$company->email}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Website :</strong> {{$company->website}}</td>
                                </tr>
                                </tbody>
                                <tbody class="col-lg-6 p-0">
                                <tr>
                                    <td><strong>Logo :</strong> <img width="10%" height="10%" src="{{asset('storage/'.$company->logo)}}"></td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="{{route('company.edit',$company->id)}}" type="button" class="btn btn-secondary mt-2">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
