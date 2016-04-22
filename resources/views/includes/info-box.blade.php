{{--Messages html part--}}

{{--Render fail message--}}
@if(Session::has('fail'))
    <div class="alert alert-danger info" role="alert">
        {{ Session::get('fail') }}
    </div>
@endif
{{--Render success message--}}
@if(Session::has('success'))
    <div class="alert alert-success info" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
{{--Render validation errors.--}}
@if(count($errors) > 0)
    <div class="alert alert-danger info" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif