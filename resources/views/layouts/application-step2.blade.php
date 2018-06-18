@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <h5>BUSINESS DETAILS</h5>
                        <hr>
                        <form action="/applicants/step2" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="title">Name of Entity</label>
                                        <input type="text" value="{{{ $applicant->name_of_entity or '' }}}" class="form-control" id="taskTitle"  name="name_of_entity">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="title">Year of Registration</label>
                                        <input type="text" value="{{{ $applicant->year_of_reg or '' }}}" class="form-control" id="taskTitle"  name="year_of_reg">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="title">Registration Number</label>
                                        <input type="text" value="{{{ $applicant->reg_no or '' }}}" class="form-control" id="taskTitle"  name="reg_no">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="title">Licence Number</label>
                                        <input type="text" value="{{{ $applicant->licence_no or '' }}}" class="form-control" id="taskTitle"  name="licence_no">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="title">Name of Business</label>
                                        <input type="text" value="{{{ $applicant->name_of_bs or '' }}}" class="form-control" id="taskTitle"  name="name_of_bs" placeholder="">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="title">PIN</label>
                                        <input type="text" value="{{{ $applicant->pin or '' }}}" class="form-control" id="taskTitle"  name="pin" placeholder="">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="title">Business Address</label>
                                        <input type="text" value="{{{ $applicant->bs_address or '' }}}" class="form-control" id="taskTitle"  name="bs_address">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="title">Business Tel:</label>
                                        <input type="text" value="{{{ $applicant->bs_tel or '' }}}" class="form-control" id="taskTitle"  name="bs_tel">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Business Description</label><br>
                                         <textarea type="text"  class="form-control" id="taskDescription" name="bs_description">{{{ $product->bs_description or '' }}}</textarea>
                                    </div>

                                </div>

                            </div>


                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <button type="submit" class="btn btn-primary" style="float:right">Next</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection