<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/css/card.min.css">
    <title>Створити</title>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="wrapper">
            <div onclick="location.href='{{env('APP_URL')}}/admin'" class="header__logo">
                <img src="{{env('APP_URL')}}/img/icons/posts/logo.svg" alt="logo">
                <div class="header__plus">
                    ADMIN
                </div>
            </div>
            <div onclick="location.href='{{env("APP_URL")}}/logout'" class="header__button">
                Вихід
                <img src="{{env('APP_URL')}}/img/icons/posts/arrow.svg" alt="arrow">
            </div>
        </div>
    </div>
</header>
<section class="groupsAdmin">
    <div class="container">
        <div class="contactsAdmin__header_wrapper">
            <div onclick="location.href='{{env("APP_URL")."/en"}}'"  class="contactsAdmin__lang @if($lang=="en") contactsAdmin__lang_active  @endif" >Eng</div>
            <div onclick="location.href='{{env("APP_URL")."/ru"}}'"  class="contactsAdmin__lang @if($lang=="ru") contactsAdmin__lang_active  @endif">Руc</div>
            <div onclick="location.href='{{env("APP_URL")."/ukr"}}'"  class="contactsAdmin__lang @if($lang=="ukr") contactsAdmin__lang_active  @endif">Укр</div>
        </div>
        <div class="groupsAdmin__table_row groupsAdmin__table_row-clonned">
            <div class="groupsAdmin__table_row-title">
                <input readonly value="Група №1" />
            </div>
            <div class="groupsAdmin__table_row-amount">0</div>
            <div class="groupsAdmin__table_row-action">
                <div class="groupsAdmin__table_row-edit">
                    <span class="groupsAdmin__table_row-editBtn">
                        <span>Редагувати</span>
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.25 0.0232109C15.6755 0.0232109 15.113 0.245961 14.6795 0.679461L7.25 8.08571L7.08575 8.24996L7.03925 8.48471L6.52325 11.1097L6.28925 12.2107L7.391 11.9767L10.016 11.4607L10.25 11.4142L10.4142 11.25L17.8205 3.82046C18.1309 3.50926 18.3422 3.11312 18.4278 2.68199C18.5134 2.25086 18.4695 1.80403 18.3015 1.39784C18.1336 0.99165 17.8491 0.644277 17.484 0.399514C17.1189 0.15475 16.6895 0.0235529 16.25 0.0224609V0.0232109ZM16.25 1.47671C16.4255 1.47671 16.5987 1.56671 16.766 1.73396C17.0997 2.06846 17.0997 2.43146 16.766 2.76521L9.5 10.032L8.21075 10.29L8.46875 9.00071L15.7347 1.73471C15.9012 1.56821 16.0745 1.47746 16.25 1.47746V1.47671ZM0.5 2.99996V18H15.5V8.10896L14 9.60896V16.5H2V4.49996H8.891L10.391 2.99996H0.5Z" fill="#263640"/>
                        </svg>
                    </span>
                    <span class="groupsAdmin__table_row-safe">
                        <span>Зберегти</span>
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 11.17L1.83 7L0.410004 8.41L6 14L18 2L16.59 0.589996L6 11.17Z" fill="#219653"/>
                        </svg>
                    </span>
                </div>
                <div class="groupsAdmin__table_row-delete">
                    <span>Видалити</span>
                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.5 1.41L13.09 0L7.5 5.59L1.91 0L0.5 1.41L6.09 7L0.5 12.59L1.91 14L7.5 8.41L13.09 14L14.5 12.59L8.91 7L14.5 1.41Z" fill="#263640"/>
                    </svg>
                </div>
                <div class="addedAdmin__row_action">
                    <span>Додати</span>
                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 11.17L1.83 7L0.410004 8.41L6 14L18 2L16.59 0.589996L6 11.17Z" fill="#219653"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="groupsAdmin__header">
            <div class="groupsAdmin__title">Область використання</div>
            <div class="groupsAdmin__add">
                <div class="groupsAdmin__add_text">Додати групу</div>
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.78323 0.712379L6.35891 0.712378L6.35891 6.35913L0.712158 6.35913V7.78345L6.35891 7.78345L6.35891 13.4302L7.78323 13.4302L7.78323 7.78345L13.43 7.78345V6.35913L7.78323 6.35913L7.78323 0.712379Z" fill="#219653"/>
                </svg>
            </div>
        </div>
        <div class="groupsAdmin__table">
            <div class="groupsAdmin__table_row groupsAdmin__table_header">
                <div class="groupsAdmin__table_row-title">Назва</div>
                <div class="groupsAdmin__table_row-amount">Кількість продуктів</div>
                <div class="groupsAdmin__table_row-action">Дія</div>
            </div>
            <div class="groupsAdmin__content">
                @foreach($filters as $filter)
                    <div class="groupsAdmin__table_row">
                        <div class="groupsAdmin__table_row-title">
                            <input data-id="{{$filter->id}}" readonly value="{{$filter->name}}" />
                        </div>
                        <div class="groupsAdmin__table_row-amount">{{$filter->count}}</div>
                        <div class="groupsAdmin__table_row-action">
                            <div class="groupsAdmin__table_row-edit">
                            <span class="groupsAdmin__table_row-editBtn">
                                <span>Редагувати</span>
                                <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.25 0.0232109C15.6755 0.0232109 15.113 0.245961 14.6795 0.679461L7.25 8.08571L7.08575 8.24996L7.03925 8.48471L6.52325 11.1097L6.28925 12.2107L7.391 11.9767L10.016 11.4607L10.25 11.4142L10.4142 11.25L17.8205 3.82046C18.1309 3.50926 18.3422 3.11312 18.4278 2.68199C18.5134 2.25086 18.4695 1.80403 18.3015 1.39784C18.1336 0.99165 17.8491 0.644277 17.484 0.399514C17.1189 0.15475 16.6895 0.0235529 16.25 0.0224609V0.0232109ZM16.25 1.47671C16.4255 1.47671 16.5987 1.56671 16.766 1.73396C17.0997 2.06846 17.0997 2.43146 16.766 2.76521L9.5 10.032L8.21075 10.29L8.46875 9.00071L15.7347 1.73471C15.9012 1.56821 16.0745 1.47746 16.25 1.47746V1.47671ZM0.5 2.99996V18H15.5V8.10896L14 9.60896V16.5H2V4.49996H8.891L10.391 2.99996H0.5Z" fill="#263640"/>
                                </svg>
                            </span>
                                <span class="groupsAdmin__table_row-safe">
                                <span>Зберегти</span>
                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 11.17L1.83 7L0.410004 8.41L6 14L18 2L16.59 0.589996L6 11.17Z" fill="#219653"/>
                                </svg>
                            </span>
                            </div>
                            <div class="groupsAdmin__table_row-delete">
                                <span>Видалити</span>
                                <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5 1.41L13.09 0L7.5 5.59L1.91 0L0.5 1.41L6.09 7L0.5 12.59L1.91 14L7.5 8.41L13.09 14L14.5 12.59L8.91 7L14.5 1.41Z" fill="#263640"/>
                                </svg>
                            </div>
                            <div class="addedAdmin__row_action">
                                <span>Додати</span>
                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 11.17L1.83 7L0.410004 8.41L6 14L18 2L16.59 0.589996L6 11.17Z" fill="#219653"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<?use Illuminate\Support\Facades\DB;?>
