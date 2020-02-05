<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Carbon\Carbon;
class BookController extends Controller
{
    public function index(){
        $book = Book::all();
        return view('book.index',compact('book'));
    }

    public function create($judul)
    {
        $book=new Book();
        $book->title=$judul;
        $book->publisher="Assalaam Studio";
        $book->pages=100;
        $book->date=Carbon::now();
        $book->price=150000;
        $book->status=false;
        $book->synopsis="Lorem Ipsum";
        $book->save();
        return $book;
    }
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('book.show',compact('book'));
    }
    public function edit($id,$judul)
    {
        $book= Book::find($id);
        $book->title=$judul;
        $book->publisher="Assalaam Studio";
        $book->pages=100;
        $book->date=Carbon::now();
        $book->price=150000;
        $book->status=false;
        $book->synopsis="Lorem Ipsum";
        $book->save();
        return $book;
    }
    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        return $book;
    }
    public function tampil()
    {
        $book = Book::select('title','publisher','pages','price')->take(3)->get();
        return $book;
        
    }
    public function menghitung()
    {
      $a=book::count('id');
      return $a;   
    }
}
