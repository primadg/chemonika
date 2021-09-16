let tabs = document.querySelectorAll('.card__tabs_tab');

let removeActiveTab = () => tabs.forEach(item => item.classList.remove('card__tabs_tab-active'));



let subBtn = document.querySelector('#submit_id');

subBtn.onclick = (e) => {
    console.log("sef")
    document.querySelector('#form_id').submit();
}





tabs.forEach(item => {
    item.onclick = () => {
        removeActiveTab();
        $('#lang_data').val(returnCorrectLanguageData(item));
        item.classList.add('card__tabs_tab-active');
    };
});

function returnCorrectLanguageData(item) {
    switch (item.innerHTML) {
        case"Eng":
            return 'en';
        case"Руc":
            return 'ru';
        default:
            return 'ukr';
    }
}


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

//add rows

let addRowsBtns = document.querySelector('.card__table_add');

addRowsBtns.onclick = (e) => {
    let clonedRow = addRowsBtns.parentNode.querySelector('.card__table_main-row:last-child').cloneNode(true);
    document.querySelector('.card__table_main').appendChild(clonedRow);
}


function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {

            $('#imagehui').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

$("#myFile").change(function(){
    readURL(this);
});



let closeBtn = document.querySelector('.warning__close');

closeBtn.onclick = (e) => {
    e.target.closest('.warning').classList.remove('warning__active');
};
