$('[data-confirmation="true"]').click(function(event){
    var button = $(this);
    if (!button.data('delete-confirmed')) {
        event.preventDefault();

        var confirmCallback = function(result) {
          if (result) {
            button.data("delete-confirmed", true);
            button.simulate("click");
          }
        };

        var title = 'Please confirm';
        if (typeof button.data('title') !== 'undefined') {
            title = button.data('title');
        }

        var message = 'Are you sure you want to delete this?';
        if (typeof button.data('message') !== 'undefined') {
            message = button.data('message');
        }

        bootbox.dialog({
            title: title,
            message: message,
            buttons: {
                info: {
                  label: "Cancel",
                      className: "btn-info"
                },
                danger: {
                  label: "Ok",
                      className: "btn-danger",
                      callback: confirmCallback
                }
            }
        });
    }
});
