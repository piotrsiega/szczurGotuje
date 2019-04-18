@extends('index')

{{--
@section('content')

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

@foreach($recipe as $item)
    @foreach(explode('|',$item->components) as $component)
        {{$component}}<br />
    @endforeach
@endforeach
@endsection
--}}

@section('content')
    @foreach($recipe as $item)
        <div class="leftdark left container-fluid col-lg-3 col-mg-11 text-light m-0 mt-3">
            <div class="container top-text text-center mt-5">
                <div class="recipe-header">
                    <h2 class="mb-3 mt-5"><i class="far fa-clock"></i><br/>Czas przygotowania: <br/>{{$item->time}}</h2>
                
                    <h2 class=""><i class="fas fa-shopping-cart"></i><br/>Będziesz potrzebować:</h2>
                </div>
                
                <div class="recipe-body mt-4">
                    <ol class="components">
                        @foreach(explode('|',$item->components) as $component)
                            <li>{{$component}}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
        
        <div class="container-fluid offset-lg-4 col-md-6 mt-6 mb-6" >    
            <h1 class="display-4">{{$item->title}}</h1>

            <div class="row mt-5 p-2 mx-auto d-block text-center">
                <img src="{{$item->img}}" alt="zdjęcie potrawy">
            </div>

            <div class="mt-5 p-2 exec">
                <h2 class="recipe-header mb-3"><i class="fas fa-wrench mr-2"></i>Wykonanie:</h2>
 
                <ol class="recipe-body">
                    @foreach(explode('|',$item->exec) as $step)
                        <li>{{$step}}</li>
                    @endforeach
                </ol>

                <h2 class="recipe-header mt-5 mb-2"><i class="fas fa-exclamation-triangle mr-2"></i>Uwagi:</h2>
                    
                <p>{{$item->comments}}</p>
            </div>
        </div>
    @endforeach
@endsection
