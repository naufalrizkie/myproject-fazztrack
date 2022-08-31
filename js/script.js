const addBtn = document.getElementById("add-task-btn");
console.log(addBtn);
// menambahkan event add task button
addBtn.addEventListener('click', function() {
    const inputEl = document.getElementById("add-task-input");
    console.log(inputEl);
    inputEl.classList.toggle("hidden-task");
})

const dropBtn = document.getElementById("drop-btn");
console.log((dropBtn));

dropBtn.addEventListener('click', function() {
    const dropEl = document.getElementById("dropdown-element");
    console.log(dropEl);
    dropEl.classList.toggle("hidden-content");
})