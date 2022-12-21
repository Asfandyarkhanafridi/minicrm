@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-10">
                    <h1 class="m-0">{{ __('menu.employees') }}</h1>
                </div><!-- /.col -->
                <div style="position: absolute; right: 1%">
                    <a href="{{route('employee.create', app()->getLocale())}}" class="btn btn-primary">{{__('menu.createEmployee')}}</a>
                </div>
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
                        {{__('menu.showingEmployees')}}
                    </div>
                    <div class="card">
                        @include('partials.message')
                        <div class="card-body p-0 table-responsive">
                            <table class="table datatable">
                                <thead>
                                <tr>
                                    <th>{{__('menu.firstName')}}</th>
                                    <th>{{__('menu.lastName')}}</th>
                                    <th>{{__('menu.companyName')}}</th>
                                    <th>{{__('menu.email')}}</th>
                                    <th>{{__('menu.phone')}}</th>
                                    <th>{{__('menu.action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->firstName }}</td>
                                        <td>{{ $employee->lastName }}</td>
                                        <td>{{ $employee->company->name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->phone }}</td>
                                        @php
                                            $crud = 'employee';
                                            $row = $employee->id;
                                        @endphp
                                        <td>
                                            @include('partials.actions')
                                        </td>
                                    </tr>
                                @endforeach
                                {{$employees->links()}}
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
