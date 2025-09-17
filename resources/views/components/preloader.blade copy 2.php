<style>
    .preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #fff; /* Or site's primary color */
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
</style>
<div class="preloader">
    <div class="preloader__logo">
      <!-- SVG logo here (inline or loaded from assets) -->
      {{-- <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" width="200" height="200">
        <!-- Centered H -->
        <text x="50" y="60" font-family="Arial, sans-serif" font-size="40" font-weight="bold" fill="#000" text-anchor="middle">H</text>
        
        <!-- Circular loader -->
        <circle cx="50" cy="50" r="30" fill="none" stroke="#000" stroke-width="5" stroke-dasharray="188.5" stroke-dashoffset="188.5">
          <animate attributeName="stroke-dashoffset" 
                   from="188.5" 
                   to="0" 
                   dur="1.8s" 
                   repeatCount="indefinite"/>
        </circle>
      </svg> --}}
      <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" width="200" height="200">
        <!-- Path for letter H (simplified glyph) -->
        <path id="letterH" d="M35 30 V70 M65 30 V70 M35 50 H65" fill="none" stroke="#000" stroke-width="6" stroke-linecap="square" stroke-dasharray="150" stroke-dashoffset="150">
          <animate attributeName="stroke-dashoffset" 
                   from="150" 
                   to="0" 
                   dur="0.3s" 
                   begin="0s;circleAnim.end+0.2s" 
                   fill="freeze"
                   calcMode="spline"
                   keySplines="0.4 0 0.2 1"/>
          <animate attributeName="fill" 
                   from="none" 
                   to="#000" 
                   dur="0.1s" 
                   begin="0.3s;circleAnim.end+0.9s" 
                   fill="freeze"/>
        </path>
        
        <!-- Circular loader (larger radius, animates once per loop) -->
        <circle cx="50" cy="50" r="40" fill="none" stroke="#000" stroke-width="5" stroke-dasharray="251.3" stroke-dashoffset="251.3">
          <animate id="circleAnim" 
                   attributeName="stroke-dashoffset" 
                   from="251.3" 
                   to="0" 
                   dur="0.6s" 
                   begin="0.4s;circleAnim.end+0.6s" 
                   fill="freeze"/>
        </circle>
      </svg>
    </div>
  </div>

  <script>
    window.addEventListener('load', function() {
  const preloader = document.querySelector('.preloader');
  setTimeout(() => {
    preloader.classList.add('preloader--hidden');
    // Optional: Remove from DOM after transition
    setTimeout(() => preloader.remove(), 500);
  }, 1500); // Delay to ensure full load
});
  </script>