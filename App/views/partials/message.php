<?php 
use Framework\Session;
?>

<?php $successMessage = Session::getFlashMessage('success_message'); ?>
<?php if($successMessage !== null) : ?>
    <div class="message bg-green-100 p-3 my-3 rounded text-green-600">
        <?= $successMessage ?>
    </div>
    <?php endif; ?>

    <?php $errorMessage = Session::getFlashMessage('error_message'); ?>
<?php if($errorMessage !== null) : ?>
    <div class="message bg-red-100 p-3 my-3 rounded text-red-600">
        <?= $errorMessage ?>
    </div>
    <?php endif; ?>
