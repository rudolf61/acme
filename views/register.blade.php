@extends('base')

@section('browsertitle')
Acme: Register
@stop

@section('content')

<div class="row">
    <div class="col-md-2">

    </div>


    <div class="col-md-8">
        <h1>Register</h1>
        <hr>



        <form name="registerform" id="registerform" class="form-horizontal" method="post" action="/register">
            <div class="form-group">
                <label for="first_name" class="col-sm-2 control-label">First name</label>
                <div class="col-sm-10">
                    <input type="text" id="first_name" name="first_name" class="form-control required"
                           placeholder="First name">

                </div>
            </div>
            <div class="form-group">
                <label for="last_name" class="col-sm-2 control-label">Last name</label>
                <div class="col-sm-10">
                    <input type="text" id="last_name" name="last_name" class="form-control required"
                           placeholder="Last name">

                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" id="email" name="email" class="form-control required email"
                           placeholder="user@example.com">

                </div>
            </div>
            <div class="form-group">
                <label for="verify_email" class="col-sm-2 control-label">Verify email</label>
                <div class="col-sm-10">
                    <input type="email" id="verify_email" name="verify_email" class="form-control"
                           placeholder="user@example.com">

                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password"
                           autocomplete="off">

                </div>
            </div>
            <div class="form-group">
                <label for="verify_password" class="col-sm-2 control-label">Verify password</label>
                <div class="col-sm-10">
                    <input type="password" id="verify_password" name="verify_password" class="form-control"
                           placeholder="Password" autocomplete="off">

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

section('bottomjs')
<script>
    $(document).ready(function () {

                $("#registerform").validate({
                    rules: {
                        verify_email: {
                            required: true,
                            email: true,
                            equalTo: "#email"
                        },
                        verify_password: {
                            required: true,
                            equalTo: "#password"
                        }
                    }
                });
            }
    );
</script>
@end