import { slide } from "./module/slide.js";
//=== === === === === === === === === === === === === === ===

let btnCategory = document.querySelector('.main__header--btnCategory-img');
let category = document.querySelector('.main__category');
let contenueCategory = document.querySelector('.main__category--parentList');


let sliderForCategory = new slide(btnCategory,category,contenueCategory,true);
sliderForCategory.setStyleClick('click');
sliderForCategory.setStyleNoClick('noClick');
sliderForCategory.execute();

//=== === === === === === === === === === === === === === === 


let btnNav = document.querySelector('.main__header--btnNav-img');
let nav = document.querySelector('.main__nav');
let contenueNav = document.querySelector('.main__nav--parentList');

let sliderForNav = new slide(btnNav, nav, contenueNav);
sliderForNav.setStyleClick('click');
sliderForNav.setStyleNoClick('noClick');
sliderForNav.execute();