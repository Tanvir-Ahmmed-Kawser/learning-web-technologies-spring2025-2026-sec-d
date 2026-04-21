//alert("working");
let cell = document.getElementsByTagName("td");
let reset = document.getElementById("reset");
let role = document.getElementById("role");

let player = "X";
let game = ["","","","","","","","",""];

for(let i = 0; i < cell.length; i++){
    cell[i].addEventListener("click", function(){

        if(game[i] !==""){
            return;
        }
        game[i] = player;
        cell[i].innerText = player;

       // checkWinner();

        if(player === "X"){
            player = "O";
        } 
        else {
            player = "X";
        }

        role.innerText = player + " turns";
    });     
}

reset.addEventListener("click", function(){
    game = ["","","","","","","","",""];
    for(let i = 0; i < cell.length; i++){
        cell[i].innerText = "";
    }
    player = "X";
    role.innerText = "X Turn";

});