let searchForm = document.querySelector('.search-form');// search form

document.querySelector('#search-btn').onclick = () =>{ // calling on the search button [onclick]
    searchForm.classList.toggle('active'); // search bar input type search
    signin.classList.remove('togle');
    signup.classList.remove('active');
    loginForm.classList.remove('active'); // elements holding loginform 
    navbar.classList.remove('active'); // navigations of all items [.navbar] check html
    forgot.classList.remove('active');
    reset_code.classList.remove('active');
}


let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    signin.classList.remove('togle');
    signup.classList.remove('active');
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
    forgot.classList.remove('active');
    reset_code.classList.remove('active');
}

let signup = document.querySelector('.form');

document.querySelector('#sign-up').onclick = () =>{
  signup.classList.toggle('active');
  signin.classList.remove('togle');
  loginForm.classList.remove('active');
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
    forgot.classList.remove('active');
    reset_code.classList.remove('active');
}

let signin = document.querySelector('.login-form');

document.querySelector('#sign-in').onclick = () => {
  signin.classList.toggle('togle');
  signup.classList.remove('active');
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
    forgot.classList.remove('active');
    reset_code.classList.remove('active');

}

let forgot = document.querySelector('.forgot-password');

document.querySelector('#forgot').onclick = () =>{
  forgot.classList.toggle('active');
  signup.classList.remove('active');
  signin.classList.remove('togle');
  loginForm.classList.remove('active');
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
    reset_code.classList.remove('active');
}


let navbar = document.querySelector('.navbar'); // [.navbar] containers carrying all navigations

