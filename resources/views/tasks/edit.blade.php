@extends('layouts.main')

@section('title', 'Edit Task')

@section('content')


<div class="row">
    <div class="col-sm-12">
        <H1>Edit Task</H1>
        {!! Form::model($task, ['route'=> ['task.update',$task->id],'method' => 'PUT']) !!} 
        
        @component('component.taskForm')

    
        
        @endcomponent

        {!!Form::close()!!}
    </div>
</div>
@endsection
