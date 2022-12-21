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
                            <form action="{{route('company.store', app()->getLocale())}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group">
                                        <label class="required" for="name">{{__('menu.companyName')}}</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                        @if($errors->has('name'))
                                            <div class="text-danger">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="email">{{__('menu.email')}}</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="website">{{__('menu.website')}}</label>
                                        <input type="text" class="form-control" id="website" name="website">
                                    </div>
                                    <div class="form-group">
                                            <label for="logo">{{__('menu.logo')}}</label>
                                            <input type="file" class="form-control" name="logo">
                                    </div>
                                    <a href="{{route('company.index', app()->getLocale())}}" class="btn btn-secondary" type="button">{{__('menu.back')}}</a>
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
