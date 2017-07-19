$(document).ready(function () {
  $('.Menu2').addClass('Hide');
    $('.Menu2').eq(0).removeClass('Hide');
    $('.List1 li').eq(0).addClass('Select');
    $('.List1 li').mouseenter(function () {
        var index = $(this).parent().children().index(this);
        $(this).parent().children().each(function () {
            if ($(this).hasClass('Select')) {
                $(this).removeClass('Select');
            }
        });
        $(this).addClass('Select');
        $('.Menu2').each(function () {
            if (!$(this).hasClass('Hide')) {
                $(this).addClass('Hide');
            }
        });
        $('.Menu2').eq(index).removeClass('Hide');
    });
});