@charset "utf-8";
/* CSS Document */

/* Bounce To Right */
.hvr-bounce-to-right {
     display: inline-block;
     vertical-align: middle;
     -webkit-transform: translateZ(0);
     transform: translateZ(0);
     box-shadow: 0 0 1px rgba(0, 0, 0, 0);
     -webkit-backface-visibility: hidden;
     backface-visibility: hidden;
     -moz-osx-font-smoothing: grayscale;
     position: relative;
     -webkit-transition-property: color;
     transition-property: color;
     -webkit-transition-duration: 0.9s;
     transition-duration: 0.9s;
}
.hvr-bounce-to-right:before {
     content: "";
     position: absolute;
     z-index: -1;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     background: #333;
     -webkit-transform: scaleX(0);
     transform: scaleX(0);
     -webkit-transform-origin: 0 50%;
     transform-origin: 0 50%;
     -webkit-transition-property: transform;
     transition-property: transform;
     -webkit-transition-duration: 0.9s;
     transition-duration: 0.9s;
     -webkit-transition-timing-function: ease-out;
     transition-timing-function: ease-out;
}
.hvr-bounce-to-right:hover, .hvr-bounce-to-right:focus, .hvr-bounce-to-right:active {
     color: white;
}
.hvr-bounce-to-right:hover:before, .hvr-bounce-to-right:focus:before, .hvr-bounce-to-right:active:before {
     -webkit-transform: scaleX(1);
     transform: scaleX(1);
     -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
     transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
}


/* Bounce To Bottom */
.hvr-bounce-to-bottom {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-osx-font-smoothing: grayscale;
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.9s;
  transition-duration: 0.9s;
}
.hvr-bounce-to-bottom:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #5db5ff;
  -webkit-transform: scaleY(0);
  transform: scaleY(0);
  -webkit-transform-origin: 50% 0;
  transform-origin: 50% 0;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition-duration: 0.9s;
  transition-duration: 0.9s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}
.hvr-bounce-to-bottom:hover, .hvr-bounce-to-bottom:focus, .hvr-bounce-to-bottom:active {
  color: white;
}
.hvr-bounce-to-bottom:hover:before, .hvr-bounce-to-bottom:focus:before, .hvr-bounce-to-bottom:active:before {
  -webkit-transform: scaleY(1);
  transform: scaleY(1);
  -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
  transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
}


/*======home1 banner======*/

#minimal-bootstrap-carousel .carousel-caption {
     position: absolute;
     top: 0;
     right: 0;
     left: 0;
     bottom: 0;
     padding: 0;
     text-align: left;
     text-shadow: none;
}
#minimal-bootstrap-carousel .carousel-caption .thm-container {
     display: table;
     width: 100%;
     height: 100%;
     max-width: 1170px;
     margin-left: auto;
     margin-right: auto;
     text-align: center;
}
#minimal-bootstrap-carousel .carousel-caption .thm-container .box {
     display: table-cell;
}
#minimal-bootstrap-carousel .carousel-caption .thm-container .box.valign-top {
     vertical-align: top;
}
#minimal-bootstrap-carousel .carousel-caption .thm-container .box.valign-bottom {
     vertical-align: bottom;
}
#minimal-bootstrap-carousel .carousel-caption .thm-container .box.valign-middle {
     vertical-align: middle;
}
#minimal-bootstrap-carousel .carousel-caption .thm-container .box .content {
     float:left;
     width:54%;
}

