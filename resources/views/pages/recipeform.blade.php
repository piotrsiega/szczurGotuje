@extends('index')

@section('javascript')
    <script src="{{ asset('js/addinput.js') }}"></script>
@endsection

@section('content')
        <div class="leftdark left container-fluid col-lg-3 col-mg-11 text-light m-0 mt-3">
            <div class="container top-text text-center mt-6">
                <div class="">
                    <p>Wypełniając formularz pamiętaj o następujących zasadach:</p>
                    
                    <ol>
                        <li>Kategorie ułożone są w taki sam sposób jak w menu, w związku z tym nie możesz dodać przepisu do kategorii Obiady, bo jest ona rodzicem dla podkategorii Zupy, Dania główne itp., i do tych podkategorii możesz dodawać przepisy.</li>
                        <li>Wypełniając część związaną ze składnikami oraz wykonaniem kieruj się zasadą: jeden składnik/krok 
                        - jedno pole formularza. By dodać kolejne pole kliknij symbol <i class="fas fa-plus"></i>.</li>
                        <li>Z założenia przepisy znajdujące się na tej stronie powinny być proste. Dlatego ogranicz ilość
                        składników do 15. </li>
                        <li>Opis wykonania powinien być jak najprostszy, w każdym polu opisującym krok do wykonania podaj 
                        tylko jedną czynność.</li>
                        <li>Uwagi powinny być krótkie, w związku z tym liczbę znaków w polu Uwagi ograniczyłem do 255</li>
                    </ol>
                    
                </div>
            </div>
        </div>
        
        <div class="container-fluid offset-lg-4 col-lg-6 mt-6" >   
           
            <h1 class="display-3 text-center mb-5">Dodaj przepis</h1> 
            
            <form class="md-form ml-m-5" enctype="multipart/form-data" action="" method="post">
               @csrf
                <div class="form-group row ">
                    <div class="col-sm-10">
                        <label for="text" class="col-sm-12 col-form-label">
                            <i class="fa fa-list-alt"></i> Kategoria:
                        </label>
                    </div>
                    <!-- Wpisy meny głównego mają value = pełne dziesiątki np. 10, 20, 30, podmenu jednostki - 11, 12, 21,22 itp... --> 
                    <div class="col-sm-10">
                        <select name="category" id="category" class="form-control form-control-lg border border-dark">
                            <option selected disabled>Wybierz...</option>
                            <option disabled>Różne</option>
                            <option value="11">&emsp;Porady</option>
                            <option value="12">&emsp;O niczym i o...</option>
                            <option value="20">Śniadania</option>
                            <option disabled>Obiady</option>
                            <option value="31">&emsp;Zupy</option>
                            <option value="32">&emsp;Dania główne</option>
                            <option value="33">&emsp;Surówki i jarzynki</option>
                            <option disabled>Do kawy</option>
                            <option value="41">&emsp;Ciasta</option>
                            <option value="42">&emsp;Desery</option>
                            <option value="50">Kolacje</option>
                            <option value="60">Sałatki</option>
                            <option disabled>Napoje</option>
                            <option value="71">&emsp;Ciepłe</option>
                            <option value="72">&emsp;Zimne</option>
                            <option disabled>Szybkie żarcie</option>
                            <option value="81">&emsp;Szybkowar</option>
                            <option value="82">&emsp;Fastfood</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-10">
                        <label for="text" class="col-sm-12 col-form-label">
                            <i class="fas fa-signature"></i>Tytuł:
                        </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="title" id="title" class="form-control form-control-lg border border-dark border border-dark" id="title" placeholder="np. Fasolówka" />
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <label for="text" class="col-sm-12 col-form-label">
                            <i class="far fa-clock"></i> Czas przygotowania:
                        </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="time" id="time" class="form-control form-control-lg border border-dark border border-dark" id="title" placeholder="np. 1 godzina, 15 minut itp." />
                    </div>
                </div>
               
                <div class="form-group row">
                    <div class="col-sm-10">
                        <label for="text" class="col-sm-12 col-form-label">
                            <i class="fas fa-shopping-cart"></i> Składniki: (<i class="fas fa-plus mt-2 addComp"></i>)
                        </label>
                    </div>
                    <div class="col-sm-10 componentsContainer">
                        <input type="text" name="component1" id="component1" class="form-control form-control-lg 
                        border border-dark mb-3"  
                        placeholder="np. Cebula - 0.5 kg"/>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <label for="textarea" class="col-sm-12 col-form-label">
                            <i class="fas fa-wrench"></i> Wykonanie: (<i class="fas fa-plus mt-2 addStep"></i>)
                        </label>
                    </div>
                    <div class="col-sm-10 stepsContainer">
                        <input type="text" name="step1" id="step1" type="text" name="component1" class="form-control form-control-lg border border-dark mb-3" id="title" 
                        placeholder = "np. obierz i zeszklij cebulę"/>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <label for="textarea" class="col-sm-12 col-form-label">
                            <i class="fas fa-exclamation-triangle"></i> Uwagi:
                        </label>
                    </div>
                    <div class="col-sm-10">
                        <textarea rows=10 name="comments" id="comments" class="form-control form-control-lg border border-dark" id="title" placeholder="np. zupę możesz przygotować także w szybkowarze, w takim przypadku zmniejsz czas gotowania do 15 minut"></textarea>
                    </div>
                </div>     
                              
                <div class="form-group row my-4 ">
                    <div class="col-sm-10">
                        <input type="file" name="photo" id="photo" class="border border-dark" id="getPhoto" />
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="reset" class="col-lg-5 btn btn-light">Wyczyść</button>
                        <button type="submit" class="col-lg-5 btn btn-dark">Zapisz</button>                        
                    </div>
                </div>
            </form>
            
        </div>
@endsection


