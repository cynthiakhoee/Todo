@extends('base')

@section('body')
<!-- <form method="post" action="/komentar/edit"> -->
<form method="post" action="{{route('todoUpdate',['id'=>$todo->id])}}">
@csrf
    <input type="text" value ="{{$todo->id}}" disabled>
    <input type="hidden" value ="{{$todo->id}}" name="id" >
    <div>
        <label>Description:</label>
        <input type="text" name="description" value="{{$todo->description}}">
    </div>
    <div>
        <label>Status: </label>
       <?php if($todo->status == 1){ ?> 
       <input type="radio" name="status" value="1" checked> Yes
       <input type="radio" name="status" value="0"> No
        <?php } else{?>
            <input type="radio" name="status" value="1" > Yes
        <input type="radio" name="status" value="0" checked> No <?php } ?>

    </div>
    <div>
        <input type="submit" value="Save"> 
    </div>


</form>
@endsection
