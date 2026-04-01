!window.jQuery && document.write(unescape('%3Cscript src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.10.2.min.js"%3E%3C/script%3E'));

! function(e, t, r) {
    function n() {
        for (; d[0] && "loaded" == d[0][f];) c = d.shift(), c[o] = !i.parentNode.insertBefore(c, i)
    }
    for (var s, a, c, d = [], i = e.scripts[0], o = "onreadystatechange", f = "readyState"; s = r.shift();) a = e.createElement(t), "async" in i ? (a.async = !1, e.body.appendChild(a)) : i[f] ? (d.push(a), a[o] = n) : e.write("<" + t + ' src="' + s + '" defer></' + t + ">"), a.src = s
}(document, "script", [resource_url + 'Scripts/helpers.min.js'])

if (Page == 'home') {
    ! function(e, t, r) {
        function n() {
            for (; d[0] && "loaded" == d[0][f];) c = d.shift(), c[o] = !i.parentNode.insertBefore(c, i)
        }
        for (var s, a, c, d = [], i = e.scripts[0], o = "onreadystatechange", f = "readyState"; s = r.shift();) a = e.createElement(t), "async" in i ? (a.async = !1, e.body.appendChild(a)) : i[f] ? (d.push(a), a[o] = n) : e.write("<" + t + ' src="' + s + '" defer></' + t + ">"), a.src = s
    }(document, "script", [resource_url + 'Scripts/fluid_dg.min.js'])
}


if (Page == 'details') {
    ! function(e, t, r) {
        function n() {
            for (; d[0] && "loaded" == d[0][f];) c = d.shift(), c[o] = !i.parentNode.insertBefore(c, i)
        }
        for (var s, a, c, d = [], i = e.scripts[0], o = "onreadystatechange", f = "readyState"; s = r.shift();) a = e.createElement(t), "async" in i ? (a.async = !1, e.body.appendChild(a)) : i[f] ? (d.push(a), a[o] = n) : e.write("<" + t + ' src="' + s + '" defer></' + t + ">"), a.src = s
    }(document, "script", [resource_url + 'zoom/magiczoomplus.js'])
}

$(window).load(function(e) {
    $('.pop').fancybox({
        iframe: {
            css: {
                width: '550'
            }
        }
    });
    $('.video_pop').fancybox({
        iframe: {
            css: {
                width: '650'
            }
        }
    });
    $('.showhide').click(function() {
        $('.subdd').hide('fast');
        $(this).next().slideToggle('fast');
    });

    $('button').click(function(e) {
        $('.call_dis2,.call_dis3').hide(0)
    })
    $('.sub-menu').click(function(e) {
        e.stopPropagation()
    })
    $('.shownext').click(function(e) {
        if ($(this).next().css('display') == 'block') {
            $(this).next().hide();
            $('.call_dis2,.call_dis3').hide(0);
        } else {
            $('.call_dis2,.call_dis3').hide(0);
            $(this).next().show();
        }
        $(".navbar-toggler").addClass('collapsed');
        $('.nav-collapse.collapse.show').removeClass('show');
        e.stopPropagation()
    });

    $('.dd_next').click(function() {
        $(this).next().slideToggle('fast');
        $(this).toggleClass('dd_next_act');
    })

    $('.cate-link').click(function() {
        $('.cate-link').next().slideUp('');
        $('.cate-link').removeClass('act');
        $(this).addClass('act');
        $(this).next().slideDown('');
    })
    $('.c_tog').click(function() {
        $(this).toggleClass('c_tog2');
    })

    $("#scr1,#scr2").owlCarousel({
        autoplay: true,
        dots: false,
        nav: true,
        navText: ['', ''],
        items: 4,
        responsive: {
            0: {
                items: 1
            },
            479: {
                items: 2
            },
            767: {
                items: 2
            },
            991: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });

    $("#scr3").owlCarousel({
        autoplay: true,
        dots: false,
        nav: true,
        navText: ['', ''],
        items: 4,
        responsive: {
            0: {
                items: 1
            },
            479: {
                items: 2
            },
            767: {
                items: 2
            },
            991: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
    });

    $("#scr4").owlCarousel({
        autoplay: true,
        dots: false,
        nav: true,
        navText: ['', ''],
        items: 4,
        responsive: {
            0: {
                items: 1
            },
            479: {
                items: 2
            },
            767: {
                items: 2
            },
            991: {
                items: 2
            },
            1200: {
                items: 2
            }
        }
    });

    $('.tb_link a').click(function() {
        var dtl_tb = $(this).attr('href');
        $('.tb_link a').removeClass('act');
        $(this).addClass('act');
        $('.tab_cont').addClass('tab_hide');
        $(dtl_tb).removeClass('tab_hide');
        return false;
    })



    if (Page == 'details') {
        $("#dtl_scroll").owlCarousel({
            autoplay: true,
            dots: false,
            nav: true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            items: 4,
            loop: false,
            rewind: 1,
            rtl: false,
            autoplayHoverPause: 1,
            responsive: {
                0: {
                    items: 2
                },
                479: {
                    items: 3
                },
                767: {
                    items: 4
                },
                991: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
    }

    $('.rm_link').click(function() {
        $(this).prev().toggleClass('t_text_1_auto');
        $(this).toggleClass('rm_link_x');
        return false;
    })

    $("#back-top").hide();
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });
        $('#back-top a').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });


    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
            $('.top2').addClass('t2_fixer');
            $('.top2_b').css({
                'display': 'block'
            })
        } else {
            $('.top2').removeClass('t2_fixer');
            $('.top2_b').css({
                'display': 'none'
            })
        }
    })


    if (Page == 'home') {
        $(function() {
            $('#fluid_dg_wrap_1').fluid_dg({
                thumbnails: false,
                height: "35%",
                navigation: 'false',
                minHeight: '120',
                fx: 'blindCurtainTopRight,curtainSliceRight,scrollRight',
                navigationHover: 'false',
                playPause: 'false',
                loader: 'none',
                hover: 'false',
                time: 3000,
                onLoaded: function() {
                    $('#Page_loader').fadeOut()
                }
            });
        })
    }
});