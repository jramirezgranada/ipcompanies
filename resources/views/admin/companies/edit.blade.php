@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            {{ __('trans.Companies') }} &nbsp;
            <a href="{{ route('companies.create') }}" class="fa fa-plus-circle"></a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> {{ __('trans.Home') }}</a></li>
            <li><a href="#"><i class="fa fa-building"></i> {{ __('trans.Companies') }}</a></li>
        </ol>
    </section>

    <section class="content">

        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-12">
                @include('partials.errorsuccess')

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ __('trans.edit_company') }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{ route('companies.update', $company->id) }}"
                          enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <input type="hidden" name="id" value="{{ $company->id }}">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">{{ __('trans.name') }}</label>
                                <input type="text" class="form-control" id="name"
                                       placeholder="{{ __('trans.enter_company_name') }}" name="name"
                                       value="{{ $company->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">{{ __('trans.email') }}</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="{{ __('trans.enter_company_email') }}"
                                       value="{{ $company->email }}">
                            </div>

                            <div class=" form-group">
                                <label for="website">{{ __('trans.website') }}</label>
                                <input type="text" class="form-control" id="website" name="website"
                                       placeholder="{{ __('trans.enter_company_website') }}"
                                       value="{{ $company->website }}">
                            </div>

                            <div class=" form-group">
                                <label for="logo">{{ __('trans.logo') }}</label>
                                <br>
                                @if($company->logo)
                                    <img src="{{ $company->logo }}" alt="">
                                    <br>
                                @endif
                                <input type="file" id="logo" name="logo">
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
