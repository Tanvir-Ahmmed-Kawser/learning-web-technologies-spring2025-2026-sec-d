let txtName = document.getElementById("txtName");
let btnSubmit = document.getElementById("btnSubmit");

btnSubmit.addEventListener("click", check);

function check()
{
    let name = txtName.value.trim();
    if(name === "")
    {
        alert("Name can not be empty");
    }
    
    let s = name[0];
    if(!(s >= 'A' && s <= 'Z' || s >= 'a' && s <= 'z'))
    {
        alert("Name must start with a latter");
        return;
    }

    for(let i = 0; i < name.length; i++)
    {
        let ch = name[i];
        if(!(ch >= 'A' && ch <= 'Z' || ch >= 'a' && ch <= 'z' || ch === '.' || ch === '-' || ch === ' ' ))
        {
            alert("Invalid latter found");
            return;           
        }
    }

    let word = name.split(" ");
    if(word.length < 2)
    {
        alert("Name must contain two words");
        return;
    }
    alert("Done!");
    txtName.value = "";
    txtName.focus();
}