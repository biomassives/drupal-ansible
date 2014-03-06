<div id="container">
<div id="header">
    <div id="nasa">
		<a href="http://www.nasa.gov"><span class="hide">Header</span></a>
	</div>
    <div id="header_links">
      <ul>
        <li><a href="http://www.nasa.gov" title="NASA.gov">Visit NASA.gov</a></li>
        <li><a href="/connect/">Connect</a></li>
        <li><a href="/contact/">Contact Us</a></li>
      </ul>
      <ul>
        <li><a href="/glossary/">Glossary</a></li>
        <li><a href="/sitemap/">Site Map</a></li>
      </ul>
    </div>
    <div id="search">
        <form id="searchform" name="searchform" action="/search/">
            <div class="LSBox">
                <label for="searchGadget" class="hiddenStructure">Search Site</label>
                <input autocomplete="off" name="q" size="18" title="NASA Science Live Search" accesskey="4" id="searchGadget" type="text" class="clear_on_focus" />
                <button class="searchButton" type="submit">Go!</button>
                <div id="LSResult"></div>
            </div>
        </form>
    </div>
    <span class="clear"></span>
</div>

<div id="nav_global">
    <ul>
        <li class="first"><a href="/">Home</a></li>
        <li><a href="/big-questions/">Big Questions</a></li>
        <li><a href="/earth-science/">Earth</a></li>
        <li><a href="/heliophysics/">Heliophysics</a></li>
        <li><a href="/planetary-science/">Planets</a></li>
        <li><a href="/astrophysics/">Astrophysics</a></li>
        <li><a href="/missions/">Missions</a></li>
        <li><a href="/technology/">Technology</a></li>
        <li class="last"><a href="/science-news/">Science News</a></li>
    </ul>
    <div id="banner" class="clear"><a href="/">block banner_text</a></div>
    <ul id="nav_secondary">
		<li><a href="/science-committee/">NAC Science Committee</a></li>
		<!-- flatblock "audiences_dropdown" -->
		<li class="dropdown1" style="width:178px;"><a>NASA Science for ...</a>
		      <ul>
		          <li><a href = "/researchers/">Researchers</a></li>
		          <li><a href = "/citizen-scientists/">Citizen Scientists</a></li>
		          <li><a href = "/educators/">Educators</a></li>
		          <li><a href = "http://missionscience.nasa.gov">Teens</a></li>
		          <li><a href = "http://spaceplace.nasa.gov/">Kids</a></li>
		      </ul>
        </li>
        <!-- flatblock "year_of_dropdown" -->
        <li class="dropdown1" style="width:180px;"><a>NASA Celebrates ...</a>
		      <ul>
		          <li><a href = "/chemistry/">International Year of Chemistry</a></li>
		          <li><a href = "http://solarsystem.nasa.gov/yss/">Solar System</a></li>
		          <li><a href = "/venus-transit/">Venus Transit</a></li>
		          <li><a href = "http://www.nasa.gov/topics/earth/earthday/index.html">NASA Earth Day 2012</a></li>
		          <li><a href = "/nasa-agu/">NASA AGU</a></li>
		      </ul>
        </li>
		<li><a href="/about-us/">About Us</a></li>
    </ul>
    <span class="clear"></span>
</div>

<div id="menu">
  <!-- ?php
    print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); 
  ? -->
</div>

