@extends('templates/sidebar')

@section('content')

<div id="user-profile-2" class="user-profile">
<div class="tabbable">
<ul class="nav nav-tabs padding-18">
    <li class="active">
        <a data-toggle="tab" href="#home">
            <i class="green icon-user bigger-120"></i>
            Profile
        </a>
    </li>
    <li>
        <a data-toggle="tab" href="#services">
            <i class="orange icon-cloud bigger-120"></i>
            Services
        </a>
    </li>
    <li>
        <a data-toggle="tab" href="#payments">
            <i class="blue icon-usd bigger-120"></i>
            Invoices / Payments
        </a>
    </li>
</ul>
<div class="tab-content no-border padding-24">
<div id="home" class="tab-pane in active">
    <div class="row">
        <div class="col-xs-12 col-sm-3 center">
            <span class="profile-picture">
                <img class="editable img-responsive" alt="{{{ $customer->username }}} Avatar" id="avatar2" src="{{ $customer->getGravatar() }}" />
            </span>
            <div class="space space-4"></div>
            <a href="#" class="btn btn-sm btn-block btn-primary">
                <i class="icon-envelope-alt bigger-110"></i>
                <span class="bigger-110">Open a Ticket</span>
            </a>
            <a href="#" class="btn btn-sm btn-block btn-danger">
                <i class="icon-key-alt bigger-110"></i>
                <span class="bigger-110">Reset Password</span>
            </a>
        </div>
        <!-- /span -->
        <div class="col-xs-12 col-sm-9">
            <h4 class="blue">
                <span class="middle">{{{ $customer->first_name }}} {{{ $customer->last_name }}}</span>
            </h4>
            <div class="profile-user-info">
                <div class="profile-info-row">
                    <div class="profile-info-name"> Username </div>
                    <div class="profile-info-value">
                        <span>{{{ $customer->username }}}</span>
                    </div>
                </div>
                <div class="profile-info-row">
                    <div class="profile-info-name"> Email </div>
                    <div class="profile-info-value">
                        <span>{{{ $customer->email }}}</span>
                    </div>
                </div>
                <div class="profile-info-row">
                    <div class="profile-info-name"> Created At </div>
                    <div class="profile-info-value">
                        <span>{{{ $customer->created_at }}}</span>
                    </div>
                </div>

                <div class="profile-info-row">
                    <div class="profile-info-name"> Last Online </div>
                    <div class="profile-info-value">
                        <span>3 hours ago</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /span -->
    </div>
    <!-- /row-fluid -->
</div>
<!-- #home -->
<div id="feed" class="tab-pane">
<div class="profile-feed row-fluid">
<div class="span6">
    <div class="profile-activity clearfix">
        <div>
            <img class="pull-left" alt="Alex Doe's avatar" src="assets/avatars/avatar5.png" />
            <a class="user" href="#"> Alex Doe </a>
            changed his profile photo.
            <a href="#">Take a look</a>
            <div class="time">
                <i class="icon-time bigger-110"></i>
                an hour ago
            </div>
        </div>
        <div class="tools action-buttons">
            <a href="#" class="blue">
                <i class="icon-pencil bigger-125"></i>
            </a>
            <a href="#" class="red">
                <i class="icon-remove bigger-125"></i>
            </a>
        </div>
    </div>
    <div class="profile-activity clearfix">
        <div>
            <img class="pull-left" alt="Susan Smith's avatar" src="assets/avatars/avatar1.png" />
            <a class="user" href="#"> Susan Smith </a>
            is now friends with Alex Doe.
            <div class="time">
                <i class="icon-time bigger-110"></i>
                2 hours ago
            </div>
        </div>
        <div class="tools action-buttons">
            <a href="#" class="blue">
                <i class="icon-pencil bigger-125"></i>
            </a>
            <a href="#" class="red">
                <i class="icon-remove bigger-125"></i>
            </a>
        </div>
    </div>
    <div class="profile-activity clearfix">
        <div>
            <i class="pull-left thumbicon icon-ok btn-success no-hover"></i>
            <a class="user" href="#"> Alex Doe </a>
            joined
            <a href="#">Country Music</a>
            group.
            <div class="time">
                <i class="icon-time bigger-110"></i>
                5 hours ago
            </div>
        </div>
        <div class="tools action-buttons">
            <a href="#" class="blue">
                <i class="icon-pencil bigger-125"></i>
            </a>
            <a href="#" class="red">
                <i class="icon-remove bigger-125"></i>
            </a>
        </div>
    </div>
    <div class="profile-activity clearfix">
        <div>
            <i class="pull-left thumbicon icon-picture btn-info no-hover"></i>
            <a class="user" href="#"> Alex Doe </a>
            uploaded a new photo.
            <a href="#">Take a look</a>
            <div class="time">
                <i class="icon-time bigger-110"></i>
                5 hours ago
            </div>
        </div>
        <div class="tools action-buttons">
            <a href="#" class="blue">
                <i class="icon-pencil bigger-125"></i>
            </a>
            <a href="#" class="red">
                <i class="icon-remove bigger-125"></i>
            </a>
        </div>
    </div>
    <div class="profile-activity clearfix">
        <div>
            <img class="pull-left" alt="David Palms's avatar" src="assets/avatars/avatar4.png" />
            <a class="user" href="#"> David Palms </a>
            left a comment on Alex's wall.
            <div class="time">
                <i class="icon-time bigger-110"></i>
                8 hours ago
            </div>
        </div>
        <div class="tools action-buttons">
            <a href="#" class="blue">
                <i class="icon-pencil bigger-125"></i>
            </a>
            <a href="#" class="red">
                <i class="icon-remove bigger-125"></i>
            </a>
        </div>
    </div>