#minimal-bootstrap-carousel.home1 .carousel-caption .thm-container .box .content.home1-slides{
     float:right; width:100%; text-align:left; margin-right:-92px; margin-top:140px; z-index:20; position:relative;
}
#minimal-bootstrap-carousel.home1 .carousel-caption .thm-container .box .content.home1-slides h1{
     color:#000;
}
#minimal-bootstrap-carousel.home1 .carousel-caption .thm-container .box .content.home1-slides p{
     color:#000;
}
#minimal-bootstrap-carousel .carousel-caption .thm-container .box .content.text-left{
     text-align:left; padding-left:10px;
}
#minimal-bootstrap-carousel .carousel-caption .thm-container .box .content.home1-slide3 {
         width: 80%;
    float: none;
    display: inline-block;
}
#minimal-bootstrap-carousel .carousel-inner .item {
     min-height: 640px;
     height: 100%;
     width: 100%;
     background-size: cover;
     background-position: center center;
     background-color: #1E1E1E;
}
#minimal-bootstrap-carousel .carousel-control {
     background: none;
     width: 40px;
     height: 40px;
     font-size: 15px;
     line-height: 40px;
     color: #fff;
     background: rgba(0, 0, 0, 0.5);
     visibility: visible !important;
     opacity: .65;
     margin-top: -20px;
     -webkit-transition: all 0.5s ease;
     transition: all 0.5s ease;
     top: 50%;
     border-radius: 0;
     z-index: 88;
}
#minimal-bootstrap-carousel .carousel-control.left {
     left: 1%;
}
#minimal-bootstrap-carousel .carousel-control.right {
     right: 1%;
}
#minimal-bootstrap-carousel .carousel-control:hover {
     opacity: 1;
     background: #000;
}

.carousel {
    position: relative; width:100%; float:left; 
}
#minimal-bootstrap-carousel.home1 .carousel-caption{
     width:40%; height:755px; background:rgba(242, 174, 43, .9);
}
#minimal-bootstrap-carousel.home1 .carousel-caption:after{
     width:240px;  /*background:url(../images/slider-left-bg.png) no-repeat right top; */content:""; right:-240px; top:0px; z-index:2; position:absolute;
     border-top: 755px solid rgba(242, 174, 43, .9);
     border-right: 240px solid transparent;
}
/* processing for fadeing effect styles */
.carousel-fade .carousel-inner .item {
     -webkit-transition-property: opacity;
     transition-property: opacity;
}
.carousel-fade .carousel-inner .item, .carousel-fade .carousel-inner .active.left, .carousel-fade .carousel-inner .active.right {
     opacity: 0;
}
.carousel-fade .carousel-inner .active, .carousel-fade .carousel-inner .next.left, .carousel-fade .carousel-inner .prev.right {
     opacity: 1;
}
.carousel-fade .carousel-inner .next, .carousel-fade .carousel-inner .prev, .carousel-fade .carousel-inner .active.left, .carousel-fade .carousel-inner .active.right {
     left: 0;
     -webkit-transform: translate3d(0, 0, 0);
     transform: translate3d(0, 0, 0);
}
.carousel-fade .carousel-control {
     z-index: 2;
}
/* fixing layers styles */
#minimal-bootstrap-carousel .carousel-caption .thm-container .box.valign-bottom .content {
     padding-bottom: 89px;
}
#minimal-bootstrap-carousel .carousel-caption h1 {
 -webkit-animation-delay: .5s;
 animation-delay: .5s;
}
.fnt55{
     font-size:50px; font-weight:300!important;
}
#minimal-bootstrap-carousel .carousel-caption p {
     -webkit-animation-delay: 1s;
     animation-delay: 1s;
}

/*======home1 banner end======*/


#minimal-bootstrap-carousel.home3-banner .carousel-inner .item {
    min-height: 900px;
}

.enitre_mouse:hover .effect-apollo::before{  -webkit-transform: scale3d(2.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,100%,0);
     transform: scale3d(2.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,100%,0);
     }
.enitre_mouse:hover  .effect-apollo img {
     opacity: 0.8;
     -webkit-transform: scale3d(1.15,1.15,1);
     transform: scale3d(1.15,1.15,1);
     
}
.enitre_mouse:hover h6 a{
     color:#eaa41c;
}
.shadow_effect{    position: relative;
    overflow: hidden;}
