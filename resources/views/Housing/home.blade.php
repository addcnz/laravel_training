@extends("housing.layout")

@section("main")
<div class="commCenter commWidth clearfix">
    <div class="serSelectBox clearfix">
        <div class="selectBtn ft-lt">
            <span class="seleTxt searchType">按地區</span>
            <ul data-type="types" id="searchWay" class="unfoldDiv clearfix isShow" style="display: none;">
                <li><a google-data-stat="新房屋首頁_頂部_按地區" data-type="0" paramid="" data-info="areasBox" href="javascript:;">按地區</a></li>
                <li><a google-data-stat="新房屋首頁_頂部_按捷運" data-type="1" paramid="" data-info="subWayBox" href="javascript:;">按捷運</a></li>
            </ul>
        </div>
        <div id="areasBox" class="selectBtn ft-lt">
            <span class="seleTxt">台北市</span>
            <div data-type="region" id="areas" class="areas seleTxt w475 isShow" style="display: none;"><dl class="clearfix"><dt><a google-data-stat="新房屋首頁_條件搜尋_北部" target="_blank" href="/housing-list-1.html?area=1">北部</a></dt><dd><ul class="clearfix"><li><a data-id="1" href="javascript:;">台北市</a></li><li><a data-id="3" href="javascript:;">新北市</a></li><li><a data-id="6" href="javascript:;">桃園市</a></li><li><a data-id="4" href="javascript:;">新竹市</a></li><li><a data-id="5" href="javascript:;">新竹縣</a></li><li><a data-id="21" href="javascript:;">宜蘭縣</a></li><li><a data-id="2" href="javascript:;">基隆市</a></li></ul></dd></dl><dl class="clearfix"><dt><a google-data-stat="新房屋首頁_條件搜尋_中部" target="_blank" href="/housing-list-1.html?area=2">中部</a></dt><dd><ul class="clearfix"><li><a data-id="8" href="javascript:;">台中市</a></li><li><a data-id="10" href="javascript:;">彰化縣</a></li><li><a data-id="14" href="javascript:;">雲林縣</a></li><li><a data-id="7" href="javascript:;">苗栗縣</a></li><li><a data-id="11" href="javascript:;">南投縣</a></li></ul></dd></dl><dl class="clearfix"><dt><a google-data-stat="新房屋首頁_條件搜尋_南部" target="_blank" href="/housing-list-1.html?area=3">南部</a></dt><dd><ul class="clearfix"><li><a data-id="15" href="javascript:;">台南市</a></li><li><a data-id="17" href="javascript:;">高雄市</a></li><li><a data-id="12" href="javascript:;">嘉義市</a></li><li><a data-id="13" href="javascript:;">嘉義縣</a></li><li><a data-id="19" href="javascript:;">屏東縣</a></li></ul></dd></dl><dl class="clearfix"><dt><a google-data-stat="新房屋首頁_條件搜尋_東部" target="_blank" href="/housing-list-1.html?area=4">東部</a></dt><dd><ul class="clearfix"><li><a data-id="22" href="javascript:;">台東縣</a></li><li><a data-id="23" href="javascript:;">花蓮縣</a></li><li><a data-id="24" href="javascript:;">澎湖縣</a></li><li><a data-id="25" href="javascript:;">金門縣</a></li><li><a data-id="26" href="javascript:;">連江縣</a></li></ul></dd></dl><dl class="clearfix"><dd><span class="fc-gry">所有地區：</span><a google-data-stat="新房屋首頁_條件搜尋_全台灣" target="_blank" href="/housing-list-1.html?area=5">全台灣</a></dd></dl></div>
        </div>
        <div id="subWayBox" class="selectBtn ft-lt disHidden">
            <span class="seleTxt">台北捷運</span>
            <ul data-type="city" id="metros" class="unfoldDiv clearfix isShow">
                <li><a data-id="1" href="javascript:;">台北捷運</a></li>
                <li><a data-id="2" href="javascript:;">高雄捷運</a></li>
            </ul>
        </div>
        <div id="villagesBox" class="selectBtn ft-lt">
            <span class="seleTxt">鄉鎮</span>
            <div data-type="section" id="villages" class="areas seleTxt w475 isShow" style="display: none;"><p class="clearfix conHeader">請選擇下面的鄉鎮！<input type="button" id="areabox-many-y" value="確定"><a class="ft-rt allCon" id="allCon" href="javascript:;">不限鄉鎮</a></p><ul class="checkBoxContainer clearfix"><li><label><input type="checkbox" value="3" name="villages"><span class="checkText">中山區</span></label></li><li><label><input type="checkbox" value="5" name="villages"><span class="checkText">大安區</span></label></li><li><label><input type="checkbox" value="7" name="villages"><span class="checkText">信義區</span></label></li><li><label><input type="checkbox" value="4" name="villages"><span class="checkText">松山區</span></label></li><li><label><input type="checkbox" value="10" name="villages"><span class="checkText">內湖區</span></label></li><li><label><input type="checkbox" value="8" name="villages"><span class="checkText">士林區</span></label></li><li><label><input type="checkbox" value="1" name="villages"><span class="checkText">中正區</span></label></li><li><label><input type="checkbox" value="12" name="villages"><span class="checkText">文山區</span></label></li><li><label><input type="checkbox" value="9" name="villages"><span class="checkText">北投區</span></label></li><li><label><input type="checkbox" value="11" name="villages"><span class="checkText">南港區</span></label></li><li><label><input type="checkbox" value="2" name="villages"><span class="checkText">大同區</span></label></li><li><label><input type="checkbox" value="6" name="villages"><span class="checkText">萬華區</span></label></li></ul></div>
        </div>
        <div id="stationBox" class="selectBtn ft-lt disHidden">
            <span class="seleTxt">站點</span>
            <div class="stationDetailInfo clearfix isShow">
                <ul class="station"><li class=""><a data-pid="1" data-id="100" href="javascript:;">文山內湖線</a></li><li class=""><a data-pid="2" data-id="125" href="javascript:;">淡水線</a></li><li class=""><a data-pid="3" data-id="148" href="javascript:;">小南門線</a></li><li class=""><a data-pid="4" data-id="152" href="javascript:;">新店線</a></li><li class=""><a data-pid="5" data-id="162" href="javascript:;">中和線</a></li><li class=""><a data-pid="6" data-id="168" href="javascript:;">南港線</a></li><li class=""><a data-pid="7" data-id="181" href="javascript:;">板橋線</a></li><li class=""><a data-pid="8" data-id="187" href="javascript:;">土城線</a></li><li class=""><a data-pid="9" data-id="192" href="javascript:;">小碧潭支線</a></li><li class=""><a data-pid="10" data-id="195" href="javascript:;">新北投支線</a></li><li class=""><a data-pid="11" data-id="198" href="javascript:;">信義線</a></li><li class=""><a data-pid="12" data-id="206" href="javascript:;">松山線</a></li><li class=""><a data-pid="13" data-id="215" href="javascript:;">新莊線</a></li><li class=""><a data-pid="14" data-id="232" href="javascript:;">蘆洲線</a></li></ul>
                <ul class="stationDetail clearfix"><li class="active"><a data-id="0" href="javascript:;">站點不限</a></li><li class="active"><a data-id="false" href="javascript:;">南港展覽館</a></li><li class="active"><a data-id="false" href="javascript:;">南港軟體園</a></li><li class="active"><a data-id="false" href="javascript:;">東湖站</a></li><li class="active"><a data-id="false" href="javascript:;">葫洲站</a></li><li class="active"><a data-id="false" href="javascript:;">大湖公園</a></li><li class="active"><a data-id="false" href="javascript:;">內湖站</a></li><li class="active"><a data-id="false" href="javascript:;">文德站</a></li><li class="active"><a data-id="false" href="javascript:;">港乾站</a></li><li class="active"><a data-id="false" href="javascript:;">西湖站</a></li><li class="active"><a data-id="false" href="javascript:;">劍南路站</a></li><li class="active"><a data-id="false" href="javascript:;">大直站</a></li><li class="active"><a data-id="false" href="javascript:;">松山機場</a></li><li class="active"><a data-id="false" href="javascript:;">中山國中</a></li><li class="active"><a data-id="false" href="javascript:;">南京東路</a></li><li class="active"><a data-id="false" href="javascript:;">忠孝復興</a></li><li class="active"><a data-id="false" href="javascript:;">大安站</a></li><li class="active"><a data-id="false" href="javascript:;">科技大樓</a></li><li class="active"><a data-id="false" href="javascript:;">六張犁站</a></li><li class="active"><a data-id="false" href="javascript:;">麟光站</a></li><li class="active"><a data-id="false" href="javascript:;">辛亥站</a></li><li class="active"><a data-id="false" href="javascript:;">萬芳醫院</a></li><li class="active"><a data-id="false" href="javascript:;">萬芳社區</a></li><li class="active"><a data-id="false" href="javascript:;">木柵站</a></li><li class="active"><a data-id="false" href="javascript:;">動物園站</a></li></ul>
            </div>
        </div>
        <div class="selectBtn ft-lt">
            <span class="seleTxt">單價</span>
            <ul data-type="price" class="unfoldDiv clearfix isShow filter" style="display: none;">
                <li><a data-id="0" href="javascript:;">不限</a></li>
                <li><a data-id="1" href="javascript:;">15萬以下</a></li>
                <li><a data-id="2" href="javascript:;">15-50萬</a></li>
                <li><a data-id="3" href="javascript:;">50-100萬</a></li>
                <li><a data-id="5" href="javascript:;">100萬以上</a></li>
            </ul>
        </div>
        <div class="selectBtn ft-lt">
            <span class="seleTxt">格局</span>
            <ul data-type="room" class="unfoldDiv clearfix isShow filter" style="display: none;">
                <li><a data-id="0" href="javascript:;">不限</a></li>
                <li><a data-id="1" href="javascript:;">1房</a></li>
                <li><a data-id="2" href="javascript:;">2房</a></li>
                <li><a data-id="3" href="javascript:;">3房</a></li>
                <li><a data-id="4" href="javascript:;">4房以上</a></li>
            </ul>
        </div>
