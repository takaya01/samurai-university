<!DOCTYPE html>

<head>
    <title>samurai university</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="samurai university" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <div class="super_container">
        <!-- Header -->
        <header class="header">
            <!-- Header Content -->
            <div class="header_container">
                <div class="">
                    <nav class="navbar navbar-expand-lg">
                        <div class="logo_container">
                            <a href="index.php">
                                <div class="logo_text">
                                    <a href="<?php echo home_url();?>">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo_big.png" />
                                        <span>Samurai University</span>
                                    </a>
                                </div>
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars toggle-menu" aria-hidden="true"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav flex-row ml-md-auto d-md-flex main_nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo home_url();?>/category/news/">NEWS
                                        <p>ニュース</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo home_url();?>/category/event/">EVENT
                                        <p>イベント</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo home_url();?>/course/">COURSES
                                        <p>コース</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo home_url();?>/category/campuslife/">
                                        CAMPUSLIFE
                                        <p>侍の学生</p>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        ABOUT US
                                        <p>侍Univaについて</p>
                                    </a>
                                    <div class="dropdown-menu sub-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo home_url();?>/about-us/">ABOUT US
                                            <p>侍Univaについて</p>
                                        </a>
                                        <a class="dropdown-item" href="<?php echo home_url();?>/contact/">CONTACT
                                            <p>お問い合わせ</p>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- header.php ここまで -->
        <?php get_header();?>
        <!-- Home -->
        <div class="home">
            <div class="home_slider_container">
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/top1_1200_630.jpg"
                                    class="d-block w-100" style="background-color: #2b7b8e26" />
                                <div class="carousel-caption d-none d-md-block">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo_big_slide.png" />
                                    <div class="title-slide">
                                        <p>Samurai University</p>
                                    </div>
                                    <div class="content-slide">
                                        <p>
                                            SAMURAI大学の理念には「プログラミングを通して、
                                            国際社会に貢献する豊かな教養を備えた人材の育成」と
                                            「c公正な世界観に基づき、
                                            時代と社会の要請に応えていく実学」の思いが込められています
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/top2_1200_630.jpg"
                                    class="d-block w-100" />
                                <div class="carousel-caption d-none d-md-block">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo_big_slide.png" />
                                    <div class="title-slide">
                                        <p>Samurai University</p>
                                    </div>
                                    <div class="content-slide">
                                        <p>
                                            SAMURAI大学の理念には「プログラミングを通して、
                                            国際社会に貢献する豊かな教養を備えた人材の育成」と
                                            「b公正な世界観に基づき、
                                            時代と社会の要請に応えていく実学」の思いが込められています
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/top3_1200_630.jpg"
                                    class="d-block w-100" />
                                <div class="carousel-caption d-none d-md-block">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo_big_slide.png" />
                                    <div class="title-slide">
                                        <p>Samurai University</p>
                                    </div>
                                    <div class="content-slide">
                                        <p>
                                            SAMURAI大学の理念には「プログラミングを通して、
                                            国際社会に貢献する豊かな教養を備えた人材の育成」と
                                            「a公正な世界観に基づき、
                                            時代と社会の要請に応えていく実学」の思いが込められています
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Home Slider Nav -->
        </div>

        <!-- news -->
        <div class="news">
            <div class="footer_row">
                <div class="row news_row">
                    <div class="col-lg-6 col-md-6 col-sx-12 news_col">
                        <div class="home_title">News</div>
                        <div class="home_title_sub">ニュース</div>
                        <?php
                    $args = array(
                        'post_type' => 'post',
                        'category_name' => 'news',
                        'posts_per_page' => 3,
                    );
                    $news_query = new WP_Query($args);
                ?>
                        <?php if ($news_query->have_posts()) : ?>
                        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>

                        <!-- News Posts Small -->
                        <div class="news_post_small" data-aos="fade-up" data-aos-delay="200">
                            <div class="news_post_meta">
                                <ul>
                                    <li>
                                        <a href="<?php echo get_permalink(); ?>">
                                            <?php echo get_the_date(); ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="news_post_small_title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                        </div>
                        <!-- News Posts Small ここまで -->

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sx-12 news_col">
                        <div class="home_title">Events</div>
                        <div class="home_title_sub">イベント</div>
                        <?php
                    $args = array(
                        'post_type' => 'post',
                        'category_name' => 'event',
                        'posts_per_page' => 2,
                    );
                    $event_query = new WP_Query($args);
                ?>
                        <?php if ($event_query->have_posts()): ?>
                        <?php while ($event_query->have_posts()) : $event_query->the_post() ; ?>

                        <!-- Event Posts Small loop start-->
                        <div class="news_post_small" data-aos="fade-up" data-aos-delay="200">
                            <div class="row news_post_row">
                                <div class="col-lg-3 col-md-4 col-sx-12">
                                    <div class="calendar_border">
                                        <div class="calendar_border_1">
                                            <div class="calendar_month">
                                                <?php echo get_field('month'); ?></div>
                                            <div class="calendar_day">
                                                <span><?php  echo get_field('day'); ?></span>
                                                <span>日</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-8 col-sx-12">
                                    <div class="news_post_small_title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title() ; ?>
                                        </a>
                                    </div>
                                    <div class="news_post_content">
                                        <?php
                                        $content = wp_trim_words(get_the_content(), 50, '...');
                                        echo $content;
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Event Posts Small loop end-->

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- end news -->

        <!-- Popular Courses -->
        <div class="courses">
            <div class="footer_row">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <h2 class="home_title">COURSES</h2>
                            <div class="section_subtitle">コース</div>
                        </div>
                    </div>
                </div>
                <div class="row courses_row">
                    <!-- Course -->
                    <div class="col-lg-4 course_col" data-aos="fade-up" data-aos-delay="200">
                        <div class="course">
                            <div class="course_image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/pic5-3.png" alt="" />
                            </div>
                            <div class="course_body">
                                <h3 class="course_title">
                                    <a href="course.html">教育学部</a>
                                </h3>
                                <div class="course_text">
                                    <p>
                                        広い視野と総合力を持つ世界に通用する、教育者・指導者を育成
                                    </p>
                                </div>
                            </div>
                            <div class="course_footer">
                                <div
                                    class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="course_price ml-auto">詳細を見る</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 course_col" data-aos="fade-up" data-aos-delay="200">
                        <div class="course">
                            <div class="course_image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/pic5-2.jpg" alt="" />
                            </div>
                            <div class="course_body">
                                <h3 class="course_title">
                                    <a href="course.html">理工学部</a>
                                </h3>
                                <div class="course_text">
                                    <p>
                                        未知なる科学技術の扉を開く。 「次世代」を見据えた専門教育
                                    </p>
                                </div>
                            </div>
                            <div class="course_footer">
                                <div
                                    class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="course_price ml-auto">詳細を見る</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 course_col" data-aos="fade-up" data-aos-delay="200">
                        <div class="course">
                            <div class="course_image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/pic5-4.png" alt="" />
                            </div>
                            <div class="course_body">
                                <h3 class="course_title"><a href="course.html">法学部</a></h3>
                                <div class="course_text">
                                    <p>複雑な社会現象を考察する、法律学科と政治学科</p>
                                </div>
                            </div>
                            <div class="course_footer">
                                <div
                                    class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="course_price ml-auto">詳細を見る</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Counter -->
        <div class="counter">
            <div class="counter_background"
                style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/pic_chart.png)"></div>
            <div class="footer_row">
                <div class="">
                    <div class="">
                        <div class="counter_content">
                            <!-- Milestones -->
                            <div class="milestones row">
                                <!-- Milestone -->
                                <div class="milestone col-md-3 col-lg-3 col-sx-12">
                                    <div class="milestone_counter">
                                        <p>教授数</p>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon4.png"
                                            alt="" />
                                        <span class="count_num milestone_number" id="teacher_num">335</span><span
                                            class="milestone_count">名</span>
                                    </div>
                                </div>

                                <!-- Milestone -->
                                <div class="milestone col-md-3 col-lg-3 col-sx-12">
                                    <div class="milestone_counter">
                                        <p>卒業生徒</p>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon3.png"
                                            alt="" />
                                        <span class="count_num milestone_number" id="student_num">4526</span><span
                                            class="milestone_count">名</span>

                                    </div>
                                </div>

                                <!-- Milestone -->
                                <div class="milestone col-md-3 col-lg-3 col-sx-12">
                                    <div class="milestone_counter">
                                        <p>学習コース</p>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon2.png"
                                            alt="" />
                                        <span class="count_num milestone_number" id="course_num">12</span><span
                                            class="milestone_count">コース</span>
                                    </div>

                                </div>
                            </div>

                            <!-- Milestone -->
                            <div class="milestone col-md-3 col-lg-3 col-sx-12">
                                <div class="milestone_counter">
                                    <p>受賞</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon1.png" alt="" />
                                    <span class="count_num milestone_number" id="award_num">35</span><span
                                        class="milestone_count">回</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Campus Life -->
    <div class="courses">
        <div class="footer_row">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="home_title">Campus Life</h2>
                        <div class="section_subtitle">侍の学生</div>
                    </div>
                </div>
            </div>
            <div class="row courses_row">
                <?php
                $args = array(
                    'post_type'      => 'post',
                    'category_name' => 'campuslife',
                    'posts_per_page' => 6
                );
                $campus_query = new WP_Query($args);
            ?>
                <?php if ($campus_query->have_posts()) : ?>
                <?php while ($campus_query->have_posts()) : $campus_query->the_post(); ?>

                <!-- Course -->
                <div class="col-lg-4 course_col" data-aos="fade-up" data-aos-delay="200">
                    <div class="course">
                        <div class="course_image">
                            <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                            <?php endif; ?>
                        </div>
                        <div class="course_body">
                            <h3 class="campas_title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                        </div>
                        <div class="campas_footer">
                            <div class="campas_footer_content d-flex flex-row align-items-center justify-content-start">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/clock.png" />
                                <span><?php echo get_the_date('Y-m-d'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>


    <script type="text/javascript">
    $(".carousel").carousel();
    </script>
</body>

</html>