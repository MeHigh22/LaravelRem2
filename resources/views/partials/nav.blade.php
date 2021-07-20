 <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('page1') }}">Welcome</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link {{request()->is('view1')?'active':''}}" href="{{ route('page1') }}">View1</a>
                        <a class="nav-link {{request()->is('view2')?'active':''}}" href="{{ route('page2') }}">View2</a>
                        <a class="nav-link {{request()->is('view3')?'active':''}}" href="{{ route('page3') }}">View3</a>
                        <a class="nav-link {{request()->is('viewTab')?'active':''}}" href="{{ route('tableau') }}">Tools</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
