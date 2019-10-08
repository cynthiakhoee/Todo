<?php
namespace App\Repositories;
use App\Todo;

interface TodoInterface{
    public function create(string $description,bool $status);
    public function all();
    public function get(int $id);
    public function update(int $id, Todo $data);
    public function delete(int $id);
}