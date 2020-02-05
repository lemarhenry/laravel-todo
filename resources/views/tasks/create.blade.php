@extends('layouts.main')

@section('title', 'Create Task')

@section('content')


<div class="row">
    <div class="col-sm-12">
        <H1>Create Task</H1>
        {!! Form::open(['route' => 'task.store','method' => 'POST']) !!} 
        
        @component('component.taskForm')

    
        
        @endcomponent

        {!!Form::close()!!}
    </div>
</div>
@endsection
