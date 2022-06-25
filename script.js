// PRELAODER
const preLoader = document.querySelector('.preloader')
window.addEventListener('load', ()=>{

    preLoader.style.display = "none"
})





const hamburger = document.querySelector('.fa-bars')
const menu = document.querySelector('.nav_links ul')
const overlay = document.querySelector('.overlay')

// hide and show menu by hamburger icon
hamburger.addEventListener("click", function (){
    menu.classList.toggle('open')
    overlay.classList.toggle('show')
    if(hamburger.classList.contains("fa-bars")){
        hamburger.classList.replace("fa-bars", "fa-close")
    }else{
        hamburger.classList.replace("fa-close", "fa-bars")
    }

})

// hide and show menu by overlay
overlay.addEventListener('click', function (){
    menu.classList.toggle('open')
    overlay.classList.toggle('show')
    if(hamburger.classList.contains("fa-bars")){
        hamburger.classList.replace("fa-bars", "fa-close")
    }else{
        hamburger.classList.replace("fa-close", "fa-bars")
    }
})

// active navlinks on click
const currentLocation = location.href;
const menuItems = document.querySelectorAll('.nav_links ul li a');
const menuLength = menuItems.length;
for(let i = 0; i < menuLength; i++){
    if(menuItems[i].href === currentLocation){
        menuItems[i].className = "active";
    }
}


//   FAQ TOGGLE
const faqBox = document.querySelectorAll(".faq_box")
        faqBox.forEach( (faq) =>{
          faq.addEventListener("click", () =>{
            faq.classList.toggle('active')
          })
        })
    
        

// CATEGORY TABS
const tabs = document.querySelectorAll('category_tabs li');



//  TOTOP

const toTop = document.querySelector('.totop');
window.addEventListener('scroll', ()=>{
    if(window.pageYOffset > 500){
        toTop.classList.add('active')
    }else{
        toTop.classList.remove('active')
    }
})




