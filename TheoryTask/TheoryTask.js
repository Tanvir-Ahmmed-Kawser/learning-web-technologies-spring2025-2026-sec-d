let Kawser = document.getElementById("btn1");
let k = document.getElementById("d1");
Kawser.addEventListener('click', test);
function test()
{
    let count = 0;
    let interval = setInterval(() => {
        if(count > 50){
            clearInterval(interval);
        }
        else{
            let current = window.getComputedStyle(k).left;
            if(current == 0){
                current = "10px";
            }
            else{
                current = parseInt(current) + 10 + 'px';
                k.style.left = current;
            }
            count++;
        }
    }, 100);
};