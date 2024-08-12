
let slogan = document.querySelector('header a h2');
let header = document.querySelector('header a');
let opleidingen = document.querySelector('.opleidingen');
let betekenen = document.querySelector('.betekenen');
let main = document.querySelector('main:not(.nevenpagina)')
let address = document.querySelector('address')
let visie = document.querySelector('.visie')


console.log(betekenen.clientHeight)
let r = document.querySelector(':root');
var holistisch = getComputedStyle(document.body)
console.log(holistisch.getPropertyValue('--tussenruimte'));
document.addEventListener("DOMContentLoaded", myFunction_set());
// Create a function for setting a variable value
function myFunction_set() {
  // Set the value of variable --blue toanother value (in this case "lightblue")
  r.style.setProperty('--sloganBreedte', slogan.clientWidth + 'px');
  r.style.setProperty('--headerBreedte', header.clientWidth + 'px');
  r.style.setProperty('--opleidingenHoogte', opleidingen.clientHeight + 'px');
  r.style.setProperty('--addressHoogte', address.clientHeight + 'px');
  r.style.setProperty('--mainHoogte', 'calc(' + visie.clientHeight + 'px + ' + betekenen.clientHeight + 'px + ' + holistisch.getPropertyValue('--miniruimte') + ')');
}
