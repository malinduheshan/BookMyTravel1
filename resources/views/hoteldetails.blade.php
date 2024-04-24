@extends('layouts.frontend')
<div class="searchnave mb-3">
@section('content')

</div><!--backgrpund img div-->

<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="image-container mb-2">
                <img class="card-img-top" src="../img/hotel6.png" alt="Card image cap" style="height: 200px; border-radius:8px;">
            </div>

            <div class="image-container mb-2">
                <img class="card-img-top" src="../img/hotel5.png" alt="Card image cap" style="height: 200px; border-radius:8px;">
            </div>
        </div>

        <div class="col-md-8 col-sm-12" style="margin-left: -15px;">
            <div class="image-container mb-2;">
                <img class="card-img-top" src="../img/hotel1.png" alt="Card image cap" style="height: 407px; border-radius:8px;">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="hotel-view-title">
        Star Hotel Villa 
        <span style="font-size: 30px;">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </span>
    </div>

    <div class="hotel-view-p">
        Well known site for Booking Sri Lanka Hotels and Accommodation. Trusted for the best offers and best deals for hotels in Sri Lanka including Apartments, Villas, Hostels, Resorts. Best price guaranteed with Instant confirmation.
Accommodation in Sri Lanka is a very easy task with thousands of hotels. You can feel peace & comfort while stay at beach hotels and beach resorts in Sri Lanka with beauty of natural sea views. You can find best luxury hotels or best cheap hotels in Sri Lanka using search tool given above.

    <br><br> Well known site for Booking Sri Lanka Hotels and Accommodation. Trusted for the best offers and best deals for hotels in Sri Lanka including Apartments, Villas, Hostels, Resorts. Best price guaranteed with Instant confirmation.
Accommodation in Sri Lanka is a very easy task with thousands of hotels. You can feel peace & comfort while stay at beach hotels and beach resorts in Sri Lanka.
    </div>
</div>


<div class="container">
    <div class="package-include">
        Package Include
    </div>

    
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="packages">
                    &#10004; 2 Full Date
                </div>

                <div class="packages">
                  &#10004;  4 person
                </div>

                <div class="packages">
                  &#10004;  Swimming Pool
                </div>
            </div>


            <div class="col-md-4 col-sm-12">
                <div class="packages">
                  &#10004;  Free Wi-Fi
                </div>

                <div class="packages">
                  &#10004;  Fully Air Condition
                </div>

                <div class="packages">
                  &#10004;  Private Balcony on Sea Side
                </div>
            </div>



            <div class="col-md-4 col-sm-12">
                <div class="packages">
                  &#10004;  King Size Bed or Twin Beds
                </div>

                <div class="packages">
                  &#10004;  2 Rooms
                </div>

                <div class="packages">
                   &#10004; Telephone with IDD
                </div>
            </div>
        </div>
</div>

<style>
    @media (max-width: 768px) {
        .col-md-4 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .col-md-8 {
            flex: 0 0 100%;
            max-width: 100%;
            margin-left: 0 !important;
        }
    }
</style>




@endsection