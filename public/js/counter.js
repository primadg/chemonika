$('input').on('keyup keypress paste', function (event) {
    set_counter($(this), event)
});
$('textarea').on('keyup keypress paste', function (event) {
    set_counter($(this), event)
});


new_counter()

function new_counter(){
    let arr = ($("div>span[data-count]"));
    for(let i=0; i < arr.length;i++){

        if($(arr[i]).parent().siblings("input"))
            set_counter($(arr[i]).parent().siblings("input"))
        if($(arr[i]).parent().siblings("textarea"))
            set_counter($(arr[i]).parent().siblings("textarea"))
    }
}



// $( document ).ready(function() {
//     // set_counter.log( "ready!" );
//     let arr = ($("div>span[data-count]"));
//     for(let i=0; i < arr.length;i++){
//         if($(arr[i]).parent().siblings("input").val())
//             set_counter($(arr[i]).parent().siblings("input"))
//         if($(arr[i]).parent().siblings("textarea").val())
//             set_counter($(arr[i]).parent().siblings("textarea"))
//     }
// });



function set_counter(input, event=null) {
    let counter = input.siblings('div').find("span");
    if(counter.length>1) return;
    // console.log(counter.length)
    if (counter) {
        let max_char = parseInt(counter.attr("data-count"))+1;
        let count = input.val();
        if(count)
            count=count.length;
        else
            count = 0;

        counter.text("(" + count + "/"+(max_char-1)+")")
        if (count >= max_char) {
            input.addClass("input__error");
        } else {
            input.removeClass("input__error");
        }
    }
}
