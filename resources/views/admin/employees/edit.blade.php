@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            {{ __('trans.Employees') }} &nbsp;
            <a href="{{ route('employees.create') }}" class="fa fa-plus-circle"></a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> {{ __('trans.Home') }}</a></li>
            <li><a href="#"><i class="fa fa-building"></i> {{ __('trans.Employees') }}</a></li>
        </ol>
    </section>

    <section class="content">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-12">
                @include('partials.errorsuccess')

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ __('trans.edit_employee') }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{ route('employees.update', $employee->id) }}"
                          enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <input type="hidden" name="id" value="{{ $employee->id }}">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">{{ __('trans.company') }}</label>
                                <select name="company_id" id="company_id" class="form-control">
                                    <option value="">Select</option>
                                    @foreach($companies as $id => $company)
                                        <option value="{{$id}}" {{ ($employee->company_id == $id) ? 'selected' : '' }}>
                                            {{$company}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('trans.first_name') }}</label>
                                <input type="text" class="form-control" id="first_name"
                                       placeholder="{{ __('trans.enter_employee_first_name') }}" name="first_name"
                                       value="{{ $employee->first_name }}">
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('trans.last_name') }}</label>
                                <input type="text" class="form-control" id="last_name"
                                       placeholder="{{ __('trans.enter_employee_last_name') }}" name="last_name"
                                       value="{{ $employee->last_name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">{{ __('trans.email') }}</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="{{ __('trans.enter_employee_email') }}"
                                       value="{{ $employee->email }}">
                            </div>

                            <div class=" form-group">
                                <label for="website">{{ __('trans.phone') }}</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                       placeholder="{{ __('trans.enter_employee_phone') }}"
                                       value="{{ $employee->phone }}">
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
