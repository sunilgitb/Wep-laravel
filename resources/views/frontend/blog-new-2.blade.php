@extends('frontend.layouts.app')
@include('frontend.layouts.header')
<br><br><br><br>
<main>
   

    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Page - Right Sidebar</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  

  
    <div id="heading">
      <h1 style="margin-left: 20px!important;"><span>Recent</span> Blogs</h1>
      {{-- <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/575957/rss-icon.png" /> --}}
    </div>
<style>
    @media(min-width:991px){
       .blog-new-post{
            margin-left:20px!important;
        }
    }
    @media(max-width:768px){
       .blog-new-post{
            margin:37px!important;
            margin-left:-5px!important;
        }
    }
</style>
<section class="blog-new-post">
    <article>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/575957/its-less-risky-to-make-a-small-downpayment-250x141.jpg" />
      <div class="text">
        <h2><a href="#">Before Making A 20% Mortgage Down Payment, Read This</a></h2>
        <p>August 8, 2017</p>
        <p>Making a large downpayment is not the conservative investment you believe it is. The risks of putting 20% down on a home are real. Know what you should do.</p>
      </div>
    </article>

    <article>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/575957/minimum-fico-score-drops-to-580-250x141.jpg" />
      <div class="text">

        <h2><a href="#">Minimum FHA Credit Score Requirement Falls 60 Points</a></h2>
        <span>August 8, 2017</span>
        <p>Credit score requirements are dropping for the FHA mortgage. Analysis and effect on U.S. home buyers, plus today's live FHA mortgage rates.</p>
      </div>
    </article>

    <article>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/575957/8.8-1-250x109.png" />
      <div class="text">
        <h2><a href="#">Mortgage Rates Today, August 8, Plus Lock Recommendations</a></h2>
        <span>August 8, 2017</span>
        <p>Mortgage rates today are driven by movements in financial markets worldwide. When the economy heats up, bond price drop, and rates increase. When the economy pulls back, interest rates tend to fall.</p>
      </div>
    </article>
    <article>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/575957/its-less-risky-to-make-a-small-downpayment-250x141.jpg" />
      <div class="text">
        <h2><a href="#">Before Making A 20% Mortgage Down Payment, Read This</a></h2>
        <p>August 8, 2017</p>
        <p>Making a large downpayment is not the conservative investment you believe it is. The risks of putting 20% down on a home are real. Know what you should do.</p>
      </div>
    </article>

    <article>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/575957/minimum-fico-score-drops-to-580-250x141.jpg" />
      <div class="text">

        <h2><a href="#">Minimum FHA Credit Score Requirement Falls 60 Points</a></h2>
        <span>August 8, 2017</span>
        <p>Credit score requirements are dropping for the FHA mortgage. Analysis and effect on U.S. home buyers, plus today's live FHA mortgage rates.</p>
      </div>
    </article>

    <article>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/575957/8.8-1-250x109.png" />
      <div class="text">
        <h2><a href="#">Mortgage Rates Today, August 8, Plus Lock Recommendations</a></h2>
        <span>August 8, 2017</span>
        <p>Mortgage rates today are driven by movements in financial markets worldwide. When the economy heats up, bond price drop, and rates increase. When the economy pulls back, interest rates tend to fall.</p>
      </div>
    </article>
</section>

<div class="blognav__container">
    <div class="blognav__item">
        <a href="#" class="blognav__button">Next post</a>
        <p>Mortgage rates today are driven by movements in financial markets worldwide</p>
    </div>
    <div class="blognav__item">
        <a href="#" class="blognav__button">Previous post</a>
        <p>Credit score requirements are dropping for the FHA mortgage.</p>
    </div>
</div>
<style>
@media(min-width: 991px){
    .blognav__container{
        margin-left:10px;
    }
}
.blognav__container {
    /* margin-left:25px; */
    display: flex;
    justify-content: space-between;
}

.blognav__item {
    flex-basis: 48%; /* Adjust the width as needed */
}

.blognav__button {
    display: block;
    padding: 10px 20px;
    background-color: #71BC2F;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}
</style>




  



  

    <style>

.tech-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.tech-item {
  flex-basis: calc(33.33% - 20px); /* Adjust the width as needed and consider margin */
  margin-bottom: 20px; /* Add some margin between items */
  text-align: center;
}

.tech-item-image {
  width: 60px; /* Adjust the image size as needed */
  height: 60px;
  background-size: cover;
  background-position: center;
  margin: 0 auto 10px; /* Center the image horizontally */
}

      @media (max-width: 768px){
      .integration {
        margin-top: 105px!important;
        margin-left: 72px!important;
      }
      }
      @media (max-width: 768px){
      .technologies {
        margin-left: 72px!important;
      }
      }

      /* .tech-item {
    flex-basis: calc(50% - 20px);
    margin: 10px;
    padding: 20px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    text-align: center;
    margin-top: 30px!important;
} */


/* .tech-list {
    display: flex;
    flex-wrap: wrap; /* Allow items to wrap to the next line */
    justify-content: space-between; /* Distribute items evenly in two columns */
} */

        .tech-item {
            flex-basis: calc(50% - 20px);
            margin: 10px;
            padding: 20px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            text-align: center;
        }

        .project-technologies {
            overflow: hidden;
            padding: 115px 0;
            background-color: #fff;
            font-size: 17px;
            font-family: "Poppins Regular", Helvetica, sans-serif;
        }

        .container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap; /* Allow items to wrap to the next line */
        }

        .item {
            width: 48%; /* Set the width of each item to occupy approximately half of the container */
        }

        /* Add media queries if necessary to handle responsiveness */
        @media screen and (max-width: 768px) {
            .item {
                width: 100%; /* On smaller screens, make each item occupy the full width */
            }
        }

        .tech-item {
    height: 60px; /* Set the height of the image div */
    width: 60px; /* Set the width of the image div */
    margin: 0 auto 20px; /* Add bottom margin to create spacing between the image and title */
}

.tech-title {
    margin-top: -20px; /* Remove default margin of h3 to create spacing between the image and title */
    font-size: 17px;
    font-family: "Poppins Regular",Helvetica,sans-serif;
    color: #343639;
}
    </style>
</body>
</html>

  </body>

@include('frontend.layouts.footer')

    <aside class="sidebar">
      <h3>Latest Posts</h3>
      <ul>
        <li><u><a href="#">Before Making A 20% Mortgage Down Payment, Read This</a></u></li>
        <li><u><a href="#">Minimum FHA Credit Score Requirement Falls 60 Points</a></u></li>
        <li><u><a href="#">Mortgage Rates Today, August 8, Plus Lock Recommendations</u></a></li>
      </ul>

      <h3>Categories</h3>
      <ul>
        <li><a href="#">Home Buying</a></li>
        <li><a href="#">Mortgages</a></li>
        <li><a href="#">Financial Advice</a></li>
      </ul>

      <h3>Tags</h3>
      <ul>
        <li><a href="#">Real Estate</a></li>
        <li><a href="#">Finance</a></li>
        <li><a href="#">Homeownership</a></li>
      </ul>
    </aside>
  </main>


</body>
</html>


<style>

@media (min-width: 780px) {
  aside.sidebar {
    margin-top:110px;
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    height:25%;
    width: 25%;
    background-color: #fff;
    padding: 20px;
    /* overflow-y: auto; */
  }

  /* main {
    margin-right:110%;
  } */
}

    /* Layout */

main{
    display: flex;
    flex-direction: column;
    max-width: 790px;
    /* margin: 0 auto; */
    margin-left:0px;
    margin-right:5px!important;
}
article{
    display: flex;
    align-items: flex-start;
}
#heading{
    display: flex;
    justify-content: space-between;
    align-items: center; 
}


/* Styling */

#heading h1 span{
    font-size: 1em;
    color: #71BC2F;
}
article{
    border-bottom: 1px solid #e1e1e1;
    margin-bottom: 20px;
    padding-bottom:20px;
}
article img{
    margin-right: 15px;
}
span{
    font-size: 11px;
}
p{
    font-size: 13px;
}
h2{
    margin: 0;
    padding: 0;
    line-height:1em;
}

@media (max-width: 779px){
    main{
        max-width: 90%;
        margin: 0 auto;
    }
    article{
        flex-direction: column;
    }
    article img{
        width: 100%;
        margin-bottom: 20px;
    }
}
</style>

@include('frontend.layouts.footer')