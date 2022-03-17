<html>
<!-- custom css file link  -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<body>
    <form name="orderform" method="POST"  class="form" action="order.php">

        <div class="inputBox">
            <div class="input">
                <span>your name</span>
                <input name="name" type="text" placeholder="enter your name"  onsubmit="return validateForm()">
            </div>
            <div class="input">
                <span>your phone number</span>
                <input name="number" type="number" placeholder="enter your number">
            </div>
        </div>

              <div class="inputBox">
            <div class="input">
                <span>your order</span>
                <input name="order" type="test" placeholder="Chocolate cake, cheesecake ..">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>how much</span>
                <input name="Quantity" type="number" placeholder="Quantity  ">
            </div>
            <div class="input">
              <span>Your Occasion</span>
                      <select id="Occasion" class=" w3-round w3-light-gray "name="Occasion">
                        <option value="null"></option>
                        <option value="Birthday">Birthday</option>
                         <option value="wedding">Wedding</option>
                         <option value="anniversary">Anniversary</option>
                         <option value="event">Corporate Event</option>
                         <option value="other">Other</option>
                       </select>


          </div>
            <div class="input">
                <span>date and time</span>
                <input name="date" type="datetime-local">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>your address</span>
                <textarea name="address" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
            </div>





            <div class="input">
                <span>your message</span>
                <textarea name="message" placeholder="enter your message you want it to be written or notes" id="" cols="30" rows="10"></textarea>

            </div>
                <button type="submit" value="submit" name="submit" class="btn w3-center"> Place Order </button>
        </div>



    </form>
  </body>
</html>
