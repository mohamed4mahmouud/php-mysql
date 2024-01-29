<?php
include 'config.php';
?>
<?php
    $name = $email = $gender = $recieve = "";

    if (isset($_POST['submit-btn'])) {
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['gender'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $recieve = isset($_POST['recieve']) ? "yes" : "NO";
    
            $sql = "INSERT INTO users (username, email, gender, recieve_email)
                    VALUES ('$name', '$email', '$gender','$recieve')";
    
        mysqli_query($conn, $sql);
            
        };
    }
    ?>

<?php
$sql = 'SELECT id, username, email, gender, recieve_email FROM users';
mysqli_select_db($conn, $dbname);
$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Could not get data: ' . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Details</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php if(mysqli_num_rows($result)>0) {?>
    <table>
        <tr> 
            <th>USER ID</th>
            <th>USER NAME</th>
            <th>USER EMAIL</th>
            <th>Gender</th>
            <th>Receive Email</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) {?>
         <tr>
         <td>
            <?php echo $row['id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['recieve_email']; ?></td>
         </tr>
         <?php
        }
        ?>   
    </table>    
    <?php
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
    ?>
    
</body>
</html>