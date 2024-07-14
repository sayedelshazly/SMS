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
                        <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                            Add Grade{{ trans('grades.name_grade') }}
                        </button>
                        <br><br>
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
                                    <?php $i = 0; ?>
                                    @foreach ($grades as $grade)
                                    <?php $i++; ?>
                                    <tr>
                                        <td>{{$i}}</td>
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
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                            id="exampleModalLabel">
                                            {{ trans('Grades_trans.add_Grade') }}
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- add_form -->
                                        <form action="#" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col">
                                                    <label for="Name" class="mr-sm-2">{{
                                                        trans('grades.name_grade') }}
                                                        :</label>
                                                    <input id="Name" type="text" name="Name" class="form-control">
                                                </div>
                                                {{-- <div class="col">
                                                    <label for="Name_en" class="mr-sm-2">{{
                                                        trans('Grades_trans.stage_name_en') }}
                                                        :</label>
                                                    <input type="text" class="form-control" name="Name_en">
                                                </div> --}}
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">
                                                    {{ trans('grades.notes') }}
                                                    :</label>
                                                <textarea class="form-control" name="Notes"
                                                    id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <br><br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{
                                            trans('Grades_trans.Close') }}</button>
                                        <button type="submit" class="btn btn-success">{{ trans('Grades_trans.submit')
                                            }}</button>
                                    </div>
                                    </form>

                                </div>
                            </div>
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