<!--        <div class="selectBtn ft-lt">-->
<!--            <span class="seleTxt">發售時間</span>-->
<!--            <ul class="unfoldDiv clearfix isShow">-->
<!--                <li><a href="javascript:;">不限</a></li>-->
<!--                <li><a href="javascript:;">預售屋</a></li>-->
<!--                <li><a href="javascript:;">新成屋</a></li>-->
<!--                <li><a href="javascript:;">建構中</a></li>-->
<!--            </ul>-->
<!--        </div>-->

        <a google-data-stat="新房屋首頁_條件搜尋_搜尋" class="ft-lt serBtn" href="javascript:;">搜尋</a>
        <div class="hotSearch ft-lt">
            <span>熱門搜尋：</span>
                    </div>
    </div>
    <div class="clearH20"></div>
    <div class="rightArea">
        <div id="rightArea">
            <a google-data-stat="新房屋首頁_頂部_免費刊登建案" target="_blank" class="freeBuildCase" href="//www.dev.591.com.tw/index.php?module=housing&amp;action=housing"><i class="feerBuildIcon"></i>免費刊登建案</a>
                        <div class="rightAd1">
                <div id="PAGE_AD_60"><a style="display:block;" title="" target="_blank" href="https://tajs.591.com.tw/ck.php?oaparams=2__bannerid=818__zoneid=60__cb=c4a8358f5d__oadest=http%3A%2F%2Fh.591.com.tw%2Fhousing-detail-105911.html"><img border="0" height="250" width="300" title="" alt="" src="https://tp1.591.com.tw/fd1b81c33c459e0531e484764a7bccdf.jpg"></a><div id="beacon_c4a8358f5d" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img height="0" width="0" style="width: 0px; height: 0px;" alt="" src="https://tajs.591.com.tw/lg.php?bannerid=818&amp;campaignid=3&amp;zoneid=60&amp;loc=https%3A%2F%2Fh.dev.591.com.tw%2F&amp;cb=c4a8358f5d&amp;loc=https://h.dev.591.com.tw/c4a8358f5d"></div></div>
            </div>
            <!--優惠個案-->
            <div class="renPubSaleBox">
                <div class="renHeader">
                    優惠個案
                </div>
                <div class="shippingList">

                                            <div class="shippItemBox">
                            <span class="shippHead"></span>
                            <a google-data-stat="新房屋首頁_優惠個案_優惠個案1" href="./housing-detail-103568.html" target="_blank">112121212：11111</a>
                        </div>
                                            <div class="shippItemBox">
                            <span class="shippHead"></span>
                            <a google-data-stat="新房屋首頁_優惠個案_優惠個案2" href="./housing-detail-103559.html" target="_blank">啊實打實的我：實打實的</a>
                        </div>
                                            <div class="shippItemBox">
                            <span class="shippHead"></span>
                            <a google-data-stat="新房屋首頁_優惠個案_優惠個案3" href="./housing-detail-103583.html" target="_blank">2323：1</a>
                        </div>
                                            <div class="shippItemBox">
                            <span class="shippHead"></span>
                            <a google-data-stat="新房屋首頁_優惠個案_優惠個案4" href="./housing-detail-103520.html" target="_blank">收到223：墊底檔</a>
                        </div>
                                            <div class="shippItemBox">
                            <span class="shippHead"></span>
                            <a google-data-stat="新房屋首頁_優惠個案_優惠個案5" href="./housing-detail-103548.html" target="_blank">阿薩德等等等等等等：阿薩德等等等等等等等等等等等等</a>
                        </div>
                                            <div class="shippItemBox">
                            <span class="shippHead"></span>
                            <a google-data-stat="新房屋首頁_優惠個案_優惠個案6" href="./housing-detail-103519.html" target="_blank">国玺一城65465：123</a>
                        </div>
                                            <div class="shippItemBox">
                            <span class="shippHead"></span>
                            <a google-data-stat="新房屋首頁_優惠個案_優惠個案7" href="./housing-detail-103514.html" target="_blank">123123123：456</a>
                        </div>
                                    </div>
            </div>
            <div class="rightAd1">
                <div id="PAGE_AD_278"></div>
            </div>
            <div class="rightAd1">
                <div id="PAGE_AD_286"><a style="display:block;" title="" target="_blank" href="https://tajs.591.com.tw/ck.php?oaparams=2__bannerid=1502__zoneid=286__cb=6e5552d390__oadest=http%3A%2F%2Fdesign.591.com.tw%2Fdesign-protectIndex.html%3Faid%3D1903"><img border="0" height="250" width="300" title="" alt="" src="https://tp1.591.com.tw/f671c9832701bb7aefa67fbbd7f1a366.jpg"></a><div id="beacon_6e5552d390" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img height="0" width="0" style="width: 0px; height: 0px;" alt="" src="https://tajs.591.com.tw/lg.php?bannerid=1502&amp;campaignid=2&amp;zoneid=286&amp;loc=https%3A%2F%2Fh.dev.591.com.tw%2F&amp;cb=6e5552d390&amp;loc=https://h.dev.591.com.tw/6e5552d390"></div></div>
            </div>
            <!--購房工具-->
            <div class="renPubSaleBox">
                <div class="renHeader">
                    購房工具
                </div>
                <div class="buyHouseTools">
                    <ul class="clearfix">
                        <li>
                            <a google-data-stat="新房屋首頁_購房工具_房價走勢" target="_blank" class="toolLink" href="//www.dev.591.com.tw/webService-marketSale.html">
                                <img height="30" width="30" alt="房價走勢" src="//www.dev.591.com.tw/images/index/housing/indexNew/priceTrend.png">
                                <p>房價走勢</p>
                            </a>
                        </li>
                        <li>
                            <a google-data-stat="新房屋首頁_購房工具_新屋報價" target="_blank" class="toolLink" href="https://h.dev.591.com.tw/housing-priceAll.html">
                                <img height="30" width="30" alt="新屋報價" src="//www.dev.591.com.tw/images/index/housing/indexNew/newHouseOffer.png">
                                <p>新屋報價</p>
                            </a>
                        </li>
                        <li>
                            <a google-data-stat="新房屋首頁_購房工具_房貸試算" target="_blank" class="toolLink" href="//www.dev.591.com.tw/housing-fdss.html">
                                <img height="30" width="30" alt="房貸試算" src="//www.dev.591.com.tw/images/index/housing/indexNew/mortgageSpreadsheet.png">
                                <p>房貸試算</p>
                            </a>
                        </li>
                        <li>
                            <a google-data-stat="新房屋首頁_購房工具_本月發售" target="_blank" class="toolLink" href="https://h.dev.591.com.tw/housing-list.html?now=1">
                                <img height="30" width="30" alt="本月發售" src="//www.dev.591.com.tw/images/index/housing/indexNew/monthOffer.png">
                                <p>本月發售</p>
                            </a>
                        </li>
                        <li>
                            <a google-data-stat="新房屋首頁_購房工具_訂閱新屋" target="_blank" class="toolLink" href="https://h.dev.591.com.tw/mailPaper-addCasePaper.html">
                                <img height="30" width="30" alt="訂閱新屋" src="//www.dev.591.com.tw/images/index/housing/indexNew/sbscribeNewHome.png">
                                <p>訂閱新屋</p>
                            </a>
                        </li>
                        <li>
                            <a google-data-stat="新房屋首頁_購房工具_實價登錄" target="_blank" class="toolLink" href="http://price.591.com.tw/">
                                <img height="30" width="30" alt="實價登錄" src="//www.dev.591.com.tw/images/index/housing/indexNew/nettLogin.png">
                                <p>實價登錄</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="rightAd1">
                <div id="PAGE_AD_290"><a style="display:block;" title="" target="_blank" href="https://tajs.591.com.tw/ck.php?oaparams=2__bannerid=1506__zoneid=290__cb=5df0ed9888__oadest=http%3A%2F%2Fdesign.591.com.tw%2Findex.php%3Fmodule%3Dactivity%26action%3DprotectTrap"><img border="0" height="250" width="300" title="" alt="" src="https://tp1.591.com.tw/1781c7c69603324e37989ca031a53121.jpg"></a><div id="beacon_5df0ed9888" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img height="0" width="0" style="width: 0px; height: 0px;" alt="" src="https://tajs.591.com.tw/lg.php?bannerid=1506&amp;campaignid=2&amp;zoneid=290&amp;loc=https%3A%2F%2Fh.dev.591.com.tw%2F&amp;cb=5df0ed9888&amp;loc=https://h.dev.591.com.tw/5df0ed9888"></div></div>
            </div>
        </div>
    </div>
    <div id="leftArea" class="leftArea ft-lt">
        <!--banner區-->
        <div class="bigBann ft-lt">
            <ul class="clearfix bannerImg">
                                                    <li>
                        <div id="PAGE_AD_242"><a style="display:block;" title="早安清境：鄰近汐科火車站.優質學區及公園綠地" target="_blank" href="https://tajs.591.com.tw/ck.php?oaparams=2__bannerid=1390__zoneid=242__cb=ab7ee8c624__oadest=http%3A%2F%2Fh.591.com.tw%2Fhousing-detail-105828.html"><img border="0" height="440" width="660" title="" alt="早安清境：鄰近汐科火車站.優質學區及公園綠地" src="https://tp1.591.com.tw/aa3cf6bebe3e7296864fbe2085a28ec8.jpg"></a><div id="beacon_ab7ee8c624" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img height="0" width="0" style="width: 0px; height: 0px;" alt="" src="https://tajs.591.com.tw/lg.php?bannerid=1390&amp;campaignid=2&amp;zoneid=242&amp;loc=https%3A%2F%2Fh.dev.591.com.tw%2F&amp;cb=ab7ee8c624&amp;loc=https://h.dev.591.com.tw/ab7ee8c624"></div></div>
                        <p id="PAGE_ALT_242" class="bottomShad">早安清境：鄰近汐科火車站.優質學區及公園綠地</p>
                    </li>
                                    <li>
                        <div id="PAGE_AD_250"><a style="display:block;" title="豐采系列鶯歌站前低公設" target="_blank" href="https://tajs.591.com.tw/ck.php?oaparams=2__bannerid=1366__zoneid=250__cb=dd6035caa5__oadest=http%3A%2F%2Fwww.591.com.tw%2Factivity-adSplit.html"><img border="0" height="440" width="660" title="" alt="豐采系列鶯歌站前低公設" src="https://tp1.591.com.tw/4f84b5e6e22eaae8b8114a1f4dd384ec.jpg"></a><div id="beacon_dd6035caa5" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img height="0" width="0" style="width: 0px; height: 0px;" alt="" src="https://tajs.591.com.tw/lg.php?bannerid=1366&amp;campaignid=3&amp;zoneid=250&amp;loc=https%3A%2F%2Fh.dev.591.com.tw%2F&amp;cb=dd6035caa5&amp;loc=https://h.dev.591.com.tw/dd6035caa5"></div></div>
                        <p id="PAGE_ALT_250" class="bottomShad">豐采系列鶯歌站前低公設</p>
                    </li>
                                    <li>
                        <div id="PAGE_AD_246"><a style="display:block;" title="長虹陶都：預售付款輕鬆 ＋ 工程零付款更是貼心。" target="_blank" href="https://tajs.591.com.tw/ck.php?oaparams=2__bannerid=1394__zoneid=246__cb=3ee77160e1__oadest=http%3A%2F%2Fh.591.com.tw%2Fhousing-detail-105078.html"><img border="0" height="440" width="660" title="" alt="長虹陶都：預售付款輕鬆 ＋ 工程零付款更是貼心。" src="https://tp1.591.com.tw/4013ba4fe0006134ec82e7896eda5856.jpg"></a><div id="beacon_3ee77160e1" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img height="0" width="0" style="width: 0px; height: 0px;" alt="" src="https://tajs.591.com.tw/lg.php?bannerid=1394&amp;campaignid=2&amp;zoneid=246&amp;loc=https%3A%2F%2Fh.dev.591.com.tw%2F&amp;cb=3ee77160e1&amp;loc=https://h.dev.591.com.tw/3ee77160e1"></div></div>
                        <p id="PAGE_ALT_246" class="bottomShad">長虹陶都：預售付款輕鬆 ＋ 工程零付款更是貼心。</p>
                    </li>
                                    <li>
                        <div id="PAGE_AD_254"><a style="display:block;" title="「運動時代」新北市新莊區，單價：50~52 萬/坪" target="_blank" href="https://tajs.591.com.tw/ck.php?oaparams=2__bannerid=1370__zoneid=254__cb=3a3b9e72f8__oadest=http%3A%2F%2Fwww.591.com.tw%2Fhousing-detail-105743.html"><img border="0" height="440" width="660" title="" alt="「運動時代」新北市新莊區，單價：50~52 萬/坪" src="https://tp1.591.com.tw/fac3e210f3e55a8e2a3c129d7f363177.jpg"></a><div id="beacon_3a3b9e72f8" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img height="0" width="0" style="width: 0px; height: 0px;" alt="" src="https://tajs.591.com.tw/lg.php?bannerid=1370&amp;campaignid=3&amp;zoneid=254&amp;loc=https%3A%2F%2Fh.dev.591.com.tw%2F&amp;cb=3a3b9e72f8&amp;loc=https://h.dev.591.com.tw/3a3b9e72f8"></div></div>
                        <p id="PAGE_ALT_254" class="bottomShad">「運動時代」新北市新莊區，單價：50~52 萬/坪</p>
                    </li>
                            </ul>
            <ul class="clearfix bannerIndx">
                                    <li>
                        <a class="active" href="javascript:;"></a>
                    </li>
                                    <li>
                        <a href="javascript:;"></a>
                    </li>
                                    <li>
                        <a href="javascript:;"></a>
                    </li>
                                    <li>
                        <a href="javascript:;"></a>
                    </li>
                            </ul>
        </div>
        <div class="smallBann ft-lt">
            <div id="PAGE_AD_258"><div class="little_ad"><a style="display:block;" title="" target="_blank" href="https://tajs.591.com.tw/ck.php?oaparams=2__bannerid=1374__zoneid=258__cb=d985d13cb4__oadest=http%3A%2F%2Fh.591.com.tw%2Fhousing-detail-105667.html"><img border="0" height="145" width="220" title="" alt="" src="https://tp1.591.com.tw/50534102b17268f7da75b992030fc0f1.jpg"></a><a href="http://tajs.591.com.tw/ck.php?oaparams=2__bannerid=1374__zoneid=258__cb=0a07b6e993__oadest=http://h.591.com.tw/housing-detail-105667.html" target="_blank"><div class="sBottomShad comFont">
                    <p>昇捷非凡</p>
                    <p>
                        <span class="ft-lt">桃園市桃園區</span>
                        <span class="ft-rt">40~43 萬/坪</span>
                    </p>
                </div></a>
