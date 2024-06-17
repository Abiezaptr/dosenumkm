<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Pendaftaran</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        overflow: hidden;
        /* Prevent scrolling when popup is open */
    }

    .popup {
        display: flex;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
        justify-content: center;
        align-items: center;
    }

    .popup-content {
        background-color: #fefefe;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 500px;
        border-radius: 10px;
        text-align: center;
    }

    .popup-body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .popup-section {
        margin-bottom: 20px;
    }

    .popup-section img {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
    }

    button {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <div id="popup" class="popup">
        <div class="popup-content">
            <div class="popup-body">
                <div class="popup-section">
                    <img src="<?= base_url('assets') ?>/image-to-inform.jpg" alt="Foto buku tabungan">
                </div>
                <p>Siapkan informasi Anda sebelum memulai proses pendaftaran.</p>
                <p>Untuk pendaftaran yang cepat dan nyaman. Catatan: Sistem fastwork tidak mendukung penarikan uang melalui e-wallet.</p>
                <button id="start-registration">Terima dan mulai pendaftaran</button>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var popup = document.getElementById('popup');
            var startBtn = document.getElementById('start-registration');

            // Show the popup when the page loads
            popup.style.display = 'flex';

            // Redirect to the registration page when the start button is clicked
            startBtn.onclick = function() {
                window.location.href = '<?= site_url('selling/register') ?>';
            }
        });
    </script>
</body>

</html>