$('.header__info_lang').on('click', function(){
  $('.header__info_lang-dropdown').toggle();
  $(this).find('.header__info_lang-chosen').toggleClass('lang__active-color');
  $(this).find('.header__info_lang-arrow').toggleClass('lang__active-arrow');
  $(this).find('.header__info_lang-arrow_path').toggleClass('lang__active-arrow_path');

});

$('.header__info_lang-dropdown-li').on('click', function(){
  let value = $(this).text();
  $('.header__info_lang-chosen').html(value);
});



function successFormUpdate () {
  document.querySelectorAll('.default__form').forEach(item => {
    item.classList.add('default__form-hidden');
  });
  document.querySelectorAll('.success__form').forEach(item => {
    item.classList.remove('default__form-hidden');
  });
  document.querySelector('.form__form_mail-uncorrect').classList.remove('form__form_mail-uncorrect_active');
}
function rewriteForm () {
  document.querySelectorAll('.default__form').forEach(item => {
    item.classList.remove('default__form-hidden');
  });
  document.querySelectorAll('.success__form').forEach(item => {
    item.classList.add('default__form-hidden');
  });
}

$('.form__form_resend').on('click', function(){
  rewriteForm();
});




// $('.header__info_contact-link').on('click', function(){
//     $('.header__info_contact-link').removeClass('header__active_link');
//     $(this).addClass('header__active_link');
//     if($(this).hasClass('link__products')){
//         hidePages();
//         $('.secondPage').fadeIn(100);
//     }
//     if($(this).hasClass('link__about')){
//       hidePages();
//       $('.firstPage').fadeIn(100);
//   }
// });




let hidePages = () => {
    $('.firstPage').fadeOut(100);
    $('.secondPage').fadeOut(100);
    $('.thirdPage').fadeOut(100);
};
let removeMenu = () => {
  $('.header__info_contact-link').removeClass('header__active_link');
};
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
function validateTel(email) {
    var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    return re.test(String(email).toLowerCase());
}

function sendEmail(){
    var email = $('#email').val();

    $.ajax({
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: $('meta[name="root"]').attr('content')+"/send",
        data: {
            'email': email,
            'name': $('#nameInput').val(),
            'text':$('#textInput').val(),
},
    success: function (data) {
      successFormUpdate();
    },
        error:function (data){
            $('.form__form_mail-uncorrect').addClass('form__form_mail-uncorrect_active');
            // $('#email').val('The data is filled in incorrectly');
        }
});
}
function outputResponse(data){
    console.log(data);
}



// products__block_main-btn
// $('.secondPage__goods_card-btn').on('click', function(){
//   $('.secondPage').fadeOut(100);
//   document.querySelector("header").scrollIntoView();
//   $('.thirdPage').fadeIn(100);
// });

// $('.thirdPage__info_back').on('click', function(){
//   hidePages();
//   $('.secondPage').fadeIn(100);
// });

// $('.products__block_main-btn').on('click', function(){
//   hidePages();
//   removeMenu();
//
//   document.querySelector("header").scrollIntoView();
//   $('.thirdPage').fadeIn(100);
//   $('.link__products').addClass('header__active_link');
//
// });

$('.promo__suggestions, .banner__main_choose').on('click', function(){
  hidePages();
  removeMenu();
  document.querySelector("header").scrollIntoView();
  $('.secondPage').fadeIn(100);
  $('.link__products').addClass('header__active_link');
});


//burger

$('.burger').on('click', function(){
  $('body').toggleClass('overflowStop');
  $('.burger__menu').toggleClass('burger__menu_active');
});


$(".custom-select").each(function() {
    var classes = $(this).attr("class"),
        id      = $(this).attr("id"),
        name    = $(this).attr("name");
    var template =  '<div class="' + classes + '">';
        template += '<span class="custom-select-trigger">' + $(this).attr("placeholder") + '</span>';
        template += '<div class="custom-options">';
        $(this).find("option").each(function() {
          template += '<span class="custom-option ' + $(this).attr("class") + '" data-filter="' + $(this).attr("data-filter") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
        });
    template += '</div></div>';

    $(this).wrap('<div class="custom-select-wrapper"></div>');
    $(this).hide();
    $(this).after(template);
  });
  $(".custom-option:first-of-type").hover(function() {
    $(this).parents(".custom-options").addClass("option-hover");
  }, function() {
    $(this).parents(".custom-options").removeClass("option-hover");
  });
  $(".custom-select-trigger").on("click", function() {
    $('html').one('click',function() {
      $(".custom-select").removeClass("opened");
    });
    $(this).parents(".custom-select").toggleClass("opened");
    event.stopPropagation();
  });
  $(".custom-option").on("click", function() {
    $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
    $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
    $(this).addClass("selection");
    $(this).parents(".custom-select").removeClass("opened");
    $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
  });



  $('.custom-select-trigger').on('click', function(){
    $('.custom-select-trigger').parent().removeClass('opened');
    $(this).parent().addClass('opened');
  });







