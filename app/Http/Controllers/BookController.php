<?php

namespace App\Http\Controllers;

use App\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class BookController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
       $book = Book::all();
       return $this->successResponse($book);
    }

    public function store(Request $request){
        
    }

    public function show($book){
     

    }

    public function update(Request $request, $book){
        
    }

    public function destroy($book){

      
    }
}