<?php

namespace App\Http\Controllers;

class pagesController extends Controller {
    
    public function getHome(){
        return view('pages.home');
    }
    
    public function getNews(){
        return view('pages.news');
    }  
    
    public function getRecipesList(){
        return view('pages.recipes');        
    }
    
    public function getRecipe(){
        return view('pages.recipe');
    }
    
    public function getRecipeForm(){
        return view('pages.recipeform');
    }
}

?>