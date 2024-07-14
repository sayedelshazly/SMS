@extends('layouts.master')
@section('css')

@section('title')
{{ trans('sidebar.Grade_list') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{ trans('sidebar.Grade_list') }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{ trans('grades.home') }}</a></li>
                <li class="breadcrumb-item active">{{ trans('sidebar.Grade_list') }}</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-12 mb-30">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered p-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('grades.name_grade') }}</th>
                                        <th>{{ trans('grades.notes') }}</th>
                                        <th>{{ trans('grades.actions') }}</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0 ?>
                                    @foreach ($grades as $grade)
                                    <?php $i++; ?>

                                    <tr>
                                        <td>{{$grade->id}}</td>
                                        <td>{{ $grade->Name }}</td>
                                        <td>{{ $grade->Note }}</td>
                                        <td>
                                            <a class="btn btn-info" href="#">Edit</a>
                                            <a class="btn btn-danger" href="#">Delete</a>
                                        </td>

                                    </tr>
                                    @endforeach


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection