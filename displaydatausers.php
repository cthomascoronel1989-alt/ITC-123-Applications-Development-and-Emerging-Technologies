<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sample Users</title>
    <!-- Robotic font -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Orbitron', monospace;
            background: url("bg.jpg.jpg") no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            color: #000; /* Default font black */
        }
        .table-container {
            width: 90%;
            max-width: 900px;
            margin: 60px auto;
            padding: 25px;
            background: rgba(255, 255, 255, 0.55); /* less transparent */
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.6);
        }
        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #ff6600; /* orange heading */
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background: rgba(255,255,255,0.6); /* less transparent table */
            border-radius: 5px;
            overflow: hidden;
            color: #000; /* table text black */
        }
        th, td {
            border: 1px solid rgba(0,0,0,0.2);
            padding: 12px;
            text-align: center;
            color: #000; /* black text */
        }
        th {
            background: #ff6600; /* orange header */
            color: #000; /* black header text */
        }
        tr:nth-child(even) {
            background: rgba(0,0,0,0.05);
        }
        tr:hover {
            background: rgba(255,230,204,0.4);
        }
        form {
            margin: 0;
        }
        .delete-btn {
            background: #e74c3c;
            border: none;
            color: white;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s ease;
            font-family: 'Orbitron', monospace;
        }
        .delete-btn:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h3>SAMPLE USERS</h3>
        <table>
            <tr>
                <th>User ID</th>
                <th>UserName</th>
                <th>Password</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Action</th>
            </tr>
            <tbody>
            <?php
            $server_name ="localhost";
            $db_username = "root";
            $db_password ="";
            $db_name ="eteeapuserdb2";

            $conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);
            if(!$conn){
                die("Failed to connect: " . mysqli_connect_error());
            }

            $query = "SELECT * FROM eteeapusertbl2";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($Row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $Row["ID"]; ?></td>
                <td><?php echo $Row["username"]; ?></td>
                <td><?php echo str_repeat("•", strlen($Row["password"])); ?></td>
                <td><?php echo $Row["firstname"]; ?></td>
                <td><?php echo $Row["lastname"]; ?></td>
                <td>
                    <form action="delete.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
                        <input type="hidden" name="id" value="<?php echo $Row["ID"]; ?>">
                        <button type="submit" class="delete-btn">Delete</button>
                    </form>
                </td>
            </tr>
            <?php 
                }
            } else {
                echo "<tr><td colspan='6'>No records found</td></tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
