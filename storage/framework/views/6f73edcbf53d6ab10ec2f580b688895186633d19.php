<?php $__env->startSection('content'); ?>
<!-- this portion is for demo only -->
<!-- <style type="text/css">

  nav.navbar a.menu-btn {
    padding: 12 !important;
  }
  .color-switcher {
      background-color: #fff;
      border: 1px solid #e5e5e5;
      border-radius: 2px;
      padding: 10px;
      position: fixed;
      top: 150px;
      transition: all 0.4s ease 0s;
      width: 150px;
      z-index: 99999;
  }
  .hide-color-switcher {
      right: -150px;
  }
  .show-color-switcher {
      right: -1px;
  }
  .color-switcher a.switcher-button {
      background: #fff;
      border-top: #e5e5e5;
      border-right: #e5e5e5;
      border-bottom: #e5e5e5;
      border-left: #e5e5e5;
      border-style: solid solid solid solid;
      border-width: 1px 1px 1px 1px;
      border-radius: 2px;
      color: #161616;
      cursor: pointer;
      font-size: 22px;
      width: 45px;
      height: 45px;
      line-height: 43px;
      position: absolute;
      top: 24px;
      left: -44px;
      text-align: center;
  }
  .color-switcher a.switcher-button i {
    line-height: 40px
  }
  .color-switcher .color-switcher-title {
      color: #666;
      padding: 0px 0 8px;
  }
  .color-switcher .color-switcher-title:after {
      content: "";
      display: block;
      height: 1px;
      margin: 14px 0 0;
      position: relative;
      width: 20px;
  }
  .color-switcher .color-list a.color {
      cursor: pointer;
      display: inline-block;
      height: 30px;
      margin: 10px 0 0 1px;
      width: 28px;
  }
  .purple-theme {
      background-color: #7c5cc4;
  }
  .green-theme {
      background-color: #1abc9c;
  }
  .blue-theme {
      background-color: #3498db;
  }
  .dark-theme {
      background-color: #34495e;
  }
</style>
<div class="color-switcher hide-color-switcher">
    <a class="switcher-button"><i class="fa fa-cog fa-spin"></i></a>
    <h5><?php echo e(trans('file.Theme')); ?></h5>
    <div class="color-list">
        <a class="color purple-theme" title="purple" data-color="default.css"></a>
        <a class="color green-theme" title="green" data-color="green.css"></a>
        <a class="color blue-theme" title="blue" data-color="blue.css"></a>
        <a class="color dark-theme" title="dark" data-color="dark.css"></a>
    </div>
</div> -->
<?php if(session()->has('not_permitted')): ?>
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('not_permitted')); ?></div> 
<?php endif; ?>
<?php if(session()->has('message')): ?>
  <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('message')); ?></div> 
<?php endif; ?>
      <div class="row">
        <div class="container-fluid">
          <div class="col-md-12">
            <div class="brand-text float-left mt-4">
                <h3><?php echo e(trans('file.welcome')); ?> <span><?php echo e(Auth::user()->name); ?></span> </h3>
            </div>
          
          </div>
        </div>
      </div>
      <!-- Counts Section -->
      <section class="dashboard-counts">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 form-group">
              <div class="row">
                
                
             
                   <div class="col-md-7 mt-4">
              <div class="card line-chart-example">
                <div class="card-header d-flex align-items-center">
                  
                  <h1><p><strong>Material Management System for Berek Court Office</strong></p></h1>
                  
                </div> 
                              <div class="card-body">
                 
                </div>
              </div>
                <div class="card line-chart-example">
                <div class="card-header d-flex align-items-center">
                  
                  <h1><p><strong>BAGA NAGAAN DHUFTAAN</strong></p></h1>
                  
                </div> 
                
                 
                <div class="card-body">
                 
                </div>
              </div>
                <div class="card line-chart-example">
                <div class="card-header d-flex align-items-center">
                  
                  
                  <h3><p><strong>Mana Murtii Aanaa Barraak.</strong></p></h3>
                </div> 
                
                 <ul>
             
              <li><h4><strong>Bil:0116860988/0116860263 </strong></h4></li>
                 <li><h5>Email:barecourt@gmail.com</h5></li>
               </ul>
                <div class="card-body">
                 
                </div>
              </div>
            </div> 
               
              </div>
            </div>
            
                  <h1 style="text-align: center;"> 
                  HUNDEEFFAMA, GURMAA’INSA, ERGAMAA FI AANGOO MANNEEN MURTII OROMIYAA 
                </h1>




           <div class="col-md-7 mt-4">
              <div class="card line-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h4><p><strong>A. HUNDEEFFAMAA FI GURMAA’INSA </strong></p></h4>
                </div> 
                <div class="card-body">
