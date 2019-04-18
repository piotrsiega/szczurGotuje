@extends('index')

@section('content')
        <div class="container-fluid col-lg-3 col-mg-12 left text-light">
            <div class="top-text display-3 text-center mt-5"></div>
        </div>
        
        <div class="container-fluid col-md-9 mt-6">    
            <div class="text-center mt-5">
                <h1 class="display-3">Przepisy</h1>
            </div>
            <div class="row mt-5 p-4">
                @foreach($recipes as $recipe)
                <div class="col-md-6 col-lg-4 my-3">
                    <div class="card">
                        <img class="card-img-top" src="{{$recipe->img}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$recipe->title}}</h5>
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Zobacz przepis</a>
                        </div>
                    </div>
                </div>
                @endforeach        
            </div>
        </div>
@endsection

{{--
    @section('content')
        <div class="container-fluid col-lg-3 col-mg-12 left text-light">
            <div class="top-text display-3 text-center mt-5"></div>
        </div>
        
        <div class="container-fluid col-md-9 mt-6">    
            <div class="text-center mt-5">
                <h1 class="display-3">Przepisy</h1>
            </div>
            <div class="row mt-5 p-4">
                <div class="col-md-6 col-lg-5 offset-lg-1 my-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/thumb/1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 my-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/thumb/2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 my-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/thumb/3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 my-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/thumb/4.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 my-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/thumb/5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 my-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/thumb/6.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>        
                <div class="col-md-6 col-lg-4 my-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/thumb/7.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>        
                <div class="col-md-6 col-lg-4 my-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/thumb/8.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>        
                <div class="col-md-6 col-lg-3 my-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/thumb/9.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>        
                <div class="col-md-6 col-lg-3 my-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/thumb/10.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>        
                <div class="col-md-6 col-lg-3 my-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/thumb/11.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>        
                <div class="col-md-6 col-lg-3 my-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/thumb/12.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
@endsection --}}