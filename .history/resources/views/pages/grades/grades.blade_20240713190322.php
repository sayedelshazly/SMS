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
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                <div class="row">
                    <div class="col-xl-12 mb-30">
                        <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                            {{ trans('grades.Add Grade') }}
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
                                        <td>{{ $grade->Notes }}</td>
                                        <td>
                                            <button class="btn bnt-primary" type="button" data-toggle="modal" data-target="#exampleModalEdit">
                                                {{ trans('grades.Edit') }}
                                            </button>
                                            <a class="btn btn-danger" href="#">{{ trans('grades.Delete') }}</a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </table>
                        </div>
                        {{-- model for add grade --}}
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                            id="exampleModalLabel">
                                            {{ trans('grades.Add Grade') }}
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
                                                    <input id="Name" type="text" name="Name" class="form-control"
                                                        >
                                                </div>
                                                <div class="col">
                                                    <label for="Name_en" class="mr-sm-2">{{
                                                        trans('grades.name_grade') }} En
                                                        :</label>
                                                    <input type="text" class="form-control" name="Name_en">
                                                </div>
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
                                            trans('grades.Close') }}</button>
                                        <button type="submit" class="btn btn-success">{{ trans('grades.Submit')
                                            }}</button>
                                    </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        {{-- End model for add grade --}}
                        {{-- model for edit grade --}}
                        <div class="modal fade" id="exampleModalEdit" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                            id="exampleModalLabel">
                                            {{ trans('grades.Edit Grade') }} 
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
                                                    <input id="Name" type="text" name="Name" class="form-control"
                                                        >
                                                </div>
                                                <div class="col">
                                                    <label for="Name_en" class="mr-sm-2">{{
                                                        trans('grades.name_grade') }} En
                                                        :</label>
                                                    <input type="text" class="form-control" name="Name_en">
                                                </div>
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
                                            trans('grades.Close') }}</button>
                                        <button type="submit" class="btn btn-success">{{ trans('grades.Submit')
                                            }}</button>
                                    </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        {{-- End model for edit grade --}}


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