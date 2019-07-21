const table = document.getElementById("tp-content");
const form = document.getElementById("tp-form");
const calendar = document.getElementById("calendar");

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