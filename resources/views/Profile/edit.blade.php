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
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Profile</h1>

                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Profile Picture</h5>
                                        <img src="{{ asset('storage/imageprofile/' . $user->image) }}" alt="" class="rounded-image">
                                    <div class="form-group mt-3">
                                        <label for="image">Upload New Picture</label>
                                        <input type="file" name="image" id="image" class="form-control-file">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" value="{{ $user->name }}" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" value="{{ $user->email }}" readonly class="form-control">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" minlength="8" class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" name="phone_number" id="phone_number" value="{{ $user->phone_number }}" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" value="{{ $user->address }}" required class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('profile.index') }}" class="btn btn-secondary">Cancel</a> <!-- Cancel button -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