</div>
<!-- /span -->
<div class="span6">
    <div class="profile-activity clearfix">
        <div>
            <i class="pull-left thumbicon icon-edit btn-pink no-hover"></i>
            <a class="user" href="#"> Alex Doe </a>
            published a new blog post.
            <a href="#">Read now</a>
            <div class="time">
                <i class="icon-time bigger-110"></i>
                11 hours ago
            </div>
        </div>
        <div class="tools action-buttons">
            <a href="#" class="blue">
                <i class="icon-pencil bigger-125"></i>
            </a>
            <a href="#" class="red">
                <i class="icon-remove bigger-125"></i>
            </a>
        </div>
    </div>
    <div class="profile-activity clearfix">
        <div>
            <img class="pull-left" alt="Alex Doe's avatar" src="assets/avatars/avatar5.png" />
            <a class="user" href="#"> Alex Doe </a>
            upgraded his skills.
            <div class="time">
                <i class="icon-time bigger-110"></i>
                12 hours ago
            </div>
        </div>
        <div class="tools action-buttons">
            <a href="#" class="blue">
                <i class="icon-pencil bigger-125"></i>
            </a>
            <a href="#" class="red">
                <i class="icon-remove bigger-125"></i>
            </a>
        </div>
    </div>
    <div class="profile-activity clearfix">
        <div>
            <i class="pull-left thumbicon icon-key btn-info no-hover"></i>
            <a class="user" href="#"> Alex Doe </a>
            logged in.
            <div class="time">
                <i class="icon-time bigger-110"></i>
                12 hours ago
            </div>
        </div>
        <div class="tools action-buttons">
            <a href="#" class="blue">
                <i class="icon-pencil bigger-125"></i>
            </a>
            <a href="#" class="red">
                <i class="icon-remove bigger-125"></i>
            </a>
        </div>
    </div>
    <div class="profile-activity clearfix">
        <div>
            <i class="pull-left thumbicon icon-off btn-inverse no-hover"></i>
            <a class="user" href="#"> Alex Doe </a>
            logged out.
            <div class="time">
                <i class="icon-time bigger-110"></i>
                16 hours ago
            </div>
        </div>
        <div class="tools action-buttons">
            <a href="#" class="blue">
                <i class="icon-pencil bigger-125"></i>
            </a>
            <a href="#" class="red">
                <i class="icon-remove bigger-125"></i>
            </a>
        </div>
    </div>
    <div class="profile-activity clearfix">
        <div>
            <i class="pull-left thumbicon icon-key btn-info no-hover"></i>
            <a class="user" href="#"> Alex Doe </a>
            logged in.
            <div class="time">
                <i class="icon-time bigger-110"></i>
                16 hours ago
            </div>
        </div>
        <div class="tools action-buttons">
            <a href="#" class="blue">
                <i class="icon-pencil bigger-125"></i>
            </a>
            <a href="#" class="red">
                <i class="icon-remove bigger-125"></i>
            </a>
        </div>
    </div>
