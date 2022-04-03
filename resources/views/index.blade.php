@extends('layouts.master')

@section('title', 'Vigor Limited เป็นตัวแทนหนึ่งเดียวของภูมิภาคเอเชียตะวันออกเฉียงใต้ที่นำเข้าให้แบรนด์ที่มีคุณภาพอย่าง Icelandic Glacial, ROYAL JELLY , Rejuvis MCT, Helix and Askur เราอยากมอบผลิตภัณฑ์คุณภาพระดับพรีเมี่ยมที่ดีที่สุดในโลกให้กับคุณ')

@section('content')
    <div class="home-container">
        <section class="banner position-relative">
            <div class="img-item">
                <img src="{{ url('assets/images/banner.jpg') }}" alt="">
            </div>
            <div class="logo">
                <img src="{{ url('assets/images/logo-100.png') }}" alt="">
            </div>
            <div class="container">
                <div class="position-absolute top-50 translate-middle-y banner-text text-white">
                    <h1 class="ff-bold">Vigor Limited</h1>
                    <p>เป็นตัวแทนหนึ่งเดียวของภูมิภาคเอเชียตะวันออกเฉียงใต้ที่นำเข้าให้แบรนด์ ที่มีคุณภาพอย่าง Icelandic Glacial, ROYAL JELLY , Rejuvis MCT, Helix and Askur เราอยากมอบผลิตภัณฑ์คุณภาพระดับพรีเมี่ยมที่ดีที่สุด ในโลกให้กับคุณ</p>
                    <p>Vigor Limited is a representative in Southeast Asia that imports quality brands like Icelandic Glacial Natural Mineral water from Iceland, Royal Jelly Dietary supplements from New Zealand , OEM for Rejuvis MCT , Helix 7 and Askur Yggdrasil form Iceland. Our mission is to give you  best premium quality products of the world.</p>
                </div>
            </div>
        </section>

        <section class="home-body mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="item-box">
                            <img src="{{ url('assets/images/brand-1.jpg') }}" alt="">
                            <div class="desc mt-3">
                                <p><span class="ff-bold">Icelandic Glacial™</span> ถูกกลั่นกรองอย่างช้า ๆ ผ่านชั้นหินลาวา เป็นเวลา 5,000 ปี มีค่า pH ที่เป็นที่ต้องการสูงกว่าปกติที่ 8.4 ทำให้เป็นน้ำด่างตามธรรมชาติ</p>
                                <p class="ff-bold">Filtered slowly for 5,000 years through layers of lava rock, Icelandic Glacial™ possesses a highly desirable and uncommonly high pH of 8.4, making it naturally alkaline. Product made in and bottled  in Iceland.</p>
                            </div>
                            <button class="btn-visite">Visit Website</button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="item-box">
                            <img src="{{ url('assets/images/brand-2.jpg') }}" alt="">
                            <div class="desc mt-3">
                                <p><span class="ff-bold">Royal Jelly Plus Avocado Oil,</span> Lecithin, Vitamin B6 and Vitamin E ผลิตในนิวซีแลนด์ ช่วยให้ผิวเรียบเนียนและกระจ่างใสขึ้นเพิ่มการผลิตคอลลาเจนในผิว และยังช่วยปกป้องผิวจากผลกระทบของรังสีอัลตราไวโอเลตจากดวงอาทิตย์</p>
                                <p class="ff-bold">Royal Jelly Plus Avocado Oil, Lecithin, Vitamin B6 and Vitamin E. All produced in New Zealand. Helps the skin to be smoother and clearer. Boosting collagen production in the skin, royal jelly also helps to protect skin against the effects of ultraviolet radiation.</p>
                            </div>
                            <button class="btn-visite">Visit Website</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-w-g p-tb-3 mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="item-box">
                                <img src="{{ url('assets/images/brand-3.jpg') }}" alt="">
                                <div class="desc mt-3">
                                    <p><span class="ff-bold">MCTs 100%</span> สกัดจากน้ำมันมะพร้าวออร์แกนิก สกัดอย่างรวดเร็วและแปลงเป็นพลังงานสำหรับสมองและร่างกายของคุณ ยังช่วยให้ระบบเผาผลาญและสมองทำงานได้ดีขึ้น (ไม่มีส่วนผสมของน้ำมันปาล์ม)</p>
                                    <p class="ff-bold">100% MCTs Extracted from organic coconut oil. Quickly digested and converted into energy for your brain and body. Help metabolism and the brain to work better.  (No palm oil added). Product made in Thailand.</p>
                                </div>
                                <button class="btn-visite">Visit Website</button>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="item-box">
                                <img src="{{ url('assets/images/brand-4.jpg') }}" alt="">
                                <div class="desc mt-3">
                                    <p><span class="ff-bold">Helix  & Askur</span> ส่วนผสมที่ลงตัวของสุราคุณภาพสูงจากฝรั่งเศสและน้ำคุณภาพสูงจาก Icelandic Glacial Helix 7 และ Askur ได้รับความนิยม ค่า pH ที่สมดุลที่เหมาะสมที่ 7.4 ซึ่งไม่มีที่ไหนเคยทำมาก่อน ของการผสมผสานของสุราฝรั่งเศสและน้ำไอซ์แลนด์ ร่วมกันสร้าง DNA ของวอดก้าและจินระดับพรีเมียม</p>
                                    <p class="ff-bold">With this perfect blend of high-quality spirit from France and high quality water Icelandic Glacial Helix 7 and Askur hits the optimal balanced pH of 7.4 This never before made, blend of French spirits and Icelandic water, together creates the DNA of this ultra premium vodka and gin. Product made in and bottled  in Iceland .</p>
                                </div>
                                <button class="btn-visite">Visit Website</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container p-tb-3 ly-1-column">
                <div class="item-box">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('assets/images/brand-5.jpg') }}" alt="">
                        </div>
                        <div class="col-md-6 position-relative">
                            <div class="position-absolute top-50 translate-middle-y">
                                <p>
                                    <span class="d-block"><strong class="ff-bold fs-2">VGR</strong> ได้แต่งตั้ง <strong class="ff-bold fs-2">Rejuvis</strong></span>
                                    <strong class="d-block ff-bold">เป็นผู้จัดจำหน่ายผลิตภัณฑ์ทั้งหมดแต่เพียงผู้เดียว</strong>
                                </p>
                                <p class="ff-bold">Rejuvis Co., Ltd. has been appointed as the exclusive distributor at Thailand for our products</p>
                                <button class="btn-visite">Visit Website</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer bg-orange p-tb-1_5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <sytong class="d-block ff-bold">Vigor Limited</sytong>
                        <span>32, Moo 4, Tambon Donkrabuang, Ampur Banpong, Ratchaburi 70110, Thailand.</span>
                    </div>
                    <div class="col-md-3 col-sm-6 link-footer">
                        <div class="position-absolute top-50 translate-middle-y">
                            <div><strong class="ff-bold">E-mail : </strong><a href="mailto:siriwass@vgr.co.th">siriwass@vgr.co.th</a></div>
                            <div><strong class="ff-bold">E-mail : </strong><a href="mailto:siriwass@vigorltd.co">siriwass@vigorltd.co</a></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 link-footer">
                        <div class="position-absolute top-50 translate-middle-y">
                            <div><strong class="ff-bold">Website : </strong><a href="http://www.vgr.co.th" target="_blank">www.vgr.co.th</a></div>
                            <div><strong class="ff-bold">Website : </strong><a href="http://www.rejuvis.co.th" target="_blank">www.rejuvis.co.th</a></div>
                            <div><strong class="ff-bold">Website : </strong><a href="http://www.rejuvis.co.th/mctoil" target="_blank">www.rejuvis.co.th/mctoil</a></div>
                            <div><strong class="ff-bold">Website : </strong><a href="http://www.rejuvis.co.th/helix7" target="_blank">www.rejuvis.co.th/helix7</a></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 link-footer">
                        <div class="position-absolute top-50 translate-middle-y">
                            <div><strong class="ff-bold">Tel : </strong><a href="tel:+ 66 32 299288">+ 66 32 299288</a></div>
                            <div><strong class="ff-bold">Mobile : </strong><a href="tel:+66 61 1898656">+66 61 1898656</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
