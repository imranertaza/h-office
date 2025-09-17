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

  .preloader__logo {
    transform: scale(0.7);
    animation: logoPulse 1.5s ease-in-out infinite alternate;
  }

  @keyframes logoPulse {
    from { transform: scale(0.7); opacity: 0.8; }
    to { transform: scale(1); opacity: 1; }
  }

  .preloader--hidden {
    opacity: 0;
    visibility: hidden;
  }

  /* Apply Raleway to SVG text */
  .preloader__logo text {
    font-family: 'Raleway', sans-serif;
    font-weight: 800;
  }
</style>

<div class="preloader" role="status" aria-label="Loading site">
  <div class="preloader__logo" aria-hidden="true">
    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" width="100" height="100">
      <!-- Letter H in Raleway -->
      <text x="50" y="65" text-anchor="middle" font-size="48" fill="#000">H</text>

      <!-- Circular loader -->
      <circle cx="50" cy="50" r="40"
              fill="none"
              stroke="#000"
              stroke-width="4"
              stroke-dasharray="251.3"
              stroke-dashoffset="251.3"
              transform="rotate(-90 50 50)">
        <animate id="circleAnim"
                 attributeName="stroke-dashoffset"
                 from="251.3" to="0"
                 dur="0.6s"
                 begin="0.4s;circleAnim.end+0.9s"
                 fill="freeze"/>
      </circle>
    </svg>
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
