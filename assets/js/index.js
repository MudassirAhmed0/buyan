const header = document.querySelector('header') 
const academiesDd = document.querySelector('.header-dropdown-btn-academies')
const servicesDd =document.querySelector('.header-dropdown-btn-services') 




academiesDd.addEventListener('mouseenter',()=>  {
    header.querySelector('.bunyanLogo').src ='./assets/images/bunyanLogoBlue.svg'
    if(!header.classList.contains('fixed')){
        header.querySelector('.SearchIcon').src ='./assets/images/home/icons/blueSearch.svg'
        header.querySelectorAll('.Arrow').forEach(item=> item.src = './assets/images/home/icons/blueArrow.svg')
        header.classList.add('active')

    }
    academiesDd.querySelector('.Arrow').src='./assets/images/home/icons/primaryArrow.svg'
})
academiesDd.addEventListener('mouseleave',()=>  {
   if (!header.classList.contains('fixed'))  {header.classList.remove('active')
    header.querySelector('.SearchIcon').src ='./assets/images/home/icons/search.svg'
    header.querySelector('.bunyanLogo').src ='./assets/images/bunyanLogo.svg'
    header.querySelectorAll('.Arrow').forEach(item=> item.src = './assets/images/home/icons/arrow.svg')
}else{
        header.querySelectorAll('.Arrow').forEach(item=> item.src = './assets/images/home/icons/blueArrow.svg')

    }
})
servicesDd.addEventListener('mouseenter',()=> {
    header.querySelector('.bunyanLogo').src ='./assets/images/bunyanLogoBlue.svg'
    if(!header.classList.contains('fixed')){
        header.querySelector('.SearchIcon').src ='./assets/images/home/icons/blueSearch.svg'
        header.querySelectorAll('.Arrow').forEach(item=> item.src = './assets/images/home/icons/blueArrow.svg')
        header.classList.add('active')

    }
    servicesDd.querySelector('.Arrow').src='./assets/images/home/icons/primaryArrow.svg'
})
servicesDd.addEventListener('mouseleave',()=>{
    if (!header.classList.contains('fixed'))  {header.classList.remove('active')
    header.querySelector('.SearchIcon').src ='./assets/images/home/icons/search.svg'
    header.querySelector('.bunyanLogo').src ='./assets/images/bunyanLogo.svg'
    header.querySelectorAll('.Arrow').forEach(item=> item.src = './assets/images/home/icons/arrow.svg')
}else{
        header.querySelectorAll('.Arrow').forEach(item=> item.src = './assets/images/home/icons/blueArrow.svg')

    }
})

let a=1

window.onscroll = function(e) {
     
    let height = window.innerHeight
     if(window.location.pathname.includes('home')||window.location.pathname.includes('about')){
       

        if(height * 1.3  > this.oldScroll){
            letsAnimate()
        } 
    }
    if(this.oldScroll > 674){
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

  const locationHover =(selected) =>{
    selected.children[0].src = selected.children[0].src.includes('border')?'./assets/images/icons/location-on-white.svg':'./assets/images/icons/location-on-border.svg'
}
const openAccordion =(selected)=>{
    selected.parentNode.parentNode.classList.toggle('active')
    selected.children[0].src=   selected.children[0].src.includes('primaryArrow.svg')? './assets/images/home/icons/blueArrow.svg':'./assets/images/home/icons/primaryArrow.svg'
}
