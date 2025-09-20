<style>
    #circle-preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    transition: opacity 0.6s ease, visibility 0.6s ease;
}

#circle-preloader.fade-out {
    opacity: 0;
    visibility: hidden;
}

.circle-wrapper {
    width: 100px;
    height: 100px;
    border: 2px solid #000;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    animation: rotateCircle 1.2s linear infinite;
}

@keyframes rotateCircle {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

</style>
<div id="circle-preloader">
    <div class="circle-wrapper">
        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" width="200" height="200">
            <!-- Centered H -->
            <text x="50" y="60" font-family="Arial, sans-serif" font-size="40" font-weight="bold" fill="#fff" text-anchor="middle">H</text>
            
            <!-- Dot (small circle) that animates around the H -->
            <circle cx="50" cy="20" r="5" fill="#fff">
              <animateMotion dur="2s" repeatCount="indefinite">
                <mpath xlink:href="#circlePath"/>
              </animateMotion>
            </circle>
            
            <!-- Circular path for the dot to follow -->
            <path id="circlePath" d="M50,20 A30,30 0 0 1 50,20" fill="none"/>
            <animate attributeName="d" 
                     dur="2s" 
                     repeatCount="indefinite"
                     values="
                       M50,20 A30,30 0 0 0 50,20;
                       M50,20 A30,30 0 1 0 50,20;
                       M50,20 A30,30 0 0 0 50,20"
                     keyTimes="0;0.5;1"/>
          </svg>
    </div>
</div>

<script>
    window.addEventListener('load', function () {
        document.getElementById('circle-preloader').classList.add('fade-out');
    });
</script>
