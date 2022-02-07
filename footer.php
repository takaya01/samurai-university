<?php get_header(); ?>

<div class="home">
    <div class="breadcrumbs_container">
        <div class="image_header">
            <div class="header_info">
                <div>Contact</div>
                <div>お問い合わせ</div>
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
                        <div class="tab_panel_title">お問い合わせ</div>
                        <div class="tab_panel_content">
                            <div class="">
                                <div class="container contact_form">
                                    <form>
                                        <div class="input_title">
                                            <h4>お名前</h4>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <input type="text" class="form-control" placeholder="侍" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <input type="text" class="form-control" placeholder="太郎" required>
                                            </div>
                                        </div>
                                        <div class="input_title">
                                            <h4>E-mail</h4>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="example@sejuku.net"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="input_title">
                                            <h4>題名</h4>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" placeholder="願書受付について" required>
                                            </div>
                                        </div>
                                        <div class="input_title">
                                            <h4>メッセージ本文</h4>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" rows="5" placeholder="願書受付について聞きたいです。"
                                                    required></textarea>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button class="btn submit_form">送 信</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Course Sidebar -->
        <div class="col-lg-4" style="background-color: #2B7B8E33">
            <?php get_sidebar('main'); ?>
        </div>
    </div>
</div>

<!-- Footer -->
<?php get_footer(); ?>