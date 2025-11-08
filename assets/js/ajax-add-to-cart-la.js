jQuery(document).ready(function($) {
    $('checkout-notice').hide();
    $('body').on('click', '.custom-add-to-cart, .ajax-add-to-cart-la', function(e) {
        e.preventDefault();
        var currentEvent = $(this);
        var product_id = currentEvent.data('product-id') ?? "";
        var variation_id = currentEvent.data('variation-id') ?? "";
        var quantity = currentEvent.data('quantity') ?? 1;

        var id = "";
        if (product_id.length < 1 && variation_id.length < 1){
            alert('Invalid Product ID');
            return;
        } else if (variation_id.length < 1){
            id = product_id;
        } else {
            id = variation_id;
        }

        var data = {
            product_id:id,
            quantity: quantity,
        }

        var buttonText = currentEvent.text();
        var url = wc_add_to_cart_params.wc_ajax_url.toString().replace( '%%endpoint%%', 'add_to_cart' );
        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            beforeSend: function() {
                console.log('Add to cart processing... ');
                console.log(data);
                currentEvent.text('Processing...');
                currentEvent.attr("disabled", true);
            },
            success: function(response) {
                currentEvent.attr("disabled", false);

                // Redirect to checkout as Rahad Hasan 01-March-2025
                // setTimeout(function (){
                    window.location.href = '/checkout/';
                // }, 200);
                
                if ( ! response ) {
                    return;
                }
                console.log(response);

                if ( response.error ) {
                    currentEvent.text('Failed');
                    // Trigger Event error toast message
                    $(document.body).trigger( 'toast_error', ['Unable to add to cart, Please try again later.'] );
                    return;
                } else {


                    // Redirect to cart option
                    if ( wc_add_to_cart_params.cart_redirect_after_add === 'yes' ) {
                        currentEvent.text("Redirecting..");
                        window.location = wc_add_to_cart_params.cart_url;
                        return;
                    }
                    currentEvent.text(buttonText);
                    // Trigger event so themes can refresh other areas.
                    $(document.body).trigger( 'added_to_cart', [ response.fragments, response.cart_hash, currentEvent ] );
                    $(document.body).trigger( 'toast_success', ['Add to cart success'] );
                }


                setTimeout(function (){
                    currentEvent.text(buttonText);
                }, 2000);

            },
            error: function(xhr, status, error) {
                currentEvent.attr("disabled", false);
                currentEvent.text(buttonText);
                console.log(xhr.responseText);
                // Trigger Event error toast message
                $(document.body).trigger( 'toast_error', ['Unable to add to cart, Please try again later.'] );

            }
        });
    });


    $(document.body).on('toast_success', function (event, message){
        console.log(message);
        $('checkout-notice').show();
        showDefaultToast(message, 'success', document.title);
    })
    $(document.body).on('toast_error', function (event, message){
        $('checkout-notice').show();
        console.log(message);
        showDefaultToast(message, 'error', document.title);
    })

    function showDefaultToast(message, type, title = "",){
        var toaster = document.getElementById('defaultToast');
        var maxLength = 40;
        var successIcon = '<svg width="15" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>'
        var errorIcon = '<svg width="15" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" /></svg>';
        if (title.length < 1 ){
            title =  $('.entry-title').text().length > 0 ? $('.entry-title').text():  "Lead Academy";
        }

        if (title.length > maxLength) {
            title = title.substring(0, maxLength - 3) + '...';
        }

        if (type == "success"){
            var bodyContent = '<div class="mb-3 checkout-notice">';
            bodyContent += successIcon;
            bodyContent += '<span class="ms-2">'+ message +'</span>';
            bodyContent += '</div>';
            // bodyContent += '<div class="d-flex justify-content-between align-items-center">'
            // bodyContent += '<a class="btn btn-danger" href="/cart" >Go To Cart</a>'
            // bodyContent += '<a class="btn btn-danger" href="/checkout" >Checkout</a>'
            // bodyContent += '</div>'
        } else {
            var bodyContent = errorIcon;
            bodyContent += '<span class="ms-2">'+ message +'</span>';
        }

        toaster.querySelector('.toast-title').innerHTML = title;        // could be dynamic value title
        toaster.querySelector('.toast-body').innerHTML = bodyContent;   // could be dynamic value message

        // var visibleToast = new bootstrap.Toast(toaster, {'autohide': true, 'delay': 5000});
        var visibleToast = new bootstrap.Toast(toaster, {'autohide': false});

        visibleToast.show();
    }

});