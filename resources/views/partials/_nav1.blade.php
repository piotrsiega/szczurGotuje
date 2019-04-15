    <header>
        <nav class="navbar navbar-dark bg-black navbar-expand-lg fixed-top">
            <a class="navbar-brand" href="/"><img class="d-inline-block align-text-bottom m-0 mr-2 rounded-circle" src="{{ asset('assets/logo.jpeg') }}" height="32" />szczurGotuje.pl</a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" id="about">O stronie</a>
                        <div class="dropdown-menu shadow-lg">
                            <a class="dropdown-item" href="/przepisy">Główna</a>
                            <a class="dropdown-item" href="/przepisy">Co nowego?</a>
                            <a class="dropdown-item" href="/przepisy">O stronie</a>
                            <a class="dropdown-item" href="">Kontakt</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('przepisy') }}" class="nav-link">Porady</a>
                    </li>
                    <li class="nav-item">
                        <a href="conowego" class="nav-link">Śniadania</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" id="dinner">Obiady</a>
                        <div class="dropdown-menu shadow-lg">
                            <a class="dropdown-item" href="/przepisy">Zupy</a>
                            <a class="dropdown-item" href="/przepisy">Dania główne</a>
                            <a class="dropdown-item" href="/przepisy">Surówki i jarzyny</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" id="cofee">Do kawy</a>
                        <div class="dropdown-menu shadow-lg">
                            <a class="dropdown-item" href="/przepisy">Ciasta</a>
                            <a class="dropdown-item" href="/przepisy">Desery</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Kolacje</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Sałatki</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" id="drinks">Napoje</a>
                        <div class="dropdown-menu shadow-lg">
                            <a class="dropdown-item" href="/przepisy">Zimne</a>
                            <a class="dropdown-item" href="/przepisy">Gorące</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" id="fast">Szybkie</a>
                        <div class="dropdown-menu shadow-lg">
                            <a class="dropdown-item" href="/przepisy">Szybkowar</a>
                            <a class="dropdown-item" href="/przepisy">FastFood</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
