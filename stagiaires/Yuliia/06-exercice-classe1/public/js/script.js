const btn_nav=document.getElementById("btn_nav");
const nav_mobile_list=document.querySelector(".nav_mobile_list")
btn_nav.addEventListener("click",function(){
 nav_mobile_list.classList.toggle('open');
})
