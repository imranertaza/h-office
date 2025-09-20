@if ($show)
<style>
    .popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.popup-content {
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    text-align: center;
    max-width: 400px;
    box-shadow: 0 0 20px rgba(0,0,0,0.3);
}

</style>
    <div id="monthly-intent-popup" class="popup-overlay">
        <div class="popup-content">
            <h3>Welcome!</h3>
            <p>Thanks for visiting. Here's something special for you this month.</p>
            <button onclick="closePopup()">Close</button>
        </div>
    </div>

    <script>
        function closePopup() {
            document.getElementById('monthly-intent-popup').style.display = 'none';
        }
    </script>
@endif
