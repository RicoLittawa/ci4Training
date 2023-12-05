<?php

namespace App\Controllers;

use App\Models\BookModel;

class BookController extends BaseController
{
    public function index()
    {
        return view('books/index');
    }
    public function createBook()
    {
        return view('books/add');
    }
    public function list()
    {
        $mdlBook = new BookModel();
        $data['books'] = $mdlBook->findAll();
        return view('books/list',$data);
    }
}
