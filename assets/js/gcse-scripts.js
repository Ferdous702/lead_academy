(function ($) {
    $(document).ready(function () {
        console.log('Consoling from gcse js');

        let foundationBtn = $('#main-right #gcse-foundation-option-action');
        let higherBtn = $('#main-right #gcse-higher-option-action');
        let foundationSingleItem = $('#main-right .gcse-right-price-selection-single.foundation_tier');
        let higherSingleItem = $('.gcse-right-price-selection-single.higher_tier');
        let courseTotalEl = $('.gcse-total-course-fees span.gcse-course-dynamic-fee');
        let monthlyVarId = $('.gcse-right-price-selection-single.foundation_tier.monthly_pack').find('input[name=gcse-course-option]').data('var-id');
        let monthlyVarPrice = $('.gcse-right-price-selection-single.foundation_tier.monthly_pack').find('input[name=gcse-course-option]').val();
        let monthlyPayItem = $('.gcse-right-price-selection-single.pay-monthly').find('input[name=gcse-payment-option]');
        let upfrontPayItem = $('.gcse-right-price-selection-single.pay-upfront').find('input[name=gcse-payment-option]');
        let includeFeesCheckboxEl = $('#main-right .gcse-include-fees-checkbox input[name=gcse-include-exam-fees');

        function updateCheckboxValuesByOrder(order) {
            let targetItemEl = '';
            switch (order) {
                case 3:
                    targetItemEl = $('.gcse-right-price-selection-single.foundation_tier:nth-child(3n)');
                    break;
                case 4:
                    targetItemEl = $('.gcse-right-price-selection-single.foundation_tier:nth-child(4n)');
                    break;
                case 7:
                    targetItemEl = $('.gcse-right-price-selection-single.higher_tier:nth-child(7n)');
                    break;
                default:
                    targetItemEl = $('.gcse-right-price-selection-single.higher_tier:nth-child(8n)');
            }
            let targetItemPrice = targetItemEl.find('input[name=gcse-course-option]').val();
            let targetItemVarId = targetItemEl.find('input[name=gcse-course-option]').data('var-id');
            let includeFeesCheckboxEl = $('.gcse-include-fees-checkbox input[name=gcse-include-exam-fees');
            includeFeesCheckboxEl.val(targetItemPrice);
            includeFeesCheckboxEl.attr('data-var-id', targetItemVarId);
            console.log(targetItemPrice, targetItemVarId);
            console.log(order);
        }

        updateCheckboxValuesByOrder(3);
        // Set the Variation price and id
        // monthlyPayItem.val(monthlyVarPrice);
        monthlyPayItem.attr('data-var-id', '');

        // console.log('foundation btn', foundationBtn.length);
        // foundationBtn.each(function (index, item) {
        //     console.log(item);
        // });
        foundationBtn.on('click', function () {
            console.log('Foundation btn', monthlyVarId, monthlyVarPrice);
            $('.gcse-right-price-selection-single.foundation_tier:first-child(), .gcse-right-price-selection-single.foundation_tier:nth-child(2n)').show();
            $('.gcse-right-price-selection-single.foundation_tier:nth-child(3n), .gcse-right-price-selection-single.foundation_tier:nth-child(4n)').hide();
            $('.gcse-right-price-selection-single.higher_tier:not(monthly_pack)').hide();
            // Set the Variation price and id
            monthlyPayItem.val(monthlyVarPrice);
            monthlyPayItem.data('var-id', monthlyVarId);
            // updateCheckboxValuesByOrder(3);
        });
        higherBtn.on('click', function () {
            $('.gcse-right-price-selection-single.higher_tier:not(monthly_pack)').show();
            $('.gcse-right-price-selection-single.higher_tier:nth-child(7n), .gcse-right-price-selection-single.higher_tier:nth-child(8n)').hide();
            $('.gcse-right-price-selection-single.foundation_tier:not(monthly_pack)').hide();
            console.log('Higher btn');

            // Set the higher tier variation price and id
            monthlyHigherVarId = $('.gcse-right-price-selection-single.higher_tier.monthly_pack').find('input[name=gcse-course-option]').data('var-id');
            monthlyHigherVarPrice = $('.gcse-right-price-selection-single.higher_tier.monthly_pack').find('input[name=gcse-course-option]').val();
            // Set the Variation price and id
            monthlyPayItem.val(monthlyHigherVarPrice);
            monthlyPayItem.data('var-id', monthlyHigherVarId);
            // updateCheckboxValuesByOrder(5);
        });

        let singleItemPrice = 129;
        let singleItemVar = 0;
        let gcseCourseId = 0;
        let gcseSecVarId = '';
        foundationSingleItem.on('change', function () {
            let courseInputEl = $(this).find('input[name=gcse-course-option]');
            courseTotalEl.html(courseInputEl.val());
            singleItemPrice = parseInt(courseInputEl.val());
            singleItemVar = courseInputEl.data('var-id');
            monthlyPayItem.prop('checked', false);
            let theMonthlyVal = $(this).next().find('input[name=gcse-course-option]');
            console.log(theMonthlyVal.val(), theMonthlyVal.data('var-id'));
            // Set the Variation price and id
            monthlyPayItem.val(theMonthlyVal.val());
            monthlyPayItem.data('var-id', theMonthlyVal.data('var-id'));

            let currentVarItem = $(this).find('label.checkbox-container').data('current-item');
            updateCheckboxValuesByOrder(currentVarItem + 3);
            console.log(currentVarItem);

            if (includeFeesCheckboxEl.is(':checked')) {
                singleItemVar = includeFeesCheckboxEl.data('var-id');
            }
        });
        higherSingleItem.on('change', function () {
            let courseInputEl = $(this).find('input[name=gcse-course-option]');
            courseTotalEl.html(courseInputEl.val());
            singleItemPrice = parseInt(courseInputEl.val());
            singleItemVar = courseInputEl.data('var-id');
            monthlyPayItem.prop('checked', false);
            let theMonthlyVal = $(this).next().find('input[name=gcse-course-option]');
            console.log(theMonthlyVal.val(), theMonthlyVal.data('var-id'));
            // Set the Variation price and id
            monthlyPayItem.val(theMonthlyVal.val());
            monthlyPayItem.data('var-id', theMonthlyVal.data('var-id'));

            let currentVarItem = $(this).find('label.checkbox-container').data('current-item');
            updateCheckboxValuesByOrder(currentVarItem + 3);
            console.log(currentVarItem);

            if (includeFeesCheckboxEl.is(':checked')) {
                singleItemVar = includeFeesCheckboxEl.data('var-id');
            }
        });
        monthlyPayItem.on('change', function () {
            courseTotalEl.html($(this).val() + '/month + (VAT)');
            gcseSecVarId = $(this).data('var-id');
        });
        upfrontPayItem.on('change', function () {
            courseTotalEl.html(singleItemPrice + ' + (VAT)');
            gcseSecVarId = '';
        });

        includeFeesCheckboxEl.on('change', function () {
            // if (foundationBtn.find('input[name=gcse-study-option]').is(':checked')) {
            //     console.log('Foundation btn checked');
            //     let foundationSingleItemInput = foundationSingleItem.find('input[name=gcse-course-option]');
            //     foundationSingleItemInput.each(function (index, item) {
            //         if ($(item).is(':checked')) {
            //             console.log($(item).data('var-id'));
            //         }
            //     });
            // } else {
            //     console.log('Higher btn checked');
            // }

            if ($(this).is(':checked')) {
                console.log('Checked');
                singleItemVar = $(this).data('var-id');
            } else {
                let actualSelectedVarId = '';
                console.log('Unchecked');
                $('#main-right .gcse-right-price-selection-single').each(function (index, item) {
                    let foundationSingleItemCheck = $(item).find('input[name=gcse-course-option]');
                    if (foundationSingleItemCheck.is(':checked')) {
                        actualSelectedVarId = foundationSingleItemCheck.data('var-id');
                        console.log(actualSelectedVarId);
                    }
                });
                singleItemVar = actualSelectedVarId;
            }
        });

        let enrolBtnEl = $('.gcse-total-course-fees #gcse-enroll-btn');
        enrolBtnEl.on('click', function (e) {
            e.preventDefault();
            gcseCourseId = $(this).data('course-id');
            console.log(gcseCourseId, singleItemVar);
            if (singleItemVar == '') {
                // console.log(foundationSingleItem.eq(0))
                singleItemVarStr = foundationSingleItem.eq(0).find('input[name=gcse-course-option]').data('var-id');
                singleItemVar = parseInt(singleItemVarStr);
            }
            if (singleItemVar == '' && gcseSecVarId == '') {
                $('p.gcse-course-ajax-confirmation-message').text('Sorry, Empty field not allowed.');
                return;
            } else {
                let data = {
                    action: 'gcse_action',
                    course_id: gcseCourseId,
                    variation_id: singleItemVar,
                    sec_variation_id: gcseSecVarId,
                };
                console.log(data);
                $.ajax({
                    dataType: 'json',
                    type: 'post',
                    url: gcse_obj.ajax_url,
                    data: data,
                    beforeSend: function (response) {
                        $('p.gcse-course-ajax-confirmation-message').text('Processing..');
                    },
                    complete: function (response) {
                        console.log('completed');
                    },
                    success: function (response) {
                        console.log(response);
                        $('p.gcse-course-ajax-confirmation-message').text(response.message);
                        if (response.status == 'success') {
                            window.location.href = gcse_obj.cart_url;
                        }
                    },
                });
            }
        });
    });
})(jQuery);