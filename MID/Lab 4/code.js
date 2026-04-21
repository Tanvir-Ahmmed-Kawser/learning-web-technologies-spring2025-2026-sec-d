const price = 100;

let quantity = document.getElementById("Quantity");
let totalPrice = document.getElementById("totalPrice");

quantity.addEventListener("input", function(){

    let q = parseInt(quantity.value);

    if(q < 0){
        q = 0;
        quantity.value = 0;
    }

    let total = price * q;

    totalPrice.textContent = total;

    if (total > 1000){
        alert("You are now eligible for gift coupon");
    }

});