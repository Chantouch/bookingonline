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