<p>Manneen Murtii Oromiyaa sirna federaalizimii kufaatii sirna Dargii 
booda hojiirra oole hordofuun bara 1985 keessa kan hundaa’anii dha. 
Heera Mootummaa Naannoo Oromiyaa keessatti Manneen Murtii Naannichaa 
Mana Murtii Waliigalaa, Mana Murtii Ol’aanaa fi Mana Murtii Aanaa 
jedhamuun sadarkaa sadiitti akka gurmaa’an taasifameera.<br>
Yeroo ammaa kanattis Manneen Murtii Aanaalee 304, Manneen Murtii 
Ol’aanaa 21 fi Mana Murtii Waliigalaa 1 (dhaddachaalee dhaabbii 3 
dabalatee) hundaa’anii tajaajila abbaa seerummaa kennaa kan jiranii dha.<br>
Akkaataa labsii gurmaa’insa, aangoo fi hojii Manneen Murtii Oromiyaa 
irra deebiin murteessuuf bahe labsii lakk. 216/2011 ergamnii fi aangoon 
Manneen Murtii Naannichaa ifatti adda bahee tumameera.</p>
                </div>
              </div>
            </div> 
            
          
           <div class="col-md-7 mt-4">
              <div class="card line-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h4><p><strong>B. ERGAMA</strong></p></h4>
                </div> 
                <div class="card-body">
<p>Akkaataa Labsii Lakk. 216/2011 keewwata 23 jalatti tumameen Manneen 
Murtii Oromiyaa ergama waloo tajaajila abbaa seerummaa dhaqqabamaa, 
si’ataa fi bu’a qabeessa ta’e, seera qofa irratti hundaa’uudhaan, haala 
loogii fi gartummaan ala ta’een kennuuf dirqama ni qabaatu. Hojii 
isaaniis bilisummaa guutuu fi itti gaafatamummaa ol’aanaadhaan ni 
raawwatu. Tumaan waliigalaa kun akkuma eegametti ta’ee:<br>
• Manni Murtii Waliigalaa tajaajilli abbaa seerummaa Naannicha keessatti
 walfakkaatummaa fi tilmaamamummaa akka qabaatuuf ni hojjata;<br>
• Manni Murtii Ol’aanaa bu’uuraan Mana Murtii ol’iyyannoo ta’ee, hir’ina
 yookiin dogongora seeraa yookiin ijoo dubbii, walumatti hir’ina murtiin
 Mana Murtii jalaa qabu ol’iyyannoodhaan dhagahee sirreessuuf ni 
hojjata;<br>
• Manni Murtii Aanaa Mana Murtii sadarkaa jalqabaa ta’ee, dhimmoota 
abbaan seerummaa itti gaafatame ofitti fuudhee sadarkaa jalqabaatiin 
ilaalee murtii kennuuf ni hojjata.</p>
                </div>
              </div>
            </div> 


 <div class="col-md-7 mt-4">
              <div class="card line-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h4><p><strong>C. AANGOO ABBAA SEERUMMAA </strong></p></h4>
                </div> 
                <div class="card-body">
<p>Aangoon Abbaa Seerummaa Manneen Murtii Oromiyaa kutaa sadaffaa labsii
 lakk. 216/2011 keessatti bal’inaan tumameera. Haaluma kanaan Manneen 
