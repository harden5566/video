<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--会员中心父级模板-->
    <meta name="csrf-token" content="371b15f6c86493f22afc66674139a1cb">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css?version=v2.0.5" rel="stylesheet">
    <link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css?version=v2.0.5" rel="stylesheet">
    <link rel="stylesheet" href="/resource/hdjs/dist/static/css/hdjs.css?version=v2.0.5">
    <script>
        //HDJS组件需要的配置
        window.hdjs = {
            'base': '/resource/hdjs',
            'uploader': 'http://www.houdunwang.com?s=component/upload/uploader&m=article&siteid=11',
            'filesLists': 'http://www.houdunwang.com?s=component/upload/filesLists&m=article&siteid=11',
            'removeImage': 'http://www.houdunwang.com?s=component/upload/removeImage&m=article&siteid=11',
            'ossSign': 'http://www.houdunwang.com?s=component/oss/sign&m=article&siteid=11',
        };
        window.system = {
            attachment: "/attachment",
            root: "http://www.houdunwang.com",
            url: "http://www.houdunwang.com/article11-50-42-3.html",
            siteid: "11",
            module: "article",
            //用于上传等组件使用标识当前是后台用户
            user_type: 'member',
            is_wechat: '0'
        }
        window.user = {
            uid: "",
            nickname: "",
            mobile: "",
            gender: "",
            email_valid: "",
            mobile_valid: "",
        }
        if (navigator.appName == 'Microsoft Internet Explorer') {
            if (navigator.userAgent.indexOf("MSIE 5.0") > 0 || navigator.userAgent.indexOf("MSIE 6.0") > 0 || navigator.userAgent.indexOf("MSIE 7.0") > 0) {
                alert('您使用的 IE 浏览器版本过低, 推荐使用 Chrome 浏览器或 IE8 及以上版本浏览器.');
            }
        }
    </script>
    <script src="/resource/hdjs/dist/static/requirejs/require.js?version=v2.0.5"></script>
    <script src="/resource/hdjs/dist/static/requirejs/config.js?version=v2.0.5"></script>
    <link rel="stylesheet" type="text/css" href="http://www.houdunwang.com/theme/houdunwang/web/css/common.css?version=v2.0.5" />
    <link rel="stylesheet" type="text/css" href="http://www.houdunwang.com/theme/houdunwang/web/css/contactus.css?version=v2.0.5" />
    <link rel="stylesheet" href="<?php echo WEB_PATH;?>statics/houdunwang/css/reset.css">
    <link rel="stylesheet" href="<?php echo WEB_PATH;?>statics/houdunwang/css/common.css">
    <link rel="stylesheet" href="<?php echo WEB_PATH;?>statics/houdunwang/css/about.css">
    <title>联系我们-后盾人</title>
</head>
<body>
<!--头部-->
<?php include template('content','header'); ?>
<!--头部结束-->

