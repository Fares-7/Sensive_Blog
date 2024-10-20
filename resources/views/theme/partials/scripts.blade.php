<script src="{{ asset('assets') }}/vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="{{ asset('assets') }}/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="{{ asset('assets') }}/vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets') }}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{ asset('assets') }}/js/mail-script.js"></script>
<script src="{{ asset('assets') }}/js/main.js"></script>
<script>
    $(document).ready(function() {
        var owl = $(".blog-slider").owlCarousel({
            items: 3,
            loop: true,
            margin: 20,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });

        $('.slider-arrow-left').click(function() {
            owl.trigger('prev.owl.carousel');
        });

        $('.slider-arrow-right').click(function() {
            owl.trigger('next.owl.carousel');
        });
    });
</script>
{{-- <li><img src="{{ asset('assets') }}/img/instagram/i1.jpg" alt=""></li> --}}
