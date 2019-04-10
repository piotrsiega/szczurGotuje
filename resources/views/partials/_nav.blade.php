    <header>
        <nav class="navbar navbar-dark bg-black navbar-expand-lg fixed-top">
            <a class="navbar-brand" href="/"><img class="d-inline-block align-text-bottom m-0 mr-2 rounded-circle" src="{{ asset('assets/logo.jpeg') }}" height="32" />szczurGotuje.pl</a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Start</a>
                    </li>
                    <li class="nav-item">
                        <a href="conowego" class="nav-link active">Co nowego?</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" id="recipies">Przepisy</a>
                        
                        <div class="dropdown-menu shadow-lg">
                            <a class="dropdown-item" href="/przepisy">Porady</a>
                            <a class="dropdown-item" href="/przepisy">Śniadania</a>
                            <a class="dropdown-item" href="/przepisy">Zupy</a>
                            <a class="dropdown-item" href="/przepisy">Do kawki</a>
                            <a class="dropdown-item" href="/przepisy">Kolacje</a>
                            <a class="dropdown-item" href="/przepisy">Sałatki</a>   
                            <a class="dropdown-item" href="">Napoje</a>                         
                            <a class="dropdown-item" href="/przepisy">Szybkie żarcie</a>
                        </div>
                        
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">O stronie</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Kontakt</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control" type="search" placeholder="Szukaj..." aria-label="Szukaj">
                    <button class="ml-2 btn btn-dark rounded" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </nav>
    </header>
