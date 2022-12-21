@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('menu.companies') }}</h1>
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
                            <form action="{{route('company.update',[app()->getLocale(),"$company->id"])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="required" for="name">{{__('menu.companyName')}}</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$company->name}}">
                                    @if($errors->has('name'))
                                        <div class="text-danger">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="email">{{__('menu.email')}}</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{$company->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="website">{{__('menu.website')}}</label>
                                    <input type="text" class="form-control" id="website" name="website" value="{{$company->website}}">
                                </div>
                                <div class="form-group">
                                    <label for="logo">{{__('menu.logo')}}</label>
                                    <input type="file" name="logo" class="form-control">
                                    <img width="100px" height="100px" class="img-circle" src="{{ asset('storage/'.$company->logo) }}"/>
                                </div>
                                <a href="{{route('company.index',app()->getLocale())}}" class="btn btn-secondary" type="button">{{__('menu.back')}}</a>
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
