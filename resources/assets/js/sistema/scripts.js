$(document).ready(function(){
    $('#slider-sou-fa').slick({
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToScroll: 1,
        speed: 1000,
        dots: false,
        prevArrow: $('#left-arrow'),
        nextArrow: $('#right-arrow'),

        responsive: [
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });     

    $('#slider-evento-realizado').slick({
        slidesToShow: 7,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToScroll: 1,
        speed: 1000,
        dots: false,

        prevArrow: $('#left-arrow'),
        nextArrow: $('#right-arrow'),

        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 6,
                }
            },
            {
                breakpoint: 1050,
                settings: {
                    slidesToShow: 5,
                }
            },

            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 4,
                }
            }
            ,

            {
                breakpoint: 765,
                settings: {
                    slidesToShow: 3,
                }
            }
            ,

            {
                breakpoint: 650,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });

    $('#slider-eventos-confirmados-gerais').slick({
        slidesToShow: 4,
        autoplay: true,
        autoplaySpeed: 4000,
        slidesToScroll: 4,
        speed: 1000,
        dots: false,

        prevArrow: $('#left-arrow'),
        nextArrow: $('#right-arrow'),

        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                }
            },

            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 3,
                }
            }
            ,


            {
                breakpoint: 650,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });




    $('[data-toggle="popover"]').popover();
    $('html').on('click', function(e) {
        if (typeof $(e.target).data('original-title') == 'undefined') {
            $('[data-original-title]').popover('hide');
        }
    });


});

function marca_radio(label, radio_name){
    $('input[name='+radio_name+']').parent().each(function(){
        $(this).removeClass('item-box-selecionado');
    });
    $(label).addClass('item-box-selecionado');
}

function tab_eventos(tab){
    $('.tab-eventos').hide();
    $('.'+tab).show();
    $('.tab-evento-link').removeClass('tab-evento-link-active');
    $('.'+tab+'-link').addClass('tab-evento-link-active');
}

function file_upload(file_input_id,file_fake_id){



    $('#'+file_input_id).trigger('click');


    $('#'+file_input_id).on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('#'+file_fake_id).val(fileName);
    });

    /*
    $('.file_btn').on('click', function() {
        $('.file_input').trigger('click');
    });

    $('.file_input').on('change', function() {
        var fileName = $(this)[0].files[0].name;
        $('.file_fake').val(fileName);
    });
    */
}

