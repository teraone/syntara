@extends('syntara::layouts.dashboard.master')

@section('content')
<script src="{{ asset('packages/mrjuliuss/syntara/assets/js/dashboard/group.js') }}"></script> 
{{ Breadcrumbs::create(array(array('title' => 'Groups', 'link' => "dashboard/groups", 'icon' => 'glyphicon-list-alt'), array('title' => $group->name, 'link' => URL::current(), 'icon' => ''))); }}

<?php $permissions = array_keys($group->getPermissions()) ?>
<div class="container" id="main-container">
    <div class="row">
        <div class="col-lg-6">
            <section class="module">
                <div class="module-head">
                    <b>{{ $group->getId() }} - {{ $group->name }}</b>
                </div>
                <div class="module-body">
                    <form class="form-horizontal" id="edit-group-form" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                   <label class="control-label">Group name :</label>
                                    <input class="col-lg-12 form-control" type="text" id="groupname" name="groupname" value="{{ $group->name }}">
                               </div>
                            </div>
                            <div class="col-lg-6" id="input-container">
                                <div class="form-group">
                                    <label class="control-label">Permissions :</a></label>
                                    <p class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-plus-sign add-input"></span></span>
                                        <input type="text" class="form-control" name="permission[1]" value="{{ $permissions[0] }}"/>
                                    </p>
                                </div>
                                @for ($i = 1; $i < count($permissions); $i++)
                                <div class="form-group">
                                    <p class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-minus-sign remove-input"></span></span>
                                        <input type="text" class="form-control" name="permission[{{ $i+1 }}]" value="{{ $permissions[$i] }}"/>
                                    </p>
                                </div>
                                @endfor
                            </div>
                            <div class="col-lg-12">
                                <div class="control-group">
                                    <button id="update-group" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <div class="col-lg-6">
            <section class="module">
            <div class="module-head">
                <b></b>
            </div>
            <div class="module-body">
				
            </div>
        </div>
    </div>
</div>
@stop