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
