@extends('Admin.dashboard')

@section('content')

<script>
    function calculateTotalPrice(id) {
        var rentDate = new Date(document.querySelectorAll('input[id="rent_date"]')[id].value);
        var returnDate = new Date(document.querySelectorAll('input[id="return_date"]')[id].value);
    
        if (!isNaN(rentDate.getTime()) && !isNaN(returnDate.getTime())) {
            // Calculate the difference in days
            var diffInTime = returnDate.getTime() - rentDate.getTime();
            var diffInDays = Math.ceil(diffInTime / (1000 * 3600 * 24));
            
            // Convert the price per day to a number
            var pricePerDay = 300000;
            
            // Calculate the total price
            var totalPrice = diffInDays * pricePerDay;
        
            // Update the total price field as a string
            document.querySelectorAll('input[id="total_price"]')[id].value = totalPrice.toString();
        }
        else {
            document.querySelectorAll('input[id="total_price"]')[id].value = "0";
        }
    }

    function setMinDate(id) {
        // Get the current date
        var currentDate = new Date().toISOString().split('T')[0];

        // Get the date value for tomorrow
        var tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        var tomorrowDate = tomorrow.toISOString().split('T')[0];

        // Set the min attribute for rent_date and return_date inputs
        document.querySelectorAll('input[id="rent_date"]')[id].setAttribute('min', currentDate);
        document.querySelectorAll('input[id="return_date"]')[id].setAttribute('min', tomorrowDate);
    }
</script>

<div>
    <div class="pagetitle">
        <h3>Rent Car</h3>
    </div>
    <table class="table datatable">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Brand</th>
            <th scope="col">Model</th>
            <th scope="col">Type</th>
            <th scope="col">Capacity</th>
            <th scope="col">Year</th>
            <th scope="col">Registration Number</th>
            <th scope="col">Color</th>
            <th scope="col">Available</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($Cars as $i => $cars)
                <tr>
                    <td>{{ $cars['car_id'] }}</td>
                    <td>{{ $cars['brand'] }}</td>
                    <td>{{ $cars['model'] }}</td>
                    <td>{{ $cars['type'] }}</td>
                    <td>{{ $cars['capacity'] }}</td>
                    <td>{{ $cars['year'] }}</td>
                    <td>{{ $cars['registration_number'] }}</td>
                    <td>{{ $cars['color'] }}</td>
                    <td>{{ $cars['is_available'] ? 'Yes' : 'No' }}</td>
                    <td>
                        @if ($cars['is_available'])
                            <button type="button" class="btn btn-sm rounded-pill btn-outline-primary bi-handbag-fill" data-bs-toggle="modal" data-bs-target="#AddRental{{ $cars['car_id'] }}" onclick="setMinDate({{ $i }})"></button>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@foreach($Cars as $i => $cars)
    <div class="modal fade" id="AddRental{{ $cars['car_id'] }}" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Rental</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('car.rentStore', $cars['car_id']) }}" method="POST" class="row g-3 needs-validation" novalidate>
                        @csrf
                        <input type="hidden" name="car_id" id="car_id" value="{{ $cars['car_id'] }}">
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" name="brand" id="brand" class="form-control" value="{{ $cars['brand'] }}" placeholder="Brand" disabled>
                                <label for="brand">Brand</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" name="model" id="model" class="form-control" value="{{ $cars['model'] }}" placeholder="Model" disabled>
                                <label for="model">Model</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" name="color" id="color" class="form-control" value="{{ $cars['color'] }}" placeholder="Color" disabled>
                                <label for="color">Color</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" name="registration_number" id="registration_number" class="form-control" value="{{ $cars['registration_number'] }}" placeholder="Registration Number" disabled>
                                <label for="registration_number">Registration Number</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK" required>
                                <label for="nik">NIK</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                                <label for="name">Nama</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="date" name="rent_date" id="rent_date" class="form-control" placeholder="Rent Date" required oninput="calculateTotalPrice({{ $i }})">
                                <label for="rent_date">Rent Date</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="date" name="return_date" id="return_date" class="form-control" placeholder="Return Date" required oninput="calculateTotalPrice({{ $i }})">
                                <label for="return_date">Return Date</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="usage_region" name="usage_region" aria-label="usage_region" required>
                                    <option selected></option>
                                    <option value="Sukun">Sukun</option>
                                    <option value="Lowokwaru">Lowokwaru</option>
                                    <option value="Klojen">Klojen</option>
                                    <option value="Kedungkandang">Kedungkandang</option>
                                    <option value="Blimbing">Blimbing</option>
                                </select>
                                <label for="usage_region">Usage Region</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" name="total_price" id="total_price" class="form-control" placeholder="Rent Fee" value="0" disabled>
                                <label for="total_price">Rent Fee</label>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <button class="btn btn-primary rounded-pill" onclick="getContent()" type="submit">
                                <span>
                                    Submit
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
@endforeach
  
@endsection