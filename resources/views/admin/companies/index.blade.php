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
            <div class="col-xs-12">
                @include('partials.errorsuccess')
                <div class="box">
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>{{ __('trans.id') }}</th>
                                <th>{{ __('trans.name') }}</th>
                                <th>{{ __('trans.email') }}l</th>
                                <th>{{ __('trans.website') }}</th>
                                <th>{{ __('trans.actions') }}</th>
                            </tr>
                            @foreach($companies as $company)
                                <tr>
                                    <td>{{ $company->id }}</td>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td>
                                        <a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a>
                                    </td>
                                    <td>
                                        <a href="#" class="fa fa-eye company-detail" data-toggle="modal"
                                           data-target="#myModal" data-id="{{ $company->id }}"></a>
                                        |
                                        <a href="{{ route('companies.edit', $company->id) }}" class="fa fa-edit"></a>
                                        |
                                        <a href="{{ route('companies.destroy', $company->id) }}" class="fa fa-trash"
                                           onclick="return actionConfirm();"
                                        ></a>

                                        <form id="destroy-form" action="{{ route('companies.destroy', $company->id) }}"
                                              method="POST"
                                              style="display: none;">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            {{ $companies->links() }}
            <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{ __('trans.company_detail') }}</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 company-info">
                            <div>
                                <label for="email">{{ __('trans.name') }}: </label>
                                <strong class="company-name"></strong>
                            </div>
                            <div>
                                <label for="email">{{ __('trans.email') }}: </label>
                                <strong class="company-email"></strong>
                            </div>
                            <div>
                                <label for="email">{{ __('trans.website') }}: </label>
                                <div class="company-website"></div>
                            </div>
                            <div>
                                <label for="email">{{ __('trans.logo') }}: </label>
                                <div class="company-logo"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a type="button" href="#" class="btn btn-primary edit-company">Edit</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function actionConfirm() {
            if (!confirm("Are You Sure to delete this")) {
                event.preventDefault();
            } else {
                event.preventDefault();
                document.getElementById('destroy-form').submit();
            }
        }
    </script>
@endsection