Murtii Oromiyaa akka qajeeltootti dhimmoota armaan gadii irratti aangoo 
abbaa seerummaa ni qabaatu.</p>
<ul>
<li>Dhimmoota heera mootummaa federaalaatiin Mootummaa Federaalaaf adda bahee hin kennamne kamiyyuu irratti;</li>
<li>Dhimmoota heeraa fi seerota Naannichaa bu’uureffatanii uumaman irratti;</li>
<li>Dhimmoota, namoota fi qabeenya daangaa Naannichaa keessatti uumaman yookiin argaman irratti;</li>
<li>Akkaataa Seera Deemsa Falmiitiin yookiin seera birootiin, dhimmoota 
Manneen Murtii Naannootiif kennamanii fi daangaa Naannichaa keessatti 
raawwataman irratti;</li>
<li>Bu’uura Heera Federaalaa Keewwata 78 (2) tiin dhimmoota Federaalaa irratti aangoo abbaa seerummaa ni qabaatu.</li>
<li>Gama kaaniin Manneen Murtii Oromiyaa dhimmoota Magaala Finfinnee 
keessatti uumaman kan armaan gadii irratti aangoo abbaa seerummaa kan 
qaban ta’uun tumameera.</li>
<li>Dhimma yakkaa abbootii aangoo fi hojjattoota Mootummaa Naannichaa 
aangoo fi hojii isaaniitiin walqabatee raawwatame yookiin irratti 
raawwatame;</li>
<li>Dhimma qabeenya Mootummaa Naannichaa irratti yookiin mooraa 
keessatti, yookiin dallaa mana hojii Mootummaa Naannichaa irratti 
raawwatame;</li>
<li>Dhimma hariiroo hawaasaa hojii yookiin sochii hojii mana hojii 
yookiin abbaa aangoo yookiin hojjetaa Mootummaa Naannichaa waliin 
walqabatee uumame;</li>
<li>Dhimma yakkaa daangaa Naannichaa keessatti eegalame yookiin raawwatamee Magaala Finfinnee keessatti xumurame yookiin dahate.</li>
</ul>
<p>Manni Murtii Waliigalaa Oromiyaa dhimmoota kanneen ofitti fuudhee 
ilaaluun murtii kan kennuu Mana Murtii sadarkaa barbaachisu yookin 
dhaddacha barbaachisu Magaala Finfinnee keessatti hundeessuu akka 
danda’u labsichaan tumameera.<br>
Kana malees labsichi aangoo hundee dubbii Manneen Murtii sadarkaan jiranii akka itti aanutti ifatti lafa kaa’era.</p>
<p><strong>(i) Aangoo Abbaa Seerummaa Mana Murtii Waliigalaa Oromiyaa</strong><br>
Manni Murtii WaliigalaaNaannicha keessatti dhimmoota naannoo irratti 
aangoo abbaa seerummaa isa ol’aanaa fi isa dhumaa ni qabata. Kun akkuma 
jirutti ta’ee Manni Murtichaa dhimmoota armaan gadii irratti aangoo 
abbaa seerummaa ni qabaata:</p>
<ul>
<li>Dhimma naannoo irratti murtii Manni Murtii Ol’aanaa kenne irraatti komii dhiyaate ol’iyyannoon dhagahee murtii dhumaa kennuuf;</li>
<li>Bu’uura heera mootummaa federaalaa keewwata 80 (2)tiin, dhimmoota 
federaalaa irratti aangoo sadarkaa jalqabaa Mana Murtii Ol’aanaa 
Federaalaa;</li>
<li>Bu’uura heera federaalaa keewwata 80 (4) tiin, dhimma federaalaa 
Manni Murtii Ol’aanaa aangoo sadarkaa jalqabaatiin ilaalee murtii kenne 
irratti aangoo ol’iyyannoon dhimmicha dhagahee murtii kennuu;</li>
<li>Akkaataa Seera Deemsa Falmiitiin gaaffii dhimmi tokko Mana Murtii 
Ol’aanaa tokko irraa gara Mana Murtii Ol’aanaa biraatti yookiin gara 
Mana Murtii Waliigalaatti akka darbee ilaalamuuf dhiyaatu ilaalee 
murteessuu;</li>
<li>Gaaffii dhimmi tokko aangoo Mana Murtii isa kamii ta’uu qaba jedhu yoo dhiyaatuuf ilaalee murtii kennuu;</li>
<li>Dhimma naannoo ilaalchisee dhimma murtii dhumaa argate irratti 
gaaffiin dogoggorri bu’uura seeraa raawwatameera jedhu yoo dhiyaatu 
ofitti fuudhee Dhaddacha Ijibbaataatiin ilaalee murteessuu dha.</li>
</ul>
<p><strong>(ii) Aangoo Abbaa Seerummaa Mana Murtii Ol’aanaa</strong><br>
Manni Murtii Ol’aanaa dhimmoota daangaa bulchiinsa godinichaa keessatti 
uumamaniin walqabatee aangoo abbaa seerummaa armaan gadii ni qabaata:</p>
<ul>
<li>&nbsp;Dhimmoota hariiroo hawaasaa fi yakkaa Manneen Murtii Aanaa 
godinichaa sadarkaa jalqabaatiin ilaalanii murteessan ol’iyyannoodhaan 
dhagahee murteessuu;</li>
<li>Dhimma yakkaa adabbii hidhaa baaxiin isaa waggaa 15 oliin adabsiisuu danda’u irratti;</li>
<li>Dhimma hariiroo hawaasaa qabeenya socho’u tilmaamni mallaqaa isaa 
qarshii milliyoona 1 (tokko) ol ta’e, kan qabeenya hin sochoone 
tilmaamni mallaqaa isaa qarshii miliyoona 3 (sadii) ol ta’e ilaalee 
murteessuu;</li>
<li>Bu’uura heera mootummaa federaalaa keewwata 80 (4) tiin, dhimma 
Federaalaa ilaalchisee aangoo sadarkaa jalqabaa Mana Murtii Federaalaa 
Sadarkaa Jalqabaa;</li>
<li>Akkaataa Seerri Deemsa Falmii ajajuun, gaaffii dhimmi tokko Mana 
Murtii Aanaa tokko irraa gara Mana Murtii Aanaa biraatti yookiin gara 
Mana Murtii Ol’aanaatti darbee akka ilaalamu dhiyaatu ilaalee 
murteessuu;</li>
<li>Seera birootiin Mana Murtii sadarkaa birootiif yoo kenname malee 
Murtii qaamoonni aangoo seeraan kennameef irratti hundaa’udhaan 
murteessan irratti ol’iyyannoo dhiyaatuuf ilaalee murteessuuf aangoo ni 
qabaata. Murtiin inni dhimma akkasii irratti kennus isa dhumaa fi 
ol’iyyannoo kan hin qabne ta’a.</li>
</ul>
<p><strong>(iii) Aangoo Abbaa Seerummaa Mana Murtii Aanaa </strong><br>
Manni Murtii Aanaa dhimmoota daangaa bulchiinsa aanichaa keessatti 
uumaman irratti aangoo Abbaa Seerummaa armaan gadii ni qabaata:</p>
<ul>
<li>Dhimma hariiroo hawaasaa qabeenyaa socho’u tilmaamni mallaqaa isaa 
qarshii milliyoona 1 (tokko) hin caalle, qabeenya hin sochoone tilmaamni
 mallaqaa isaa qarshii miliyoona 3 (sadii) hin caalle ilaalee 
