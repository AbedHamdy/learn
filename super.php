<link rel="stylesheet" href="./studentssss.css">
<?php 

    require("./data.php");

    echo "<table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>first_name</th>
                    <th>last_name</th>
                    <th>email</th>
                    <th>gender</th>
                    <th>gpa</th>
                </tr>
            </thead>
            <tbody>";

    foreach($students as $student)
    {
        echo " <tr>";
        foreach($student as $key => $value)
        {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";

?>