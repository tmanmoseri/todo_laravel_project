<?php

namespace App\Http\Controllers;

use App\todo_lists;
use Illuminate\Http\Request;

class TodoListsController extends Controller
{
    public function showAllData(){
        return view('fetchedData')->with('TodoArr',todo_lists::paginate(5));
        
    }
//funtion to  delete from the database
    public function delete($id){
        todo_lists::destroy(array('id',$id));
        return redirect('/');
    }
//funtion to  display from the database
    public function create(){
        return view('createView');
    } 

    //funtion to add items into the database
    public function todo_submit(Request $req){
        $todo= new todo_lists;
        $todo->name = $req->input('name');
        $todo->save();
        return redirect('/');
    }  

    
     //funtion to edit items in the database
     public function edit($id){
        return view('edit_page')->with('TodoArr_name',todo_lists::find($id));
    }
    
    //funtion to edit items into the database
    public function edit_todo(Request $req, $id){
        $todo= todo_lists::find($id);
        $todo->name = $req->input('name');
        $todo->save();
        return redirect('/');
    }  
}
