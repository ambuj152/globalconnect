<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,900);

html,
body {
  -moz-box-sizing: border-box;
       box-sizing: border-box;
  height: 100%;
  width: 100%; 
  background: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
}
 
.wrapper {
  display: table;
  height: 100%;
  width: 100%;
}

.container-fostrap {
  /* display: table-cell; */
  padding: 1em;
  padding-top:none;
  text-align: center;
  /* vertical-align: top; */
}
.fostrap-logo {
  width: 100px;
  margin-bottom:15px
}
h1.heading {
  color: #fff;
  font-size: 1.15em;
  font-weight: 600;
  margin: 0 0 0.5em;
  color: #505050;
}
@media (min-width: 450px) {
  h1.heading {
    font-size: 3.55em;
  }
  #enquiry{
    display: none;
  }
}
@media (min-width: 760px) {
  h1.heading {
    font-size: 3.05em;
  }
}
@media (min-width: 900px) {
  h1.heading {
    font-size: 3.25em;
    margin: 0 0 0.3em;
  }
} 
.card {
  display: block; 
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border-radius: 2px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12); 
    transition: box-shadow .25s; 
}
.card:hover {
  box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
.img-cardc {
  width: 100%;
  height: 630px;
  border-top-left-radius:2px;
  border-top-right-radius:2px;
  display:block;
    overflow: hidden;
}
.img-cardc img{
  width: 100%;
  height: 200px;
  object-fit:cover; 
  transition: all .25s ease;
} 
.card-content {
  padding:15px;
  text-align:left;
}
.card-title {
  margin-top:0px;
  font-weight: 700;
  font-size: 1.65em;
}
.card-title a {
  color: #000;
  text-decoration: none !important;
}
.card-read-more {
  border-top: 1px solid #D4D4D4;
}
.card-read-more a {
  text-decoration: none !important;
  padding:10px;
  font-weight:600;
  text-transform: uppercase
}

@media(max-width:600px)
{
  .img-cardc {
    height: auto !important;
  }
}
.img-car{


  margin-top: 0px;
}

</style>


<section class="wrappe">
    <div class="container-fostrap">
        <div>
            <img src="images/alumni.png" class="fostrap-logo"/>
            <h1 class="heading">
            Run & Managed by BHU Alumni - 2008-10 
            </h1>
            <br>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="card">
                            <a class="img-cardc" href="#" style="">
                            <img src="images/malvi.png"  style="height:auto;"/>
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#">Introduction 
                                  </a>
                                </h4>
                                <p class="">
                                2008-10 BHU Alumni-Managed the global connect travel agency
                                </p>
                            </div>
                            <div class="card-read-more">
                                <!-- <a href="#" class="btn btn-link btn-block">
                                    Read More
                                </a> -->
                            </div>
                        </div>
                    <!-- </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="#">
                            <img src="images/team1.png" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#">Meet the Team
                                  </a>
                                </h4>
                                <p class="">
                                BHU Alumni at the Helm of Our Travel and Tourism Company
                                </p>
                            </div>
                            <div class="card-read-more">
                               
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-xs-12 col-sm-4">
                        <div class="card">
                            <a class="img-card" href="#">
                            <img src="images/sptourrr.png" />
                          </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href="#">Sports Tour
                                  </a>
                                </h4>
                                <p class="">
                                Embark on Athletic Adventures with Our BHU Alumni Team
                                </p>
                            </div>
                            <div class="card-read-more">
                               
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
