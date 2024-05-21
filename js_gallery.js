document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll('img');

    images.forEach(image => {
        image.addEventListener('click', () => {
            toggleZoom(image);
        });
    });

    function toggleZoom(image) {
        if (image.style.transform === 'scale(1.5)') {
            image.style.transform = 'scale(1)';
        } else {
            resetZoom();
            image.style.transform = 'scale(1.5)';
            image.style.transition = 'transform 0.3s ease';
        }
    }

    function resetZoom() {
        images.forEach(image => {
            image.style.transform = 'scale(1)';
        });
    }
});