let windowOuterWidth = window.innerWidth;
console.log(windowOuterWidth);
if(windowOuterWidth > 1200){
  console.log('');
} else{
  $('.sources1').on('click', function(){
    let valueSelect = $(this).find('.custom-select-trigger').text();
    if(valueSelect.length > 8){
      $(this).find('.custom-select-trigger').text(valueSelect.slice(0, 8) + '...');
    }
  });
  $('.sources').on('click', function(){
    let valueSelect = $(this).find('.custom-select-trigger').text();
    if(valueSelect.length > 8){
      $(this).find('.custom-select-trigger').text(valueSelect.slice(0, 8) + '...');
    }
  });
}

window.onresize = function(){
  let windowOuterWidth1 = window.innerWidth;
  console.log(windowOuterWidth1);
  if(windowOuterWidth1 > 1200){
    console.log('');
  } else{
    $('.sources1').on('click', function(){
      let valueSelect = $(this).find('.custom-select-trigger').text();
      if(valueSelect.length > 8){
        $(this).find('.custom-select-trigger').text(valueSelect.slice(0, 8) + '...');
      }
    });
    $('.sources').on('click', function(){
      let valueSelect = $(this).find('.custom-select-trigger').text();
      if(valueSelect.length > 8){
        $(this).find('.custom-select-trigger').text(valueSelect.slice(0, 8) + '...');
      }
    });
  }
};




const parallaxElements = document.querySelectorAll('.parallax')

const parallax = elements => {
		if ('undefined' !== elements && elements.length > 0) {
			elements.forEach( element => {
				let y = window.innerHeight - element.getBoundingClientRect().top
				if (y > 0) {
					element.style.transform = 'translate3d(0, -' + (0.14 * y) + 'px ,0)'
				}
			})
		}
	}

//If element is in viewport, set its position
parallax(parallaxElements)

//Call the function on scroll
window.onscroll = () => {
		parallax(parallaxElements)
};










//////////Burger links

$('.burger__menu_list-about').on('click', function(){
  hidePages();
  $('.firstPage').fadeIn(100);
  $('body').removeClass('overflowStop');
  $('.burger__menu').removeClass('burger__menu_active');
});

$('.burger__menu_list-products').on('click', function(){
  hidePages();
  $('.secondPage').fadeIn(100);
  $('body').removeClass('overflowStop');
  $('.burger__menu').removeClass('burger__menu_active');
});





// __________________________________ admin
let tabs = document.querySelectorAll('.card__tabs_tab');

let removeActiveTab = () => tabs.forEach(item => item.classList.remove('card__tabs_tab-active'));


tabs.forEach(item => {
    item.onclick = () => {
        removeActiveTab();
        item.classList.add('card__tabs_tab-active');
    };
});


//height textarrea
let textarreas = document.querySelectorAll('.card__descr');

textarreas.forEach(item => {
    item.style.height = item.scrollHeight + 'px';
});

window.onresize = () => {
    textarreas.forEach(item => {
        item.style.height = item.scrollHeight + 'px';
    });
}

//product filter

$('span.custom-option').on('click', function () {
    let dataValue = $(this).attr("data-value");
    let dataFilter = $(this).attr("data-filter");
    let params = getParams(location.href);
    params[dataFilter] = dataValue;
    let request = "?";
    Object.entries(params).forEach(([key, value]) => {
        if (key === "group" || key === "usage")
            request += `${key}=${value}&`;
    });
    request = request.slice(0, -1);
    location.href = $('meta[name="root"]').attr('content') + "/products" + request;
});

//add rows



function getParams(str){
    var results = str.split("?");
    results.shift();
    results=results.join().split("&");
    var arr = [];
    for(let i =0;i<results.length;i++){
        let temp = results[i].split("=");
        if(temp[1]!=undefined)
        arr[temp[0]]=temp[1];
    }
    return arr;
}

function hideBurgerMenu(){
    $('body').toggleClass('overflowStop');
    $('.burger__menu').toggleClass('burger__menu_active');
}



if(document.querySelector('#formSend')){
  document.querySelector('#formSend').onclick = () => {
    sendEmail();
  };
}



let addRowsBtns = document.querySelector('.card__table_add');


if(addRowsBtns)
addRowsBtns.onclick = (e) => {
    let clonedRow = addRowsBtns.parentNode.querySelector('.card__table_main-row:last-child').cloneNode(true);
    document.querySelector('.card__table_main').appendChild(clonedRow);
}



const anchors = document.querySelectorAll('.scrollTo');

for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const blockID = anchor.getAttribute('href').substr(1);
        document.getElementById(blockID).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
}


if(document.querySelector('.thirdPage__notFound_btn')){
  new WOW().init();
}
