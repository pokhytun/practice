$('.slide-photo').on('click', function(e){
    e.preventDefault();
    $('.productinfo_main-photo').attr('src', $(this).attr('src'));
})
