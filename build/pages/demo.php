<!-- <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                            <form>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1cg">Your Name</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example3cg">Your Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example4cg">Password</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                    <label class="form-check-label" for="form2Example3g">
                                        I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!" class="fw-bold text-body"><u>Login here</u></a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- 
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
$_SESSION['status'] = "data inserted successifuly";
$_SESSION['status_code'] = "success";


$_SESSION['status'] = "data not inserted successifuly";
$_SESSION['status_code'] = "error"; -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2>Item List</h2>
        <form id="addItemForm">
            <div class="form-group">
                <label for="itemName">Item Name</label>
                <input type="text" class="form-control" id="itemName" placeholder="Enter item name" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Item</button>
        </form>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Item Name</th>
                </tr>
            </thead>
            <tbody id="itemList">
                <!-- Items will be added here -->
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle form submission
            $("#addItemForm").submit(function(event) {
                event.preventDefault();
                var itemName = $("#itemName").val();

                if (itemName.trim() !== "") {
                    // Add the item to the top of the table
                    $("#itemList").prepend("<tr><td>" + itemName + "</td></tr>");

                    // Clear the input field
                    $("#itemName").val("");
                }
            });
        });
    </script>
</body>

</html>