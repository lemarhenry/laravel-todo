

{{ Form::label('name', 'Task Name', ['class' => 'control-label']) }}
{{ Form::text('name', NULL,['class' => 'form-control form-control-lg','placeholder'=>'Task Name']) }}

{{ Form::label('description', 'Task Description', ['class' => 'control-label mt-3']) }}
{{ Form::textarea('description', NULL,['class' => 'form-control','placeholder'=>'Task Description']) }}

{{ Form::label('due_date', 'Task Due Date', ['class' => 'control-label mt-3']) }}
{{ Form::date('due_date', \Carbon\Carbon::now(),['class' => 'form-control']) }}


<div class="row justify-content-center mt-3">
    <div class ="col-sm-4">
    <a href="{{route('task.index')}}"class="btn btn-block btn-secondary">Go Back</a>
    </div>

    <div class="col-sm-4">
        <button class="btn btn-block btn-success" type="submit">Save Task</button>
    </div>
</div>

