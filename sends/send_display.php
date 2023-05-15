<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <main>
    <div class="sends__table">
      <table class="table__list">
        <thead>
          <tr>
            <th>Code Number</th>
            <th>Sender Name</th>
            <th>Receiver Name</th>
            <th>Pass Code</th>
            <th>Package From</th>
            <th>Package To</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include('send_conn.php');
          $select = "SELECT * FROM send_fill_form ";
          $result = mysqli_query($conn, $select);
          while($row = mysqli_fetch_assoc($result)) {
            ?>
          <tr>
            <td> <?php echo $row['code_number'] ?></td>
            <td> <?php echo $row['sender_name'] ?></td>
            <td> <?php echo $row['receiver_name'] ?></td>
            <td> <?php echo $row['pass_code'] ?></td>
            <td> <?php echo $row['package_from'] ?></td>
            <td> <?php echo $row['package_to'] ?></td>
            <td>
              <a href="update.php?update= <?php echo $row['send_id'] ?>">
                <img class="icons" src="../icons/icons8-update.svg" alt="icon gif">
              </a>
              <a href="delete.php?delete= <?php echo $row['send_id'] ?>">
                <img class="icons" src="../icons/icons8-delete.svg" alt="icon gif">
              </a>
            </td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </main>
</body>

</html>