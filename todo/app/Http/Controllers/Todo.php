<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Todo as TodoModel;
use App\Repositories\TodoInterface;

class Todo extends Controller
{
    private $todoRepo;

    public function __construct(TodoInterface $repo){
        $this->todoRepo = $repo;
    }
    
    public function index(){
        $todos= $this->todoRepo->sortUnfinish();
        return view('todo.index', 
            ['todos'=>$todos]);
    }
    public function finish(){
        $todos= $this->todoRepo->sortFinish();
        return view('todo.finish', 
            ['todos'=>$todos]);
    }
    public function new_form() {
        return view('todo.new');
    }
    public function save(Request $request){
        $description=$request->input('description');
        $this->todoRepo->create($description,0);
        return redirect(route('todoIndex'));
    }

    public function detail(int $id){
        $todo=$this->todoRepo->get($id);
        return view('todo.detail', ['todo'=>$todo]);
    }
    public function edit(int $id){
        $todo=$this->todoRepo->get($id);
        return view('todo.edit',['todo'=>$todo]); 
    }
    public function update(Request $request, int $id){
        $todo= new TodoModel();
        $todo->description = $request->input('description');
        $todo->status=$request->input('status');
        $this->todoRepo->update($id,$todo);
        return redirect(route('todoIndex'));
    }
    public function delete(int $id){
        $this->todoRepo->delete($id);
        return redirect(route('todoIndex'));
    }
}
