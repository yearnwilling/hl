  $('.member-submit').on('click', function () {
    var options = {
      success: function (data) {
        $.notify({
          message: '添加成功'
        },{
          // settings
          placement:  {
            align: 'center',
          },
          type: 'success',
          delay: 2*1000,
          z_index: 99999,
        });
        $('#modal').modal('hide');
        setTimeout('window.location.reload()',2000);
      },
      error : function (data) {
        $.notify({
          message: '失败'
        },{
          // settings
          placement:  {
            align: 'center',
          },
          type: 'warning',
          delay: 2*1000,
          z_index: 99999,
        });
      }
    };
    $("#member").ajaxSubmit(options);
  });