<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();

?>
<style>
/* Ensure the video covers the entire viewport */
.video-background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: -1; /* Ensure the video is behind other content */
}

.video-background iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
}

input:-internal-autofill-selected {
    appearance: none; /* Hides the default dropdown appearance */
    background-image: none !important; /* Removes any default background image */
    background-color: transparent !important; /* Makes the background transparent */
    color: inherit !important; /* Inherits the text color from the parent */
    border: none; /* Removes any border */
    outline: none; /* Removes the outline */
    box-shadow: none; /* Removes any shadow */
}

</style>
<div class="video-background">
    <iframe class="elementor-background-video-embed" frameborder="0" allowfullscreen="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" title="Busy" width="640" height="360" src="https://www.youtube.com/embed/ZcBw06UbAws?controls=0&amp;rel=0&amp;playsinline=1&amp;enablejsapi=1&amp;origin=https%3A%2F%2Flead-academy.org&amp;widgetid=1&amp;autoplay=1&amp;mute=1" id="background-video" data-gtm-yt-inspected-7="true" style="width: 1519px; height: 854.438px;"></iframe>
</div>
<div class="overlay"></div>
<div class="container">
    <h1>OOPS! PAGE NOT FOUND</h1>
    <p>Sorry, the page you were looking for couldn't be found. Kindly contact our support team at info@lead-academy.org to assist you.</p>
    <hr>
    <p>You can navigate through our menu or use this search bar:</p>
    <form action="https://lead-academy.org/" method="get">
        <div id="search">
            <i class="fa fa-search" aria-hidden="true"></i>
            <input placeholder="Search..." type="search" name="s">
        </div>
    </form>
</div>
<?php 
echo "NOT FOUND";
?>

<?php
get_footer();
?>

<script>
// Load YouTube Iframe API
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// Function to create an iframe and YouTube player
var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('background-video', {
        events: {
            'onReady': onPlayerReady
        }
    });
}

function onPlayerReady(event) {
    event.target.playVideo(); // Autoplay when ready
}

// Function to stop the video
function stopVideo() {
    player.stopVideo();
}

// Example: Stop the video when the user clicks anywhere on the page
document.addEventListener('click', function() {
    //stopVideo();
});

// Example: Stop the video when the page is unloaded
window.addEventListener('beforeunload', function() {
    //stopVideo();
});
</script>
