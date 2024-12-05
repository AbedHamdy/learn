<link rel="stylesheet" href="./studentssss.css">
<?php 

    require('./data.php');

?>

<table>
    <thead>
    <thead>
        <tr>
            <th>id</th>
            <th></th>
            <th>last_name</th>
            <th>email</th>
            <th>gender</th>
            <th>gpa</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($students as $student) :?>
            <tr>
                <?php foreach($student as $key => $value) :?>
                    <td><?php echo $value ?></td>
                <?php endforeach ?>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

