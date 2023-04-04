<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .right {
            border-right-style: solid;
        }
        
        .bg {
            background-color: #3c1361;
        }
        
        .text {
            color: aliceblue;
        }
    </style>
</head>
<title>Document</title>
</head>

<body class="bg">
    <div class="container rounded bg-white mt-5 ">
        <div class="row">
            <div class="col-md-3 border-right right ">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="200px" src="Image/user.jpg"><span class="font-weight-bold">Sejal Shah</span>
                    <span class="text-black-50">shahsejal0308@gmail.com</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right right">
                <div class="p-3 py-6">
                    <div class="d-flex justify-content-between align-items-center ">
                        <h4 class="text-right">Edit Profile</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label></div>
                        <a href="">
                        <input type="text" class="form-control" placeholder="first name" value="" name="name">
                        <div>
                        <a href="edit_profile" class="btn btn-primary">Edit</a>
                        <a href="edit_profile" class="btn btn-danger">Delete</a>
                    </div>
                        
                        <div class="col-md-6"><label class="labels">Surname</label></div>
                        <input type="text" class="form-control" value="" placeholder="surname" name="surname">
                        <div>
                        <a href="edit_profile" class="btn btn-primary">Edit</a>
                        <a href="edit_profile" class="btn btn-danger">Delete</a>
                    </div>
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Phone Number</label>
                        <input type="text" class="form-control" placeholder="enter phone number" value="" name="phone_no">
                        <a href="edit_profile" class="btn btn-primary">Edit</a>
                        <a href="edit_profile" class="btn btn-danger">Delete</a>
                    </div>
                        <div class="col-md-12"><label class="labels">Address </label>
                        <input type="text" class="form-control" placeholder="enter address " value="" name="address">
                        <a href="edit_profile" class="btn btn-primary">Edit</a>
                        <a href="edit_profile" class="btn btn-danger">Delete</a>
                    </div>
                        <div class="col-md-12"><label class="labels">Email ID</label>
                        <input type="text" class="form-control" placeholder="enter email id" value="" name="e_mail">
                        <a href="edit_profile" class="btn btn-primary">Edit</a>
                        <a href="edit_profile" class="btn btn-danger">Delete</a>
                    </div>
                        <div class="col-md-12"><label class="labels">Education</label>
                        <input type="text" class="form-control" placeholder="education" value="" name="edu">
                        <a href="edit_profile" class="btn btn-primary">Edit</a>
                        <a href="edit_profile" class="btn btn-danger">Delete</a>
                    </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Country</label>
                        <input type="text" class="form-control" placeholder="country" value="" name="country">
                        <a href="edit_profile" class="btn btn-primary">Edit</a>
                        <a href="edit_profile" class="btn btn-danger">Delete</a>
                    </div>
                        <div class="col-md-6"><label class="labels">State/Region</label>
                        <input type="text" class="form-control" value="" placeholder="state" name="status">
                        <a href="edit_profile" class="btn btn-primary">Edit</a>
                        <a href="edit_profile" class="btn btn-danger">Delete</a>
                    </div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn  profile-button bg text " type="button">Save Profile</button></div>
                </div>
            </div>
            <div class="col-md-3">
         
            
            </div>
        </div>
        

    </div>
    </div>
    </div>
</body>

</html>