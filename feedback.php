<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


 <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="projectfiles/jsfiles/jquery-3.7.1.min.js"></script>
    <title>Lucky Links Social - Request accepted!</title>
    <meta property="og:title" content="Lucky Links Social - Request accepted!" />
    <meta property="og:image" content="{page-images-1}" />
    <meta name="twitter:title" content="Lucky Links Social - Request accepted!" />
    <meta name="twitter:description" content="Lucky Links Social - Request accepted!" />
    <meta name="twitter:image:src" content="{page-images-1}" />
    
    <meta property="og:description" content="Lucky Links Social - Request accepted!" />
    <meta name="description" content="Lucky Links Social - Request accepted!" />
    <link rel="stylesheet" href="projectfiles/cssfiles/bootstrap-icons.css" />
    <link rel="stylesheet" href="projectfiles/cssfiles/button.css" />
    <link rel="stylesheet" href="projectfiles/cssfiles/bootstrap.css" />
    <link rel="stylesheet" href="projectfiles/cssfiles/slick.css" />
    <link rel="stylesheet" href="projectfiles/cssfiles/slick-theme.css" />
    <script src="projectfiles/jsfiles/slick.min.js"></script>

    

    <link rel="shortcut icon" href="imagevault/logo-66fbaeb084f52.png" type="image/x-icon" />
    <link rel="stylesheet" href="main-style.css?v=1727770267" />
    <style>
      
    </style>
    
  </head>

  <body>
   <style>
      .top {
    padding: 19px 0 8px 0;
    background-color: #fff
}

@media (max-width:600px) {
    .top {
        padding: 16px 0
    }
}

.top__container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    gap: 8px 16px
}
.top__container img {
    max-width: 75px;
}
@media (max-width:991px) {
    .top__container {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column
    }
}

.top__title {
    width: 100%;
    -webkit-box-flex: 0;
    -ms-flex: 0 1 382px;
    flex: 0 1 382px;
    color: #111;
    font-weight: 700;
    font-size: 31px;
    line-height: 140%;
}

@media (max-width:991px) {
    .top__title {
        -webkit-box-flex: 0;
        -ms-flex: none;
        flex: none
    }
}

.top__texts {
    width: 100%;
    -webkit-box-flex: 0;
  
}
@media (min-width:992px) {
  .top__texts {
    width: 100%;
    -webkit-box-flex: 0;
    -ms-flex: 0 1 384px;
    flex: 0 1 384px;}}
.top__texts__logo {
    width: 100%;
    -webkit-box-flex: 0;

}
@media (min-width:992px) {
  .top__texts__logo {
  
    flex: 0 1 215px;
}}
.top {
    padding: 19px 0 8px 0;
    background-color: #fff
}

@media (max-width:600px) {
    .top {
        padding: 16px 0
    }
}