</div>
<!-- /span -->
</div>
<!-- /row -->
<div class="space-12"></div>
<div class="center">
    <a href="#" class="btn btn-small btn-primary">
        <i class="icon-rss bigger-150 middle"></i>
        View more activities
        <i class="icon-on-right icon-arrow-right"></i>
    </a>
</div>
</div>
<!-- /#feed -->
<div id="friends" class="tab-pane">
<div class="profile-users clearfix">
<div class="itemdiv memberdiv">
    <div class="inline position-relative">
        <div class="user">
            <a href="#">
                <img src="assets/avatars/avatar4.png" alt="Bob Doe's avatar" />
            </a>
        </div>
        <div class="body">
            <div class="name">
                <a href="#">
                    <span class="user-status status-online"></span>
                    Bob Doe
                </a>
            </div>
        </div>
        <div class="popover">
            <div class="arrow"></div>
            <div class="popover-content">
                <div class="bolder">Content Editor</div>
                <div class="time">
                    <i class="icon-time middle bigger-120 orange"></i>
                    <span class="green"> 20 mins ago </span>
                </div>
                <div class="hr dotted hr-8"></div>
                <div class="tools action-buttons">
                    <a href="#">
                        <i class="icon-facebook-sign blue bigger-150"></i>
                    </a>
                    <a href="#">
                        <i class="icon-twitter-sign light-blue bigger-150"></i>
                    </a>
                    <a href="#">
                        <i class="icon-google-plus-sign red bigger-150"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="itemdiv memberdiv">
    <div class="inline position-relative">
        <div class="user">
            <a href="#">
                <img src="assets/avatars/avatar1.png" alt="Rose Doe's avatar" />
            </a>
        </div>
        <div class="body">
            <div class="name">
                <a href="#">
                    <span class="user-status status-offline"></span>
                    Rose Doe
                </a>
            </div>
        </div>
        <div class="popover">
            <div class="arrow"></div>
            <div class="popover-content">
                <div class="bolder">Graphic Designer</div>
                <div class="time">
                    <i class="icon-time middle bigger-120 grey"></i>
                    <span class="grey"> 30 min ago </span>
                </div>
                <div class="hr dotted hr-8"></div>
                <div class="tools action-buttons">
                    <a href="#">
                        <i class="icon-facebook-sign blue bigger-150"></i>
                    </a>
                    <a href="#">
                        <i class="icon-twitter-sign light-blue bigger-150"></i>
                    </a>
                    <a href="#">
                        <i class="icon-google-plus-sign red bigger-150"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="itemdiv memberdiv">
    <div class="inline position-relative">
        <div class="user">
            <a href="#">
                <img src="assets/avatars/avatar.png" alt="Jim Doe's avatar" />
            </a>
        </div>
        <div class="body">
            <div class="name">
                <a href="#">
                    <span class="user-status status-busy"></span>
                    Jim Doe
                </a>
            </div>
        </div>
        <div class="popover">
            <div class="arrow"></div>
            <div class="popover-content">
                <div class="bolder">SEO &amp; Advertising</div>
                <div class="time">
                    <i class="icon-time middle bigger-120 red"></i>
                    <span class="grey"> 1 hour ago </span>
                </div>
                <div class="hr dotted hr-8"></div>
                <div class="tools action-buttons">
                    <a href="#">
                        <i class="icon-facebook-sign blue bigger-150"></i>
                    </a>
                    <a href="#">
                        <i class="icon-twitter-sign light-blue bigger-150"></i>
                    </a>
                    <a href="#">
                        <i class="icon-google-plus-sign red bigger-150"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="itemdiv memberdiv">
    <div class="inline position-relative">
        <div class="user">
            <a href="#">
                <img src="assets/avatars/avatar5.png" alt="Alex Doe's avatar" />
            </a>
        </div>
        <div class="body">
            <div class="name">
                <a href="#">
                    <span class="user-status status-idle"></span>
                    Alex Doe
                </a>
            </div>
        </div>
        <div class="popover">
            <div class="arrow"></div>
            <div class="popover-content">
                <div class="bolder">Marketing</div>
                <div class="time">
                    <i class="icon-time middle bigger-120 orange"></i>
                    <span class=""> 40 minutes idle </span>
                </div>
                <div class="hr dotted hr-8"></div>
                <div class="tools action-buttons">
                    <a href="#">
                        <i class="icon-facebook-sign blue bigger-150"></i>
                    </a>
                    <a href="#">
                        <i class="icon-twitter-sign light-blue bigger-150"></i>
                    </a>
                    <a href="#">
                        <i class="icon-google-plus-sign red bigger-150"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="itemdiv memberdiv">
    <div class="inline position-relative">
        <div class="user">
            <a href="#">
                <img src="assets/avatars/avatar2.png" alt="Phil Doe's avatar" />
            </a>
        </div>
        <div class="body">
            <div class="name">
                <a href="#">
                    <span class="user-status status-online"></span>
                    Phil Doe
                </a>
            </div>
        </div>
        <div class="popover">
            <div class="arrow"></div>
            <div class="popover-content">
                <div class="bolder">Public Relations</div>
                <div class="time">
                    <i class="icon-time middle bigger-120 orange"></i>
                    <span class="green"> 2 hours ago </span>
                </div>
                <div class="hr dotted hr-8"></div>
                <div class="tools action-buttons">
                    <a href="#">
                        <i class="icon-facebook-sign blue bigger-150"></i>
                    </a>
                    <a href="#">
                        <i class="icon-twitter-sign light-blue bigger-150"></i>
                    </a>
                    <a href="#">
                        <i class="icon-google-plus-sign red bigger-150"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="itemdiv memberdiv">
    <div class="inline position-relative">
        <div class="user">
            <a href="#">
                <img src="assets/avatars/avatar3.png" alt="Susan Doe's avatar" />
            </a>
        </div>
        <div class="body">
            <div class="name">
                <a href="#">
                    <span class="user-status status-online"></span>
                    Susan Doe
                </a>
            </div>
        </div>
        <div class="popover">
            <div class="arrow"></div>
            <div class="popover-content">
                <div class="bolder">HR Management</div>
                <div class="time">
                    <i class="icon-time middle bigger-120 orange"></i>
                    <span class="green"> 20 mins ago </span>
                </div>
                <div class="hr dotted hr-8"></div>
                <div class="tools action-buttons">
                    <a href="#">
                        <i class="icon-facebook-sign blue bigger-150"></i>
                    </a>
                    <a href="#">
                        <i class="icon-twitter-sign light-blue bigger-150"></i>
                    </a>
                    <a href="#">
                        <i class="icon-google-plus-sign red bigger-150"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="itemdiv memberdiv">
    <div class="inline position-relative">
        <div class="user">
            <a href="#">
                <img src="assets/avatars/avatar1.png" alt="Jennifer Doe's avatar" />
            </a>
        </div>
        <div class="body">
            <div class="name">
                <a href="#">
                    <span class="user-status status-offline"></span>
                    Jennifer Doe
                </a>
            </div>
        </div>
        <div class="popover">
            <div class="arrow"></div>
            <div class="popover-content">
                <div class="bolder">Graphic Designer</div>
                <div class="time">
                    <i class="icon-time middle bigger-120 grey"></i>
                    <span class="grey"> 2 hours ago </span>
                </div>
                <div class="hr dotted hr-8"></div>
                <div class="tools action-buttons">
                    <a href="#">
                        <i class="icon-facebook-sign blue bigger-150"></i>
                    </a>
                    <a href="#">
                        <i class="icon-twitter-sign light-blue bigger-150"></i>
                    </a>
                    <a href="#">
                        <i class="icon-google-plus-sign red bigger-150"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="itemdiv memberdiv">
    <div class="inline position-relative">
        <div class="user">
            <a href="#">
                <img src="assets/avatars/avatar3.png" alt="Alexa Doe's avatar" />
            </a>
        </div>
        <div class="body">
            <div class="name">
                <a href="#">
                    <span class="user-status status-offline"></span>
                    Alexa Doe
                </a>
            </div>
        </div>
        <div class="popover">
            <div class="arrow"></div>
            <div class="popover-content">
                <div class="bolder">Accounting</div>
                <div class="time">
                    <i class="icon-time middle bigger-120 grey"></i>
                    <span class="grey"> 4 hours ago </span>
                </div>
                <div class="hr dotted hr-8"></div>
                <div class="tools action-buttons">
                    <a href="#">
                        <i class="icon-facebook-sign blue bigger-150"></i>
                    </a>
                    <a href="#">
                        <i class="icon-twitter-sign light-blue bigger-150"></i>
                    </a>
                    <a href="#">
                        <i class="icon-google-plus-sign red bigger-150"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="hr hr10 hr-double"></div>
