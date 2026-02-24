let nameInput = document.getElementById("txtName");
let btnSubmit = document.getElementById("btnSubmit");

btnSubmit.addEventListener("click", check);

function check()
{
    if(nameInput.value === "")
    {
        alert("Name can not be empty");
    }
}