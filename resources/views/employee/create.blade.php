@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employees') }}</h1>
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
                    <div class="card">
                        @include('partials.message')
                        <div class="card-body">
                            <form action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group">
                                        <label class="required" for="name">Name</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter First name">
                                        @if($errors->has('firstName'))
                                            <div class="text-danger">
                                                {{ $errors->first('firstName') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="required" for="name">Name</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Last name">
                                        @if($errors->has('lastName'))
                                            <div class="text-danger">
                                                {{ $errors->first('lastName') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label required">Select Company Name</label>
                                        <select class="form-select" name="company_id" style="width: 100%; height: 40px">
                                            <option selected disabled>Select Company</option>
                                            @foreach($companies as $company)
                                                <option value="{{$company->id}}"> {{$company->name}} </option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('company_id'))
                                            <div class="text-danger">
                                                {{ $errors->first('company_id') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
                                    </div>
                                    <a href="{{route('employee.index')}}" class="btn btn-secondary" type="button">Back</a>
                                    <input class="btn btn-primary" type="submit" value="Save">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