.effect-apollo img {
     -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
     transition: opacity 0.35s, transform 0.35s;
     width:100%; float:left; height:auto;
}
.effect-apollo::before {
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     background: rgba(0,0,0,0.3);
     content: '';
     -webkit-transition: -webkit-transform 0.6s;
     transition: transform 0.6s;
     -webkit-transform: scale3d(2.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,-100%,0);
     transform: scale3d(2.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,-100%,0);
}
.effect-apollo:hover img {
     opacity: 0.8;
     -webkit-transform: scale3d(1.15,1.15,1);
     transform: scale3d(1.15,1.15,1);
}
.effect-apollo:hover::before {
     -webkit-transform: scale3d(2.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,100%,0);
     transform: scale3d(2.9,1.4,1) rotate3d(0,0,1,45deg) translate3d(0,100%,0);
}


.image_hover{
     position: relative;
    display: block;
    overflow: hidden;
 }
.image_hover.mbot_38{margin-bottom:38px; }
.image_hover:after{
    position: absolute;
    content: '';
    opacity: 0;
    background-color: rgba(0,0,0,.2);
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    transition: all .3s ease-out;
}
.image_hover:hover:after{opacity:.1}
.zoom_img_effect {
    position: relative;
    transition: all .3s ease-out;
}
.image_hover:hover .zoom_img_effect {
    -webkit-transform: scale(1.05) translateZ(0);
    transform: scale(1.05) translateZ(0);
}
.image_hover:focus:after, .image_hover:hover:after {
    opacity: 1;
}



.accordion-first{
     margin:22px 0px 0px; width:100%; float:left;
}
.accordion-first.acord_mar_non{
     margin:0px;
}
.accordion-first .accordion-group {
    margin-bottom: 15px; 
}
.accordion-first .accordion-group:last-child{
     margin-bottom:0px;
}

.accordion-first .accordion-heading, .accordion-first .accordion-toggle:hover, .accordion-first .accordion-heading .accordion-toggle.active {
    background: none repeat scroll 0% 0% transparent;
}
.accordion-first .accordion-heading .accordion-toggle.active{
     background:#000; color:#fff;
}
.accordion-first .accordion-heading {
    font-size: 15px;
     border:1px solid #868686;
}

.accordion-first .accordion-heading .accordion-toggle {
    display: block;
    cursor: pointer;
    padding: 14px 20px!important;
    color: #000; font-size:18px; font-weight:400;
    outline: medium none !important;
    text-decoration: none;
     background:#fff;
     letter-spacing:0.5px;
}

