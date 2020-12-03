@extends('front.layouts.base')

@section('content')
    <div id="map-wrap-bg-01" class="map-wrap big" style="position: relative; overflow: hidden;">
        <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223); background-size: cover; background: url('{{ asset('/frontend/assets/img/posts/37.jpg')}}') no-repeat center fixed;">
            <div class="gm-err-container">
                <div class="gm-err-content">
                    <!-- <div class="gm-err-icon">
                        <img src="{{ asset('/frontend/assets/img/posts/37.jpg')}}" draggable="false" style="user-select: none; width:100%; position: absolute">
                    </div> -->
                    <!-- <div class="gm-err-title">Oops! Something went wrong.</div>
                    <div class="gm-err-message">This page didn't load Google Maps correctly. See the JavaScript console for technical details.</div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="contact-section-wrap">
        <!-- CONTACT SECTION -->
        <div class="contact-section grid-limit">
            <p class="contact-section-title">tentang kami</p>

            <p class="contact-section-text">Memiliki sebuah media adalah cita-cita yang sedang kami perjuangkan. Lebih dari itu, media menjadi medium bagi kami untuk mencurahkan apa yang ingin dan akan kami pikirkan dalam bentuk lisan dan tulisan.</p>
            <p class="contact-section-text">Akhirnya, kami terbentuk pada tanggal 10 April 2016. Namun, selama setahun kami berjalan, banyak hal yang tidak bisa berjalan dengan baik dan sempat mengalami vakum. Memang, membangun apa yang di cita-citakan tidak semudah teori. Teori pun tidak cukup tanpa eksekusi yang baik. Eksekusi tanpa perencanaan yang matang pun bisa berakhir tidak menyenangkan. Tepat setahun, tepatnya 10 April 2017, kami berkomitmen untuk melanjutkan perjuangan kami yang sempat tertunda.</p>
            <p class="contact-section-text">Kami berharap bisa selalu konsisten memberikan informasi dan karya di situs ini. Serta selalu berusaha mengerti apa yang kalian butuhkan. Oleh karena itu, dengan bangga kami persembahkan VirtualVerbal.com untuk kalian semua, VirtualVriends.</p>
            <p class="contact-section-text">Nama Virtual Verbal kami ambil berlandaskan pada 2 hal yang ingin kami jadikan sebagai identitas kami dalam berkarya. Kata Virtual kami pilih karena kami mengkhususkan diri untuk memanifestasikan semua informasi-informasi yang kami buat melalui dunia virtual (internet). Sedangkan kata Verbal kami pilih karena ini merupakan cara kami untuk mengkomunikasikan informasi yang kami berikan (baik lisan mupun tulisan).</p>
            <p class="contact-section-text">Terima kasih telah berkunjung ke Virtual Verbal. Untuk saran, kritik atau kerjasama bisa kontak kami di contact@virtualverbal.com.</p>
            
            <div class="contact-items">
                <div class="contact-item">
                    <i class="fas fa-envelope contact-item-icon icon-envelope"></i>
                    <p class="contact-item-title">Inquiries Contact</p>
                    <a href="mailto:contact@virtualverbal.com" class="contact-item-text" style="text-transform:lowercase">contact@virtualverbal.com</a>
                    <p class="contact-item-text">(+62) 896 7841 9991</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-pin contact-item-icon icon-location-pin"></i>
                    <p class="contact-item-title">Virtual Verbal</p>
                    <p class="contact-item-text">Jl. Gegerkalong Tonggoh Raya No.6, Kota Bandung</p>
                    <p class="contact-item-text">Jawa Barat 40153, IDN</p>
                </div>
            </div>
            <div class="social-links centered">
                <a href="https://www.facebook.com/virtualverbal" class="bubble-ornament hoverable fb">
                    <svg class="facebook-icon">
                        <use xlink:href="#svg-facebook"></use>
                    </svg>
                </a>
                <a href="https://twitter.com/virtualverbal" class="bubble-ornament hoverable twt">
                    <svg class="twitter-icon">
                        <use xlink:href="#svg-twitter"></use>
                    </svg>
                </a>
                <a href="https://www.instagram.com/virtualverbaldotcom/" class="bubble-ornament hoverable insta">
                    <svg class="instagram-icon">
                        <use xlink:href="#svg-instagram"></use>
                    </svg>
                </a>
                <a href="https://www.youtube.com/channel/UC6LJYdmDyL4QL5rlgXDMX7A" class="bubble-ornament hoverable youtube">
                    <svg class="youtube-icon">
                        <use xlink:href="#svg-youtube"></use>
                    </svg>
                </a>
            </div>

            <!-- CONTACT SECTION FORM -->
            <div class="contact-section-form">
                <div class="section-title-wrap blue">
                    <h2 class="section-title medium">Send us a message</h2>
                    <div class="section-title-separator"></div>
                </div>
                <form class="form-wrap">
                    <div class="form-row">
                        <div class="form-item half blue">
                            <label for="contact_name" class="rl-label">Your Name</label>
                            <input type="text" id="contact_name" name="contact_name" placeholder="Enter your first name here...">
                        </div>
                        <div class="form-item half blue">
                            <label for="contact_email" class="rl-label">Your Email</label>
                            <input type="text" id="contact_email" name="contact_email" placeholder="Enter your email here...">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-item blue">
                            <label for="contact_subject" class="rl-label">Message Subject</label>
                            <input type="text" id="contact_subject" name="contact_subject" placeholder="Enter the subject here...">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-item blue">
                            <label for="contact_message" class="rl-label">Your Message</label>
                            <textarea name="contact_message" id="contact_message" class="violet" placeholder="Write your message here..."></textarea>
                        </div>
                    </div>
                    <div class="submit-button-wrap right">
                        <button class="submit-button button blue">
                        Send your message
                            <span class="button-ornament">
                                <svg class="arrow-icon medium">
                                    <use xlink:href="#svg-arrow-medium"></use>
                                </svg>
                                <svg class="cross-icon small">
                                    <use xlink:href="#svg-cross-small"></use>
                                </svg>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection