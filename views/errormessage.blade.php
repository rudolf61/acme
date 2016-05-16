@if (isset($_SESSION['msg']))
    <div class="alert alert-danger">
        <ul>
            @foreach($_SESSION['msg'] as $field => $error)
            <li><span class="errorfield">{{$field}}</span><span class="errormessage">{{$error}}</span></li>
            @endforeach
        </ul>
    </div>

@endif