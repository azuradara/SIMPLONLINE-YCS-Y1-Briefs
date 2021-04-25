<?php
/** @var $this \app\core\View */
/** @var $e \Exception */
$this->title = $e->getCode();
$this->scripts = ['js/navbar.js'];
?>

<h1 class="max-w-xs font-semi-bold text-3xl mx-auto text-center bg-white p-6 rounded-2xl shadow-2xl">
    <img src="/img/logo.svg" class='mx-auto h-32 mb-6' alt="">
    <?php echo $e->getCode() ?> </br>
    <?php echo $e->getMessage() ?>
    <p>:(</p>
</h1>