.accordion-first .accordion-heading .accordion-toggle.active em{border:1px solid #ededed; color: #6c6c6c;}

.accordion-first .accordion-heading .accordion-toggle > em {
     background:#fff;
     border:1px solid #ededed; margin:-2px 0px 0px;
    color: #6c6c6c;
    font-size: 14px;
    height:29px;
    line-height: 29px;
    text-align: center;
    width: 29px;
     float:right;}
.accordion-inner{
     background:#fff;
     border:1px solid #efefef; border-top:0px;
     padding:17px 14px 20px;
     line-height:26px;
}

.accordion-first.accordion-second{
}
.accordion-first.accordion-second .accordion-group {
    margin-bottom: 15px;
}
.accordion-first.accordion-second .accordion-group:last-child{
     margin-bottom:0px;
}



.isotopeSelector {
     margin-bottom: 30px;
}
.portfolio-section {
     padding-bottom: 0;
     float: left;
     width: 100%;
}
.filter-section {
     padding-bottom: 0;
     float: left;
     width: 100%;
     border-bottom:1px solid #ccc;
     margin-bottom:50px;
}
.filter-container {
     text-align:center;
     
}
.list-inline {
     margin-bottom:0px;
}
ul.filter > li > a {
     padding: 26px 0px;
     text-decoration: none;
     color: #242424;
     display: block;
     line-height: 25px;
     box-sizing: border-box;
     border-bottom: transparent;
     -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
     border-bottom: 2px solid transparent;
}
ul.filter > li > a:hover, ul.filter > li > a:focus {
     border-bottom: 2px solid #f2ae2b;
     color:#f2ae2b;
}
ul.filter > li.active a {
     color:#f2ae2b;
     border-bottom: 2px solid #f2ae2b;
}
ul.filter > li span {
     color:#ddd;
     font-size:20px;
     display:inline-block;
     margin:0 5px
}
.filter-section .filter-container .filter > li {
     color: #c1c1c1;
     display: inline-block;
     font-family: 'Open Sans', sans-serif;
     font-size: 15px;
     font-weight: 700;
     list-style: outside none none;
     margin-left: 0;
     margin-right: 0;
     padding:0 12px;
     text-transform: uppercase;
}
.filter-section h1 {
     text-align:center
}
/* the color of the transparent overlay border */

.portfolio-section.port-col figure .overlay-background {
     background-color:#000;
     background-color:rgba(0, 0, 0, 0.4);
}
/* portfolio images */

.portfolio-section figure {
     float:left;
     width:100%;
     position:relative
}
.portfolio-section figure img {
     width:100%;
     height:auto
}
/* project title under image */

.portfolio-section .article-title {
     text-align:center;
     float:left;
     width:100%;
     font-size:18px;
     line-height:24px;
     padding:10px 0 30px 0;
}
.portfolio-section .article-title a {
     color:#aaa
}
/* transparent overlay */

.portfolio-section figure:hover .overlay {
     opacity:1;
     visibility:visible
}
.portfolio-section figure:hover .overlay-background {
     opacity:.8;
     visibility:visible
}
.portfolio-section figure .overlay-background {
     z-index:1;
 -webkit-transition:all .2s ease-in-out;
 -moz-transition:all .2s ease-in-out;
 -o-transition:all .2s ease-in-out;
 transition:all .2s ease-in-out;
     position:absolute;
     top:0;
     left:0;
     opacity:0;
     visibility:hidden;
     width:100%;
     height:100%
}
.portfolio-section figure .overlay-background .inner {
     position:absolute;
     left:0;
     right:0;
     bottom:0;
     top:0;
     margin:11px;
     background-color:#ad6334;
     background-color:rgba(173, 99, 52, 0.9)
}
.portfolio-section figure .overlay {
     z-index:2;
 transition:all .2s ease-in-out;
     position:absolute;
     top:0;
     left:0;
     opacity:0;
     visibility:hidden;
     width:100%;
     height:100%
}
.portfolio-section figure .inner-overlay {
     display:table;
     width:100%;
     height:100%
}
.portfolio-section figure .inner-overlay-content {
     display:table-cell;
     vertical-align:middle;
     width:100%;
     padding:20px 40px
}
.portfolio-section figure .inner-overlay-content.with-icons {
     text-align:center
}
/* icons inside overlay */

.portfolio-section figure .inner-overlay-content.with-icons a {
     width:40px;
     height:40px;
     line-height:42px;
     display:inline-block;
     margin:0 10px;
     text-decoration:none;
     font-size:20px;
     background:rgba(0, 0, 0, 0.9);
     color:#fff;
     border-radius:0
}
/* skew image on hover */ 

.isotopeSelector img {
 -webkit-transition:all .4s ease;
 -moz-transition:all .4s ease;
 -ms-transition:all .4s ease;
 -o-transition:all .4s ease;
 transition:all .4s ease
}
.isotopeSelector:hover img {
     -moz-transform:scale(1.5) rotate(2deg);
     -webkit-transform:scale(1.5) rotate(2deg);
     -o-transform:scale(1.5) rotate(2deg);
     -ms-transform:scale(1.5) rotate(2deg);
     transform:scale(1.5) rotate(2deg);
 -webkit-transition:all .8s ease;
 -moz-transition:all .8s ease;
 -ms-transition:all .8s ease;
 -o-transition:all .8s ease;
 transition:all .8s ease
}
.isotopeSelector figure {
     overflow:hidden
}
.isotopeSelector figure {
}
 @media only screen and (max-width: 767px) {
ul.filter > li > a {
    padding: 10px 0px;
}
}
.full_potfolio_img .effect-goliath img {
    
    width: 100%;
}
.full_potfolio_img .project_img {
    margin-bottom: 10px;
    padding: 0 5px;
}
.full_potfolio_img .full_view .project_txt_btn {
    width: 97%;
    left: 1.5%;
}
.effect-goliath img,
.effect-goliath h6 {
     -webkit-transition: -webkit-transform 0.35s;
     transition: transform 0.35s;
}
.effect-goliath:hover > .black_overlay:before{    content: '';
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,.6);
    position: absolute;
    left: 0;
    top: 0;
    z-index: 1;}
