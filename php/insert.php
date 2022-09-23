<?php
$user_id = 1;
    $conn = mysqli_connect ($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    // cek connection
    if($conn == false) {
        die ("ERROR: Could not connect."
                . mysqli_connect_error());
    }

    // Taking all values from the form data (input)
    $task_name = $_REQUEST['task_name'];
    $task_desc = $_REQUEST['task_desc'];
    $task_due_date = $_REQUEST['task_due_date'];

    echo $task_name. $task_desc. $task_due_date;
    // Performing insert query execution
    $sql_add = "INSERT INTO 'tasks_table' ('task_name', 'task_desc', 'task_due_date', 'user_id') VALUES ('$task_name', '$task_desc', '$task_due_date', '$user_id')";

    echo $sql_add;
    
    if (mysqli_query($conn, $sql_add)) {
        echo '<script>alert("Tugas berhasil ditambahkan")</script>';
        echo "1";
    } else {
        echo "ERROR: ups! Sorry $sql_add."
            . mysqli_error($conn);
        echo "2";
    }

    echo "3";
    //  close connection
    // mysqli_close($conn);
    ?>