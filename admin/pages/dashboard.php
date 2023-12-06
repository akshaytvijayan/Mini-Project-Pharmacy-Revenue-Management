<?php
require "includes/conn.php";
//include "includes/auth.php";
$today = date("Y-m-d", strtotime(date("Y-m-d")));
//echo $today;
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
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
  <title>Late Pharmacy</title>
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

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
  <!-- sidenav  -->

  <?php
  require "includes/sidebar.php";
  ?>
  <!-- end sidenav -->

  <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
    <!-- Navbar -->
    <nav navbar-main class="relative flex flex-wrap items-center justify-between px-3 py-2 mx-4 mt-6 transition-all bg-gradient-to-tl from-green-600 to-lime-400 duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-scroll="true">
      <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
          <!-- breadcrumb -->
          <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="text-sm leading-normal">
              <a class="opacity-50 text-white">Pages</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="mb-0 font-bold capitalize">Dashboard</h6>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
          <div class="flex items-center md:ml-auto md:pr-4">

          </div>
          <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
            <!-- online builder btn  -->
            <!-- <li class="flex items-center">
                <a class="inline-block px-8 py-2 mb-0 mr-4 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-fuchsia-500 ease-soft-in hover:scale-102 active:shadow-soft-xs text-fuchsia-500 hover:border-fuchsia-500 active:bg-fuchsia-500 active:hover:text-fuchsia-500 hover:text-fuchsia-500 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
              </li> -->
            <li class="flex items-center">
              <a href="includes/logout.php" class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-white">
                <i class="fa fa-user sm:mr-1"></i>
                <span class="hidden text-white sm:inline">Sign Out</span>
              </a>
            </li>
            <li class="flex items-center pl-4 xl:hidden">
              <a href="javascript:;" class="block p-0 text-sm transition-all ease-nav-brand text-slate-500" sidenav-trigger>
                <div class="w-4.5 overflow-hidden">
                  <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                </div>
              </a>
            </li>
            <li class="flex items-center px-4">
              <a href="javascript:;" class="p-0 text-sm transition-all ease-nav-brand text-slate-500">
                <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog"></i>
                <!-- fixed-plugin-button-nav  -->
              </a>
            </li>

            <!-- notifications -->

            <li class="relative flex items-center pr-2">
              <p class="hidden transform-dropdown-show"></p>
              <a href="javascript:;" class="block p-0 text-sm transition-all ease-nav-brand text-slate-500" dropdown-trigger aria-expanded="false">
                <i class="cursor-pointer fa fa-bell"></i>
              </a>

              <ul dropdown-menu class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                <!-- add show class on dropdown open js -->
                <li class="relative mb-2">
                  <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                    <div class="flex py-1">
                      <div class="my-auto">
                        <img src="./assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white h-9 w-9 max-w-none rounded-xl" />
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-1 text-sm font-normal leading-normal"><span class="font-semibold">New message</span> from Laur</h6>
                        <p class="mb-0 text-xs leading-tight text-slate-400">
                          <i class="mr-1 fa fa-clock"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="relative mb-2">
                  <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700" href="javascript:;">
                    <div class="flex py-1">
                      <div class="my-auto">
                        <img src="./assets/img/small-logos/logo-spotify.svg" class="inline-flex items-center justify-center mr-4 text-sm text-white bg-gradient-to-tl from-gray-900 to-slate-800 h-9 w-9 max-w-none rounded-xl" />
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-1 text-sm font-normal leading-normal"><span class="font-semibold">New album</span> by Travis Scott</h6>
                        <p class="mb-0 text-xs leading-tight text-slate-400">
                          <i class="mr-1 fa fa-clock"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="relative">
                  <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700" href="javascript:;">
                    <div class="flex py-1">
                      <div class="inline-flex items-center justify-center my-auto mr-4 text-sm text-white transition-all duration-200 ease-nav-brand bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
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
                        <h6 class="mb-1 text-sm font-normal leading-normal">Payment successfully completed</h6>
                        <p class="mb-0 text-xs leading-tight text-slate-400">
                          <i class="mr-1 fa fa-clock"></i>
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

    <!-- end Navbar -->

    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">
      <!-- row 1 -->
      <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal">Today's Money</p>
                    <?php
                    $sql = "SELECT SUM(payment) as 'payment' FROM payments WHERE pdate = '$today'";
                    //create a query that fetch data from the database
                    $res = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_array($res);
                    ?>
                    <h5 class="mb-0 font-bold">
                      <?php echo $data['payment']; ?>
                      <span class="text-sm leading-normal font-weight-bolder text-lime-500">
                        <?php
                        $ttotal = $data['payment'];
                        $pttotal  = $ttotal * 10 / 100;
                        ?>
                        <!-- <?php echo $pttotal; ?>%</span> -->
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-green-600 to-lime-400">
                    <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal">Today's Patients</p>
                    <?php
                    $sql = "SELECT COUNT(name) as 'name' FROM patients WHERE rdate = '$today'";
                    //create a query that fetch data from the database
                    $res = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_array($res);
                    ?>
                    <h5 class="mb-0 font-bold">
                      <?php echo $data['name']; ?>
                      <span class="text-sm leading-normal font-weight-bolder text-lime-500">
                        <?php
                        $ttotal = $data['name'];
                        $pttotal  = $ttotal * 10 / 100;
                        ?>
                        <!-- <?php echo $pttotal; ?>%</span> -->
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-green-600 to-lime-400">
                    <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal">Suppliers</p>
                    <?php
                    $sql = "SELECT COUNT(name) as 'name' FROM suppliers";
                    //create a query that fetch data from the database
                    $res = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_array($res);
                    ?>
                    <h5 class="mb-0 font-bold">
                      <?php echo $data['name']; ?>
                      <span class="text-sm leading-normal font-weight-bolder text-lime-500">
                        <?php
                        $ttotal = $data['name'];
                        $pttotal  = $ttotal * 10 / 100;
                        ?>
                        <!-- <?php echo $pttotal; ?>%</span> -->
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-green-600 to-lime-400">
                    <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card4 -->
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal">Total Sales</p>
                    <?php
                    $sql = "SELECT SUM(payment) as 'payment' FROM payments";
                    //create a query that fetch data from the database
                    $res = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_array($res);
                    ?>
                    <h5 class="mb-0 font-bold">
                      <?php echo $data['payment']; ?>
                      <span class="text-sm leading-normal font-weight-bolder text-lime-500">
                        <?php
                        $ttotal = $data['payment'];
                        $pttotal  = $ttotal * 10 / 100;
                        ?>
                        <!-- <?php echo $pttotal; ?>%</span> -->
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-green-600 to-lime-400">
                    <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- charts -->


      <!-- cards row 4 -->
      <div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->

        <div class="flex flex-wrap -mx-3">

          <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
              <?php
              if (isset($_SESSION['stock-exceeds'])) {
                echo $_SESSION['stock-exceeds'];
                unset($_SESSION['stock-exceeds']);
              }
              ?>
              <?php
              if (isset($_SESSION['stock-exceeds'])) {
                echo $_SESSION['stock-exceeds'];
                unset($_SESSION['stock-exceeds']);
              }
              ?>
              <?php
              if (isset($_SESSION['prescriptionSuccess'])) {
                echo $_SESSION['prescriptionSuccess'];
                unset($_SESSION['prescriptionSuccess']);
              }
              ?>
              <?php
              if (isset($_SESSION['prescriptionSuccess'])) {
                echo $_SESSION['prescriptionSuccess'];
                unset($_SESSION['prescriptionSuccess']);
              }
              ?>
              <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>Patients</h6>
              </div>
              <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                  <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead class="align-bottom">
                      <tr>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Patients Info</th>
                        <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Admitt Date</th>
                        <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Phone No.</th>
                        <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Age</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Location</th>

                        <!--<th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>-->
                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                      </tr>
                    </thead>
                    <?php
                    require "includes/conn.php";
                    $sql = "SELECT * FROM patients";
                    //create a query that fetch data from the database
                    $res = mysqli_query($conn, $sql);

                    //check if there are any records in the database
                    if ($res == TRUE) {
                      $count = mysqli_num_rows($res);
                      $sn = 1;
                      if ($count > 0) {
                        while ($rows = mysqli_fetch_assoc($res)) {
                          $id = $rows['id'];
                          $name = $rows['name'];
                          $rdate = $rows['rdate'];

                          $age = $rows['age'];
                          $phone = $rows['phone'];
                          $location = $rows['location'];
                          $balance = $rows['balance'];
                          $email = $rows['email'];
                          $conditions = $rows['conditions'];
                          $ocondition = $rows['ocondition'];
                          $allergic = $rows['allergic'];

                    ?>
                          <tbody id="output">
                            <tr>
                              <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                <div class="flex px-2 py-1">

                                  <div class="flex flex-col justify-center">
                                    <h6 class="mb-0 text-sm leading-normal"><?php echo $name; ?></h6>
                                    <p class="mb-0 text-xs leading-tight text-slate-400"><?php echo $email; ?></p>
                                  </div>
                                </div>
                              </td>
                              <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-xs font-semibold leading-tight"><?php echo $rdate; ?></p>
                              </td>
                              <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-xs font-semibold leading-tight"><?php echo $phone; ?></p>
                              </td>
                              <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-xs font-semibold leading-tight"><?php echo $age; ?></p>
                              </td>
                              <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                <span class="px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-slate-400">
                                  <?php echo $location; ?>
                                </span>
                              </td>

                              <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                <a href="profile.php?id=<?php echo $id; ?>" class="text-xs font-semibold leading-tight text-slate-400"> View </a>
                              </td>
                              <!-- <td class=" align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                            <form action="includes/deletePatients.php"  method="post">
                              <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <button type="submit" name="submit" class="text-xs font-semibold leading-tight text-slate-400"> Delete </button>
                              </form>
                          </td>-->
                            </tr>
                          </tbody>
                    <?php
                        }
                      }
                    }
                    ?>
                  </table>
                </div>
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
                  - All Rights Reserved
                </div>
              </div>
              <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                  <li class="nav-item">
                    <a href="" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">License</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
</body>
<!-- plugin for charts  -->
<script src="../assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>

</html>