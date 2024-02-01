/**
 *  Pages Authentication
 */

'use strict';
const formAuthentication = document.querySelector('#formAuthentication');

document.addEventListener('DOMContentLoaded', function (e) {
  (function () {
    // Form validation for Add new record
    if (formAuthentication) {
      const fv = FormValidation.formValidation(formAuthentication, {
        fields: {
          username: {
            validators: {
              notEmpty: {
                message: 'Silahkan masukan username'
              },
              stringLength: {
                min: 6,
                message: 'Username minimal 6 karakter'
              }
            }
          },
          email: {
            validators: {
              notEmpty: {
                message: 'Silahkan masukan email'
              },
              emailAddress: {
                message: 'Data email tidak valid'
              }
            }
          },
          'email-username': {
            validators: {
              notEmpty: {
                message: 'Silahkan masukan email / username'
              },
              stringLength: {
                min: 6,
                message: 'Username minimal 6 karakter'
              }
            }
          },
          password: {
            validators: {
              notEmpty: {
                message: 'Silahkan masukan password'
              },
              stringLength: {
                min: 6,
                message: 'Password minimal 6 karakter'
              }
            }
          },
          'confirm-password': {
            validators: {
              notEmpty: {
                message: 'Silahkan konfirmasi password'
              },
              identical: {
                compare: function () {
                  return formAuthentication.querySelector('[name="password"]').value;
                },
                message: 'Password dan konfirmasi password tidak sama'
              },
              stringLength: {
                min: 6,
                message: 'Password minimal 6 karakter'
              }
            }
          },
          terms: {
            validators: {
              notEmpty: {
                message: 'Silahkan centang syarat dan ketentuan'
              }
            }
          }
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap5: new FormValidation.plugins.Bootstrap5({
            eleValidClass: '',
            rowSelector: '.mb-3'
          }),
          submitButton: new FormValidation.plugins.SubmitButton(),

          defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
          autoFocus: new FormValidation.plugins.AutoFocus()
        },
        init: instance => {
          instance.on('plugins.message.placed', function (e) {
            if (e.element.parentElement.classList.contains('input-group')) {
              e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
            }
          });
        }
      });
    }

    //  Two Steps Verification
    const numeralMask = document.querySelectorAll('.numeral-mask');

    // Verification masking
    if (numeralMask.length) {
      numeralMask.forEach(e => {
        new Cleave(e, {
          numeral: true
        });
      });
    }
  })();
});