@include("admin/footer", ["contact"=>DB::table('contact_table_ukr')->first()])
<script src="{{env('APP_URL')}}/js/jquery-3.5.1.min.js"></script>
<script>
    let edit = document.querySelectorAll('.groupsAdmin__table_row-editBtn');
    let save = document.querySelectorAll('.groupsAdmin__table_row-safe');
    let deleteRow = document.querySelectorAll('.groupsAdmin__table_row-delete');
    let addGroup = document.querySelector('.groupsAdmin__add');

    let checkValueLength = (input) => {
        if(!input.value.length) return false;
        return true;
    }

    function editRow (e) {
        let row = e.target.closest('.groupsAdmin__table_row');
        let input = row.querySelector('input');
        row.classList.add('groupsAdmin__table_row-editable');
        input.removeAttribute('readonly');
    }

    function saveRow (e){
        let row = e.target.closest('.groupsAdmin__table_row');
        let input = row.querySelector('input');
        if(checkValueLength(input)){
            row.classList.remove('groupsAdmin__table_row-editable');
            editFilterRequest($(input).attr("data-id"),input.value)
            input.setAttribute('readonly', '');
        }else{
            input.classList.add('inputIncorrect', 'animate__animated', 'animate__pulse');
            setTimeout(()=>{
                input.classList.remove('inputIncorrect', 'animate__animated', 'animate__pulse');
            },1000)
        }
    }

    function deleteRowFunct(e) {
        let row = e.target.closest('.groupsAdmin__table_row');
        let input = row.querySelector('input')
        deleteFilterRequest($(input).attr("data-id"))
        row.classList.add('animate__animated', 'animate__fadeOut');
        setTimeout(()=>{
            row.classList.add('deletedRow');
        }, 800);
        setTimeout(()=>{
            row.remove();
        }, 1000);
    }

    edit.forEach(item => {
        item.onclick = editRow;
    });

    save.forEach(item => {
        item.onclick = saveRow;
    });

    deleteRow.forEach(item => {
        item.onclick = deleteRowFunct;
    });

    addGroup.onclick = (e) => {
        const activityClass = 'groupsAdmin__table_row-added';
        let table = e.target.closest('.groupsAdmin');
        let row = table.querySelector('.groupsAdmin__table_row');
        let clonned = row.cloneNode(true);
        clonned.classList.remove('groupsAdmin__table_row-clonned');
        clonned.classList.add(activityClass);
        let input = clonned.querySelector('input');
        input.value = '';
        input.removeAttribute('readonly');
        clonned.querySelector('.addedAdmin__row_action').addEventListener('click', (e)=>{
            if(checkValueLength(input)){
                createFilterRequest(input.value)
                input.setAttribute('readonly', '');
                clonned.classList.remove(activityClass);
                clonned.querySelector('.groupsAdmin__table_row-editBtn').onclick = editRow;
                clonned.querySelector('.groupsAdmin__table_row-safe').onclick = saveRow;
                clonned.querySelector('.groupsAdmin__table_row-delete').onclick = deleteRowFunct;
            }else{
                input.classList.add('inputIncorrect', 'animate__animated', 'animate__pulse');
                setTimeout(()=>{
                    input.classList.remove('inputIncorrect', 'animate__animated', 'animate__pulse');
                }, 2000)
            }
        });
        table.querySelector('.groupsAdmin__table').appendChild(clonned);
    }


    function createFilterRequest(name){
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{env('APP_URL').'/create_field_of_usage'}}",
            data: {
                'name': name,
                'lang':"{{$lang}}",
            },
            success: function (data) {
                location.href = location.href;
            },
        });
    }
    function editFilterRequest(id,name){
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{env('APP_URL').'/edit_field_of_usage'}}",
            data: {
                "id":id,
                'name': name,
            },
            success: function (data) {
                console.log(data);
            },
        });
    }
    function deleteFilterRequest(id){
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{env('APP_URL').'/delete_field_of_usage'}}",
            data: {
                "id":id,
            },
            success: function (data) {
                // location.href = location.href;
                console.log(data);
            },
        });
    }

</script>
</body>
</html>
