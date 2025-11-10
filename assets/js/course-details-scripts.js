jQuery(document).ready(function () {
    console.log('Loading course-details-scripts.js');
    // Initialize coupon context from URL and ensure window.activeCoupon exists
    (function initCouponContext(){
        try {
            var urlParams = new URLSearchParams(window.location.search);
            var couponCode = urlParams.get('coupon');
            if (!window.activeCoupon) {
                window.activeCoupon = { code: '', discountPercentage: 0, discountAmount: 0, discountType: '', isActive: false };
            }
            if (couponCode && window.activeCoupon && window.activeCoupon.isActive && window.activeCoupon.code === couponCode) {
                console.log('Coupon system initialized:', couponCode);
            }
        } catch(e) {}
    })();
    /** 
     * ====================================================================
     * Single Course Page Accordion 
     * ====================================================================
    */
    // if( jQuery('#la-faq-accordion').length ) {
    // 	jQuery('#la-faq-accordion .mcdt-toggle').click(function(e) {
    // 		e.preventDefault();

    // 		let $this = jQuery(this);

    //         $this.next().slideToggle(250);

    //         if( $this.hasClass('mcdt-toggle-show'))
    //         {
    //             $this.removeClass('mcdt-toggle-show');
    //         }
    //         else {
    //             $this.addClass('mcdt-toggle-show');
    //         }
    // 	});
    // }

    /** 
     * ====================================================================
     * Phlebotomy Courses top content's Show Dates Script
     * ====================================================================
    */
    if (jQuery('#phlebotomy-course-top-content-wrap').length) {
        console.log('Clicked on See Dates');
        jQuery('#phlebotomy-course-top-content-wrap #see-dates-btn').click(function (e) {
            e.preventDefault();
            jQuery('#show-classroom-schedule-wrap').slideToggle('fast');
        });
    }


    /** 
     * ====================================================================
     * Single Course Sticky Menu 
     * ====================================================================
    */
    jQuery(window).scroll(function () {
        let $height_from_top = jQuery(window).scrollTop();
        let $parent_top_mobile = jQuery('.ast-woocommerce-container');
        let $top_fixed_bar_mobile = jQuery('.top-fixed-bar-mobile');
        let $parent_of_sticky_tag = jQuery('#la-single-links');
        let $sticky_tag = jQuery('#la-single-links ul');
        let $parentOfExamBoardTag = jQuery('aside#main-right #subscribe-us');
        let $theFaqTag = jQuery('#la-single-faq');
        let $rightExamBoardTag = jQuery('aside#main-right #exam-board');

        // if ($parent_of_sticky_tag.length) {
        //     let $element_offset_top = $parent_of_sticky_tag.offset().top;
        //     let $container_width = $parent_of_sticky_tag.innerWidth();

        //     if ($height_from_top > $element_offset_top) {
        //         $sticky_tag.addClass('sticky');
        //         $sticky_tag.css('width', $container_width);
        //     }
        //     else {
        //         $sticky_tag.removeClass('sticky');
        //     }
        // }

        // Sticky the top mobile section
        if ($parent_top_mobile.length) {
            let $board_element_offset_top = $parent_top_mobile.offset().top;
            let $board_container_width = $parent_top_mobile.innerWidth();

            if ($height_from_top > $board_element_offset_top) {
                $top_fixed_bar_mobile.addClass('sticky');
                $top_fixed_bar_mobile.css('width', $board_container_width);
            }
            else {
                $top_fixed_bar_mobile.removeClass('sticky');
            }
        }

        // Sticky the board section
        // if ($parentOfExamBoardTag.length) {
        //     let $board_element_offset_top = $parentOfExamBoardTag.offset().top + 150;
        //     let $board_container_width = $parentOfExamBoardTag.innerWidth();

        //     if ($height_from_top > $board_element_offset_top) {
        //         $rightExamBoardTag.addClass('sticky');
        //         $rightExamBoardTag.css('width', $board_container_width);

        //         let $theFaqTagOffsetTop = $theFaqTag.offset().top;
        //         if ($height_from_top > $theFaqTagOffsetTop) {
        //             $rightExamBoardTag.removeClass('sticky');
        //         }
        //     }
        //     else {
        //         $rightExamBoardTag.removeClass('sticky');
        //     }
        // }

        //Open accordion for single course page
        document.querySelectorAll('.open-accordion').forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                var target = document.querySelector(this.getAttribute('data-target'));
                if (target) {
                    var accordion = new bootstrap.Collapse(target, {
                        toggle: false
                    });
                    accordion.show();
                }
            });
        });

        // Active the nav on scroll
        var $sections = jQuery('#single-course-details, #la-accredited-by, #la-certification, #la-course-curriculum, #la-single-feedback, #la-single-faq');
        $sections.each(function (i, el) {
            var top = jQuery(el).offset().top - 10;
            var bottom = top + jQuery(el).height();
            var scroll = jQuery(window).scrollTop();
            var id = jQuery(el).attr('id');
            if (scroll > top && scroll < bottom) {
                jQuery('#la-single-links ul li.active').removeClass('active');
                jQuery('a[href="#' + id + '"]').parent().addClass('active');

            }
        })
        // });

        // jQuery("nav").on("click", "a", function (event) {

        //     event.preventDefault();
        //     var id = jQuery(this).attr('href'),
        //         top = jQuery(id).offset().top;
        //     jQuery('body,html').animate({ scrollTop: top }, 800);
        // });


    });

    // Add smooth scrolling for all the links in the navigation
    jQuery('#la-single-links a').on('click', function (event) {
        // Check if the clicked element has a hash (target section)
        if (this.hash !== "") {
            event.preventDefault();

            // Store hash (the target section's ID)
            var targetSection = this.hash;

            // Animate smooth scroll to the target section
            jQuery('html, body').animate({
                scrollTop: jQuery(targetSection).offset().top
            }, 300, function () {
                // Add the hash to the URL after the scroll is done
                window.location.hash = targetSection;
            });
        }
    });


    /** 
     * ====================================================================
     * Mobile Course Menu Dropdown Click
     * ====================================================================
    */
    // jQuery('#mobile-course-menu-dropdown-btn').on('click', function (event) {
    //     jQuery('#mobile-course-menu').toggleClass('show');
    // });


    /** 
     * ====================================================================
     * Exam Board Sidebar Button Click 
     * ====================================================================
    */
    // jQuery('#exam-board-options div.edexcel_product').hide();

    my_json();

    function my_json() {
        var product_id = parseInt(jQuery('#page_id_to_footer').val());
        var face_to_face = parseInt(jQuery('#face_to_face').val());
        var check_is_admin = parseInt(jQuery('#check_is_admin').val());
        if (!window.activeCoupon) {
            window.activeCoupon = { code: '', discountPercentage: 0, discountAmount: 0, discountType: '', isActive: false };
        }
        console.log(product_id);
        console.log(face_to_face);
        if (face_to_face == 1) {
            var file_path = '/wp-content/json/' + product_id + '.json';
            // console.log(file_path);
            jQuery.getJSON(file_path, function(data) {
                var top_date_variation_content = '';
                var modal_date_variation_content = '';
                var has_hide_content = false;
                // Apply coupon discount to prices if validated
                try {
                    var urlParams = new URLSearchParams(window.location.search);
                    var couponCode = urlParams.get('coupon');
                    if (couponCode && window.activeCoupon && window.activeCoupon.isActive && window.activeCoupon.code === couponCode) {
                        var sell_price_numeric = parseFloat(String(data.sell_price).replace(/[^0-9.]/g, ''));
                        var regular_price_numeric = parseFloat(String(data.regular_price).replace(/[^0-9.]/g, ''));
                        var discounted_sell_price = sell_price_numeric;

                        if (window.activeCoupon.discountType === 'percent' && window.activeCoupon.discountPercentage > 0) {
                            discounted_sell_price = sell_price_numeric * (1 - window.activeCoupon.discountPercentage / 100);
                        } else if (window.activeCoupon.discountType === 'fixed_product' || window.activeCoupon.discountType === 'fixed_cart') {
                            discounted_sell_price = Math.max(0, sell_price_numeric - (window.activeCoupon.discountAmount || 0));
                        }

                        if (discounted_sell_price < sell_price_numeric) {
                            data.sell_price = discounted_sell_price.toFixed(2);
                            if (regular_price_numeric <= discounted_sell_price) {
                                data.regular_price = sell_price_numeric.toFixed(2);
                            }
                        }
                    }
                } catch(e) {}

                // Calculate discount percentage based on regular vs sell
                var sell_price_per = parseFloat(String(data.sell_price).replace(/[^0-9.]/g, ''));
                var regular_price_per = parseFloat(String(data.regular_price).replace(/[^0-9.]/g, ''));
                var percentage = 0;
                if (regular_price_per > 0 && sell_price_per < regular_price_per) {
                    percentage = Math.round(((regular_price_per - sell_price_per) / regular_price_per) * 100);
                }
                var address = "";
                var time = "";
                var sell_price = "";
                var regular_price = "";
                var location = data.location;
                let serial = 0;
                jQuery.each(data.items, function(index, item) {
                    // Date validation FIRST to prevent empty divs
                    let cleanDate = item.date.replace(/(\d+)(st|nd|rd|th)/, '$1');
                    let dateObj = new Date(cleanDate);
                    let now = new Date();
                    if(dateObj < now){
                        return true; // Skip past dates entirely
                    }

                    serial++;
                    // Build classroom schedule for top_date_variation_content
                    if(check_is_admin == 1){
                        location = data.location+" Stock="+item.real;
                    }
                    if(serial > 7){
                        top_date_variation_content += '<div style="display: none;" id="show-classroom-schedule" class="single-booking-row float-row">';
                    }else{
                        top_date_variation_content += '<div id="show-classroom-schedule" class="single-booking-row float-row">';
                    }
                    if (item.hide == 1) has_hide_content = true;
                    if(item.address && item.address.trim() !== ""){
                        address = item.address;
                    }else{
                        address = data.address;
                    }
                    if(item.time && item.time.trim() !== ""){
                        time = item.time;
                    }else{
                        time = data.time;
                    }
                    if (data.sell_price.includes("£")) {
                        sell_price = data.sell_price;
                    }else{
                        sell_price = '£' + data.sell_price;
                    }
                    if (data.regular_price.includes("£")) {
                        regular_price = data.regular_price;
                    }else{
                        regular_price = '£' + data.regular_price;
                    }

                    top_date_variation_content += `
                        <div class="single-booking-left">
                            <span>${location}</span>
                            <p>${address}</p>
                            <div><i class="fa fa-calendar"></i> ${item.date}</div>
                            <div><i class="fa fa-clock-o"></i> ${time}</div>
                            <div style="color: red">
                                <i class="fa fa-fire" aria-hidden="true"></i> 
                                ${item.seat < 1 ? 'Sorry! No seat left' : 'Hurry! Only ' + item.seat + ' seats left'}
                            </div>
                        </div>
                        <div class="single-booking-right">
                            <button type="button" data-variation-id="${item.var}" data-quantity="1" 
                                    class="btn ${item.quota == 1 ? 'full-booked-phlebotomy-item' : 'custom-add-to-cart'}">
                                ${item.quota == 1 ? 'FULLY BOOKED' : 'BOOK NOW'}
                            </button>
                        </div>
                    </div>`;
        
                    // Build modal date variation content
                    modal_date_variation_content += `
                        <div id="show-classroom-schedule" class="single-booking-row float-row">
                            <div class="single-booking-left" style="padding-left: 0">
                                <span>${location}</span>
                                <p>${address}</p>
                                <div><i class="fa fa-calendar"></i> ${item.date}</div>
                                <div><i class="fa fa-clock-o"></i> ${time}</div>
                                <div style="color: red">
                                    <i class="fa fa-fire" aria-hidden="true"></i> 
                                    ${item.seat < 1 ? 'Sorry! No seat left' : 'Hurry! Only ' + item.seat + ' seats left'}
                                </div>
                            </div>
                            <div class="single-booking-right">
                                ${percentage > 0 ? `<div style="text-align: right;color: #AF1F47;font-size: 16px;font-weight: 700;">
                                    <img src="/wp-content/uploads/2022/12/discount.webp" alt="discount" title="discount" width="22">
                                    <span>${percentage}% Off</span>
                                </div>` : ''}
                                <div class="float-row" style="margin: 13px 0 10px;">
                                    <span class="float-left" style="font-size: 20px; font-weight: 700;">
                                        <b>${sell_price}</b>
                                        <span style="font-weight: normal;font-size: 14px;padding-left: 3px;">(Excl.VAT)</span>
                                    </span>
                                    <span class="float-right text-right" style="font-size: 18px;">
                                        <del>${regular_price}</del>
                                    </span>
                                </div>
                                <button type="button" data-variation-id="${item.var}" data-quantity="1" 
                                        class="btn ${item.quota == 1 ? 'full-booked-phlebotomy-item' : 'custom-add-to-cart'}">
                                    ${item.quota == 1 ? 'FULLY BOOKED' : 'BOOK NOW'}
                                </button>
                            </div>
                        </div>`;
                });

                 //if(has_hide_content === true) {
                    top_date_variation_content += `<div class="single-booking-row float-row d-flex justify-content-between variation-dates">
                    <div class="single-booking-right d-flex align-items-center">
                        <a href="javascript:void(0)" data-item="7" data-max="` + serial + `" id="display_all_variation" class="single-booking-btn">See More Dates</a>
                    </div>
                </div>`

                top_date_variation_content +=`<div class="single-booking-row float-row d-flex justify-content-between variation-dates">
                    <div class="single-booking-right d-flex align-items-center">
                        <a style="display:none" href="javascript:void(0)" id="hide_some_variation" class="single-booking-btn">See Less Dates</a>
                    </div>
                </div>`;
                //}
        
                // Append the content to the corresponding elements
                jQuery("#show-classroom-schedule-wrap").html(top_date_variation_content);
                jQuery("#enquiryBookingModal > div > div.single-booking-option").html(modal_date_variation_content);
            });
        }else{
            // console.log('Product ID is not in FACE_2_FACE array');
        }
    }

    jQuery(function($) {
        const isBigDevice = window.matchMedia('(min-width: 768px)');

        // Big Device Functionality
        function initBigDevice() {
            teardownSmallDevice();

            let ncef_bn = jQuery('#exam-board-options > div.exam-board-single-option.ncef_product > label.checkbox-container');
            setTimeout( function() {
                ncef_bn.click();
            }, 2000);
            
            $('#exam-board-btns button').off('click.big').on('click.big', function() {
                $('#exam-board-btns button').removeClass('active');
                const $this = $(this).addClass('active');
                const isEdexcel = $this.is('#edexcel-exam-board');
                const edexcelBtn = $('#exam-board-options .edexcel_product label.checkbox-container');
                const ncefBtn = $('#exam-board-options .ncef_product label.checkbox-container');
    
                if(isEdexcel) {
                    edexcelBtn.trigger('click');
                    setTimeout(() => edexcelBtn.trigger('click'), 500);
                    $('.ncef_product').hide();
                    $('.edexcel_product').show();
                } else {
                    ncefBtn.trigger('click');
                    setTimeout(() => ncefBtn.trigger('click'), 500);
                    $('.edexcel_product').hide();
                    $('.ncef_product').show();
                }
            });
        }
    
        // Small Device Functionality
        function initSmallDevice() {
            teardownBigDevice();
            
            const $btns = $('#exam-board-btns button');
            const $options = $('#exam-board-options');
            const $edexcel = $options.find('.edexcel_product');
            const $ncef = $options.find('.ncef_product');
            let interacted = false;
    
            function updateSelection(target) {
                $btns.removeClass('active');
                target.addClass('active');
                const showEdexcel = target.is('#edexcel-exam-board');
                
                $edexcel.hide().find('input').prop('checked', false);
                $ncef.hide().find('input').prop('checked', false);
                
                const $activePanel = showEdexcel ? $edexcel : $ncef;
                $activePanel.show();
                
                const $radio = $activePanel.find('input:last');
                setTimeout(() => {
                    $radio.prop('checked', true).trigger('change');
                }, 100);
            }
    
            function resetState() {
                interacted = false;
                $btns.removeClass('active');
                $ncef.show();
                $edexcel.hide();
                $ncef.find('input:last').prop('checked', true).trigger('change');
                $('#ncfe-exam-board').addClass('active');
            }
    
            $btns.off('click.small').on('click.small', function() {
                interacted = true;
                updateSelection($(this));
            });
    
            $(window).off('resize.small').on('resize.small', function() {
                if(!interacted) resetState();
            });
    
            $options.find('input[type="radio"]').off('change.small').on('change.small', () => {
                interacted = true;
            });
    
            resetState();
        }
    
        function teardownBigDevice() {
            $('#exam-board-btns button').off('click.big');
        }
    
        function teardownSmallDevice() {
            $('#exam-board-btns button').off('click.small');
            $(window).off('resize.small');
            $('#exam-board-options input').off('change.small');
        }
    
        function handleDeviceChange() {
            if(isBigDevice.matches) {
                initBigDevice();
            } else {
                initSmallDevice();
            }
        }
    
        handleDeviceChange();
        
        isBigDevice.addListener(handleDeviceChange);
    });

    /** 
     * ====================================================================
     * Add smooth scrolling to all links 
     * ====================================================================
    */
    // jQuery("a").on('click', function (event) {

    //     // Make sure this.hash has a value before overriding default behavior
    //     if (this.hash !== "") {
    //         // Prevent default anchor click behavior
    //         event.preventDefault();

    //         // Store hash
    //         var hash = this.hash;

    //         // Using jQuery's animate() method to add smooth page scroll
    //         // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    //         jQuery('html, body').animate({
    //             scrollTop: jQuery(hash).offset().top
    //         }, 200, function () {

    //             // Add hash (#) to URL when done scrolling (default click behavior)
    //             window.location.hash = hash;
    //         });
    //     } // End if
    // });


    /** 
     * ====================================================================
     * Enquery Modal Scripts
     * ====================================================================
    */
    let bslEnqueryModalEl = jQuery('#la-bsl-enquery-modal');
    let gcseLocationsModalEl = jQuery('#la-gcse-venues-modal');
    jQuery('#la-bsl-enquery-modal span.close, #la-gcse-venues-modal span.close').on('click', function (event) {
        bslEnqueryModalEl.hide();
        gcseLocationsModalEl.hide();
        console.log('all events close button clicked');
    });
    /*
    jQuery('.la-bsl-book-button, p.la-gcse-all-venues a').on('click', function (event) {
        event.preventDefault();
        bslEnqueryModalEl.show();
        gcseLocationsModalEl.css({ 'display': 'block' });
        console.log('all events button click', gcseLocationsModalEl);
    });
    */

    // Close the modal while click anywhere
    window.onclick = function (event) {
        // console.log(event.currentTarget);
        if (event.target == bslEnqueryModalEl) {
            bslEnqueryModalEl.hide();
        }
    }

    /** 
     * ====================================================================
     * GCSE Enquery Modal Scripts
     * ====================================================================
    */
    let gcseEnqueryModalEl = jQuery('#gcse-inquery-modal');
    jQuery('#gcse-inquery-modal span.close').on('click', function (event) {
        gcseEnqueryModalEl.hide();
    });
    jQuery('.la-gcse-top-post-content a.gcse-enquery-btn').on('click', function (event) {
        gcseEnqueryModalEl.show();
    });

    /** 
     * ====================================================================
     * Phlebotomy Modal Scripts
     * ====================================================================
    */
    let phlebotomyModalEl = jQuery('.phlebotomy-course-top-content-modal');
    let phlebotomyModalLondonEl = jQuery('body.page-id-354284 #enquiryBookingModal');
    let phlebotomyEnqueryModalEl = jQuery('#enquiryModal');
    jQuery('#la-phone-phlebotomy-enquiry-booking-modal, #enquiry-booking-modal, #phlebotomy-modal-enroll-btn').on('click', function (event) {
        event.preventDefault();
        phlebotomyModalLondonEl.show();
        phlebotomyModalEl.show();
    });
    jQuery('#enquiryBookingModal.phlebotomy-course-top-content-modal .modal-content .close').on('click', function (event) {
        event.preventDefault();
        phlebotomyModalLondonEl.hide();
        phlebotomyModalEl.hide();
    });
    // Enquery Modal
    jQuery('#phlebotomy-course-top-content-wrap #enquire-now-btn').on('click', function (event) {
        event.preventDefault();
        phlebotomyEnqueryModalEl.show();
    });
    jQuery('#phlebotomy-course-top-content-wrap #enquiryModal .close').on('click', function (event) {
        event.preventDefault();
        phlebotomyEnqueryModalEl.hide();
    });

    /** 
     * ====================================================================
     * BSL Enquiry Modal Scripts
     * ====================================================================
    */
    let bslEnquiryBtnEl = jQuery('body.single-product a#bsl-enquiry-btn');
    let bslEnquiryBtnMobileEl = jQuery('body.single-product .bottom-fixed-bsl-cta-mobile');
    let bslEnrolMobileBtnEl = jQuery('body.single-product #bsl-modal-enroll-btn');
    let bslEnquiryCloseBtnEl = jQuery('body.single-product #bsl-inquery-modal.modal .close');
    let bslEnquiryModalEl = jQuery('body.single-product #bsl-inquery-modal.modal');
    bslEnquiryBtnEl.on('click', function (event) {
        event.preventDefault();
        bslEnquiryModalEl.show();
    });
    bslEnquiryCloseBtnEl.on('click', function (event) {
        event.preventDefault();
        bslEnquiryModalEl.hide();
    });
    // Mobile Device
    bslEnrolMobileBtnEl.on('click', function (event) {
        event.preventDefault();
        bslEnquiryModalEl.show();
    });

    /**
     * For additional Landing pages Math-English-Digital cards swipe
     */
    jQuery('.btn-area > .exam-btn').click(function(){
        jQuery('.btn-area > .exam-btn').removeClass('active');
        jQuery(this).addClass('active');
        let name = jQuery(this).data('course');
        let root = 'section.exam-info > div.fsc-card-area > div.exam-cards > div';
        jQuery(root).animate({
            opacity: 0
        }, 200, function(){
            jQuery(root).hide();
            jQuery(root+'.'+name).show();
            jQuery(root+'.'+name).animate({
                opacity: 1
            }, 80);
        });
    })

    /**
     * For send mail function
     */
    jQuery('#send-mail-btn').click(function () {
        let name = jQuery('#send-mail-name').val();
        let phone = jQuery('#send-mail-phone').val();
        let mail = jQuery('#send-mail-mail').val();
        let link = window.location.href;
        jQuery.ajax({
            url: wc_add_to_cart_params.ajax_url,
            type: 'POST',
            data: {
                'action': 'send_wp_mail_query',
                'name': name,
                'mail': mail,
                'phone': phone,
                'url': link,
            },
            timeout: 10000,
            beforeSend: function (response) {
                console.log('before send');
            },
            complete: function (response) {
                console.log('Send Mail completed');
                jQuery('#send-mail-name').val('');
                jQuery('#send-mail-phone').val('');
                jQuery('#send-mail-mail').val('');
                jQuery('#send-mail-info').show();
                setTimeout(function () {
                    jQuery('#send-mail-info').hide();
                }, 10000, function(){
                    jQuery('#enquiryModal').hide();
                    //jQuery('#enquiryBookingModal').hide();
                });
            },
            success: function (result) {
                console.log(result);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    });

    /** 
     * ====================================================================
     * Coupon URL handling for cart redirects
     * - Appends coupon from URL to Book Now/add-to-cart actions
     * ====================================================================
    */
    // Handle Book Now buttons generated in schedule (class: .custom-add-to-cart)
    jQuery(document).on('click', '.custom-add-to-cart', function (e) {
        e.preventDefault();

        var $button = jQuery(this);
        var variationId = $button.data('variation-id');
        var quantity = $button.data('quantity') || 1;
        var productId = jQuery('#page_id_to_footer').val();

        // Get coupon code from URL
        var urlParams = new URLSearchParams(window.location.search);
        var couponCode = urlParams.get('coupon');

        // Build cart URL with product/variation
        var cartUrl = '/cart/?add-to-cart=' + (variationId || productId);

        // Add quantity if provided
        if (quantity > 1) {
            cartUrl += '&quantity=' + quantity;
        }

        // Append coupon parameter if present in URL
        if (couponCode) {
            if (window.activeCoupon && window.activeCoupon.isActive && window.activeCoupon.code === couponCode) {
                cartUrl += '&coupon_code=' + encodeURIComponent(couponCode);
            } else {
                // Fallback: let server validate coupon from URL
                cartUrl += '&coupon=' + encodeURIComponent(couponCode);
            }
        }

        // Provide quick feedback then redirect
        $button.text('Adding to Cart...');
        $button.prop('disabled', true);
        window.location.href = cartUrl;
    });

    // Enhance direct cart links by appending coupon from URL when missing
    jQuery(document).on(
        'click',
        "a[href*='/cart?add-to-cart='], .single-booking-btn[href*='/cart?add-to-cart='], .red-button[href*='/cart?add-to-cart=']",
        function (e) {
            var $link = jQuery(this);
            var href = $link.attr('href');
            var urlParams = new URLSearchParams(window.location.search);
            var couponCode = urlParams.get('coupon');

            // Add coupon if available and not already present in the link
            if (couponCode && href && href.indexOf('coupon') === -1) {
                e.preventDefault();

                // Use validated coupon_code when possible, otherwise pass coupon for server-side validation
                var couponParam = '&coupon_code=';
                if (!(window.activeCoupon && window.activeCoupon.isActive && window.activeCoupon.code === couponCode)) {
                    couponParam = '&coupon=';
                }

                var newHref = href + couponParam + encodeURIComponent(couponCode);
                window.location.href = newHref;
            }
        }
    );

    /**
     * Update price display/notifications if coupon is active
     */
    function la_update_coupon_prices() {
        if (jQuery('.coupon-active-notice').length) {
            console.log('PHP coupon notice found - skipping JavaScript coupon notices');
            return;
        }
        var urlParams = new URLSearchParams(window.location.search);
        var couponCode = urlParams.get('coupon');
        if (couponCode && window.activeCoupon && window.activeCoupon.isActive && window.activeCoupon.code === couponCode) {
            var notificationHtml = '<div class="coupon-applied-notice" style="background: #28a745; color: white; padding: 8px; border-radius: 4px; font-size: 12px; margin-bottom: 10px; text-align: center;"><i class="fa fa-check"></i> Coupon "' + couponCode + '" applied!</div>';

            var $courseFeeInfo = jQuery('#course-fee-info');
            if ($courseFeeInfo.length && !$courseFeeInfo.find('.coupon-applied-notice').length) {
                $courseFeeInfo.prepend(notificationHtml);
                setTimeout(function(){
                    var $added = $courseFeeInfo.find('.coupon-applied-notice');
                    if ($added.length) {
                        $added.css({ display: 'block', visibility: 'visible', opacity: '1', 'z-index': '9999', position: 'relative' });
                    }
                }, 100);
            }

            var $mobileFeeInfo = jQuery('#mobile-course-fee-info');
            if ($mobileFeeInfo.length && !$mobileFeeInfo.find('.coupon-applied-notice').length) {
                $mobileFeeInfo.prepend(notificationHtml);
            }

            var $phlebotomySidebar = jQuery('#phlebotomy-sidebar');
            if ($phlebotomySidebar.length && !$phlebotomySidebar.find('.coupon-applied-notice').length) {
                $phlebotomySidebar.prepend(notificationHtml);
            }

            var $mainRight = jQuery('aside#main-right');
            if ($mainRight.length && !$mainRight.find('.coupon-applied-notice').length && jQuery(window).width() > 768) {
                $mainRight.prepend(notificationHtml);
            }

            var $sidebar = jQuery('.sidebar, .widget-area');
            if ($sidebar.length && !$sidebar.find('.coupon-applied-notice').length && jQuery(window).width() > 768) {
                $sidebar.first().prepend(notificationHtml);
            }

            var $mainContent = jQuery('.ast-woocommerce-container');
            if ($mainContent.length && !$mainContent.find('.coupon-applied-notice').length && !$courseFeeInfo.length && !$mobileFeeInfo.length && !$phlebotomySidebar.length) {
                $mainContent.prepend(notificationHtml);
            }

            if (!jQuery('.coupon-applied-notice').length) {
                jQuery('body').prepend(notificationHtml);
            }

            if ($courseFeeInfo.length && !jQuery('.coupon-applied-notice:visible').length) {
                var alternativeHtml = '<div class="coupon-applied-notice-alt" style="background: #28a745; color: white; padding: 10px; border-radius: 4px; font-size: 14px; margin: 10px 0; text-align: center; display: block !important; visibility: visible !important; z-index: 9999 !important;"><i class="fa fa-check"></i> Coupon "' + couponCode + '" applied! 10% OFF</div>';
                $courseFeeInfo.before(alternativeHtml);
            }

            if (jQuery('.coupon-active-notice').length) {
                console.log('Coupon notice found from PHP - coupon is valid');
            } else {
                console.log('No coupon notice from PHP - coupon may not be valid for this product');
            }
        }
    }

    // Attempt once immediately
    la_update_coupon_prices();

    // Clean up coupon notices to prevent duplicates
    function cleanupCouponNotices() {
        if (jQuery('.coupon-active-notice').length) {
            jQuery('.coupon-applied-notice, .coupon-applied-notice-alt').remove();
            return;
        }
        jQuery('#course-fee .coupon-applied-notice').remove();
        var $allNotices = jQuery('.coupon-applied-notice, .coupon-active-notice');
        if ($allNotices.length > 2) {
            $allNotices.slice(2).remove();
        }
    }
    setTimeout(function(){ la_update_coupon_prices(); cleanupCouponNotices(); }, 500);

    // Backup attempt if no visible notice after a delay
    setTimeout(function(){
        var urlParams = new URLSearchParams(window.location.search);
        var couponCode = urlParams.get('coupon');
        if (couponCode && window.activeCoupon && window.activeCoupon.isActive && window.activeCoupon.code === couponCode && jQuery('.coupon-applied-notice:visible, .coupon-applied-notice-alt:visible').length === 0) {
            var backupHtml = '<div class="coupon-backup-notice" style="background: #28a745; color: white; padding: 15px; border-radius: 4px; font-size: 16px; margin: 10px; text-align: center; position: fixed; top: 10px; left: 50%; transform: translateX(-50%); z-index: 99999; box-shadow: 0 4px 8px rgba(0,0,0,0.3);"><i class=\"fa fa-check\"></i> Coupon "' + couponCode + '" Applied! 10% OFF</div>';
            jQuery('body').prepend(backupHtml);
            setTimeout(function(){ jQuery('.coupon-backup-notice').fadeOut(); }, 5000);
        }
    }, 2000);

    // On resize, re-check notification presence
    jQuery(window).on('resize', function(){
        var urlParams = new URLSearchParams(window.location.search);
        var couponCode = urlParams.get('coupon');
        if (couponCode && window.activeCoupon && window.activeCoupon.isActive && window.activeCoupon.code === couponCode) {
            clearTimeout(window.couponResizeTimeout);
            window.couponResizeTimeout = setTimeout(function(){
                if (jQuery('.coupon-applied-notice:visible, .coupon-applied-notice-alt:visible').length === 0) {
                    la_update_coupon_prices();
                }
            }, 300);
        }
    });

    // Inject coupon-related CSS if any coupon notice exists (JS or PHP)
    if (jQuery('.coupon-applied-notice').length || jQuery('.coupon-active-notice').length) {
        var couponStyles = '\n      <style>\n        .coupon-applied-notice {\n          background: #28a745;\n          color: white;\n          padding: 5px 10px;\n          border-radius: 3px;\n          font-size: 12px;\n          margin-bottom: 5px;\n          text-align: center;\n        }\n        .coupon-active-notice {\n          background: linear-gradient(135deg, #28a745, #20c997);\n          color: white;\n          padding: 15px;\n          border-radius: 8px;\n          margin: 15px 0;\n          text-align: center;\n          box-shadow: 0 4px 6px rgba(0,0,0,0.1);\n          animation: couponPulse 2s infinite;\n        }\n        @keyframes couponPulse {\n          0%, 100% { transform: scale(1); }\n          50% { transform: scale(1.02); }\n        }\n        .coupon-discount-badge {\n          background: #dc3545;\n          color: white;\n          padding: 2px 8px;\n          border-radius: 12px;\n          font-size: 11px;\n          font-weight: bold;\n          margin-left: 5px;\n        }\n      </style>\n    ';
        jQuery('head').append(couponStyles);
    }

    // Optional debug/test helpers (enabled when debug=1 and coupon_ajax_object exists)
    if (typeof coupon_ajax_object !== 'undefined' && window.location.search.includes('debug=1')) {
        jQuery('body').append('<button id="test-ajax-btn" style="position: fixed; top: 10px; right: 10px; z-index: 9999; background: red; color: white; padding: 10px;">Test AJAX</button>' +
            '<button id="debug-coupon-btn" style="position: fixed; top: 60px; right: 10px; z-index: 9999; background: blue; color: white; padding: 10px;">Debug Coupon</button>' +
            '<button id="simple-cart-btn" style="position: fixed; top: 110px; right: 10px; z-index: 9999; background: green; color: white; padding: 10px;">Simple Cart</button>');

        jQuery('#test-ajax-btn').click(function(){
            jQuery.ajax({ url: coupon_ajax_object.ajax_url, type: 'POST', data: { action: 'test_coupon_ajax' },
                success: function(resp){ console.log('Test AJAX Success:', resp); alert('AJAX Test: ' + resp.data); },
                error: function(xhr, status, error){ console.log('Test AJAX Error:', error); alert('AJAX Test Failed: ' + error); }
            });
        });

        jQuery('#debug-coupon-btn').click(function(){
            jQuery.ajax({ url: coupon_ajax_object.ajax_url, type: 'POST', data: { action: 'debug_coupon_status' },
                success: function(resp){ console.log('Debug Coupon Success:', resp); alert('Coupon Debug: ' + JSON.stringify(resp.data, null, 2)); },
                error: function(xhr, status, error){ console.log('Debug Coupon Error:', error); alert('Debug Failed: ' + error); }
            });
        });

        jQuery('#simple-cart-btn').click(function(){
            var productId = jQuery('#page_id_to_footer').val();
            var variationId = jQuery('.custom-add-to-cart').first().data('variation-id');
            var urlParams = new URLSearchParams(window.location.search);
            var couponCode = urlParams.get('coupon');
            var cartUrl = '/cart/?add-to-cart=' + (variationId || productId);
            if (couponCode && window.activeCoupon && window.activeCoupon.isActive && window.activeCoupon.code === couponCode) {
                cartUrl += '&coupon_code=' + encodeURIComponent(couponCode);
                alert('Redirecting to cart with validated coupon: ' + couponCode);
            } else if (couponCode) {
                alert('Coupon in URL but not validated: ' + couponCode + ' - proceeding without coupon');
            } else {
                alert('No coupon in URL - proceeding to cart');
            }
            console.log('Simple Cart Test - redirecting to:', cartUrl);
            window.location.href = cartUrl;
        });
    }

    // Expose debugging helpers
    window.debugCouponStatus = function(){
        var urlParams = new URLSearchParams(window.location.search);
        var couponCode = urlParams.get('coupon');
        return { urlCoupon: couponCode, activeCoupon: window.activeCoupon, isValidated: (couponCode && window.activeCoupon && window.activeCoupon.isActive && window.activeCoupon.code === couponCode) };
    };
    window.testCartUrl = function(productId, variationId, couponCode){
        productId = productId || jQuery('#page_id_to_footer').val();
        variationId = variationId || jQuery('.custom-add-to-cart').first().data('variation-id');
        couponCode = couponCode || new URLSearchParams(window.location.search).get('coupon');
        var cartUrl = '/cart/?add-to-cart=' + (variationId || productId);
        if (couponCode && window.activeCoupon && window.activeCoupon.isActive && window.activeCoupon.code === couponCode) {
            cartUrl += '&coupon_code=' + encodeURIComponent(couponCode);
        }
        return cartUrl;
    };
    window.testBookNow = function(couponCode){
        couponCode = couponCode || new URLSearchParams(window.location.search).get('coupon');
        var productId = jQuery('#page_id_to_footer').val();
        var variationId = jQuery('.custom-add-to-cart').first().data('variation-id');
        var cartUrl = '/cart/?add-to-cart=' + (variationId || productId);
        if (couponCode && window.activeCoupon && window.activeCoupon.isActive && window.activeCoupon.code === couponCode) {
            cartUrl += '&coupon_code=' + encodeURIComponent(couponCode);
        }
        return cartUrl;
    };
    window.debugCouponAjax = function(){
        jQuery.ajax({ url: '/wp-admin/admin-ajax.php', type: 'POST', data: { action: 'comprehensive_coupon_debug' },
            success: function(response){ console.log('=== COMPREHENSIVE COUPON DEBUG ==='); console.log(response.data); console.log('=================================='); return response.data; },
            error: function(xhr, status, error){ console.log('Debug AJAX Error:', error); }
        });
    };
    window.testCouponApplication = function(){
        var urlParams = new URLSearchParams(window.location.search);
        var couponCode = urlParams.get('coupon');
        var productId = jQuery('#page_id_to_footer').val();
        var variationId = jQuery('.custom-add-to-cart').first().data('variation-id');
        var cartUrl = '/cart/?add-to-cart=' + (variationId || productId);
        if (couponCode && window.activeCoupon && window.activeCoupon.isActive && window.activeCoupon.code === couponCode) {
            cartUrl += '&coupon_code=' + encodeURIComponent(couponCode);
            console.log('✅ Coupon will be added to cart URL');
        } else {
            console.log('❌ Coupon will NOT be added to cart URL');
            console.log('Validation details:', { hasCouponCode: !!couponCode, hasActiveCoupon: !!window.activeCoupon, isActive: window.activeCoupon ? window.activeCoupon.isActive : false, codesMatch: couponCode === (window.activeCoupon ? window.activeCoupon.code : null) });
        }
        console.log('Generated cart URL:', cartUrl);
        return { urlCoupon: couponCode, activeCoupon: window.activeCoupon, cartUrl: cartUrl, willApplyCoupon: cartUrl.includes('coupon_code=') };
    };
    window.checkRealtimeCouponStatus = function(){
        jQuery.ajax({ url: '/wp-admin/admin-ajax.php', type: 'POST', data: { action: 'realtime_coupon_status' },
            success: function(response){ console.log('=== REAL-TIME COUPON STATUS ==='); console.log(response.data); console.log('==============================='); return response.data; },
            error: function(xhr, status, error){ console.log('Real-time status check error:', error); }
        });
    };

});



document.addEventListener("DOMContentLoaded", function () {
    // Function to get current UK time
    function getCurrentUKTime() {
        var currentTime = new Date();
        var offset = currentTime.getTimezoneOffset() / 60;
        var ukTime = new Date(currentTime.getTime() + (offset + 1) * 60 * 60 * 1000); // UK is UTC+1 in winter

        return ukTime;
    }

    var currentUKTime = getCurrentUKTime();
    var currentHour = currentUKTime.getHours();



    // Check if it's a single product page and the UK time is within the range (8 AM to 5 PM)
    if (document.getElementById('linesopen-outer') && currentHour >= 8 && currentHour < 18) {
        document.getElementById('linesopen-outer').style.display = 'block';
    }
});
