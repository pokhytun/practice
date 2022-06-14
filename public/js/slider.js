$('.slide-photo').on('click', function(e){
    e.preventDefault();
    $('.main-photo').attr('src', $(this).attr('src'));
})
