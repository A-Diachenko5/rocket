const slides = document.querySelectorAll('.check-up')
const leftArrow = document.querySelector('.left-arrow')
const rightArrow = document.querySelector('.right-arrow')
const slideId = document.querySelector('.sliderId')
const burger = document.querySelector('.header__burger')
const menu = document.querySelector('.modal-menu')
const exit = document.querySelector('.header__exit')

let slideIndex = 0

changeSlide(0)


function changeSlide(id){
    if(id < 0){
        slideIndex = slides.length-1
        id = slides.length-1
    } else if (id > slides.length-1){
        slideIndex = 0
        id = 0
    }
    for(i=0;i<slides.length;i++){
        if(i==id){
            slides[i].style.display = ''
        } else {
            slides[i].style.display = 'none'
        }
    }
    slideId.innerHTML = id+1
}


leftArrow.addEventListener('click', ()=>{
    slideIndex -= 1
    changeSlide(slideIndex)
})

rightArrow.addEventListener('click', ()=>{
    slideIndex += 1
    changeSlide(slideIndex)
})


burger.addEventListener('click', ()=>{
    menu.style.display = 'block'
    burger.style.display = 'none'
    console.log(exit)
    exit.style.display = 'block'
})

exit.addEventListener('click', ()=>{
    menu.style.display = 'none'
    burger.style.display = 'block'
    console.log(exit)
    exit.style.display = 'none'
})



