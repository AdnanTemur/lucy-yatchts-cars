<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lucy Yachts & Cars</title>

    <!-- Fonts -->

    <!--Styles-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!--Resources-->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    @vite(['resources/js/app.js'])
</head>

<body>
    <h3>Test Vehicles Controller</h3>
    @if (session('message'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert" x-init="{ open: true }"
            x-data="{ open: true }" x-show="open" x-effect="if (open) setTimeout(function() {open = false}, 6000)">
            {{ session('message') }}
        </div>
    @elseif(session('error'))
        <div id="errorDiv" class="alert alert-danger alert-dismissible fade show"
            style="width: fit-content; margin: 30px auto;" role="alert" x-data="{ open: true }" x-show="open"
            x-effect="if (open) setTimeout(function() { open = false; }, 10000)">
            {{ session('error') }}
            <button type="button" class="btn-close" style="font-size: x-small;" aria-label="Close"
                x-on:click="open = false"></button>
        </div>
    @endif
    <!-- Form to create a new vehicle -->
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Add New Vehicle</div>
                    <div class="card-body">
                        <form action="{{ route('vehicles.store') }}" method="POST" x-data="{ selectedType: 'car' }">
                            @csrf
                            <div class="form-group">
                                <label for="brand">Brand:</label>
                                <input type="text" class="form-control" id="brand" name="brand" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <input type="text" class="form-control" id="description" name="description" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="number" class="form-control" id="price" name="price" required>
                            </div>
                            <div class="form-group">
                                <label for="type">Type:</label>
                                <select class="form-control" id="type" name="type" x-model="selectedType"
                                    required>
                                    <option value="car">Car</option>
                                    <option value="yacht">Yacht</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="model">Model:</label>
                                <input type="text" class="form-control" id="model" name="model">
                            </div>
                            <div class="form-group" x-show="selectedType === 'car'">
                                <label for="year">Year:</label>
                                <input type="number" class="form-control" id="year" name="year">
                            </div>
                            <div class="form-group" x-show="selectedType === 'yacht'">
                                <label for="manufacturer">Manufacturer:</label>
                                <input type="text" class="form-control" id="manufacturer" name="manufacturer">
                            </div>
                            <div class="form-group" x-show="selectedType === 'yacht'">
                                <label for="length_in_feet">Length (in feet):</label>
                                <input type="number" class="form-control" id="length_in_feet" name="length_in_feet">
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category:</label>
                                <select name="category_id" id="category_id" class="form-control" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr> --}}
    <!-- Display existing vehicles -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">Existing Vehicles</div>
                <div class="card-body">
                    @if ($flattenedVehicles->isEmpty())
                        <p>No vehicles found.</p>
                    @else
                        <div class="d-flex flex-wrap">
                            @foreach ($flattenedVehicles as $vehicle)
                                <div class="list-group-item col-md-3 m-1 border-1">
                                    <h5 class="mb-1">{{ $vehicle['brand'] }}</h5>
                                    <p class="mb-1">{{ $vehicle['description'] }}</p>
                                    <small class="text-muted">Price: ${{ $vehicle['price'] }}</small><br>
                                    <small class="text-muted text-capitalize">Type: {{ $vehicle['type'] }}</small><br>
                                    <small class="text-muted text-capitalize">Model:
                                        {{ $vehicle['model'] }}</small><br>
                                    <small class="text-muted">Year:
                                        {{ $vehicle['year'] }}</small><br>
                                    @if ($vehicle['car_details'])
                                        <small class="text-muted text-capitalize"><span class="font-bold">Body:</span>
                                            {{ $vehicle['car_details']['body'] }}</small><br>
                                        <small class="text-muted text-capitalize">Condition:
                                            {{ $vehicle['car_details']['condition'] }}</small><br>
                                        <small class="text-muted text-capitalize">Mileage:
                                            {{ $vehicle['car_details']['mileage'] }}</small><br>
                                        <small class="text-muted text-capitalize">Engine Size:
                                            {{ $vehicle['car_details']['engine_size'] }}</small><br>
                                        <small class="text-muted text-capitalize">Fuel Type:
                                            {{ $vehicle['car_details']['fuel_type'] }}</small><br>
                                        <small class="text-muted text-capitalize">Doors:
                                            {{ $vehicle['car_details']['doors'] }}</small><br>
                                        <small class="text-muted text-capitalize">Cylinders:
                                            {{ $vehicle['car_details']['cylinders'] }}</small><br>
                                        <small class="text-muted text-capitalize">Transmission:
                                            {{ $vehicle['car_details']['transmission'] }}</small><br>
                                        <small class="text-muted text-capitalize">Color:
                                            {{ $vehicle['car_details']['color'] }}</small><br>
                                        <small class="text-muted text-capitalize">Drive Type:
                                            {{ $vehicle['car_details']['drive_type'] }}</small><br>
                                        <small class="text-muted text-capitalize">VIN:
                                            {{ $vehicle['car_details']['vin'] }}</small><br>
                                    @elseif($vehicle['yacht_details'])
                                        <small class="text-muted text-capitalize">Manufacturer:
                                            {{ $vehicle['yacht_details']['manufacturer'] }}</small><br>
                                        <small class="text-muted">Length (in feet):
                                            {{ $vehicle['yacht_details']['length'] }}</small><br>
                                        <small class="text-muted text-capitalize">Engine:
                                            {{ $vehicle['yacht_details']['length'] }}</small><br>
                                        <small class="text-muted text-capitalize">Fuel Tank:
                                            {{ $vehicle['yacht_details']['fuel_tank'] }}</small><br>
                                        <small class="text-muted text-capitalize">Captain /Crew:
                                            {{ $vehicle['yacht_details']['captain_crew'] }}</small><br>
                                        <small class="text-muted text-capitalize">Guests Capacity:
                                            {{ $vehicle['yacht_details']['guests_capacity'] }}</small><br>
                                        <small class="text-muted text-capitalize">Sleeps:
                                            {{ $vehicle['yacht_details']['sleeps'] }}</small><br>
                                        <small class="text-muted text-capitalize">Bathrooms /Toilets:
                                            {{ $vehicle['yacht_details']['bathrooms_toilets'] }}</small><br>
                                    @endif
                                    <small class="text-muted text-capitalize">Category:
                                        {{ $vehicle['category']['name'] }}</small><br>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>


</html>
