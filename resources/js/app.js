(function (window, undefined) {
    'use strict';

    /*
    NOTE:
    ------
    PLACE HERE YOUR OWN JAVASCRIPT CODE IF NEEDED
    WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR JAVASCRIPT CODE PLEASE CONSIDER WRITING YOUR SCRIPT HERE.  */

    new AjaxFormSubmitter({
        form: '#delete-submit',
        scrollToError: false,
        success: function(response) {
            if (response.status == "success") {
                window.location.reload();
            }
        }
    });

})(window);

function confirmAlert(params) {
    Swal.fire({
        title: params.title ?? 'Apakah kamu yakin?',
        text: params.text ?? "Data yang akan dihapus tidak bisa dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: params.cancelText ?? 'Batal',
        confirmButtonText: params.confirmText ?? '<span data-feather="trash"></span> Ya, Hapus!',
        customClass: {
            confirmButton: 'btn btn-danger',
            cancelButton: 'btn btn-outline-secondary ms-1'
        },
        buttonsStyling: false
    }).then(params.then);
}

function number_format(number, decimals, dec_point, thousands_sep) {
    number = number.toFixed(decimals);

    var nstr = number.toString();
    nstr += '';
    x = nstr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? dec_point + x[1] : '';
    var rgx = /(\d+)(\d{3})/;

    while (rgx.test(x1))
        x1 = x1.replace(rgx, '$1' + thousands_sep + '$2');

    return x1 + x2;
}
