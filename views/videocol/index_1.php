<!DOCTYPE html>
<html><head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">


        <script type="text/javascript">
            window.logs = {
                pagetime: {}
            };
            window.logs.pagetime['html_begin'] = (+new Date());
        </script>

        <link rel="dns-prefetch" href="http://res.wx.qq.com/">
        <link rel="dns-prefetch" href="http://mmbiz.qpic.cn/">
        <link rel="shortcut icon" type="image/x-icon" href="http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/images/icon/common/favicon22c41b.ico">
        <script type="text/javascript">
            String.prototype.html = function (encode) {
                var replace = ["&#39;", "'", "&quot;", '"', "&nbsp;", " ", "&gt;", ">", "&lt;", "<", "&amp;", "&", "&yen;", "¥"];
                if (encode) {
                    replace.reverse();
                }
                for (var i = 0, str = this; i < replace.length; i += 2) {
                    str = str.replace(new RegExp(replace[i], 'g'), replace[i + 1]);
                }
                return str;
            };

            window.isInWeixinApp = function () {
                return /MicroMessenger/.test(navigator.userAgent);
            };

            window.getQueryFromURL = function (url) {
                url = url || 'http://qq.com/s?a=b#rd';
                var query = url.split('?')[1].split('#')[0].split('&'),
                        params = {};
                for (var i = 0; i < query.length; i++) {
                    var arg = query[i].split('=');
                    params[arg[0]] = arg[1];
                }
                if (params['pass_ticket']) {
                    params['pass_ticket'] = encodeURIComponent(params['pass_ticket'].html(false).html(false).replace(/\s/g, "+"));
                }
                return params;
            };

            (function () {
                var params = getQueryFromURL(location.href);
                window.uin = params['uin'] || '';
                window.key = params['key'] || '';
                window.wxtoken = params['wxtoken'] || '';
                window.pass_ticket = params['pass_ticket'] || '';
            })();

        </script>

        <title>
            住艺｜改造家</title>

        <link rel="stylesheet" href="%E4%B8%80%E6%9D%A1%EF%BD%9C%E7%94%9F%E6%B4%BB_files/index23b0e8.css">

        <style type="text/css">.slider{overflow:hidden;position:relative}.swiper{height:180px;overflow:hidden;position:relative}.swiper .item{float:left;position:relative}.swiper .item a{display:block}.swiper .item .img{display:block;width:100%;height:180px;background:center center no-repeat;background-size:cover}.swiper .item .desc{position:absolute;left:0;right:0;bottom:0;height:1.4em;font-size:16px;padding:20px 50px 12px 13px;background-image:-webkit-linear-gradient(top,rgba(0,0,0,0) 0,rgba(0,0,0,.7) 100%);background-image:linear-gradient(to bottom,rgba(0,0,0,0) 0,rgba(0,0,0,.7) 100%);color:#fff;text-shadow:0 1px 0 rgba(0,0,0,.5);width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal}.indicator{position:absolute;right:15px;bottom:10px}.indicator a{float:left;margin-left:6px}.icon_dot{display:inline-block;vertical-align:middle;width:6px;height:6px;border-radius:3px;background-color:#d0cdd1}.icon_dot.active{background-color:#6a666f}</style><style type="text/css">.tab_hd{height:44px}.tab_hd_inner{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;width:100%;font-size:0;background-color:#f2f2f2}.tab_hd_inner .item{height:44px;line-height:44px;width:100%;-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;box-flex:1;flex:1;font-size:15px;color:#000;text-align:center;text-decoration:none;-webkit-tap-highlight-color:transparent}.tab_hd_inner .item.active{color:#21b100}.tab_hd_inner .item:active{background-color:rgba(0,0,0,.1)}.article_list{background-color:#fff}.list_item{display:block;padding:15px 15px 10px 10px;overflow:hidden;position:relative;text-decoration:none;-webkit-tap-highlight-color:transparent}.list_item:active{background-color:rgba(0,0,0,.1)}.list_item:after{content:" ";position:absolute;bottom:0;width:100%;height:1px;border-bottom:1px solid #e2e2e2;-webkit-transform-origin:0 100%;-ms-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);-ms-transform:scaleY(.5);transform:scaleY(.5);left:10px}.list_item:last-child:after{border:0}.list_item .cover{float:left;margin-right:10px}.list_item .cover .img{display:block;width:80px;height:60px}.list_item .cont{overflow:hidden}.list_item .cont .title{font-weight:400;font-size:16px;color:#000;width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal}.list_item .cont .desc{font-size:13px;color:#999;overflow:hidden;text-overflow:ellipsis;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;line-height:1.3}.more{text-align:center}
        </style><style class="firebugResetStyles" type="text/css" charset="utf-8">/* See license.txt for terms of usage */

            /** reset styling **/

            .firebugResetStyles {

                z-index: 2147483646 !important;

                top: 0 !important;

                left: 0 !important;

                display: block !important;

                border: 0 none !important;

                margin: 0 !important;

                padding: 0 !important;

                outline: 0 !important;

                min-width: 0 !important;

                max-width: none !important;

                min-height: 0 !important;

                max-height: none !important;

                position: fixed !important;

                transform: rotate(0deg) !important;

                transform-origin: 50% 50% !important;

                border-radius: 0 !important;

                box-shadow: none !important;

                background: transparent none !important;

                pointer-events: none !important;

                white-space: normal !important;

            }

            style.firebugResetStyles {

                display: none !important;

            }



            .firebugBlockBackgroundColor {

                background-color: transparent !important;

            }



            .firebugResetStyles:before, .firebugResetStyles:after {

                content: "" !important;

            }

            /**actual styling to be modified by firebug theme**/

            .firebugCanvas {

                display: none !important;

            }



            /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

            .firebugLayoutBox {

                width: auto !important;

                position: static !important;

            }



            .firebugLayoutBoxOffset {

                opacity: 0.8 !important;

                position: fixed !important;

            }



            .firebugLayoutLine {

                opacity: 0.4 !important;

                background-color: #000000 !important;

            }



            .firebugLayoutLineLeft, .firebugLayoutLineRight {

                width: 1px !important;

                height: 100% !important;

            }



            .firebugLayoutLineTop, .firebugLayoutLineBottom {

                width: 100% !important;

                height: 1px !important;

            }



            .firebugLayoutLineTop {

                margin-top: -1px !important;

                border-top: 1px solid #999999 !important;

            }



            .firebugLayoutLineRight {

                border-right: 1px solid #999999 !important;

            }



            .firebugLayoutLineBottom {

                border-bottom: 1px solid #999999 !important;

            }



            .firebugLayoutLineLeft {

                margin-left: -1px !important;

                border-left: 1px solid #999999 !important;

            }



            /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

            .firebugLayoutBoxParent {

                border-top: 0 none !important;

                border-right: 1px dashed #E00 !important;

                border-bottom: 1px dashed #E00 !important;

                border-left: 0 none !important;

                position: fixed !important;

                width: auto !important;

            }



            .firebugRuler{

                position: absolute !important;

            }



            .firebugRulerH {

                top: -15px !important;

                left: 0 !important;

                width: 100% !important;

                height: 14px !important;

                background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%13%88%00%00%00%0E%08%02%00%00%00L%25a%0A%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%04%F8IDATx%DA%EC%DD%D1n%E2%3A%00E%D1%80%F8%FF%EF%E2%AF2%95%D0D4%0E%C1%14%B0%8Fa-%E9%3E%CC%9C%87n%B9%81%A6W0%1C%A6i%9A%E7y%0As8%1CT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AATE9%FE%FCw%3E%9F%AF%2B%2F%BA%97%FDT%1D~K(%5C%9D%D5%EA%1B%5C%86%B5%A9%BDU%B5y%80%ED%AB*%03%FAV9%AB%E1%CEj%E7%82%EF%FB%18%BC%AEJ8%AB%FA'%D2%BEU9%D7U%ECc0%E1%A2r%5DynwVi%CFW%7F%BB%17%7Dy%EACU%CD%0E%F0%FA%3BX%FEbV%FEM%9B%2B%AD%BE%AA%E5%95v%AB%AA%E3E5%DCu%15rV9%07%B5%7F%B5w%FCm%BA%BE%AA%FBY%3D%14%F0%EE%C7%60%0EU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5JU%88%D3%F5%1F%AE%DF%3B%1B%F2%3E%DAUCNa%F92%D02%AC%7Dm%F9%3A%D4%F2%8B6%AE*%BF%5C%C2Ym~9g5%D0Y%95%17%7C%C8c%B0%7C%18%26%9CU%CD%13i%F7%AA%90%B3Z%7D%95%B4%C7%60%E6E%B5%BC%05%B4%FBY%95U%9E%DB%FD%1C%FC%E0%9F%83%7F%BE%17%7DkjMU%E3%03%AC%7CWj%DF%83%9An%BCG%AE%F1%95%96yQ%0Dq%5Dy%00%3Et%B5'%FC6%5DS%95pV%95%01%81%FF'%07%00%00%00%00%00%00%00%00%00%F8x%C7%F0%BE%9COp%5D%C9%7C%AD%E7%E6%EBV%FB%1E%E0(%07%E5%AC%C6%3A%ABi%9C%8F%C6%0E9%AB%C0'%D2%8E%9F%F99%D0E%B5%99%14%F5%0D%CD%7F%24%C6%DEH%B8%E9rV%DFs%DB%D0%F7%00k%FE%1D%84%84%83J%B8%E3%BA%FB%EF%20%84%1C%D7%AD%B0%8E%D7U%C8Y%05%1E%D4t%EF%AD%95Q%BF8w%BF%E9%0A%BF%EB%03%00%00%00%00%00%00%00%00%00%B8vJ%8E%BB%F5%B1u%8Cx%80%E1o%5E%CA9%AB%CB%CB%8E%03%DF%1D%B7T%25%9C%D5(%EFJM8%AB%CC'%D2%B2*%A4s%E7c6%FB%3E%FA%A2%1E%80~%0E%3E%DA%10x%5D%95Uig%15u%15%ED%7C%14%B6%87%A1%3B%FCo8%A8%D8o%D3%ADO%01%EDx%83%1A~%1B%9FpP%A3%DC%C6'%9C%95gK%00%00%00%00%00%00%00%00%00%20%D9%C9%11%D0%C0%40%AF%3F%EE%EE%92%94%D6%16X%B5%BCMH%15%2F%BF%D4%A7%C87%F1%8E%F2%81%AE%AAvzr%DA2%ABV%17%7C%E63%83%E7I%DC%C6%0Bs%1B%EF6%1E%00%00%00%00%00%00%00%00%00%80cr%9CW%FF%7F%C6%01%0E%F1%CE%A5%84%B3%CA%BC%E0%CB%AA%84%CE%F9%BF)%EC%13%08WU%AE%AB%B1%AE%2BO%EC%8E%CBYe%FE%8CN%ABr%5Dy%60~%CFA%0D%F4%AE%D4%BE%C75%CA%EDVB%EA(%B7%F1%09g%E5%D9%12%00%00%00%00%00%00%00%00%00H%F6%EB%13S%E7y%5E%5E%FB%98%F0%22%D1%B2'%A7%F0%92%B1%BC%24z3%AC%7Dm%60%D5%92%B4%7CEUO%5E%F0%AA*%3BU%B9%AE%3E%A0j%94%07%A0%C7%A0%AB%FD%B5%3F%A0%F7%03T%3Dy%D7%F7%D6%D4%C0%AAU%D2%E6%DFt%3F%A8%CC%AA%F2%86%B9%D7%F5%1F%18%E6%01%F8%CC%D5%9E%F0%F3z%88%AA%90%EF%20%00%00%00%00%00%00%00%00%00%C0%A6%D3%EA%CFi%AFb%2C%7BB%0A%2B%C3%1A%D7%06V%D5%07%A8r%5D%3D%D9%A6%CAu%F5%25%CF%A2%99%97zNX%60%95%AB%5DUZ%D5%FBR%03%AB%1C%D4k%9F%3F%BB%5C%FF%81a%AE%AB'%7F%F3%EA%FE%F3z%94%AA%D8%DF%5B%01%00%00%00%00%00%00%00%00%00%8E%FB%F3%F2%B1%1B%8DWU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*UiU%C7%BBe%E7%F3%B9%CB%AAJ%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5*%AAj%FD%C6%D4%5Eo%90%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5%86%AF%1B%9F%98%DA%EBm%BBV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%AD%D6%E4%F58%01%00%00%00%00%00%00%00%00%00%00%00%00%00%40%85%7F%02%0C%008%C2%D0H%16j%8FX%00%00%00%00IEND%AEB%60%82") repeat-x !important;

                border-top: 1px solid #BBBBBB !important;

                border-right: 1px dashed #BBBBBB !important;

                border-bottom: 1px solid #000000 !important;

            }



            .firebugRulerV {

                top: 0 !important;

                left: -15px !important;

                width: 14px !important;

                height: 100% !important;

                background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%00%0E%00%00%13%88%08%02%00%00%00%0E%F5%CB%10%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%06~IDATx%DA%EC%DD%D1v%A20%14%40Qt%F1%FF%FF%E4%97%D9%07%3BT%19%92%DC%40(%90%EEy%9A5%CB%B6%E8%F6%9Ac%A4%CC0%84%FF%DC%9E%CF%E7%E3%F1%88%DE4%F8%5D%C7%9F%2F%BA%DD%5E%7FI%7D%F18%DDn%BA%C5%FB%DF%97%BFk%F2%10%FF%FD%B4%F2M%A7%FB%FD%FD%B3%22%07p%8F%3F%AE%E3%F4S%8A%8F%40%EEq%9D%BE8D%F0%0EY%A1Uq%B7%EA%1F%81%88V%E8X%3F%B4%CEy%B7h%D1%A2E%EBohU%FC%D9%AF2fO%8BBeD%BE%F7X%0C%97%A4%D6b7%2Ck%A5%12%E3%9B%60v%B7r%C7%1AI%8C%BD%2B%23r%00c0%B2v%9B%AD%CA%26%0C%1Ek%05A%FD%93%D0%2B%A1u%8B%16-%95q%5Ce%DCSO%8E%E4M%23%8B%F7%C2%FE%40%BB%BD%8C%FC%8A%B5V%EBu%40%F9%3B%A72%FA%AE%8C%D4%01%CC%B5%DA%13%9CB%AB%E2I%18%24%B0n%A9%0CZ*Ce%9C%A22%8E%D8NJ%1E%EB%FF%8F%AE%CAP%19*%C3%BAEKe%AC%D1%AAX%8C*%DEH%8F%C5W%A1e%AD%D4%B7%5C%5B%19%C5%DB%0D%EF%9F%19%1D%7B%5E%86%BD%0C%95%A12%AC%5B*%83%96%CAP%19%F62T%86%CAP%19*%83%96%CA%B8Xe%BC%FE)T%19%A1%17xg%7F%DA%CBP%19*%C3%BA%A52T%86%CAP%19%F62T%86%CA%B0n%A9%0CZ%1DV%C6%3D%F3%FCH%DE%B4%B8~%7F%5CZc%F1%D6%1F%AF%84%F9%0F6%E6%EBVt9%0E~%BEr%AF%23%B0%97%A12T%86%CAP%19%B4T%86%CA%B8Re%D8%CBP%19*%C3%BA%A52huX%19%AE%CA%E5%BC%0C%7B%19*CeX%B7h%A9%0C%95%E1%BC%0C%7B%19*CeX%B7T%06%AD%CB%5E%95%2B%BF.%8F%C5%97%D5%E4%7B%EE%82%D6%FB%CF-%9C%FD%B9%CF%3By%7B%19%F62T%86%CA%B0n%D1R%19*%A3%D3%CA%B0%97%A12T%86uKe%D0%EA%B02*%3F1%99%5DB%2B%A4%B5%F8%3A%7C%BA%2B%8Co%7D%5C%EDe%A8%0C%95a%DDR%19%B4T%C66%82fA%B2%ED%DA%9FC%FC%17GZ%06%C9%E1%B3%E5%2C%1A%9FoiB%EB%96%CA%A0%D5qe4%7B%7D%FD%85%F7%5B%ED_%E0s%07%F0k%951%ECr%0D%B5C%D7-g%D1%A8%0C%EB%96%CA%A0%A52T%C6)*%C3%5E%86%CAP%19%D6-%95A%EB*%95q%F8%BB%E3%F9%AB%F6%E21%ACZ%B7%22%B7%9B%3F%02%85%CB%A2%5B%B7%BA%5E%B7%9C%97%E1%BC%0C%EB%16-%95%A12z%AC%0C%BFc%A22T%86uKe%D0%EA%B02V%DD%AD%8A%2B%8CWhe%5E%AF%CF%F5%3B%26%CE%CBh%5C%19%CE%CB%B0%F3%A4%095%A1%CAP%19*Ce%A8%0C%3BO*Ce%A8%0C%95%A12%3A%AD%8C%0A%82%7B%F0v%1F%2FD%A9%5B%9F%EE%EA%26%AF%03%CA%DF9%7B%19*Ce%A8%0C%95%A12T%86%CA%B8Ze%D8%CBP%19*Ce%A8%0C%95%D1ae%EC%F7%89I%E1%B4%D7M%D7P%8BjU%5C%BB%3E%F2%20%D8%CBP%19*Ce%A8%0C%95%A12T%C6%D5*%C3%5E%86%CAP%19*Ce%B4O%07%7B%F0W%7Bw%1C%7C%1A%8C%B3%3B%D1%EE%AA%5C%D6-%EBV%83%80%5E%D0%CA%10%5CU%2BD%E07YU%86%CAP%19*%E3%9A%95%91%D9%A0%C8%AD%5B%EDv%9E%82%FFKOee%E4%8FUe%A8%0C%95%A12T%C6%1F%A9%8C%C8%3D%5B%A5%15%FD%14%22r%E7B%9F%17l%F8%BF%ED%EAf%2B%7F%CF%ECe%D8%CBP%19*Ce%A8%0C%95%E1%93~%7B%19%F62T%86%CAP%19*Ce%A8%0C%E7%13%DA%CBP%19*Ce%A8%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4%AE%A4%F5%25%C0%00%DE%BF%5C'%0F%DA%B8q%00%00%00%00IEND%AEB%60%82") repeat-y !important;

                border-left: 1px solid #BBBBBB !important;

                border-right: 1px solid #000000 !important;

                border-bottom: 1px dashed #BBBBBB !important;

            }



            .overflowRulerX > .firebugRulerV {

                left: 0 !important;

            }



            .overflowRulerY > .firebugRulerH {

                top: 0 !important;

            }



            /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

            .fbProxyElement {

                position: fixed !important;

                pointer-events: auto !important;

            }

        </style></head>
    <body id="" class="zh_CN " ontouchstart="">

        <script>

            var benchmark = {
                mark: function (key) {
                    benchmark[key] = (+new Date());
                },
                pageBegin: 0,
                pageEnd: 0,
                cssEnd: 0,
                jsEnd: 0,
                moonJsEnd: 0,
                soonJsEnd: 0
            };
            benchmark.mark('pageBegin');
        </script>
        <div class="container">
            <div style="display: none;" id="js_plugins_loading" class="loading">
                加载中    </div>
            <div id="js_plugins" style="visibility: visible;">
                <div class="slider js_plugin" id="namespace_0" data-pid="1">
                    <div class="swiper" style="height: 180px; width: 4557px;">

                        <div style="width: 1519px; height: 180px;" class="item js_post">
                            <a href="http://mp.weixin.qq.com/s?__biz=MzI1OTIxNjA2OA==&mid=100000488&idx=1&sn=781a0e4f95af84ffa8a9226be7690dbb#rd">
                                <div class="img js_img" style="background-image: url('http://mmbiz.qpic.cn/mmbiz/OsOjJJlzzCPwcT2GNmh5sjaQqpJicZTUatwibzzCXq6XUEKYsgb7cDZwIwn2FIBo8ldAjoCJibvgWtIoOn011nG0g/0?wx_fmt=jpeg');"></div>
                                <p class="desc js_title">改造家 | 他家有扇“任意门”，鹿晗也来这儿拍MV（有视频+彩蛋）</p>
                            </a>
                        </div>

                        <!--<div style="width: 1519px; height: 180px;" class="item js_post">
                            <a href="http://mp.weixin.qq.com/s?__biz=MjM5MDI5OTkyOA==&amp;mid=417834138&amp;idx=1&amp;sn=40043391fb71d0c654bdd89bc4810276&amp;scene=19#wechat_redirect">
                                <div class="img js_img" style="background-image: url('http://mmbiz.qpic.cn/mmbiz/OsOjJJlzzCP0t1Vqa4Nic4Ne2QNVibJ4URJuKtxIrRadIcbCx3djsgcMZ2AxMG5n98ZyehtQvCwWHUeBu6Mj78kw/0?wx_fmt=jpeg');"></div>
                                <p class="desc js_title">这位77岁的奶奶白天是工作狂，晚上是派对女皇！</p>
                            </a>
                        </div>-->

                        

                    </div>
                    <div class="indicator">

                        <a href="javascript:;"><i class="icon_dot active"></i></a>

                        <a href="javascript:;"><i class="icon_dot "></i></a>

                        <a href="javascript:;"><i class="icon_dot "></i></a>

                    </div>
                </div>
                <div class="tab js_plugin" id="namespace_1" data-pid="2">
                    <!--  横菜单
                    <div class="tab_hd">
                        <div class="tab_hd_inner">

                            <div type="index" data-index="0" class="item active">茶饮</div>

                            <div type="index" data-index="1" class="item ">节气</div>

                            <div type="index" data-index="2" class="item ">美器</div>

                            <div type="index" data-index="3" class="item ">养生</div>

                            <div type="index" data-index="4" class="item ">家居</div>

                        </div>
                    </div>
                    -->
                    <div class="tab_bd">

                        <div class="article_list article_list_0">


                            
                            <a class="list_item js_post" href="http://mp.weixin.qq.com/s?__biz=MjM5MDI5OTkyOA==&amp;mid=212154386&amp;idx=1&amp;sn=acb0e4145e18d523f810e05a5eb4d289&amp;scene=19#wechat_redirect">
                                <div class="cover">
                                    <img class="img js_img" src="%E4%B8%80%E6%9D%A1%EF%BD%9C%E7%94%9F%E6%B4%BB_files/0_028.jpg" alt="">
                                </div>
                                <div class="cont">
                                    <h2 class="title js_title">只有心无杂念的人，才能看见这些细微的变化</h2>
                                    <p class="desc">窗口起风了，你却继续照旧优雅地泡着茶，最后，壶也凉了，茶也凉了。</p>
                                </div>
                            </a>

                            <a class="list_item js_post" href="http://mp.weixin.qq.com/s?__biz=MjM5MDI5OTkyOA==&amp;mid=213892103&amp;idx=1&amp;sn=a87778cad38f3bd21455dea5807fe54c&amp;scene=19#wechat_redirect">
                                <div class="cover">
                                    <img class="img js_img" src="%E4%B8%80%E6%9D%A1%EF%BD%9C%E7%94%9F%E6%B4%BB_files/0_038.jpg" alt="">
                                </div>
                                <div class="cont">
                                    <h2 class="title js_title">辞掉无趣的工作，下半辈子这样任性地生活</h2>
                                    <p class="desc">当然，前提也许是突然继承了一笔遗产……</p>
                                </div>
                            </a>

                            

                        </div>

                        <div class="article_list article_list_1" style="display: none;">

                            
                            

                            <a class="list_item js_post" href="http://mp.weixin.qq.com/s?__biz=MjM5MDI5OTkyOA==&amp;mid=213057565&amp;idx=1&amp;sn=b87b162dbe37a3f76f698de90d00d6c5&amp;scene=19#wechat_redirect">
                                <div class="cover">
                                    <img class="img js_img" src="%E4%B8%80%E6%9D%A1%EF%BD%9C%E7%94%9F%E6%B4%BB_files/640_005.jpg" alt="">
                                </div>
                                <div class="cont">
                                    <h2 class="title js_title">今日谷雨，宜播种</h2>
                                    <p class="desc">雨生百谷，清净明洁。 今日17时41分50秒，谷雨。</p>
                                </div>
                            </a>

                        </div>

                        <div class="article_list article_list_2" style="display: none;">

                            

                            

                          

                            <a class="list_item js_post" href="http://mp.weixin.qq.com/s?__biz=MjM5MDI5OTkyOA==&amp;mid=226186546&amp;idx=1&amp;sn=45babd412ba40eaafb342e07ea36daee&amp;scene=19#wechat_redirect">
                                <div class="cover">
                                    <img class="img js_img" src="%E4%B8%80%E6%9D%A1%EF%BD%9C%E7%94%9F%E6%B4%BB_files/0_013.jpg" alt="">
                                </div>
                                <div class="cont">
                                    <h2 class="title js_title">一件事证明爸爸最爱你</h2>
                                    <p class="desc">倾尽平生所学，只为了做个东西给你用。</p>
                                </div>
                            </a>

                            <a class="list_item js_post" href="http://mp.weixin.qq.com/s?__biz=MjM5MDI5OTkyOA==&amp;mid=224794710&amp;idx=1&amp;sn=f6b7c53180a490a7cef3f686591038ab&amp;scene=19#wechat_redirect">
                                <div class="cover">
                                    <img class="img js_img" src="%E4%B8%80%E6%9D%A1%EF%BD%9C%E7%94%9F%E6%B4%BB_files/0_007.jpg" alt="">
                                </div>
                                <div class="cont">
                                    <h2 class="title js_title">一家几代宅男默默打了130年的壶</h2>
                                    <p class="desc">“能呆在工房，就是我最开心的事情，对于外出旅游之类的事，没有什么兴趣。”——日本竹影堂传人中村佳永</p>
                                </div>
                            </a>

                            <a class="list_item js_post" href="http://mp.weixin.qq.com/s?__biz=MjM5MDI5OTkyOA==&amp;mid=224697801&amp;idx=1&amp;sn=2f2ebf3134f274957c57984a067e5de1&amp;scene=19#wechat_redirect">
                                <div class="cover">
                                    <img class="img js_img" src="%E4%B8%80%E6%9D%A1%EF%BD%9C%E7%94%9F%E6%B4%BB_files/0_016.jpg" alt="">
                                </div>
                                <div class="cont">
                                    <h2 class="title js_title">看了他做的东西，恨不得把家里的碗筷都扔掉</h2>
                                    <p class="desc">“对料理心怀敬意，做出不同的食器，这是我所追求的东西。”——日本职人都筑明</p>
                                </div>
                            </a>

                 

                        </div>

    
                    </div>
                </div>

            </div>
        </div>


        <script>
            var __DEBUGINFO = {
                debug_js: "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_wap/debug/console2ca724.js",
                safe_js: "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_wap/safe/moonsafe2d5cb8.js",
                res_list: []
            };
        </script>
        <script>window.moon_map = {"biz_common/utils/report.js": "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_common/utils/report275627.js", "homepage/report.js": "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/homepage/report243273.js", "biz_wap/zepto/event.js": "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_wap/zepto/event275627.js", "biz_wap/zepto/zepto.js": "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/biz_wap/zepto/zepto275627.js", "homepage/index.js": "http://res.wx.qq.com/mmbizwap/zh_CN/htmledition/js/homepage/index2d1390.js"};window.moon_crossorigin = true;</script>
        <script>
            var cgiData = {
                biz: 'MjM5MDI5OTkyOA==',
                hid: '4',
                pagename: '一条｜生活',
                comboList: {
                    'js': '/hp/hp_1_7.js,/hp/hp_2_5.js',
                    'css.js': '/hp/hp_1_7.css.js,/hp/hp_2_5.css.js'
                },
                biz_info: {
                    nickname: "一条"
                }
            };
        </script>
        <script>
            var soonBaseURL = location.protocol + '//' + window.location.host,
                    soonMap = {
                        'js': [],
                        'css.js': []
                    };




            for (var k in cgiData.comboList) {
                soonMap[k] = cgiData.comboList[k].split(',');
            }


            function soonDefineCallback(fileType) {
                if (fileType == 'css.js') {
                    if (seajs.requiredNum['css.js'] >= Object.keys(soon.map['css.js']).length) {
                        benchmark.mark('cssEnd');
                    }
                } else if (fileType == 'js' || fileType == 'moon.js') {
                    if (fileType == 'js' && seajs.requiredNum['js'] >= Object.keys(soon.map['js']).length) {
                        benchmark.mark('soonJsEnd');
                    }
                    if (fileType == 'moon.js' && seajs.requiredNum['moon.js'] >= Object.keys(soon.map['moon.js']).length) {
                        benchmark.mark('moonJsEnd');
                    }
                    if (seajs.requiredNum['js'] + seajs.requiredNum['moon.js'] >= Object.keys(soon.map['js']).length + Object.keys(soon.map['moon.js']).length) {
                        benchmark.mark('jsEnd');
                    }
                }
                if (seajs.requiredNum['css.js'] >= Object.keys(soon.map['css.js']).length && seajs.requiredNum['js'] >= Object.keys(soon.map['js']).length && seajs.requiredNum['moon.js'] >= Object.keys(soon.map['moon.js']).length) {


                    document.getElementById('js_plugins_loading').style.display = "none";
                    document.getElementById('js_plugins').style.visibility = "visible";
                }
            }

            benchmark.mark('soonJsBegin');
        </script>

        <script type="text/javascript" src="%E4%B8%80%E6%9D%A1%EF%BD%9C%E7%94%9F%E6%B4%BB_files/soon243273.js"></script>
        <script>
            seajs.use('homepage/index.js');
            benchmark.mark('pageEnd');
        </script>





    </body></html>