 <?php
             //   error_reporting(E_WARNING);

                        $servername = 'localhost';
                        $username = 'Jack2';
                        $password = '2304';
                        $dbname = 'ronskitchen';

                   
   

                $conn = mysqli_connect($servername, $username, $password, $dbname, $user);

                if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }

                    $Id = $_POST['Id'];
                    $Name = $_POST['Name'];
                    $Phone = $_POST['Phone'];
                    $Comment = $_POST['Comment'];
   
                    $sql = "INSERT INTO comments (Id, Name, Phone, Comment)
                    VALUES ('$Id', '$Name', '$Phone','$Comment');";

                    if (mysqli_query($conn, $sql)) {
                    echo "New record added";
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                    mysqli_close($conn);
                    ?>
