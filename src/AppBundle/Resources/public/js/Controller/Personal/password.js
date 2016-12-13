$('.password-submit').on('click',function(){
  if ($('#password').val() == $("#replace").val()) {
    var options = {
      success: function (data) {
        $.notify({
          message: '保存成功'
        }, {
          placement: {
            align: 'center',
          },
          type: 'success',
          delay: 2000,
        });

        setTimeout('window.location.reload()',2000);
      },
      error : function (data) {
        $.notify({
          message: '保存失败'
        }, {
          placement: {
            align: 'center',
          },
          type: 'danger',
          delay: 2000,
        });
      }
    };
    $("#pwd-form").ajaxSubmit(options);
  } else  {
    $.notify({
      message: '两次输入密码不同。'
    }, {
      placement: {
        align: 'center',
      },
      type: 'danger',
      delay: 2000,
    });
  }


});