.effect-goliath img {
     -webkit-backface-visibility: hidden;
     backface-visibility: hidden;
     border:0;
}


.effect-goliath:hover img {
     -webkit-transform: translate3d(0,-30px,0);
     transform: translate3d(0,-30px,0);
          border:0;
          -webkit-backface-visibility: hidden;
     backface-visibility: hidden;
}
.effect-goliath h6, .effect-goliath .view_project_btn{
     position: absolute;
     bottom: 0;
     left: 0;
     z-index:99;

}
.effect-goliath:hover .view_project_btn {
     -webkit-transform: translate3d(0,140px,0);
     transform: translate3d(0,140px,0);
}


.effect-goliath:hover h6 {
     -webkit-transform: translate3d(0,-60px,0);
     transform: translate3d(0,-60px,0);
}
.effect-goliath:hover .view_project_btn{ opacity:1}
.project_img {
     position:relative;
}
.project_img.pad_zero {
    padding: 0;
}
.project_txt_btn {
     width: 100%;
     float: left;
     position: absolute;
     left: 0;
     overflow: hidden;
     top: 0px;
     text-align: center;
     height: 100%;
}
.project_classic {
}
.project_classic .project_txt_btn {
     width:100%;
}
.effect-goliath:hover .view_project_btn {
    -webkit-transform: translate3d(0,230px,0);
    transform: translate3d(0,230px,0);
}
a.view-all.slide_learn_btn.view_project_btn {
     width:147px;
     font-size:14px;
     display:inline-block;
     top:-140px;
     position:relative;
     z-index:999;
     -webkit-transition: -webkit-transform 0.90s;
     transition: transform 0.90s;
     line-height:43px;
     font-family: 'Montserrat', sans-serif;
     margin:86px 0px 74px;
     background:#f2ae2b;
     color: #0e0e0e;
    font-weight: 600;
    letter-spacing: 0.50px;
}
.projectsec1 a.view-all.slide_learn_btn.view_project_btn{
     margin:86px 0px 74px;
     
}
.projectsec2 a.view-all.slide_learn_btn.view_project_btn{
     margin:0;
     
}
.homeprj1-slide:hover a.view-all.slide_learn_btn.view_project_btn{
     top:-160px!important;
}
.homeprj3-slide:hover a.view-all.slide_learn_btn.view_project_btn{
     top:-220px!important;
}
a.view-all.slide_learn_btn.view_project_btn:hover{
     color:#fff;
}
.portfolio-2:hover a.view-all.slide_learn_btn.view_project_btn {
     top: -60px!important;
     margin: 0;
}
.portfolio-3:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -200px!important;
}
.portfolio-4:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -250px!important;
}
.portfolio-5:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -270px!important;
}
.isotopeSelector.project_img .lens_icon {
     width: 66px;
     height: 66px;
     background:url(../images/zoom_icon.jpg) no-repeat center center #fff;
     -webkit-transition-duration: 0.3s;
     transition-duration: 0.3s;
     -moz-transition-duration: 0.3s;
     border-radius: 100%;
     display: inline-block;
     top: -50%;
     position: relative;
     text-indent:-9999px;
     z-index: 99;
}
.isotopeSelector.project_img:hover .lens_icon {
     -webkit-transition-duration: 0.3s;
     transition-duration: 0.3s;
     -moz-transition-duration: 0.3s;
     top: 32%;
}
.full_view .project_txt_btn {
     width: 91%;
}
.project_txt_btn h6 {
     width:100%;
     float:left;
     font-size:15px;
     text-align:center;
     background:#333;
     color:#fff;
     line-height:50px;
     bottom:-60px;
}
.mobile_line {
     display:none;
}


