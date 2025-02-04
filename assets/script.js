let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () =>{
  navbar.classList.toggle('active');
  loginForm.classList.remove('active');
}

let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>{
  loginForm.classList.toggle('active');
  navbar.classList.remove('active');
}

window.onscroll = () =>{
  navbar.classList.remove('active');
  loginForm.classList.remove('active');
}

var swiper = new Swiper(".review-slider",{
  spaceBetween: 20,
  centeredSlides: true,
  grabCursor: true,
  autoplay:{
    delay: 7500,
    disableOnInteraction: false,
  },
  loop: true,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    991: {
      slidesPerView: 3,
    },
  },
});


function onlyPhoneNumber(event) {
  var input = event.key;
  // Regular expression for common phone number formats
  var regex = /^[0-9()+\- ]+$/;
  if (!regex.test(input)) {
      event.preventDefault();
  }
}



function onlyCharacters(event) {
  var input = event.key;
  var regex = /^[a-zA-Z ]+$/; // Only allows letters (uppercase and lowercase)

  if (!regex.test(input)) {
      event.preventDefault();
  }
}