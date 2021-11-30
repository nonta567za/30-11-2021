@extends('layouts/font_end/head')
<body>

@extends('layouts/font_end/header')
 


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Jae Orn Thai food cooked to order Restaurant Website</span></h1>
          <h2>เว็บไซต์ร้านอาหารตามสั่งเจ๊อร</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a>
          </div>
          <div class="flex-center position-ref full-height">
            
                <div class="top-right links">
                    
                        <a href="{{ url('/home') }}">Home</a>
                        
                        <a  href="{{ url('/about') }}">About</a>
                        <a href="{{ route('login') }}">Login</a>

                        
                            <a href="{{ route('register') }}">Register</a>
                       
                </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{asset('font_end/img/about.jpg')}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3> ร้าน อ.เจ๊อร เปิดดำเนินการครั้งแรกเมื่อวันที่ 05 พฤศจิกายน 2545 </h3>
            
            <ul>
              <li><i class="bi bi-check-circle"></i> อาหารสดใหม่ทุกวัน</li>
              <li><i class="bi bi-check-circle"></i> ใช้วัตถุดิบคุณภาพดี</li>
              <li><i class="bi bi-check-circle"></i> ร้านอาหารสะอาด</li>
            </ul>
            <p>
            ร้าน อ.เจ๊อร เปิดดำเนินการครั้งแรกเมื่อวันที่ 05 พฤศจิกายน 2545 
                    โดยร้านเปิดที่ถนน บางกรวย-ไทรน้อย 
                    เป็นร้านที่คุณสรวี ธรรมมะกิจไพโรธิ์ผู้เป็นคนก่อตั้งร้าน
                    ซึ่งร้านนี้นอกจากจะเป็นร้านอาหาร 
                    ไทยที่สามารถรองรับลูกค้าได้มากกว่า 10 ท่าน 
                    มีเมนูอร่อยให้ลูกค้า เลือกไม่น้อยกว่า 100 รายการ
                    เมนูขายดี ได้แก่ ข้าวกระเพราหมูสับ 
                    ข้าวหมูกรอบน้ำมันหอย ข้าวไข้เจียวหมูสับ
            </p>
           
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">cooked to order</li>
              <li data-filter=".filter-salads">water</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('font_end/img/menu/ข้าวผัดจานดำ.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ข้าวผัด</a><span>35 บาท</span>
            </div>
            <div class="menu-ingredients">
            กระเทียมสับ
น้ำมันพืช
ไข่เป็ด 2 ฟอง
ข้าวสวยหุงสุก
ซอสปรุงรส
ซีอิ๊วขาว
น้ำตาลทราย
ต้นหอมซอย
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('font_end/img/menu/กระเพราหมูกรอบไข่ดาว.png')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">กระเพราหมูกรอบไข่ดาว</a><span>40 บาท</span>
            </div>
            <div class="menu-ingredients">
            สามชั้น1ชิ้น
ใบกระเพรา50กรัม
ไข่ไก่1ฟอง
กระเทียม1-2กลีบ
น้ำตาลทราย1ช้อนโต๊ะ
น้ำมันหอย2ช้อนชา
น้ำมันพืช2ช้อนชา
พริกขี้หนู5เม็ด
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('font_end/img/menu/ข้าวผัดกุ้ง.png')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ข้าวผัดกุ้ง</a><span>35 บาท</span>
            </div>
            <div class="menu-ingredients">
            ข้าวสวย (ไม่แฉะ) 3 ถ้วยตวง
กุ้งขาวแกะเปลือกผ่าหลัง 20 ตัว
กระเทียมสับ 8 กลีบ
แครอทหั่นเต๋าเล็ก 4 ช้อนโต๊ะ
น้ำมันพืช 1 ช้อนโต๊ะ
ไข่ไก่ 2 ฟอง
น้ำมันหอย 1 ช้อนโต๊ะ
ซีอิ๊วขาว 1 ช้อนโต๊ะ
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('font_end/img/menu/ข้าวไข่ดาว.png')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ข้าวไข่ดาว</a><span>30 บาท</span>
            </div>
            <div class="menu-ingredients">
            ไข่ดาวทรงเครื่อง
2 ช้อนโต๊ะ
ไข่ไก่ 2 ฟอง
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('font_end/img/menu/ผัดมาม่า.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ผัดมาม่า</a><span>35 บาท</span>
            </div>
            <div class="menu-ingredients">
            น้ำมันพืช 1 ช้อนโต๊ะ
กระเทียมสับ 1 ช้อนโต๊ะ
ไส้กรอก 1/2 ซอง
ไข่ไก่ (เบอร์1) 2 ฟอง
เส้นบะหมี่ (ลวก) 1 ซอง
ซอสหอยนางรม 2 ช้อนโต๊ะ
ซอสปรุงรส 1 ช้อนโต๊ะ
ซีอิ๊วดำ 2 ช้อนชา
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('font_end/img/menu/ผัดไท.png')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ผัดไทย</a><span>35 บาท</span>
            </div>
            <div class="menu-ingredients">
            เส้นเล็กหรือเส้นจันทร์แช่น้ำ 2 ถ้วย
เต้าหู้เหลือง 1/3 ถ้วย
ใบกุยช่ายหั่น 1/3 ถ้วย และสำหรับเครื่องเคียง 2-3 ต้น
กุ้งเล็กฝอยส้ม 2 ช้อนโต๊ะ
กุ้งสด 3-4 ตัว
ถั่วงอก 1 ถ้วย
ไช้โป๊สับ 2 ช้อนโต๊ะ
ไข่ไก่ 1 ฟอง
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('font_end/img/menu/ข้าวไข่เจียว.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ข้าวไข่เจียว</a><span>30 บาท</span>
            </div>
            <div class="menu-ingredients">
            ไข่ไก่ 2 ฟอง
น้ำมันหอย 1 ช้อนชา
น้ำปลา 1 ช้อนชา
พริกไทยป่น 1/2 ช้อนชา
น้ำมันสำหรับทอด
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('font_end/img/menu/กระเพราหมูสับ.png')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">กระเพราหมูสับ</a><span>35 บาท</span>
            </div>
            <div class="menu-ingredients">
            หมูสับ 2 ขีด
กระเทียมไทย 1-2 หัว (ตามชอบ)
พริกแดง 9 เม็ด
น้ำมันพืช 1 ช้อนโต๊ะ
น้ำเปล่า 1 ช้อนโต๊ะ
น้ำมันหอย 2 ช้อนโต๊ะ
ซีอิ๊วขาว 1 ช้อนโต๊ะ
น้ำตาลทราย 1 ช้อนชา
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('font_end/img/menu/ข้าวหน้าเป็ด.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ข้าวหน้าเป็ด</a><span>40 บาท</span>
            </div>
            <div class="menu-ingredients">
            เป็ดย่าง
ข้าวสวย
ขิงดอง
ต้นหอม
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('font_end/img/menu/ข้าวหมูกระเทียม.png')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ข้าวหมูกระเทียม</a><span>35 บาท</span>
            </div>
            <div class="menu-ingredients">
            น้ำมันรำข้าว 2 ช้อนโต๊ะ
กระเทียม (สับ) 40 กรัม
เนื้อหมู 250 กรัม
ซอสหอยนางรม 2 ช้อนโต๊ะ
ซีอิ๊วขาว 1 ช้อนโต๊ะ
น้ำตาลทราย 1 ช้อนโต๊ะ
พริกไทยป่น 1 ช้อนโต๊ะ
พริกไทยดำป่น 1/2 ช้อนชา
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('font_end/img/menu/ผัดมะกะโรนี.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ผัดมะกะโรนี</a><span>35 บาท</span>
            </div>
            <div class="menu-ingredients">
            มักกะโรนีดิบ 100 กรัม
กุ้งสด 10 ตัว
หอมหัวใหญ่หั่น 1 หัว
มะเขือเทศ 3 ลูก
ไข่ไก่ 2 ฟอง
ซอสมะเขือเทศ 4 ช้อนโต๊ะ
ซอสพริก 2 ช้อนโต๊ะ
ซอสปรุงรส 2 ช้อนโต๊ะ
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('font_end/img/menu/ข้าวผัดหมู.png')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ข้าวผัดหมู</a><span>35 บาท</span>
            </div>
            <div class="menu-ingredients">
            น้ำมันพืช
กระเทียมสับ 1 ช้อนชา
หมูหั่นชิ้น หรือหมูสับ
ไข่ไก่ 1 ฟอง
ข้าวสวย 1-2 ถ้วย
คะน้า
น้ำตาลทราย
ซอสปรุงรส
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{asset('font_end/img/menu/น้ำส้ม1.png')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">น้ำส้ม</a><span>12 บาท</span>
            </div>
            <div class="menu-ingredients">
             
          
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{asset('font_end/img/menu/น้ำโค้ก.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">น้ำโค้ก</a><span>12 บาท</span>
            </div>
            <div class="menu-ingredients">
           
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{asset('font_end/img/menu/น้ำเปล่า.png')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">น้ำเปล่า</a><span>10 บาท</span>
            </div>
            <div class="menu-ingredients">
            
            </div>
          </div>




        </div>

      </div>
    </section><!-- End Menu Section -->


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{asset('font_end/img/ข้าวสวย.png')}}"  width="200%" height="60%" alt=" alt=">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h1> ข้าวมีประโยชน์อย่างไร </h1>
            
            <ul>
            <h4> <li><i class="bi bi-check-circle"></i>ช่วยบำรุงร่างกาย เพิ่มพลังงานให้กับร่างกาย ฟื้นฟูกำลัง ป้องกันอาการอ่อนเพลีย (วิตามินบี 2)</li> </h4>
            <h4> <li><i class="bi bi-check-circle"></i> ช่วยเสริมสร้างการเจริญโตของร่างกาย</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ข้าวกล้องมีสารต่อต้านอนุมูลอิสระ ช่วยชะลอความแก่ชรา (ข้าวกล้องงอก)</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ช่วยบำรุงผิวพรรณให้เปล่งปลั่งสดใส (วิตามินอี)</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ข้าวกล้องมีวิตามินบี 3 ซึ่งบำรุงสุขภาพผิวหนังและลิ้นได้</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ช่วยเสริมสร้างการทำงานของระบบประสาท (โดยเฉพาะอย่างยิ่งข้าวกล้อง)</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ข้าวกล้องงอกช่วยป้องกันและลดโอกาสการเกิดโรคความจำเสื่อมหรือโรคอัลไซเมอร์</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ช่วยแก้อาการเบื่ออาหารได้ (วิตามินบี 2)</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ช่วยเสริมสร้างกระดูกและฟันให้แข็งแรง (ฟอสฟอรัส)</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ช่วยป้องกันและเสริมสร้างการสึกหรอของร่างกาย (โปรตีน)</li></h4>
            </ul>
           
           
          </div>
        </div>

      </div>
      </section><!-- End Menu Section -->

              <!-- ======= About Section3 ======= -->
              <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 ">
            <div class="about-img">
              <img src="{{asset('font_end/img/ผัก2.png')}}" width="100%" height="40%" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h1> ผักมีประโยชน์อย่างไร </h1>
            
            <ul>
            <h4>  <li><i class="bi bi-check-circle"></i>ช่วยเพิ่มความต้านทานโรคหวัดเจ็บคอ ภูมิแพ้</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ใช้ผลิตคอลลาเจน ช่วยให้เซลล์เกาะกันทำให้ผิวพรรณเต่งตึงสดใส</li></h4>
            <h4>  <li><i class="bi bi-check-circle"></i> ช่วยเม็ดเลือดแดงต่อสู้กับเชื้อโรค เป็นแผลหายเร็ว</li></h4>
            <h4>  <li><i class="bi bi-check-circle"></i> ช่วยให้การดูดซึมธาตุเหล็กและแคลเซียมของร่างกายเป็นไปด้วยดี</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ช่วยบำรุงระบบประสาท สมอง ทำให้มีสมาธิความจำดี</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> เปลี่ยนคาร์โบไฮเดรทให้เป็นพลังงาน</li></h4>
            <h4> <li><i class="bi bi-check-circle"></i> ช่วยต้านอนุมูลอิสระที่เป็นตัวทำลายเซลล์ ในร่างกาย</li></h4>
            <h4>  <li><i class="bi bi-check-circle"></i> ช่วยในระบบสายตาและการมองเห็น</li></h4>
            <h4>  <li><i class="bi bi-check-circle"></i> ช่วยทำให้เนื้อเยื่ออ่อนของเซลล์ และผิวหนังชุ่มชื้น</li></h4>
            <h4>  <li><i class="bi bi-check-circle"></i> ช่วยบำรุงกระดูก และฟัน</li></h4>
            </ul>
           
           
          </div>
        </div>

      </div>
      </section><!-- End About Section -->
    
  
    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h1>Organizer</h1>
          <p>Advisor</p>
          <div class="row">
          <div class="col-lg-12 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{asset('font_end/img/chefs/kuy.jpg')}}"width = "50%" height= "50%" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ms. Sirirat Muangthen</h4>
                  <span>Advisor</span>
                </div>
                
              </div>
            </div>
          </div>
          </div>
      
          <p>Member</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{asset('font_end/img/chefs/tae.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Kasidech Prasertsonk</h4>
                  <span>Front-End</span>
                </div>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{asset('font_end/img/chefs/non.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Nonthawat Phuetthonglang</h4>
                  <span>Back-End</span>
                </div>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{asset('font_end/img/chefs/j.PNG')}}" width = "100%" height= "100%" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Jirayuth Petchprapun</h4>
                  <span>Tester</span>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d968.1800057091211!2d100.41660100000001!3d13.915676!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc30657b7451468a3!2z4LmA4LiI4LmK4Lit4Lij4Lit4Liy4Lir4Liy4Lij4LiV4Liy4Lih4Liq4Lix4LmI4LiH!5e0!3m2!1sth!2sth!4v1629182914563!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen=" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>182/19 ม.5 ต.โสนลอย อ.บางบัวทอง จ.นนทบุรี 11110</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  จันทร์-อาทิตย์<br>
                  8.30โมง - 19.00ทุ่ม
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Eamil:</h4>
                <p>Jae191_Orn2510@hotmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>091-806-6475</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @extends('layouts.font_end.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('font_end/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('font_end/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('font_end/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('font_end/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('font_end/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('font_end/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('font_end/js/main.js')}}"></script>

</body>

</html>