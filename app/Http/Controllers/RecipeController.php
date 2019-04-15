<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $recipe = [
            (object)[
               'id' => 1,
               'title' => 'Fasolówka z szybkowara',
               'time' => '1 godzina',
               'components' => 'fasola - 0.5kg,boczek wędzony,cebula - 3 szt.,seler - 0.5 szt.,czosnek - 2 ząbki,kiełbasa,ziemniaki - 4.szt,kostka rosołowa - 1szt.,przyprawy,zasmażka',
               'ecec' => 'Fasolę namocz przez noc|Boczek pokrój i podsmaż na patelni|to samo zrób z jedną cebulą|Do szybkowaru daj namoczoną fasolę, obrane 2 cebule, 2 ząbki czosnku, podsmażony boczek, kawałek obranego selera, 1 kostkę rosołową i uzupełnij wszystko wodą|Zamknij szybkowar i gotuj wszystko 30 min|Dodaj pokrojoną w kostkę kiełbasę, podsmażoną cebulę i ziemniaki, wrzuć ze dwa liście laurowe.|Zamknij szybkowar i gotuj wszystko 10 - 15 min|Zagęść zasmażką, przypraw solą, pieprzem, tymiankiem, oregano, whatever',
               'comments' => 'Z rzeczy które zmieniłem: w przepisie były dwie cebule, ale ja dodałem trzecią podsmażoną i dodaną na końcu, bo lubię kiedy mi w zupie pływa cebule, a te dodane na początku się rozlatują. Kiełbasę przesmażam razem z cebulą.',
               'image' => 'fasolowa.jpg'
            ],
        ];
        return view('pages.recipe', compact($recipe));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
