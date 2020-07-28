@extends('layouts.app')

@section('content')
<div class="container align-self-center align-items-center">
    <div class="row justify-content-center ">
        <div class="col-md-8">

            <div class="card p-2">
               
               
                <div class="card-body">
                <p class="h4 p-2 mb-0 font-weight-bold">Trial Period Ends in</p>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p id="demo" data="{{ $joinDate  }}"class="mb-0 p-0  text-center align-self-center font-weight-light" style="font-size: 32px; font-weight:100!important">-----</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Set the date we're counting down to

Date.prototype.addDays = function(days) {
    var date = new Date(this.valueOf());
    date.setDate(date.getDate() + days);
    return date;
}


var timer = document.getElementById("demo")
var countDownDate = new Date(timer.getAttribute('data')).addDays(30).getTime();
// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  timer.innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    timer.innerHTML = "EXPIRED";
  }
}, 1000);
</script>
@endsection
