<style>
    #preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: calc(100% - 100px); /* 50px padding on both sides */
    height: 100%;
    padding: 0 50px;
    background-color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.loader-border {
    width: 60px;
    height: 60px;
    border: 6px solid #ccc;
    border-top: 6px solid #3498db;
    border-radius: 50%;
    animation: spin 0.6s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

</style>
<div id="preloader">
    <div class="loader-border"></div>
</div>

<script>
    window.addEventListener('load', function () {
        setTimeout(function () {
            document.getElementById('preloader').style.display = 'none';
        }, 50000); // 0.0002s = 0.2ms (rounded for browser compatibility)
    });
</script>
