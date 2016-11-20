  $('.member-submit').on('click', function () {
    var options = {
      success: function (data) {
        $('#modal').modal('hide');
        notify.success('保存成功');

        setTimeout('window.location.reload()',2000);
      },
      error : function (data) {
        notify.danger('保存失败',3);
      }
    };
    $("#member").ajaxSubmit(options);
  });

