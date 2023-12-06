<?php
require "includes/conn.php";
if ($_GET['id']) {
  $id = $_GET['id'];
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
  <title>Neethi Pharmacy</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Main Styling -->
  <link href="../assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
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

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
          <div class="flex items-center md:ml-auto md:pr-4">

          </div>
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
          </ul>
        </div>
      </div>
    </nav>

    <div class="w-100 px-6 mx-auto">
      <!-- table 1 -->

      <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-100 max-w-full px-3">
          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto px-0 pt-0 pb-2">
              <div class="p-0 overflow-x-auto">
                <!-- component -->
                <div class="flex h-screen">
                  <div class="m-auto">
                    <div>
                      <button type="button" class="relative w-full flex justify-center items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize bg-gradient-to-tl from-green-600 to-lime-400 rounded-md hover:bg-gray-900  focus:outline-none   transition duration-300 transform active:scale-95 ease-in-out">
                        <span class="pl-2 mx-1">Add Medicine Below</span>
                      </button>
                      <div class="mt-2 bg-white rounded-lg shadow">
                        <div class="flex spacing-x-4">
                          <div class="flex  py-5 pl-5 overflow-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>

                            <h3 class="inline font-semibold leading-none">Patients Details</h3>
                          </div>
                        </div>
                        <form action="conprescribe.php" method="post">
                          <?php
                          $sql = "SELECT * FROM patients WHERE id = $id";
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
                                $age = $rows['age'];
                                $dos = $rows['dos'];
                                $phone = $rows['phone'];
                                $location = $rows['location'];
                                $balance = $rows['balance'];
                                $email = $rows['email'];
                                $conditions = $rows['conditions'];
                                $ocondition = $rows['ocondition'];
                                $allergic = $rows['allergic'];

                          ?>
                                <div class="px-5 pb-5">
                                  <input placeholder="Patient Name" value="<?php echo $name; ?>" name="name" class="  text-black w-full rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow text-black px-4 py-2.5 mt-2 text-base focus:outline-none" readonly>
                                  <input type="hidden" placeholder="Inpatient" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">
                                  <input type="hidden" placeholder="Inpatient" value="<?php echo $id; ?>" name="id" class=" text-black placeholder-gray-600 w-full px-4 py-2.5 mt-2 text-base   transition duration-500 ease-in-out transform border-transparent rounded-lg bg-gray-200  focus:border-blueGray-500 focus:bg-white dark:focus:bg-gray-800 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 ring-gray-400">

                                </div>
                          <?php
                              }
                            }
                          }

                          ?>
                          <input type="hidden" name="medicines" id="medicines">
                          <div class="flex spacing-x-2">
                            <div class="flex  py-5 pl-5 overflow-hidden">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                              </svg>

                              <h3 class="inline font-semibold leading-none">Prescription</h3>
                            </div>
                            <div class="flex-none pt-2.5 pr-2.5 pl-1"></div>
                          </div>
                          <div class="px-5 pb-5">
                            <label>Medicine Name</label>
                            <select id="drug" onchange="listdrugs(this.value)" class="chosen-select text-black w-full rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow text-black px-4 py-2.5 mt-2 text-base focus:outline-none">
                              <option value='-1'>Select Medicine</option>
                              <?php
                              $sql = "SELECT * FROM drugs WHERE DATEDIFF(expiryDate, CURDATE()) >= 30";
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
                                    $batchno = $rows['batchno'];
                                    $age = $rows['age'];
                              ?>
                                    <option value="<?php echo $name; ?>"><?php echo $batchno . " - " . $name; ?></option>

                              <?php
                                  }
                                }
                              }

                              ?>
                            </select>
                            <label> </label>
                            <div class="flex">
                              <div class="flex-grow w-1/12 pr-1">
                                <label>Unit Price (₹)</label>
                                <input placeholder="Price (₹)" id="price" readonly class="  text-black w-full rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow text-black px-4 py-2.5 mt-2 text-base focus:outline-none">
                              </div>
                              <div class="flex-grow w-1/12 pr-1">
                                <label>Tax (%)</label>
                                <input placeholder="Tax (%)" id="tax" readonly class="  text-black w-full rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow text-black px-4 py-2.5 mt-2 text-base focus:outline-none">
                              </div>
                              <div class="flex-grow w-1/12 pr-1">
                                <label>Quantity (Units)</label>
                                <input placeholder="Quantity" id='qty' class="  text-black w-full rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow text-black px-4 py-2.5 mt-2 text-base focus:outline-none">
                              </div>
                              <div class="flex-grow w-1/12">
                                <label>Total Price (₹)</label>
                                <input placeholder="Total Price (₹)" id='tprice' class="  text-black w-full rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow text-black px-4 py-2.5 mt-2 text-base focus:outline-none">
                              </div>

                            </div>

                          </div>

                          <hr class="mt-4">
                          <div class="flex flex-row-reverse p-3">


                            <div class="flex-initial pl-3">
                              <button type="submit" name="submit" class="flex items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize bg-gradient-to-tl from-green-600 to-lime-400 rounded-md hover:bg-gray-800  focus:outline-none focus:bg-gray-900  transition duration-300 transform active:scale-95 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                                  <path d="M0 0h24v24H0V0z" fill="none"></path>
                                  <path d="M5 5v14h14V7.83L16.17 5H5zm7 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-8H6V6h9v4z" opacity=".3"></path>
                                  <path d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z"></path>
                                </svg>
                                <span class="pl-2 mx-1">Save & Continue</span>
                              </button>
                            </div>


                            <div class="flex-initial pl-3">
                              <button type="button" id='addmedicine' class="flex items-center px-5 py-2.5 font-medium tracking-wide text-white capitalize bg-gradient-to-tl from-green-600 to-lime-400 rounded-md hover:bg-gray-800  focus:outline-none focus:bg-gray-900  transition duration-300 transform active:scale-95 ease-in-out">
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
                                <span class="pl-2 mx-1">Add Medicine</span>
                              </button>
                            </div>


                        </form>
                      </div>
                    </div>
                    <div class="">
                      <label></label>
                      <table class="table" style="margin-left: 15px;">
                        <thead>
                          <th><input type="text" readonly value="#   Item Name"></th>
                          <!-- <th><input type="text" readonly value="Dosage"></th> -->
                          <th><input type="text" readonly value="Unit Price"></th>
                          <th><input type="text" readonly value="Quantity"></th>
                          <th><input type="text" readonly value="Tax"></th>
                          <th><input type="text" readonly value="Total Price"></th>
                          <th></th>
                        </thead>
                        <tbody id="listmedicines">

                        </tbody>
                      </table>
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
  </main>

  </div>

