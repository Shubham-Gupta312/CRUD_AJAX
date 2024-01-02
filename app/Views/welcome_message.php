<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h4>CRUD OPERATION USING AJAX</h4>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col ">
                        <form id="formId">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter your Name">
                                    <div class="invalid-feedback" id="name_msg"></div>
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter your Email">
                                    <div class="invalid-feedback" id="email_msg"></div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="contact" class="form-label">Contact</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Enter your Contact">
                                    <div class="invalid-feedback" id="phone_msg"></div>
                                </div>

                                <div class="col-md-6">
                                    <label for="course" class="form-label">Course</label>
                                    <input type="text" class="form-control" id="course" name="course"
                                        placeholder="Enter your course name">
                                    <div class="invalid-feedback" id="course_msg"></div>
                                </div>
                            </div>
                            <button type="button" name="submit" id="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <h3>List of Students</h3>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Course</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Shubham</td>
                            <td>shubham@gmail.com</td>
                            <td>1234567890</td>
                            <td>B.tech</td>
                            <td>
                                <a href="#"><button class="btn btn-secondary">Edit</button></a>
                                <a href="#"><button class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#submit').click(function () {
                // console.log('clicked');
                let formdata = $('#formId').serialize();
                // console.log(formdata);
                $.ajax({
                    method: "POST",
                    url: "<?= base_url('create') ?>",
                    data: formdata,
                    dataType: "json",
                    success: function (response) {
                        $('input').removeClass('is-invalid');
                        if (response.status == 'success') {
                            $('input').val('');
                            console.log(response);
                        } else {
                            let error = response.errors;
                            // console.log(error);
                            for (const key in error) {
                                // console.log(key, error[key]);
                                document.getElementById(key).classList.add('is-invalid');
                                document.getElementById(key + '_msg').innerHTML = error[key];
                            }
                        }
                    }
                });
            });
        });
    </script>
    <!-- Bootstrap JS (for example, Popper.js, and Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>