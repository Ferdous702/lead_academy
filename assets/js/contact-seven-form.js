/**
 * Fixes accessibility issues in Contact Form 7 by automatically
 * connecting labels to their form fields.
 */
document.addEventListener('DOMContentLoaded', function() {

    // Find all the form field wrappers in your Contact Form 7 form.
    const fieldWrappers = document.querySelectorAll('.wpcf7-form .wpcf7-form-control-wrap');

    fieldWrappers.forEach((wrapper, index) => {
        // Find the label and the form field (input, select, textarea) inside the wrapper.
        const label = wrapper.querySelector('label');
        const field = wrapper.querySelector('input, select, textarea');

        // Proceed only if both a label and a field are found.
        if (label && field) {
            // Get the name of the field (e.g., 'first-name', 'your-email').
            const fieldName = field.getAttribute('name');

            if (fieldName) {
                // Create a unique ID for the form field.
                const fieldId = `wpcf7-field-${fieldName}-${index}`;

                // Set the 'id' on the form field.
                field.id = fieldId;

                // Set the 'for' attribute on the label to match the field's new ID.
                label.setAttribute('for', fieldId);
            }
        }
    });
});