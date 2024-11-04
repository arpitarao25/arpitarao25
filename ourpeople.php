<html>
<head><title>Our People</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.programs{
	background-color: #e2e2e2;
}

.programs .boxContainer{
	display: grid;
	grid-template-columns: repeat(4,1fr);
	grid-gap: 50px;
}

.programs .boxContainer .box{
background-color: #fff;
text-align: center;
padding-bottom 0px;
border-radius: 5px;
box-shadow: 0 0 3px 0 #c5c5c5;
position: relative;
margin-bottom: 0px;
}

.programs .boxContainer .box .card{
width: 100%
height: 100px;
background-position: center;
background-size: cover;
position: relative;
overflow: hidden;
border-radius: 5px 5px 0 0;

}

.programs .boxContainer .box .card:after{
width:100%;
height: 100%;
background-position: center;
background-size: cover;
content: "";
position: absolute;
left: 0;
top: 0;
filter: grayscale(100%);
transition:0.4s;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  height: 100%;
  border-style: solid;
  border-width: 1px;
  border-radius: 10px;

}

.card:hover {
  box-shadow: 0 10px 50px 0 black;
}

.container {
  padding: 2px 16px;

}

container.img{
border-radius: 15px;
}

</style>
</head>
<body>
<section class="programs" id="programsSection">
<div class="container">
  <div class="w3-container w3-black">
<center><h1>Our People</h1></center>
</div>
<br>
<div class="boxContainer">

<div class="card">
  <img src="sir1.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Amit Jain</b></h4> 
    <p>Former Manager   Communication<br><br>
These days we spend more time at work than we do at home.
 And we all look for a workplace that we could make our second home. 
A place that is friendly, encouraging, appreciating, et al. 
Well I found my second home at Sahayog. 
</p> 
  </div>
</div>

<div class="card">
  <img src="sir2.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Prashant Bhushan</b></h4> 
    <p>Former Manager   Alliances & institutional Relations<br><br>
My experience with Sahayog has been extremely enriching. 
Sahayog s open environment offers numerous learning opportunities. 
An approachable management, and versatile colleagues make it a great place to work. 
</p> 
  </div>
</div>

<div class="card">
  <img src="mad1.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Shreya Agarwal</b></h4> 
    <p>Former Assistant Manager   Communication<br><br>
I have been fortunate enough to be a part of Sahayog as Assistant Manager in the Media & PR team. 
The good part about this place is that it gives you the space to work and experiment. 
The best part is yet to come.
</p> 
  </div>
</div>

<div class="card">
  <img src="mad2.jpg" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Shreya Agarwal</b></h4> 
    <p>Former Assistant Manager   Communication<br><br>
I have been fortunate enough to be a part of Sahayog as Assistant Manager in the Media & PR team. 
The good part about this place is that it gives you the space to work and experiment. 
The best part is yet to come.
</p> 
  </div>
</div>

</div>
</div>
</div>
</section>
</body>
</html>