
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Phong Vu - Fashion for all</title>
        <link rel="shortcut icon" href="images/favicon.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="access/slick.css" rel="stylesheet">
        <link href="access/slick-theme.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
        <script>
        function initMap() {
            var uluru = { lat: -25.344, lng: 131.036 };
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), { zoom: 4, center: uluru });
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({ position: uluru, map: map });
        }
        </script>
        
        <!-- Styles -->
    </head>
    <body>
        <div class="header__wrapper"> 
    <div class="logo">
        <a href="#">
            <img src="images/logo-phong-vu.png" alt="Phong Vu Company - Fashion for all">
        </a>
        <p class="slogan">Fashion for all</p>
    </div>

    @include('common.menu')        
</div>

<div class="content__container">
    <div class="contact__wrapper">
        <div class="page__label">Liên Hệ</div>
        <div class="information__wrapper">
            <div class="address">
                <p class="title">Công ty SX - TM thời trang phong vũ</p>
            </div>
           <ul class="list__ico-label">
               <li>
                   <span class="icon icon-map">
                        <img src="images/ico-map.png" alt="Map">
                   </span>  
                   <p>340/67 Tân Hiệp Chánh 10, phường Tân Chánh Hiệp, quận 12, thành phố Hồ Chí Minh</p>
               </li>
               <li>
                   <span class="icon icon-phone">
                        <img src="images/ico-phone.png" alt="Phone">
                   </span>
                   <a href="#">0904 579 039</a>
               </li>
               <li>
                   <span class="icon icon-email">
                        <img src="images/ico-mail.png" alt="Mail">
                   </span>
                   <p>thoitrangphongvu@diamond.com</p>
               </li>
            </ul>
        </div>
        <div class="flex-2-col">
            <div class="contact-form">
                <p class="contact__title">
                    Mọi thắc mắc và yêu cầu cần hỗ trợ, vui lòng để lại thông tin tại đây. Chúng tôi sẽ xem xét và gửi phản hồi sớm nhất.
                </p>
                <form id="contactForm" action="/thankyou_page.php">
                    <input class="contact__input" type="text" name="name" placeholder="Họ và tên"> <br>                
                    <input class="contact__input" type="text" name="phone" placeholder="Số điện thoại"> <br>
                    <input class="contact__input" type="text" name="mail" placeholder="Email"><br>
                    <input class="contact__input" type="text" name="subject" placeholder="Chủ đề"><br>
                    <textarea class="contact__input" rows="4" placeholder="Nội dung liên hệ">
                    </textarea>
                    <input class="contact__submit" type="submit" value="Submit">
                </form>
            </div>
            <div class="map__wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2279.918221308661!2d106.62919388824315!3d10.863905140254378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529f674e5bd7f%3A0x8840f08e7effc087!2zMzQwLCA2NyBUw6JuIENow6FuaCBIaeG7h3AgMTAsIFTDom4gQ2jDoW5oIEhp4buHcCwgUXXhuq1uIDEyLCBI4buTIENow60gTWluaCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1574495193475!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>

            
        </div>
        
    </div>
</div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHqvk9n1UMCme4tmMCtTzz_0VUuO2Br5Y&callback=initMap">
</script>

</body>
