@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            {{ __('trans.Home') }}
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> {{ __('trans.Home') }}</a></li>
        </ol>
    </section>

    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <a href="{{ route('companies.index') }}">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-building"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">{{ __('trans.Companies') }}</span>
                            <span class="info-box-number">{{ $data["companies"] }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </a>
            <!-- /.col -->
            <a href="{{ route('employees.index') }}">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">{{ __('trans.Employees') }}</span>
                            <span class="info-box-number">{{ $data["employees"] }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </a>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
