<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .rounded-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #000;
        }

        .btn-back {
            background-color: red; /* Warna latar belakang baru */
            color: white; /* Warna teks baru */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Profile Picture</h5>
                        <img src="{{ asset('storage/imageprofile/' . $user->image) }}" alt="Profile Picture" class="rounded-image">
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Profile</h1>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" value="{{ $user->phone_number }}" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" value="{{ $user->address }}" class="form-control" readonly>
                        </div>

                        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Update Profile</a>
                        <a href="{{ route('home') }}" class="btn btn-back">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
