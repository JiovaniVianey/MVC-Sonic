// Get the audio element
const backgroundMusic = document.getElementById('background-music');

// Play the music when the document is loaded
document.addEventListener('DOMContentLoaded', () => {
backgroundMusic.play();
});

// Pause the music when the user switches to another tab
document.addEventListener('visibilitychange', () => {
if (document.hidden) {
    backgroundMusic.pause();
} else {
    backgroundMusic.play();
}
});