</body>
<!-- plugin for scrollbar  -->
<script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>
<script src="../../node_modules/jquery/dist/jquery.min.js"></script>
<!-- Include Chosen JavaScript file -->
<script src="../../node_modules/chosen-js/chosen.jquery.min.js"></script>
<!-- Initialize Chosen on your select element(s) -->
<script>
  $(document).ready(function() {
    $(".chosen-select").chosen();
  });


  function ddif(date1) {
    date2 = new Date(date1);
    date1 = new Date();
    const timestamp1 = date1.getTime();
    const timestamp2 = date2.getTime();
    const differenceInMilliseconds = Math.abs(timestamp2 - timestamp1);
    const differenceInDays = Math.ceil(differenceInMilliseconds / (1000 * 60 * 60 * 24));
    return differenceInDays;
  }

  var qty = 0
  var qtyls = {}
  var cdrug = ""

  function listdrugs(drug) {
    cdrug = drug
    $.ajax({
      url: 'listdrugs.php',
      method: 'POST',
      data: {
        drug: drug
      },
      success: function(response) {
        response = JSON.parse(response)
        if (ddif(response.expiry) >= 30) {
          $('#price').val(response.price)
          $('#tax').val(response.tax)
          qty = parseInt(response.qty)
          $('#qty').val(0)
          $('#tprice').val(0)
          if (!qtyls.hasOwnProperty(drug)) {
            let ext = {
              [cdrug]: qty
            }
            qtyls = {
              ...qtyls,
              ...ext
            }
          }
        } else {
          alert("The drug will last for less than 30 days.")
        }
      }
    })
  }

  $("#qty").on("keyup", () => {
    if (parseInt($('#qty').val()) <= qtyls[cdrug]) {
      sum = parseFloat($('#price').val()) * parseInt($('#qty').val())
      tax = (parseFloat($('#tax').val()) / 100) * sum
      $('#tprice').val(tax + sum);
    } else {
      alert("Only " + qtyls[cdrug] + " units left")
      $('#qty').val(0)
    }
  })



  var med = {}
  var c = 0
  var t
  $('#addmedicine').click(() => {
    t = [$('#drug').val(), $('#price').val(), $('#tax').val(), $('#qty').val(), $('#tprice').val()]
    if ((t[0].length >= 2) && (parseFloat(t[1]) > 0) && (parseFloat(t[2]) > 0) && (parseFloat(t[3]) > 0) && (parseFloat(t[4]) > 0)) {
      let chmed = true
      for (var vals of Object.values(med)) {
        if ((vals[0] == t[0]) && (vals[3] == t[3])) {
          chmed = chmed && false
        }
      }

      if (!chmed) {
        ucf = window.confirm("Medicine has already been added. Do you want to add it again?")
        if (ucf) {
          qtyls[cdrug] -= parseInt($('#qty').val())
          med[c] = t
          c++;
          $('#medicines').val(JSON.stringify(med))
          addtable();
        }
      } else {
        qtyls[cdrug] -= parseInt($('#qty').val())
        med[c] = t
        c++;
        $('#medicines').val(JSON.stringify(med))
        addtable();
      }
      $('#price, #tax, #qty, #tprice').val('')
    } else {
      alert("Please enter all the fields!")
    }

  })


  function addtable() {
    let d;
    $('#listmedicines').html('')
    let count = 0
    for (let i = 0; i < Object.keys(med).length; i++) {
      if (med[i][0] != undefined) {
        d += "<tr><td>" + (count + 1) + ".  " + med[i][0] + "</td><td>" + med[i][1] + "</td><td>" + med[i][3] + "</td><td>" + med[i][2] + "</td><td>" + med[i][4] + "</td><td><button class='btn btn-danger' style='background-color: red; color: white; border-radius: 5px; padding: 8px;' onclick='remove(" + count + ")'>- Delete</button></td></tr>"
      }
      count++;
    }
    $('#listmedicines').html(d)
  }

  function remove(idx) {
    qtyls[med[idx][0]] += parseInt(med[idx][3])
    med[idx] = []
    addtable()
    $('#medicines').val(JSON.stringify(med))
  }
</script>

</script>

</html>