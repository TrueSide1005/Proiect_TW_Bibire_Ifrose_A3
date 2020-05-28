const selectElement = (element) => document.querySelector(element);
selectElement('.menu-icons').addEventListener( 'click',  () => {
  selectElement('nav').classList.toggle('active');
});
  

let btn = document.querySelector('.display');
let sublist = document.getElementById('submenu');

btn.addEventListener( 'click', onBtnClick)

function onBtnClick(){
  sublist.classList.toggle('sublist');
  console.log("clik");
}