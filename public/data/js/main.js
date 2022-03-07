// menu-bar codes

function OpenMenubar(){
    const menuList=document.getElementById('menu-items');
    menuList.style.width='80vw';
}
function CloseSideBar(){
    const menuList=document.getElementById('menu-items');
    menuList.style.width='0px';
}
const menu=document.getElementById('menubar');  
menu.addEventListener('click',OpenMenubar);
const sidebar=document.getElementById('close-sidebar');  
sidebar.addEventListener('click',CloseSideBar);




//  login modal's codes

const modal=document.getElementById('modal-pop-up');
    function Login(){ 
        modal.style.marginTop='0px';
    };

const loginBtn=document.getElementById('loginBtn');
loginBtn.addEventListener('click',Login);

    function closeModal(){    
        modal.style.marginTop='700px';    
    };
    
const closeModalBtn=document.getElementById('close-modal');
closeModalBtn.addEventListener('click',closeModal);


