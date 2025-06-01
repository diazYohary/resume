<?php
define('APP_ROOT', __DIR__ . '/..');

require_once(__DIR__ . '/../config.php');
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Primary Meta Tags -->
<title><?php echo __('title');?></title>
<meta name="title" content="<?php echo __('title');?>">
<meta name="description" content="Estudiante de Ingeniería en TI con promedio de 9.38. Especializado en Laravel, PHP y desarrollo front-end. Con experiencia en DFSOFT">
<meta name="keywords" content="desarrollador web, front-end developer, Laravel, PHP, JavaScript, CV informático, practicante TI Puebla, BUAP ingeniería, programador full stack">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://diazyohary.github.io/CV/">
<meta property="og:title" content="Yohary Díaz Jiménez | Portafolio Profesional">
<meta property="og:description" content="Portafolio de un desarrollador web en formación con experiencia comprobada en proyectos reales. Conoce mis habilidades técnicas y proyectos académicos.">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://diazyohary.github.io/CV/">
<meta property="twitter:title" content="Yohary Díaz Jiménez | Estudiante destacado de Ingeniería en TI">
<meta property="twitter:description" content="9.38 de promedio | Experiencia en DFSOFT | Futuro desarrollador Full Stack">
    <style>html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{border:0;box-sizing:border-box;margin:0;padding:0;vertical-align:baseline}html,body{font-family:Times New Roman,Times,serifq;font-size:22px;margin:0;padding:0;min-height:100vh;min-width:100%;width:100%;scrollbar-width:thin;background-color:#f5f5f5}main,header,footer{width:1226px}.flex{display:flex}.column{flex-direction:column}.jc-sb{justify-content:space-between}.ai-c{align-items:center}.pt-30{padding-top:30px}.pt-40{padding-top:40px}.pt-60{padding-top:60px}.pt-80{padding-top:80px}.pl-150{padding-left:150px}.pr-150{padding-right:150px}.pb-30{padding-bottom:30px}.pb-80{padding-bottom:80px}.mb-10{margin-bottom:10px}.mb-20{margin-bottom:20px}.mb-40{margin-bottom:40px}.mb-60{margin-bottom:60px}.txt-c{text-align:center}.txt-l{text-align:left}.txt-r{text-align:right}.txt-j{text-align:justify}.lh-2{line-height:2.5}.fs-18{font-size:18px}.fs-26{font-size:26px}.fs-40{font-size:40px}.fw-5{font-weight:500}.fw-6{font-weight:600}.vl{border-left:2px solid black;height:auto}h1,h2,h3,h4{font-family:Arial,Helvetica,sans-serif}a{display:inline-block;color:#002db4}a:hover{color:#265cff}.img-1200{width:1200px;height:auto}.img-360{width:360px;height:auto}@media screen and (max-width: 1400px){.img-1200,main,header,footer{width:800px}.q1-column{flex-direction:column}#HE-IG :nth-child(1),#HE-IG :nth-child(2){margin-bottom:40px}}@media screen and (max-width: 950px){.img-1200,main,header,footer{width:600px}.q2-column{flex-direction:column}#header>a:not(:last-child){margin-bottom:20px}.q2-mb-20{margin-bottom:20px}.q2-ai-c{align-items:center}.q2-txt-c{text-align:center}.q2-dn{display:none}}@media screen and (max-width: 710px){.img-1200,main,header,footer{width:400px}body{font-size:18px}.fs-40{font-size:28px}.fs-26{font-size:20px}}@media screen and (max-width: 500px){.img-1200,.img-360,main,header,footer{width:300px}.q3-txt-c{text-align:center}}@media screen and (max-width: 376px){.img-1200,.img-360,main,header,footer{width:270px}}@media screen and (max-width: 311px){.img-1200,.img-360,main,header,footer{width:240px}}
</style>
</head>
<!--pr-150 pl-150-->
<body id="body" class="pt-40 pb-80 flex column ai-c">
    <section style="width: 80%; gap: 10px;" class="flex mb-40 ">
        <a href="<?php echo $current_page; ?>?lang=en"><?php $lang_op=__('lang_op'); echo $lang_op[0];?></a>
        <p>|</p>
        <a href="<?php echo $current_page; ?>?lang=es"><?php echo $lang_op[1]?></a>
    </section>
    <header id="header" class="flex jc-sb mb-60 txt-c q2-column">
        <a class="fs-18" href="#competencias"><?php echo __('m-op-1');?>.</a>
        <a class="fs-18" href="#academica">
            <?php 
            $op2 =__('m-op-2');
            $w_op2=explode(' ',$op2, 2);?>
            <span><?php echo $w_op2[0];?></span><br><span><?php echo $w_op2[1] ?? '';?></span>.
        </a>
        <a class="fs-18" href="#laboral">
            <?php 
            $op3 =__('m-op-3');
            $w_op3=explode(' ',$op3, 2);?>
            <span><?php echo $w_op3[0];?></span><br><span><?php echo $w_op3[1] ?? '';?></span>.
        
        </a>
        <a class="fs-18" href="#proyectos"><?php echo __('m-op-4');?>.</a>
    </header>
    <main id="main">
        <section class="txt-c mb-60">
            <h1 class="fs-40 mb-10">YOHARY DIAZ JIMENEZ</h1>
            <h2 class="fs-26 fw-5 mb-40"><?php echo __('role'); ?></h2>
            
            <article class="flex jc-sb mb-40 q2-column">
                <p class="q2-mb-20"><?php echo __('mail');?>: <a href="mailto:diazyohary@gmail.com">diazyohary@gmail.com</a></p>
                <a href="tel:+522481350838"><?php echo __('phone');?></a>
            </article>
            
            <hr>
        </section>
        <section>
            <h3 class="fw-5 mb-40 q3-txt-c"><?php echo __('about-title')?>.</h3>
            <p class="txt-j"><?php echo __('about')?></p>
        </section>
        <section id="competencias" class="pt-60 q3-txt-c">
            <h3 class="fw-5 mb-20"><?php echo __('m-op-1')?>.</h3>
            <article class="flex jc-sb q2-column q2-ai-c">
                <div class=" lh-2 q2-txt-c">
                    <?php
                    $skl=__('skills1');
                    
                    foreach($skl as $skill){
                        echo "<p>".$skill."</p>";
                    }
                    ?>
                </div>
                <div class="vl q2-dn"></div>
                <div class="lh-2 txt-c">
                    <?php
                    $skl=__('skills2');
                    
                    foreach($skl as $skill){
                        echo "<p>".$skill."</p>";
                    }
                    ?>
                </div>
                <div class="vl q2-dn"></div>
                <div class="lh-2 txt-r q2-txt-c">
                    <?php
                    $skl=__('skills3');
                    
                    foreach($skl as $skill){
                        echo "<p>".$skill."</p>";
                    }
                    ?>
                </div>
            </article>
        </section>
        <section id="academica" class="pt-60">
            <h3 class="fw-5 mb-40 q3-txt-c"><?php echo __('m-op-2')?>.</h3>
            <?php
            $edu_bg= __('edu-bg');
            echo "<p>".$edu_bg[0]."</p>";
            echo "<a href=".$edu_bg[1]." target='_blank'>".$edu_bg[2]."</a>";
            echo "<p>".$edu_bg[3]."</p>";
            echo "<p>".$edu_bg[4]."</p>";
            ?>            
        </section>
        <section id="laboral" class="pt-60">
            <h3 class="fw-5 mb-40 q3-txt-c"><?php echo __('m-op-3')?>.</h3>
            
            <?php
            $wrk_xp= __('wrk-xp');

            echo "<a href=".$wrk_xp[0]." target='_blank'>".$wrk_xp[1]."</a>";
            echo "<p>".$wrk_xp[2]."</p>";
            echo "<p class='mb-10'>".$wrk_xp[3]."</p>";

            echo "<p class='fw-5'>".$wrk_xp[4]."</p>";
            echo "<p class='mb-10'>".$wrk_xp[5]."</p>";

            echo "<p class='txt-j'>".$wrk_xp[6]."</p>";
            ?>  

        </section>
        <section id="proyectos" class="pt-60 q3-txt-c">
            <h3 class="fw-5 mb-40"><?php echo __('m-op-4')?>.</h3>
            <hr>
            <article class="pt-40 mb-40">
                <h4 class="fw-5 mb-20">BUMO & CLINIX.</h4>
                <p class=" txt-j">
                    <?php
                    $porfolio=__('pfl');
                    echo $porfolio[0];
                    ?>
                </p>
            </article>
            <hr>
            <article class="pt-40  mb-40">
                <h4 class="fw-5 mb-20">SECRETARÍA DE EVENTOS CULTURALES Y DEPORTIVOS SUNTUAP.</h4>
                <p class="txt-j mb-40">
                    <?php
                    echo $porfolio[1];
                    ?>
                </p>
                <div class="flex column ai-c">
                    <img class="img-1200" src="/img/SUNTUAP.webp" alt="SUNTUAP_img">
                </div>
            </article>
            <hr>
            <article class="pt-40">
                <h4 class="fw-5 mb-20">HOTEL ESCUELA.</h4>
                <p class="txt-j mb-40"><?php
                    echo $porfolio[2];
                    ?></p>
                <div class="flex column ai-c">
                    <img class="img-1200 mb-20" src="/img/HE_3.webp" alt="HOTEL_ESCUELA_IMG">
                    <p class="mb-40">
                        <?php
                        $HE=__('HE');
                        echo $HE[0];
                        ?>
                    </p>
                    <img class="img-1200 mb-20" src="/img/HE_1.webp" alt="HOTEL_ESCUELA_img">
                    <p class="mb-40"><?php echo $HE[1]; ?></p>
                </div>
                <div id="HE-IG" class="flex jc-sb mb-20 q1-column ai-c">
                    <img class="img-360" src="/img/HE_6.webp" alt="HOTEL_ESCUELA_img">
                    <img class="img-360" src="/img/HE_4.webp" alt="HOTEL_ESCUELA_img">
                    <img class="img-360" src="/img/HE_5.webp" alt="HOTEL_ESCUELA_img">
                </div>
                <p class=" txt-c"><?php echo $HE[2]; ?></p>
            </article>

        </section>
    </main>
    <footer class="pt-60 txt-c">
        <hr>
        <a href="#body"><?php echo __('return-menu'); ?></a>
        <section class=" pt-40">
            <h3 class="mb-20">YOHARY DIAZ JIMENEZ</h3>
        </section>
    </footer>
    <script>document.addEventListener("DOMContentLoaded",function(){document.querySelectorAll('a[href^="#"]').forEach(e=>{e.addEventListener("click",function(t){t.preventDefault(),document.querySelector(this.getAttribute("href")).scrollIntoView({behavior:"smooth"})})})});
    </script>
</body>
</html>