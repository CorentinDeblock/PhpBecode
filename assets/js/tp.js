const table = document.getElementById("tp-content");
const form = document.getElementById("tp-form");
const calendar = document.getElementById("calendar");
let id = 1;
const pagination = document.getElementById("pagination")
const buttons = document.getElementById("calculatrice");
const display = document.getElementById("ope");

function addEvent() {
    let arrowLeft = document.getElementById("arrowLeft");
    let arrowRight = document.getElementById("arrowRight");

    let page = document.querySelectorAll(".page");

    for(let i = 0; i < page.length;i++) {
        page[i].addEventListener("click",(e) => {
            if(id != e.target.id){
                id = parseInt(e.target.id);
                fetchData(e);
            }
            e.preventDefault();
        })
    }

    arrowRight.addEventListener("click",(e) => {
        if(id < page.length) {
            id += 1;
            fetchData(e);
        }else{
            e.preventDefault();
        }
    })
    arrowLeft.addEventListener("click",(e) => {
        if(id > 1){
            id -= 1;
            fetchData(e);
        }else{
            e.preventDefault();
        }
    })
}

function fetchData(event) {
    let formData = new FormData();
    formData.append("id",id)
    fetch("assets/php/bonus/pagination.php",{
        method:"post",
        body:formData
    }).then(data => data.text()).then(data => {
        pagination.innerHTML = data

        addEvent();

    }).catch(err => console.log(err))
    event.preventDefault();
}

addEvent();


function removeEmptyTr(table) {
    let childTable = table.children;
    for(let i = 0;i < childTable.length;i++){
        if(childTable[i].innerHTML == ""){
            table.removeChild(childTable[i]);
        }
    }
}
form.addEventListener("submit",(e) => {
    let month = form.querySelector("#month").value;
    let year = form.querySelector("#year").value;

    let formData = new FormData();
    formData.append("month",month);
    formData.append("year",year);

    fetch("assets/php/date/tp.php",{
        method:"POST",
        body:formData
    }).then(data => data.text()).then(data => {
        table.innerHTML = data;
    }).catch(err => calendar.innerHTML = err);
    e.preventDefault(); 
})
let child = calculatrice.children;
for(let i = 0; i < child.length;i++){
    child[i].addEventListener("click",() => {
        if(child[i].innerText != "=")
            ope.value += child[i].innerText;
    })
}

document.getElementById("calcForm").addEventListener("submit",e => {
    let formData = new FormData();
    formData.append('calcul',ope.value);
    
    fetch("assets/php/bonus/calculatrice.php", {
        method:"post",
        body:formData
    }).then(data => data.text()).then(data => ope.value = data).catch(err => console.log(err))

    e.preventDefault();
})