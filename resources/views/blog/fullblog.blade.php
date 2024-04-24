@extends('layouts.frontend')
<div class="searchnave">
@section('content')

</div><!--backgrpund img div-->

<div class="container">
    <form style="padding: 20px; border-radius: 30px; background-color:white; box-shadow: 0 0 40px rgba(0.2, 0.2, 0.2, 0.2); margin-top: -50px;">
      <div class="fullblogtitle">
        {{ $blog->title }}
      </div>
    </form>
</div>

<div class="container">
    <div class="fullblogimg mb-4 mt-4" style="display: flex; justify-content: center; align-items: center;">
        <img src="../img/sigiriya1.png" alt="">
    </div>
    

    <div class="fullblogtext" style="text-align: justify;" >
       </div>
            {{ $blog->description }}
       </div>

@endsection