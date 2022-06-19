﻿<?php include 'header.php' ?>

    
    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="../scripts/jssor.slider.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $Idle: 0,
              $SlideDuration: 5000,
              $SlideEasing: $Jease$.$Linear,
              $PauseOnHover: 4,
              $SlideWidth: 140,
              $Align: 0
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>

        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

    </style>
	
	<div class="row" height="120px">
    <div id="jssor_1" style="position:relative;margin:0 0 0 0;top-100px;left:0px;width:980px;height:150px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100px;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;width:38px;height:38px;" src="../images/loading/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1100px;height:100px;overflow:hidden;">
            <div>
                <img data-u="image" src="../images/sponsors/doncastercollegeuniversitylogo.jpg"  />
            </div>
            <div>
                <img data-u="image" src="../images/sponsors/sportsacademy.jpg" />
            </div>
            <div>
               <img data-u="image" src="../images/sponsors/sbsportsphotographylogo.jpg" />
            </div>
            <div>
                <img data-u="image" src="../images/sponsors/stephenbuckleyphotography.jpg"  />
            </div>
                     <div>
                <img data-u="image" src="../images/sponsors/doncastercollegeuniversitylogo.jpg"   />
            </div>
            <div>
                <img data-u="image" src="../images/sponsors/sportsacademy.jpg" />
            </div>
            <div>
               <img data-u="image" src="../images/sponsors/sbsportsphotographylogo.jpg" />
            </div>
            <div>
                <img data-u="image" src="../images/sponsors/stephenbuckleyphotography.jpg"/>
            </div>
        </div>
    </div>
	</div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
<?php include 'footer.php' ?>