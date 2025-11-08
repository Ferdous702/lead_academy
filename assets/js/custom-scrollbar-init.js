document.addEventListener("DOMContentLoaded", function() {
    // Select the target node that contains the dynamically loaded content.
    const targetNode = document.querySelector('#enquiryBookingModal .single-booking-option');

    // If the container doesn't exist on the page, do nothing.
    if (!targetNode) {
        console.error('Scrollbar target container [.single-booking-option] not found.');
        return;
    }

    // Configure the observer: we want to know about changes to the child elements.
    const config = { childList: true, subtree: true };

    // Callback function to execute when mutations are observed.
    const callback = function(mutationsList, observer) {
        for(const mutation of mutationsList) {
            // We only care about when new nodes are added.
            if (mutation.type === 'childList' && mutation.addedNodes.length > 0) {
                // When new content loads, initialize OverlayScrollbars.
                const instance = OverlayScrollbars(targetNode, {});
                if (instance) {
                     // Re-initialize to apply settings consistently.
                     OverlayScrollbars(targetNode, {
                        className: "os-theme-light", // You can also use "os-theme-dark"
                        scrollbars: {
                            visibility: "visible", // Always keep the scrollbar visible
                            autoHide: "never"      // Disable the auto-hide feature
                        }
                    });
                }
            }
        }
    };

    // Create a new observer instance and link it to the callback function.
    const observer = new MutationObserver(callback);

    // Start observing the target node for configured mutations.
    observer.observe(targetNode, config);
});