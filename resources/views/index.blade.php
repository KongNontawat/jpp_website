@extends('layouts.app')
@section('link_css')
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
@endsection

@section('content')

<!-- Banner -->
<section class="py-5" id="banner">
    <!-- <img src="{{asset('image/banner.jpg')}}" alt="" class="banner-bg"> -->
    <div class="container text-white">
        <div class="row">
            <div class="col-lg-7 my-auto pb-4" data-aos="fade-up" data-aos-duration="2000">
                <h1 class="display-3 fw-normal">We Product Is <br /> Rubber Every Type</h1>
                <p class="my-4">รับออกแบบและสั่งทำ ปั้มยางสำเร็จรูป ยางอะไหล่ทุกชนิด ยางโอริงค์ แหวนยาง โดยใช้ยางที่มาจากธรรมชาติ (NR) SBR BR ทนเสียดสี NBR CR กันน้ำมัน ความร้อน EP DM IIR ทนความร้อนสูง ทนต่อกรด SLICONE RUBBER ทนความร้อนสูง</p>
                <div class="d-flex flex-wrap align-items-center">
                    <a href="#" class="btn btn-primary px-4 py-2 fs-4 text-white my-3 me-4">ยอดขายอันดับ 1</a>
                    <span class="fw-normal"><i class="fa-solid fa-circle-play me-2"></i> See how it works</span>
                </div>
                <p class="my-3">บริษัท จอมปภา จำกัด | โทร : 081-314-3828 | แฟกช์ : (02)8046198</p>
            </div>
            <div class="col-lg-5" data-aos="fade-left" data-aos-duration="2000"><img src="{{asset('image/tablet.png')}}" alt="" class="img-fluid mx-auto banner-img"></div>
        </div>
    </div>
    <svg class="svg-path-banner" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 195">
        <path fill="#ffffff" fill-opacity="1" d="M0,192L1440,96L1440,320L0,320Z"></path>
    </svg>
</section>

<!-- Carousel -->
<section class="py-4" >
    <div class="container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide d-flex flex-column justify-content-center align-items-center text-center">
                    <i class="fa-solid fa-stamp fa-4x mb-4"></i>
                    <h4 class="">รับออกแบบปั้มยาง</h4>
                </div>
                <div class="swiper-slide d-flex flex-column justify-content-center align-items-center text-center">
                    <i class="fa-solid fa-gears fa-4x mb-4"></i>
                    <h4 class="">มียางอะไหล่ทุกชนิด</h4>
                </div>
                <div class="swiper-slide d-flex flex-column justify-content-center align-items-center text-center">
                    <i class="fa-solid fa-tree fa-4x mb-4"></i>
                    <h4 class="">ใช้ยางที่มาจากธรรมชาติ</h4>
                </div>
                <div class="swiper-slide d-flex flex-column justify-content-center align-items-center text-center">
                    <i class="fa-solid fa-explosion fa-4x mb-4"></i>
                    <h4 class="">(NR) SBR BR ทนเสียดสี</h4>
                </div>
                <div class="swiper-slide d-flex flex-column justify-content-center align-items-center text-center">
                    <i class="fa-solid fa-droplet-slash fa-4x mb-4"></i>
                    <h4 class="">รับออกแบบปั้มยางNBR CR กันน้ำมัน ความร้อน</h4>
                </div>
                <div class="swiper-slide d-flex flex-column justify-content-center align-items-center text-center">
                    <i class="fa-solid fa-fire-burner fa-4x mb-4"></i>
                    <h4 class="">EP DM IIR ทนความร้อนสูง ทนต่อกรด</h4>
                </div>
                <div class="swiper-slide d-flex flex-column justify-content-center align-items-center text-center">
                    <i class="fa-solid fa-dumpster-fire fa-4x mb-4"></i>
                    <h4 class="">SLICONE RUBBER ทนความร้อนสูง</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About -->
<section class="py-3" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-1" data-aos="fade-right" data-aos-duration="2000">
                <img src="{{asset('image/service.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 my-auto" data-aos="fade-left" data-aos-duration="2000">
                <h2 class="h2 text-muted">บริษัท จอมปภา จำกัด</h2>
                <h1 class="display-5 fw-normal my-4">We Product Is <br /> Rubber Every Type</h1>
                <p class="my-4 text-muted fs-lg-4">รับออกแบบและสั่งทำ ปั้มยางสำเร็จรูป ยางอะไหล่ทุกชนิด ยางโอริงค์ แหวนยาง โดยใช้ยางที่มาจากธรรมชาติ (NR) SBR BR ทนเสียดสี NBR CR กันน้ำมัน ความร้อน EP DM IIR ทนความร้อนสูง ทนต่อกรด SLICONE RUBBER ทนความร้อนสูง</p>
                <p class="my-3 text-muted fs-lg-4">1050/62 จรัญสนิทวงศ 3 ต.วัดท่าพระ  อ.บางกอกใหญ่  จ.กรุงเทพมหานคร 10600 โทร:081-314-3828</p>
            </div>
        </div>
    </div>
