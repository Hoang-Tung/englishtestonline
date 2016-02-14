<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($tests as $test): ?>
    <tr>
        <td><?php echo $test['Test']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $test['Test']['title'], array('action' => 'view', $test['Test']['id'])
                );
            ?>
        </td>
    </tr>
<?php endforeach; ?>



</table>
