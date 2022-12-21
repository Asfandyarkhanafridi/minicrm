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
                    <div class="card">
                        @include('partials.message')
                        <div class="card-body">
                            <form action="{{route('company.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group">
                                        <label class="required" for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                                        @if($errors->has('name'))
                                            <div class="text-danger">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="website">Website</label>
                                        <input type="text" class="form-control" id="website" name="website" placeholder="Enter Website">
                                    </div>
                                    <div class="form-group">
                                            <label for="logo">Logo</label>
                                            <input type="file" class="form-control" name="logo">
                                    </div>
                                    <a href="{{route('company.index')}}" class="btn btn-secondary" type="button">Back</a>
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
