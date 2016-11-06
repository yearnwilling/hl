$(document).ready(function(){

    $('.single-delete').on('click', function () {
        var url = $(this).data('url');
        //$.notify({
        //    // options
        //    message: 'Hello World'
        //},{
        //    // settings
        //    type: 'danger',
        //    placement: {
        //        from: 'top',
        //        align: 'center'
        //    },
        //    delay: 1000,
        //    timer: 1000,
        //});
        //setTimeout(function(){
        //    window.location.reload();
        //}, 3000);
        $.ajax({
            type : 'POST',
            url : url,
            success : function (data){
                var type = 'info';
                if (data.status == 1 ) {
                    type = 'success';
                } else {
                    type = 'danger'
                }
                $.notify({
                    // options
                    message: data.msg
                },{
                    // settings
                    type: type,
                    placement: {
                        from: 'top',
                        align: 'center'
                    },
                    delay: 1000,
                    timer: 1000,
                });
                if (data.status == 1 ) {
                    setTimeout(function () {
                        window.location.reload();
                    }, 3000);
                }
            },
            error : function (XMLHttpRequest) {

            }

        })
    });
});