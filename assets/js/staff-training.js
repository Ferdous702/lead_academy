document.addEventListener('DOMContentLoaded', (event) => {
    //Youtube Popup
    const youtubePopup = document.getElementById('youtubePopup');
    const playButton = document.getElementById('playButton');
    const closePopup = youtubePopup.querySelector('.close');

    playButton.addEventListener('click', () => {
        youtubePopup.style.display = 'block';
    });

    closePopup.addEventListener('click', () => {
        youtubePopup.style.display = 'none';
    });

    window.onclick = function(event) {
        if (event.target == youtubePopup) {
            youtubePopup.style.display = 'none';
        }
    }

    //SPEAK TO US TODAY Popup
    const popup = document.getElementById('staffpopup');
    const popupButtons = document.querySelectorAll('.staffpopupButton');
    const close = document.getElementsByClassName('staffclose')[0];

    popupButtons.forEach(button => {
        button.addEventListener('click', () => {
            popup.style.display = 'block';
        });
    });

    close.onclick = function() {
        popup.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = 'none';
        }
    }
});
