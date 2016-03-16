<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link rel="stylesheet" href="{{asset('/css/custom.css')}}">
<link rel="stylesheet" href="{{asset('/css/fwslider.css')}}">
<link rel="stylesheet" href="{{asset('/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('/css/style.css')}}">
<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('/css/vert-offset.css')}}">
{{--<link rel="stylesheet" href="{{asset('')}}">--}}
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('/js/fwslider.js')}}"></script>
{{--<script src="{{asset('/')}}"></script>--}}
<script>
    $(function () {
        $("#datepicker,#datepicker1").datepicker();
    });

    $(function () {
        var pull = $('#pull');
        menu = $('nav ul');
        menuHeight = menu.height();

        $(pull).on('click', function (e) {
            e.preventDefault();
            menu.slideToggle();
        });

        $(window).resize(function () {
            var w = $(window).width();
            if (w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    });
</script>
<style type="text/css">
    #country {
    }
</style>