.next_prve_control {
    width: 46px;
    height: 46px;
    border: 2px solid #838383;
    text-align: center;
    color: #828383;
    margin: 0 10px;
    font-size: 23px;
    line-height: 38px;
    text-decoration: none !important;
}


#our_project .next_prve_control, #our_project1 .next_prve_control, #our_project2 .next_prve_control, #our_project3 .next_prve_control,
#our_project4 .next_prve_control, #our_project5 .next_prve_control {
    border:0px;
    color: #fff;
     background:#000;
     line-height:43px;
     opacity:.7;
}
#our_project .next_prve_control:hover, #our_project1 .next_prve_control:hover, #our_project2 .next_prve_control:hover, #our_project3 .next_prve_control:hover, #our_project4 .next_prve_control:hover, #our_project5 .next_prve_control:hover{
     opacity:1;
}
.home1-project#our_project .controls, .home1-project#our_project1 .controls, .home1-project#our_project2 .controls, .home1-project#our_project3 .controls, .home1-project#our_project4 .controls, .home1-project#our_project5 .controls{
     position: absolute;
    right: 6.3%;
    top: -130px;
}

.home2-project#our_project .controls, .home2-project#our_project1 .controls, .home2-project#our_project2 .controls, .home2-project#our_project3 .controls, .home2-project#our_project4 .controls, .home2-project#our_project5 .controls{
     width:100%; bottom:-80px; display:inline-block;
     position:absolute; text-align:center;
}

.portfolio-5 .projt-column{
     width:20%;
}
@media only screen and (min-width: 1400px) and (max-width: 2400px) {
     #minimal-bootstrap-carousel.home1 .carousel-caption {
    width: 47%;
     }
     #minimal-bootstrap-carousel.home1 .carousel-caption .thm-container .box .content.home1-slides {
    width: 74%;
     }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
     #minimal-bootstrap-carousel.home1 .carousel-caption .thm-container .box .content.home1-slides {
    margin-right: -40px;
    margin-top: 90px;
}
.portfolio-3 .isotopeSelector.project_img:hover a.view-all.slide_learn_btn.view_project_btn {
     top: -150px;
}
.portfolio-4 .isotopeSelector.project_img:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -200px;
}
.portfolio-5 .projt-column {
    width: 25%;
}
.home2 #our_project .controls {
    right: 20px;
}

.homeprj1-slide:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -220px!important;
}
.homeprj3-slide:hover a.view-all.slide_learn_btn.view_project_btn{
     top:-250px!important;
}

.portfolio-2:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -100px!important;
}
.portfolio-3:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -250px!important;
}
.portfolio-4:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -270px!important;
}

}
@media only screen and (min-width: 768px) and (max-width: 991px) {
     #minimal-bootstrap-carousel.home1 .carousel-caption .thm-container .box .content.home1-slides {
    margin-right: -44px;
    margin-top: 67px;
     }
     .portfolio-2 .isotopeSelector.project_img:hover a.view-all.slide_learn_btn.view_project_btn {
     top: -120px;
}
.portfolio-3 .isotopeSelector.project_img:hover a.view-all.slide_learn_btn.view_project_btn {
     top: -130px;
}
.portfolio-5 .projt-column {
    width: 33.3%;
}
.home2 #our_project .controls {
    right: 10px;
}

.portfolio-2:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -140px!important;
}
.portfolio-3:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -230px!important;
}
.portfolio-4:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -220px!important;
}

}
@media only screen and (min-width: 467px) and (max-width: 767px) {
     .homeprj1-slide:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -130px!important;
}
.home1-project#our_project .controls, .home1-project#our_project1 .controls, .home1-project#our_project2 .controls, .home1-project#our_project3 .controls, .home1-project#our_project4 .controls, .home1-project#our_project5 .controls {
    top: -157px;
}

