// const { forEach } = require("lodash");

AOS.init({
    duration: 800,
    easing: 'slide'
});

(function($) {

    "use strict";

    $(window).stellar({
        responsive: true,
        parallaxBackgrounds: true,
        parallaxElements: true,
        horizontalScrolling: false,
        hideDistantElements: false,
        scrollProperty: 'scroll',
        horizontalOffset: 0,
        verticalOffset: 0
    });

    // Scrollax
    $.Scrollax();


    var fullHeight = function() {

        $('.js-fullheight').css('height', $(window).height());
        $(window).resize(function() {
            $('.js-fullheight').css('height', $(window).height());
        });

    };
    fullHeight();

    // loader
    var loader = function() {
        setTimeout(function() {
            if ($('#ftco-loader').length > 0) {
                $('#ftco-loader').removeClass('show');
            }
        }, 1);
    };
    loader();

    // Scrollax
    $.Scrollax();

    var carousel = function() {
        $('.home-slider').owlCarousel({
            loop: true,
            autoplay: true,
            margin: 0,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            nav: false,
            autoplayHoverPause: false,
            items: 1,
            navText: ["<span class='ion-md-arrow-back'></span>", "<span class='ion-chevron-right'></span>"],
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 1,
                    nav: false
                }
            }
        });
        $('.carousel-work').owlCarousel({
            autoplay: true,
            center: true,
            loop: true,
            items: 1,
            margin: 30,
            stagePadding: 0,
            nav: true,
            navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 0
                },
                600: {
                    items: 2,
                    stagePadding: 50
                },
                1000: {
                    items: 3,
                    stagePadding: 100
                }
            }
        });

    };
    carousel();

    $('nav .dropdown').hover(function() {
        var $this = $(this);
        // 	 timer;
        // clearTimeout(timer);
        $this.addClass('show');
        $this.find('> a').attr('aria-expanded', true);
        // $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
        $this.find('.dropdown-menu').addClass('show');
    }, function() {
        var $this = $(this);
        // timer;
        // timer = setTimeout(function(){
        $this.removeClass('show');
        $this.find('> a').attr('aria-expanded', false);
        // $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
        $this.find('.dropdown-menu').removeClass('show');
        // }, 100);
    });


    $('#dropdown04').on('show.bs.dropdown', function() {
        console.log('show');
    });

    // scroll
    var scrollWindow = function() {
        $(window).scroll(function() {
            var $w = $(this),
                st = $w.scrollTop(),
                navbar = $('.ftco_navbar'),
                sd = $('.js-scroll-wrap');

            if (st > 150) {
                if (!navbar.hasClass('scrolled')) {
                    navbar.addClass('scrolled');
                }
            }
            if (st < 150) {
                if (navbar.hasClass('scrolled')) {
                    navbar.removeClass('scrolled sleep');
                }
            }
            if (st > 350) {
                if (!navbar.hasClass('awake')) {
                    navbar.addClass('awake');
                }

                if (sd.length > 0) {
                    sd.addClass('sleep');
                }
            }
            if (st < 350) {
                if (navbar.hasClass('awake')) {
                    navbar.removeClass('awake');
                    navbar.addClass('sleep');
                }
                if (sd.length > 0) {
                    sd.removeClass('sleep');
                }
            }
        });
    };
    scrollWindow();


    var counter = function() {

        $('#section-counter').waypoint(function(direction) {

            if (direction === 'down' && !$(this.element).hasClass('ftco-animated')) {

                var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
                $('.number').each(function() {
                    var $this = $(this),
                        num = $this.data('number');
                    console.log(num);
                    $this.animateNumber({
                        number: num,
                        numberStep: comma_separator_number_step
                    }, 7000);
                });

            }

        }, { offset: '95%' });

    }
    counter();

    var contentWayPoint = function() {
        var i = 0;
        $('.ftco-animate').waypoint(function(direction) {

            if (direction === 'down' && !$(this.element).hasClass('ftco-animated')) {

                i++;

                $(this.element).addClass('item-animate');
                setTimeout(function() {

                    $('body .ftco-animate.item-animate').each(function(k) {
                        var el = $(this);
                        setTimeout(function() {
                            var effect = el.data('animate-effect');
                            if (effect === 'fadeIn') {
                                el.addClass('fadeIn ftco-animated');
                            } else if (effect === 'fadeInLeft') {
                                el.addClass('fadeInLeft ftco-animated');
                            } else if (effect === 'fadeInRight') {
                                el.addClass('fadeInRight ftco-animated');
                            } else {
                                el.addClass('fadeInUp ftco-animated');
                            }
                            el.removeClass('item-animate');
                        }, k * 50, 'easeInOutExpo');
                    });

                }, 100);

            }

        }, { offset: '95%' });
    };
    contentWayPoint();


    // navigation
    var OnePageNav = function() {
        $(".smoothscroll[href^='#'], #ftco-nav ul li a[href^='#']").on('click', function(e) {
            e.preventDefault();

            var hash = this.hash,
                navToggler = $('.navbar-toggler');
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 700, 'easeInOutExpo', function() {
                window.location.hash = hash;
            });


            if (navToggler.is(':visible')) {
                navToggler.click();
            }
        });
        $('body').on('activate.bs.scrollspy', function() {
            console.log('nice');
        })
    };
    OnePageNav();


    // magnific popup
    $('.image-popup').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: true,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
        }
    });

    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,

        fixedContentPos: false
    });


    $('.appointment_date').datepicker({
        'format': 'm/d/yyyy',
        'autoclose': true
    });

    $('.appointment_time').timepicker();


    $("#icon_plus").on('click', function() {
        var number = $("#quantity").val();
        number++;
        $("#quantity").val(number);
    });
    $("#icon_minus").on('click', function() {
        var number = $("#quantity").val();
        if (number > 0) {
            number--;
        }
        $("#quantity").val(number);
    });
    $("#quantity").on('change', 'keyup', function() {

    });

})(jQuery);

