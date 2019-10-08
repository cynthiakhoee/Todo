@extends('base')

@section('body')
<button ><a href="{{ route('todoNewForm') }}">Add New</a></button>
<table>
    <tr>
        <th>ID</th>
        <th>Description</th>
        <th>Unfinished To Do</th>
    </tr>
    @foreach ($todos as $todo)
    <tr>
        <td><a href="{{ route('todoDetail', ['id' => $todo->id]) }}">{{ $todo->id }}</a></td>
        <td><a href="">{{ $todo->description }}</a></td>
        <!-- <td><a href="">{{ $todo->status }}</a></td> -->
        <td><a href="{{ route('todoDelete', ['id' => $todo->id]) }}"
            onclick="return confirm('Are you sure?')">Delete</a>
            <a href="{{ route('todoEditForm', ['id'=>$todo->id]) }}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection