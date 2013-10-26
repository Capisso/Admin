@extends('templates/simple-account')

@section('content')

<div id="login-box" class="login-box visible widget-box no-border">
    <div class="widget-body">
        <div class="widget-main">
            <h4 class="header blue lighter bigger">
                <i class="icon-coffee green"></i>
                Enter Your Information
            </h4>

            <div class="space-6"></div>
            {{ Form::open(array('url' => 'account/login')) }}
                <fieldset>
                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                            <i class="icon-user"></i>
                        </span>
                    </label>
                    <label class="block clearfix">
                        <span class="block input-icon input-icon-right">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                            <i class="icon-lock"></i>
                        </span>
                    </label>

                    <div class="space"></div>
                    <div class="clearfix">
                        <label class="inline">
                            <input type="checkbox" class="ace"/>
                            <span class="lbl"> Remember Me</span>
                        </label>
                        <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                            <i class="icon-key"></i>
                            Login
                        </button>
                    </div>
                    <div class="space-4"></div>
                </fieldset>
            {{ Form::close() }}
        </div>
        <!-- /widget-main -->
        <div class="toolbar clearfix">
            <div>
                <a href="{{ route('account.forgot') }}" class="forgot-password-link">
                    <i class="icon-arrow-left"></i>
                    I forgot my password
                </a>
            </div>
        </div>
    </div>
    <!-- /widget-body -->
</div>

@stop