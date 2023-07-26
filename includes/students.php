<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Mashina School</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body>
    <div class="d-flex" id="wrapper">
      <!-- Sidebar-->
      <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light">
          <img
            class="img-thumbnail"
            height="50px"
            width="50px"
            src="assets/img/logo.png"
          />
          Mashina School
        </div>
        <div class="list-group list-group-flush">
          <a
            class="list-group-item list-group-item-action list-group-item-light p-3"
            href="#!"
            >AAdd Record</a
          >
          <a
            class="list-group-item list-group-item-action list-group-item-light p-3"
            href="#!"
            >Update Record</a
          >
          <a
            class="list-group-item list-group-item-action list-group-item-light p-3"
            href="#!"
            >Delete Record</a
          >
        </div>
      </div>
      <!-- Page content wrapper-->
      <div id="page-content-wrapper">
        <!-- Top navigation-->
        <nav
          class="navbar navbar-expand-lg navbar-light bg-light border-bottom"
        >
          <div class="container-fluid">
            <button class="btn btn-primary" id="sidebarToggle">
              Toggle Menu
            </button>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="#!">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#students">Students</a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link" href="">Courses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#!">Sports</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <section id="main">
        <?php
// Connect to MySQL server
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "university";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all students from the database
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
$students = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Add Student</h2>
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Add Student</button>
        </form>

        <hr>

        <h2>View Students</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student) { ?>
                    <tr>
                        <td><?php echo $student['id']; ?></td>
                        <td><?php echo $student['name']; ?></td>
                        <td><?php echo $student['age']; ?></td>
                        <td><?php echo $student['email']; ?></td>
                        <td><?php echo $student['created_at']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Add Bootstrap JS and other scripts here -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</body>
</html>


        </section>
=======
<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Mashina School</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">

  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="../css/styles.css" rel="stylesheet" />
</head>

<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
      <div class="sidebar-heading border-bottom bg-light">
        <img class="img-thumbnail" height="50px" width="50px" src="assets/img/logo.png" />
        Mashina School
      </div>
      <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">AAdd Record</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Update Record</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Delete Record</a>
      </div>
    </div>
    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
      <!-- Top navigation-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
          <button class="btn btn-primary" id="sidebarToggle">
            Toggle Menu
          </button>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="#!">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#students">Students</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#!">Sports</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section id="main">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <?php
            // Retrieve form data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $age = $_POST['age'];

            // Database connection (adjust the values accordingly)
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "cat2";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            // Insert data into the database
            $sql = "INSERT INTO students (name, email, age) VALUES ('$name', '$email', '$age')";

            if ($conn->query($sql) === TRUE) {
              echo "Record inserted successfully.";
            } else {
              echo "Error inserting record: " . $conn->error;
            }

            // Close the database connection
            $conn->close();
            ?>

            <form action="" method="POST">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="phone">Age:</label>
                <input type="tel" class="form-control" id="age" name="age" required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>



        <hr>
        <div class="row">
          <?php

          $db = $conn;
          $tableName = "developers";
          $columns = ['id', 'name', 'age', 'email', 'created_at'];
          $fetchData = fetch_data($db, $tableName, $columns);

          function fetch_data($db, $tableName, $columns)
          {
            if (empty($db)) {
              $msg = "Database connection error";
            } elseif (empty($columns) || !is_array($columns)) {
              $msg = "columns Name must be defined in an indexed array";
            } elseif (empty($tableName)) {
              $msg = "Table Name is empty";
            } else {

              $columnName = implode(", ", $columns);
              $query = "SELECT " . $columnName . " FROM $tableName" . " ORDER BY id DESC";
              $result = $db->query($query);

              if ($result == true) {
                if ($result->num_rows > 0) {
                  $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                  $msg = $row;
                } else {
                  $msg = "No Data Found";
                }
              } else {
                $msg = mysqli_error($db);
              }
            }
            return $msg;
          }
          ?>
          
        </div>

      </section>
      <!-- Add Bootstrap JS and other scripts here -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</body>

</html>


</section>
>>>>>>> 3c35b9f (added)
