<?php include('header.php'); ?>

        <!-- PAGE TITLE-->
        <section class="page-title js-parallax-scroll p-t-175 p-b-175" style="background: url('images/bg-title-04.jpg') center center / cover no-repeat fixed;">
            <div class="bg-overlay bg-overlay--opa30"></div>
            <div class="page-title__inner">
                <div class="container">
                    <h2>contact</h2>
                </div>
            </div>
        </section>
        <!-- END PAGE TITLE-->

        <!-- CONTACT-->
        <section class="contact p-t-70 p-b-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact__image">
                            <img src="images/contact-01.jpg" alt="Victor Umber">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-info clearfix">
                            <div class="contact-info__img">
                                <div class="contact-info__img-inner">
                                    <img src="images/about-me-02.jpg" alt="Miracle Lens">
                                </div>
                            </div>
                            <div class="contact-info__content">
                                <h3>contact info</h3>
                                <ul class="list-unstyled contact-info__list">
                                    <li>
                                        <i class="fas fa-home"></i>244 Ventura Blvd , Los Angeles , USA</li>
                                    <li>
                                        <i class="fas fa-phone"></i>(+24) 1344 205 6999</li>
                                    <li>
                                        <i class="fas fa-envelope"></i>ContactUmber@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                        <h3 class="title title--dark title--semibold m-b-35">send us message</h3>
                        <form class="form-contact js-contact-form" method="POST" action="http://templates.aucreative.co/umber/includes/contact-form.php">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input class="au-input au-input--full m-b-30" type="text" placeholder="Your Name" required name="name">
                                </div>
                                <div class="col-lg-6">
                                    <input class="au-input au-input--full m-b-30" type="email" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" name="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea class="au-input au-textfield au-input--full" name="message" placeholder="Your Message" required></textarea>
                                </div>
                            </div>
                            <button class="au-btn au-btn--dark au-btn--p70 m-t-30" type="submit">send</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CONTACT-->

       <?php include('footer.php'); ?>