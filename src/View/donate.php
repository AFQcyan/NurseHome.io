    <link rel="stylesheet" href="./resources/css/notice.css">
    <link rel="stylesheet" href="./resources/css/donate.css"> 
    <div class="notice-header">
        <p class="header-title">
            <strong>후원 및 자원봉사</strong>
        </p>
        <div class="btn-line">
            <input type="button" id="defaultOpen"name="infos" onclick="changeTab(event, 'donate')"class="col-xl-3 col-lg-4 col-md-4 col-sm-5 col-5 cng donate active " value="후원"/>
            <input type="button" name="infos" onclick="changeTab(event, 'volunteer')"class="col-xl-3 col-lg-4 col-md-4 col-sm-5 col-5 cng volunteer" value="자원봉사"/>
        </div>
    </div>     
    <div class="show donate tabcont" id="donate">
        <p class="donate title animate">
            <strong>어르신들 덕에 저희가 있을 수 있었습니다<br>
                이제, 저희가 어르신들을 도우겠습니다
            </strong>
        </p>
        <div class="donate layouts">
            <div class="donate intro layout row animate">
                <p class="donate intro subtitle col-lg-6 col-sm-12">
                    <strong>여러분이 원하는 방법</strong>으로<br>
                    어르신들의 따뜻한 지원자가 되어주세요
                </p>
                <div class="donate intro value col-lg-6 col-sm-12 row">
                    <div class="donate item money col-12 row">
                        <div class="donate item img col-lg-2 col-5">
                            <img src="./resources/img/moneyThang.png" class=""alt="">
                        </div>
                        <p class="money txt col-lg-9 col-6">
                            <strong>기금후원</strong><br>
                            어르신들의 일상생활에 사용될<br>
                            기금 후원
                        </p>                       
                    </div>
                    <div class="donate item gift col-12 row">
                        <div class="donate item img col-lg-2 col-5">
                            <img src="./resources/img/giftThang.png" class=""alt="">
                        </div>                   
                        <p class="money txt col-lg-9 col-6">
                            <strong>물품후원</strong><br>
                            기저귀,간식 등 어르신들의<br>
                            일상생활 용품 후원
                        </p>
                    </div>
                </div>
            </div>
            <div class="donate joinway layout row animate">
                <div class="donate joinway subtitle col-lg-5 col-sm-12">
                    <strong>확실한 사용처 공개</strong>로<br>
                    어르신들이 먼저 도움받을 수 있도록 노력하겠습니다
                </div>
                <div class="donate joinway value col-lg-7 col-sm-12">
                    <div class="donate item money">
                        <p class="money txt">
                            <strong>기금후원</strong><br>
                            - 아래 계좌로 자동이체 해주시면 됩니다.<br>
                            <span class="donate joinway account">> IS천사은행 123-00-123456</span><br>
                            - 후원해 주신 모든 금액은, 모두 어르신들의
                            생활에 사용됩니다. <br>
                            - <strong>연 4회 공지사항</strong> 을 통하여 후원금으로 진행된 사업의 소식을 받아보실 수 있습니다.
                        </p> 
                    </div>
                    <div class="donate item gift">
                        <p class="money txt">
                            <strong>물품후원</strong><br>
                            - 아래 주소로 배송해주시면 됩니다.<br>
                            <span class="donate joinway account">> 충북 증평군 증평읍 광장로 30 3층</span><br>
                            - 후원해 주신 모든 물품은 모두 <strong>어르신들의
                                생활용품</strong> 으로 사용됩니다.<br>
                            - <strong>연 4회 공지사항</strong> 을 통하여 후원물품의 사용 소식을 받아보실 수 있습니다.
                        </p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="show volunteer tabcont" id="volunteer">
        <p class="volun title">
            <strong>저희를 지켜주신 어르신들을 위해<br>
                행복과 재능을 나누어주세요
            </strong>
        </p>
        <div class="volun layouts">
            <div class="volun intro layout row">
                <p class="volun intro subtitle col-lg-6 col-sm-12">
                    <strong>여러분이 할 수 있는 방법</strong>으로<br>
                    어르신들에게 행복을 선물해주세요.
                </p>
                <div class="volun intro value col-lg-6 col-sm-12 row">
                    <div class="volun intro items row">
                        <div class="volun intro item col-6">
                            <div class="volun intro inner-item col-10">
                                <p>
                                    <strong>지원 봉사</strong><br>
                                    이/미용, 목욕, 주방 보조, 요리봉사, 일상생활 지원 및 정서지원
                                    과 같은 봉사자분들의 노력과 성실성이 필요한 봉사 분야입니다.
                                </p>
                            </div>
                        </div>
                        <div class="volun intro item col-6">
                            <div class="volun intro inner-item col-10">
                                <p>
                                    <strong>프로그램 봉사</strong><br>
                                    원예치료, 종교활동, 서예교실, 심리상담, 생신잔치와 같이
                                    특정 프로그램을 진행하는 형식의 봉사활동입니다.
                                </p>
                            </div>
                        </div>
                        <div class="volun intro item col-6">
                            <div class="volun intro inner-item col-10">
                                <p>
                                    <strong>공연 봉사</strong><br>
                                    위로 공연, 생신 축하 공연, 신년 축하 공연 과 같이
                                    봉사자분들의 예술성/음악성으로 공연을 하는 형식의 봉사활동입니다.
                                </p>
                            </div>
                        </div>
                        <div class="volun intro item col-6">
                            <div class="volun intro inner-item col-10">
                                <p>
                                    <strong>외적 봉사</strong><br>
                                    보호시설 홍보, 식자재 운반, 기자재 관리 와 같이
                                    보호시설의 전반적인 운영을 돕는 봉사활동입니다.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="volun sequence layout row">
                <div class="volun sequence subtitle col-xl-5 col-sm-12">
                    <strong>정확한 절차와 처리</strong>로<br>
                    봉사자들이 손해받지 않도록 하겠습니다.
                </div>
                <div class="volun sequence value col-xl-7 col-11">
                    <div class="volun sequence entrance">
                        <strong>자원봉사 사전 절차</strong>
                        <ul class="entrance_step">
                            <li>전화 및 방문 <span class="point_font">상담 신청</span></li>
                            <li>희망 봉사 분야 및<span class="point_font">일정 결정</span></li>
                            <li>자원봉사자 <span class="point_font">교육 실시</span></li>
                            <li>자원봉사<span class="point_font">실시</span></li>
                        </ul>         
                    </div>
                </div>
            </div>
            <div class="volun diagram row">

            </div>
        </div>
    </div>
</body>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="../../public/resources/js/index.js"></script>
</html>