@extends('base')

@section('browsertitle')
    Acme: login
@stop

@section('content')
<div class="row">
    <div class="col-md-2">

    </div>

    <div class="col-md-8">
        <h1>Login</h1>
        <hr>

        <form name="loginform" id="loginform" class="form-horizontal">
            <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="username" id="username" class="form-control required email"
                           placeholder="user@example.com">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" id="password" name="password" class="form-control required"
                           placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="co-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop