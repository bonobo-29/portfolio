<?php get_header(); 
/**
 * The main template file
 *
 */
?>
<?php get_header(); ?>
<div id="mv" class="wrap">
    <div id="left-box">
        <h1>Welcome<br />My Portfolio</h1>
        <p>I'm Jumpei Nishikawa</p>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/mv.jpg" alt="FV" id="right-box" class="pc">
    <img src="<?php echo get_template_directory_uri(); ?>/img/mv-sp.jpg" alt="FV" id="right-box" class="sp">
</div>
<section id="about">
    <div class="inner wrap space-btw">
        <div class="img-box">
            <div class="fv_slide"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/about-img.jpg" alt="About me" class="fv_slide_fig">
        </div>
        <div class="txt-box">
            <h2 class="ttl__clip">About</h2>
            <p>2016年に近畿大学短期大学卒業後、カナダに1年半の留学。<br />
                バンクーバーに校舎を構えるCornerstone Collegeでプログラミングを学習。<br />
                2018年に帰国し日本で活動を開始。株式会社RINGに入社。<br />
                自社サービスの集客を目的としたweb制作業務に従事し、2年目意向はチームリーダーとしてチーム総勢6名のクリエイターを管理。<br />
                主な業務としては自社サービスの集客を目的としたWebサイトの制作、運営、管理。<br />
                Wordpressでのサイト制作を得意としており、テーマの作成も可能。<br />
                また、個人で請け負ったサイト制作の経験もあり、以下2サイトの制作と管理を担当し、現在も集客の向上を目的に運営中。<br />
                現在新たなスキルを獲得するべく勉強中。
            </p>
        </div>
    </div>
    <div id="skill" class="inner">
        <h3 class="ttl__clip">My Skills</h3>
        <ul class="wrap space-btw">
            <li>
                <h4>UI / UX Design</h4>
                <div id="skill__design" class="skill__chart"></div>
            </li>
            <li>
                <h4>Wordpress</h4>
                <div id="skill__wordpress" class="skill__chart"></div>
            </li>
            <li>
                <h4>Web Coding</h4>
                <div id="skill__coding" class="skill__chart"></div>
            </li>
            <li>
                <h4>SEO & Marketing</h4>
                <div id="skill__seo" class="skill__chart"></div>
            </li>
        </ul>
    </div>
</section>
<section id="works">
    <span class="scroll__bg"></span>
    <div class="inner">
        <h2 class="ttl__clip">Works</h2>
        <ul>
            <li class="wrap al-center">
                <a href="https://www.sarashina-osa.com/" class="txt-box">
                    <p class="ttl">更科ほり</p>
                    <p class="url">https://www.sarashina-osa.com/</p>
                </a>
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/work-img01.jpg" alt="更科ほり" class="fade__up">
                </div>
            </li>
            <li class="wrap al-center">
                <a href="https://east64films.com/" class="txt-box">
                    <p class="ttl">EAST 64 FILMS</p>
                    <p class="url">https://east64films.com/</p>
                </a>
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/work-img02.jpg" alt="East64films" class="fade__up">
                </div>
            </li>
        </ul>
    </div>
</section>
<section id="contact">
    <div class="inner wrap space-btw fade__up">
        <h2 class="ttl__clip">Contact</h2>
        <?php echo do_shortcode('[mwform_formkey key="5"]'); ?>
    </div>
</section>
<?php get_footer(); ?>