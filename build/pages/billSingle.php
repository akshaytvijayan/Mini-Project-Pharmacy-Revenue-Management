<?php
session_start();
$dos = $_GET['dos'];
$_SESSION['dos'] = $dos;
if (isset($_GET['id'])) {
  $id = $_GET['id'];
$_SESSION['id'] = $id;
  //echo $id;
}
?>
<!--
=========================================================
* Soft UI Dashboard Tailwind - v1.0.5
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard-tailwind
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
  <title>Night Pharmacy</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Popper -->
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <!-- Main Styling -->
  <link href="../assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />

  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">

  <?php
  require "includes/sidebar.php";
  ?>

  <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
    <!-- Navbar -->
    <nav navbar-main class="relative flex flex-wrap items-center justify-between px-3 py-2 mx-4 mt-6 transition-all bg-gradient-to-tl from-green-600 to-lime-400 duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-scroll="true">
      <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
          <!-- breadcrumb -->
          <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="leading-normal text-sm">
              <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Billing</li>
          </ol>
          <h6 class="mb-0 font-bold capitalize">Billing</h6>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
          <div class="flex items-center md:ml-auto md:pr-4">

          </div>
          <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
            <!-- online builder btn  -->
            <!-- <li class="flex items-center">
                <a class="inline-block px-8 py-2 mb-0 mr-4 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-fuchsia-500 ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs text-fuchsia-500 hover:border-fuchsia-500 active:bg-fuchsia-500 active:hover:text-fuchsia-500 hover:text-fuchsia-500 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
              </li> -->
            <li class="flex items-center">
              <a href="includes/logout.php" class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500">
                <i class="fa fa-user sm:mr-1"></i>
                <span class="hidden sm:inline">Sign Out</span>
              </a>
            </li>
            <li class="flex items-center pl-4 xl:hidden">
              <a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500" sidenav-trigger>
                <div class="w-4.5 overflow-hidden">
                  <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                </div>
              </a>
            </li>
            <li class="flex items-center px-4">
              <a href="javascript:;" class="p-0 transition-all text-sm ease-nav-brand text-slate-500">
                <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog" aria-hidden="true"></i>
                <!-- fixed-plugin-button-nav  -->
              </a>
            </li>

            <!-- notifications -->

            <li class="relative flex items-center pr-2">
              <p class="hidden transform-dropdown-show"></p>
              <a dropdown-trigger href="javascript:;" class="block p-0 transition-all text-sm ease-nav-brand text-slate-500" aria-expanded="false">
                <i class="cursor-pointer fa fa-bell" aria-hidden="true"></i>
              </a>

              <ul dropdown-menu class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                <!-- add show class on dropdown open js -->
                <li class="relative mb-2">
                  <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                    <div class="flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-white text-sm h-9 w-9 max-w-none rounded-xl" />
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-1 font-normal leading-normal text-sm"><span class="font-semibold">New message</span> from Laur</h6>
                        <p class="mb-0 leading-tight text-xs text-slate-400">
                          <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="relative mb-2">
                  <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                    <div class="flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="inline-flex items-center justify-center mr-4 text-white text-sm bg-gradient-to-tl from-gray-900 to-slate-800 h-9 w-9 max-w-none rounded-xl" />
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-1 font-normal leading-normal text-sm"><span class="font-semibold">New album</span> by Travis Scott</h6>
                        <p class="mb-0 leading-tight text-xs text-slate-400">
                          <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="relative">
                  <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                    <div class="flex py-1">
                      <div class="inline-flex items-center justify-center my-auto mr-4 text-white transition-all duration-200 ease-nav-brand text-sm bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-1 font-normal leading-normal text-sm">Payment successfully completed</h6>
                        <p class="mb-0 leading-tight text-xs text-slate-400">
                          <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="w-full px-6 py-6 mx-auto">
      <!-- content -->

      <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 mt-6 md:w-7/12 md:flex-none">
          <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">

            <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl flex justify-between">
              <h6 class="mb-0">Pay Bill</h6>
              <a href="treceipt.php?id=<?php echo $id ?>" class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer bg-150 bg-gradient-to-tl from-green-600 to-lime-400"></i>
                    Total Purchases
              </a>
            </div>
            <div class="flex-auto p-4 pt-6">
              <ul class="flex flex-col pl-0 mb-0 rounded-lg">

                <?php
                require "includes/conn.php";
                $total = 0;
                $balance = 0;
                $res = mysqli_execute_query($conn, "select sum(balance) as balance, sum(total) as total from sales where pid=$id and dos='$dos'");
                $count = mysqli_num_rows($res);

                if ($res == TRUE) {
                  if ($count >= 1) {

                    $rows = mysqli_fetch_assoc($res);
                    $total = $rows['total'];
                    $balance = $rows['balance'];
                  }
                }

                if ($total == NULL) {
                  $sql = "SELECT pid, name, dos, SUM(balance) as balance, SUM(total) as total FROM sales where pid=$id GROUP BY pid, name ORDER BY pid;";
                  //create a query that fetch data from the database
                  $res = mysqli_query($conn, $sql);

                  //check if there are any records in the database
                  if ($res == TRUE) {
                    $count = mysqli_num_rows($res);
                    $sn = 1;
                    if ($count > 0) {
                      while ($rows = mysqli_fetch_assoc($res)) {
                        $id = $rows['pid'];
                        $name = $rows['name'];
                        $dos = $rows['dos'];
                        $total = $rows['total'];
                        $balance = $rows['balance'];
                      }
                    }
                  }
                }

                $sql = "SELECT pid, name, dos, SUM(balance) as balance, SUM(total) as total FROM sales where pid=$id and dos='$dos' GROUP BY pid, name ORDER BY pid;";
                //create a query that fetch data from the database
                $res = mysqli_query($conn, $sql);

                //check if there are any records in the database
                if ($res == TRUE) {
                  $count = mysqli_num_rows($res);
                  $sn = 1;
                  if ($count > 0) {
                    while ($rows = mysqli_fetch_assoc($res)) {
                      $name = $rows['name'];
                      $dos = $rows['dos'];
                    }
                  }
                }

                $discount = 0;
                $rs = mysqli_execute_query($conn, "SELECT discount FROM discounts WHERE pid=$id AND dos='$dos'");
                if (mysqli_num_rows($rs) > 0){
                  $rs = mysqli_fetch_row($rs);
                  $discount = $rs[0];
                }

                $total = $total - ($total*$discount/100);

                ?>
                <li class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
                  <div class="flex flex-col">
                    <h6 class="mb-4 leading-normal text-sm"><?php echo $name; ?></h6>
                    <span class="mb-2 leading-tight text-xs">Date of Service: <span class="font-semibold text-slate-700 sm:ml-2"><?php echo $dos; ?></span></span>
                    <span class="leading-tight text-xs">Total Bill: <span class="font-semibold text-slate-700 sm:ml-2">₹ <?php echo round($total, 2) ?></span></span>

                    <span class="leading-tight text-xs">Balance: <span class="font-semibold text-slate-700 sm:ml-2">₹
                        <?php
                        echo round($balance, 2);
                        ?></span></span>
                    <span class="leading-tight text-xs">Discount: <span class="font-semibold text-slate-700 sm:ml-2"><?php echo $discount.'%'; ?></span></span>
                  </div>
                  <div class="ml-auto text-right">
                    <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-green-600 to-lime-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="billSingle.php?id=<?php echo $id; ?>"></i>

                    </a>

                  </div>
                </li>
                <form action="includes/pay.php" method="post">
                  <div class="mb-4">
                    <input type="text" name="amount" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Amount" aria-label="Name" aria-describedby="email-addon" required />
                  </div>
                  <div class="mb-4">
                    <input type="text" name="discount" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Discount" aria-label="Name" aria-describedby="email-addon"/>
                  </div>
                  <div class="mb-4">
                    <select name="pmethod" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Payment Method" aria-label="Name" aria-describedby="email-addon" required>
                      <option value="CASH">CASH</option>
                      <option value="CARD">CARD</option>
                      <option value="UPI">UPI</option>

                    </select>
                    <!-- <input type="text" name="pmethod" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Payment Method" aria-label="Name" aria-describedby="email-addon" required /> -->
                  </div>
                  <div class="mb-4">
                    <input type="text" name="comment" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Comment" aria-label="Name" aria-describedby="email-addon" required />
                    <input type="hidden" name="total" value="<?php echo $total; ?>" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Comment" aria-label="Name" aria-describedby="email-addon" />
                    <input type="hidden" name="balance" value="<?php echo $balance; ?>" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Comment" aria-label="Name" aria-describedby="email-addon" />
                    <input type="hidden" name="pid" value="<?php echo $id; ?>" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Comment" aria-label="Name" aria-describedby="email-addon" />
                  </div>

                  <div class="text-center">
                    <button type="submit" name="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-green-600 to-lime-400 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Pay</button>
                  </div>
                </form>
                <div class="flex justify-between p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                  <h6 class="mb-10">Payment History</h6>
                  <a href="receipt.php?id=<?php echo $id ?>" class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-md ease-soft-in bg-150 bg-gradient-to-tl from-green-600 to-lime-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="billSingle.php?id=<?php echo $id; ?>"></i>
                    Print Receipt
                  </a>
                </div>
                <ul class="flex flex-col pl-0 mb-0 rounded-lg">

                  <?php
                  require "includes/conn.php";
                  $sql = "SELECT * FROM payments WHERE pid = $id and dos='$dos' ORDER BY id DESC";
                  //create a query that fetch data from the database
                  $res = mysqli_query($conn, $sql);

                  //check if there are any records in the database
                  if ($res == TRUE) {
                    $count = mysqli_num_rows($res);
                    $sn = 1;
                    if ($count > 0) {
                      while ($rows = mysqli_fetch_assoc($res)) {
                        $payment = $rows['payment'];
                        $pmethod = $rows['pmethod'];
                        $comment = $rows['comment'];
                        $pdate = $rows['pdate'];

                  ?>
                        <li class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg- shadow-soft-xl">
                          <div class="flex flex-col">
                            <h6 class="mb-4 leading-normal text-sm"><?php echo $pmethod; ?></h6>
                            <span class="mb-2 leading-tight text-xs">Payment Date: <span class="font-semibold text-slate-700 sm:ml-2"><?php echo $pdate; ?></span></span>

                            <span class="leading-tight text-xs">Payment: <span class="font-semibold text-slate-700 sm:ml-2">₹ <?php echo $payment; ?></span></span>
                          </div>
                          <div class="ml-auto text-right">
                            <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-green-600 to-lime-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="billSingle.php?id=<?php echo $id; ?>"></i>

                            </a>
                            <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="#">...</a>
                          </div>
                        </li>
                  <?php
                      }
                    } else {
                      echo "Nothing to show here.. Make payments and then check later";
                    }
                  }
                  ?>
                </ul>
            </div>
          </div>
        </div>
        <div class="w-full max-w-full px-3 mt-6 md:w-5/12 md:flex-none">
          <div class="relative flex flex-col h-full min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
              <div class="flex flex-wrap -mx-3">
                <div class="max-w-full px-3 md:w-1/2 md:flex-none">
                  <h6 class="mb-0">Bill Breakdown</h6>
                </div>
                <div class="flex space-x-2 items-center justify-end max-w-full px-3 md:w-1/2 md:flex-none">
                  <span class="mr-2 font-semibold">Dos</span>
                  <i class="mr-2 far fa-calendar-alt"></i>
                  <small><?php echo $dos; ?></small>
                </div>
              </div>
            </div>
            <div class="flex-auto p-4 pt-6">
              <h6>Drugs</h6>
              <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
              <?php
              require "includes/conn.php";
              $dos = $_GET['dos'];
              $sql = "SELECT a.*, b.tax FROM sales AS a LEFT JOIN drugs AS b ON a.drug=b.name WHERE pid = $id AND dos = '$dos' AND a.qty > 0";
              //create a query that fetch data from the database
              $res = mysqli_query($conn, $sql);

              //check if there are any records in the database
              if ($res == TRUE) {
                $count = mysqli_num_rows($res);
                $sn = 1;
                if ($count > 0) {
                  while ($rows = mysqli_fetch_assoc($res)) {
                    $id = $rows['pid'];
                    $drug = $rows['drug'];
                    $sprice = $rows['sprice'];
                    $qty = $rows['qty'];
                    $price = $sprice * $qty;
                    $tax = $rows['tax'] / 100;
                    $price += ($price * $tax);
              ?>
                    <li class="relative flex justify-between px-4 py-2 pl-0 mb-2 bg-white border-0 border-t-0 text-inherit rounded-xl">
                      <div class="flex items-center">
                        <button class="leading-pro ease-soft-in text-xs bg-150 w-6.35 h-6.35 p-1.2 rounded-3.5xl tracking-tight-soft bg-x-25 mr-4 mb-0 flex cursor-pointer items-center justify-center border border-solid border-lime-500 border-transparent bg-transparent text-center align-middle font-bold uppercase text-lime-500 transition-all hover:opacity-75"><i class="fas fa-arrow-up text-3xs"></i></button>
                        <div class="flex flex-col">
                          <h6 class="mb-1 leading-normal text-sm text-slate-700"><?php echo $drug; ?></h6>
                        </div>
                      </div>
                      <div class="flex flex-col items-center justify-center">
                        <p class="relative z-10 items-center inline-block m-0 font-semibold leading-normal text-transparent bg-gradient-to-tl from-green-600 to-lime-400 text-sm bg-clip-text">₹ <?php echo $price; ?></p>
                      </div>
                    </li>
              <?php
                  }
                }
              }
              ?>
              </ul>

            </div>
          </div>
        </div>
      </div>

      <footer class="pt-4">
        <div class="w-full px-6 mx-auto">
          <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
            <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
              <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                © Copyright
                <script>
                  document.write(new Date().getFullYear() + " ");
                </script>
                <i class="fa fa-heart"></i>
                <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank"></a>
                .All Rights Reserved
              </div>
            </div>
            <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
              <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                <li class="nav-item">
                  <a href="../home.php" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Home</a>
                </li>
                <li class="nav-item">
                  <a href="../about.php" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="../contact.php" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a href="../service.php" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Services</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>

</body>
<!-- plugin for scrollbar  -->
<script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>

</html>