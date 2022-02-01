const downloadBtn  = document.querySelector('.downloadBtn')

downloadBtn.addEventListener('mouseenter',(()=>{
    downloadBtn.querySelector('img').src='./assets/images/icons/downloadWhite.svg'
}))
downloadBtn.addEventListener('mouseleave',(()=>{
    downloadBtn.querySelector('img').src='./assets/images/icons/download.svg'
}))
const linkBtn  = document.querySelector('.linkBtn')

linkBtn.addEventListener('mouseenter',(()=>{
    linkBtn.querySelector('img').src='./assets/images/icons/external-link-white.svg'
}))
linkBtn.addEventListener('mouseleave',(()=>{
    linkBtn.querySelector('img').src='./assets/images/icons/external-link.svg'
}))

