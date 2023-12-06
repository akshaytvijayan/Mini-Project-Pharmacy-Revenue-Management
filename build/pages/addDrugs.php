<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
  <title>Late Pharmacy</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <script src="../path/to/flatpickr.min.js"></script>

  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Main Styling -->
  <link href="../assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>


  <script>
    document.getElementById("submit").addEventListener('click', () => {
      if (document.getElementById("drugname").value == "") {
        alert("Please fill in the form.");
      } else {
        document.body.innerHTML = "Thank you! <a href='updatedrugs.php'>Back to Home</a>";
      }
    });
  </script>




  <!-- dropdown -->
  <script>
    function validateDropdown() {
      // Get the selected value from the dropdown
      var selectedValue = document.getElementById("myDropdown").value;

      // Perform validation
      if (selectedValue === "") {
        alert("Please select an option from the dropdown.");
        return false;
      }

      // Additional validation logic based on your requirements

      return true; // Validation passed
    }
  </script>
</head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">

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
            <li class="text-sm leading-normal">
              <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Drugs</li>
          </ol>
          <h6 class="mb-0 font-bold capitalize">Add Drugs</h6>
        </nav>


        <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
          <!-- online builder btn  -->
          <!-- <li class="flex items-center">
                <a class="inline-block px-8 py-2 mb-0 mr-4 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-fuchsia-500 ease-soft-in hover:scale-102 active:shadow-soft-xs text-fuchsia-500 hover:border-fuchsia-500 active:bg-fuchsia-500 active:hover:text-fuchsia-500 hover:text-fuchsia-500 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
              </li> -->
          <li class="flex items-center">
            <a href="includes/logout.php" class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500">
              <i class="fa fa-user sm:mr-1"></i>
              <span class="hidden sm:inline">Sign Out</span>
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
              <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog" aria-hidden="true"></i>
              <!-- fixed-plugin-button-nav  -->
            </a>
          </li>

          <!-- notifications -->

          <li class="relative flex items-center pr-2">
            <p class="hidden transform-dropdown-show"></p>
            <a href="javascript:;" class="block p-0 text-sm transition-all ease-nav-brand text-slate-500" dropdown-trigger aria-expanded="false">
              <i class="cursor-pointer fa fa-bell" aria-hidden="true"></i>
            </a>

            <ul dropdown-menu class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
              <!-- add show class on dropdown open js -->
              <li class="relative mb-2">
                <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                  <div class="flex py-1">
                    <div class="my-auto">
                      <img src="../assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white h-9 w-9 max-w-none rounded-xl" />
                    </div>
                    <div class="flex flex-col justify-center">
                      <h6 class="mb-1 text-sm font-normal leading-normal"><span class="font-semibold">New message</span> from Laur</h6>
                      <p class="mb-0 text-xs leading-tight text-slate-400">
                        <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
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
                      <img src="../assets/img/small-logos/logo-spotify.svg" class="inline-flex items-center justify-center mr-4 text-sm text-white bg-gradient-to-tl from-gray-900 to-slate-800 h-9 w-9 max-w-none rounded-xl" />
                    </div>
                    <div class="flex flex-col justify-center">
                      <h6 class="mb-1 text-sm font-normal leading-normal"><span class="font-semibold">New album</span> by Travis Scott</h6>
                      <p class="mb-0 text-xs leading-tight text-slate-400">
                        <i class="mr-1 fa fa-clock" aria-hidden="true"></i>
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
      <!-- table 1 -->

      <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
              <h6></h6>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
              <div class="p-0 overflow-x-auto">
                <!-- component -->
                <div class="flex h-screen">
                  <div class="m-auto">
                    <div>
                      <button type="button" class="relative w-full flex justify-center items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize bg-gradient-to-tl from-green-600 to-lime-400 rounded-md hover:bg-gray-900  focus:outline-none   transition duration-300 transform active:scale-95 ease-in-out">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                          <g>
                            <rect fill="none" height="24" width="24"></rect>
                          </g>
                          <g>
                            <g>
                              <path d="M19,13h-6v6h-2v-6H5v-2h6V5h2v6h6V13z"></path>
                            </g>
                          </g>
                        </svg>
                        <span class="pl-2 mx-1">Add Drugs Below</span>
                      </button>
                      <div class="mt-2 bg-white rounded-lg shadow">
                        <div class="flex spacing-x-4">
                          <div class="flex  py-5 pl-5 overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                            </svg>

                            <h2 class="inline text-xxl font-semibold leading-none">Drug Details</h2>
                          </div>
                        </div>
                        <form action="includes/addDrugsInc.php" method="post">
                          <div class="px-5 pb-5 ml-2">
                            <label class="font-semibold" text-sm>Batch No :</label>
                            <input placeholder="" name="batchno" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 px-4 py-2.5 mt-2 focus:outline-none focus:transition-shadow" required>

                            <label class="font-semibold" text-sm>Drug Name :</label>
                            <input id="drugname" placeholder=" " name="drugName" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 px-4 py-2.5 mt-2 focus:outline-none focus:transition-shadow" onchange="fetchDrugDetails()" required>

                            <label for="myDropdown" class="font-semibold" text-sm>Type :</label>
                            <select id="myDropdown" name="type" class=" text-black w-full rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow text-black px-4 py-2.5 mt-2 text-base focus:outline-none" required>
                              <option value="">-- Please Select --</option>
                              <option value="Tablet">Tablet</option>
                              <option value="Syrup">Syrup</option>
                              <option value="Injection">Injection</option>
                            </select>

                            <label for="myDropdown" class="font-semibold" text-sm>Supplier :</label>
                            <select id="myDropdown" name="supplier" class=" text-black w-full rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow text-black px-4 py-2.5 mt-2 text-base focus:outline-none">
                              <option value="">-- Please Select --</option>
                              <?php
                              require "includes/conn.php";
                              $sql = "SELECT * FROM suppliers WHERE status = 0";
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
                              ?>

                                    <option value="<?php echo $name; ?>" name="supplier"><?php echo $name; ?></option>
                              <?php
                                  }
                                }
                              }
                              ?>
                            </select>
                            <label class="font-semibold ml-2">Expiry Date</label>
                            <input type="date" id="inputdate" name="expiryDate" class=" text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 px-4 py-2.5 mt-2 focus:outline-none focus:transition-shadow" required>
                          </div>

                          <div class="flex spacing-x-2  p-4">
                            <div class="flex  py-5 pl-5 overflow-hidden">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                              </svg>
                              <h3 class="inline text-xxl font-semibold leading-none ">Drug Charges</h3>
                            </div>
                            <div class="flex-none pt-2.5 pr-2.5 pl-1"></div>
                          </div>
                          <div class="px-5 pb-5">

                            <div class="flex-grow w-full pr-3 ml-2">
                              <label class="font-semibold" text-sm>Buying Price :</label>
                              <input placeholder="Price (₹)" name="buyingPrice" class=" text-black w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border border-solid border-gray-300 rounded-lg bg-white  focus:border-blueGray-500 focus:bg-white focus:ring-2 ring-offset-current" required>
                            </div>
                            <div class="flex-none">
                              <div class="flex">
                                <div class="flex-grow w-1/4 pr-2 ml-2">
                                  <label class="font-semibold" text-sm>Selling Price :</label>
                                  <input placeholder="Price (₹)" name="sellingPrice" class=" text-black w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border border-solid border-gray-300 rounded-lg bg-white  focus:border-blueGray-500 focus:bg-white focus:ring-2 ring-offset-current" required>
                                </div>
                                <div class="flex-grow ml-2">
                                  <label class="font-semibold" text-sm>Tax :</label>
                                  <input placeholder="Rate (%)" name="tax" class=" text-black w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border  border-solid border-gray-300 rounded-lg  focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400" required>
                                </div>
                                <div class="flex-grow ml-2">
                                  <label class="font-semibold" text-sm>Stock :</label>
                                  <input placeholder="Unit(s)" name="stock" class=" text-black w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border  border-solid border-gray-300 rounded-lg  focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400" required>
                                </div>
                              </div>
                            </div>
                              <!--<label class="font-semibold" text-sm>Stock :</label>
                            <input placeholder="" name="stock" class=" text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow text-black px-4 py-2.5 mt-2 text-base focus:outline-none">-->

                              <hr class="mt-4">
                              <div class="flex flex-row-reverse p-3">
                                <div class="flex-initial pl-3">
                                  <button type="submit" name="submit" onclick="return confirm('Are you sure')" class="flex items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize bg-gradient-to-tl from-green-600 to-lime-400 rounded-md hover:bg-gray-800  focus:outline-none focus:bg-gray-900  transition duration-300 transform active:scale-95 ease-in-out  rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                      <path d="M0 0h24v24H0V0z" fill="none"></path>
                                      <path d="M5 5v14h14V7.83L16.17 5H5zm7 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-8H6V6h9v4z" opacity=".3"></path>
                                      <path d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z"></path>
                                    </svg>
                                    <span class="pl-2 mx-1">Save</span>
                                  </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
              <a href="https://www.creative-tim.com" class="font-semibold text-slate-700"></a>
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


    <script src="../assets/js/sweetalert.js"></script>


  </main>
</body>

<script type="text/javascript">
  $(function() {
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if (month < 10)
      month = '0' + month.toString();
    if (day < 10)
      day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#inputdate').attr('min', maxDate);
  });
</script>

<!-- plugin for scrollbar  -->
<script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>
<!-- sweetalert -->
<?php
if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
  echo $_SESSION['status'];

?>
  <script>
    swal({
      title: ' <?php echo $_SESSION['status']; ?>',
      icon: ' <?php echo $_SESSION['status_code']; ?>',
      button: "Okay!",
    });
  </script>
<?php

  unset($_SESSION['status']);
}
?>

</html>