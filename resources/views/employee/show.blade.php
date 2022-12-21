@extends('layouts.nav')
@section('title', 'Company Show')
@section('app-content', 'app-content')

@section('main-content')
<div class="container content-area">
    <div class="sideapp">
        <!-- page-header -->
        <div class="page-header mt-0 mb-0">
            <ol class="breadcrumb"><!-- breadcrumb -->
                <li class="breadcrumb-item"><a href="{{route('company.index')}}">Company List</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ __('Company Show') }}</li>
            </ol><!-- End breadcrumb -->
        </div>
        <!-- End page-header -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0 card-title">{{ __('Company Details') }}</h3>
                        <a href="{{route('company.edit',$company->id)}}" class="btn btn-primary ml-auto">Edit
                            Company</a>
                    </div>
                    <div class="card-body">
                        <table class="table row table-borderless w-100 m-0 border">
                            <tbody class="col-lg-6 p-0">
                            <tr>
                                <td><strong>Company Name :</strong> {{$company?->companyName}}</td>
                            </tr>
                            <tr>
                                <td><strong>Address :</strong> {{$company?->address}}</td>
                            </tr>
                            </tbody>
                            <tbody class="col-lg-6 p-0">
                            <tr>
                                <td><strong>Contact Person :</strong> {{$company?->contactPerson}}</td>
                            </tr>
                            <tr>
                                <td><strong>Phone :</strong> {{$company?->phone}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
