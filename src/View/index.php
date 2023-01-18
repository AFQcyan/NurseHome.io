        <div class="section_wrap">
            <section class="main_area" id="visual">
                <!-- Slider main container -->
                <div class="main_swiper swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                        <div class="swiper-slide one">
                            <div class="tit_wrap">
                                <h2 class="tit">Premium<br>
                                    <span>Care Center</span></h2>
                                <p class="txt">다른 요양원과 차별화된 프리미엄 센터로<br>쾌적하고 편안한 센터 환경을 제공합니다.</p>
                            </div>
                        </div>
                        <div class="swiper-slide two">
                            <div class="tit_wrap">
                                <h2 class="tit">Natural<br>
                                    <span class="wht_font"> Walkway</span></h2>
                                <p class="txt">휴양지 같은 편안함과 안락함을 느낄 수 있도록<br>
                                    자연 친화적인 산책로를 제공합니다.</p>
                            </div>
                        </div>
                        <div class="swiper-slide three">
                            <div class="tit_wrap">
                                <h2 class="tit">Hotel Style<br>
                                    <span class="wht_font">Interior</span></h2>
                                <p class="txt">호텔식 인테리어를 모티브로 설계하여<br>
                                    보다 더 따뜻하고 안락한 환경을제공합니다.</p>
                            </div>
                        </div>
                        <div class="swiper-slide four">
                            <div class="tit_wrap">
                                <h2 class="tit">High Quality<br>
                                    <span class="point_font">Service</span></h2>
                                <p class="txt">품위를 지키며 편안하게 노후를 보내실 수 있도록<br>
                                    고품격 황혼 서비스를 제공합니다.</p>
                            </div>
                        </div>
                        <div class="swiper-slide five">
                            <div class="tit_wrap">
                                <h2 class="tit">Mind<br>
                                    <span class="wht_font">Healing</span></h2>
                                <p class="txt">품여유있고 편안한 마음 케어를 바탕으로<br>
                                    심화를 안정되게 치유하는 센터입니다.</p>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </section>
            <section class="info_area" data-aos="fade-up"
            data-aos-duration="3000">
                <div class="inner_wrap">
                    <em class="ico_info">
                        <img src="./resources/img/middleLogo.png" alt="">
                    </em>
                    <div class="tit_wrap align_c">
                        <h2 class="tit"><strong class="point_font">인삼골 주간 보호 센터</strong>는</h2>
                        <p class="txt">서울 근교(일산)에 위치하여 근거리에서 가족과 가까이 생활할 수 있습니다.<br>
                            의료·간호·주거를 위한 편리시설이 갖추어져 있으며, 전문적인 케어와 다양한 프로그램을 활용하여 건강한 활동과 삶의 질 향상을 위해 노력하고 있습니다.<br>
                            온돌시공, 냉·난방시설, 공기청정시설, 자연 산책로 완비로 쾌적하고 편안한 환경을 제공하는 프리미엄 케어 센터입니다.</p>
                    </div>
                    <div class="info-shower">
                        <div class="cont-notice" data-aos="fade-up" data-aos-duration="3000">
                            <div class="btn-line">
                                <input type="button" id="defaultOpen"name="infos" onclick="changeTab(event, 'notice')"class="cng notice active " value="공지사항"/>
                                <input type="button" name="infos" onclick="changeTab(event, 'news')"class="cng news" value="새소식"/>
                            </div>
                            <div class="show-values">
                                <div id="notice" class="values-notice tabcont">
                                    <div class="notice val-hdr">
                                        <span class="notice ht"><strong>공지사항</strong></span>
                                        <a href="/notice" class="notice look-more">공지 더보기</a>
                                    </div>
                                    <button class="value notice one" onclick = "location.href = '#' ">
                                        <span class="notice title"><strong>인삼골 주간보호센터에 오신걸 환영합니다.</strong></span>
                                        <span class="notice info">
                                            <span class="notice writer">작성자 : 원장 김빛나</span>
                                            <span class="notice date">작성일 : 2022-12-21</span>
                                        </span>
                                    </button>
                                    <button class="value notice two" onclick = "location.href = '#' ">
                                        <span class="notice title"><strong>방역수칙 완화에 따른 한시적 대면면회 허용 안내</strong></span>
                                        <span class="notice info">
                                            <span class="notice writer">작성자 : 관리팀 김수진</span>
                                            <span class="notice date">작성일 : 2022-12-20</span>
                                        </span>                                    
                                    </button>
                                    <button class="value notice three" onclick = "location.href = '#' ">
                                        <span class="notice title"><strong>2023년 장기요양 및 비급여비용 인상 안내</strong></span>
                                        <span class="notice info">
                                            <span class="notice writer">작성자 : 사무팀 이가은</span>
                                            <span class="notice date">작성일 : 2022-12-14</span>
                                        </span>                                    
                                    </button>
                                </div>
                                <div id="news" class="values-news tabcont display:none">
                                    <div class="news val-hdr">
                                        <span class="news ht"><strong>새소식</strong></span>
                                        <a href="/news" class="news look-more">새소식 더보기</a>
                                    </div>
                                    <button class="value news one" onclick = "location.href = '#' ">
                                        <span class="news title"><strong>1월 생신잔치 안내</strong></span>
                                        <span class="news info">
                                            <span class="news writer">작성자 : 행사팀 김연지</span>
                                            <span class="news date">작성일 : 2022-12-26</span>
                                        </span>
                                    </button>
                                    <button class="value news two" onclick = "location.href = '#' ">
                                        <span class="news title"><strong>크리스마스 이벤트 관련 안내</strong></span>
                                        <span class="news info">
                                            <span class="news writer">작성자 : 원장 김빛나</span>
                                            <span class="news date">작성일 : 2022-12-18</span>
                                        </span>                                    
                                    </button>
                                    <button class="value news three" onclick = "location.href = '#' ">
                                        <span class="news title"><strong>2023년 1분기 신규 입소예정자 명단</strong></span>
                                        <span class="news info">
                                            <span class="news writer">작성자 : 원장 김빛나</span>
                                            <span class="news date">작성일 : 2022-12-14</span>
                                        </span>                                    
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="cont-gal" data-aos="fade-up" data-aos-duration="3000">
                            <div class="gal-header">
                                <span class="gal-ht"><strong>한빛 갤러리</strong>
                                <a href="../View/gallary.html" class="gal-look-more">사진 더보기</a></span>
                            </div>
                            <div class="values-gal">
                                <div class="value-gal one">
                                    <button class="img-gal">
                                        <img src="./resources/img/img_service03.jpg" alt="">
                                        <p class="title-gal">보물찾기</p>
                                    </button>
                                </div>
                                <div class="value-gal two">
                                    <button class="img-gal">
                                        <img src="./resources/img/img_service04.jpg" alt="">
                                        <p class="title-gal">아침체조</p>
                                    </button>
                                </div>
                                <div class="value-gal three">
                                    <button class="img-gal">
                                        <img src="./resources/img/img_service01.jpg" alt="">
                                        <p class="title-gal">요리실습</p>
                                    </button>
                                </div>
                                <div class="value-gal four">
                                    <button class="img-gal">
                                        <img src="./resources/img/img_service06.jpg" alt="">
                                        <p class="title-gal">시설산책</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </section>
            <section class="service" data-aos="fade-up"
            data-aos-duration="3000">
                <div class="inner_wrap">
                    <div class="tit_wrap align_c">
                        <h2 class="tit"><strong>제공</strong>서비스</h2>
                    </div>
                    <ul class="service_list">
                        <li>
                            <div class="img">
                                <img src="./resources/img/img_service01.jpg" alt="">
                            </div>
                            <div class="txt_area">
                                <h3><strong class="point_font">건강</strong> 서비스</h3>
                                <p>풀무원 푸드머스를 통한<br>
                                    영양식단 운영 서비스</p>
                            </div>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./resources/img/img_service02.jpg" alt="">
                            </div>
                            <div class="txt_area">
                                <h3><strong class="point_font">재활</strong> 서비스</h3>
                                <p>보험치료 서비스 &<br> 
                                    일상생활 및 재활훈련 서비스 
                                    </p>
                            </div>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./resources/img/img_service03.jpg" alt="">
                            </div>
                            <div class="txt_area">
                                <h3><strong class="point_font">여가</strong> 서비스</h3>
                                <p>종교활동, 생신일 축하연,<br> 
                                    지역 연계 활동 지원</p>
                            </div>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./resources/img/img_service04.jpg" alt="">
                            </div>
                            <div class="txt_area">
                                <h3><strong class="point_font">인지 능력</strong> 서비스</h3>
                                <p>다양한 활동을 통한<br>
                                    치매예방 프로그램</p>
                            </div>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./resources/img/img_service05.jpg" alt="">
                            </div>
                            <div class="txt_area">
                                <h3><strong class="point_font">간호</strong> 서비스</h3>
                                <p>원내 상시 간호사를 통한<br>
                                    건강 체크 및 심리 관리</p>
                            </div>
                        </li>
                        <li>
                            <div class="img">
                                <img src="./resources/img/img_service06.jpg" alt="">
                            </div>
                            <div class="txt_area">
                                <h3><strong class="point_font">의료</strong> 서비스</h3>
                                <p>의료진의 지속적인 회진 및<br>
                                    보살핌 서비스</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="entrance" data-aos="fade-up"
            data-aos-duration="3000">
                <div class="inner_wrap">
                    <div class="tit_wrap align_c">
                        <h2 class="tit"><strong>입소 절차</strong> 안내</h2>
                        <p class="exp point_font">입소대상자</p>
                        <p class="txt">65세 이상 노인 또는 65세 미만 노인성질환을 가진자로서<br>
                            장기요양 1등급, 2등급, 시설급여가 가능한 3~5등급 어르신</p>
                    </div>
                    <ul class="entrance_step">
                        <li>전화 및 방문 <span class="point_font">상담</span></li>
                        <li>입소 <span class="point_font">신청</span></li>
                        <li>입소 <span class="point_font">대기</span></li>
                        <li>계약서 <span class="point_font">작성</span></li>
                        <li><span class="point_font">입소</span></li>
                    </ul>
                </div>
            </section>
            <section class="location" data-aos="fade-up"
            data-aos-duration="3000">
                <div class="tit_wrap align_c">
                    <h2 class="tit">
                        <strong>오시는 길</strong>
                    </h2>
                </div>
                <div class="map_area">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="100%" height="420" id="gmap_canvas" src="https://maps.google.com/maps?q=%EC%9D%BC%EC%82%B0%EB%8F%99%EA%B5%AC%20%EC%84%B1%EC%84%9D%EB%8F%99%20422-1&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
                <ul class="traffic_list">
                    <li class="subway">
                        <div class="icon_area">
                            <p>지하철 이용 시</p>
                        </div>
                        <div class="traffic_info">
                            <p>일산역 [2번 출구]</p>
                            <span>택시 14분 소요</span>
                        </div>
                    </li>
                    <li class="bus">
                        <div class="icon_area">
                            <p>버스 이용 시</p>
                        </div>
                        <div class="traffic_info">
                            <p>성석주유소 정거장 하차</p>
                            <span>[마을]034 · [마을]60</span>
                        </div>
                    </li>
                    <li class="car">
                        <div class="icon_area">
                            <p>자동차 이용 시</p>
                        </div>
                        <div class="traffic_info">
                            <p>네비게이션 ‘일산실버요양원’ 검색</p>
                            <span>경기 고양시 일산동구 성석동 422-1</span>
                            <span>경기도 고양시 일산동구 마골길 55(성석동)</span>
                        </div>
                    </li>
                </ul>
            </section>
        </div>
    </div>
    <div class="footer">
        <div class="inner_wrap">
            <div class="footer_logo">
                <img src="./resources/img/insamLogo.png" alt="">
            </div>
            <div class="footer_list">
                <ul>
                    <li>
                        <p>주소</p>
                        <div class="txt">
                            <span>경기 고양시 일산동구 성석동 422-4</span>
                            <span>경기도 고양시 일산동구 마골길 55(성석동)</span>
                        </div>
                    </li>
                    <li>
                        <p>전화</p>
                        <div class="txt">
                            <span>031-977-3100</span>
                        </div>
                    </li>
                    <li>
                        <p>FAX</p>
                        <div class="txt">
                            <span>031-977-3131</span>
                        </div>
                    </li><li>
                        <p>Email</p>
                        <div class="txt">
                            <span>insansilvernh@naver.com</span>
                        </div>
                    </li>
                </ul>
                <p class="copyright">
                    COPYRIGHT (C) 2022. 일산실버요양원. All rights reserved.
                </p>
            </div>
        </div>
        <div class="top_btn">
            <button type="button">top</button>
        </div>
    </div>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./../resources/js/index.js"></script>
    <script>
        const swiper = new Swiper('.main_swiper.swiper', {
        // Optional parameters
        loop: true,
        effect: 'fade',
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        });
        $('.top_btn button').click(function(){
            $('body').animate({
                scrollTop :0
            }, 1000)
        })
        AOS.init();
    </script>
</body>
</html>