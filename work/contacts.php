<?php 
include("include/header.php");
?>


  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ==" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js" integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log==" crossorigin=""></script>

  <section id="content">
   <div class="slider">
     <div id="mapid" style="width: 100%; height: 400px;"></div>
     <script>

      var mymap = L.map('mapid').setView([13.062723, 80.168113], 13);

      L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
        '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="http://mapbox.com">Mapbox</a>',
        id: 'mapbox.streets'
      }).addTo(mymap);

      L.marker([13.062723, 80.168113]).addTo(mymap);

      L.marker([13.062723, 80.168113], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 500
      }).addTo(mymap);




    </script>

  </div>
  <div class="slogan top-1">
    <p>We <span class="clr-1">provide</span> you with the <span class="clr-1">highest</span> level of <span class="clr-1">services</span></p>
  </div>

  <div class="page5-row1">
    <div class="page5-col-1 border-right">
      <h2><span class="clr-1">C</span>ontact info</h2>
      <dl class="adr">
        <dt class="clr-1"><strong>GNCS ASSOCIATES</strong></dt>
        <dd><strong>Plot No.53, Door No. 2, G Floor,1st Street, Pallavan Nagar,Maduravoyal, Chennai - 600 095.
        </strong></dd>
        <dd><span>Telephone:</span><strong>044 - 4857 4423/4500 4423/64550224</strong></dd>
        <dd><span>Mobile:</span><strong>+91 98840 28900 / 90804 33540 / 98667 71444.</strong></dd>
        <dd><span>Email:</span><a href="mailto:gncsassociates@gmail.com" class="link" target="_blank">gncsassociates@gmail.com</a></dd>
        <dd>&nbsp;</dd>
       <!--  <dd><strong>9863 Mill Road, Cambridge, MG09 99HT</strong></dd>
        <dd><span>Telephone:</span><strong>+1 959 603 6035</strong></dd>
        <dd><span>Fax:</span><strong>+1 504 889 9898</strong></dd>
        <dd><span>Email:</span><a href="#" class="link">mail@thomsander.com</a></dd> -->
      </dl>
    </div>
    <div class="page5-col-2">
      <h2><span class="clr-1">C</span>ontact form:</h2>
      <form id="form" method="post" action="#">
        <fieldset>
          <label><strong>Full name:</strong>
            <input type="text" value="">
            <strong class="clear"></strong></label>
            <label><strong>Email:</strong>
              <input type="text" value="">
              <strong class="clear"></strong></label>
              <label><strong>Message:</strong>
                <textarea></textarea>
                <div class="btns">
                <button type="reset" class="link-2" value="clear">Clear</button>
                <button type="submit" class="link-2" value="Send">Send</button>
                </div>
               <!-- <strong class="clear"></strong></label>
                <strong class="clear"></strong>
                <div class="btns"><a href="#" class="link-2">Clear</a><a href="#" class="link-2">Send</a></div> -->
              </fieldset>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!--==============================aside=================================-->
<!-- <aside>
  <div class="wrap">
    <div class="aside-col-1 border-right-2">
      <h3><span class="clr-1">N</span>ewsletter:</h3>
      <form id="form-search" method="post" action="#">
        <span>Enter you email here:</span>
        <input type="text" value="" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''">
        <a href="#" class="link-2">subscribe</a>
      </form>
    </div>
    <div class="aside-col-2 border-right-2">
      <h3><span class="clr-1">U</span>seful info:</h3>
      <p>Lorem ipsum dolor sit amet, consectetur. adipiscing elit. Vivamus sed arcu dui, eu tincidunt sem viamus hendrerit. </p>
    </div>
    <div class="aside-col-3 border-right-2">
      <dl class="adrss">
        <dd><span>Freephone:</span><strong>+1 800 559 6580</strong></dd>
        <dd><span>Telephone:</span><strong>+1 800 603 6035</strong></dd>
        <dd><span>Fax:</span><strong>+1 800 889 9898</strong></dd>
        <dd><span>E-mail:</span><a href="#" class="link"><strong>mail@demolink.org</strong></a></dd>
      </dl>
      <p><strong>9870St Vincent Place,<br>
        Glasgow, DC 45 Fr 45.</strong></p>
    </div>
    <div class="aside-col-4">
      <div class="soc-icons"> <a href="#"><img src="images/icon-1.png" alt=""></a><a href="#"><img src="images/icon-2.png" alt=""></a><a href="#"><img src="images/icon-3.png" alt=""></a> </div>
    </div>
  </div>
</aside> -->


<?php 
include("include/footer.php");
?>