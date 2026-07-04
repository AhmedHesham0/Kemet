<div>
    <div class="text-center mt-xl-2">
        <?php if(!empty($youtube)): ?>
        <div style="position: relative; width: 100%; padding-top: 23.82%; /* 453.59/1905 = 0.2382 */ overflow: hidden;">
            <video controls autoplay muted loop playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 1;">
                <source src="<?php echo e(asset('EGT.mp4')); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 2; display: flex; flex-direction: column; justify-content: center; align-items: flex-start; padding-left: 2vw;">
                <h1 class="font-size-60 font-size-xs-30 text-white font-weight-bold mb-3" style="text-shadow: 0 2px 8px rgba(0,0,0,0.7); margin-bottom: 0.5em;">About Us!</h1>
                <p class="font-size-24 text-white font-weight-normal" style="max-width: 900px; text-shadow: 0 2px 8px rgba(0,0,0,0.7); line-height: 1.3; text-align: left; padding-left: 2px;">
                    We are passionate travelers, storytellers, and adventure seekers dedicated to creating unforgettable experiences. Our mission is to connect people with the beauty of the world, one destination at a time...
                </p>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\Users\AHmed's PC\Downloads\Mytravel.1.3.1\themes/Mytravel/Template/Views/frontend/blocks/video-player.blade.php ENDPATH**/ ?>