<?php if(session($key ?? 'status')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo session($key ?? 'status'); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Adones\Downloads\Inventory-Management-main\resources\views/alerts/success.blade.php ENDPATH**/ ?>