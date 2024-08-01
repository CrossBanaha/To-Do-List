<?php require('../layout/init.php') ?>
<body class="index">
    <div class="main-container">
        <h1>To Do List</h1>
        <div class="container">
            <input type="text" placeholder="Ingresar tarea" id="inputToDo" autofocus>
            <button id="Add" class="addButton">
                Agregar
                <nav></nav>
                <nav></nav>
            </button>
        </div>
        <ul class="ToDo-List">
            <!--<li><label><input type="checkBox">Tarea</label><span class="delete">X</span></li> -->
        </ul>
    </div>
    <script src="../js/script.js"></script>
</body>