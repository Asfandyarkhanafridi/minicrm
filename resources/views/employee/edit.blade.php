@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('menu.employees') }}</h1>
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
                            <form action="{{route('employee.update',[app()->getLocale(),$employee->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="required" for="name">{{__('menu.firstName')}}</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter First Name" value="{{$employee->firstName}}">
                                    @if($errors->has('firstName'))
                                        <div class="text-danger">
                                            {{ $errors->first('firstName') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="required" for="name">{{__('menu.lastName')}}</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter First Name" value="{{$employee->lastName}}">
                                    @if($errors->has('lastName'))
                                        <div class="text-danger">
                                            {{ $errors->first('lastName') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label required">{{__('menu.selectCompanyName')}}</label>
                                    <select class="form-select" name="company_id" style="width: 100%; height: 40px">
                                        <option selected disabled>Select Company</option>
                                        @foreach($companies as $company)
                                            <option value="{{$company->id}}" @if($employee->company_id == $company->id) selected @endif> {{$company->name}} </option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('company_id'))
                                        <div class="text-danger">
                                            {{ $errors->first('company_id') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="email">{{__('menu.email')}}</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{$employee->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="phone">{{__('menu.phone')}}</label>
                                    <input type="number" class="form-control" id="phone" name="phone" value="{{$employee->phone}}">
                                </div>
                                <a href="{{route('employee.index', app()->getLocale())}}" class="btn btn-secondary" type="button">{{__('menu.back')}}</a>
                                <input class="btn btn-primary" type="submit" value="{{__('menu.save')}}">
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