</section>

<!-- Services 1 -->
<section id="product" class="py-5" style="background-color: #F4F4F9;">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 1000px;">
            <h1 class="h1 my-4">สินค้ามีคุณภาพ ราคาถูก และดีที่สุด</h1>
            <p class="text-muted fs-lg-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur iure minima fugit ipsam tempora, repudiandae sequi commodi unde itaque reiciendis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, deserunt!</p>
        </div>
        <div class="row py-4 gy-3" data-aos="fade-up" data-aos-duration="1500">

            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-1" style="border-radius: 20px;border-color: #f4f4f4;overflow: hidden;">
                    <img src="https://www.sp-intersparepart.com/wp-content/uploads/2021/04/rubber1a-800x445.jpg" class="card-img-top" alt="..." style="max-height: 250px;object-fit: cover;">
                    <div class="card-body text-center">
                        <h3 class="h3">Card title</h3>
                        <p class="text-muted fs-lg-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-1" style="border-radius: 20px;border-color: #f4f4f4;overflow: hidden;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7g5eHEd6CQW6Wko9uWBS2Kk6VvuGCWMqpVGIJLr687A2u9rArW0qL4-BsyZbM3zKdG7k&usqp=CAU" class="card-img-top" alt="..." style="max-height: 250px;object-fit: cover;">
                    <div class="card-body text-center">
                        <h3 class="h3">Card title</h3>
                        <p class="text-muted fs-lg-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm border-1" style="border-radius: 20px;border-color: #f4f4f4;overflow: hidden;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS68OvcUK3SGlpUnmBkFPuaHCQj-3maEf67TA&usqp=CAU" class="card-img-top" alt="..." style="max-height: 250px;object-fit: cover;">
                    <div class="card-body text-center">
                        <h3 class="h3">Card title</h3>
                        <p class="text-muted fs-lg-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Services 2 -->
<section id="service" class="py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 1000px;">
            <h1 class="h1 my-4">ผลิตด้วยเครื่องจักรที่ทันสมัยและคุณภาพดีที่สุด</h1>
            <p class="text-muted fs-lg-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur iure minima fugit ipsam tempora, repudiandae sequi commodi unde itaque reiciendis!</p>
        </div>
        <div class="row py-4 justify-content-center" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-md-10 col-lg-8">
                <img src="https://i2.wp.com/live.staticflickr.com/7866/47608108731_dc7df68c54_b.jpg" class="shadow img-fluid" alt="" style="border-radius: 15px; max-height: 350px;object-fit: cover;width:100%;">
            </div>
        </div>
    </div>
</section>

<!-- Map -->
<section class="py-4" style="background-color: #F1F3F4;">
    <div class="container">
    <div class="row py-4 justify-content-center" data-aos="fade-up" data-aos-duration="1500">
            <div class="col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1937.8872254425055!2d100.46789030819328!3d13.732100903132784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2984bc41b992b%3A0x15dafaffb1e4b305!2s1050!5e0!3m2!1sth!2sth!4v1653755012970!5m2!1sth!2sth" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-5" id="contact">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-6 col-lg-4 my-auto">
                <img src="{{asset('image/logo2.png')}}" alt="" class="img-fluid">
                <p class="text-muted my-3 text-center text-lg-start"><b>ที่อยู่ : </b> 1050/62 จรัญสนิทวงศ 3 ต.วัดท่าพระ  อ.บางกอกใหญ่  จ.กรุงเทพมหานคร 10600</p>
            </div>
            <div class="col-md-6 col-lg-4 text-center">
                <p><a href="" class="text-dark ">Home</a></p>
                <p><a href="" class="text-dark ">Product</a></p>
                <p><a href="" class="text-dark ">About</a></p>
                <p><a href="" class="text-dark ">Pages</a></p>
                <p><a href="" class="text-dark ">Service</a></p>
                <p><a href="" class="text-dark ">ContactUs</a></p>
            </div>
            <div class="col-md-6 col-lg-4 text-center">
                <h3 class="mb-3">ติดต่อที่</h3>
                <p>Tel : 081-314-3828</p>
                <p>FaceBook : <a href="">example</a></p>
                <p>Line : <a href="">@example</a></p>
                <p>Fax : 081-314-3828</p>
            </div>
        </div>
    </div>
</footer>


<section class="py-3" style="background-color: #F1F3F4;">
    <p class="text-center m-0 text-muted">
        Create By <a href="https://www.facebook.com/profile.php?id=100008874284012">Kong Nontawat</a>
    </p>
</section>




@endsection

@section('link_js')
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
<script>
    AOS.init({
        once: true
    });

    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        breakpoints: {
            "@0.00": {
                slidesPerView: 1,
                spaceBetween: 10
            },
            "@0.75": {
                slidesPerView: 2,
                spaceBetween: 20
            },
            "@1.00": {
                slidesPerView: 3,
                spaceBetween: 40
            },
            "@1.50": {
                slidesPerView: 4,
                spaceBetween: 50
            }
        }
    });
</script>
@endsection