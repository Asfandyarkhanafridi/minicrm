@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-10">
                    <h1 class="m-0">{{ __('menu.companies') }}</h1>
                </div>
                <div style="position: absolute; right: 1%">
                    <a href="{{route('company.create', app()->getLocale())}}" class="btn btn-primary">{{__('menu.createCompany')}}</a>
                </div>
                <!-- /.col -->
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
                        {{__('menu.showingCompanies')}}
                    </div>
                    <div class="card">
                        @include('partials.message')
                        <div class="card-body p-0 table-responsive">
                            <table class="table datatable">
                                <thead>
                                <tr>
                                    <th>{{__('menu.companyName')}}</th>
                                    <th>{{__('menu.email')}}</th>
                                    <th>{{__('menu.website')}}</th>
                                    <th>{{__('menu.logo')}}</th>
                                    <th>{{__('menu.action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($companies as $company)
                                    <tr>
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $company->email }}</td>
                                        <td>{{ $company->website }}</td>
                                        <td>{{ $company->logo }}</td>
                                        @php
                                            $crud = 'company';
                                            $row = $company->id;
                                        @endphp
                                        <td>
                                            @include('partials.actions')
                                        </td>
                                    </tr>
                                @endforeach
                                {{$companies->links()}}
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
