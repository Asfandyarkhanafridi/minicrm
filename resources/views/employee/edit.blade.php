@extends('layouts.nav')
@section('title', 'Company Edit')
@section('app-content', 'app-content')

@section('main-content')
    <div class="container content-area">
        <div class="sideapp">
            <!-- page-header -->
            <div class="page-header mt-0 mb-0">
                <ol class="breadcrumb"><!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="{{route('company.index')}}">Company List</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Edit Company') }}</li>
                </ol><!-- End breadcrumb -->
            </div>
            <!-- End page-header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @include('partials.message')
                        <div class="card-header">
                            <h3 class="mb-0 card-title">{{ __('Edit Company') }}</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('company.update',$company->id)}}">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label required">Company Name</label>
                                            <input type="text" class="form-control" name="companyName" placeholder="Enter Company Name" value="{{$company->companyName}}">
                                            @if($errors->has('companyName'))
                                                <div class="text-danger">
                                                    {{ $errors->first('companyName') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label required">Contact Person</label>
                                            <input type="text" class="form-control" name="contactPerson" placeholder="Enter Contact Person" value="{{$company->contactPerson}}">
                                            @if($errors->has('contactPerson'))
                                                <div class="text-danger">
                                                    {{ $errors->first('contactPerson') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Company Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="Enter Company Address" value="{{$company->address}}">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Company Phone</label>
                                            <input type="text" class="form-control" name="phone" placeholder="Enter Company Phone" value="{{$company->phone}}">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{route('company.index')}}" type="button" class="btn btn-secondary">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