function AddCart(id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: './addCart',
        data: {
            id: id,
        },
        success: function(result) {
            {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success('Thêm sản phẩm thành công');
                renderCart(result);

            }
        }
    });
}

function plusQuantity(id) {
    var number = $("#quantity_" + id).val();
    number++;
    $('#quantity_' + id).attr("value", parseInt(number));
    // UpdateCart(id, number);


}

function minusQuantity(id) {
    var number = $("#quantity_" + id).val();
    if (number > 0) {
        number--;
    }
    $('#quantity_' + id).attr("value", parseInt(number));
    // UpdateCart(id, number);
}
$(".quantity_cart").on('change keyup', function() {
    var number = $(this).val();
    console.log(number);

    if (!isInteger(number)) {
        var number = 0;
    }

    $(this).attr('value', parseInt(number));
});



function updateCart(id) {
    var quantity = $('#quantity_' + id).val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: '/cart/updateCart',
        data: {
            id: id,
            quantity: quantity
        },
        success: function(result) {
            {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success('Thay đổi thành công');
                renderCart(result);

            }
        }
    });
}

function deleteCart(id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'cart/deleteCart',
        data: {
            id: id,
        },
        success: function(result) {
            console.log(result);
            alertify.set('notifier', 'position', 'top-right');
            alertify.success('Xóa sản phẩm thành công');
            renderCart(result);
        }
    });
}

function promotion() {
    var code = $("#code_promotion").val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'post',
        dataType: 'json',
        url: 'cart/promotion',
        data: {
            code: code,
        },
        success: function(result) {
            console.log(result);
            alertify.success('Mã khuyến mãi chính xác');
            renderCart(result);
        },
        error: function(json) {
            if (json.status === 404) {
                var errors = json.responseJSON;
                console.log(errors['message']);
                $(".error_code").text(errors['message']);
            }
        }
    });
}

function renderCart(result) {
    var carts = result.carts;
    $("#subPrice").text(parseInt(result.subPrice).toLocaleString() + " VNĐ");
    $("#delivery").text(parseInt(result.delivery).toLocaleString() + " VNĐ");
    $("#discount").text(result.discount + " %");
    $("#totalPrice").text(parseInt(result.totalPrice).toLocaleString() + " VNĐ");
    $("#currency").val(result.totalPrice);
    $("#totalQuantity").text(result.totalQuantity);
    readMoney(result.totalPrice);

    $("#item_cart").empty();
    var content = "";
    var i = 1;
    for (var cart of carts) {
        // console.log(cart['productInfo']['name']);
        content += '<tr class="text-center">' +
            '<td>' + i + '</td>' +
            '<td class="image-prod"><div class="img" style="background-image:url(images/menu-2.jpg);"></div></td>' +
            '<td class="product-name">' +
            '<h3>' + cart["productInfo"]["name"] + '</h3>' +
            '</td>' +
            '<td class="price">' + parseInt(cart["productInfo"]["price"]).toLocaleString() + ' VNĐ' + '</td>' +
            '<td class="quantity">' +
            '<div class="input-group mb-3">' +
            '<a onclick="minus_quantity"  href="javascript:minusQuantity(' + cart["productInfo"]["id"] + ')" id="icon_minus"  style="bordeR: 1px solid rgba(255, 255, 255, 0.1);padding: 12px 10px; width:54px"><span class="icon-minus"></span></a>' +
            '<input  name="quantity"  class="quantity_cart form-control " id="quantity_' + cart["productInfo"]["id"] + '" value="' + cart["quantity"] + '" min="1" max="100">' +
            '<a role="button" id="icon_plus" href="javascript:plusQuantity(' + cart["productInfo"]["id"] + ')"  style="bordeR: 1px solid rgba(255, 255, 255, 0.1);padding: 12px 10px; width:54px"><span class="icon-plus"></span></a>' +
            '</div>' +
            '</td>' +
            '<td class="product-remove">' +
            '<a href="javascript:updateCart(' + cart["productInfo"]["id"] + ')" ><span class="icon-save"></span></a>' +
            '</td>' +
            '<td class="total">' + parseInt(cart['price']).toLocaleString() + ' VNĐ  </td>' +
            '<td class="product-remove">' +
            '<a href="javascript:deleteCart(' + cart["productInfo"]["id"] + ')" ><span class="icon-close"></span></a>' +
            '</td>' +
            '</tr>';
        i++;
    };
    $("#list_cart").html(content);


}
var money = $("#currency").val();
readMoney(money);