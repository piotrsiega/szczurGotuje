@extends('index')
       
@section('content')
        <div class="left container-fluid col-lg-3 col-mg-11 text-light m-0 mt-3">
            <div class="top-text display-3 text-center mt-5"></div>
        </div>
        
        <div class="container-fluid col-md-8 mt-6">    
            
            <div class="row mt-5 p-0">
                <div class="col-md-1 m-auto mainIco">
                    <i class="far fa-file-alt fa-7x"></i>
                </div>
                <div class="col-md-9">
                    <h4 class="display-4 mb-3">O stronie</h4>

                    <p>
                        Zdarzyło Ci się zgubić ulubiony przepis? Mi niestety tak, i to wielokrotnie. Część udało się odnaleźć, ale jako że najczęściej modyfikuję przepisy wersja ostateczna zaginęła bezpowrotnie. A ponieważ jak mówi staroindiańskie przysłowie: „co raz trafi do Internetu już z niego nie zniknie”, pomyślałem sobie: a może by tak niewielka strona z przepisami? Będzie szansa, że więcej ich nie posieję. No i stało się…
                    </p>
                </div>
            </div>
            <div class="row mt-5 p-0">
                <div class="col-md-9">
                    <h4 class="display-4 mb-3">Dlaczego akurat gotowanie?</h4>
                    
                    <p>
                        A dlaczego nie? Czy geek nie może czasem wstać od klawiatury czegoś upichcić? Może! Gotowanie ma przecież sporo zalet: wiesz co jesz, od Ciebie zależy jakość posiłku, przyprawisz go dokładnie tak jak lubisz więc w zasadzie każdy posiłek (teoretycznie) będzie Ci smakował. Ok, teorię od praktyki dzieli Wielki Kanion, nie raz coś się spartoli i człowiek zamawia pizzę. Ale z drugiej strony trening czyni mistrza, im więcej gotujesz tym lepiej to wychodzi. Mówisz, że przypalasz nawet wodę? Ja też tak miałem, w menu miałem zawsze frytki z piekarnika lub frytki z piekarnika. Okazuje się jednak że wystarczy się przełamać, pogodzić z tym że czasem się nie uda, i po prostu zacząć gotować. A tak poza wszyatkim, w odróżnieniu od sprzątania gotowanie to na prawdę niezła frajda!
                    </p>
                </div>
                <div class="col-md-1 m-auto mainIco">
                    <i class="fas fa-utensils fa-7x "></i>
                </div>
            </div>
            <div class="row mt-5 p-0">
                <div class="col-md-2 m-auto text-center  mainIco">
                    <i class="fas fa-hamburger fa-7x"></i>
                </div>
                <div class="col-md-9">
                    <h4 class="display-4">Znajdę tu jakieś fajne przepisy?</h4>

                    <p>
                        „Weź kilogram mięsa z mamuta, dodaj 2 litry wody z podziemnego marsjańskiego jeziora, przypraw łzą nietoperza oraz sproszkowanym rogiem jednorożca, smaż na patelni z palladu w płomieniach wulkanu Buchachy”. Brzmi znajomo? Też nienawidzę przepisów w których nie znam 90% składników. Gotowanie ma być proste, dlatego na stronie znajdują się tylko przepisy zawierające składniki dostępne w praktycznie każdym sklepie i których wykonanie nie wymaga posiadania laboratorium. Na dzień dzisiejszy mam w domciu dwie patelnie, 3 garnki i kuchenkę z jednym palnikiem. Nie ma siły, musi być prosto.
                    </p>
                </div>
            </div>
            <div class="row mt-5 p-0">
                <div class="col-md-9">
                    <h4 class="display-4">Ale czemu Szczur?</h4>
                    
                    <p>
                        Tego nie wie nikt. Wiadomo tyle, że znajomi mówili tak na mnie w szkole. Od tamtej pory minęło już trochę czasu i nikt już nie pamięta, skąd się to wzięło. A dlaczego szczur w logo jest zezowaty? No cóż, jest to nawiązanie do mojej aktualnej ksywki Bazyl, możecie się domyślić jej pochodzenia.
                    </p>
                </div>
                <div class="col-md-1 m-1 p-0 text-left phoneLogo">
                    <img src="{{ asset('/assets/logo1.svg') }}" />
                </div>
            </div>
            
        </div>
@endsection