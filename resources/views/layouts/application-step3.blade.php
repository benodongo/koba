<?php
/**
 * Created by PhpStorm.
 * User: benson
 * Date: 5/27/18
 * Time: 11:36 AM
 */
?>
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <h5>EMPLOYMENT DETAILS</h5>
                        <hr>
                        <form action="/applicants/step3" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="title">Employer</label>
                                        <input type="text" value="{{{ $applicant->employer or '' }}}" class="form-control" id="taskTitle"  name="employer">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="title">Staff Number</label>
                                        <input type="number" value="{{{ $applicant->staff_no or '' }}}" class="form-control" id="taskTitle"  name="staff_no">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" value="{{{ $applicant->title or '' }}}" class="form-control" id="taskTitle"  name="title">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="title">Department</label>
                                        <input type="text" value="{{{ $applicant->department or '' }}}" class="form-control" id="taskTitle"  name="department">
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="title">Branch</label>
                                        <input type="text" value="{{{ $applicant->branch or '' }}}" class="form-control" id="taskTitle"  name="branch" placeholder="">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="title">No of Employees</label>
                                        <input type="text" value="{{{ $applicant->no_of_employees or '' }}}" class="form-control" id="taskTitle"  name="no_of_employees" placeholder="">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="title">Employment terms</label>
                                        <input type="text" value="{{{ $applicant->employement_terms or '' }}}" class="form-control" id="taskTitle"  name="employement_terms">
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