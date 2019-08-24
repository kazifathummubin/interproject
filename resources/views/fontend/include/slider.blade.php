
<div class='owl-carousel' id='owlCarousel'>

      @foreach($sliders as $slider)
    <div class='slide'>
        <img class='owl-item-bg'  src="{{asset('backend/assets/images/slider')}}/{{ $slider->slider_image }}" >
        <div class='slide-content'>
            <div class='overlay'></div>
            <h2>
			{!! $slider->slider_contant !!}</h2>
        </div>
    </div>
        @endforeach

<script>


    $(document).ready(()=> {
        'use strict';

    var owl = $('.owl-carousel'),
        item,
        itemsBgArray = [], // to store items background-image
        itemBGImg;


    owl.owlCarousel({
        items: 1,
        smartSpeed: 1000,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplaySpeed: 1000,
        loop: true,
        nav: true,
        navText: false,
        itemsDesktop : [1199,3],//Set AutoPlay to 3 seconds


        onTranslated: function () {
            changeNavsThump();
        },
        autoPlay: 3000,
        itemsDesktopSmall : [979,3]
    });

    $('.active').addClass('anim');

    var owlItem = $('.owl-item'),
        owlLen = owlItem.length;
    /* --------------------------------
      * store items bg images into array
    --------------------------------- */
    $.each(owlItem, function( i, e ) {
        itemBGImg = $(e).find('.owl-item-bg').attr('src');
        itemsBgArray.push(itemBGImg);
    });
    /* --------------------------------------------
      * nav control thump
      * nav control icon
    --------------------------------------------- */
    var owlNav = $('.owl-nav'),
        el;

    $.each(owlNav.children(), function (i,e) {
        el = $(e);
        // append navs thump/icon with control pattern(owl-prev/owl-next)
        el.append('<div class="'+ el.attr('class').match(/owl-\w{4}/) +'-thump">');
        el.append('<div class="'+ el.attr('class').match(/owl-\w{4}/) +'-icon">');
    });

    /*-------------------------------------------
      Change control thump on each translate end
    ------------------------------------------- */
    function changeNavsThump() {
        var activeItemIndex = parseInt($('.owl-item.active').index()),
            // if active item is first item then set last item bg-image in .owl-prev-thump
            // else set previous item bg-image
            prevItemIndex = activeItemIndex != 0 ? activeItemIndex - 1 : owlLen - 1,
            // if active item is last item then set first item bg-image in .owl-next-thump
            // else set next item bg-image
            nextItemIndex = activeItemIndex != owlLen - 1 ? activeItemIndex + 1 : 0;

        $('.owl-prev-thump').css({
            backgroundImage: 'url(' + itemsBgArray[prevItemIndex] + ')'
        });

        $('.owl-next-thump').css({
            backgroundImage: 'url(' + itemsBgArray[nextItemIndex] + ')'
        });
    }
    changeNavsThump();
    });

</script>