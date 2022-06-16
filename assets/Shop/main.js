$(document).ready(function () {
    for (let i = 1; i < 100; i++) {
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
    $('#btn-submit-bookRoom').click(function (ev) {
        ev.preventDefault();
        let startDate = $('#bookRoom_startDate').val();
        let endDate = $('#bookRoom_endDate').val();
        let idPhong = $('#bookRoom_idPhong').val();
        let email = $('#bookRoom_email').val();
        let gia = $('#bookRoom_gia').val();
        let tenPhong = $('#bookRoom_tenPhong').val();
        let checkIsUserLogin = $('#bookRoom_isUserLogin').val();
        if (email === '') {
            alert('email is required');
        }
        let fullName = $('#bookRoom_fullName').val();
        if (fullName === '') {
            alert('fullName is required');
        }
        let sdt = $('#bookRoom_sdt').val();
        if (sdt === '') {
            alert('sdt is required');
        }
        let request = $('#bookRoom_request').val();
        console.log(checkIsUserLogin);
        if (checkIsUserLogin==='false'){
            $(location).attr('href', GLOBAL_HOTEL.url+'login');
        }
        if (email !== '' && fullName !== '' && sdt !== '' && checkIsUserLogin==='true') {
            $.ajax({
                    url: GLOBAL_HOTEL.url + 'bookRoom',
                    type: "POST",
                    data: {
                        startDate: startDate,
                        endDate: endDate,
                        MaPhong: idPhong,
                        tenPhong: tenPhong,
                        email: email,
                        gia: gia,
                        fullName: fullName,
                        SDT: sdt,
                        request: request,
                    },
                    success: function (response) {
                        let oResponse = JSON.parse(response);
                        if (oResponse.status === 'success') {
                            $('#bookRoomQRCode').empty().append('<img src="' + oResponse.data.src + '" style="height:' +
                                ' 400px;width: 400px; display: block;margin: 0 auto">');
                            alert("Congratulations on your successful booking !!!");
                        } else {
                            alert(oResponse.message);
                        }
                    },
                }
            )
        }
    });
    $('#chat-message').on('click',function () {
        document.querySelectorAll('.cc-1apq')[0].setAttribute('data-visible', true);
    })
    for (let i = 1; i < 100; i++) {
        $('#huyDon' + i).click(function () {
            let status = confirm("Bạn thật sự muốn huỷ phòng này chứ?");
            if (status){
                $.ajax({
                    type: "POST",
                    url: GLOBAL_HOTEL.url + 'deleteBookRoom',
                    data: {
                        orderID: i
                    },
                    success: function(response)
                    {
                        let jsonData = JSON.parse(response);
                        if (jsonData.status === "success")
                        {
                            location.reload();
                        }
                        else
                        {
                            alert(jsonData.message);
                        }
                    }
                })
            }
        });
    }
})