murteessuu;</li>
<li>Iyyata qaama bilisa baasuuf dhiyaatu, yookiin iyyata dhimma 
dhaaltummaa akkasumas dhimmoota biroo maallaqaan shallagamuu hin 
dandeenye ilaalchisee dhiyaatu irratti aangoo abbaa seerummaa sadarkaa 
jalqabaa;</li>
<li>Dhimma yakkaa adabbii hidhaa baaxiin isaa waggaa 15 hin caalleen adabsiisan irratti aangoo sadarkaa jalqabaa;</li>
<li>Dhimma seerota Caffeedhaan tumaman keessatti adabbii yakkaa hordofsiisan irratti aangoo Abbaa Seerummaa sadarkaa jalqabaa;</li>
<li>Manni murtii aanaa dhimma biraa ifatti aangoo Mana Murtii Ol’aanaa 
jalatti hin kufne kamiyyuu irratti aangoo sadarkaa jalqabaa ni qabaata.</li>
</ul>
                </div>
              </div>
            </div> 
             <div class="col-md-7 mt-4">
              <div class="card line-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h4><p><strong>D. SIRNA IJIBBAATAA </strong><br></h4>
                </div> 
                <div class="card-body">
Manni Murtii Waliigalaa Oromiyaa dhimmoota Naannoo murtii dhumaa argatan
 irratti dogongorri bu’uura seeraa raawwatameera jedhamee iyyata 
