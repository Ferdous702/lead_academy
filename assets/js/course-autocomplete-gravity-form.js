jQuery(document).ready(function($) {
    var courseNames = [];

    // Fetch course names using AJAX
    $.get(ajaxurl, { action: 'get_course_names' }, function(response) {
        console.log(response);  // Debug to see if course names are fetched
        courseNames = response;

        // Apply jQuery UI Autocomplete to both fields
        $('.auto-complete-course-name textarea').autocomplete({
            source: courseNames,
            minLength: 2,
            select: function(event, ui) {
                this.value = ui.item.value;
                return false;
            }
        });
    });
});
