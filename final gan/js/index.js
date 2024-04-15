open_menu_btn = document.getElementById('open_menu');
menu = document.getElementById('menu');
close_btn = document.getElementById('close_btn');
// console.log(open_menu_btn,menu,close_btn);
open_menu_btn.addEventListener('click', function(){
    menu.style.display='block'
    open_menu_btn.style.display='none';
})
close_btn.addEventListener('click', function(){
    menu.style.display='none'
    open_menu_btn.style.display='block';
})
// sticky menu function 
let menu_container = document.getElementById("header_div");
function stickymenu(){
    let sticky = window.scrollY;
    if(sticky>5){
        if(document.body.clientWidth<1024){
            menu_container.style.cssText= 
            `position:fixed;
            top:-10px;
            width:90%;
            `;
        }
        else{
            menu_container.style.cssText= 
        `position:fixed;
        top:-10px;
        `;
        }
    }
    else{
        menu_container.style.cssText = `
        display: block;
        width:100%;`
        ;
    }
}
