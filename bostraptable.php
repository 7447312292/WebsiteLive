<?php
include  'connect.php';


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.6/b-3.0.2/b-html5-3.0.2/b-print-3.0.2/datatables.min.css" rel="stylesheet">
 <link rel="stylesheet" href="style.css">
<script src="script.js"></script>
</head>
<body>
    
<div class="container mt-5">
     <div class="row">
         <div class="col-12">
              <div class="data_table">
                <table id="example" class="table table-striped table-bordered">
                    <thead class="table-dark">
                    <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Password</th>
                    <th>City</th>
                    <th>Pincode</th>
                    <th>Message</th>
                    
                </tr>
                    </thead>
                    <tbody>
                <?php
                $sql = "SELECT * FROM `contact_form`";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>
                                <td>' . $row['comp_name'] . '</td>
                                <td>' . $row['email'] . '</td>
                                <td>' . $row['mob_num'] . '</td>
                                <td>' . $row['password'] . '</td>
                                <td>' . $row['city'] . '</td>
                                <td>' . $row['pincode'] . '</td>
                                <td>' . $row['message'] . '</td>
                                
                            </tr>';
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </tbody>
                    <tfoot>
                        <tr>
                        <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Password</th>
                    <th>City</th>
                    <th>Pincode</th>
                    <th>Message</th>
                        </tr>
                    </tfoot>
                </table>
              </div>
         </div>
     </div>
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="js/datatables.min.js"></script>
  <script src="js/pdfmake.min.js"></script>
  <script src="js/vfs_fonts.js"></script>
  <script src="js/script.js"></script>




</body>
</html>