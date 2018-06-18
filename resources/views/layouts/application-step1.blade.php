@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="panel panel-default">

<div class="panel-body">
    <h5>APPLICANT PARTICULARS</h5>
    <hr>
    <form action="/applicants/step1" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="title">First Name</label>
                    <input type="text" value="{{{ $applicant->fname or '' }}}" class="form-control" id="taskTitle"  name="fname">
                </div>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="title">Middle Name</label>
                    <input type="text" value="{{{ $applicant->mname or '' }}}" class="form-control" id="taskTitle"  name="mname">
                </div>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="title">Last Name</label>
                    <input type="text" value="{{{ $applicant->lname or '' }}}" class="form-control" id="taskTitle"  name="lname">
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">

                <div class="form-group">
                    <label for="description">Nationality</label>
                    <select class="form-control" name="nationality">
                        <option {{{ (isset($applicant->nationality) && $applicant->nationality == 'Kenya') ? "selected=\"selected\"" : "" }}}>Kenya</option>
                        <option {{{ (isset($applicant->nationality) && $applicant->nationality == 'Uganda') ? "selected=\"selected\"" : "" }}}>Uganda</option>
                        <option {{{ (isset($applicant->nationality) && $applicant->nationality == 'Tanzania') ? "selected=\"selected\"" : "" }}}>Tanzania</option>
                        <option {{{ (isset($applicant->nationality) && $applicant->nationality == 'Rwanda') ? "selected=\"selected\"" : "" }}}>Rwanda</option>
                    </select>
                </div>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="title">Date of Birth</label>
                    <input type="text" value="{{{ $applicant->dob or '' }}}" class="form-control" id="taskTitle"  name="dob" placeholder="yy -mm -dd">
                </div>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="title">National ID</label>
                    <input type="text" value="{{{ $applicant->national_id or '' }}}" class="form-control" id="taskTitle"  name="national_id">
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="title">KRA Pin</label>
                    <input type="text" value="{{{ $applicant->kra_pin or '' }}}" class="form-control" id="taskTitle"  name="kra_pin">
                </div>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="title">Gender</label><br>
                    <label class="radio-inline"><input type="radio" name="gender" value="male">Male</label>
                    <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
                </div>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="title">Marital Status</label><br>
                    <label class="radio-inline"><input type="radio" name="marital_status" value="single">Single</label>
                    <label class="radio-inline"><input type="radio" name="marital_status" value="married">Married</label>
                    <label class="radio-inline"><input type="radio" name="marital_status" value="divorced">Divorced</label>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">

                <div class="form-group">
                    <label for="description">Level Of Education</label>
                    <select class="form-control" name="education">
                        <option {{{ (isset($applicant->education) && $applicant->education == 'Primary') ? "selected=\"selected\"" : "" }}}>Primary</option>
                        <option {{{ (isset($applicant->education) && $applicant->education == 'Secondary') ? "selected=\"selected\"" : "" }}}>Secondary</option>
                        <option {{{ (isset($applicant->education) && $applicant->education == 'Tertiary') ? "selected=\"selected\"" : "" }}}>Tertiary</option>
                        <option {{{ (isset($applicant->education) && $applicant->education == 'University') ? "selected=\"selected\"" : "" }}}>University</option>
                    </select>
                </div>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="title">No of Children</label>
                    <input type="number" value="{{{ $applicant->children or '' }}}" class="form-control" id="taskTitle"  name="children" >
                </div>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="title">Dependants</label>
                    <input type="number" value="{{{ $applicant->dependants or '' }}}" class="form-control" id="taskTitle"  name="dependants">
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-3">

                <div class="form-group">
                    <label for="description">Next of KIn</label>
                    <input type="text" value="{{{ $applicant->next_kin or '' }}}" class="form-control" id="taskTitle"  name="next_kin" >

                </div>

            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="title">relationship</label>
                    <input type="text" value="{{{ $applicant->kin_relationship or '' }}}" class="form-control" id="taskTitle"  name="kin_relationship" >
                </div>

            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="title">National ID</label>
                    <input type="number" value="{{{ $applicant->kin_id or '' }}}" class="form-control" id="taskTitle"  name="kin_id">
                </div>

            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="title">Tel</label>
                    <input type="number" value="{{{ $applicant->kin_tel or '' }}}" class="form-control" id="taskTitle"  name="kin_tel">
                </div>

            </div>
        </div>
        <h5>PHYSICAL ADDRESS</h5>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="title">County</label>
                    <input type="text" value="{{{ $applicant->county or '' }}}" class="form-control" id="taskTitle"  name="county">
                </div>

            </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="title">location</label>
                <input type="text" value="{{{ $applicant->location or '' }}}" class="form-control" id="taskTitle"  name="location" >
            </div>

        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="title">Road/Street</label>
                <input type="text" value="{{{ $applicant->road_street or '' }}}" class="form-control" id="taskTitle"  name="road_street">
            </div>

        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="title">House no</label>
                <input type="number" value="{{{ $applicant->house_no or '' }}}" class="form-control" id="taskTitle"  name="house_no">
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