let subBtn = document.querySelector('#submit_id');

let tabs = document.querySelectorAll('.card__tabs_tab');

let removeActiveTab = () => tabs.forEach(item => item.classList.remove('card__tabs_tab-active'));


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

let addRowsBtns = document.querySelector('.card__table_add');

addRowsBtns.onclick = (e) => {
    createTable();
}

function setId(id){
    let clonedRow = addRowsBtns.parentNode.querySelector('.card__table_main-row:last-child').cloneNode(true);
    clonedRow.childNodes[5].value = (id);
    clonedRow.childNodes[3].value = ('Значение');
    clonedRow.childNodes[1].value = ('Название');
    $(clonedRow).attr('hidden', false);
     document.querySelector('.card__table_main').appendChild(clonedRow);
}


//delete row
// let removeRowsBtns = document.querySelector('.card__table_main-simple_close');
//
// removeRowsBtns.onclick = (e) => {
//     console.log(removeRowsBtns);
//     removeRowsBtns.parentNode.remove();
//
// }


$(document).on('change', '.card__table_main-simple', function() {
    // deleteEntry($(this).parent().children()[2].value);
    console.log($(this).parent().children());
    let id = $(this).parent().children()[2].value;
    let title = $(this).parent().children()[0].value;
    let value = $(this).parent().children()[1].value;
    changeTable(id,title, value)
    // $(this).parent().remove();
});




$(document).on('click', '.card__table_main-simple_close', function() {
    deleteEntry($(this).parent().children()[2].value);
    // console.log($(this).parent().children()[2].value);
    $(this).parent().remove();
});



function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {

            $('#imagehui').attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

$("#myFile").change(function () {
    readURL(this);
});



$('input').on('keyup keypress paste', function (event) {
    set_counter($(this), event)
});
$('textarea').on('keyup keypress paste', function (event) {
    set_counter($(this), event)
});