</div><div id="beacon_d985d13cb4" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img height="0" width="0" style="width: 0px; height: 0px;" alt="" src="https://tajs.591.com.tw/lg.php?bannerid=1374&amp;campaignid=2&amp;zoneid=258&amp;loc=https%3A%2F%2Fh.dev.591.com.tw%2F&amp;cb=d985d13cb4&amp;loc=https://h.dev.591.com.tw/d985d13cb4"></div></div>
            <div id="PAGE_AD_262"><div class="little_ad"><a style="display:block;" title="" target="_blank" href="https://tajs.591.com.tw/ck.php?oaparams=2__bannerid=1378__zoneid=262__cb=e7ff38a048__oadest=http%3A%2F%2Fh.591.com.tw%2Fhousing-detail-105664.html"><img border="0" height="145" width="220" title="" alt="" src="https://tp1.591.com.tw/bbe5150aa9bbc06960c563d1c0ef9239.jpg"></a> <a href="http://tajs.591.com.tw/ck.php?oaparams=2__bannerid=1378__zoneid=262__cb=926767c3e9__oadest=http://h.591.com.tw/housing-detail-105664.html" target="_blank"><div class="sBottomShad comFont">
                    <p>重揚官邸</p>
                    <p>
                        <span class="ft-lt">新北市三重區</span>
                        <span class="ft-rt">50~58萬/坪</span>
                    </p>
                </div>
