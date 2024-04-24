@extends('layouts.frontend')
<div class="searchnave">
@section('content')

</div><!--backgrpund img div-->

<div class="container">
    <form style="background-color:white; padding: 20px; border-radius: 30px; box-shadow: 0 0 40px rgba(0.2, 0.2, 0.2, 0.2); margin-top: -60px; margin-bottom: 20px;">
        <div class="row">
          <div class="inputitem col-md-3 mb-3 d-flex align-items-center flex-column">
            <label for="visitInput" class="form-label mb-1" style="font-size: 25px;">Visit</label>
            <input type="text" class="form-control visitinput" style="border-radius: 10px; width: 270px; height: 60px; text-align: center;" placeholder="Where are you going?">
          </div>
      
          <div class="inputitem col-md-3 mb-3 d-flex align-items-center flex-column">
            <label for="fromInput" class="form-label mb-1" style="font-size: 25px;">From</label>
            <input type="text" class="form-control visitinput" style="border-radius: 10px; width: 270px; height: 60px; text-align: center;" placeholder="Where are you going?">
          </div>
      
          <div class="inputitem col-md-3 mb-3 d-flex align-items-center flex-column">
            <label for="guestInput" class="form-label mb-1" style="font-size: 25px;">Guest</label>
            <input type="text" class="form-control visitinput" style="border-radius: 10px; width: 270px; height: 60px; text-align: center;" placeholder="Where are you going?">
          </div>
      
          <div class="inputitem col-md-3 mb-3">
            <button type="submit" class="btn btn-success btn-lg btn-block" style="background-color: #44B415; border: none; border-radius: 10px; width: 100%; height: 60px; margin-top: 40px;">Search</button>
          </div>
        </div>
    </form>

</div>




<div class="container">
<div class= "row">

    <div class="col-md-3 col-sm-12">

        
            
        <form class="checkBoxForm">

            <div class="filter mb-3">

            <span class="FilterTitle mt-3">Popular filters</span>
            <div class="form-group mt-2">
                <input type="checkbox" class="custom-checkbox">
                <span class="checkboxText">Swimming Pool</span>
            </div>

            <div class="form-group mt-3">
                <input type="checkbox" class="custom-checkbox">
                <span class="checkboxText">Free Wifi</span>
            </div>

            <div class="form-group mt-3">
                <input type="checkbox" class="custom-checkbox">
                <span class="checkboxText">Fitness center</span>
            </div>

            <div class="form-group mt-3">
                <input type="checkbox" class="custom-checkbox">
                <span class="checkboxText">Kitchen</span>
            </div>

            <div class="form-group mt-3">
                <input type="checkbox" class="custom-checkbox">
                <span class="checkboxText">Family Rooms</span>
            </div>

            <div class="form-group mt-3">
                <input type="checkbox" class="custom-checkbox">
                <span class="checkboxText">Double Bed</span>
            </div>
        </div>


        <div class="filter mb-3 mt-4">

            <span class="FilterTitle">Popular filters</span>
            <div class="form-group mt-2">
                <input type="checkbox" class="custom-checkbox">
                <span class="checkboxText">Swimming Pool</span>
            </div>

            <div class="form-group mt-3">
                <input type="checkbox" class="custom-checkbox">
                <span class="checkboxText">Free Wifi</span>
            </div>

            <div class="form-group mt-3">
                <input type="checkbox" class="custom-checkbox">
                <span class="checkboxText">Fitness center</span>
            </div>

            <div class="form-group mt-3">
                <input type="checkbox" class="custom-checkbox">
                <span class="checkboxText">Kitchen</span>
            </div>

            <div class="form-group mt-3">
                <input type="checkbox" class="custom-checkbox">
                <span class="checkboxText">Family Rooms</span>
            </div>

            <div class="form-group mt-3">
                <input type="checkbox" class="custom-checkbox">
                <span class="checkboxText">Double Bed</span>
            </div>
        </div>




        </form>
    


    


</div>


    <div class="col-md-9 col-sm-12">
        
        <div class="card" style="margin-top:15px;">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="image-container">
                        <img class="card-img-top" src="../img/hotel1.png" alt="Card image cap" style="border-radius:8px;">
                    </div>
                </div>

                <div class="col-md-8 col-sm-12">
                    <div class="card-body">
                        <div class="text-container">
                            <h5 class="card-titles" >Star Hotel Villa</h5> 
                            <div style="margin-bottom:8px">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>

                            <p class="card-text">The rooms were all spotless and tastefully decorated, had all the amenities necessary for a comfortable stay. Very walkable to the Forum, Colosseum, great restaurants and bakeries.or a comfortable stay. Very walkable to the Forum</p>
                            <a href="#" class="btn hotel-btn">see more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="card" style="margin-top:15px;">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="image-container">
                        <img class="card-img-top" src="../img/hotel2.png" alt="Card image cap" style="border-radius:8px;">
                    </div>
                </div>

                <div class="col-md-8 col-sm-12">
                    <div class="card-body">
                        <div class="text-container">
                            <h5 class="card-titles" >Star Hotel Villa</h5> 
                            <div style="margin-bottom:8px">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>

                            <p class="card-text">The rooms were all spotless and tastefully decorated, had all the amenities necessary for a comfortable stay. Very walkable to the Forum, Colosseum, great restaurants and bakeries.or a comfortable stay. Very walkable to the Forum</p>
                            <a href="#" class="btn hotel-btn">see more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="card" style="margin-top:15px;">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="image-container">
                        <img class="card-img-top" src="../img/hotel3.png" alt="Card image cap" style="border-radius:8px;">
                    </div>
                </div>

                <div class="col-md-8 col-sm-12">
                    <div class="card-body">
                        <div class="text-container">
                            <h5 class="card-titles" >Star Hotel Villa</h5> 
                            <div style="margin-bottom:8px">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>

                            <p class="card-text">The rooms were all spotless and tastefully decorated, had all the amenities necessary for a comfortable stay. Very walkable to the Forum, Colosseum, great restaurants and bakeries.or a comfortable stay. Very walkable to the Forum</p>
                            <a href="#" class="btn hotel-btn">see more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="card" style="margin-top:15px;">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="image-container">
                        <img class="card-img-top" src="../img/hotel4.png" alt="Card image cap" style="border-radius:8px;">
                    </div>
                </div>

                <div class="col-md-8 col-sm-12">
                    <div class="card-body">
                        <div class="text-container">
                            <h5 class="card-titles" >Star Hotel Villa</h5> 
                            <div style="margin-bottom:8px">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>

                            <p class="card-text">The rooms were all spotless and tastefully decorated, had all the amenities necessary for a comfortable stay. Very walkable to the Forum, Colosseum, great restaurants and bakeries.or a comfortable stay. Very walkable to the Forum</p>
                            <a href="#" class="btn hotel-btn">see more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
             
        
    </div>


</div>
        

</div>










@endsection