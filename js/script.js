// menambahkan event add task button
const addBtn = document.getElementById("add-task-btn");
console.log(addBtn);
addBtn.addEventListener('click', function() {
    const inputEl = document.getElementById("add-task-input");
    console.log(inputEl);
    inputEl.classList.toggle("hidden-task");
})

//menambahkan event dropdown
const dropBtn = document.getElementById("drop-btn");
console.log((dropBtn));
dropBtn.addEventListener('click', function() {
    const dropEl = document.getElementById("dropdown-element");
    console.log(dropEl);
    dropEl.classList.toggle("hidden-content");
})

function myFunction1 () {
    var x = document.getElementById("myPd");
    if (x.style.textDecoration == "line-through") {
        x.style.textDecoration = "none";
    } else { x.style.textDecoration = "line-through";
    }    
}

function myFunction2 () {
    var x = document.getElementById("myDv");
    if (x.style.textDecoration == "line-through") {
        x.style.textDecoration = "none";
    } else { x.style.textDecoration = "line-through";
    }    
}

function myFunction3 () {
    var x = document.getElementById("myL");
    if (x.style.textDecoration == "line-through") {
        x.style.textDecoration = "none";
    } else { x.style.textDecoration = "line-through";
    }    
}

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

