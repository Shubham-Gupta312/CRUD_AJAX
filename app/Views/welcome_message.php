<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Data table css  -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Data Table -->
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
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

    <!--  View data Modal -->
    <div class="modal fade" id="ViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Student Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>Student Info:</h4>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label><br>
                            <input class="form-control view_name" id="view_name" name="name" readonly
                                placeholder="Enter your Name">
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label><br>
                            <input type="email" class="form-control" id="view_email" name="email" readonly
                                placeholder="Enter your Email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="contact" class="form-label">Contact</label><br>
                            <input type="text" class="form-control" id="view_phone" name="phone" readonly
                                placeholder="Enter your Contact">
                        </div>

                        <div class="col-md-6">
                            <label for="course" class="form-label">Course</label><br>
                            <input type="text" class="form-control" id="view_course" name="course" readonly
                                placeholder="Enter your course name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--  Edit data Modal -->
    <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Student Info:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <input type="hidden" name="id" id="stud_id">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="edit_name" name="name" placeholder="Enter your Name">
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="edit_email" name="email"
                                placeholder="Enter your Email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="contact" class="form-label">Contact</label>
                            <input type="text" class="form-control" id="edit_phone" name="phone"
                                placeholder="Enter your Contact">
                        </div>

                        <div class="col-md-6">
                            <label for="course" class="form-label">Course</label>
                            <input type="text" class="form-control" id="edit_course" name="course"
                                placeholder="Enter your course name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="update" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

<!--Delete Modal -->
<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delte Data:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="id" id="id">
        Are You Sure you want to Delete this Data ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" id="delete">Delete</button>
      </div>
    </div>
  </div>
</div>


    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <h3>List of Students</h3>
                <table class="table table-bordered table-hover" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">S.no</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Course</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="studentdata">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Fetch data  -->
    <script>
        $(document).ready(function () {
            
            // View data of particular id
            $(document).on('click', '.view_btn', function () {
                var student_id = $(this).closest('tr').find('.studentId').text();
                
                // console.log(student_id);
                $.ajax({
                    method: "POST",
                    url: "<?= base_url('view_data') ?>",
                    data: {
                        'student_id': student_id
                    },
                    success: function (response) {
                        // console.log(response.student);
                        $.each(response, function (key, value) {
                            // console.log('name', value['name']);
                            $('#view_name').val(value['name']);
                            $('#view_email').val(value['email']);
                            $('#view_phone').val(value['phone']);
                            $('#view_course').val(value['course']);
                            $("#ViewModal").modal('show');
                        });
                    }
                });
            });

// Edit data of particular id
            $(document).on('click', '.edit_btn', function(){
                // console.log('clicked');
                var stud_id = $(this).closest('tr').find('.studentId').text();
                $("#stud_id").val(stud_id);
                // console.log(stud_id);
                $.ajax({
                    method: "POST",
                    url: "<?= base_url('edit_data') ?>",
                    data: {
                        'student_id' : stud_id
                    },
                    success: function (response) {
                        $.each(response, function (key,stud_value) { 
                            $('#edit_name').val(stud_value['name']);
                            $('#edit_email').val(stud_value['email']);
                            $('#edit_phone').val(stud_value['phone']);
                            $('#edit_course').val(stud_value['course']);
                            $('#EditModal').modal('show');
                        });
                    }
                });
            });


// Update function to ajax query
            $('#update').click(function (){
                // console.log('clicked');
                var data = {
                    'id' : $('#stud_id').val(),
                    'name' : $('#edit_name').val(),
                    'email' : $('#edit_email').val(),
                    'phone' : $('#edit_phone').val(),
                    'course' : $('#edit_course').val(),
                };
                $.ajax({
                    method: "POST",
                    url: "<?= base_url('update_data') ?>",
                    data: data,
                    dataType: "dataType",
                    success: function (response) {
                        $('#EditModal').modal('hide');
                        console.log(response.status);
                    }
                });
            });

// Delete the student
            $(document).on('click', '.delete_btn', function(){
                var student_id = $(this).closest('tr').find('.studentId').text();
                // console.log(student_id);
                $('#id').val(student_id);
                $('#DeleteModal').modal('show');
        });

// delete data confirm
            $('#delete').click(function (){
                // console.log('clicked');
                var stud_id = $('#id').val();
                $.ajax({
                    method: "POST",
                    url: "<?=base_url('delete')?>",
                    data: {
                        'stud_id':stud_id
                    },
                    success: function (response) {
                        $('#DeleteModal').modal('hide');
                        console.log(response.status);
                    }
                });
            });

        });
    </script>
    <script>
        function loadStudent() {
            $.ajax({
                method: "GET",
                url: "<?= base_url('get_data') ?>",
                // data: "data",
                // dataType: "dataType",
                success: function (response) {
                    // console.log(response.student);
                    $.each(response.student, function (key, value) {
                        // console.log(value['name']);
                        $('.studentdata').append('<tr>' +
                            '<th scope="row" class="studentId">' + value['id'] + '</th>' +
                            '<td>' + value['name'] + '</td>' +
                            '<td>' + value['email'] + '</td>' +
                            '<td>' + value['phone'] + '</td>' +
                            '<td>' + value['course'] + '</td>' +
                            '<td>' +
                            '<a href="#" data-bs-target="#ViewModal" data-bs-toggle="modal" class="btn btn-info view_btn m-1">View</a>' +
                            '<a href="#" data-bs-toggle="modal" data-bs-target="#EditModal" class="btn btn-secondary edit_btn m-1">Edit</a>' +
                            '<a href="#" data-bs-toggle="modal" data-bs-target="#DeleteModal" class="btn btn-danger delete_btn m-1">Delete</a>' +
                            '</td>' +
                            '</tr>');
                    });
                }
            });
        }
    </script>

    <!-- Insert data script -->
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
                            loadStudent();
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

    <!-- Server side Pagination -->
    <script>
    $(document).ready(function(){
        // let table = new DataTable('#myTable');
        loadStudent();
        setTimeout(function(){
            $('#myTable').DataTable();
        },400);
        
    });
</script>
    <!-- Bootstrap JS (for example, Popper.js, and Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>