</a></div><div id="beacon_e7ff38a048" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img height="0" width="0" style="width: 0px; height: 0px;" alt="" src="https://tajs.591.com.tw/lg.php?bannerid=1378&amp;campaignid=2&amp;zoneid=262&amp;loc=https%3A%2F%2Fh.dev.591.com.tw%2F&amp;cb=e7ff38a048&amp;loc=https://h.dev.591.com.tw/e7ff38a048"></div></div>
            <div id="PAGE_AD_266"><div class="little_ad"><a style="display:block;" title="" target="_blank" href="https://tajs.591.com.tw/ck.php?oaparams=2__bannerid=1382__zoneid=266__cb=f568f2bd0d__oadest=http%3A%2F%2Fh.591.com.tw%2Fhousing-detail-105707.html"><img border="0" height="145" width="220" title="" alt="" src="https://tp1.591.com.tw/49ed4e0d345176dd86bc04ca6302de07.jpg"></a><a href="http://tajs.591.com.tw/ck.php?oaparams=2__bannerid=1382__zoneid=266__cb=84b5b8fac7__oadest=http://h.591.com.tw/housing-detail-105707.html" target="_blank"><div class="sBottomShad comFont">
                    <p>樂HOUSE</p>
                    <p>
                        <span class="ft-lt">新北市五股區</span>
                        <span class="ft-rt">33~35萬/坪</span>
                    </p>
                </div></a></div><div id="beacon_f568f2bd0d" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img height="0" width="0" style="width: 0px; height: 0px;" alt="" src="https://tajs.591.com.tw/lg.php?bannerid=1382&amp;campaignid=2&amp;zoneid=266&amp;loc=https%3A%2F%2Fh.dev.591.com.tw%2F&amp;cb=f568f2bd0d&amp;loc=https://h.dev.591.com.tw/f568f2bd0d"></div></div>
        </div>
        <div class="clear"></div>
        <!--熱銷建案-->
        <div class="commheader clearfix">
            <h2 class="headerTitle ft-lt active">
                熱銷建案
            </h2>
            <div class="hotLinks ft-lt">
                <a google-data-stat="新房屋首頁_更多建案_內湖區" target="_blank" class="hotLink" href="/housing-list-1-10.html">內湖區</a><a google-data-stat="新房屋首頁_更多建案_文山區" target="_blank" class="hotLink" href="/housing-list-1-12.html">文山區</a><a google-data-stat="新房屋首頁_更多建案_士林區" target="_blank" class="hotLink" href="/housing-list-1-8.html">士林區</a><a google-data-stat="新房屋首頁_更多建案_中山區" target="_blank" class="hotLink" href="/housing-list-1-3.html">中山區</a><a google-data-stat="新房屋首頁_更多建案_南港區" target="_blank" class="hotLink" href="/housing-list-1-11.html">南港區</a><a google-data-stat="新房屋首頁_更多建案_北投區" target="_blank" class="hotLink" href="/housing-list-1-9.html">北投區</a><a google-data-stat="新房屋首頁_更多建案_大安區" target="_blank" class="hotLink" href="/housing-list-1-5.html">大安區</a><a google-data-stat="新房屋首頁_更多建案_中正區" target="_blank" class="hotLink" href="/housing-list-1-1.html">中正區</a><a google-data-stat="新房屋首頁_更多建案_大同區" target="_blank" class="hotLink" href="/housing-list-1-2.html">大同區</a>                <a target="_blank" class="getMore" href="https://h.dev.591.com.tw/housing-list-1.html">更多&gt;&gt;</a>
            </div>
        </div>
        <div class="adsBox">
            <ul class="clearfix adImgList">
                                        <li>
                            <a alt="11111dfads" google-data-stat="新房屋首頁_熱銷建案_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-105225.html">
                                <img height="182" width="272" alt="" src="https://cp2.dev.591.com.tw/ware/01/59/17/53/dblo_144834776032125307.jpg.374x269.jpg?m=OGJNRU5ib1RxZWcxUjdieCtXcmYrZ2xTUHFDQUtmQktNdnl1S0tzdnNVYnRBWWVIZUFkSEN6blJIeThTYlJv">
                                <p class="adInfoShad">
                                    <span class="ft-lt">11111dfads</span>
                                    <span class="ft-rt">11~44<span class="unite">萬/坪</span></span>
                                </p>
                            </a>
                            <div class="clearH5"></div>
                            <p class="detailBox comFont">
                                <span class="ft-lt">主力坪數：444坪</span>
                                <span class="ft-rt">人氣：<em class="orgColor">75</em>人</span>
                            </p>
                            <p class="detailBox comFont">
                                建案地址：台北市中山區一高1巷1弄                            </p>
                        </li>
                                        <li>
                            <a alt="空中城堡" google-data-stat="新房屋首頁_熱銷建案_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-103619.html">
                                <img height="182" width="272" alt="" src="https://cp2.dev.591.com.tw/ware/00/01/20/99/dblo_144168627119772501.jpg.374x269.jpg?m=L09BRlplMFdyT3MxUjdieCtXcmYrZ0JYTXFHRktQRklPZnFyTDYwdnQwYnRBWWVIZUFkQUFqSGZWbUJX">
                                <p class="adInfoShad">
                                    <span class="ft-lt">空中城堡</span>
                                    <span class="ft-rt">待定</span>
                                </p>
                            </a>
                            <div class="clearH5"></div>
                            <p class="detailBox comFont">
                                <span class="ft-lt">主力坪數：1400坪</span>
                                <span class="ft-rt">人氣：<em class="orgColor">169</em>人</span>
                            </p>
                            <p class="detailBox comFont">
                                建案地址：台北市中山區中山北路三段11巷1弄                            </p>
                        </li>
                                        <li>
                            <a alt="112121212" google-data-stat="新房屋首頁_熱銷建案_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-103568.html">
                                <img height="182" width="272" alt="" src="https://cp2.dev.591.com.tw/ware/01/59/17/53/dblo_144964099856502206.jpg.374x269.jpg?m=K0xSZllycEQvN28xUjdieCtXcmYrZ2hYUHFlT0p2aE1OdmlzTDZvdnNFYnRBWWVIZUFkSEN6blJIeThTYlJv">
                                <p class="adInfoShad">
                                    <span class="ft-lt">112121212</span>
                                    <span class="ft-rt">333~555<span class="unite">萬/坪</span></span>
                                </p>
                            </a>
                            <div class="clearH5"></div>
                            <p class="detailBox comFont">
                                <span class="ft-lt">主力坪數：1坪</span>
                                <span class="ft-rt">人氣：<em class="orgColor">213</em>人</span>
                            </p>
                            <p class="detailBox comFont">
                                建案地址：台北市中山區一高1巷1弄                            </p>
                        </li>
                                        <li>
                            <a alt="桂林官邸" google-data-stat="新房屋首頁_熱銷建案_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-105186.html">
                                <img height="182" width="272" alt="" src="https://cp1.dev.591.com.tw/ware/01/73/73/88/dblo_144276181588803701.png.374x269.jpg?m=cTdOVVpiMFIvKzgxUjdieCtXcmYrZ05XUEthUEx2VkJPUFdzTHE4dnQwYjNINGVIZUFkRkFUL1ZFaVFTYlJv">
                                <p class="adInfoShad">
                                    <span class="ft-lt">桂林官邸</span>
                                    <span class="ft-rt">待定</span>
                                </p>
                            </a>
                            <div class="clearH5"></div>
                            <p class="detailBox comFont">
                                <span class="ft-lt">主力坪數：60.5坪</span>
                                <span class="ft-rt">人氣：<em class="orgColor">331</em>人</span>
                            </p>
                            <p class="detailBox comFont">
                                建案地址：台北市萬華區桂林路                            </p>
                        </li>
                                        <li>
                            <a alt="我我我我我多我多" google-data-stat="新房屋首頁_熱銷建案_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-103486.html">
                                <img height="182" width="272" alt="" src="https://cp2.dev.591.com.tw/ware/00/00/17/97/dblo_144556602020879505.jpg.374x269.jpg?m=L09ZQ003d1UvK2cxUjdieCtXcmYrZ1JVUEtHSExmQkxNUFdySkswdnMwYnRBWWVIZUFkRkN6K2FWaVE=">
                                <p class="adInfoShad">
                                    <span class="ft-lt">我我我我我多我多</span>
                                    <span class="ft-rt">23<span class="unite">萬/坪</span></span>
                                </p>
                            </a>
                            <div class="clearH5"></div>
                            <p class="detailBox comFont">
                                <span class="ft-lt">主力坪數：23坪</span>
                                <span class="ft-rt">人氣：<em class="orgColor">42</em>人</span>
                            </p>
                            <p class="detailBox comFont">
                                建案地址：台北市中山區朱園里                            </p>
                        </li>
                                        <li>
                            <a alt="asd" google-data-stat="新房屋首頁_熱銷建案_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-105224.html">
                                <img height="182" width="272" alt="" src="https://cp2.dev.591.com.tw/ware/00/00/00/37/dblo_144723854289095402.jpg.374x269.jpg?m=L3VNQ01yb1JxcjgxUjdieCtXcmYrZ1pUT2ErQ0svSkJPZjJsS0t3dnRFYnRBWWVIZUFWRlRuVGU=">
                                <p class="adInfoShad">
                                    <span class="ft-lt">asd</span>
                                    <span class="ft-rt">312~333<span class="unite">萬/坪</span></span>
                                </p>
                            </a>
                            <div class="clearH5"></div>
                            <p class="detailBox comFont">
                                <span class="ft-lt">主力坪數：12-36坪</span>
                                <span class="ft-rt">人氣：<em class="orgColor">214</em>人</span>
                            </p>
                            <p class="detailBox comFont">
                                建案地址：台北市中山區明水路                            </p>
                        </li>
                            </ul>
        </div>

        <!--超值建案-->
        <div class="commheader clearfix">
            <h2 class="headerTitle ft-lt active">
                超值建案
            </h2>
            <div class="hotLinks ft-lt">
                <a google-data-stat="新房屋首頁_更多建案_內湖區" target="_blank" class="hotLink" href="/housing-list-1-10.html">內湖區</a><a google-data-stat="新房屋首頁_更多建案_文山區" target="_blank" class="hotLink" href="/housing-list-1-12.html">文山區</a><a google-data-stat="新房屋首頁_更多建案_士林區" target="_blank" class="hotLink" href="/housing-list-1-8.html">士林區</a><a google-data-stat="新房屋首頁_更多建案_中山區" target="_blank" class="hotLink" href="/housing-list-1-3.html">中山區</a><a google-data-stat="新房屋首頁_更多建案_南港區" target="_blank" class="hotLink" href="/housing-list-1-11.html">南港區</a><a google-data-stat="新房屋首頁_更多建案_北投區" target="_blank" class="hotLink" href="/housing-list-1-9.html">北投區</a><a google-data-stat="新房屋首頁_更多建案_大安區" target="_blank" class="hotLink" href="/housing-list-1-5.html">大安區</a><a google-data-stat="新房屋首頁_更多建案_中正區" target="_blank" class="hotLink" href="/housing-list-1-1.html">中正區</a><a google-data-stat="新房屋首頁_更多建案_大同區" target="_blank" class="hotLink" href="/housing-list-1-2.html">大同區</a>                <a target="_blank" class="getMore" href="https://h.dev.591.com.tw/housing-list-1.html">更多&gt;&gt;</a>
            </div>
        </div>
        <div style="height:585px;" class="adsBox">
            <ul class="clearfix adImgList">
                <li class="adsLink bigAd">
                    <div id="PAGE_AD_270"><a style="display:block;" title="" target="_blank" href="https://tajs.591.com.tw/ck.php?oaparams=2__bannerid=1386__zoneid=270__cb=b2489cf324__oadest=http%3A%2F%2Fh.591.com.tw%2Fhousing-detail-105657.html"><img border="0" height="275" width="575" title="" alt="" src="https://tp1.591.com.tw/f8894b269dcfb38d528040a78465a6be.jpg"></a><div id="beacon_b2489cf324" style="position: absolute; left: 0px; top: 0px; visibility: hidden;"><img height="0" width="0" style="width: 0px; height: 0px;" alt="" src="https://tajs.591.com.tw/lg.php?bannerid=1386&amp;campaignid=2&amp;zoneid=270&amp;loc=https%3A%2F%2Fh.dev.591.com.tw%2F&amp;cb=b2489cf324&amp;loc=https://h.dev.591.com.tw/b2489cf324"></div></div>
                </li>
                                    <li class="bigLi">
                        <a alt="测试+一夜惊喜范冰冰" google-data-stat="新房屋首頁_超值建案_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-103489.html">
                            <img height="182" width="272" title="测试+一夜惊喜范冰冰" alt="测试+一夜惊喜范冰冰" data-original="https://cp2.debug.591.com.tw/ware/00/01/18/67/dblo_137698256008041509.jpg.374x269.jpg?m=K3JBRVk3UkgvTE0xUjdieCtXclkrUWRZTXFXQ0tmQkpPUDJvTEswdnYwYnRBWWVIZUFkRENqN1JWbUJX" src="//www.dev.591.com.tw/images/index/design/btn_cartoon.png" class="lazy">
                            <p class="adInfoShad">
                                <span class="ft-lt">测试+一夜惊喜范冰冰</span>
                                <span class="ft-rt">50~1000<span class="unite">萬/坪</span></span>
                            </p>
                        </a>
                        <div class="clearH5"></div>
                        <p class="detailBox comFont">
                            低於區域參考價：<em class="redColor">93.8%</em>
                        </p>
                        <p class="detailBox comFont">
                            <span class="ft-lt">電話咨詢：0通</span>
                            <span class="ft-rt">瀏覽：532次</span>
                        </p>
                        <p class="detailBox comFont">
                            建案地址：台北市中山區明水路25巷21弄                        </p>
                    </li>
                                    <li>
                        <a alt="112121212" google-data-stat="新房屋首頁_超值建案_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-103568.html">
                            <img height="182" width="272" title="112121212" alt="112121212" data-original="https://cp2.debug.591.com.tw/ware/01/59/17/53/dblo_144964099856502206.jpg.374x269.jpg?m=K0xSZllycEQvN28xUjdieCtXcmYrZ2hYUHFlT0p2aE1OdmlzTDZvdnNFYnRBWWVIZUFkSEN6blJIeThTYlJv" src="//www.dev.591.com.tw/images/index/design/btn_cartoon.png" class="lazy">
                            <p class="adInfoShad">
                                <span class="ft-lt">112121212</span>
                                <span class="ft-rt">333~555<span class="unite">萬/坪</span></span>
                            </p>
                        </a>
                        <div class="clearH5"></div>
                        <p class="detailBox comFont">
                            低於區域參考價：<em class="redColor">58.9%</em>
                        </p>
                        <p class="detailBox comFont">
                            <span class="ft-lt">電話咨詢：0通</span>
                            <span class="ft-rt">瀏覽：213次</span>
                        </p>
                        <p class="detailBox comFont">
                            建案地址：台北市中山區一高1巷1弄                        </p>
                    </li>
                                    <li>
                        <a alt="好的了" google-data-stat="新房屋首頁_超值建案_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-103571.html">
                            <img height="182" width="272" title="好的了" alt="好的了" data-original="../../../images/index/build/no_housing_img.png" src="//www.dev.591.com.tw/images/index/design/btn_cartoon.png" class="lazy">
                            <p class="adInfoShad">
                                <span class="ft-lt">好的了</span>
                                <span class="ft-rt">50~80<span class="unite">萬/坪</span></span>
                            </p>
                        </a>
                        <div class="clearH5"></div>
                        <p class="detailBox comFont">
                            低於區域參考價：<em class="redColor">93.8%</em>
                        </p>
                        <p class="detailBox comFont">
                            <span class="ft-lt">電話咨詢：0通</span>
                            <span class="ft-rt">瀏覽：5次</span>
                        </p>
                        <p class="detailBox comFont">
                            建案地址：台北市中山區明水路                        </p>
                    </li>
                                    <li>
                        <a alt="新增字段新房屋123" google-data-stat="新房屋首頁_超值建案_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-105234.html">
                            <img height="182" width="272" title="新增字段新房屋123" alt="新增字段新房屋123" data-original="../../../images/index/build/no_housing_img.png" src="//www.dev.591.com.tw/images/index/design/btn_cartoon.png" class="lazy">
                            <p class="adInfoShad">
                                <span class="ft-lt">新增字段新房屋123</span>
                                <span class="ft-rt">11~33<span class="unite">萬/坪</span></span>
                            </p>
                        </a>
                        <div class="clearH5"></div>
                        <p class="detailBox comFont">
                            低於區域參考價：<em class="redColor">98.6%</em>
                        </p>
                        <p class="detailBox comFont">
                            <span class="ft-lt">電話咨詢：0通</span>
                            <span class="ft-rt">瀏覽：1次</span>
                        </p>
                        <p class="detailBox comFont">
                            建案地址：台北市中山區明水路1巷1弄                        </p>
                    </li>
                            </ul>
        </div>
        
        <!--明星學區房-->
                <div class="commheader clearfix">
            <h2 class="headerTitle ft-lt active titleWidth">
                近明星學校
            </h2>
            <div class="hotLinks ft-lt linksWith">
                <a google-data-stat="新房屋首頁_更多建案_內湖區" target="_blank" class="hotLink" href="/housing-list-1-10.html">內湖區</a><a google-data-stat="新房屋首頁_更多建案_文山區" target="_blank" class="hotLink" href="/housing-list-1-12.html">文山區</a><a google-data-stat="新房屋首頁_更多建案_士林區" target="_blank" class="hotLink" href="/housing-list-1-8.html">士林區</a><a google-data-stat="新房屋首頁_更多建案_中山區" target="_blank" class="hotLink" href="/housing-list-1-3.html">中山區</a><a google-data-stat="新房屋首頁_更多建案_南港區" target="_blank" class="hotLink" href="/housing-list-1-11.html">南港區</a><a google-data-stat="新房屋首頁_更多建案_北投區" target="_blank" class="hotLink" href="/housing-list-1-9.html">北投區</a><a google-data-stat="新房屋首頁_更多建案_大安區" target="_blank" class="hotLink" href="/housing-list-1-5.html">大安區</a><a google-data-stat="新房屋首頁_更多建案_中正區" target="_blank" class="hotLink" href="/housing-list-1-1.html">中正區</a><a google-data-stat="新房屋首頁_更多建案_大同區" target="_blank" class="hotLink" href="/housing-list-1-2.html">大同區</a>                <a class="getMore" href="https://h.dev.591.com.tw/housing-list-1.html">更多&gt;&gt;</a>
            </div>
        </div>
        <div style="height:565px;" class="adsBox">
            <ul class="clearfix adImgList">
                                    <li>
                        <a alt="as大三大四的" google-data-stat="新房屋首頁_近明星學校_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-103521.html">
                            <img height="182" width="272" title="as大三大四的" alt="as大三大四的" data-original="../../../images/index/build/no_housing_img.png" src="//www.dev.591.com.tw/images/index/design/btn_cartoon.png" class="lazy">
                            <p class="adInfoShad">
                                <span class="ft-lt">as大三大四的</span>
                                <span class="ft-rt">3<span class="unite">萬/坪</span></span>
                            </p>
                        </a>
                        <div class="clearH5"></div>
                        <p class="detailBox comFont">
                            近<a target="_blank" href="/housing-list.html?sc=5">龍安國小</a> 等1所明星學校
                        
                        </p><p class="detailBox comFont">
                            主力坪數：123坪                        </p>
                        <p class="detailBox comFont">
                            建案地址：台北市中正區文盛里2巷2弄                        </p>
                    </li>
                                    <li>
                        <a alt="小貓咪咪咪咪" google-data-stat="新房屋首頁_近明星學校_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-103525.html">
                            <img height="182" width="272" title="小貓咪咪咪咪" alt="小貓咪咪咪咪" data-original="../../../images/index/build/no_housing_img.png" src="//www.dev.591.com.tw/images/index/design/btn_cartoon.png" class="lazy">
                            <p class="adInfoShad">
                                <span class="ft-lt">小貓咪咪咪咪</span>
                                <span class="ft-rt">5~55<span class="unite">萬/坪</span></span>
                            </p>
                        </a>
                        <div class="clearH5"></div>
                        <p class="detailBox comFont">
                            近<a target="_blank" href="/housing-list.html?sc=4">金華國中</a> 等1所明星學校
                        
                        </p><p class="detailBox comFont">
                            主力坪數：55坪                        </p>
                        <p class="detailBox comFont">
                            建案地址：台北市中正區文祥里2巷2弄                        </p>
                    </li>
                                    <li>
                        <a alt="御青川" google-data-stat="新房屋首頁_近明星學校_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-104984.html">
                            <img height="182" width="272" title="御青川" alt="御青川" data-original="https://cp2.debug.591.com.tw/ware/01/71/68/47/bd_144272747447662500.jpg.374x269.jpg?m=ckxNRE9lNUEvYjR6UVlXdmttL1orUU5XUHFDREsvZFBOditwTGFneDdCamdEWnpLTXdkRUNqelJWbUJX" src="//www.dev.591.com.tw/images/index/design/btn_cartoon.png" class="lazy">
                            <p class="adInfoShad">
                                <span class="ft-lt">御青川</span>
                                <span class="ft-rt">待定</span>
                            </p>
                        </a>
                        <div class="clearH5"></div>
                        <p class="detailBox comFont">
                            近<a target="_blank" href="/housing-list.html?sc=19">內湖國中</a> 等1所明星學校
                        
                        </p><p class="detailBox comFont">
                            主力坪數：93.7坪                        </p>
                        <p class="detailBox comFont">
                            建案地址：台北市內湖區                        </p>
                    </li>
                                    <li>
                        <a alt="清泉時尚" google-data-stat="新房屋首頁_近明星學校_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-105125.html">
                            <img height="182" width="272" title="清泉時尚" alt="清泉時尚" data-original="https://cp1.debug.591.com.tw/ware/00/57/79/34/bd_144176822610970001.jpg.374x269.jpg?m=ck9SVlkrOUgrTGt6UVlXdmttL2ErUWRaT0tXQkx2QkFOLzJzTGFreDdCamdEWnpPTXdGTEFUeWFWaVE=" src="//www.dev.591.com.tw/images/index/design/btn_cartoon.png" class="lazy">
                            <p class="adInfoShad">
                                <span class="ft-lt">清泉時尚</span>
                                <span class="ft-rt">86<span class="unite">萬/坪</span></span>
                            </p>
                        </a>
                        <div class="clearH5"></div>
                        <p class="detailBox comFont">
                            近<a target="_blank" href="/housing-list.html?sc=1">民生國中</a>,<a target="_blank" href="/housing-list.html?sc=10">興雅國小</a> 等2所明星學校
                        
                        </p><p class="detailBox comFont">
                            主力坪數：12.1-27.8坪                        </p>
                        <p class="detailBox comFont">
                            建案地址：台北市松山區寶清街101巷                        </p>
                    </li>
                                    <li>
                        <a alt="萬喆" google-data-stat="新房屋首頁_近明星學校_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-105181.html">
                            <img height="182" width="272" title="萬喆" alt="萬喆" data-original="https://cp1.debug.591.com.tw/ware/00/17/59/56/bd_144237320878707704.jpg.374x269.jpg?m=cmJvRk5yVkhxZWt6UVlXdmttL1ovUVpTT0tlUEtQaE9NUHFyTGF3eDdCamdEWnpLTXdOTEJ6NmFWaVE=" src="//www.dev.591.com.tw/images/index/design/btn_cartoon.png" class="lazy">
                            <p class="adInfoShad">
                                <span class="ft-lt">萬喆</span>
                                <span class="ft-rt">待定</span>
                            </p>
                        </a>
                        <div class="clearH5"></div>
                        <p class="detailBox comFont">
                            近<a target="_blank" href="/housing-list.html?sc=8">東園國小</a> 等1所明星學校
                        
                        </p><p class="detailBox comFont">
                            主力坪數：50坪                        </p>
                        <p class="detailBox comFont">
                            建案地址：台北市萬華區民和街                        </p>
                    </li>
                                    <li>
                        <a alt="桂林官邸" google-data-stat="新房屋首頁_近明星學校_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-105186.html">
                            <img height="182" width="272" title="桂林官邸" alt="桂林官邸" data-original="https://cp1.debug.591.com.tw/ware/01/73/73/88/dblo_144276181588803701.png.374x269.jpg?m=cTdOVVpiMFIvKzgxUjdieCtXcmYrZ05XUEthUEx2VkJPUFdzTHE4dnQwYjNINGVIZUFkRkFUL1ZFaVFTYlJv" src="//www.dev.591.com.tw/images/index/design/btn_cartoon.png" class="lazy">
                            <p class="adInfoShad">
                                <span class="ft-lt">桂林官邸</span>
                                <span class="ft-rt">待定</span>
                            </p>
                        </a>
                        <div class="clearH5"></div>
                        <p class="detailBox comFont">
                            近<a target="_blank" href="/housing-list.html?sc=7">西門國小</a>,<a target="_blank" href="/housing-list.html?sc=9">老松國小</a> 等2所明星學校
                        
                        </p><p class="detailBox comFont">
                            主力坪數：60.5坪                        </p>
                        <p class="detailBox comFont">
                            建案地址：台北市萬華區桂林路                        </p>
                    </li>
                            </ul>
        </div>
                <!--捷運宅-->
        <div class="commheader clearfix">
            <h2 class="headerTitle ft-lt active titleWidth2">
                捷運宅
            </h2>
            <div class="hotLinks ft-lt linksWith2">
                <a google-data-stat="新房屋首頁_捷運宅_臺北捷運" target="_blank" class="hotLink" href="/housing-list.html?type=1&amp;city=1">臺北捷運</a>
                <a google-data-stat="新房屋首頁_捷運宅_高雄捷運" target="_blank" class="hotLink" href="/housing-list.html?type=1&amp;city=2">高雄捷運</a>
                <a google-data-stat="新房屋首頁_捷運宅_文山線" target="_blank" class="hotLink" href="/housing-list.html?type=1&amp;line=1">文山線</a>
                <a google-data-stat="新房屋首頁_捷運宅_淡水線" target="_blank" class="hotLink" href="/housing-list.html?type=1&amp;line=2">淡水線</a>
                <a google-data-stat="新房屋首頁_捷運宅_紅線" target="_blank" class="hotLink" href="/housing-list.html?type=1&amp;city=2&amp;line=1">紅線</a>
                <a google-data-stat="新房屋首頁_捷運宅_橘線" target="_blank" class="hotLink" href="/housing-list.html?type=1&amp;city=2&amp;line=2">橘線</a>
                <a google-data-stat="新房屋首頁_捷運宅_小南門線" target="_blank" class="hotLink" href="/housing-list.html?type=1&amp;line=3">小南門線</a>
                <a google-data-stat="新房屋首頁_捷運宅_新店線" target="_blank" class="hotLink" href="/housing-list.html?type=1&amp;line=4">新店線</a>
                <a target="_blank" class="getMore" href="https://h.dev.591.com.tw/housing-list.html?type=1">更多&gt;&gt;</a>
            </div>
        </div>
        <div style="height:565px;" class="adsBox">
            <ul class="clearfix adImgList">
                                    <li>
                        <a google-data-stat="新房屋首頁_捷運宅_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-103609.html">
                            <img height="182" width="272" title="發送到發送到" alt="發送到發送到" data-original="../../../images/index/build/no_housing_img.png" src="//www.dev.591.com.tw/images/index/design/btn_cartoon.png" class="lazy">
                            <p class="adInfoShad">
                                <span class="ft-lt">發送到發送到</span>
                                <span class="ft-rt">23~33<span class="unite">萬/坪</span></span>
                            </p>
                        </a>
                        <div class="clearH5"></div>
                        <p class="detailBox comFont">
                            近<a href="target='_blank'">QQ站</a> 等1個站點
                        
                        </p><p class="detailBox comFont">
                            主力坪數：222坪                        </p>
                        <p class="detailBox comFont">
                            建案地址：台北市中山區一高                        </p>
                    </li>
                                    <li>
                        <a google-data-stat="新房屋首頁_捷運宅_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-105245.html">
                            <img height="182" width="272" title="發斯蒂芬" alt="發斯蒂芬" data-original="../../../images/index/build/no_housing_img.png" src="//www.dev.591.com.tw/images/index/design/btn_cartoon.png" class="lazy">
                            <p class="adInfoShad">
                                <span class="ft-lt">發斯蒂芬</span>
                                <span class="ft-rt">12<span class="unite">萬/坪</span></span>
                            </p>
                        </a>
                        <div class="clearH5"></div>
                        <p class="detailBox comFont">
                            近<a target="_blank" href="/housing-list.html?type=1&amp;city=1&amp;line=1&amp;stationid=4282">劍南路站</a>,<a target="_blank" href="/housing-list.html?type=1&amp;city=1&amp;line=1&amp;stationid=4323">大直站</a>,<a target="_blank" href="/housing-list.html?type=1&amp;city=1&amp;line=1&amp;stationid=4323">QQ站</a> 等3個站點
                        
                        </p><p class="detailBox comFont">
                            主力坪數：123坪                        </p>
                        <p class="detailBox comFont">
                            建案地址：台北市中山區明水路                        </p>
                    </li>
                                    <li>
                        <a google-data-stat="新房屋首頁_捷運宅_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-105243.html">
                            <img height="182" width="272" title="新增字段新11221" alt="新增字段新11221" data-original="https://cp1.debug.591.com.tw/ware/00/00/11/74/dblo_145258079128857808.jpg.374x269.jpg?m=K0xBRFkraExxTHcxUjdieCtXcmYrd05VTXFlQUp2RkxPUFdwS3FBdnZrYnRBWWVIZUFkREJUeWFWaVE=" src="//www.dev.591.com.tw/images/index/design/btn_cartoon.png" class="lazy">
                            <p class="adInfoShad">
                                <span class="ft-lt">新增字段新11221</span>
                                <span class="ft-rt">33~333<span class="unite">萬/坪</span></span>
                            </p>
                        </a>
                        <div class="clearH5"></div>
                        <p class="detailBox comFont">
                            近<a target="_blank" href="/housing-list.html?type=1&amp;city=1&amp;line=1&amp;stationid=4282">劍南路站</a>,<a target="_blank" href="/housing-list.html?type=1&amp;city=1&amp;line=1&amp;stationid=4323">大直站</a>,<a target="_blank" href="/housing-list.html?type=1&amp;city=1&amp;line=1&amp;stationid=4323">QQ站</a> 等3個站點
                        
                        </p><p class="detailBox comFont">
                            主力坪數：333坪                        </p>
                        <p class="detailBox comFont">
                            建案地址：台北市中山區明水路1巷1弄                        </p>
                    </li>
                                    <li>
                        <a google-data-stat="新房屋首頁_捷運宅_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-105225.html">
                            <img height="182" width="272" title="11111dfads" alt="11111dfads" data-original="https://cp2.debug.591.com.tw/ware/01/59/17/53/dblo_144834776032125307.jpg.374x269.jpg?m=OGJNRU5ib1RxZWcxUjdieCtXcmYrZ2xTUHFDQUtmQktNdnl1S0tzdnNVYnRBWWVIZUFkSEN6blJIeThTYlJv" src="//www.dev.591.com.tw/images/index/design/btn_cartoon.png" class="lazy">
                            <p class="adInfoShad">
                                <span class="ft-lt">11111dfads</span>
                                <span class="ft-rt">11~44<span class="unite">萬/坪</span></span>
                            </p>
                        </a>
                        <div class="clearH5"></div>
                        <p class="detailBox comFont">
                            近<a href="target='_blank'">QQ站</a> 等1個站點
                        
                        </p><p class="detailBox comFont">
                            主力坪數：444坪                        </p>
                        <p class="detailBox comFont">
                            建案地址：台北市中山區一高1巷1弄                        </p>
                    </li>
                                    <li>
                        <a google-data-stat="新房屋首頁_捷運宅_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-105224.html">
                            <img height="182" width="272" title="asd" alt="asd" data-original="https://cp2.debug.591.com.tw/ware/00/00/00/37/dblo_144723854289095402.jpg.374x269.jpg?m=L3VNQ01yb1JxcjgxUjdieCtXcmYrZ1pUT2ErQ0svSkJPZjJsS0t3dnRFYnRBWWVIZUFWRlRuVGU=" src="//www.dev.591.com.tw/images/index/design/btn_cartoon.png" class="lazy">
                            <p class="adInfoShad">
                                <span class="ft-lt">asd</span>
                                <span class="ft-rt">312~333<span class="unite">萬/坪</span></span>
                            </p>
                        </a>
                        <div class="clearH5"></div>
                        <p class="detailBox comFont">
                            近<a target="_blank" href="/housing-list.html?type=1&amp;city=1&amp;line=1&amp;stationid=4282">劍南路站</a>,<a target="_blank" href="/housing-list.html?type=1&amp;city=1&amp;line=1&amp;stationid=4323">大直站</a>,<a target="_blank" href="/housing-list.html?type=1&amp;city=1&amp;line=1&amp;stationid=4323">QQ站</a> 等3個站點
                        
                        </p><p class="detailBox comFont">
                            主力坪數：12-36坪                        </p>
                        <p class="detailBox comFont">
                            建案地址：台北市中山區明水路                        </p>
                    </li>
                                    <li>
                        <a google-data-stat="新房屋首頁_捷運宅_建案" target="_blank" class="adsLink" href="https://h.dev.591.com.tw/housing-detail-105242.html">
                            <img height="182" width="272" title="11111111" alt="11111111" data-original="../../../images/index/build/no_housing_img.png" src="//www.dev.591.com.tw/images/index/design/btn_cartoon.png" class="lazy">
                            <p class="adInfoShad">
                                <span class="ft-lt">11111111</span>
                                <span class="ft-rt">234~435<span class="unite">萬/坪</span></span>
                            </p>
                        </a>
                        <div class="clearH5"></div>
                        <p class="detailBox comFont">
                            近<a target="_blank" href="/housing-list.html?type=1&amp;city=1&amp;line=1&amp;stationid=4282">劍南路站</a>,<a target="_blank" href="/housing-list.html?type=1&amp;city=1&amp;line=1&amp;stationid=4323">大直站</a>,<a target="_blank" href="/housing-list.html?type=1&amp;city=1&amp;line=1&amp;stationid=4323">QQ站</a> 等3個站點
                        
                        </p><p class="detailBox comFont">
                            主力坪數：23坪                        </p>
                        <p class="detailBox comFont">
                            建案地址：台北市中山區明水路2巷2弄                        </p>
                    </li>
                            </ul>
        </div>

        <!--建案排行榜-->
                <div class="commheader clearfix">
            <h2 class="headerTitle ft-lt active titleWidth">
                建案排行榜
            </h2>
            <div class="hotLinks ft-lt linksWith">
            </div>
        </div>
        <div class="clearfix rankingBox">
            <div class="ft-lt callsRanking">
                <h2 class="rankHeader">
                    來電排行
                </h2>
                                    <div class="rankListItems clearfix">
                        <span class="listTips orgBg">1</span>
                        <a target="_blank" class="rankLink" href="https://h.dev.591.com.tw/housing-detail-103486.html">我我我我我多我..</a>
                        <span class="priceAver">23<span class="unite">萬/坪</span></span>
                        <span class="totalPrice">0通</span>
                    </div>
                            </div>
            <div class="ft-lt callsRanking ranking2">
                <h2 class="rankHeader">
                    瀏覽排行
                </h2>
                                    <div class="rankListItems clearfix">
                        <span class="listTips orgBg">1</span>
                        <a target="_blank" class="rankLink" href="https://h.dev.591.com.tw/housing-detail-105044.html">榮御中山</a>
                        <span class="priceAver">待定</span>
                        <span class="totalPrice">1249次</span>
                    </div>
                                    <div class="rankListItems clearfix">
                        <span class="listTips orgBg">2</span>
                        <a target="_blank" class="rankLink" href="https://h.dev.591.com.tw/housing-detail-105125.html">清泉時尚</a>
                        <span class="priceAver">86<span class="unite">萬/坪</span></span>
                        <span class="totalPrice">647次</span>
                    </div>
                                    <div class="rankListItems clearfix">
                        <span class="listTips orgBg">3</span>
                        <a target="_blank" class="rankLink" href="https://h.dev.591.com.tw/housing-detail-103489.html">测试+一夜惊喜..</a>
                        <span class="priceAver">50~1000<span class="unite">萬/坪</span></span>
                        <span class="totalPrice">532次</span>
                    </div>
                                    <div class="rankListItems clearfix">
                        <span class="listTips grevBg">4</span>
                        <a target="_blank" class="rankLink" href="https://h.dev.591.com.tw/housing-detail-104984.html">御青川</a>
                        <span class="priceAver">待定</span>
                        <span class="totalPrice">528次</span>
                    </div>
                                    <div class="rankListItems clearfix">
                        <span class="listTips grevBg">5</span>
                        <a target="_blank" class="rankLink" href="https://h.dev.591.com.tw/housing-detail-105186.html">桂林官邸</a>
                        <span class="priceAver">待定</span>
                        <span class="totalPrice">331次</span>
                    </div>
                                    <div class="rankListItems clearfix">
                        <span class="listTips grevBg">6</span>
                        <a target="_blank" class="rankLink" href="https://h.dev.591.com.tw/housing-detail-103513.html">呵呵呵呵</a>
                        <span class="priceAver">11~222<span class="unite">萬/坪</span></span>
                        <span class="totalPrice">264次</span>
                    </div>
                                    <div class="rankListItems clearfix">
                        <span class="listTips grevBg">7</span>
                        <a target="_blank" class="rankLink" href="https://h.dev.591.com.tw/housing-detail-103568.html">112121212</a>
                        <span class="priceAver">333~555<span class="unite">萬/坪</span></span>
                        <span class="totalPrice">213次</span>
                    </div>
                                    <div class="rankListItems clearfix">
                        <span class="listTips grevBg">8</span>
                        <a target="_blank" class="rankLink" href="https://h.dev.591.com.tw/housing-detail-105187.html">大直真鑽</a>
                        <span class="priceAver">待定</span>
                        <span class="totalPrice">199次</span>
                    </div>
                                    <div class="rankListItems clearfix">
                        <span class="listTips grevBg">9</span>
                        <a target="_blank" class="rankLink" href="https://h.dev.591.com.tw/housing-detail-103619.html">空中城堡</a>
                        <span class="priceAver">待定</span>
                        <span class="totalPrice">169次</span>
                    </div>
                                    <div class="rankListItems clearfix">
                        <span class="listTips grevBg">10</span>
                        <a target="_blank" class="rankLink" href="https://h.dev.591.com.tw/housing-detail-105181.html">萬喆</a>
                        <span class="priceAver">待定</span>
                        <span class="totalPrice">148次</span>
                    </div>
                            </div>
        </div>
        
    </div>
    <div class="newHouseKeyWords">
        <p class="keyWordsDis clearfix">
            <span class="linkHeader ft-lt">台北市新屋</span><span class="linkItems ft-lt"><a target="_blank" href="/housing-list-1-10.html">內湖區</a><a target="_blank" href="/housing-list-1-12.html">文山區</a><a target="_blank" href="/housing-list-1-8.html">士林區</a><a target="_blank" href="/housing-list-1-3.html">中山區</a><a target="_blank" href="/housing-list-1-11.html">南港區</a><a target="_blank" href="/housing-list-1-9.html">北投區</a><a target="_blank" href="/housing-list-1-5.html">大安區</a><a target="_blank" href="/housing-list-1-1.html">中正區</a><a target="_blank" href="/housing-list-1-2.html">大同區</a><a target="_blank" href="/housing-list-1-7.html">信義區</a><a target="_blank" href="/housing-list-1-4.html">松山區</a><a target="_blank" href="/housing-list-1-6.html">萬華區</a></span>        </p>
        <p class="keyWordsDis clearfix">
             <span class="linkHeader ft-lt">買屋工具</span>
             <span class="linkItems ft-lt">
                 <a google-data-stat="新房屋首頁_底部_新屋報價" target="_blank" href="https://h.dev.591.com.tw/housing-priceAll.html">新屋報價</a>
                 <a google-data-stat="新房屋首頁_底部_最新公開銷售建案" target="_blank" href="https://h.dev.591.com.tw/housing-list.html?now=1">最新公開銷售建案</a>
                 <a google-data-stat="新房屋首頁_底部_房價查詢" target="_blank" href="//www.dev.591.com.tw/webService-marketSale.html">房價查詢</a>
                 <a google-data-stat="新房屋首頁_底部_房貸試算" target="_blank" href="//www.dev.591.com.tw/housing-fdss.html">房貸試算</a>
                 <a google-data-stat="新房屋首頁_底部_臺北捷運" target="_blank" href="http://price.591.com.tw">實價登錄</a>
        </span>
        </p>
        <p class="keyWordsDis clearfix">
            <span class="linkHeader ft-lt">其他縣市建案</span><span class="linkItems ft-lt"><a google-data-stat="新房屋首頁_更多建案_基隆市" href="/housing-list-2.html">基隆市</a><a google-data-stat="新房屋首頁_更多建案_新北市" href="/housing-list-3.html">新北市</a><a google-data-stat="新房屋首頁_更多建案_桃園市" href="/housing-list-6.html">桃園市</a><a google-data-stat="新房屋首頁_更多建案_新竹市" href="/housing-list-4.html">新竹市</a><a google-data-stat="新房屋首頁_更多建案_新竹縣" href="/housing-list-5.html">新竹縣</a><a google-data-stat="新房屋首頁_更多建案_苗栗縣" href="/housing-list-7.html">苗栗縣</a><a google-data-stat="新房屋首頁_更多建案_台中市" href="/housing-list-8.html">台中市</a><a google-data-stat="新房屋首頁_更多建案_彰化縣" href="/housing-list-10.html">彰化縣</a><a google-data-stat="新房屋首頁_更多建案_南投縣" href="/housing-list-11.html">南投縣</a><a google-data-stat="新房屋首頁_更多建案_雲林縣" href="/housing-list-14.html">雲林縣</a><a google-data-stat="新房屋首頁_更多建案_嘉義市" href="/housing-list-12.html">嘉義市</a><a google-data-stat="新房屋首頁_更多建案_嘉義縣" href="/housing-list-13.html">嘉義縣</a><a google-data-stat="新房屋首頁_更多建案_台南市" href="/housing-list-15.html">台南市</a><a google-data-stat="新房屋首頁_更多建案_高雄市" href="/housing-list-17.html">高雄市</a><a google-data-stat="新房屋首頁_更多建案_屏東縣" href="/housing-list-19.html">屏東縣</a><a google-data-stat="新房屋首頁_更多建案_宜蘭縣" href="/housing-list-21.html">宜蘭縣</a><a google-data-stat="新房屋首頁_更多建案_花蓮縣" href="/housing-list-23.html">花蓮縣</a><a google-data-stat="新房屋首頁_更多建案_台東縣" href="/housing-list-22.html">台東縣</a><a google-data-stat="新房屋首頁_更多建案_澎湖縣" href="/housing-list-24.html">澎湖縣</a><a google-data-stat="新房屋首頁_更多建案_金門縣" href="/housing-list-25.html">金門縣</a><a google-data-stat="新房屋首頁_更多建案_連江縣" href="/housing-list-26.html">連江縣</a></span>        </p>
    </div>

    <div class="bottomBorder">
        
    </div>
</div>
@stop
