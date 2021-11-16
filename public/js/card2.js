let tabs = document.querySelectorAll('.card__tabs_tab');

let removeActiveTab = () => tabs.forEach(item => item.classList.remove('card__tabs_tab-active'));


let subBtn = document.querySelector('#submit_id');

subBtn.onclick = (e) => {
    console.log("sef")
    document.querySelector('#form_id').submit();
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
    createTable();

}

function setId(id) {
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


$(document).on('change', '.card__table_main-simple', function () {
    // deleteEntry($(this).parent().children()[2].value);
    console.log($(this).parent().children());
    let id = $(this).parent().children()[2].value;
    let title = $(this).parent().children()[0].value;
    let value = $(this).parent().children()[1].value;
    changeTable(id, title, value)
    // $(this).parent().remove();
});


$(document).on('click', '.card__table_main-simple_close', function () {
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


let closeBtn = document.querySelector('.warning__close');


if (closeBtn)
    closeBtn.onclick = (e) => {
        e.target.closest('.warning').classList.remove('warning__active');
    };





$('input').on('keyup keypress paste', function (event) {
    set_counter($(this), event)
});
$('textarea').on('keyup keypress paste', function (event) {
    set_counter($(this), event)
});


$( document ).ready(function() {
    // set_counter.log( "ready!" );
    let arr = ($("div>span[data-count]"));
    for(let i=0; i < arr.length;i++){
        if($(arr[i]).parent().siblings("input").val())
            set_counter($(arr[i]).parent().siblings("input"))
        if($(arr[i]).parent().siblings("textarea").val())
            set_counter($(arr[i]).parent().siblings("textarea"))
    }
});



function set_counter(input, event=null) {
    let counter = input.siblings('div').find("span");
    if (counter) {
        let max_char = parseInt(counter.attr("data-count"))+1;
        if (input.val().length >= max_char) {
            event.preventDefault();
        } else {
            counter.text("(" + (input.val().length) + "/"+(max_char-1)+")")
        }
    }
}
