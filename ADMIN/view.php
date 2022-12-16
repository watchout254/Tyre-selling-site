<div class="container">
    <figure>
        <?php
     include_once 'feedback.php';
     $stmt = $db->query('SELECT * FROM contact');
     $feedbacks = $stmt->fetchAll();
     echo '<table>';
     echo '<tr>';
     echo '<th>Name</th>';
     echo '<th>Email</th>';
     echo '<th>Message</th>';
     echo '<th>Subject</th>';
     echo '<th>Actions</th>';
        echo '</tr>';
        foreach($feedbacks as $feedback){
            echo '<tr>';
            echo '<td>'.$feedback['name'].'</td>';
            echo '<td>'.$feedback['email'].'</td>';
            echo '<td>'.$feedback['message'].'</td>';
            echo '<td><a href="delete.php?id='.$feedback['id'].'">Delete</a> <a href="edit.php?id='.$feedback['id'].'">Edit</a> </td>'; 
            echo '</tr>';
        }
     echo '</table>';

     
     ?>
    </figure>
</div>