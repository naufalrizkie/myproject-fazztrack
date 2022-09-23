
<?php
include '../php/connection.php';
// include '../php/create.php';
$user_id = 1;
$asset = "../assets/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Default Page</title>
    <link rel="stylesheet" href="../style/style-default.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    
    <nav class="top">
        <div class="top-left-content">
            <img src="<?php echo $asset; ?>png/logofazztrack.png" alt="fazztrack">
        </div>
        <div class="top-right-content">
            <div class="notification">
                <img src="<?php echo $asset; ?>svg/Notification.svg" alt="notification">
            </div>
            <div class="foto-profil">
                <img src="<?php echo $asset; ?>png/foto-profil.png" alt="foto-profil">
            </div>
            <?php $nama = "Naufal Rizkie Pribadi"; ?>
            <p class="nama-akun"><?php echo $nama; ?></p>
            <div>
                <img src="<?php echo $asset; ?>svg/Arrow-Down-1.svg" alt="arrow-down-1" class="arrow-down-black-nav">
            </div>
        </div>
    </nav>

    <main class="to-do-list">
        <div class="content">
            <div class="main-task">
                <div class="title-cta">
                    <div class="cta">
                        <div class="cta-1">
                            <h1>MY TASK</h1>
                            <h2>TO DO LIST</h2>
                            <h3>Buat list tugas harian saya</h3>
                            <p class="text-sortby">Sort By</p>
                        </div>
                        <div class="cta-2">
                            <button class="button-tambah-tugas" id="add-task-btn" type="button">
                                <img src="<?php echo $asset; ?>svg/Plus.svg" alt="add">
                                <p class=text-tambah-tugas>Tambah Tugas</p>
                            </button>
                            <div class="dropdown">
                                <!-- dropdown button date orange -->
                                <button class="dropbtn-date-orange hidden-btn-date-orange" id="drop-btn">
                                    <p class="text-bydate">By Tanggal</p>
                                    <img src="<?php echo $asset; ?>svg/Arrow-Down-2.svg" alt="arrow-down-2" class="arrow-down-orange">    
                                </button>                                
                                <!-- dropdown button date abu-abu -->
                                <button class="dropbtn-date-grey hidden-btn-date-grey" id="date-btn-grey">
                                    <p class="text-bydate-abu">By Tanggal</p>
                                    <img src="..//assets/svg/Arrow-Up.svg" alt="arrow-up-grey" class="arrow-up-date-grey">
                                </button>
                                <div class="dropdown-content hidden-content" id="dropdown-element">
                                    <div class="ctn1"><p class="text-by-tgl">By Tanggal</p><input type="radio" name="sortby" class="radio-bttn"></div>
                                    <div class="ctn2"><p class="text-by-time">By Time</p><input type="radio" name="sortby" class="radio-bttn"></div>
                                    <div class="ctn3"><p class="text-terbaru">Terbaru</p><input type="radio" name="sortby" class="radio-bttn"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-task">
                    <div class="create hidden-task" id="add-task-input">
                        <form action="../php/create.php" method="post">
                            <div class="create-tambah-tugas">
                                <div class="round">
                                    <input type="checkbox" name="checkbox" unchecked id="checkbox-create" class="checkbox-button" onclick="myFunction ('myCreate')">
                                    <label for="checkbox-create"></label>
                                    <input type="text" name="task_name" class="masukkan-nama-tugas" placeholder="Masukkan nama tugas">
                                </div>
                            </div>
                            <div class="input-desc-task">
                                <img src="<?php echo $asset; ?>svg/menu.svg" alt="menu" class="menu">
                                <input type="text" name="task_desc" class="desc" placeholder="Deskripsi Tugas (Optional)">                        
                            </div>
                            <div class="input-due-date">
                                <img src="<?php echo $asset; ?>svg/Calendar.svg" alt="Calendar" class="calendar">
                                <input type="datetime-local" name="task_due_date" class="tanggal-waktu" placeholder="Tanggal & Waktu">                        
                            </div>
                                <button class="button-submit-task" id="submit-task-btn" type="submit" action="Submit">
                                    <p class=text-submit-task>Submit</p>
                                </button>
                            </div>
                        </form>
                    <div class="task">
                        <?php
                            $link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
                            if($link) {
                                $sql = "
                                SELECT task_id, task_name, task_desc description, DATE_FORMAT(task_due_date, '%d-%M-%Y') deadline, status 
                                FROM tasks_table tt
                                WHERE tt.user_id = 1 and tt.status = 'ONGOING'
                                ";
                                if ($result = $link->query($sql)) {
                                    while($row = $result->fetch_object()) {
                                        ?>
                                        <div class="task-ongoing">
                                            <div class="task-name">
                                                <div class="round">
                                                    <input type="checkbox" name="checkbox" unchecked id="checkbox-ongoing-<?php echo $row->task_id; ?>" class="checkbox-button" onclick="myFunction ('task-ongoing-<?php echo $row->task_id; ?>')">
                                                    <label for="checkbox-ongoing-<?php echo $row->task_id; ?>"></label>
                                                    <p class="task-name-ongoing" id="task-ongoing-<?php echo $row->task_id; ?>"><?php echo $row->task_name; ?></p>
                                                </div>
                                                <p class="due-date"><?php echo $row->deadline; ?></p>
                                            </div>
                                            <div>
                                                <img src="<?php echo $asset; ?>svg/Arrow-Down-1.svg" alt="arrow-down-1" class="arrow-down-black" onclick="hideButton('subtask-btn-<?php echo $row->task_id; ?>')" style="cursor: pointer">
                                                <img src="<?php echo $asset; ?>svg/Arrow-Up-1.svg" alt="arrow-up-grey" class="arrow-up-grey" onclick="hideButton('subtask-btn-<?php echo $row->task_id; ?>')" style="cursor: pointer">
                                            </div>
                                        </div>
                                        <?php if ($row->description) { ?>
                                            <div class="desc-task">
                                                <p><?php echo $row->description; ?></p>
                                            </div>
                                        <?php } ?>
                                        <div class="subtask-container hidden-subtask" id="subtask-btn-<?php echo $row->task_id; ?>">
                                            <div class="title-sub">
                                                <p class="sub-text">Subtask</p>
                                                <button class="button-add-subtask" id="submit-subtask-btn" type="submit">
                                                    <img src="<?php echo $asset; ?>svg/Plus-2.svg" alt="plus-2" style="width: 17px" >
                                                    <p class=text-submit-subtask>Tambah</p>
                                                </button>
                                            </div>
                                            <div class="subtask-list">
                                                <?php 
                                                $sql_sub = "
                                                SELECT subtask_id, subtask_name
                                                FROM subtasks_table st
                                                WHERE st.task_id = $row->task_id
                                                ";
                                                if ($result_sub = $link->query($sql_sub)) {
                                                    while($row_sub = $result_sub->fetch_object()) {
                                                        ?>
                                                <div class="list">
                                                    <div class="round-subtask">
                                                        <input type="checkbox" name="checkbox" unchecked id="checkbox-sub-<?php echo $row_sub->subtask_id; ?>" class="checkbox-subtask" onclick="myFunction ('subtask-ongoing-<?php echo $row_sub->subtask_id; ?>')">
                                                        <label for="checkbox-sub-<?php echo $row_sub->subtask_id; ?>"></label>
                                                        <p class="subtask-name" id="subtask-ongoing-<?php echo $row_sub->subtask_id; ?>"><?php echo $row_sub->subtask_name; ?></p>
                                                    </div>
                                                    <img src="<?php echo $asset; ?>svg/trash.svg" alt="trash">
                                                </div>
                                                <?php }
                                                } ?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                            }
                            $link->close();
                        ?>
                    </div>
                </div>
                <div class="container-footer">
                    <div class="container-task-done">
                        <div class="vector">
                            <!-- border garis -->
                        </div> 
                        <div class="task-done-title">
                            <img src="<?php echo $asset; ?>svg/Arrow-Right-1.svg" onclick="taskCompleted('task-completed')" alt="arrow-right-1" class="arrow-right-1" id="arrow-right-btn">
                            <p>Terselesaikan (3 tugas)</p>
                        </div>
                        <div class="task-done-list hidden-task-done" id="task-completed">
                        <?php
                            $link = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
                            if($link) {
                                $sql = "
                                    SELECT task_id, user_name username, user_avatar photo_profil, task_name, task_desc description, DATE_FORMAT(task_due_date, '%d-%M-%Y') deadline, status 
                                    FROM users_table ut
                                    INNER JOIN tasks_table tt ON tt.user_id = ut.user_id
                                    WHERE ut.user_id = 1 and tt.status = 'DONE'
                                ";
                                if ($result = $link->query($sql)) {
                                    while($row = $result->fetch_object()) {
                                        ?>
                                        <div class="completed">
                                            <div class="round round-completed">
                                                <input type="checkbox" name="checkbox" checked id="checkbox-done-<?php echo $row->task_id; ?>" class="checkbox-button" onclick="myFunction ('task-done-<?php echo $row->task_id; ?>')">
                                                <label for="checkbox-done-<?php echo $row->task_id; ?>"></label>
                                                <p class="completed-list" id="task-done-<?php echo $row->task_id; ?>"><?php echo $row->task_name; ?></p>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                            }
                            $link->close();
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="../js/script.js"></script>
</body>
</html>