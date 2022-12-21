@extends('layouts.nav')
@section('title', 'Company List')
@section('app-content', 'app-content')

@section('main-content')
    <div class="container content-area">
        <div class="sideapp">
            <!-- End page-header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @include('partials.message')
                        <div class="card-header">
                            <h3 class="mb-0 card-title">{{ __('Company List') }}</h3>
                            <a href="{{route('company.create')}}" class="btn btn-primary ml-auto">Add Company</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered text-nowrap w-100 display">
                                    <thead>
                                    <tr>
                                        <th class="wd-15p">SrNo.</th>
                                        <th class="wd-25p">Company Name</th>
                                        <th class="wd-15p">Contact Person</th>
                                        <th class="wd-15p">Address</th>
                                        <th class="wd-25p">Phone</th>
                                        <th class="wd-25p notExport" style="width: 2%; !important;">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($companies as $company)
                                        <tr>
                                            <td>{{$loop?->iteration}}</td>
                                            <td>{{$company?->companyName}}</td>
                                            <td>{{$company?->contactPerson}}</td>
                                            <td>{{$company?->address}}</td>
                                            <td>{{$company?->phone}}</td>
                                            <td>
                                                @php
                                                    $crud = 'company';
                                                    $row = $company->id;
                                                @endphp
                                                @include('partials.actions')
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- table-wrapper -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
