@extends('layouts.app')

@section('title')
HBK - Dashboard
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome, {{Auth::user()->username}}</div>

                <div class="panel-body">
                    You can add your children's information, register to courses, and conduct payments all from one place
                </div>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Current Registration</div>

                <div class="panel-body">
                    registration table
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                
                <div class="panel-body">
                   ------picture-------
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Outstanding Balance</div>

                <div class="panel-body">
                    Balance table
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Your Children</div>

                <div class="panel-body">
                   Child table
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