<!--主体区域-->
<div id="content" style="margin-top:100px">
    <div class="contentarea">
        <!--左侧菜单-->
        <!--左侧菜单结束-->

        <div class="right" style="width:100%;">
            <h2>联系我们</h2>
            <div class="body">
                <!-- <img src="template/img/us.jpg"/> -->
                <img src="http://www.houdunwang.com/theme/houdunwang/web/images/yumaoqiu.jpg"/>
                <p class="imgs"></p>
                <dl>
                    <dt>后盾网（北京后盾计算机技术培训有限责任公司）</dt>
                    <dd>
                        <table>
                            <tr><td width="100">招生热线</td><td>400-682-3231</td></tr>
                            <tr><td>刘老师：</td><td>18611400072</td></tr>
                            <tr><td>古老师：</td><td>13910959565</td></tr>
                            <tr><td>QQ:</td>
                                <td>
                                    <a target=blank href=http://wpa.qq.com/msgrd?V=3&uin=2781400417&Site=后盾网&Menu=yes><img border="0" SRC="http://wpa.qq.com/pa?p=1:2781400417:7" alt="联系在线客服老师" style="width:71px;height:24px;margin:0;" class="online"></a>
                                    <a target=blank href=http://wpa.qq.com/msgrd?V=3&uin=1455067020&Site=后盾网&Menu=yes><img border="0" SRC="http://wpa.qq.com/pa?p=1:1455067020:7" alt="联系在线客服老师" style="width:71px;height:24px;margin:0;" class="online"></a>
                                    <a target=blank href=http://wpa.qq.com/msgrd?V=3&uin=931241005&Site=后盾网&Menu=yes><img border="0" SRC="http://wpa.qq.com/pa?p=1:931241005:7" alt="联系在线客服老师" style="width:71px;height:24px;margin:0;" class="online"></a>
                                </td></tr>
                        </table>
                    </dd>
                </dl>
                <!--北京校区-->
                <dl>
                    <dt>后盾网北京总部</dt>
                    <dd>
                        <table>
                            <tr><td width="100">邮编：</td><td>100103</td></tr>
                            <tr><td>地址：</td><td>北京市朝阳区孙河顺白路12号</td></tr>
                            <tr><td><strong>宿舍配置：</strong></td><td><strong>2-6人间，中央空调、宽带、独立卫生间、洗衣机、洗澡间（如需其他生活用品费用自理）</strong></td></tr>
                            <tr><td>通用乘车路线：</td><td>地铁15号线马泉营站，C口出右转坐988路公交车在两站后终点下车，下车后前行到马泉营北门出去右转100米即可到达后盾IT教育。</td></tr>

                            <tr><td>北京站路线：</td><td>坐开往东直门方向的2号线，在东直门下车，换乘13号线在望京西下车，换乘开往俸伯方向的15号线，在马泉营下车， C口出右转坐988路公交车在两站后终点下车，下车后前行到马泉营北门出去右转100米即可到达后盾IT教育。</td></tr>

                            <tr><td>北京西站路线：</td><td>坐开往国家图书馆管方向的9号线，在白石桥南下车，换乘开往潞城的6号线，在南锣鼓巷下车，换乘开往朱辛庄方向的8号线，在奥林匹克公园下车，换乘开往俸伯方向的15号线，在马泉营下车， C口出右转坐988路公交车在两站后终点下车，下车后前行到马泉营北门出去右转100米即可到达后盾IT教育。</td></tr>


                            <tr><td>北京南站路线：</td><td>坐开往安河桥北方向的4号线，在宣武门下车，换乘开往西直门方向的2号线，在南锣鼓巷下车，换乘开往朱辛庄方向的8号线，在奥林匹克公园下车，换乘开往俸伯方向的15号线，在马泉营下车， C口出右转坐988路公交车在两站后终点下车，下车后前行到马泉营北门出去右转100米即可到达后盾IT教育。</td></tr>


                            <tr><td>北京北站路线：</td><td>坐开往东直门的2号线，在东直门下车，换乘13号线在望京西下车，坐开往俸伯方向的15号线，在马泉营下车， C口出右转坐988路公
                                交车在两站后终点下车，下车后前行到马泉营北门出去右转100米即可到达后盾IT教育。</td></tr>


                            <tr><td>南苑机场路线：</td><td>乘坐机场大巴西单专线，在大红门（福海公园）站下车，步行420米到大红门地铁站，乘坐开往石榴庄、宋家庄方向的10号线，在芍药居下车，换乘开往西直门方向的13号线，在望京西下车，换乘开往俸伯的15号线，在马泉营下车， C口出右转坐988路公交车在两站后终点下车，下车后前行到马泉营北门出去右转100米即可到达后盾IT教育。</td></tr>


                            <tr><td>首都机场路线：</td><td>步行650米，到达公交枢纽，乘坐850路车，在孙河站下车，步行1.6公里即可到达后盾IT教育，也可以打车。</td></tr>


                            <tr>

                                <td colspan="2">
                                    <!--<img src="../template/img/map.jpg" alt="后盾IT教育" style="width:800px;">-->
                                    <a href="http://j.map.baidu.com/GQOjB" target="_blank" style="font-size: 16px;line-height: 2em;font-weight: 700;">点击在地图中查看地址</a>
                                </td>
                            </tr>
                        </table>
                    </dd>

                </dl>
                <!--北京校区结束-->
                <!--上海校区-->
                <dl>
                    <dt>后盾网上海分部</dt>
                    <dd>
                        <table>
                            <tr><td width="130">邮编：</td><td>201613</td></tr>
                            <tr><td>地址：</td><td>上海市松江区江田东路宏亿科技创新园185号9号楼402</td></tr>
                            <tr><td><strong>宿舍配置：</strong></td><td><strong>6-8人间，空调、宽带、独立卫生间、洗衣机、热水器、抽油烟机、洗菜池（如需其他生活用品费用自理）</strong></td></tr>
                            <tr><td>虹桥机场路线：</td><td>地铁10号线(虹桥火车站方向)(虹桥1号航站楼站-虹桥2号航站楼站) ->虹桥枢纽4路(虹桥枢纽东交通中心站-七宝站)->地铁9号线(松江南站方向)(七宝站-松江体育中心站 <3口出>)->松江8路(荣乐路人民北路站-江田东路站)</td></tr>

                            <tr><td>虹桥火车站路线：</td><td>虹桥枢纽10路(虹桥西交通中心->荣乐路人民北路站)->松江8路(荣乐路人民北路站-江田东路站)</td></tr>


                            <tr><td>上海站路线：</td><td>地铁3号线(上海南站方向)(上海火车站-宜山路站)->地铁9号线(松江南站方向)(宜山路站-松江体育中心站 <3口出>)->松江8路(荣乐路人民北路站-江田东路站)</td></tr>


                            <tr><td>上海南站路线：</td><td>地铁3号线(江杨北路方向)(上海南站-宜山路站)->地铁9号线(松江南站方向)(宜山路站-松江体育中心站 <3口出>)->松江8路(荣乐路人民北路站-江田东路站)</td></tr>


                            <tr>
                                <td colspan="2">
                                    <!--<img src="../template/img/map.jpg" alt="后盾IT教育" style="width:800px;">-->
                                    <a href="http://j.map.baidu.com/W4r_9" target="_blank" style="font-size: 16px;line-height: 2em;font-weight: 700;">点击在地图中查看地址</a>
                                </td>
                            </tr>
                        </table>
                    </dd>
                    <dt>汇款帐号：</dt>
                    <dd>
                        <table>
                            <tr><th>对公账户</th></tr>
                            <tr><td width="100">工商银行</td><td width="200">0200 2030 0920 0008 969</td><td>	北京后盾计算机技术培训有限责任公司</td></tr>
                            <tr><td>支付宝</td><td>3031654299@qq.com</td><td>北京后盾计算机技术培训有限责任公司</td></tr>
                        </table>
                        <table>
                            <tr><th>会计账户</th></tr>
                            <tr><td width="100">建设银行</td><td width="200">6227 0000 1137 0061 657</td><td>刘永红</td></tr>
                            <tr><td>工商银行</td><td>6222 0802 0002 4636 568</td><td>刘永红</td></tr>
                            <tr><td>农业银行</td><td>6228 4800 1065 8756 415</td><td>刘永红</td></tr>
                            <tr><td>支付宝</td><td>1455067020@qq.com</td><td>刘永红</td></tr>
                            <tr><td colspan="3">
                                <div id="allmap"></div>
                            </td></tr>
                        </table>
                    </dd>
                </dl>
                <!--上海校区结束-->
            </div>
        </div>
    </div>
</div>
<!--主体区域结束-->

<!--底部-->
<!-- 百度流量统计 -->
<script>var _hmt = _hmt || [];(function() {  var hm = document.createElement("script");  hm.src = "https://hm.baidu.com/hm.js?412e6259ee8065b7b9cfc2934c6bbf02";  var s = document.getElementsByTagName("script")[0];   s.parentNode.insertBefore(hm, s);})();</script>
<!-- 百度流量统计结束 -->
<link rel="stylesheet" href="http://www.houdunwang.com/theme/houdunwang/web/css/footer.css?version=v2.0.5" />
<?php include template('content','footer'); ?>
<!--底部结束-->

</body>
</html>
        