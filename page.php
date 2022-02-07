<!DOCTYPE html>
<html lang="en">

<head>
    <title>samurai university</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="samurai university" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css" />
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css" />
    <!-- <link rel="stylesheet" type="text/css" href="styles/courses.css"> -->
</head>

<body>
    <?php get_header(); ?>

    <!-- Home -->

    <?php if (have_posts()) : //ループを実装する?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="home">
        <div class="breadcrumbs_container">
            <div class="image_header">
                <div class="header_info">
                    <div><?php the_title(); ?></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Course -->

    <div class="course">
        <div class="row content-body">
            <!-- Course -->
            <div class="col-lg-8">
                <!-- Course Tabs -->
                <div class="course_tabs_container">
                    <div class="tab_panels">
                        <!-- Description -->
                        <div class="tab_panel">
                            <div class="tab_panel_title"><?php the_title(); ?></div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course Sidebar -->
            <div class="col-lg-4" style="background-color: #2b7b8e33">
                <div class="sidebar">
                    <?php get_sidebar('main'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php get_footer(); ?>
    <script type="text/javascript">
    $(".carousel").carousel();
    </script>
</body>

</html>