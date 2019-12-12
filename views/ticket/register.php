<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Ticket Registration</h1>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($ticket, 'ownerId') ?>
<?= $form->field($ticket, 'flyingFrom') ?>
<?= $form->field($ticket, 'flyingTo') ?>
<?= $form->field($ticket, 'departureDate')->hint('YYYY-mm-dd') ?>
<?= $form->field($ticket, 'departureTime')->hint('HH:ii:ss') ?>
<?= $form->field($ticket, 'adults') ?>
<?= $form->field($ticket, 'children') ?>
<?= $form->field($ticket, 'infants') ?>
<?= $form->field($ticket, 'class') ?>
<?= $form->field($ticket, 'airline') ?>
<?= $form->field($ticket, 'price') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php if (isset($message)) echo $message; ?>

<?php ActiveForm::end(); ?>