.portfolio-2:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -110px!important;
}
.portfolio-3:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -200px!important;
}
.portfolio-4:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -200px!important;
}
}
@media only screen and (min-width: 260px) and (max-width: 767px) {
     #minimal-bootstrap-carousel.home1 .carousel-caption {
    width: 100%;
    height:auto;
    background: none;
     padding-left:10px; padding-right:10px;
}
#minimal-bootstrap-carousel.home1 .carousel-caption:after{
     display:none;
}
/*#minimal-bootstrap-carousel.home1 .carousel-caption .thm-container .box .content.home1-slides {
    text-align: center;
    margin-right:0px;
    margin-top: 0px;
}
     #minimal-bootstrap-carousel .carousel-inner .item {
    background-position: center top;
    background-repeat: no-repeat;
    background-size: 450px;
     min-height: 700px;
}
#minimal-bootstrap-carousel.home1 .carousel-caption .thm-container .box .content.home1-slides h1 {
    color: #fff;
}
#minimal-bootstrap-carousel.home1 .carousel-caption .thm-container .box .content.home1-slides p {
    color: #fff;
}

#minimal-bootstrap-carousel .carousel-caption p {
    font-size: 17px; line-height:28px; color:#fff;
}
#minimal-bootstrap-carousel .carousel-caption .thm-container .box .content {
     float:none; display:inline-block;
    width: 80%;
}
#minimal-bootstrap-carousel .carousel-caption .thm-container .box.valign-top, #minimal-bootstrap-carousel .carousel-caption .thm-container .box.valign-middle{
    vertical-align: top;
    padding-top:300px;
}
#minimal-bootstrap-carousel .carousel-caption .thm-container .box .content.text-left {
    text-align: center;
}
#minimal-bootstrap-carousel .carousel-control {
    top: 15%;
}*/
#minimal-bootstrap-carousel.home1 .carousel-caption .thm-container .box .content.home1-slides p {
     display:none;
}
#minimal-bootstrap-carousel .carousel-caption h1 {
    font-size: 25px !important; text-align:center; color:#fff!important;
}
#minimal-bootstrap-carousel.home1 .carousel-caption .thm-container .box .content.home1-slides {
    margin-right: 0px; padding:0px 30px; margin-top: 105px;
}
#minimal-bootstrap-carousel .carousel-inner .item {
    min-height: 240px!important;
}

#minimal-bootstrap-carousel.home3-banner .carousel-inner .item {
    min-height:360px!important;
}
#our_project .left  {
     margin-left:0px;
}
#our_project .right  {
     margin-right:0px;
}
.isotopeSelector.project_img:hover a.view-all.slide_learn_btn.view_project_btn {
     top: -50px;
}
.portfolio-5 .projt-column {
    width: 50%;
}
.filter-section .filter-container .filter > li {
     width:100%; text-align: left; font-size:13px;
}
.home2 #our_project .controls {
    right: 10px;
}
#minimal-bootstrap-carousel .carousel-caption .thm-container .box.valign-bottom {
    
}
#minimal-bootstrap-carousel .carousel-caption p {
     display:none;
}
#minimal-bootstrap-carousel .carousel-caption .thm-container .box .content {
    width: 100%;
}
}
@media only screen and (min-width: 260px) and (max-width: 467px) {
.isotopeSelector.project_img:hover a.view-all.slide_learn_btn.view_project_btn {
     top: -150px;
}
.portfolio-5 .projt-column {
    width:100%;
}
.recent-project-section:hover a.view-all.slide_learn_btn.view_project_btn {
     top: -200px;
}
.home2 #our_project .controls {
     margin:60px 0px 0px;
}
.home2.recent-project-section h3 {
     margin-bottom:50px;
}


.homeprj1-slide:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -150px!important;
}
.home1-project#our_project .controls, .home1-project#our_project1 .controls, .home1-project#our_project2 .controls, .home1-project#our_project3 .controls, .home1-project#our_project4 .controls, .home1-project#our_project5 .controls {
     display:none;
     
}
.portfolio-2:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -180px!important;
}
.portfolio-3:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -250px!important;
}
.portfolio-4:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -250px!important;
}
.portfolio-5:hover a.view-all.slide_learn_btn.view_project_btn {
    top: -245px!important;
}
}