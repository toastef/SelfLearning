<?php

?>

<div class="wrapper">
    <header>Todo App</header>
    <div class="inputField">
        <label for="text"></label>
        <input type="text" placeholder="Add your new todo">
        <button><i class="fas fa-plus"></i></button>
    </div>
    <ul class="todoList">
        <!-- data are comes from local storage -->
    </ul>
    <div class="footer">
        <span>You have <span class="pendingTasks"></span> pending tasks</span>
        <button>Clear All</button>
    </div>
</div>

<script src="../js/main.js"></script>