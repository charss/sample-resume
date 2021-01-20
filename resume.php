<!-- resume.php -->
<html>
  <head>
    <title>My PHP</title>
    <link rel='stylesheet' href='style.css'>
    <link rel='stylesheet' href='fonts.css'>
    <link rel='stylesheet' href='vert_lines.css'>
    <link rel='stylesheet' href='hr.css'>
    <link rel='stylesheet' href='progress.css'>
  </head>
  <body>
    <div class='main'>
      <div class="rectangle">
        <div class="name_div">
          <?php
          $first_name = "AL-NOOR";
          $last_name = "HADJIMANAN";
          $position = "SOFTWARE ENGINEER";
          print("<p class='first_name'>$first_name</p>");
          print("<p class='last_name'>$last_name</p>");
          print("<p class='position'>$position</p>");
          ?>
        </div>
      </div>
      <hr class="hr500">
      <hr class="hr501">
      <hr class="hr502">
      <hr class="hr503">
      <hr class="hr504">
      <div class="trapezoid"></div>
      <div class="bot_rectangle">
        <div class='address_box'>
          <img src='address.png' class='address'>
          <?php
          $address = "Blk 179 Lot 31, Marantao Street,<br>Maharlika Village, Taguig City";
          print("<p class='txt_address mont_600'>$address</p>");
          ?>
        </div>

        <div class='phone_box'>
          <img src='phone.png' class='phone'>
          <?php
          $phone_num = "+639123456789";
          print("<p class='phone_num mont_600'>$phone_num</p>");
          ?>
        </div>
        <div class='email_box'>
          <img src='email.png' class='email'>
          <?php
          $email = "hadjimanan.alnoor2@gmail.com";
          print("<p class='txt_email mont_600'>$email</p>");
          ?>
        </div>
      </div>
      <div class='resume_body'>
        <div class='profile_box'>
          <hr class='hr1'>
          <img src='profile.png' class='prof_img'>
          <?php
          $profile = "I am a proud volunteer in an International Non-Profit Organization where I learn some of my skills. I work now as a writer on an online writing platform. I also do freelance in a health related company as of now while fulfilling my studies.";

          print("<p class='profile_info mont_700'>PROFILE INFO</p>");
          print("<p class='profile_info_text mont_400'>$profile</p>");
          ?>
        </div>
        <div class='educ_box'>
          <hr class='hr2'>
          <img src='educ.png' class='educ_img'>
          <?php
          print("<p class='educ_info mont_700'>EDUCATION</p>");

          print("<p class='bach_info mont_400'>BACHELOR'S DEGREE</p>");
          print("<p class='feu_ala mont_500'><b>FEU Alabang</b></p>");
          print("<p class='feu_year year_font'><b>2018-Present</b></p>");

          print("<p class='sen_info mont_400'>SENIOR HIGH</p>");
          print("<p class='tag_shs mont_500'><b>Taguig National HS</b></p>");
          print("<p class='tag_year year_font'><b>2016-2018</b></p>");

          print("<p class='ex_info mont_400'>EXCHANGE PROGRAM</p>");
          print("<p class='ex_sch mont_500'><b>West Perry High School, PA, USA</b></p>");
          print("<p class='ex_year year_font'><b>2015-2016</b></p>");
          ?>
        </div>
        <div class='exp_box'>
          <hr class='hr3'>
          <img src='exp.png' class='exp_img'>
          <?php
          print("<p class='volun_info mont_700'>VOLUNTEER EXPERIENCE</p>");
          ?>
          <div class="vl1"></div>
          <?php
          print("<p class='volun_text mont_400'>Distributed food packs for the most affected families during the COVID-19 Quarantine in Maharlika Village, Taguig.</p>");
          ?>

          <div class="vl2"></div>
          <?php
          print("<p class='volun_text mont_400'>Volunteered in the 2019 SEA Games.</p>");
          ?>

          <div class="vl3"></div>
          <?php
          print("<p class='volun_text mont_400'>Helped in facilitating on the re-entry of Filipino exchange students.</p>");
          ?>

          <div class="vl4"></div>
          <?php
          print("<p class='volun_text mont_400'>Clean up drive outside Taguig National High School.</p>");
          ?>

          <div class="vl5"></div>
          <?php
          print("<p class='volun_text mont_400'>Had a Christmas party to the children who are belong to below poverty level living in Lower Bicutan, Taguig.</p>");
          ?>

          <div class="vl6"></div>
          <?php
          print("<p class='volun_text mont_400'>Gave stuffed toys to the homeless and unprivileged children in Taguig.</p>");
          ?>

          <div class="vl7"></div>
          <?php
          print("<p class='volun_text mont_400'>Packed Canned Goods and Clothes for the   citizens of Marawi during Marawi Siege.</p>");
          ?>
        </div>
      </div>

      <div class='left_side'>
        <div class='skill_box'>
          <hr class='hr4'>
          <img src='skills.png' class='skill_img'>
          <?php
          print("<p class='skill_info mont_700'>SKILLS</p>");
          ?>

          <?php
          print("<p class='perso_skill mont_600'>PERSONAL SKILLS</p>");
          print("<p class='perso mont_500'>Computer Literate</p>");
          print("<p class='perso mont_500'>Adaptability</p>");
          print("<p class='perso mont_500'>Active Listener</p>");
          ?>

          <?php
          print("<p class='perso_skill mont_600'>PROFESSIONAL SKILLS</p>");
          print("<p class='perso mont_500'>Video Editing</p>");
          print("<p class='perso mont_500'>Photo Editing</p>");
          print("<p class='perso mont_500'>Programming</p>");
          print("<p class='perso mont_500'>MS Office</p>");
          ?>

          <?php
          print("<p class='perso_skill mont_600'>PROGRAMMING LANGUAGES</p>");
          print("<p class='perso mont_500'>JAVA</p>");
          print("<p class='perso mont_500'>C++</p>");
          print("<p class='perso mont_500'>PYTHON</p>");
          ?>


        </div>

        <div class='progress_bars'>
          <div id="progressbar1">
            <div></div>
          </div>

          <div id="progressbar2">
            <div></div>
          </div>

          <div id="progressbar3">
            <div></div>
          </div>

          <div id="progressbar4">
            <div></div>
          </div>

          <div id="progressbar5">
            <div></div>
          </div>

          <div id="progressbar6">
            <div></div>
          </div>

          <div id="progressbar7">
            <div></div>
          </div>

          <div id="progressbar8">
            <div></div>
          </div>

          <div id="progressbar9">
            <div></div>
          </div>

          <div id="progressbar10">
            <div></div>
          </div>

          <div id="progressbar11">
            <div></div>
          </div>

          <div id="progressbar12">
            <div></div>
          </div>
        </div>

        <div class='lang_box'>
          <hr class='hr5'>
          <img src='lang.png' class='lang_img'>
          <?php
          print("<p class='lang_info mont_700'>LANGUAGES</p>");
          print("<p class='lang mont_600' >ENGLISH</p>");
          print("<p class='lang mont_600'>FILIPINO</p>");
          ?>
        </div>

        <div class='org_box'>
          <hr class='hr6'>
          <img src='org.png' class='org_img'>
          <?php
          print("<p class='org_info mont_700'>ORGANIZATIONS INVOLVED</p>");
          ?>
          <div class="vl8"></div>
          <?php
          print("<p class='org mont_400'>AFS Intercultural</p>");
          ?>

          <div class="vl9"></div>
          <?php
          print("<p class='org mont_400'>Philippine Taguig Community</p>");
          ?>

          <div class="vl10"></div>
          <?php
          print("<p class='org mont_400'>YES Alumni Philippines</p>");
          ?>
        </div>

        <div class='socmed_box'>
          <hr class='hr7'>
          <img src='wifi.png' class='soc_img'>
          <?php
          print("<p class='soc_info mont_700'>SOCIAL MEDIA ACCOUNTS</p>");
          ?>

          <img src='ig.png' class='ig_img'>
          <img src='wattpad.jpg' class='watt_img'>
          <img src='fb.png' class='fb_img'>

          <?php
          print("<p class='ig mont_400'>@hadji_light</p>");
          print("<p class='wat mont_400'>@hadji_light</p>");
          print("<p class='fb mont_400'>https://www.facebook.com/sircoolnoor/</p>");
          ?>
      </div>

    </div>
  </body>
</html>
