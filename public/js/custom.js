/**
 * Created by Ot Yol on 3/14/2016.
 */

$(document).ready(function () {
    /**
     * show a confirmation message on delete user
     * @return boolean
     */

    $('a.delete').on('click', function (e) {
        return confirm('Are you sure want to proceed this action?');
    });
});

var timer;

function up() {
    timer = setTimeout(function () {
        var keywords = $('#search_hotel').val();

        if (keywords.length > 0) {
            $.post('http://bookingonline.com/search-hotel', {keywords: keywords}, function (markup) {
                $('#search_hotel').html(markup);
            });
        }
    }, 500);
}

function down() {
    clearTimeout(timer);
}
