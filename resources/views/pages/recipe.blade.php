@extends('index')
           
@section('content')
        <div class="leftdark left container-fluid col-lg-3 col-mg-11 text-light m-0 mt-3">
            <div class="container top-text text-center mt-5">
                <div class="recipe-header">
                    <h2 class="mb-3 mt-5"><i class="far fa-clock"></i><br/>Czas przygotowania: <br/>1 godzina. </h2>
                
                    <h2 class=""><i class="fas fa-shopping-cart"></i><br/>Będziesz potrzebować:</h2>
                </div>
                
                <div class="recipe-body mt-4">
                    <ol class="">
                        <li>fasola - 0.5 kg,</li>
                        <li>boczek wędzony,</li>
                        <li>cebula - 3 szt.,</li>
                        <li>seler - 0,5 szt.,</li>
                        <li>czosnek - 2 ząbki,</li>
                        <li>kiełbasa</li>
                        <li>ziemniaki - 4 szt.,</li>
                        <li>kostka rosołowa - 1 szt.,</li>
                        <li>przyprawy,</li>
                        <li>zasmażka</li>
                    </ol>
                </div>
            </div>
        </div>
        
        <div class="container-fluid offset-lg-4 col-md-6 mt-6" >    
            <h1 class="display-4">Fasolówa z szybkowara</h1>
            
            <div class="row mt-5 p-2 exec">
                    
                    <h2 class="recipe-header mb-3"><i class="fas fa-wrench mr-2"></i>Wykonanie:</h2>
                    
                    <ol class="recipe-body">
                        <li>Fasolę namocz przez noc</li>
                        <li>Boczek pokrój i podsmaż na patelni, to samo zrób z jedną cebulą</li>
                        <li>Do szybkowaru daj namoczoną fasolę, obrane 2 cebule, 2 ząbki czosnku, podsmażony boczek, kawałek obranego selera, 1 kostkę rosołową i uzupełnij wszystko wodą</li>
                        <li>Zamknij szybkowar i gotuj wszystko 30 min</li>
                        <li>Dodaj pokrojoną w kostkę kiełbasę, podsmażoną cebulę i ziemniaki, wrzuć ze dwa liście laurowe.</li>
                        <li>Zamknij szybkowar i gotuj wszystko 10 - 15 min</li>
                        <li>Zagęść zasmażką, przypraw solą, pieprzem, tymiankiem, oregano, whatever</li>
                    </ol>
  
                    <h2 class="recipe-header mt-5 mb-2"><i class="fas fa-exclamation-triangle mr-2"></i>Uwagi:</h2>
                    
                    <p>Z rzeczy które zmieniłem: w przepisie były dwie cebule, ale ja dodałem trzecią podsmażoną i dodaną na końcu, bo lubię kiedy mi w zupie pływa cebule, a te dodane na początku się rozlatują. Kiełbasę przesmażam razem z cebulą.</p>
            </div>
        </div>
@endsection