<!-- =========== iSAT div ======================= -->
<div id="backgroundShadow">
  <div id="wrapper">
    <header id="iSat_header">
      <img src="/media/sot/images/Title.png" alt="NASA's Interactive Satellite Viewer" />
      <img src="/media/sot/images/NASA_logo.png" alt="NASA" class="float-right" />
    </header>
    <div id="cesiumContainer">
      <div class="popup" id="satellite_popup"></div> <!-- /#satellite_popup -->
      <div id="zoom_buttons" class="modal">
        <img src="/media/sot/images/Zoom_out.png"
             id="zoom_out"
             title="Zoom Out"
             alt="Zoom Out"
             class="zoom_button"/>
        <img src="/media/sot/images/Zoom_in.png"
             id="zoom_in"
             title="Zoom In"
             alt="Zoom In"
             class="zoom_button"/>
      </div> <!-- /#zoom_buttons -->
      <div id="navigation_buttons" class="modal">
        <img src="/media/sot/images/Refresh_1.png"
             id="reset_button"
             title="Reset View"
             alt="Reset View"
             class="hud_button"
             onmouseover="this.src='/media/sot/images/Refresh_2.png'"
             onmouseout="this.src='/media/sot/images/Refresh_1.png'"/>
        <img src="/media/sot/images/Info_1.png"
             id="instructions_button"
             title="Instructions"
             alt="Instructions"
             class="hud_button"
             onmouseover="this.src='/media/sot/images/Info_2.png'"
             onmouseout="this.src='/media/sot/images/Info_1.png'"/>
        <img src="/media/sot/images/Orbit_1.png"
             id="display_button"
             title="Display Options"
             alt="Display Options"
             class="hud_button"
             onmouseover="this.src='/media/sot/images/Orbit_2.png'"
             onmouseout="this.src='/media/sot/images/Orbit_1.png'"/>
        <img src="/media/sot/images/Satellite_1.png"
             id="satellite_button"
             title="Select Satellites"
             alt="Select Satellites"
             class="hud_button"
             onmouseover="this.src='/media/sot/images/Satellite_2.png'"
             onmouseout="this.src='/media/sot/images/Satellite_1.png'"/>
        <img src="/media/sot/images/Expand_1.png"
             id="fullscreen_button"
             title="Full Screen Toggle"
             alt="Full Screen Toggle"
             class="hud_button"
             onmouseover="this.src='/media/sot/images/Expand_2b.png'"
             onmouseout="this.src='/media/sot/images/Expand_1.png'"/>
      </div> <!-- /#naviation_buttons -->
      <div id="cesiumLogo"><img src="/media/sot/cesium/Cesium_Logo_forDarkBackground.png"></div>
      <canvas id="glCanvas" width="300" height="300" tabindex="1"></canvas>
      <div id="instructions" class="modal">
        <img src="/media/sot/images/close.png"
             id="instructions_close"
             title="Close Window"
             alt="Close Window"
             class="close_button"/>
        <h2>Instructions</h2>
        <p>The satellites are displayed based on their calculated positions in orbit.</p>
        <p>Hover your cursor over a satellite to see its name. Click on a satellite to bring up details about that satellite, including links to more information about it from Science.nasa.gov and National Space Science Data Center (NSSDC).</p>
        <p>Zoom in for a closer look at a satellite's orbit. Zoom out to see satellites in larger orbits and further distances from Earth.</p>
        <p>Click and drag to rotate the Earth.</p>
        <p>Click on the Globe Display icon to choose the type of map and perspective you are viewing.</p>
        <p>By default, the NASA Science satellites are displayed. Click on the Satellite icon to view a different group of satellites or find a specific satellite.</p>
        <p>If you shared your location with your browser a marker will indicate this position on the map.</p>
      </div> <!-- /#instructions -->
      <div id="satellite_form" class="modal">
        <img src="/media/sot/images/close.png" id="satellite_form_close" title="Close Window" alt="Close Window" class="close_button" />
        <form id="controls">
          <fieldset>
            <legend>Select a Satellite:</legend>
            <dl id="controls_satellite">
              <dt>
                <label for="select_satellite_group">Satellite Group:</label>
              </dt>
              <dd>
                <select id="select_satellite_group">
                  <option value="SMD">NASA Science</option>
                  <optgroup label="From Celestrak"></optgroup>
                  <optgroup class="second_level" label="Special Interest">
                    <option value="visual"> 100 (or so) Brightest</option>
                    <option value="cosmos-2251-debris"> COSMOS 2251 Debris</option>
                    <option value="1999-025"> FENGYUN 1C Debris</option>
                    <option value="iridium-33-debris"> IRIDIUM 33 Debris</option>
                    <option value="tle-new"> Last 30 Days' Launches</option>
                    <option value="stations"> Space Stations</option>
                  </optgroup>
                  <optgroup class="second_level" label="Weather &amp; Earth Resources">
                    <option value="dmc"> Disaster Monitoring</option>
                    <option value="resource"> Earth Resources</option>
                    <option value="goes"> GOES</option>
                    <option value="noaa"> NOAA</option>
                    <option value="sarsat"> Search &amp; Rescue (SARSAT)</option>
                    <option value="tdrss"> Tracking and Data Relay Satellite</option>
                    <option value="weather"> Weather</option>
                  </optgroup>
                  <optgroup class="second_level" label="Communications">
                    <option value="amateur"> Amateur Radio</option>
                    <option value="x-comm"> Experimental</option>
                    <option value="geo"> Geostationary</option>
                    <option value="globalstar"> Globalstar</option>
                    <option value="gorizont"> Gorizont</option>
                    <option value="intelsat"> Intelsat</option>
                    <option value="iridium"> Iridium</option>
                    <option value="molniya"> Molniya</option>
                    <option value="other-comm"> Other</option>
                    <option value="orbcomm"> Orbcomm</option>
                    <option value="raduga"> Raduga</option>
                  </optgroup>
                  <optgroup class="second_level" label="Navigation">
                    <option value="gps-ops"> GPS Operational</option>
                    <option value="galileo"> Galileo</option>
                    <option value="glo-ops"> Glonass Operational</option>
                    <option value="nnss"> Navy Navigation Satellite System</option>
                    <option value="musson"> Russian LEO Navigation</option>
                    <option value="sbas"> Satellite-Based Augmentation System</option>
                  </optgroup>
                  <optgroup class="second_level" label="Scientific">
                    <option value="education"> Education</option>
                    <option value="engineering"> Engineering</option>
                    <option value="geodetic"> Geodetic</option>
                    <option value="science"> Space &amp; Earth Science</option>
                  </optgroup>
                  <optgroup class="second_level" label="Miscellaneous">
                    <option value="cubesat"> CubeSats</option>
                    <option value="military"> Miscellaneous Military</option>
                    <option value="other"> Other</option>
                    <option value="radar"> Radar Calibration</option>
                  </optgroup>
                </select>
              </dd>
              <dt>
                <label for="select_satellite">Select Satellite:</label>
              </dt>
                <dd>
                  <select id="select_satellite"></select>
                </dd>
            </dl>
          </fieldset>
        </form>
      </div> <!-- /#satellite_form -->
      <div id="map_display" class="modal">
        <img src="/media/sot/images/close.png" id="map_display_close" title="Close Window" alt="Close Window" class="close_button" />
        <h2>Globe Display</h2>
        <div id="maps">
          <img src="/media/sot/images/Map_Displays.png" alt="Map Display">
          <br>
          <img src="/media/sot/images/Bing_1.png"
               id="bing_data_button"
               title="Select Bing Map"
               alt="Select Bing Map"
               onmouseover="this.src='/media/sot/images/Bing_2.png'"
               onmouseout="this.src='/media/sot/images/Bing_1.png'"/>
          <img src="/media/sot/images/OpenStreet_1.png"
               id="osm_data_button"
               title="Select OSM Map"
               alt="Select OSM Map"
               onmouseover="this.src='/media/sot/images/OpenStreet_2.png'"
               onmouseout="this.src='/media/sot/images/OpenStreet_1.png'"/>
          <img src="/media/sot/images/ArcGis_1.png"
               id="arcgis_data_button"
               title="Select ArcGIS Map"
               alt="Select ArcGIS Map"
               onmouseover="this.src='/media/sot/images/ArcGis_2.png'"
               onmouseout="this.src='/media/sot/images/ArcGis_1.png'"/>
          <img src="/media/sot/images/Offline_1.png"
               id="static_data_button"
               title="Select Offline Map"
               alt="Select Offline Map"
               onmouseover="this.src='/media/sot/images/Offline_2.png'"
               onmouseout="this.src='/media/sot/images/Offline_1.png'"/>
        </div> <!-- /#maps -->
        <br>
        <div id="perpective">
          <img src="/media/sot/images/Perspective.png" alt="Perspective">
          <br>
          <img src="/media/sot/images/3D_1.png"
               id="three_d_display_button"
               title="Display 3D"
               alt="Display 3D"
               onmouseover="this.src='/media/sot/images/3D_2.png'"
               onmouseout="this.src='/media/sot/images/3D_1.png'"
               class="perspective_button"/>
          <img src="/media/sot/images/2.5D_1.png"
               id="columbus_display_button"
               title="Display Columbus View"
               alt="Display Columbus View"
               onmouseover="this.src='/media/sot/images/2.5D_2.png'"
               onmouseout="this.src='/media/sot/images/2.5D_1.png'"
               class="perspective_button"/>
          <img src="/media/sot/images/2D_1.png"
               id="two_d_display_button"
               title="Display 2D"
               alt="Display 2D"
               onmouseover="this.src='/media/sot/images/2D_2.png'"
               onmouseout="this.src='/media/sot/images/2D_1.png'"
               class="perspective_button"/>
        </div> <!-- /#perpective -->
      </div> <!-- /#map_display -->
      <div id="satellite_display" class="modal">
        <img src="/media/sot/images/close.png"
             id="satellite_display_close"
             title="Close Window"
             alt="Close Window"
             class="close_button"/>
        <h2 id="satellite_name"></h2>
        <img src="/media/sot/images/Play_1.png"
             id="play_button"
             title="Play satellite location data"
             alt="Play satellite location data"
             class="play_button"
             onmouseover="this.src='/media/sot/images/Play_2.png'"
             onmouseout="this.src='/media/sot/images/Play_1.png'"/>
        <img src="/media/sot/images/Pause_1.png"
             id="pause_button"
             title="Pause satellite location data"
             alt="Pause satellite location data"
             class="pause_button"
             onmouseover="this.src='/media/sot/images/Pause_2.png'"
             onmouseout="this.src='/media/sot/images/Pause_1.png'"/>
        <dl>
          <dt>Satellite ID</dt>
          <dd id="satellite_id"></dd>
          <dt>Velocity (km/s)</dt>
          <dd id="satellite_velocity_kms"></dd>
          <dt>Velocity (mi/s)</dt>
          <dd id="satellite_velocity_ms"></dd>
          <dt>Latitude (&deg;)</dt>
          <dd id="satellite_latInDegrees"></dd>
          <dt>Longitude(&deg;)</dt>
          <dd id="satellite_lonInDegrees"></dd>
          <dt>Height (km)</dt>
          <dd id="satellite_height_km"></dd>
          <dt>Height (mi)</dt>
          <dd id="satellite_height_m"></dd>
        </dl>
        <div id="smd_info">
          <h3>More on <span id="satellite_name2"></span></h3>
          <a id="science_url" href="#" target="nasascience">Science Mission Directorate</a>
          <br>
          <a id="nssdc_url" href="#" target="nssdc">National Space Science Data Center</a>
        </div>
      </div> <!-- /#satellite_display -->
    </div> <!-- /#cesiumContainer -->
  </div> <!-- /#wrapper -->
