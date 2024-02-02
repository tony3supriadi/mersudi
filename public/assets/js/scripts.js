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
