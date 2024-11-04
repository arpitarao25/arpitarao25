<html>
<head><title>Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;

}

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

#bar {
  overflow: hidden;
}

#bar a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  margin-right: 20px;
  margin-top: 20px;
  border-radius: 5px;
}

#bar a:hover {
  background-color: #ddd;
  color: black;
}

#bar a.active {
  background-color: #04AA6D;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 0px;
}

.rows:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

.icon-bar {
  float: right;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background:  #3333ff;
  color: white;
}

.twitter {
  background: #33adff;
  color: white;
}

.insta {
  background: #ad33ff;
  color: white;
}

.linkedin {
  background:  #2e5cb8;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}

#user{margin: 0 auto;
  max-width: 800px;
  padding: 40px;}


.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:1

  0px;
  float: left;
  width: 70%;
}

.right {
  text-align: right;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

.bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}

.fa-star{
   font-size: 1.6em;
   cursor: pointer;
   color: gold;
   transition: filter linear .3s;
}

.fa-star:hover {
   filter: drop-shadow(1px 1px 4px orange);
}

.heading {
   position: relative;
   width: 180px;
   background: transparent;
   display: flex;
   justify-content: center;
   align-items: center;
   gap: .3em;
   padding: 5px;
   overflow: hidden;
   border-radius: 20px;
   box-shadow: 0 0 2px #b3acac;
}


</style>
</head>
<body>

<div class="container">
  <div style="text-align:center">
<div class="w3-container w3-black">
<center><h1>Contact Us</h1></center>
</div>

  </div>
      <div id="bar" >
  <a class="w3-button w3-indigo active" href="index.php">Back</button></a>
</div>

  <div class="rows">
    <div class="column">
      <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d120646.97832913962!2d72.8528513743033!3d19.09808683276845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d19.185664!2d73.02021119999999!4m5!1s0x3be7ce8a830fc8fd%3A0x22e4bfab3efca297!2sSahayog%20Foundation%2C%20Turf%20Estate%2C%20Shakti%20Mills%20Ln%2C%20Lower%20Parel%2C%20Mumbai%2C%20Maharashtra%20400013!3m2!1d18.9869083!2d72.82449849999999!5e0!3m2!1sen!2sin!4v1676985811622!5m2!1sen!2sin" width="700" height="520" style="border:2;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="column">
      <form action="con_cont.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="f_name" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="l_name" placeholder="Your last name..">
        <label for="city">Country</label>
        <select id="city" name="city">
          <option value="mum">Mumbai</option>
          <option value="pune">Pune</option>
          <option value="thane">Thane</option>
          <option value="navimum">Navi Mumbai</option>          
          <option value="delhi">New Delhi</option> 
          <option value="oth">Other..</option>        
        </select>
        <label for="subject">Feedback</label>
        <textarea id="subject" name="feed" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
<br><br><br>
<div class="icon-bar">
  <a href="https://www.facebook.com/sahyog.org.in/" class="facebook"><i class="fa fa-facebook"></i></a>
  <a href="https://twitter.com/sahyog_ngo?lang=en" class="twitter"><i class="fa fa-twitter"></i></a>
  <a href="https://www.instagram.com/sahyog.india/?hl=en" class="insta"><i class="fa fa-instagram"></i></a>
  <a href="https://in.linkedin.com/company/sahyog" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="https://www.youtube.com/channel/UCOLvuP_U54KZzPsxeutLszg" class="youtube"><i class="fa fa-youtube"></i></a>
</div>
<center>

<span class="heading" >User Rating</span>
<i class="fa fa-star checked"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>

<p>4.1 average based on 254 reviews.</p></center>
<hr style="border:3px solid #f1f1f1">

<div id="user" class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div><br><br>
  </div>
</div>
</div>
</div>
</body>
<script type="text/javascript">
const ratingStars = [...document.getElementsByClassName("fa fa-star")];

function executeRating(stars) {
  const starClassActive = "fas fa-star";

  const starClassInactive = "fa fa-star";
  const starsLength = stars.length;
  let i;
  stars.map((star) => {
    star.onclick = () => {
      i = stars.indexOf(star);

      if (star.className===starClassInactive) {
        for (i; i >= 0; --i) stars[i].className = starClassActive;
      } else {
        for (i; i < starsLength; ++i) stars[i].className = starClassInactive;
      }
    };
  });
}
executeRating(ratingStars);
</script>
<script type="text/javascript">
window.onscroll = function() {myFunction()};

var bar = document.getElementById("bar");
var sticky = bar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    bar.classList.add("sticky")
  } else {
    bar.classList.remove("sticky");
  }
}</script>

</html>

