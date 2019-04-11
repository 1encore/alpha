<!-- Contact Start -->
<div class="contact-area pt-1502 pb-140" id="call">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="contact-contents text-center">
                    <div class="single-contact mb-65">
                        <div class="contact-icon">
                            <img src="img/contact/contact3.png" alt="contact">
                        </div>
                        <div class="contact-add">
                            <h3>+7 747 777 86 64</h3>
                            <p>пр-т. Сейфуллина 597</p>
                            <p>г. Алматы, Казахстан</p>
                        </div>
                    </div>
                    <div class="single-contact mb-65">
                        <div class="contact-icon">
                            <img src="img/contact/contact3.png" alt="contact">
                        </div>
                        <div class="contact-add">
                            <h3>+7 707 708 86 64</h3>
                            <p>ул. Жандосова 51</p>
                            <p>г. Алматы, Казахстан</p>
                        </div>
                    </div>
                    <div class="single-contact">
                        <div class="contact-icon">
                            <img src="img/contact/contact3.png" alt="contact">
                        </div>
                        <div class="contact-add">
                            <h3>+7 702 980 0102</h3>
                            <p>ул. Б. Майлина 11</p>
                            <p>г. Астана, Казахстан</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="reply-area">
                    <h3>LEAVE A message</h3>
                    <p>We will contact you soon</p>
                    <form id="contact-form" action="mail.php" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Name</p>
                                <input type="text" name="name" id="name">
                            </div>
                            <div class="col-md-12">
                                <p>Email</p>
                                <input type="text" name="email" id="email">
                            </div>
                            <div class="col-md-12">
                                <p>Subject</p>
                                <input type="text" name="subject" id="subject">
                                <p>Massage</p>
                                <textarea name="message" id="message" cols="15" rows="10"></textarea>
                            </div>
                        </div>
                        <input class="reply-btn" type="submit" value="send message">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
<!-- Subscribe Start -->
<div class="subscribe-area pt-58 pb-70" id="contact1">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="subscribe-content section-title text-center">
                    <h2>оставить свои контакты</h2>
                    <p>Мы с вами свяжемся в ближайшее время</p>
                </div>
                <div class="newsletter-form mc_embed_signup">
                    <form action="phone.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll" class="mc-form">
                            <input type="number" name="name" class="email" id="mce-EMAIL" placeholder="Ваш телефон (+7700 000 0000)" required>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <button id="mc-embedded-subscribe" class="default-btn" type="submit" name="subscribe"><span>отправить</span></button>
                        </div>
                    </form>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                    </div>
                    <!-- mailchimp-alerts end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Subscribe End -->

<!--Yandex Map-->
<div class="about-area">
    <div id="map" style="width:100%;height:440px;"></div>
</div>
<!--Yandex Map-->

<script>
    ymaps.ready(function () {
        var myMap = new ymaps.Map('map', {
                center: [43.2314, 76.9076],
                zoom: 14
            }, {
                searchControlProvider: 'yandex#search'
            })

        myMap.geoObjects
            .add(new ymaps.Placemark([43.2400, 76.9339], {
                balloonContent: '"Alpha Academy" - академия образования,  <br> Сейфулина 597, <br> 6 этаж, 601 офмс'
            }, {
                preset: 'islands#icon',
                iconColor: '#0095b6'
            }))
            .add(new ymaps.Placemark([43.2180, 76.8757], {
                balloonContent: '"Alpha Academy" - академия образования,  <br> Жандосова 51, <br> 6 этаж, 635 офис'
            }, {
                preset: 'islands#icon',
                iconColor: '#0095b6'
            }))
    });
</script>