const header = document.querySelector('header') 
const academiesDd = document.querySelector('.header-dropdown-btn-academies')
const servicesDd =document.querySelector('.header-dropdown-btn-services')
const video =document.querySelector('video')




academiesDd.addEventListener('mouseenter',()=>  header.classList.add('active'))
academiesDd.addEventListener('mouseleave',()=>  header.classList.contains('fixed') || header.classList.remove('active'))
servicesDd.addEventListener('mouseenter',()=> header.classList.add('active'))
servicesDd.addEventListener('mouseleave',()=>header.classList.contains('fixed') || header.classList.remove('active'))


window.onscroll = function(e) {
    // print "false" if direction is down and "true" if up
    console.log();
    if(this.oldScroll > 150){
        if(this.oldScroll > this.scrollY){
            header.classList.add('active')
            header.classList.add('fixed')
        }else{
            header.classList.remove('active')
            header.classList.remove('fixed')

        }
    }else{
        header.classList.remove('active')
        header.classList.remove('fixed')
    }
    this.oldScroll = this.scrollY;
  }

  setTimeout(()=>{
       
      console.log(video)
    function playVid() {
        video.play();
    }
    playVid()
    
  },50)