<ul class="pager pull-right">
    <li class="previous disabled">
        <a href="#">&larr; Prev</a>
    </li>
    <li class="next">
        <a href="#">Next &rarr;</a>
    </li>
</ul>
</div>
<!-- /#friends -->
<div id="pictures" class="tab-pane">
    <ul class="ace-thumbnails">
        <li>
            <a href="#" data-rel="colorbox">
                <img alt="150x150" src="assets/images/gallery/thumb-1.jpg" />
                <div class="text">
                    <div class="inner">Sample Caption on Hover</div>
                </div>
            </a>
            <div class="tools tools-bottom">
                <a href="#">
                    <i class="icon-link"></i>
                </a>
                <a href="#">
                    <i class="icon-paper-clip"></i>
                </a>
                <a href="#">
                    <i class="icon-pencil"></i>
                </a>
                <a href="#">
                    <i class="icon-remove red"></i>
                </a>
            </div>
        </li>
        <li>
            <a href="#" data-rel="colorbox">
                <img alt="150x150" src="assets/images/gallery/thumb-2.jpg" />
                <div class="text">
                    <div class="inner">Sample Caption on Hover</div>
                </div>
            </a>
            <div class="tools tools-bottom">
                <a href="#">
                    <i class="icon-link"></i>
                </a>
                <a href="#">
                    <i class="icon-paper-clip"></i>
                </a>
                <a href="#">
                    <i class="icon-pencil"></i>
                </a>
                <a href="#">
                    <i class="icon-remove red"></i>
                </a>
            </div>
        </li>
        <li>
            <a href="#" data-rel="colorbox">
                <img alt="150x150" src="assets/images/gallery/thumb-3.jpg" />
                <div class="text">
                    <div class="inner">Sample Caption on Hover</div>
                </div>
            </a>
            <div class="tools tools-bottom">
                <a href="#">
                    <i class="icon-link"></i>
                </a>
                <a href="#">
                    <i class="icon-paper-clip"></i>
                </a>
                <a href="#">
                    <i class="icon-pencil"></i>
                </a>
                <a href="#">
                    <i class="icon-remove red"></i>
                </a>
            </div>
        </li>
        <li>
            <a href="#" data-rel="colorbox">
                <img alt="150x150" src="assets/images/gallery/thumb-4.jpg" />
                <div class="text">
                    <div class="inner">Sample Caption on Hover</div>
                </div>
            </a>
            <div class="tools tools-bottom">
                <a href="#">
                    <i class="icon-link"></i>
                </a>
                <a href="#">
                    <i class="icon-paper-clip"></i>
                </a>
                <a href="#">
                    <i class="icon-pencil"></i>
                </a>
                <a href="#">
                    <i class="icon-remove red"></i>
                </a>
            </div>
        </li>
        <li>
            <a href="#" data-rel="colorbox">
                <img alt="150x150" src="assets/images/gallery/thumb-5.jpg" />
                <div class="text">
                    <div class="inner">Sample Caption on Hover</div>
                </div>
            </a>
            <div class="tools tools-bottom">
                <a href="#">
                    <i class="icon-link"></i>
                </a>
                <a href="#">
                    <i class="icon-paper-clip"></i>
                </a>
                <a href="#">
                    <i class="icon-pencil"></i>
                </a>
                <a href="#">
                    <i class="icon-remove red"></i>
                </a>
            </div>
        </li>
        <li>
            <a href="#" data-rel="colorbox">
                <img alt="150x150" src="assets/images/gallery/thumb-6.jpg" />
                <div class="text">
                    <div class="inner">Sample Caption on Hover</div>
                </div>
            </a>
            <div class="tools tools-bottom">
                <a href="#">
                    <i class="icon-link"></i>
                </a>
                <a href="#">
                    <i class="icon-paper-clip"></i>
                </a>
                <a href="#">
                    <i class="icon-pencil"></i>
                </a>
                <a href="#">
                    <i class="icon-remove red"></i>
                </a>
            </div>
        </li>
        <li>
            <a href="#" data-rel="colorbox">
                <img alt="150x150" src="assets/images/gallery/thumb-1.jpg" />
                <div class="text">
                    <div class="inner">Sample Caption on Hover</div>
                </div>
            </a>
            <div class="tools tools-bottom">
                <a href="#">
                    <i class="icon-link"></i>
                </a>
                <a href="#">
                    <i class="icon-paper-clip"></i>
                </a>
                <a href="#">
                    <i class="icon-pencil"></i>
                </a>
                <a href="#">
                    <i class="icon-remove red"></i>
                </a>
            </div>
        </li>
        <li>
            <a href="#" data-rel="colorbox">
                <img alt="150x150" src="assets/images/gallery/thumb-2.jpg" />
                <div class="text">
                    <div class="inner">Sample Caption on Hover</div>
                </div>
            </a>
            <div class="tools tools-bottom">
                <a href="#">
                    <i class="icon-link"></i>
                </a>
                <a href="#">
                    <i class="icon-paper-clip"></i>
                </a>
                <a href="#">
                    <i class="icon-pencil"></i>
                </a>
                <a href="#">
                    <i class="icon-remove red"></i>
                </a>
            </div>
        </li>
    </ul>
