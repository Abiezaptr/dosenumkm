<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fastwork</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
    }

    .modal {
        display: block;
        position: fixed;
        z-index: 1;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        max-width: 600px;
        height: auto;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        padding: 20px;
        border: 1px solid #888;
        text-align: center;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .options {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
        margin: 20px 0;
    }

    .option {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .option:hover {
        background-color: #f0f0f0;
    }

    .option img {
        width: 40px;
        height: 40px;
        margin-bottom: 10px;
    }

    .buttons {
        display: flex;
        justify-content: center;
        /* Center the buttons */
        margin-top: 20px;
        gap: 10px;
        /* Add some space between buttons */
    }

    button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    #skip {
        background-color: #f0f0f0;
    }

    #save {
        background-color: #007bff;
        color: white;
    }

    #confirmModal {
        display: none;
        position: fixed;
        z-index: 2;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        max-width: 400px;
        height: auto;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .confirm-modal-content {
        background-color: #fefefe;
        padding: 20px;
        border: 1px solid #888;
        text-align: center;
    }

    .confirm-buttons {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        gap: 10px;
    }

    #exit {
        background-color: #f0f0f0;
    }

    #cancel {
        background-color: #007bff;
        color: white;
    }
</style>

<body>
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Sebelum memulai, beri tahu kami dari mana Anda mengetahui informasi tentang kami? 😊</h2>
            <p>Anda dapat memilih beberapa opsi</p>
            <div class="options">
                <div class="option"><img src="<?= base_url('assets') ?>/google.svg" alt="Google">
                    <p>Google</p>
                </div>
                <div class="option"><img src="<?= base_url('assets') ?>/IG.svg" alt="Instagram">
                    <p>Instagram</p>
                </div>
                <div class="option"><img src="<?= base_url('assets') ?>/tiktok.svg" alt="TikTok">
                    <p>TikTok</p>
                </div>
                <div class="option"><img src="<?= base_url('assets') ?>/facebook.svg" alt="Facebook">
                    <p>Facebook</p>
                </div>
                <div class="option"><img src="<?= base_url('assets') ?>/x.svg" alt="X (Twitter)">
                    <p>X (Twitter)</p>
                </div>
                <div class="option"><img src="<?= base_url('assets') ?>/youtube.svg" alt="Youtube">
                    <p>Youtube</p>
                </div>
            </div>
            <div class="buttons">
                <button id="skip">Lewati</button>
                <button id="save">Save and continue</button>
            </div>
        </div>
    </div>

    <div id="confirmModal" class="modal">
        <div class="confirm-modal-content">
            <span class="close-confirm"></span>
            <h2>Apakah Anda ingin keluar dari aplikasi?</h2>
            <p>Anda belum menyimpan data Anda. Tekan simpan, sehingga Anda dapat kembali dan mengajukan permohonan lagi.</p>
            <div class="confirm-buttons">
                <button id="exit">Keluar</button>
                <button id="cancel">Batal</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            var modal = document.getElementById("modal");
            var confirmModal = document.getElementById("confirmModal");
            var span = document.getElementsByClassName("close")[0];
            var spanConfirm = document.getElementsByClassName("close-confirm")[0];

            span.onclick = function() {
                confirmModal.style.display = "block";
            }

            spanConfirm.onclick = function() {
                confirmModal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == confirmModal) {
                    confirmModal.style.display = "none";
                }
            }

            document.getElementById("skip").onclick = function() {
                modal.style.display = "none";
            }

            document.getElementById("save").onclick = function() {
                alert("Data saved!");
                alert("Data saved!");
                modal.style.display = "none";
            }

            document.getElementById("exit").onclick = function() {
                window.location.href = "<?= site_url('selling') ?>";
            }

            document.getElementById("cancel").onclick = function() {
                confirmModal.style.display = "none";
            }
        });
    </script>
</body>

</html>