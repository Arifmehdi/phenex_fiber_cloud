$(document).ready(function() {
    function showToast(message, type) {
        let toast = $('<div class="custom-toast toast-' + type + '">' +
            '<div class="toast-content">' +
            '<span class="toast-icon">' + (type === 'success' ? '&#10004;' : '&#10006;') + '</span>' +
            '<span class="toast-message">' + message + '</span>' +
            '</div></div>');
        $('body').append(toast);
        setTimeout(function() {
            toast.addClass('show');
        }, 100);
        setTimeout(function() {
            toast.removeClass('show');
            setTimeout(function() {
                toast.remove();
            }, 300);
        }, 5000);
    }

    let contactFormSubmitted = false;

    $(document).on('submit', '.contact-form', function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        if (contactFormSubmitted) {
            return false;
        }
        contactFormSubmitted = true;
        
        let form = $(this);
        let submitBtn = form.find('button[type="submit"]');
        let originalBtnText = submitBtn.html();
        
        submitBtn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm me-2"></span>Sending...');
        
        $.ajax({
            url: form.attr('action'),
            method: 'POST',
            data: form.serialize(),
            dataType: 'json',
            success: function(response) {
                form[0].reset();
                showToast('Thank you! Your message has been sent successfully. We will get back to you soon.', 'success');
                contactFormSubmitted = false;
                submitBtn.prop('disabled', false).html(originalBtnText);
            },
            error: function(xhr) {
                let errorMsg = 'Something went wrong. Please try again.';
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    let errors = xhr.responseJSON.errors;
                    errorMsg = '';
                    for (let key in errors) {
                        errorMsg += errors[key][0] + '<br>';
                    }
                } else if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMsg = xhr.responseJSON.message;
                }
                showToast(errorMsg, 'error');
                contactFormSubmitted = false;
                submitBtn.prop('disabled', false).html(originalBtnText);
            }
        });
        
        return false;
    });
});
        
        return false;
    });
});