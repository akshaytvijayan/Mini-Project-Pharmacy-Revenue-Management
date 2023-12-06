<?php
require "conn.php";
$sql = "SELECT * FROM drugs WHERE name LIKE '%" . $_POST['name'] . "%'";
//create a query that fetch data from the database
$res = mysqli_query($conn, $sql);

//check if there are any records in the database
if ($res == TRUE) {
  $count = mysqli_num_rows($res);
  $sn = 1;
  if ($count > 0) {
    while ($rows = mysqli_fetch_assoc($res)) {
      $id = $rows['id'];
      $batchno = $rows['batchno'];
      $name = $rows['name'];
      $type = $rows['type'];
      $supplier = $rows['supplier'];
      $sPrice = $rows['sPrice'];
      $bPrice = $rows['bPrice'];
      $profit = $rows['profit'];
      $stock = $rows['stock'];
      $expiryDate = $rows['expiryDate'];
      $today = date("Y-m-d", strtotime(date("Y-m-d")));

?>
      <tr class="w-full whitespace-nowrap rounded-lg px-4 duration-300 lg:transition-colors uppercase">
        <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
          <div class="flex px-2 py-1">
            <h6 class="mb-0 text-sm leading-normal"><?php echo $batchno; ?></h6>
        </td>
        </div>

        <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
          <div class="flex px-2 py-1">
            <div class="flex flex-col justify-center">
              <h6 class="mb-0 text-sm leading-normal"><?php echo $name; ?></h6>
              <p class="mb-0 text-xs leading-tight text-slate-400"><?php echo $type; ?></p>
            </div>
          </div>
        </td>

        <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
          <p class="mb-0 text-xs font-semibold leading-tight">$.<?php echo $sPrice; ?></p>
        </td>

        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
          <?php
          if ($expiryDate < $today) {
          ?>
            <span class="bg-gradient-to-tl from-red-600 to-red-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">
              <?php echo $expiryDate; ?>
            </span>
          <?php
          } else {
          ?>
            <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">
              <?php echo $expiryDate; ?>
            </span>
          <?php
          }
          ?>

        </td>

        </td>
        <td class="p-2 text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
          <span class="text-xs font-semibold leading-tight text-slate-400"><?php echo $stock; ?></span>
        </td>

        <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
          <a href="addstocks.php ?id=<?php echo $id; ?>" class="btn btn-outline-primary btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
              <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg></a>
        </td>

        <td class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
          <a href="updatedrugs.php?id=<?php echo $id; ?>" class="btn btn-outline-warning btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
            </svg> </a>
        </td>
        <td class=" align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
          <form action="includes/deleteDrugs.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn  btn-outline-danger" onclick="return confirm('Are you sure to delete the drug')" name="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
              </svg></button>
          </form>
        </td>
      </tr>
<?php
    }
  } else {
    echo "No Suggestion!!";
  }
}
?>