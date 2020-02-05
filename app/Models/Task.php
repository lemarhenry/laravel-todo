<?php

namespace App\Models;

use App\Http\Traits\TasksTraits;
use App\Http\Traits\TimestampsTraits;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //TIMESTAMPS TRAIT
    use TimestampsTraits;
    use TasksTraits;

    public function getDates()
    {

        return ['created_at', 'updated_at', 'due_date'];

    }

    // define the table just incase i change the name of the table name in the database
    protected $table = 'tasks';

}
