        document.addEventListener('DOMContentLoaded', function () {
            // Get all necessary elements from the DOM
            const videoTriggers = document.querySelectorAll('.video-popup-trigger');
            const modalOverlay = document.getElementById('video-modal');
            const modalClose = document.querySelector('.video-modal-close');
            const videoIframe = document.getElementById('video-iframe');
 
            /**
             * Extracts the YouTube video ID from various URL formats.
             * @param {string} url - The YouTube URL.
             * @returns {string|null} The video ID or null if not found.
             */
            function getYouTubeID(url) {
                const regex = /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/;
                const match = url.match(regex);
                return match ? match[1] : null;
            }
 
            /**
             * Opens the modal and plays the specified video.
             * @param {string} videoUrl - The original YouTube watch URL.
             */
            function openModal(videoUrl) {
                const videoId = getYouTubeID(videoUrl);
                if (videoId) {
                    // Construct the autoplay embed URL. Mute is often required for autoplay to work.
                    videoIframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&mute=1&rel=0`;
                    modalOverlay.classList.add('active');
                    // Lock body scroll
                    document.body.style.overflow = 'hidden';
                } else {
                    console.error('Invalid YouTube URL:', videoUrl);
                }
            }
 
            /**
             * Closes the modal and stops the video.
             */
            function closeModal() {
                modalOverlay.classList.remove('active');
                // Stop the video by clearing the src attribute
                videoIframe.src = '';
                // Unlock body scroll
                document.body.style.overflow = '';
            }
 
            // Add click event listeners to all video trigger buttons
            videoTriggers.forEach(button => {
                button.addEventListener('click', function () {
                    const url = this.getAttribute('data-video-url');
                    openModal(url);
                });
            });
 
            // Add click event listener to the close button
            modalClose.addEventListener('click', closeModal);
 
            // Add click event listener to the modal overlay to close it when clicking outside the content
            modalOverlay.addEventListener('click', function (event) {
                if (event.target === modalOverlay) {
                    closeModal();
                }
            });
 
            // Add keyboard event listener to close the modal with the 'Escape' key
            document.addEventListener('keydown', function (event) {
                if (event.key === 'Escape' && modalOverlay.classList.contains('active')) {
                    closeModal();
                }
            });
        });