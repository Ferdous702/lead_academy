(function ($) {
    $(document).ready(function () {
        if ($('body.woocommerce-shop .la-course-price p').length) {
            let freeCourseEl = $('.la-course-price p');
            freeCourseEl.each(function () {
                if ($(this).text().length == 5 && $(this).text().includes('0.00', 1)) {
                    $(this).text('Free');
                }
            });
        }

        if ($('body.single-product #exam-board-options').length) {
            console.log($('.exam-board-single-option').length);
        }

        if ($('#la-single-curriculum').length) {
            // $(document).on('click', '#la-faq-accordion .mcdt-toggle, #la-single-curriculum .mcdt-toggle').click(function (e) {
            $(document).on('click', '#la-single-curriculum .mcdt-toggle, #la-single-curriculum-sml .mcdt-toggle', function (e) {
                e.preventDefault();

                let $this = $(this);

                // $this.addClass('mcdt-toggle-show');

                $this.next().slideToggle(250);

                if ($this.hasClass('mcdt-toggle-show')) {
                    $this.removeClass('mcdt-toggle-show');
                }
                else {
                    $this.addClass('mcdt-toggle-show');
                }
            });
        }

        // $(document).on('click', '#mobile-course-menu-dropdown-btn', function (event) {
        //     event.preventDefault();
        //     let mobileCourseMenuEl = $('#mobile-course-menu');
        //     mobileCourseMenuEl.removeClass('show');
        //     // $(this).next().addClass('show');
        //     // console.log('before condition');
        //     if (mobileCourseMenuEl.hasClass('show')) {
        //         console.log('has class');
        //         mobileCourseMenuEl.removeClass('show');
        //     } else {
        //         console.log('has not class');
        //         mobileCourseMenuEl.addClass('show');
        //     }
        //     // console.log('out of condition');
        // });

        $('.exam-board-single-option input[type="radio"]').on('change keyup', function () {
            var courseTotalEl = $('#exam-board-total .course-sale-price');
            if ($(this).prop('checked')) {
                $('.exam-board-single-option').removeClass('checked');
                $(this).closest('.exam-board-single-option').addClass('checked');
                var selectedCheckedVal = parseInt($(this).val());
                courseTotalEl.html(selectedCheckedVal);
            }
            // else {
            //     $(this).closest('.exam-board-single-option').removeClass('checked');
            //     var selectedCheckedVal = parseInt($(this).val());
            //     courseTotalEl.html(selectedCheckedVal);
            // }
        });

        let courseCardBox = $('div.container.all-courses-sc2 ul.products');

        // Category ajaxify scripts
        // $(document).on('click', '#woocommerce_product_categories-2 ul.product-categories li.cat-item a', function (e) {
        //     e.preventDefault();
        //     $('html, body').animate({
        //         scrollTop: $("header#header").offset().top
        //     }, 200);
        //     let courseClasses = $(this).parent().parent().prop('className').split(/\s+/)[1];
        //     let sectionBanner = $('section.all-courses-1s div#all-courses-banner-content');
        //     let catText = $(this).text();
        //     let wcPagination = $('nav.woocommerce-pagination');
        //     let courseId = courseClasses.split('-').pop();
        //     let wcResultCount = $('div.container.all-courses-sc1 p.woocommerce-result-count');
        //     let wcTotalProducts = ajaxify_courses_ot.total_products;
        //     sectionBanner.find('p.all-course-heading').remove();
        //     sectionBanner.find('h2.all-course-heading').text(catText);
        //     courseCardBox.find('div.course-card-box').remove();
        //     wcPagination.remove();
        //     courseCardBox.append('<h3>Loading Courses..</h3>');
        //     console.log(courseClasses);
        //     console.log(courseId);
        //     console.log(ajaxify_courses_ot.total_products);

        //     var data = {
        //         action: 'ajaxify_courses_ot',
        //         course_id: courseId,
        //         total_products: ajaxify_courses_ot.total_products,
        //     };
        //     $.ajax({
        //         dataType: 'json',
        //         type: 'post',
        //         url: ajaxify_courses_ot.ajax_url,
        //         data: data,
        //         beforeSend: function (response) {
        //             console.log('before send');
        //         },
        //         complete: function (response) {
        //             console.log('completed');
        //         },
        //         success: function (response) {
        //             console.log(response);
        //             wcResultCount.text('Showing 1–' + response.courses.length + ' of ' + wcTotalProducts + ' results');
        //             courseCardBox.find('h3').remove();
        //             courseCardBox.append(response.courses);
        //         },
        //     });
        // });


        // Pagination ajaxify scripts
        // $(document).on('click', 'div.container.all-courses-sc2 nav.woocommerce-pagination ul li a', function (e) {
        //     e.preventDefault();
        //     let curPage = $(this).text();
        //     console.log(curPage);
        //     let wcPagination = $('nav.woocommerce-pagination');
        //     wcPagination.remove();
        //     courseCardBox.find('div.course-card-box').remove();
        //     courseCardBox.append('<h3>Loading Courses..</h3>');

        //     var data = {
        //         action: 'ajaxify_courses_ot',
        //         cur_page: curPage,
        //     };
        //     $.ajax({
        //         dataType: 'json',
        //         type: 'post',
        //         url: ajaxify_courses_ot.ajax_url,
        //         data: data,
        //         beforeSend: function (response) {
        //             console.log('before send');
        //         },
        //         complete: function (response) {
        //             console.log('completed');
        //         },
        //         success: function (response) {
        //             console.log(response);
        //             // wcResultCount.text('Showing 1–' + response.courses.length + ' of ' + wcTotalProducts + ' results');
        //             courseCardBox.find('h3').remove();
        //             courseCardBox.append(response.courses);
        //             courseCardBox.after(response.products_pagination);
        //         },
        //     });
        //     return false;
        // });

        // Ordering ajaxify scripts
        // $('div.all-courses-sc1 form.woocommerce-ordering > select').on('change', function (e) {
        //     e.preventDefault();
        //     let course_order = $(this).val();
        //     let wcPagination = $('nav.woocommerce-pagination');
        //     courseCardBox.find('div.course-card-box').remove();
        //     wcPagination.remove();
        //     courseCardBox.append('<h3>Loading Courses..</h3>');
        //     var data = {
        //         action: 'ajaxify_courses_ot',
        //         course_order: course_order,
        //     };
        //     $.ajax({
        //         dataType: 'json',
        //         type: 'post',
        //         url: ajaxify_courses_ot.ajax_url,
        //         data: data,
        //         beforeSend: function (response) {
        //             console.log('before send');
        //         },
        //         complete: function (response) {
        //             console.log('completed');
        //         },
        //         success: function (response) {
        //             console.log(response);
        //             courseCardBox.find('h3').remove();
        //             courseCardBox.append(response.courses);
        //             courseCardBox.after(response.products_pagination);
        //         },
        //     });
        //     return false;
        // });

        // Course enrolling scripts
        $('body.single.single-product a#enroll-btn').on('click', function (e) {
            e.preventDefault();
            let courseId = $('body.single.single-product div#exam-board-options').data('course-id');
            let variationIds = [];
            let singleCourseEl = $('#exam-board-options div.checked');
            if (singleCourseEl.length > 0) {
                let singleCourseInput = $('#exam-board-options input[name="board-radio"]');
                if (!singleCourseInput.is(':checked')) {
                    alert('Please select an item first!');
                    return;
                }
                variationIds.push(singleCourseEl.data('variation-id'));

                if (variationIds.length === 0) {
                    alert('Nothing to add as it\'s a simple product');
                    return;
                }
                var data = {
                    action: 'ajaxify_courses_ot',
                    cart_course_id: courseId,
                    variation_ids: variationIds,
                };
                console.log(data);
                $.ajax({
                    dataType: 'json',
                    type: 'post',
                    url: ajaxify_courses_ot.ajax_url,
                    data: data,
                    beforeSend: function (response) {
                        console.log('before send');
                    },
                    complete: function (response) {
                        console.log('completed');
                    },
                    success: function (response) {
                        console.log(response);
                        window.location.href = response.cart_redirect_url;
                    },
                });
                return false;
            } else {
                alert('Please, change/select an item!');
            }
        });


    });
})(jQuery);