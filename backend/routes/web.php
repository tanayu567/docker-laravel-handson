<?php

Route::get('folders/{id}/tasks', 'TasksController@index') -> name('tasks.index');