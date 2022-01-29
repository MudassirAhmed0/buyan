const header = document.querySelector('header') 
const academiesDd = document.querySelector('.header-dropdown-btn-academies')
const servicesDd =document.querySelector('.header-dropdown-btn-services') 




academiesDd.addEventListener('mouseenter',()=>  {
    header.querySelector('.bunyanLogo').src ='./assets/images/bunyanLogoBlue.svg'
    header.classList.add('active')
    header.querySelector('.SearchIcon').src ='./assets/images/home/icons/blueSearch.svg'
    header.querySelectorAll('.Arrow').forEach(item=> item.src = './assets/images/home/icons/blueArrow.svg')
    academiesDd.querySelector('.Arrow').src='/assets/images/home/icons/primaryArrow.svg'
})
academiesDd.addEventListener('mouseleave',()=>  {
    header.classList.contains('fixed') || header.classList.remove('active')
    header.querySelector('.SearchIcon').src ='./assets/images/home/icons/search.svg'
    header.querySelectorAll('.Arrow').forEach(item=> item.src = './assets/images/home/icons/arrow.svg')
    header.querySelector('.bunyanLogo').src ='./assets/images/bunyanLogo.svg'
})
servicesDd.addEventListener('mouseenter',()=> {
    header.querySelector('.bunyanLogo').src ='./assets/images/bunyanLogoBlue.svg'
    header.classList.add('active')
    header.querySelector('.SearchIcon').src ='./assets/images/home/icons/blueSearch.svg'
    header.querySelectorAll('.Arrow').forEach(item=> item.src = './assets/images/home/icons/blueArrow.svg')
    servicesDd.querySelector('.Arrow').src='/assets/images/home/icons/primaryArrow.svg'
})
servicesDd.addEventListener('mouseleave',()=>{
    header.classList.contains('fixed') || header.classList.remove('active')
    header.querySelector('.SearchIcon').src ='./assets/images/home/icons/search.svg'
    header.querySelectorAll('.Arrow').forEach(item=> item.src = './assets/images/home/icons/arrow.svg')
    header.querySelector('.bunyanLogo').src ='./assets/images/bunyanLogo.svg'
})

let a=1

window.onscroll = function(e) {
     
    let height = window.innerHeight
     if(window.location.pathname.includes('home')||window.location.pathname.includes('about')){
       

        if(height * 1.3  > this.oldScroll){
            letsAnimate()
        } 
    }
    if(this.oldScroll > height){
          header.classList.add('active')
            header.classList.add('fixed')
            header.querySelector('.SearchIcon').src ='./assets/images/home/icons/blueSearch.svg'
            header.querySelectorAll('.Arrow').forEach(item=> item.src = './assets/images/home/icons/blueArrow.svg')
            header.querySelector('.bunyanLogo').src ='./assets/images/bunyanLogoBlue.svg'
         

        
    }else{
        header.classList.remove('active')
        header.classList.remove('fixed')
        header.querySelector('.SearchIcon').src ='./assets/images/home/icons/search.svg'
        header.querySelectorAll('.Arrow').forEach(item=> item.src = './assets/images/home/icons/arrow.svg')
        header.querySelector('.bunyanLogo').src ='./assets/images/bunyanLogo.svg'
    }
    this.oldScroll = this.scrollY;
  }


