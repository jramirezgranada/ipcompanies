@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            {{ __('trans.Employees') }} &nbsp;
            <a href="{{ route('employees.create') }}" class="fa fa-plus-circle"></a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> {{ __('trans.Home') }}</a></li>
            <li><a href="#"><i class="fa fa-users"></i> {{ __('trans.Employees') }}</a></li>
        </ol>
    </section>

    <section class="content">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-12">
                @include('partials.errorsuccess')

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ __('trans.create_employee') }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{ route('employees.store') }}">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">{{ __('trans.company') }}</label>
                                <select name="company_id" id="company_id" class="form-control">
                                    <option value="">Select</option>
                                    @foreach($companies as $id => $company)
                                        <option value="{{$id}}">{{$company}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('trans.first_name') }}</label>
                                <input type="text" class="form-control" id="first_name"
                                       placeholder="{{ __('trans.enter_employee_first_name') }}" name="first_name"
                                       value="{{ old('first_name') }}">
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('trans.last_name') }}</label>
                                <input type="text" class="form-control" id="last_name"
                                       placeholder="{{ __('trans.enter_employee_last_name') }}" name="last_name"
                                       value="{{ old('last_name') }}">
                            </div>
                            <div class="form-group">
                                <label for="email">{{ __('trans.email') }}</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="{{ __('trans.enter_employee_email') }}" value="{{ old('email') }}">
                            </div>

                            <div class=" form-group">
                                <label for="website">{{ __('trans.phone') }}</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                       placeholder="{{ __('trans.enter_employee_phone') }}"
                                       value="{{ old('phone') }}">
                            </div>

                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{{ __('submit') }}</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->

            </div>
        </div>
        <!-- /.row -->
    </section>
@endsection