</div>
<div id="isat_text_only"><a href="iSAT-text-only/">Text Only Version.</a></div>
<!-- =========== end iSat Div =================== -->
<div id="footer">
    <!- block footer -->
    <div>
        <ul>
            <li><a href="http://www.hq.nasa.gov/office/pao/FOIA/agency/">Freedom of Information Act</a></li>
            <li><a href="http://www.nasa.gov/about/budget/index.html">Budgets, Strategic Plans and Accountability Reports</a></li>
            <li><a href="http://www.whitehouse.gov/sites/default/files/national_space_policy_6-28-10.pdf">National Space Policy</a> (PDF)</li>
            <li><a href="http://www.nasa.gov/about/highlights/HP_Privacy.html">Privacy Policy and Important Notices</a></li>
            <li><a href="http://www.hq.nasa.gov/office/oig/hq/hotline.html">Inspector General Hotline</a></li>
        </ul>
    </div>
    <div>
        <ul>
            <li><a href="http://www.hq.nasa.gov/office/codee/nofear.html">Equal Employment Opportunity Data Posted Pursuant to the No Fear Act</a></li>
            <li><a href="http://www.nasa.gov/about/contact/information_inventories_schedules.html">Information-Dissemination Priorities and Inventories</a></li>
            <li><a href="http://www.usa.gov/">USA.gov</a></li>
            <li><a href="http://www.whitehouse.gov/omb/expectmore/">ExpectMore.gov</a></li>
        </ul>
    </div>
    <div class="page_info">
        <!-- block page_info -->
        <!-- flatblock "page_info" -->
        <a href="http://www.nasa.gov" class="nasalogo">
          <span class="hide">National Aeronautics and Space Administration</span>
        </a>
        NASA Official: <span id="nasa-official">Ruth Netting</span><br />
        <a href="/contact/">Send us your comments!</a><br />
        <!-- if $last_modified -->
        Last Updated: <?php if( isset($node) ) echo date( "F j, Y",$node->changed); ?> <br />
        <!-- endif -->
        <ul>
          <li><a href="/glossary/">Glossary</a></li>
          <li><a href="/sitemap/">Site Map</a></li>
          <li><a href="http://www.adobe.com/products/acrobat/readstep2.html?promoid=BUIGO">Adobe Reader</a></li>
        </ul>
        <!-- endblock page_info -->
        <span class="clear"></span>
    </div>
    <!-- endblock footer -->
</div>
<div id="footer_bottom"></div>

<div id="footer_links" class="clear">
    <!-- flatblock "footer_links" -->
    <a href="/">Home</a><a href="/big-questions/">Big Questions</a>
    <a href="/earth-science/">Earth</a>
    <a href="/heliophysics/">Heliophysics</a>
    <a href="/planetary-science/">Planets</a>
    <a href="/astrophysics/">Astrophysics</a>
    <a href="/missions/">Missions</a><a href="/technology/">Technology</a>
    <a href="/technology/">Technology</a>
    <a href="/science-news/">Science News</a><br />
    <a href="/researchers/">For Researchers</a>
    <a href="/educators/">For Educators</a><a href="/kids/">For Kids</a>
    <a href="http://spaceplace.nasa.gov/">For Kids</a>
    <a href="/citizen-scientists/">Citizen Scientists</a>
    <a href="/ask-a-scientist/">Ask a Scientist</a><br /><br />
</div>
</div> <!-- root -->