.top__container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    gap: 8px 16px
}
.top__container img {
    max-width: 75px;
}
@media (max-width:991px) {
    .top__container {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column
    }
}
.top__nums {
  font-weight: 700;
  font-size: 20px;
  text-align: center;
}
    </style>
    <div class="top">
      <div class="top__container container">
          <img src="18.jpg" alt="18+" width="81">
          <div class="top__texts__logo">
              <p class="top__text tx-17 " style="text-align: center;">
                  You can only play if you are at least 18 years old.
              </p>
          </div>
          <div class="top__title " style="text-align: center;">
              Play responsibly!
          </div>
          <div class="top__texts">
              <p class="top__text tx-17 " style="text-align: center;">
                  Gambling addiction is a serious problem. If you or someone you love is struggling, seek help.
              </p>
          </div>
          <div class="top__right">
              <div class="top__text tx-17 text-center mb-8">
                  Helpline number
              </div>
              <div class="top__nums ">
                  0808 8020 133
              </div>
          </div>
      </div>
  </div>
    <div class="header-lay">
      <div class="container">
        <div class="header accounttl--card">
          <div class="logo">
            <a href="./">
              <div class="logoImg"><img src="imagevault/logo-66fbaeb084f52.png" alt="" /></div>
              <div class="logoTitle"><h2>Lucky Links Social</h2></div>
            </a>
          </div>
          <nav class="header-nav">
            <ul class="topnav">
              <li>
                <a class="topnav-link" href="./">Home</a>
              </li>
              <li>
                <a class="topnav-link" href="our-journey.html">Our Journey</a>
              </li>
              <li>
                <a class="topnav-link" href="all-games.html">Games</a>
              </li>
              <li><a class="topnav-link" href="find-us.html">Contact</a></li>
            </ul>
          </nav>
          <div class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <div class="menu">
            <nav>
              <ul>
                <li><a class="menu-link" href="./">Home</a></li>
                <li><a class="menu-link" href="our-journey.html">Our Journey</a></li>
                <li><a class="menu-link" href="all-games.html">Games</a></li>
                <li><a class="menu-link" href="communityrules.html">Community rules</a></li>
                
                <li>
                  <a class="menu-link" href="gamingIntegrity.html"
                    >Responsible Social Gaming
                  </a>
                </li>
                
                <li><a class="menu-link" href="find-us.html">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="header-content">
        <div class="baner-hed">
          <div class="baner-hed-img">
            <div>
              <img src="imagevault/bg/gallery-066fbaeb084a45.jpg" alt="" />
            </div>
            <div>
              <img src="imagevault/bg/gallery-166fbaeb084aa7.jpg" alt="" />
            </div>
            <div>
              <img src="imagevault/bg/gallery-266fbaeb084af8.jpg" alt="" />
            </div>
            <div>
              <img src="imagevault/bg/gallery-366fbaeb084b48.jpg" alt="" />
            </div>
          </div>
          <div class="baner-hed-text">
            <h2>Start winning today</h2>  <p style="color:white;">+18. NO-DEPOSIT CASINO. NO REAL MONEY CASINO.</p>
            <p>Welcome to Lucky Links Social! Immerse yourself in exciting games that will bring you joy and pleasure. Start your casino adventure with us!</p>
            <a href="all-games.html" class="button-4">Start playing</a>
          </div>
        </div>
        <div class="tables-lider">
          <h2>Leaderboards</h2><p style="color:white; text-align:center;">+18. NO-DEPOSIT CASINO. NO REAL MONEY CASINO.</p>
          <div class="table-lider-box" id="scoreList">
            <div class="table-lider-card" data-score="22590">
              <div class="table-lider-card-box">
                <span class="order"></span>
                <img
                  
                  href="imagevault/avadir/avatar-other-066fbaeb084732.jpg"
                  src="imagevault/avadir/avatar-other-066fbaeb084732.jpg"
                  alt=""
                />
                <h5>Starlight5</h5>
              </div>
              <p>22590</p>
            </div>

            <div class="table-lider-card" data-score="40478">
              <div class="table-lider-card-box">
                <span class="order"></span>
                <img
                  
                  src="imagevault/avadir/avatar-other-266fbaeb084790.jpg"
                  alt=""
                />
                <h5>Star-Wolf9</h5>
              </div>
              <p>40478</p>
            </div>

            <div class="table-lider-card" data-score="40116">
              <div class="table-lider-card-box">
                <span class="order"></span>
                <img
                  src="imagevault/avadir/avatar-other-366fbaeb0847f2.jpg"
                  alt=""
                />
                <h5>Arctic-Blizzard</h5>
              </div>
              <p>40116</p>
            </div>

            <div class="table-lider-card" data-score="10016">
              <div class="table-lider-card-box">
                <span class="order"></span>
                <img
                  src="imagevault/avadir/avatar-other-466fbaeb08484b.jpg"
                  alt=""
                />
                <h5>ox_74</h5>
              </div>
              <p>10016</p>
            </div>

            <div class="table-lider-card" data-score="18206">
              <div class="table-lider-card-box">
                <span class="order"></span>
                <img
                  src="imagevault/avadir/avatar-other-566fbaeb0848aa.jpg"
                  alt=""
                />
                <h5>IronPhoenix8</h5>
              </div>
              <p>18206</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      let menuBtn = document.querySelector('.menu-btn');
      let menu = document.querySelector('.menu');
      let menuLinks = document.querySelectorAll('.menu-link');

      function closeMenu() {
        menuBtn.classList.remove('active');
        menu.classList.remove('active');
      }

      menuBtn.addEventListener('click', function () {
        menuBtn.classList.toggle('active');
        menu.classList.toggle('active');
      });

      menuLinks.forEach(function (link) {
        link.addEventListener('click', closeMenu);
      });
    </script>

    <script>
      $(document).ready(function () {
        $('.baner-hed-img').slick({
          dots: false,
          arrows: false,
          infinite: true,
          speed: 500,
          fade: true,
          autoplay: true,
          cssEase: 'linear',
          adaptiveHeight: true,
          onInit: function () {
            $('.baner-hed-img img').each(function () {
              $(this).css('height', $('.baner-hed-img').height());
            });
          },
          onAfterChange: function () {
            $('.baner-hed-img img').each(function () {
              $(this).css('height', $('.baner-hed-img').height());
            });
          },
        });
      });
    </script>

    <script>
      $(document).ready(function () {
        function sortRating() {
          var $list = $('.table-lider-box');
          var $items = $list.children('.table-lider-card');

          $items.each(function (index) {
            $(this).data('original-index', index + 1);
          });

          $items.sort(function (a, b) {
            var scoreA = parseInt($(a).data('score'));
            var scoreB = parseInt($(b).data('score'));
            return scoreB - scoreA;
          });

          $items.detach().appendTo($list);

          var $maxRatingElement = $items.first();
          var $secondElement = $items.eq(1);
          var $thirdElement = $items.eq(2);
          $maxRatingElement.addClass('first-score');
          $secondElement.addClass('second-score');
          $thirdElement.addClass('third-score');

          $list.children('.table-lider-card').each(function (index) {
            $(this)
              .find('.order')
              .text(index + 1 + '.');
          });
        }

        sortRating();
      });
    </script>

    <script>
      $(document).ready(function () {
        var header = $('.header-lay');
        var headerHeight = header.height();
        var scrollTrigger = 0.8 * $(window).height();

        $(window).scroll(function () {
          var scrollY = $(window).scrollTop();

          if (scrollY >= scrollTrigger) {
            header.addClass('fixed-header');
            header.css('top', '0');
          } else {
            header.removeClass('fixed-header');
            header.css('top', '-' + headerHeight + 'px');
          }
        });
      });
    </script>

    


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-filterby__footer{
		margin: 0px;
		padding: 0px;
		font-family: 'Lato', sans-serif;
		width: 100%;
		font-size: 17px;
		padding: 342px 0px;
	}
	.bodyClass1-filterby__footer{
		background: #ffffff;
		color: #ffffff;
	}
	.bodyClass2-filterby__footer{
		background: #f6f5f1;
		color: #fff;
	}
	.bodyClass3-filterby__footer{
		background: #fff;
		color: #111;
	}
	.wrapage-block-filterby__footer{
		background-size: 100%;
		width: 100%;
	}
	.box_main-filterby__footer{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-filterby__footer h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-filterby__footer p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-filterby__footer{
		text-align: center;
	}
	.mainBlock-filterby__footer ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-filterby__footer ul>li span{
		font-weight: bold;
	}
	.mainBlock-filterby__footer{
		max-width: 989px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 20px;
	}
	.mainBlock-filterby__footer .cBlock-filterby__footer{
		text-align: center;
	}

	.bodyClass3-filterby__footer .mainBlock-filterby__footer{
		background: none;
		border-top: 2px dashed #f6f5f1;
		border-bottom: 2px dashed #f6f5f1;
	}
	.bodyClass2-filterby__footer .mainBlock-filterby__footer{
		background: #321D2F;
		color: #fff !important;
		box-shadow: 0px 0px 20px #321D2F;
	}
	.bodyClass2-filterby__footer .mainBlock-filterby__footer p{
		color: #fff !important;
	}
	.bodyClass1-filterby__footer .mainBlock-filterby__footer{
		background: #228CA8;
		color: #ffffff;
		border-left: 1px solid #1B1B2F;
	}
	.bodyClass1-filterby__footer .mainBlock-filterby__footer p{
		color: #ffffff !important;
	}
	.order-filterby__footer{
		font-size: 19px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-filterby__footer p{
			padding: 0px 15px;
		  }
		  .box_main-filterby__footer h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-filterby__footer{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-filterby__footer{
			height: 100%;
		}
	}
</style>
<div class="bodyClass2-filterby__footer" id="mainWrapp-filterby__footer">


	<div class="wrapage-block-filterby__footer">
		<div class="box_main-filterby__footer">
			<div class="mainBlock-filterby__footer">
				<p>We're truly grateful for your outreach and the confidence you've placed in us. Your support empowers our dedicated team to enhance the caliber of our offerings continually.</p>
<p>Remember, your insights, feedback, and suggestions are invaluable to our growth and evolution. If there's anything on your mind or if you require assistance, please feel free to reach out. Our commitment is to be readily available to assist you.</p>
<p class="cBlock-filterby__footer">With heartfelt thanks and warm wishes!</p>
			</div>
		</div>
	</div>


</div>




    <div class="footer-lay">
      <div class="container">
        <div class="footer pricepq-section">
          
           <div class="disclaimer">
            <h2>Disclaimer</h2>
            <div class="disclaimer-text">
              <img class="disclaimer-img" src="imagevault/img-18-66fbaeb084fbf.svg" alt="" />
              <h5>Welcome to our social gaming site, where bets are made exclusively with game credits. Winnings in real money are not possible, and this is a place for a safe holiday. Access to the site is open only to adult users over 18 years old. Success on our site does not guarantee success in real money games.</h5>
            </div>
          </div>
          <div class="disclaimer">
            <div class="disclaimer-text">
              <h5 style="font-size: 14px;">COMPLIANCE STATEMENT: WE ARE AN INDEPENDENT THIRD PARTY PROVIDING CASINO SERVICES NEWS, TIPS, OPINIONS AND TRICKS AND ALL OPINIONS ISSUED ARE OURS AND NOT THOSE OF THE BRANDS OR BRANDS PRESENT ON THESE PAGES. ALL OUR ACTIONS ARE VERIFIABLE. ALL CASINOS DISPLAY SPECIFIC TERMS AND CONDITIONS ON THEIR SITES WHICH SHOULD ALWAYS BE CONSULTED BEFORE PLAYING. ANY TERMS AND CONDITIONS WITH SPECIFIC REFERENCE TO THE GUIDELINES IN THESE ARTICLES CAN BE FOUND BELOW IN THE ARTICLE AND ON THE OPERATOR'S WEBSITE. TO CORRELATE THE RANKINGS AND RATINGS OF THE CASINOS ON THIS SITE, WE COLLECTED DATA FROM A NUMBER OF DIFFERENT SOURCES, INCLUDING RECOMMENDATIONS AND COMMENTS FROM USER EXPERIENCES. OCCASIONALLY, WE HAVE ALSO TAKEN INTO CONSIDERATION OUR OWN CLASSIFICATIONS AND ASSESSMENT ALGORITHMS, IN ADDITION TO THIRD ASSESSMENT AGENCIES. TO KEEP THIS INFORMATION FREE OF CHARGE, SOME PROCEDURES MAY BE INVOLVED BY FEATURED SERVICE PROVIDERS. WE PAY GREAT ATTENTION AND ENSURE THAT ALL THE INFORMATION PRESENTED IS UPDATED AND CORRECT, THEREFORE WE DISCLAIM ALL EXPRESS AND IMPLIED WARRANTIES REGARDING THE MARKETABILITY, APPLICABILITY AND RELEVANCE OF THE INFORMATION. THIS WEBSITE, INCLUDING ITS CONTENT AND SERVICES, IS PROVIDED "AS IS", THEREFORE, YOUR USE OF AND RELIANCE ON THE INFORMATION PRESENTED ON THIS SITE IS ENTIRELY AT YOUR OWN RISK</h5>

            </div>
          </div>
          <div class="disclaimer">
            <div class="inforow">
              <div class="leftinfo">
                <h5>Games are only available to people over the age of 18.</h5>
                <div class="rightfooter__row">
                  <div class="rightfooter__col">
                    <div class="rightfooter__img">
                      <a href="/" target="blank"><img src="img/18.png" alt="18"></a>
                    </div>
                  </div>
                  <div class="rightfooter__col">
                    <div class="rightfooter__img">
                      <a href="https://www.gamblingtherapy.org/" target="blank"><img class="fl" src="img/gt.webp"
                                                                                     alt="gt"></a>
                    </div>
                  </div>
                  <div class="rightfooter__col">
                    <div class="rightfooter__img">
                      <a href="https://www.gambleaware.org/" target="blank"><img class="fl"
                                                                                 src="img/begamble.webp"
                                                                                 alt="begamble"></a>
                    </div>
                  </div>
                  <div class="rightfooter__col">
                    <div class="rightfooter__img">
                      <a href="https://www.gamcare.org.uk/" target="blank"><img class="fl" src="img/gamcare.webp"
                                                                                alt="gamcare"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rightinfo">
                <h5 style="text-align: center;">Play responsibly!<br>
                  You can only play if you are at least 18 years old.<br>
                  Gambling can become a problem with serious consequences if not practiced responsibly.<br>
                  18+ The site is prohibited for minors. ONJN decision NO. 4681 of 07.08.2019</h5>
                <p class="paddl" style="margin: auto;text-align:center;">
                  COMPLIANCE STATEMENT: WE ARE AN INDEPENDENT
                  THIRD PARTY PROVIDING CASINO SERVICES NEWS, TIPS, OPINIONS AND TRICKS AND ALL OPINIONS ISSUED ARE
                  OURS AND NOT THOSE OF THE BRANDS OR BRANDS PRESENT ON THESE PAGES. ALL OUR ACTIONS ARE VERIFIABLE.
                  ALL CASINOS DISPLAY SPECIFIC TERMS AND CONDITIONS ON THEIR SITES WHICH SHOULD ALWAYS BE CONSULTED
                  BEFORE PLAYING. ANY TERMS AND CONDITIONS WITH SPECIFIC REFERENCE TO THE GUIDELINES IN THESE ARTICLES
                  CAN BE FOUND BELOW IN THE ARTICLE AND ON THE OPERATOR'S WEBSITE. TO CORRELATE THE RANKINGS AND
                  RATINGS OF THE CASINOS ON THIS SITE, WE COLLECTED DATA FROM A NUMBER OF DIFFERENT SOURCES, INCLUDING
                  RECOMMENDATIONS AND COMMENTS FROM USER EXPERIENCES. OCCASIONALLY, WE HAVE ALSO TAKEN INTO
                  CONSIDERATION OUR OWN CLASSIFICATIONS AND ASSESSMENT ALGORITHMS, IN ADDITION TO THIRD ASSESSMENT
                  AGENCIES. TO KEEP THIS INFORMATION FREE OF CHARGE, SOME PROCEDURES MAY BE INVOLVED BY FEATURED
                  SERVICE PROVIDERS. WE PAY GREAT ATTENTION AND ENSURE THAT ALL THE INFORMATION PRESENTED IS UPDATED
                  AND CORRECT, THEREFORE WE DISCLAIM ALL EXPRESS AND IMPLIED WARRANTIES REGARDING THE MARKETABILITY,
                  APPLICABILITY AND RELEVANCE OF THE INFORMATION. THIS WEBSITE, INCLUDING ITS CONTENT AND SERVICES, IS
                  PROVIDED "AS IS", THEREFORE, YOUR USE OF AND RELIANCE ON THE INFORMATION PRESENTED ON THIS SITE IS
                  ENTIRELY AT YOUR OWN RISK
                </p>
              </div>
            </div>
          </div>

        
          <div>
            <style> 
                .footer-box2-16dfras {
    display: flex;
    gap: 10px;
    justify-content: center;
    align-items: center;
    margin: 25px 0px;
  }
  .footer-pic16dfras {
    display: flex;
    width: 100px;
    height: 50px;
    justify-content: center;
    align-items: center;
  }
  .footer-pic16dfras img {
    width: 100%;
    height: 100%;
    object-fit: contain;
  }
            </style>
           <div class="container">
              <div class="footer-box2-16dfras">
              
                <a href="https://www.gamblingtherapy.org/" class="footer-pic16dfras">
                    <img src="thrrapy.webp" alt="">
                </a>
                <a href="https://www.gamcare.org.uk/" class="footer-pic16dfras">
                    <img src="gamcare.svg" alt="">
                </a>
                <a href="https://www.begambleaware.org/" class="footer-pic16dfras">
                    <img src="aware.svg" alt="">
                </a>
                <a href="https://www.gamstop.co.uk/" class="footer-pic16dfras">
                    <img src="gamstop.jpg" alt="">
                </a>
            </div>
  
            </div>
            <div class="copyright">
              <div class="privacy">
                <ul>
                  <li><a href="privacyPolicy.html">Privacy policy</a></li>
                  <li><a href="terms-of-service.html">Terms & Conditions</a></li>
                  <li><a href="legal-disclaimer.html">Disclaimer</a></li>
                </ul>
                <ul class="rules-game">
                  <li><a href="communityrules.html">Community rules</a></li>
                  
                  <li><a href="gamingIntegrity.html">Responsible Social Gaming</a></li>
                  
                </ul>
              </div>
              <div class="copyright-text">
                <p>&#169; 2024 Lucky Links Social</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      $(document).ready(function () {
        if ($('.top-games').css('display') === 'none') {
          $('.top-games-two').css('display', 'block');
        }
      });
    </script>

     

</body>
</html>
