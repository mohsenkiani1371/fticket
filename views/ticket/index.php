<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
    <h1>بلیط ها</h1>
<table class="table">
    <thead>
    <th>ID</th> <th>Owner ID</th> <th>Flying from</th> <th>Flying to</th>
    <th>Departure Time</th> <th>Adults</th> <th>Children</th> <th>Infants</th>
    <th>Class</th> <th>Airline</th> <th>Price</th> <th>Purchase Date</th> <th>Edit</th>
    </thead>
        <?php foreach ($tickets as $ticket): ?>
            <tr>
                <?= "<td>$ticket->id</td> <td>$ticket->ownerId</td>
                <td>$ticket->flyingFrom</td> <td>$ticket->flyingTo</td> <td>$ticket->departureTime</td>
                <td>$ticket->adults</td> <td>$ticket->children</td> <td>$ticket->infants</td>
                <td>$ticket->class</td> <td>$ticket->airline</td> <td>$ticket->price</td>
                <td>$ticket->purchaseDate</td> 
                <td><a class='btn btn-primary' href='?r=ticket/edit&id=$ticket->id'>Edit</a></td>" //
                ?>
            </tr>
        <?php endforeach; ?>
</table>

<?= LinkPager::widget(['pagination' => $pagination]) ?>