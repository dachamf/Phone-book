{{--Header part template--}}
<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('contact.index') }}">
                    <img alt="Contact" src="http://www.clipartbest.com/cliparts/9TR/zx8/9TRzx8dAc.png" width="30px;">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('contact.index') }}">Home</a></li>
                </ul>
                {!! Form::open(['route' => 'contact.search', 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                    <div class="form-group">
                        <input type="text" class="form-control" id="serch-input" name="searchinput" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button>
                {!! Form::close() !!}
            </div>
        </div>
    </nav>
</header>