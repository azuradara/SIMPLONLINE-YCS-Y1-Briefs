<?php

/** @var $this \app\core\View */
$this->title = 'Dashboard';
$this->scripts = ['js/navbar.js'];
?>

<div class="flex items-center justify-center">

    <?php $form = \app\core\forms\Form::open('', 'post') ?>
    <div class="flex flex-col p-6 bg-white rounded-lg shadow-xl md:max-w-xl w-full mx-6 md:mx-auto">

        <?php echo $form->input($model, 'tax_single')->toInt() ?>
        <?php echo $form->input($model, 'tax_double')->toInt() ?>
        <?php echo $form->input($model, 'tax_view')->toInt() ?>
        <?php echo $form->input($model, 'tax_baby_bed')->toInt() ?>
        <?php echo $form->input($model, 'tax_child_bed')->toInt() ?>
        <?php echo $form->input($model, 'tax_teen_bed')->toInt() ?>
        <?php echo $form->input($model, 'tax_pension_semi')->toInt() ?>
        <?php echo $form->input($model, 'tax_pension_full')->toInt() ?>

        <button
                class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200 my-3"
                type="submit" name="submit">
            Send
        </button>
    </div>

    <?php $form = \app\core\forms\Form::open('', 'post') ?>

</div>