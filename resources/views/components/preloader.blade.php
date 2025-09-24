<!-- Load Raleway font -->
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">

<style>
  .preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    transition: opacity 0.7s ease-out, visibility 0.2s ease-out;
    opacity: 1;
    visibility: visible;
  }

  /* .preloader__logo {
    transform: scale(0.7);
    animation: logoPulse 1.5s ease-in-out infinite alternate;
  }

  @keyframes logoPulse {
    from { transform: scale(0.7); opacity: 0.8; }
    to { transform: scale(1); opacity: 1; }
  } */

  .preloader--hidden {
    opacity: 0;
    visibility: hidden;
  }

  /* Apply Raleway to SVG text */

  @keyframes pulseRotate {
  0%   { transform:rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.preloader__logo img {
  animation: pulseRotate 1.5s ease-in-out infinite;
}

</style>

<div class="preloader" role="status" aria-label="Loading site">
  <div class="preloader__logo" aria-hidden="true">
    <img src="{{ asset('assets/images/h-office-logo-sm.png') }}" alt="Site Logo" width="32" height="32">

  </div>
</div>

<script>
  window.addEventListener('load', () => {
    const preloader = document.querySelector('.preloader');
    setTimeout(() => {
      preloader.classList.add('preloader--hidden');
      setTimeout(() => preloader.remove(), 500);
    }, 1500);
  });
</script>
