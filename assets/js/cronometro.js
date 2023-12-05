let seconds = 10;
        const countdownElement = document.getElementById('countdown');

        function updateCountdown() {
            countdownElement.textContent = seconds;
            if (seconds === 0) {
                window.location.href = 'index.php'; 
            } else {
                seconds--;
                setTimeout(updateCountdown, 1000);
            }
        }

        updateCountdown();