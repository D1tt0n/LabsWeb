const hamburger = document.querySelector('.hamburger');
let tumbler = false;
let counter = 1;

hamburger.addEventListener('click', () => {
    tumbler = !tumbler;
    property = tumbler ? "block" : "none";
    document.getElementById('menu').style.display = property; 
});

function clickAlert(){
    alert(`Це треш номер #${counter}`);
    counter++;
}