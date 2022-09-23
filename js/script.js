// menambahkan event add task button
const addBtn = document.getElementById("add-task-btn");
console.log(addBtn);
addBtn.addEventListener('click', function() {
    const inputEl = document.getElementById("add-task-input");
    console.log(inputEl);
    inputEl.classList.toggle("hidden-task");
})

//hidden arrow button subtask
function hideButton(hideBtn) {
    document.getElementById(hideBtn).classList.toggle("hidden-subtask");
}

//hidden button completed
function taskCompleted(idCompleted) {
    document.getElementById(idCompleted).classList.toggle("hidden-task-done");
}

//menambahkan event dropdown by Tanggal orange -> grey
const datebtnOramge = document.getElementById("drop-btn");
datebtnOramge.addEventListener('click', function() {
    const dropDate = document.getElementById("dropdown-element");
    const datebtnGrey = document.getElementById("date-btn-grey");
    if (datebtnGrey.style.display = "none") {
        datebtnOramge.style.display = "none";
        datebtnGrey.style.display = "flex";
        dropDate.style.display = "block"; 
    }
})

//menambahkan event dropdown by Tanggal grey -> orange
const datebtnGrey = document.getElementById("date-btn-grey");
datebtnGrey.addEventListener('click', function() {
    const dropDate = document.getElementById("dropdown-element");
    const datebtnOramge = document.getElementById("drop-btn");
    if (datebtnOramge.style.display = "none") {
        datebtnOramge.style.display = "flex";
        datebtnGrey.style.display = "none";
        dropDate.style.display = "none"; 
    }
})

//menambahkan event checkbox rounded checked+linethrough
function myFunction (idName) {
    var x = document.getElementById(idName);
    if (x.style.textDecoration == "line-through") {
        x.style.textDecoration = "none";
    } else { x.style.textDecoration = "line-through";
    }    
}

// toggle button date orange -> grey
// function dateBtn(btnOrange) {
//     document.getElementById(btnOrange);.classList.toggle("hidden-btn-date-grey");
// }


// arrow button subtask


//menambahkan event dropRightbtn
// const arrowrighBtn = document.getElementById("arrow-right-btn");
// console.log(arrowrightBtn);

// const checkboxBtn = document.getElementById("checkbox-button");
// console.log(checkboxBtn);
// checkboxBtn.addEventListener('click', function() {
//     const lineThrough = document.getElementById("demo");
//     lineThrough.style.textDecoration = "line-through";
// })

// function myFunction() {
//     document.getElementById("demo").style.textDecoration = "line-through"
// }

