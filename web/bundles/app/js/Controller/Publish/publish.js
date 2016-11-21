$(document).ready(function() {
  $('#modal').on('show.bs.modal', function (e) {
    $(this).load($(e.relatedTarget).data('url'), function (response, status, xhr) {
      if (status == "error") {
        $('#modal').modal('hide');
        var message = $.parseJSON(response);
        $.notify({
          message: message.error.message
        }, {
          placement: {
            align: 'center',
          },
          type: 'danger',
          delay: 2000,
        });
      }
    });
  });
});

$('#delete-modal').on('show.bs.modal', function (e) {
  $('#delete-model-submit').attr('data-url',$(e.relatedTarget).data('url'));
})

$('#delete-model-submit').on('click',function(){
  var url = $(this).data('url');
  $('#delete-modal').modal('hide');
  $.ajax({
    type: 'POST',
    url: url,
    success: function(data){
      if (data.msg != undefined) {
        $.notify({
          message: data.msg
        }, {
          placement: {
            align: 'center',
          },
          type: 'success',
          delay: 2000,
        });
      } else {
        $.notify({
          message: '删除成功'
        }, {
          placement: {
            align: 'center',
          },
          type: 'success',
          delay: 2000,
        });
      }
      setTimeout('window.location.reload()',2000);
    },
    error: function(XMLHttpRequest){
      $.notify({
        message: XMLHttpRequest.responseJSON.error.message
      }, {
        placement: {
          align: 'center',
        },
        type: 'success',
        delay: 2000,
      });
    },
  });
})