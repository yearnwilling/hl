$('.memo-submit').on('click',function(){
  var options = {
    success: function (data) {
      $('#modal').modal('hide');
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
  $("#memo-form").ajaxSubmit(options);
});