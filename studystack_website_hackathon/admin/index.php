<?php
include "../db_conn.php";
@include 'config.php';

session_start();

if(!isset($_SESSION['user-id'])){
    header('location:' . ROOT_URL .'/login_form.php');
    die();
 }
 if(!isset($_SESSION['admin'])){
    header('location:' . ROOT_URL .'/login_form.php');
    die();
 }
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard | StudyStack</title>
    <link rel="icon" href="../assets/img/title_logo.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&family=Roboto+Slab:wght@300;400&display=swap"
        rel="stylesheet" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Welcome Back<span><?php echo $_SESSION['admin_name']; ?>!</span></h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data..."><span><i
                        class="fa-solid fa-magnifying-glass"></i></span>

            </div>

            <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
            <!-- <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                </div>
            </div> -->
        </section>
        <section class="table__body">
            <a href="../register_form.php" class="btn btn-dark mb-3 new-user ">Add New User</a>
            <a href="../logout.php" class="btn btn-dark mb-3 logout ">Logout</a>

            <table class="admin-table">
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Username <span class="icon-arrow">&UpArrow;</span></th>
                        <th> User_type <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Email <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Encrypted Password <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Edit User</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
        $sql = "SELECT * FROM `user_form`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
                    <tr>
                        <td data-cell="User-id"><?php echo $row["id"] ?></td>
                        <td data-cell="Name"><?php echo $row["name"] ?></td>
                        <td data-cell="User-Type">
                            <div class="<?php 
                            if($row["user_type"]=='admin'){
                            $config_usr = 'is_admin';
                            }
                            elseif($row['user_type']== 'user'){
                            $config_usr = 'is_user';
                            } echo $config_usr?>"><?php echo $row["user_type"] ?></div>
                        </td>
                        <td data-cell="Email"><?php echo $row["email"] ?></td>
                        <td data-cell="Encrypted Password"><?php echo $row["password"] ?></td>
                        <td data-cell="Edit User">
                            <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i
                                    class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i
                                    class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                    <?php
        }
        ?>
                </tbody>
            </table>
        </section>
    </main>
    <script src="script.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>