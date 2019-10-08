@extends('base')

@section('body')

<h3>Details</h3>
<table>
<tr>
<th>Description:</th>
<td>{{$todo->description}}</td>
</tr>
<tr>
<th>Status:</th><td>
<?php  
if($todo->status == 1){
 ?>Finish</td>
 <?php
} else{
    ?> Unfinished <?php
}
?>
</tr>
</table>
@endsection
