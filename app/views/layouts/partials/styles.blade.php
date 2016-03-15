<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
{{HTML::style('css/custom.css')}}
{{HTML::script('js/jquery.min.js')}}
{{HTML::style('css/fwslider.css')}}
{{HTML::script('js/jquery-ui.min.js')}}
{{HTML::script('js/fwslider.js')}}
{{HTML::style('css/jquery-ui.css')}}
{{HTML::style('css/style.css')}}
{{HTML::style('css/bootstrap.min.css')}}
{{HTML::style('css/vert-offset.css')}}
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