</div>
<!-- /#pictures -->
</div>
</div>
</div>
</div>
<div class="hide">
<div id="user-profile-3" class="user-profile row">
<div class="col-sm-offset-1 col-sm-10">
<div class="well well-sm">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    &nbsp;
    <div class="inline middle blue bigger-110"> Your profile is 70% complete </div>
    &nbsp; &nbsp; &nbsp;
    <div style="width:200px;" data-percent="70%" class="inline middle no-margin progress progress-striped active">
        <div class="progress-bar progress-bar-success" style="width:70%"></div>
    </div>
</div>
<!-- /well -->
<div class="space"></div>
<form class="form-horizontal">
<div class="tabbable">
    <ul class="nav nav-tabs padding-16">
        <li class="active">
            <a data-toggle="tab" href="#edit-basic">
                <i class="green icon-edit bigger-125"></i>
                Basic Info
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#edit-settings">
                <i class="purple icon-cog bigger-125"></i>
                Settings
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#edit-password">
                <i class="blue icon-key bigger-125"></i>
                Password
            </a>
        </li>
    </ul>
    <div class="tab-content profile-edit-tab-content">
        <div id="edit-basic" class="tab-pane in active">
            <h4 class="header blue bolder smaller">General</h4>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <input type="file" />
                </div>
                <div class="vspace-xs"></div>
                <div class="col-xs-12 col-sm-8">
                    <div class="form-group">
                        <label class="col-sm-4 control-label no-padding-right" for="form-field-username">Username</label>
                        <div class="col-sm-8">
                            <input class="col-xs-12 col-sm-10" type="text" id="form-field-username" placeholder="Username" value="alexdoe" />
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label no-padding-right" for="form-field-first">Name</label>
                        <div class="col-sm-8">
                            <input class="input-small" type="text" id="form-field-first" placeholder="First Name" value="Alex" />
                            <input class="input-small" type="text" id="form-field-last" placeholder="Last Name" value="Doe" />
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-date">Birth Date</label>
                <div class="col-sm-9">
                    <div class="input-medium">
                        <div class="input-group">
                            <input class="input-medium date-picker" id="form-field-date" type="text" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" />
                                        <span class="input-group-addon">
                                        <i class="icon-calendar"></i>
                                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-4"></div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right">Gender</label>
                <div class="col-sm-9">
                    <label class="inline">
                        <input name="form-field-radio" type="radio" class="ace" />
                        <span class="lbl"> Male</span>
                    </label>
                    &nbsp; &nbsp; &nbsp;
                    <label class="inline">
                        <input name="form-field-radio" type="radio" class="ace" />
                        <span class="lbl"> Female</span>
                    </label>
                </div>
            </div>
            <div class="space-4"></div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-comment">Comment</label>
                <div class="col-sm-9">
                    <textarea id="form-field-comment"></textarea>
                </div>
            </div>
            <div class="space"></div>
            <h4 class="header blue bolder smaller">Contact</h4>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>
                <div class="col-sm-9">
                                <span class="input-icon input-icon-right">
                                <input type="email" id="form-field-email" value="alexdoe@gmail.com" />
                                <i class="icon-envelope"></i>
                                </span>
                </div>
            </div>
            <div class="space-4"></div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-website">Website</label>
                <div class="col-sm-9">
                                <span class="input-icon input-icon-right">
                                <input type="url" id="form-field-website" value="http://www.alexdoe.com/" />
                                <i class="icon-globe"></i>
                                </span>
                </div>
            </div>
            <div class="space-4"></div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone</label>
                <div class="col-sm-9">
                                <span class="input-icon input-icon-right">
                                <input class="input-medium input-mask-phone" type="text" id="form-field-phone" />
                                <i class="icon-phone icon-flip-horizontal"></i>
                                </span>
                </div>
            </div>
            <div class="space"></div>
            <h4 class="header blue bolder smaller">Social</h4>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-facebook">Facebook</label>
                <div class="col-sm-9">
                                <span class="input-icon">
                                <input type="text" value="facebook_alexdoe" id="form-field-facebook" />
                                <i class="icon-facebook blue"></i>
                                </span>
                </div>
            </div>
            <div class="space-4"></div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-twitter">Twitter</label>
                <div class="col-sm-9">
                                <span class="input-icon">
                                <input type="text" value="twitter_alexdoe" id="form-field-twitter" />
                                <i class="icon-twitter light-blue"></i>
                                </span>
                </div>
            </div>
            <div class="space-4"></div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-gplus">Google+</label>
                <div class="col-sm-9">
                                <span class="input-icon">
                                <input type="text" value="google_alexdoe" id="form-field-gplus" />
                                <i class="icon-google-plus red"></i>
                                </span>
                </div>
            </div>
        </div>
        <div id="edit-settings" class="tab-pane">
            <div class="space-10"></div>
            <div>
                <label class="inline">
                    <input type="checkbox" name="form-field-checkbox" class="ace" />
                    <span class="lbl"> Make my profile public</span>
                </label>
            </div>
            <div class="space-8"></div>
            <div>
                <label class="inline">
                    <input type="checkbox" name="form-field-checkbox" class="ace" />
                    <span class="lbl"> Email me new updates</span>
                </label>
            </div>
            <div class="space-8"></div>
            <div>
                <label class="inline">
                    <input type="checkbox" name="form-field-checkbox" class="ace" />
                    <span class="lbl"> Keep a history of my conversations</span>
                </label>
                <label class="inline">
                    <span class="space-2 block"></span>
                    for
                    <input type="text" class="input-mini" maxlength="3" />
                    days
                </label>
            </div>
        </div>
        <div id="edit-password" class="tab-pane">
            <div class="space-10"></div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-pass1">New Password</label>
                <div class="col-sm-9">
                    <input type="password" id="form-field-pass1" />
                </div>
            </div>
            <div class="space-4"></div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-pass2">Confirm Password</label>
                <div class="col-sm-9">
                    <input type="password" id="form-field-pass2" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix form-actions">
    <div class="col-md-offset-3 col-md-9">
        <button class="btn btn-info" type="button">
            <i class="icon-ok bigger-110"></i>
            Save
        </button>
        &nbsp; &nbsp;
        <button class="btn" type="reset">
            <i class="icon-undo bigger-110"></i>
            Reset
        </button>
    </div>
</div>
</form>
</div>
<!-- /span -->
</div>
<!-- /user-profile -->

@stop