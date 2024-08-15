<script src="{{ asset('assets/js/libs/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/front/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/front/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('assets/js/front/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/front/simpleParallax.min.js') }}" defer></script>
<script src="{{ asset('assets/js/front/countTO.js') }}" defer></script>
<script src="{{ asset('assets/js/front/typed.min.js') }}" defer></script>
<script src="{{ asset('assets/js/front/shuffleLetters.js') }}" defer></script>
<script src="{{ asset('assets/js/front/tilt.jquery.min.js') }}" defer></script>
<script src="{{ asset('assets/js/front/magnific.min.js') }}" defer></script>
<script src="{{ asset('assets/js/front/venor.js') }}" defer></script>
<script>
    window.laravelCookieConsent = (function () {
        const COOKIE_VALUE = 1;
        const COOKIE_DOMAIN = 'venor3.lucian.host';
        function consentWithCookies() {
            setCookie('laravel_cookie_consent', COOKIE_VALUE, 7300);
            hideCookieDialog();
        }

        function cookieExists(name) {
            return (document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE) !== -1);
        }

        function hideCookieDialog() {
            const dialogs = document.getElementsByClassName('js-cookie-consent');

            for (let i = 0; i < dialogs.length; ++i) {
                dialogs[i].style.display = 'none';
            }
        }

        function setCookie(name, value, expirationInDays) {
            const date = new Date();
            date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
            document.cookie = name + '=' + value
                + ';expires=' + date.toUTCString()
                + ';domain=' + COOKIE_DOMAIN
                + ';path=/'
                + ';samesite=lax';
        }

        if (cookieExists('laravel_cookie_consent')) {
            hideCookieDialog();
        }

        const buttons = document.getElementsByClassName('js-cookie-consent-agree');

        for (let i = 0; i < buttons.length; ++i) {
            buttons[i].addEventListener('click', consentWithCookies);
        }

        return {
            consentWithCookies: consentWithCookies,
            hideCookieDialog: hideCookieDialog
        };
    })();
</script>


<script type="text/javascript">
    ( function ( $ ) {
        'use strict';
        $( document ).ready( function () {
            /* TYPED TEXT */
            $(function(){
                $(".mt_typed_text").typed({
                strings: ['Web Design?', 'Social Media?', 'Print Design?', 'Digital Design?', 'Print Design?'],
                typeSpeed: 1,
                backDelay: 2000,
                loop: true
                });
            });
        })
    } ( jQuery ) )
</script>

<script type="text/javascript">
        console.log('working');
</script>