dhiyaatu ofitti fuudhee murteessuuf aangoo ni qabaata. Dhimmi tokko 
dhimmi murtii dhumaa argate tokko Dhaddacha Ijibbaataatiin kan ilaalamu 
murtichi dogoggora bu’uuraa seeraa qaba jedhamee yoo amaname qofaa dha.<br>
Murtiin dhumaa tokko ‘dogoggora bu’uuraa seeraa qaba kan jedhamu murtichi:<br>
Dogoggora hiikaa seeraa yookiin duudhaa seeraa yoo qabaate, yookiin 
seera ifatti tumame cabsee yoo argame fi dhiibbaa hin malle mirga namaa 
yookiin sirna seeraa irratti kan hordofsiise yoo ta’e; yookiin</p>
<ul>
<li>&nbsp;Seeraan ala bilisummaa fi mirga namoomaa bu’uuraa kan dhabsiise yookiin kan dhiphise yoo ta’e; yookiin</li>
<li>Gar-malee haqa kan jallise yookiin dhabamsiise yoo ta’ee dha.<br>
Gama biraatiin dhimmootni armaan gadii Dhaddacha Ijibbaataatti dhiyaachuu hin danda’an:</li>
<li>Dhimmoota bu’uura Heeraa Federaalaa fi seera birootiin addatti Manneen Murtii Federaalaatiif kennaman; yookiin</li>
<li>Dhimmoota Naannoo murtii dhumaa hin arganne; yookiin</li>
<li>Murtii dhumaa falmii baasii fi kisaaraa yookiin yakka dambii darbuun walqabate;</li>
<li>Murtii dogoggora firii dubbii kamiyyuu, yookiin dogoggora yookiin hir’ina ragaa fuudhuu yookiin madaaluu irratti raawwatame.</li>
</ul>
<p>&nbsp;</p>
                </div>
              </div>
            </div> 
              
</div>
        </div>
        
         
      </section>
      
<script type="text/javascript">
    // Show and hide color-switcher
    $(".color-switcher .switcher-button").on('click', function() {
        $(".color-switcher").toggleClass("show-color-switcher", "hide-color-switcher", 300);
    });

    // Color Skins
    $('a.color').on('click', function() {
        /*var title = $(this).attr('title');
        $('#style-colors').attr('href', 'css/skin-' + title + '.css');
        return false;*/
        $.get('setting/general_setting/change-theme/' + $(this).data('color'), function(data) {
        });
        var style_link= $('#custom-style').attr('href').replace(/([^-]*)$/, $(this).data('color') );
        $('#custom-style').attr('href', style_link);
    });

    $(".date-btn").on("click", function() {
        $(".date-btn").removeClass("active");
        $(this).addClass("active");
        var start_date = $(this).data('start_date');
        var end_date = $(this).data('end_date');
        $.get('dashboard-filter/' + start_date + '/' + end_date, function(data) {
            dashboardFilter(data);
        });
    });

    function dashboardFilter(data){
        $('.revenue-data').hide();
        $('.revenue-data').html(parseFloat(data[0]).toFixed(2));
        $('.revenue-data').show(500);

        $('.return-data').hide();
        $('.return-data').html(parseFloat(data[1]).toFixed(2));
        $('.return-data').show(500);

        $('.profit-data').hide();
        $('.profit-data').html(parseFloat(data[2]).toFixed(2));
        $('.profit-data').show(500);

        $('.purchase_return-data').hide();
        $('.purchase_return-data').html(parseFloat(data[3]).toFixed(2));
        $('.purchase_return-data').show(500);
    }
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mms-oromia-app\resources\views/index.blade.php ENDPATH**/ ?>