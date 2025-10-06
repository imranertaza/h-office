{{-- @if(true) --}}
@if($show)
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
    position: relative; /* needed for close button */
    background: #fff;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 0 20px rgba(0,0,0,0.3);
    /*padding: 20px;*/
}

.popup-content img {
    max-width: 90vw;  
    max-height: 90vh; 
    width: auto;
    height: auto;
    display: block;
    margin: 0 auto;
}

/* Close button style */
.popup-close {
    position: absolute;
    top: 8px;
    right: 8px;
    display:flex;
    align-items:center;
    justify-content:center;
    cursor: pointer;
    padding:3px;
    border-radius:50%;
    border:1px solid #000;
    /* background:#fff; */
}

.popup-close:hover {
    color: #000;
}
</style>

<div id="monthly-intent-popup" class="popup-overlay">
    <div class="popup-content">
        <span class="popup-close" onclick="closePopup()">
            <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000">

                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                
                <g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 5.29289C5.68342 4.90237 6.31658 4.90237 6.70711 5.29289L12 10.5858L17.2929 5.29289C17.6834 4.90237 18.3166 4.90237 18.7071 5.29289C19.0976 5.68342 19.0976 6.31658 18.7071 6.70711L13.4142 12L18.7071 17.2929C19.0976 17.6834 19.0976 18.3166 18.7071 18.7071C18.3166 19.0976 17.6834 19.0976 17.2929 18.7071L12 13.4142L6.70711 18.7071C6.31658 19.0976 5.68342 19.0976 5.29289 18.7071C4.90237 18.3166 4.90237 17.6834 5.29289 17.2929L10.5858 12L5.29289 6.70711C4.90237 6.31658 4.90237 5.68342 5.29289 5.29289Z" fill="#0F1729"/> </g>
                
                </svg>
        
        </span>
        <img src="{{ asset('assets/images/newsletter.jpg') }}" class="logo-img" alt="">
    </div>
</div>

<script>
function closePopup() {
    document.getElementById('monthly-intent-popup').style.display = 'none';
}

// Close when clicking outside the popup content
document.getElementById('monthly-intent-popup').addEventListener('click', function(e) {
    if (e.target === this) {
        closePopup();
    }
});
</script>
@endif
