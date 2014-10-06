@extends('layouts.master')

@section('title')
    jQuery To-Do List with Local Storage
@stop

@section('topscript')

@stop


@section('content')
<div class="task-list" id="pending">
  <h3>Pending</h3>
  <!-- Sample task added manually to check look -->
  <div class="todo-task">
    <div class="task-header">Sample Header</div>
    <div class="task-date">25/06/1992</div>
    <div class="task-description">Lorem Ipsum Dolor Sit Amet</div>
  </div>
</div>

<div class="task-list" id="inProgress">
  <h3>In Progress</h3>
</div>

<div class="task-list" id="completed">
  <h3>Completed</h3>
</div>

<div class="task-list">
  <h3>Add a task</h3>
  <form id="todo-form">
    <input type="text" placeholder="Title" />
    <textarea placeholder="Descrtipion"></textarea>
    <input type="text" placeholder="Due Date (dd/mm/yyyy)" />
    <input type="button" class="btn btn-primary" value="Add Task" />
  </form>

  <input type="button" class="btn btn-primary" value="Clear Data" />

  <div id="delete-div">Drag Here to Delete</div>
</div>
@stop


@section('bottomscript')

@stop
