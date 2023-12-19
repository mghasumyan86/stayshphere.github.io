<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stayspheredb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$thankYouMessage = $errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["bookRoomId"])) {
    $roomIdToBook = $_POST["bookRoomId"];
    $roomType = $_POST["roomType"];
    $roomPrice = $_POST["roomPrice"];

    // Server-side validation
    if (!is_numeric($roomIdToBook) || !preg_match("/^[a-zA-Z]+$/", $roomType) || !is_numeric($roomPrice)) {
        $errorMessage = "Invalid input. Please check your entries.";
    } else {
        $bookSql = "UPDATE rooms SET availabilityStatus = 'Booked' WHERE id = '$roomIdToBook'";

        if ($conn->query($bookSql) === TRUE) {
            $thankYouMessage = "Thank you for booking! We are looking forward to your stay.";
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            $errorMessage = "Error booking room: " . $conn->error;
        }
    }
}

$result = $conn->query("SELECT * FROM rooms WHERE availabilityStatus = 'Available'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StaySphere B&B - Rooms</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.cdnfonts.com/css/cottage" rel="stylesheet">
    <script>
        function validateForm() {
            var roomId = document.forms["bookingForm"]["bookRoomId"].value.trim();
            var roomType = document.forms["bookingForm"]["roomType"].value.trim();
            var roomPrice = document.forms["bookingForm"]["roomPrice"].value.trim();

            if (roomId === "" || isNaN(roomId) || roomType === "" || roomPrice === "" || isNaN(roomPrice)) {
                document.getElementById("validationErrors").innerHTML = "Please fill in all the required fields with valid input.";
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>

<body>
    <header>
        <h1 id="homeHeader">StaySphere B&B - Available Rooms</h1>
        <nav>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="rooms.php">Rooms</a></li>
                <li><a href="reservation.php">Reservation</a></li>
                <li><a href="documentation.html">Documentation</a></li>
            </ul>
        </nav>
    </header>

    <section id="room-table">
        <?php
        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>Room ID</th>
                        <th>Room Type</th>
                        <th>Room Price</th>
                        <th>Availability Status</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["roomType"] . "</td>
                        <td>" . $row["roomPrice"] . "</td>
                        <td>" . $row["availabilityStatus"] . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "No available rooms.";
        }
        ?>
    </section>

    <section id="book-room-form">
        <h2>Book a Room</h2>

        <?php
        if (isset($thankYouMessage)) {
            echo "<p style='color: green;'>$thankYouMessage</p>";
        } elseif (isset($errorMessage)) {
            echo "<p style='color: red;'>$errorMessage</p>";
        }
        ?>

        <div id="validationErrors" style="color: red;"></div>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" onsubmit="return validateForm();">
            <label for="bookRoomId">Room ID:</label>
            <input type="text" name="bookRoomId" required>
            <br>

            <label for="roomType">Room Type:</label>
            <input type="text" name="roomType" required>
            <br>

            <label for="roomPrice">Room Price:</label>
            <input type="text" name="roomPrice" required>
            <br>

            <input type="submit" value="Book Room">
        </form>
    </section>

    <footer>
        <p>&copy; 2023 StaySphere B&B <br>
        Vancouver, BC - 604-687-1000- staysphere@gmail.com</p>
    </footer>
</body>

</html>

<?php
$conn->close();
?>
