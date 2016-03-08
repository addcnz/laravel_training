<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>591新房屋 - 預售屋,新成屋,找建案首選新屋網站</title>
<meta name="keywords" content="591,新屋,新屋網,預售屋,新成屋,建案" />
<meta name="description" content="591新房屋提供新成屋、預售屋等新屋資訊，囊括全國新屋聯繫電話、價格地址等資訊.建案資訊齊全，是您找建案首選的新屋網站" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="author" content="數字科技股份有限公司" />
<meta name="copyright" content="www.591.com.tw" />
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=1" />
<link rel="stylesheet" type="text/css" href="{{ url('css/public/common.css') }}" g="housing-css" />
<link rel="stylesheet" type="text/css" href="{{ url('css/public/footer.css') }}" g="housing-css" />
<link rel="stylesheet" type="text/css" href="{{ url('css/housing/index.css') }}" g="housing-css" />
<link rel="stylesheet" type="text/css" href="{{ url('css/housing/indexNew.css') }}" g="housing-css" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="/rss.xml" />
<style type="text/css">
    #footPic{
        margin:0px auto 35px auto;
        text-align:center;
    }
    #footer,#footer .footnav{
        width:1000px;
    }
    #housingFooter *{font-size: 13px;}
    #housingFooter .footnav ul{width: 880px!important;}
    #h_survey{border:0px;box-shadow:0px;}
    #h_survey div.popboxTitle{height: 0px;}
    #h_survey a.popboxClose{top:5px;right:5px;background: url(../../../images/index/design/btn_cartoon.png)}
    </style>
</head>
<body id="Menus_housing">
    @include("header")  
    
    @include('housing.header')
    
    @yield('main')
    
    <div id="housingFooter">
        <div class="clear"></div>
    @include("footer")
    </div>
</body>
</html>