@extends('templates.layouts')

@section('content')
<style>
    .catalog {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-bottom: 20px;
    }

    .catalog-item {
        width: 19%; /* Set width to accommodate 5 items in a row */
        margin-bottom: 20px;
        margin: 0 auto; /* Center the items horizontally */
    }

    .catalog-item img {
        width: 100%;
        height: auto;
        border-radius: 10px; /* Add border radius to create rounded corners */
        margin-bottom: 20px;
    }

    .catalog-item h3,
    .catalog-item p {
        font-size: 14px; /* Reduce the font size for item heading and description */
    }

    @media (max-width: 992px) {
        .catalog-item {
            width: 23%; /* Adjust width for smaller screens to fit 4 items in a row */
        }
    }

    @media (max-width: 768px) {
        .catalog-item {
            width: 48%; /* Adjust width for smaller screens to fit 2 items in a row */
        }
    }

    @media (max-width: 480px) {
        .catalog-item {
            width: 100%; /* Adjust width for mobile screens to occupy full width */
        }
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-xxl-10">
            <h1 class="text-center text-md-left" style="font-size: 40px; color: #31308B;">OUR SERVICES</h1>
            <p class="text-center text-md-left" style="font-size: 14px; color: gray;">Choose the servicesUnleash Your Artistic Potential: Explore Our Vibrant Palette of Creative Services</p>
        </div>
    </div>
</div>

<div class="mx-auto" style="max-width: 90%; margin-top: 40px;">
    <div class="row justify-content-center">
        <div class="catalog">
            <div class="post-preview catalog-item" style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
                <img src="{{url('./assets/img/music.png')}}" alt="Item 1">
                <h3 style="color: #31308B;">Music</h3>
                <p>Our service:</p>
                <p style="color: gray;">Graduation<br>Event Corporate<br>Wedding Organizer<br>Live Music Coffee Shop</p>
            </div>
            <div class="catalog-item" style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
                <img src="{{url('./assets/img/theater.png')}}" alt="Item 2">
                <h3 style="color: #31308B;">Theater</h3>
                <p>Our service:</p>
                <p style="color: gray;">Graduation<br>Event Corporate</p>
            </div>

            <div class="catalog-item" style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
                <img src="{{url('./assets/img/arts.png')}}" alt="Item 3">
                <h3 style="color: #31308B;">Art Painting</h3>
                <p>Our service:</p>
                <p style="color: gray;">Mural Art<br>Painting Canvas</p>
            </div>

            <div class="catalog-item" style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
                <img src="{{url('./assets/img/photography.png')}}" alt="Item 4">
                <h3 style="color: #31308B;">Photography & Videography</h3>
                <p>Our service:</p>
                <p style="color: gray;">Graduation<br>Event Corporate<br>Wedding Organizer<br>Design, Photo<br>Video Years Book School</p>
            </div>

            <div class="catalog-item" style="border: 1px solid gray; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); padding: 10px;">
                <img src="{{url('./assets/img/dances.png')}}" alt="Item 5">
                <h3 style="color: #31308B;">Traditional Modern Dance</h3>
                <p>Our service:</p>
                <p style="color: gray;">Graduation<br>Event Corporate<br>Wedding Organizer</p>
            </div>
        </div>
    </div>
</div>


@endsection
