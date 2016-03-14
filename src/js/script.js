$(document).ready(function() {
      $("#owl-demo").owlCarousel({
       
            navigation : true, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true,
            pagination:false,
            navigationText:false
       
            // "singleItem:true" is a shortcut for:
            // items : 1, 
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false
       
      });

    (function () {
         lightbox.option({
            'showImageNumberLabel': false
         });
    })(jQuery);

    $(document).on('click','.js-send', function(){
        var name = $('input[name="contacts__form--name"]').val();
        var mail = $('input[name="contacts__form--email"]').val();
        var phone = $('input[name="contacts__form--tel"]').val();
        var message = $('textarea[name="contacts__form--text"]').val();

        jQuery.ajax({
            url: myajax.url, //url, к которому обращаемся
            type: "POST",
            data: "action=sendFeedback&name=" +name+"&phone=" +phone+"&mail="+mail+"&message="+message, //данные, которые передаем. Обязательно для action указываем имя нашего хука
            success: function(data){
                $('input[name="contacts__form--name"]').val("");
                $('input[name="contacts__form--email"]').val("");
                $('input[name="contacts__form--tel"]').val("");
                $('textarea[name="contacts__form--text"]').val("");
            }
        });
        return false;
    });

    $(document).on('click','.js-modal', function(){
        var type = $(this).attr('data-type');
        $('input[name="modal--type"]').val(type);
        return false;
    });

    $(document).on('click','.js-modal-send', function(){
        var name = $('input[name="modal--name"]').val();
        var phone = $('input[name="modal--tel"]').val();
        var message = $('textarea[name="modal--text"]').val();
        var type = $('input[name="modal--type"]').val();

        jQuery.ajax({
            url: myajax.url, //url, к которому обращаемся
            type: "POST",
            data: "action=sendCallback&name=" +name+"&phone=" +phone+"&message="+message+"&type="+type, //данные, которые передаем. Обязательно для action указываем имя нашего хука
            success: function(data){
                $('input[name="modal--name"]').val("");
                $('input[name="modal--tel"]').val("");
                $('textarea[name="modal--text"]').val("");
                $('input[name="modal--type"]').val("");
            }
        });
        return false;
    });

    //$(document).on('click', '.portfolio--link', function(){
    //    var paged = parseInt($(this).attr("data-paged"));
    //    paged++;
    //    //console.log(paged);
    //    jQuery.ajax({
    //        url: myajax.url, //url, к которому обращаемся
    //        type: "POST",
    //        data: "action=getPortfolio&paged=" + paged, //данные, которые передаем. Обязательно для action указываем имя нашего хука
    //        success: function (data) {
    //            // console.log(data);
    //            //$('#all').before(data);
    //            $('.portfolio--link').before(data);
    //            $('.portfolio--link').attr('data-paged',paged);
    //        }
    //    });
    //    return false;
    //});
});

ymaps.ready(init);

function init () {
    var log = document.getElementById('log'),
        myMap = new ymaps.Map("map", {
            center: [55.707618, 37.688467],
            zoom: 12,
            controls: ['zoomControl']
        }),
        myPlacemark = new ymaps.Placemark([55.707618, 37.688467], {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Это красивая метка'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: myajax.url + 'Pointer-1.png',
            // Размеры метки.
            iconImageSize: [64, 78],
            iconImageOffset: [-32, -78]
            
        });
        

    myMap.geoObjects.add(myPlacemark);
}


