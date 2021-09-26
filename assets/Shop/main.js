$(document).ready(function () {
    for (let i = 1; i < 50; i++) {
        $('#btn-hotel_' + i).click(function () {
            $('#exampleModal_' + i).modal({
                'backdrop': true,
                'keyboard': true,
                'show': true,
                'focus': true
            });
        });
        $('#btn-booking_' + i).click(function () {
            $('#bookingModal_' + i).modal({
                'backdrop': true,
                'keyboard': true,
                'show': true,
                'focus': true
            });
        });
    }
    $('#btn-close-modal').click(function () {
        $('#exampleModal').modal({
            'show': false,
        });
    });
})