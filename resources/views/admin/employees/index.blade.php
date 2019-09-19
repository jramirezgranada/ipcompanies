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
            <div class="col-xs-12">
                @include('partials.errorsuccess')
                <div class="box">
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>{{ __('trans.id') }}</th>
                                <th>{{ __('trans.first_name') }}</th>
                                <th>{{ __('trans.last_name') }}l</th>
                                <th>{{ __('trans.email') }}</th>
                                <th>{{ __('trans.phone') }}</th>
                                <th>{{ __('trans.company') }}</th>
                                <th>{{ __('trans.actions') }}</th>
                            </tr>
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->first_name }}</td>
                                    <td>{{ $employee->last_name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>{{ $employee->company->name }}</td>
                                    <td>
                                        <a href="#" class="fa fa-eye employee-detail" data-toggle="modal"
                                           data-target="#myModal" data-id="{{ $employee->id }}"></a>
                                        |
                                        <a href="{{ route('employees.edit', $employee->id) }}" class="fa fa-edit"></a>
                                        |
                                        <form class="destroy-form"
                                              action="{{ route('employees.destroy', $employee->id) }}"
                                              method="POST"
                                              style="display: inline;">
                                            @method('DELETE')
                                            @csrf
                                            <a href="#" class="fa fa-trash delete-record"></a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            {{ $employees->links() }}
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
                    <h4 class="modal-title" id="myModalLabel">{{ __('trans.employee_detail') }}</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 employee-info">
                            <div>
                                <label for="employee-first-name">{{ __('trans.first_name') }}: </label>
                                <strong class="employee-first-name"></strong>
                            </div>
                            <div>
                                <label for="employee-last-name">{{ __('trans.last_name') }}: </label>
                                <strong class="employee-last-name"></strong>
                            </div>
                            <div>
                                <label for="employee-email">{{ __('trans.email') }}: </label>
                                <strong class="employee-email"></strong>
                            </div>
                            <div>
                                <label for="employee-phone">{{ __('trans.phone') }}: </label>
                                <strong class="employee-phone"></strong>
                            </div>
                            <div>
                                <label for="employee-company">{{ __('trans.company') }}: </label>
                                <strong class="employee-company"></strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a type="button" href="#" class="btn btn-primary edit-employee">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
