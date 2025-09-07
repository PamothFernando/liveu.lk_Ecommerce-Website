<script>
    'use strict'

    var TT = TT || {};
    TT.localize = {
        buyNow: '{{ localize('Buy Now') }}',
        addToCart: '{{ localize('Add to Cart') }}',
        outOfStock: '{{ localize('Out of Stock') }}',
        addingToCart: '{{ localize('Adding..') }}',
        optionsAlert: '{{ localize('Please choose all the available options') }}',
        applyCoupon: '{{ localize('Apply Coupon') }}',
        pleaseWait: '{{ localize('Please Wait') }}',
    }

    TT.ProductSliders = () => {
        let quickViewProductSlider = new Swiper(".quickview-product-slider", {
            slidesPerView: 1,
            centeredSlides: true,
            speed: 700,
            loop: true,
            loopedSlides: 6,
        });
        let productThumbnailSlider = new Swiper(".product-thumbnail-slider", {
            slidesPerView: 4,
            speed: 700,
            loop: true,
            spaceBetween: 20,
            slideToClickedSlide: true,
            loopedSlides: 6,
            centeredSlides: true,
            breakpoints: {
                0: {
                    slidesPerView: 2,
                },
                380: {
                    slidesPerView: 3,
                },
                576: {
                    slidesPerView: 4,
                },
            },
        });
        if (quickViewProductSlider && quickViewProductSlider.length > 0) {
            quickViewProductSlider.forEach(function(item, index) {
                item.controller.control = productThumbnailSlider[index];
                productThumbnailSlider[index].controller.control = item;
            });
        } else {
            quickViewProductSlider.controller.control = productThumbnailSlider;
            productThumbnailSlider.controller.control = quickViewProductSlider;
        }
    }
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TL2ZQJB7');</script>
<!-- End Google Tag Manager -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RZ3CXRFWY4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RZ3CXRFWY4');
</script>
