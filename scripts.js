// Hitung mundur hingga tanggal pernikahan
function countdown() {
    var weddingDate = new Date('August 15, 2024').getTime();

    var countdownInterval = setInterval(function() {
        var now = new Date().getTime();
        var distance = weddingDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById('countdown').innerHTML = days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's';

        if (distance < 0) {
            clearInterval(countdownInterval);
            document.getElementById('countdown').innerHTML = 'The wedding has begun!';
        }
    }, 1000);
}

// Panggil fungsi countdown saat halaman dimuat
countdown();
// Add smooth scrolling to anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 50, // Adjust scroll offset if needed
                behavior: 'smooth'
            });
        }
    });
});
