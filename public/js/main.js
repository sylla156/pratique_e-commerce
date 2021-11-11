import { slide } from "./module/slide.js";
import { carousel } from "./module/carousel.js";
//=== === === === === === === === === === === === === === === ===
//=== selction des element catagorie puis use la class slide ===
//=== === === === === === === === === === === === === === === ===


let btnCategory = document.querySelector('.main__header--btnCategory-img');
let category = document.querySelector('.main__category');
let contenueCategory = document.querySelector('.main__category--parentList');


let sliderForCategory = new slide(btnCategory, category, contenueCategory, true);
sliderForCategory.setStyleClick('click');
sliderForCategory.setStyleNoClick('noClick');
sliderForCategory.execute();

//=== === === === === === === === === === === === === === === ===
//=== selection des element nav puis use la class slide   === ===
//=== === === === === === === === === === === === === === === ===


let btnNav = document.querySelector('.main__header--btnNav');
let nav = document.querySelector('.main__nav');
let contenueNav = document.querySelector('.main__nav--center--parentList');

let sliderForNav = new slide(btnNav, nav, contenueNav);
sliderForNav.setStyleClick('click');
sliderForNav.setStyleNoClick('noClick');
sliderForNav.execute();


//=== === === === === === === === === === === === === === === ===
//=== === === === === === === === === === === === === === === ===
//=== === === fin des slide de categorie et connexion === === ===
//=== === === === === === === === === === === === === === === ===
//=== === === === === === === === === === === === === === === ===



//=== === === === === === === === === === === === === === === ===
//=== selection des element carousel puis use la class carousel===
//=== === === === === === === === === === === === === === === ===

let carouselMAin = document.querySelector('.main__carousel--main-parentElement');
let carouselAllChild = document.querySelectorAll('.main__carousel--main-parentElement_element');
let carouselBtnNext = document.querySelector('.main__carousel--btnNextCarousel');
let carouselBtnPrev = document.querySelector('.main__carousel--btnPrevCarousel');
let carouselSelectorELement = document.querySelector('.main__carousel--main__btnSelectorCarousel--parentSelectorElementOfCarousel');
let carou = new carousel(carouselMAin, carouselAllChild, carouselBtnNext, carouselBtnPrev, carouselSelectorELement);

if (location.pathname === "/") {
    carou.execute();
}

// click for connect addmin
if (location.pathname === '/connexion') {
    let btnAdminConnect = document.querySelector('.clickOfConnectAdmin');
    let typeConnexion = document.querySelector('#typeConnexion');
    btnAdminConnect.addEventListener('dblclick', () => {
        typeConnexion.classList.toggle('visible');
    });
}