document.querySelector('#menu-btn').onclick = () =>{ // menu button which will be use to navigate in mobile view
    navbar.classList.toggle('active');
    signin.classList.remove('togle');
    signup.classList.remove('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    forgot.classList.remove('active');
}



window.onscroll = () =>{
  signin.classList.remove('togle');
  signup.classList.remove('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
    forgot.classList.remove('active');
    // reset_code.classList.remove('active');
}


//## password length comfirmation starts here ##//
function validate() {
  let password_length = document.querySelector('.password-input2').value;
  if (password_length.length < 8) {
   alert("Password must exceed 8 characters");
  
   return false;
  } else{
  
   return true;
  }
  }
  //## password length comfirmation ends here ##//

  
function hide_view_password() {
  //## view and hide password starts here ##//
  let view_password_btn_1 = document.querySelector('.no-slash1');
  let hide_password_btn_1 = document.querySelector('.slash1');
  let password_input_box1 = document.querySelector('.password-input1');
  
  view_password_btn_1.onclick = () => {
  if (password_input_box1.type === "password") {
   password_input_box1.type = "text";
   view_password_btn_1.style.visibility = "hidden";
   hide_password_btn_1.style.visibility = "visible";
  } else {
   password_input_box1.type = "password";
   view_password_btn_1.style.visibility = "visible";
   hide_password_btn_1.style.visibility = "hidden";
  }
  }
  
  hide_password_btn_1.onclick = () => {
  if (password_input_box1.type === "text") {
   password_input_box1.type = "password";
   view_password_btn_1.style.visibility = "visible";
   hide_password_btn_1.style.visibility = "hidden";
  } else {
   password_input_box1.type = "password";
   view_password_btn_1.style.visibility = "hidden";
   hide_password_btn_1.style.visibility = "visible";
  }
  }
  
  
  //## Hide | view password on sign up section ##//
  let view_password_btn_2 = document.querySelector('.no-slash2');
  let hide_password_btn_2 = document.querySelector('.slash2');
  let password_input_box2 = document.querySelector('.password-input2');
  
  
  view_password_btn_2.onclick = () => {
  if (password_input_box2.type === "password") {
   password_input_box2.type = "text";
   view_password_btn_2.style.visibility = "hidden";
   hide_password_btn_2.style.visibility = "visible";
  } else {
   password_input_box2.type = "password";
   view_password_btn_2.style.visibility = "visible";
   hide_password_btn_2.style.visibility = "hidden";
  }
  }
  
  hide_password_btn_2.onclick = () => {
  if (password_input_box2.type === "text") {
   password_input_box2.type = "password";
   view_password_btn_2.style.visibility = "visible";
   hide_password_btn_2.style.visibility = "hidden";
  } else {
   password_input_box2.type = "password";
   view_password_btn_2.style.visibility = "hidden";
   hide_password_btn_2.style.visibility = "visible";
  }
  }
  }
  //## view and hide password ends here##//
  hide_view_password();

//## Onscroll animation effect ##//
window.addEventListener('scroll', () =>{

  let reveals  = document.querySelectorAll('.reveal'); 
  for (var i = 0; i < reveals.length; i++){
      let windowheight = window.innerHeight;
      let revealtop = reveals[i].getBoundingClientRect().top;
      let revealpoint = 120;

      if (revealtop  <  windowheight + revealpoint) {
          reveals[i].classList.add('reveal-active');
      } else {
          reveals[i].classList.remove('reveal-active');
      }
  }

});
//## Onscroll animation effect eds here ##//



window.addEventListener('scroll', () =>{
//## back-to top button display 
 let back_to_top = document.querySelector('div#go-home a');

if (scrollY > 150) {
  back_to_top.classList.add('active');
}
else{
  back_to_top.classList.remove('active');
}
});


//## Auto complete search bar ##//
let available_words = new Array(
  'Samsung headset',
  'Oraimo smartphone charger',
  'Iphone 15 pro',
  'Fanta can',
  'Chivita active',
  'Dangote sugar(50kg)',
  'Cocoa melon',
  'Oat',
  'Choco mo',
  'Loya milk (50kg)',
  'Cowbell milk satchet',
  'Baby napkin',
  'Hollandia strawberry flavour',
  'Goldenpenny sugar',
  'St. louis sugar',
  'Apple smart watch',
  'Apple iphone 13 pro max',
  'Iphone 8 plus',
  'Gionee s10',
  'Peak evaporated milk',
  'Crackers biscuits',
  'Fresh apple',
  'Teddy bear for kids',
  'Hard drive 1TB',
  'Yale biscuit',
  'Hisense freezer',
  'G-shock wristwatch',
  'Rolex wristwatch',
  'Fresh fish',
  'Panasonic stabilizer',
  'Thermacool refrigerator',
  'Samsung galaxy smartphone',
  'Iphone XR',
  'Iphone x',
  'Fresh yourghut',
  'Fresh milk',
  'Cornflakes',
  'Samsung washing machine',
  'Nestle bottle water',
  'Amstel malta',
  'Maltina can',
  'Gionee s10 smartphone',
  'Sonny TV set',
  'Hisense washing machine',
  'Oraimo airpod',
  'Oraimo headset',
  'Oraimo home theatre',
  'Iphone 8 plus smartphone',
  'Iphone 15 smartphone',
  'Huawei smartphone',
  'Tecno spark 10',
  'Panasonic home theatre',
  'Thermacool washing machine',
  'Jumbo cheese ball',
  'Iphone 6s smartphone',
  'Beta malt',
  'fearless energy drink'
);

const results_box = document.querySelector('.result-box');
const input_box = document.querySelector('#search-box');

input_box.oninput = ()=> {

  let result = new Array();
  let input = input_box.value;
  if (input.length) {
     result = available_words.filter((keyword)=>{
      return keyword.toLowerCase().includes(input.toLowerCase());
     });
     console.log(result);
  }
  display_outputs(result);

  // if (!result.length) {
  //    results_box.innerHTML = "";
  // }
}

function display_outputs(result) {
  const content = result.map((list)=>{
     return "<li onclick=selectinput(this)>" + list + "</li>";
  });

  results_box.innerHTML = "<ul>" + content.join('') + "</ul>";
}

function selectinput(list) {
  input_box.value = list.innerHTML;
  results_box.innerHTML = ""; // hide all elements when clicked on one
}
//## Auto complete search bar ends here ##//






//##  Cookie Concent code starts here ##//
let cookieBox = document.querySelector(".wrapper");
let acceptBtn = document.querySelector(".buttons button");
let cancel_modal = document.querySelector(".cancel");


acceptBtn.addEventListener("click", ()=>{
   document.cookie = "CookieBy=Shoplex; max-age="+60*60*24*30; // cookie set for 1 month
   if (document.cookie) {
      cookieBox.classList.add("hide");
   }
   else{
      alert("cookie can't be set");
   }
})
let checkcookie = document.cookie.indexOf("CookieBy=Shoplex");
checkcookie != -1 ? cookieBox.classList.add("hide"): cookieBox.classList.remove("hide"); 

// remove cookie modal 

cancel_modal.addEventListener("click", ()=>{
cookieBox.classList.add("hide");
})
//##  Cookie Concent code end here##//



//## section swiper starts here ##//
const swiper = new Swiper('.swiper', {
  // Optional parameters
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});
//## section swiper end here##//



//## Geolocation API integration starts here ##//
if ("geolocation" in navigator) {
  navigator.geolocation.getCurrentPosition( (position)=> {

   let lat = position.coords.latitude;
   let lon = position.coords.longitude;

   console.log("latitude: " + lat + "longitude: " + lon + ".");
  });
} else {
  console.log("geolocation is not supported in your browser.");
}
//## Geolocation API integration ends here ##//