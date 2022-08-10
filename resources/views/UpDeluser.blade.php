<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Users</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body{
            background-color: white;
        }
        h1{
            text-align: center;
            color:black;  
        }

    </style>

</head>
<body>

    <div class="card">
        <div class="card-header">
          <h1>CUSTOMERS</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-info">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
          <a href="{{ url('/admin') }}" class="btn btn-primary">ADMIN DASHBOARD</a>
        </div>
      </div>

    

      <div class="d-grid gap-1">
        <div class="modal fade mod" id="DeleteUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header text-center">
                <h5><b>Delete User</b></h5>
            </div>
            <div class="modal-body">
                <input type='hidden' id='delete_user_id'>
              <h4>Are you sure you want to delete this User?</h4>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-primary delete_user_btn">Yes Delete</button>
              <button type="button" class="close" data-dismiss="modal" class="btn btn-secondary">Close</button>
            </div>
          </div>
        </div>
      </div> 

      <div class="d-grid gap-1">
        <div class="modal fade mod" id="EditUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header text-center">
                <h5><b>Edit User</b></h5>
            </div>
            <div class="modal-body">

                <input type='hidden' id='id' class="name form-control" >
                <div class="form-group mb-3">
                    <label for="">Name</label>
                    <input type='text' id='name' >
                </div>
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type='text' id='email' class='email form-control'>
                </div>
                <div class="form-group mb-3">
                    <label for="">Username</label>
                    <input type='text' id='uname' >
                </div>
                <div class="form-group mb-3">
                    <label for="">Password</label>
                    <input type='text' id='pswd' >
                </div>
                <div class="form-group mb-3">
                    <label for="">Contact Number</label>
                    <input type='number' id='cnum' >
                </div>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-primary edit_user_btn">Yes Update</button>
              <button type="button" class="close" data-dismiss="modal" class="btn btn-secondary">Close</button>
            </div>
          </div>
        </div>
      </div> 



    <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
          <a href="{{ url('/') }}" target="_blank"> HotelBliss.com</a>
        </div>
    </footer> 

    <script>

        
        $(document).ready ( function()
        {   
            fetchUsers();

        function fetchUsers(){
            $.ajax({
                type: 'GET',
                url:"users",
                dataType:"json",
                success:function(response){
                    $('tbody').html("");
                    $.each(response.user,function(key,item){
                        $('tbody').append('<tr>\
                        <td>'+item.id+'</td>\
                        <td>'+item.name+'</td>\
                        <td>'+item.email+'</td>\
                        <td>'+item.username+'</td>\
                        <td>'+item.password+'</td>\
                        <td>'+item.contact+'</td>\
                        <td><button type="button" value="'+item.id+'"" class="edit_user btn btn-primary btn-sn">Edit</button></td>\
                        <td><button type="button" value="'+item.id+'"" class="delete_user btn btn-primary btn-sn">Delete</button></td>\
                        </tr>');  
                    });
                }
            });
        }

        $(document).on('click','.delete_user',function(e){
            e.preventDefault();
            var user_id = $(this).val();
            $('#delete_user_id').val(user_id);
            $('#DeleteUserModal').modal('show');
        });

        $(document).on('click','.delete_user_btn',function(e){
            e.preventDefault();
            var user_id = $('#delete_user_id').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'DELETE',
                url:"/deleteUsers/"+user_id,
                success:function(response){
                    $('#DeleteUserModal').modal('hide');
                    fetchUsers();
                }
            });
            
        });

        $(document).on('click','.edit_user',function(e){
            e.preventDefault();
            var user_id = $(this).val();
            $('#EditUserModal').modal('show');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'Get',
                url:"/editUsers/"+user_id,
                success:function(response){
                    $('#id').val(response.user[0].id);
                    $('#name').val(response.user[0].name);
                    $('#pswd').val(response.user[0].password);
                    $('#email').val(response.user[0].email);
                    $('#uname').val(response.user[0].username);
                    $('#cnum').val(response.user[0].contact);
                }
            });
        });

        $(document).on('click','.edit_user_btn',function(e){
            e.preventDefault();
            var user_id = $('#id').val();
            var data = {
                'name':  $('#name').val(),
                'email' :  $('#email').val(),
                'password' :  $('#pswd').val(),
                'username' :  $('#uname').val(),
                'contact' :  $('#cnum').val()
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'Put',
                url:"/updateUsers/"+user_id,
                data:data,
                dataType: 'json',
                success:function(response){
                    $('#EditUserModal').modal('hide');
                    fetchUsers();
                }
            });
            
        });

    })

    </script>

    
     
    
</body>
</html>