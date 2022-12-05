@section('footer')
    <footer>
        <div class="title-in-footer">
            <div class="title-in-footer-1">Movie</div>
            <div class="title-in-footer-2">List</div>
        </div>
        <div class="title-in-footer-desc">
            <div class="title-in-footer-desc-title">
                <div class="title-in-footer-desc-1">Movie</div>
                <div class="title-in-footer-desc-2">List</div>
            </div>
            <div class="title-in-footer-desc-text">is a website that contains list of movie</div>
        </div>
        <div class="social-media">
            <img src="assets/footer/icons8-twitter-60.png" alt="">
            <img src="assets/footer/icons8-instagram-60.png" alt="">
            <img src="assets/footer/icons8-facebook-f-60.png" alt="">
            <img src="assets/footer/icons8-reddit-60.png" alt="">
            <img src="assets/footer/icons8-youtube-60.png" alt="">
        </div>
        <div class="other">
            <a href="#" class="privacy">Privacy Policy</a>
            <hr>
            <a href="#" class="terms">Terms of Service</a>
            <hr>
            <a href="#" class="contact">Contact Us</a>
            <hr>
            <a href="#" class="about">About Us</a>
        </div>
        <div class="copyright">
            <div class="copyright-text-1">Copyright © 2021</div>
            <div class="title-in-footer-desc-title">
                <div class="title-in-footer-desc-1">Movie</div>
                <div class="title-in-footer-desc-2">List</div>
            </div>
            <div class="copyright-text-3">All Rights Reserved</div>

        </div>
    </footer>
    <style>
        /*footer*/
        footer {
            background-color: #1F1F1F;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .title-in-footer {
            display: flex;
            font-family: Arial, Helvetica, sans-serif;
            color: #E50913;
            font-size: xxx-large;
            font-weight: bold;
        }

        .title-in-footer-2 {
            color: white;
        }

        .title-in-footer-desc {
            display: flex;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            font-size: large;
            font-weight: 450;
        }

        .title-in-footer-desc-1 {
            color: #E50913;
        }

        .title-in-footer-desc-title {
            display: flex;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 950;
        }

        .title-in-footer-desc-text {
            margin-left: 5px;
        }

        .social-media {
            margin-top: 0.3rem;
        }

        .social-media img {
            padding: 0.5rem;
            background-color: #8E8E8E;
            border-radius: 5rem;
            height: 30px;
            margin: 0.5rem;
            filter: invert(100%) sepia(93%) saturate(27%) hue-rotate(233deg) brightness(107%) contrast(100%);
        }

        .other {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .other a {
            color: white;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            font-weight: 450;
            font-family: sans-serif;
            text-decoration: none;
        }

        .other hr {
            margin: 0 2rem;
            height: 2rem;
            width: 2px;
            border-width: 0;
            background-color: white;
        }

        .about {
            margin-right: 2rem;
        }

        .copyright {
            margin-top: 1rem;
            color: white;
            display: flex;
            font-weight: 450;
            font-family: sans-serif;
        }

        .copyright-text-1 {
            margin-right: 0.4rem;
        }

        .copyright-text-3 {
            margin-left: 0.4rem;
        }

    </style>
@endsection
