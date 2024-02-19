<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            /* border: 2px solid black; */
        }

        body {
            background-color: white;
        }

        h1 {
            color: green;
        }

        label {
            color: green;
        }
    </style>
</head>

<body>


    <div class=" container  my-5">
        <h1 class=" text-center ">Form</h1>
        <form action="formdetails.php" method="post">
            <div class="mb-3 col-md-6">
                <label for="username" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Name" >
            </div>
            <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Phone No</label>
                <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile No" maxlength="8" required>
            </div>
            <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email"  required>
            </div>
            <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"  required>
            </div>
            <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Message</label>
                <input type="text" class="form-control" id="message" name="message" placeholder="Message" required>
            </div>
            

           
            <button type="submit" class="btn btn-primary col-md-6">Submit</button>
        </form>
    </div>
</body>

</html>


