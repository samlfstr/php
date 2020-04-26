<?php


const BR = "<BR>";

// to do list

$title = "";
$due = "";
$assigned = "";
$completed = false;
$todo = array();

function createList($title,$due,$assigned,&$todo)
{
    $todo = [
        'title' => "$title",
        'due' => "$due",
        'assigned' => "$assigned",
        'completed' => false
    ];
}


// take title
$title = "Task";
// take due
$due = "Tomorrow";
// take assined
$assigned = "Myself";
// take completed or not
$completed = true;

// take all these from boxes
createList($title,$due,$assigned,$todo);


foreach ($todo as $key => $value) {
    echo "<ul>";
    echo "<li>".$key." : ".$value."</li>";
    echo "</ul>";
}


if ($todo['completed']) {
    // add some action
    echo "list is moved to completed tasks folder";
}

