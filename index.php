<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link type="x-icon" rel="icon" href="icons/icons8-magento.svg">
  <title>Dashboard</title>
</head>

<body>
  <header>
    <div class="header">
      <div class="header__bar header__logo">
        <img src="icons/icons8-magento.svg" alt="logo">
        <p class="header__paragraph">COURIER MANAGEMENT SYSTEM</p>
      </div>
      <div class="flex__box">
        <div class="header__bar">
          <div class="header__bar-img">
            <img class="focus" src="icons/icons8-full-screen-30.png" alt="focus icon">
          </div>
          <div class="header__bar-img">
            <img class="envelope" src="icons/icons8-envelope-50.png" alt="envelope icon">
          </div>
          <div class="header__bar-img">
            <img class="bell" src="icons/icons8-bell-24.png" alt="bell icon">
          </div>
        </div>
        <div class="header__bar">
          <div class="header__img">
            <img src="ben-sweet-2LowviVHZ-E-unsplash.jpg " alt="profile picture">
          </div>
          <div class="header__text">
            <h1>John smith</h1>
            <h2>Super Admin</h2>
          </div>
        </div>
      </div>
    </div>
  </header>
  <article>
    <aside>
      <div class="aside">
        <h1 class="aside__header">Main</h1>
        <div class="aside__box">
          <div class="box__img">
            <img class="dashboard" src="icons/icons8-dashboard-layout-24.png" alt="Dashboard icon">
          </div>
          <h2 class="box__header"><a href="index.php">Dashboard</a>
          </h2>
        </div>
      </div>
      <div class="aside">
        <h1 class="aside__header">Packages</h1>
        <div class="aside__box">
          <div class="box__img">
            <img class="dashboard" src="icons/icons8-envelope-50.png" alt="cube icon">
          </div>
          <h2 class="box__header" id="send_package">Send</h2>
        </div>
        <div class="aside__box">
          <div class="box__img">
            <img class="dashboard" src="icons/icons8-square-32.png" alt="envelope icon">
          </div>
          <h2 class="box__header" id="lists">Send Package Lists</h2>
        </div>
        <div class="aside__box">
          <div class="box__img">
            <img class="dashboard" src="icons/icons8-orthogonal-view-48.png" alt="category icon">
          </div>
          <h2 class="box__header" id="proved">Approved</h2>
        </div>
        <div class="aside__box">
          <div class="box__img">
            <img class="dashboard" src="icons/icons8-price-tag-50.png" alt="tag icon">
          </div>
          <h2 class="box__header" id="pending">Pending</h2>
        </div>
      </div>
      <div class="aside">
        <h1 class="aside__header">Customer</h1>
        <div class="aside__box">
          <div class="box__img">
            <img class="dashboard" src="icons/icons8-import-16.png" alt="Dashboard icon">
          </div>
          <h2 class="box__header" id="customer">New customer </h2>
        </div>
        <div class="aside__box">
          <div class="box__img">
            <img class="dashboard" src="icons/icons8-cube-48.png" alt="Dashboard icon">
          </div>
          <h2 class="box__header" id="lists_customer">List of customer </h2>
        </div>
      </div>
      <div class="aside">
        <h1 class="aside__header">Users</h1>
        <div class="aside__box">
          <div class="box__img">
            <img class="dashboard" src="icons/icons8-android-16.png" alt="Dashboard icon">
          </div>
          <h2 id="user" class="box__header">Add user</h2>
        </div>
        <div class="aside__box">
          <div class="box__img">
            <img class="dashboard" src="icons/icons8-iphone-14-pro-50.png" alt="Dashboard icon">
          </div>
          <h2 class="box__header" id="branch">Branch</h2>
        </div>
      </div>
    </aside>
    <main>
      <section class="main">
        <?php  
              if(isset($_GET['update'])){
                include('sends/send_conn.php');
                $id= $_GET['update'];

                $query = "SELECT * FROM send_fill_form where send_id = '$id'";
                $result = mysqli_query($conn, $query);
                while($row = mysqli_fetch_array($result)) {
                ?>
                    <section class="form_package">
                      <div class="container" id="form_container">
                        <form action="sends/update.php" method="POST">
                        
                          <div class="form_input">
                            <div class="input">
                              <input type="hidden" value = "<?php echo $row['send_id']?>" name="send_id" >
                              <input type="number" value = "<?php  echo $row['code_number']?>" name="package" placeholder=" Package Code number" required>
                              <input type="text" value = "<?php  echo $row['sender_name']?>"  name="sender" placeholder=" Sender name " required>

                            </div>
                            <div class="input">
                              <input type="text" value = "<?php  echo $row['receiver_name']?>"  name="receiver" placeholder=" Receiver Name" required>
                              <input type="number" value = "<?php  echo $row['pass_code']?>"  name="passcode" placeholder=" Pass code" required>
                            </div>
                            <div class="input">
                              <input type="text" value = "<?php  echo $row['package_from']?>"  name="from" placeholder=" Package from" required>
                              <input type="text" value = "<?php  echo $row['package_to']?>"  name="pacto" placeholder=" Package to" required>
                            </div>
                            <div class="input">
                              <input type="submit" value="Send" name="update_send">
                            </div>
                          </div>
                        </form>
                      </div>
                    </section>
          <?php 
                }
              }
                else {
                  ?>
                  <div class="main__box">
          <div class="box__flex">
            <div class="flex__img">
              <div class= "dashboard__icons">
                <img src="icons/icons8-display-50.png" alt="display icon">
              </div>
            </div>
            <div class="box__text">
              <h2 class="box__h">$370144</h2>
              <p class="box__p">Total Purchase</p>
            </div>
          </div>
          <div class="box__flex">
            <div class="flex__img">
              <div class= "dashboard__icons">
                <img src="icons/icons8-display-50.png" alt="display icon">
              </div>
            </div>
            <div class="box__text">
              <h2 class="box__h">$370144</h2>
              <p class="box__p">Total Purchase</p>
            </div>
          </div>
          <div class="box__flex">
            <div class="flex__img">
              <div class= "dashboard__icons">
                <img src="icons/icons8-display-50.png" alt="display icon">
              </div>
            </div>
            <div class="box__text">
              <h2 class="box__h">$370144</h2>
              <p class="box__p">Total Purchase</p>
            </div>
          </div>
          <div class="box__flex">
            <div class="flex__img">
              <div class= "dashboard__icons">
                <img src="icons/icons8-display-50.png" alt="display icon">
              </div>
            </div>
            <div class="box__text">
              <h2 class="box__h">$370144</h2>
              <p class="box__p">Total Purchase</p>
            </div>
          </div>
        </div>


        <div class="main__box">
          <div class="box__flex">
            <div class="box__text">
              <h2 class="box__h">100</h2>
              <p class="box__p">Customers </p>
            </div>
            <div class="flex__img2">
              <div class= "dashboard__icons">
                <img src="icons/icons8-display-50.png" alt="display icon">
              </div>
            </div>
          </div>
          <div class="box__flex">
            <div class="box__text">
              <h2 class="box__h">100</h2>
              <p class="box__p">Suppliers</p>
            </div>
            <div class="flex__img2">
              <div class= "dashboard__icons">
                <img src="icons/icons8-display-50.png" alt="display icon">
              </div>
            </div>
          </div>
          <div class="box__flex">
            <div class="box__text">
              <h2 class="box__h">120</h2>
              <p class="box__p">Purchase Invoice</p>
            </div>
            <div class="flex__img2">
              <div class= "dashboard__icons">
                <img src="icons/icons8-display-50.png" alt="display icon">
              </div>
            </div>
          </div>
          <div class="box__flex">
            <div class="box__text">
              <h2 class="box__h">105</h2>
              <p class="box__p">Sales invoice</p>
            </div>
            <div class="flex__img2">
              <div class= "dashboard__icons">
                <img src="icons/icons8-display-50.png" alt="display icon">
              </div>
            </div>
          </div>
        </div>

                  <?php

                }
                
                
                ?>

      </section>
      <?php
        if(isset($_GET['branch'])){
          ?>
      <div class="success" id="success">
        <?php
          echo $_GET['branch'];
          ?>
      </div>
      <?php
        }
        if(isset($_GET['error'])){
          ?>
      <div class="error" id="error">
        <?php
          echo $_GET['error'];
          ?>
      </div>
      <?php
        }
        ?>

      <?php 
        if(isset($_GET['success'])){
          ?>
      <div class="success testing" id="success">
        <?php

          echo $_GET['success'];
          ?>
      </div>
      <?php
        }
        ?>
      <section class="sends" id="sends">
        <section class="form_send_package">
          <div class="container" id="send_form_container">
            <form action="sends/send_insert.php" method="POST">
              <div class="btn">
                <button class="closeBtn">&times;</button>
              </div>
              <div class="form_input">
                <div class="input">
                  <input type="number" name="package" placeholder=" Package Code number" required>
                  <input type="text" name="sender" placeholder=" Sender name " required>

                </div>
                <div class="input">
                  <input type="text" name="receiver" placeholder=" Receiver Name" required>
                  <input type="number" name="passcode" placeholder=" Pass code" required>
                </div>
                <div class="input">
                  <select name="from" id="from">
                    <?php
                    include('sends/send_conn.php');
                    $query = "SELECT * FROM branch";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)) {
                      ?>
                    <option value="<?php echo $row['branch_name'] ?>"><?php echo $row['branch_name'] ?></option>
                    <?php
                    }
                    ?>
                  </select>
                  <select name="pacto" id="pacto">
                    <?php
                    include('sends/send_conn.php');
                    $query = "SELECT * FROM branch";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_array($result)) {
                      ?>
                    <option value="<?php echo $row['branch_name'] ?>"><?php echo $row['branch_name'] ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="input">
                  <input type="submit" value="Send" name="send_package">
                </div>
              </div>
            </form>
          </div>
        </section>

        <section class="customer_section">
          <div class="customer__container">
            <form action="customer/customer_insert.php" method="POST">
              <div class="btn">
                <button class="customerBtn">&times;</button>
              </div>
              <div class="form_input">
                <div class="input">
                  <input type="text" name="first_name" placeholder="First Name" required>
                  <input type="text" name="last_name" placeholder="Last Name" required>
                </div>
                <div class="input">
                  <input type="number" name="phone" placeholder="Phone number" required>
                </div>
                <div class="input">
                  <input type="submit" value="Add customer" name="customer">
                </div>
              </div>
            </form>
          </div>
        </section>

        <section class="user_section">
          <div class="user__container">
            <form action="user/user_insert.php" method="POST">
              <div class="btn">
                <button class="userBtn">&times;</button>
              </div>
              <div class="form_input">
                <div class="input">
                  <input type="text" name="first_name" placeholder=" First Name" required>
                  <input type="text" name="last_name" placeholder=" Last Name" required>
                </div>
                <div class="input">
                  <input type="text" name="username" placeholder=" Username" required>
                  <input type="number" name="password" placeholder=" Password" required>
                </div>
                <div class=" input">
                  <input type="submit" value="Add user" name="user_name">
                </div>
              </div>
            </form>
          </div>
        </section>

        <section class="branch_section">
          <div class="branch__container">
            <form action="branch/branch_insert.php" method="POST">
              <div class="btn">
                <button class="branchBtn">&times;</button>
              </div>
              <div class="form_input">
                <div class="input">
                  <input type="text" name="branch_name" placeholder=" Branch Name" required>
                </div>
                <div class="input">
                  <input type="submit" value="Add branch" name="branch">
                </div>
              </div>
            </form>
          </div>
        </section>


        <div class="sends__table">
          <h1 class="Header">
            Send Package Lists
          </h1>
          <table class="table__list" border=1px>
            <thead>
              <tr>
                <th>Code Number</th>
                <th>Sender Name</th>
                <th>Receiver Name</th>
                <th>Pass Code</th>
                <th>Package From</th>
                <th>Package To</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include('inc/connection.php');
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
                <td> <?php echo $row['Status'] ?></td>
                <td>
                  <a id="updatebtn" href="index.php?update=<?php echo $row['send_id'] ?>">
                    <img class="ico_ns" src="icons/icons8-update.svg" alt="icon">
                  </a>
                  <a href="sends/delete.php?delete= <?php echo $row['send_id'] ?>">
                    <img class="ico_ns" src="icons/icons8-delete.svg" alt="icon">
                  </a>
                </td>
              </tr>
              <?php
          }
          ?>
            </tbody>
          </table>
          </div>
          <div class="approved__table">
            <h1 class="Header">
              Approved Package Lists
            </h1>
            <table class="table__list" border=1px>
              <thead>
                <tr>
                  <th>Code Number</th>
                  <th>Sender Name</th>
                  <th>Receiver Name</th>
                  <th>Pass Code</th>
                  <th>Package From</th>
                  <th>Package To</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include('inc/connection.php');
                $select = "SELECT * FROM send_fill_form where Status='Approved'";
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
                  <td> <?php echo $row['Status'] ?></td>
                  <td>
                    <a href="sends/delete.php?delete=<?php echo $row['send_id'] ?>">
                      <img class="icons" src="icons/icons8-delete.svg" alt="icon">
                    </a>
                  </td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
          <div class="pending__table">
            <h1 class="Header">
              Pending Package Lists
            </h1>
            <table class="table__list" border=1px>
              <thead>
                <tr>
                  <th>Code Number</th>
                  <th>Sender Name</th>
                  <th>Receiver Name</th>
                  <th>Pass Code</th>
                  <th>Package From</th>
                  <th>Package To</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include('inc/connection.php');
                $select = "SELECT * FROM send_fill_form where Status='Pending'";
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
                  <td> <?php echo $row['Status'] ?></td>
                  <td>
                    <a href="update/pending.php?update=<?php echo $row['send_id'] ?>">
                      <img class="icons" src="icons/icons8-update.svg" alt="icon">
                    </a>
                  </td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>  
        <div class="customer__table">
          <h1 class="Header">
            Lists of customer
          </h1>
          <table class="table__list" border=1px>
            <thead>
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include('inc/connection.php');
              $select = "SELECT * FROM customer ";
              $result = mysqli_query($conn, $select);
              while($row = mysqli_fetch_assoc($result)) {
              ?>
              <tr>
                <td> <?php echo $row['firstname'] ?></td>
                <td> <?php echo $row['lastname'] ?></td>
                <td> <?php echo $row['phone'] ?></td>
                <td>
                  <a href="customer/update.php?update=<?php echo $row['customer_id'] ?>">
                    <img class="icon_s icon__size" src="icons/icons8-update.svg" alt="icon">
                  </a>
                  <a href="customer/delete.php?delete= <?php echo $row['customer_id'] ?>">
                    <img class="icon_s icon__size" src="icons/icons8-delete.svg" alt="icon">
                  </a>
                </td>
              </tr>
              <?php
          }
          ?>
            </tbody>
          </table>
        </div>
          

    


      </section>
    </main>
  </article>

  <script src="js/script.js"></script>
  <script src="js/user.js"></script>
  <script src="js/branch.js"></script>
  <script src="js/approved.js"></script>
  <script src="js/pending.js"></script>
  <script src="js/customer.js"></script>
  <script src="js/packages_lists.js"></script>
  <script src="js/customer_lists.js"></script>
  <script src="js/update.js"></script>
</body>

</html>