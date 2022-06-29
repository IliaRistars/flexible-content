



(function ($) {
    "use strict";



    //** 100vh height fixes **/ 
    const appHeight = () => {
        const doc = document.documentElement
        doc.style.setProperty('--app-height', `${window.innerHeight}px`)
    }
    window.addEventListener('resize', appHeight)

    gsap.registerPlugin(ScrollTrigger);

    navHandler()
    introAnim()
    initAccordion()
    initSlider()
    videoHander()



    //** Nav handler **/

    function navHandler() {
        const app = document.querySelector('body')
        const mobilebtn = document.querySelector('.header__mobiletoggle')
        const dropdownbtn = document.querySelectorAll('.has-dropdown')
        const menu = document.querySelector('.header__menu')
        const portalbtn = document.querySelector('.portal_btn')
        const portalmenu = document.querySelector('.portalMenu')

        mobilebtn.addEventListener('click', function () {
            app.classList.toggle('menu-open')
            menu.classList.toggle('show')
        })

        if (window.innerWidth < 1200) {
            $(dropdownbtn).each(function (index) {
                $(this).click(function (index) {
                    event.preventDefault()
                    $(this).siblings().slideToggle()
                })
            });
        }

        portalbtn.addEventListener('click', function () {
            event.preventDefault()
            portalmenu.classList.toggle('show')
        })
    }

    //** Intro animations  **/
    function introAnim() {
        if ($('.herobanner').length > 0) {
            const introTl = gsap.timeline()

            introTl.to('.herobanner__content--heading h1', {
                delay: 1,
                y: 0,
                opacity: 1,
                duration: 1,
                ease: Power1.easeOuteaseOut
            })
            introTl.to('.herobanner__content--text p', {
                y: 0,
                opacity: 1,
                duration: 1,
                ease: Power1.easeOuteaseOut
            }, ">-.8")
            introTl.to('.herobanner__content--cta ', {
                y: 0,
                opacity: 1,
                duration: 1,
                ease: Power1.easeOuteaseOut
            }, ">-.8")

            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: "#hero",
                    start: "top top",
                    end: "bottom top",
                    scrub: true
                }
            });

            gsap.utils.toArray(".parallax").forEach(layer => {
                const depth = layer.dataset.depth;
                const movement = -(layer.offsetHeight * depth)
                tl.to(layer, { y: movement, ease: "none" }, 0)
            });
        }
    }


    //** Accordion handler **/
    function initAccordion() {
        if ($('.accordion').length > 0) {
            $(function () {
                $(".accordion").accordion({
                    collapsible: true,
                    heightStyle: "content",
                });
            });
        }
    }


    //** Slider handler **/
    function initSlider() {
        if ($('.featured__slider').length > 0) {
            let nextButton = document.querySelector('.featured__slider--next')
            let prevButton = document.querySelector('.featured__slider--prev')
            $('.featured__slider').slick({
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 3,
                nextArrow: nextButton,
                prevArrow: prevButton,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        }
        if ($('.logoslider__slider').length > 0) {
            $('.logoslider__slider').slick({
                infinite: false,
                slidesToShow: 7,
                slidesToScroll: 7,
                arrows: false,
                dots: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 2,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    }
                ]
            });
        }
        if ($('.ctablock').length > 0 && $('.ctablock__col').length > 3) {
            let wrapper = document.querySelector('.ctablock .container')
            let nextButton = document.querySelector('.ctablock__next')
            let prevButton = document.querySelector('.ctablock__prev')
            wrapper.classList.add('slider-on')
            nextButton.classList.add('show')
            prevButton.classList.add('show')
            $('.ctablock__wrapper').slick({
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 3,
                nextArrow: nextButton,
                prevArrow: prevButton,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            infinite: true,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            variableWidth: true
                        }
                    }
                ]
            });
        }
    }

    //** Video handler **/
    function videoHander() {

        const playButton = document.querySelector('.videoblock__video--play')
        const videoThumb = document.querySelector('.videoblock__thumb')

        const options = {
            controls: false,
        };

        const player = new Vimeo.Player('i-video', options);

        player.on('play', function () {
            options.controls = true
        });

        playButton.addEventListener('click', function () {
            event.preventDefault()
            player.play()
            playButton.classList.add('hide')
            videoThumb.classList.add('hide')
        })

        $("img[data-vimeo-id]").each(function (index) {
            var vimeoId = $(this).data('vimeo-id');
            // Endpoint: https://vimeo.com/api/oembed.json?url=https%3A//vimeo.com/
            $.getJSON('https://vimeo.com/api/oembed.json?url=https%3A//vimeo.com/' + vimeoId, {
                format: "json",
                width: "640"
            },
                function (data) {
                    $("img[data-vimeo-id=" + vimeoId + "]").attr('src', data.thumbnail_url);
                });
        });

    }




})(jQuery);



