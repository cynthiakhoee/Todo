<?php 
namespace App\Repositories;
use App\Todo;

class TodoRepository implements TodoInterface{
    public function create(string $description, bool $status){
        $newtodo= new Todo;
        $newtodo->description=$description;
        $newtodo->status=$status;
        $newtodo->save();

    }
    public function all(){
        return Todo::all();
    }
    public function get(int $id){
        return Todo::findOrFail($id);

    }
    public function update(int $id,Todo $data){
        $todo=$this->get($id);
        $todo->description= $data->description;
        $todo->status=$data->status;
        $todo->save();
    }
    public function delete(int $id){
        $todo= $this->get($id);
        $todo->delete();
    }
    public function sortFinish(){
        return ToDo::all()->where('status',1);
    }
    public function sortUnfinish(){
        return ToDo::all()->where('status',0);
    }
   
}