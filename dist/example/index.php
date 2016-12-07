<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>上门宝超市-社区网上超市</title>
    <link rel="stylesheet" href="../style/weui.css"/>
    <link rel="stylesheet" href="./example.css"/>
</head>
<body ontouchstart>
<div class="weui-toptips weui-toptips_warn js_tooltips">错误提示</div>

<div class="container" id="container"></div>

<script type="text/html" id="tpl_home"><?PHP include "tpl_home.php"?></script>

<script type="text/html" id="tpl_button">
</script>
<script type="text/html" id="tpl_list">

</script>

<script type="text/html" id="tpl_searchbar">
<?PHP include 'tpl_searchbar.php'?>
</script>

<script type="text/html" id="tpl_toast"><?PHP include "tpl_toast.php"?></script>

<script type="text/html" id="tpl_msg">
    <div class="page">
        <div class="page__hd">
            <h1 class="page__title">Msg</h1>
            <p class="page__desc">提示页</p>
        </div>
        <div class="page__bd page__bd_spacing">
            <a href="#msg_success" class="weui-btn weui-btn_default">成功提示页</a>
            <a href="#msg_warn" class="weui-btn weui-btn_default">失败提示页</a>
        </div>
        <div class="page__ft">
            <a href="javascript:home()"><img src="./images/icon_footer_link.png" /></a>
        </div>
    </div>
</script>
<script type="text/html" id="tpl_msg_success">
    <div class="page">
        <div class="weui-msg">
            <div class="weui-msg__icon-area"><i class="weui-icon-success weui-icon_msg"></i></div>
            <div class="weui-msg__text-area">
                <h2 class="weui-msg__title">操作成功</h2>
                <p class="weui-msg__desc">内容详情，可根据实际需要安排，如果换行则不超过规定长度，居中展现<a href="javascript:void(0);">文字链接</a></p>
            </div>
            <div class="weui-msg__opr-area">
                <p class="weui-btn-area">
                    <a href="javascript:history.back();" class="weui-btn weui-btn_primary">推荐操作</a>
                    <a href="javascript:history.back();" class="weui-btn weui-btn_default">辅助操作</a>
                </p>
            </div>
            <div class="weui-msg__extra-area">
                <div class="weui-footer">
                    <p class="weui-footer__links">
                        <a href="javascript:void(0);" class="weui-footer__link">底部链接文本</a>
                    </p>
                    <p class="weui-footer__text">Copyright &copy; 2008-2016 weui.io</p>
                </div>
            </div>
        </div>
    </div>
</script>
<script type="text/html" id="tpl_msg_warn">
    <div class="page">
        <div class="weui-msg">
            <div class="weui-msg__icon-area"><i class="weui-icon-warn weui-icon_msg"></i></div>
            <div class="weui-msg__text-area">
                <h2 class="weui-msg__title">操作失败</h2>
                <p class="weui-msg__desc">内容详情，可根据实际需要安排，如果换行则不超过规定长度，居中展现<a href="javascript:void(0);">文字链接</a></p>
            </div>
            <div class="weui-msg__opr-area">
                <p class="weui-btn-area">
                    <a href="javascript:history.back();" class="weui-btn weui-btn_primary">推荐操作</a>
                    <a href="javascript:history.back();" class="weui-btn weui-btn_default">辅助操作</a>
                </p>
            </div>
            <div class="weui-msg__extra-area">
                <div class="weui-footer">
                    <p class="weui-footer__links">
                        <a href="javascript:void(0);" class="weui-footer__link">底部链接文本</a>
                    </p>
                    <p class="weui-footer__text">Copyright &copy; 2008-2016 weui.io</p>
                </div>
            </div>
        </div>
    </div>
</script>
<script type="text/html" id="tpl_article">
    <div class="page">
        <div class="page__hd">
            <h1 class="page__title">Article</h1>
            <p class="page__desc">文章</p>
        </div>
        <div class="page__bd">
            <article class="weui-article">
                <h1>大标题</h1>
                <section>
                    <h2 class="title">章标题</h2>
                    <section>
                        <h3>1.1 节标题</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                        </p>
                        <p>
                            <img src="./images/pic_article.png" alt="">
                            <img src="./images/pic_article.png" alt="">
                        </p>
                    </section>
                    <section>
                        <h3>1.2 节标题</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </section>
                </section>
            </article>
        </div>
        <div class="page__ft">
            <a href="javascript:home()"><img src="./images/icon_footer_link.png" /></a>
        </div>
    </div>
</script>

<script type="text/html" id="tpl_panel">
    <div class="page">
        <div class="page__hd">
            <h1 class="page__title">Panel</h1>
            <p class="page__desc">面板</p>
        </div>
        <div class="page__bd">
            <div class="weui-panel weui-panel_access">
                <div class="weui-panel__hd">图文组合列表</div>
                <div class="weui-panel__bd">
                    <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                        <div class="weui-media-box__hd">
                            <img class="weui-media-box__thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAMAAAAOusbgAAAAeFBMVEUAwAD///+U5ZTc9twOww7G8MYwzDCH4YcfyR9x23Hw+/DY9dhm2WZG0kbT9NP0/PTL8sux7LFe115T1VM+zz7i+OIXxhes6qxr2mvA8MCe6J6M4oz6/frr+us5zjn2/fa67rqB4IF13XWn6ad83nxa1loqyirn+eccHxx4AAAC/klEQVRo3u2W2ZKiQBBF8wpCNSCyLwri7v//4bRIFVXoTBBB+DAReV5sG6lTXDITiGEYhmEYhmEYhmEYhmEY5v9i5fsZGRx9PyGDne8f6K9cfd+mKXe1yNG/0CcqYE86AkBMBh66f20deBc7wA/1WFiTwvSEpBMA2JJOBsSLxe/4QEEaJRrASP8EVF8Q74GbmevKg0saa0B8QbwBdjRyADYxIhqxAZ++IKYtciPXLQVG+imw+oo4Bu56rjEJ4GYsvPmKOAB+xlz7L5aevqUXuePWVhvWJ4eWiwUQ67mK51qPj4dFDMlRLBZTqF3SDvmr4BwtkECu5gHWPkmDfQh02WLxXuvbvC8ku8F57GsI5e0CmUwLz1kq3kD17R1In5816rGvQ5VMk5FEtIiWislTffuDpl/k/PzscdQsv8r9qWq4LRWX6tQYtTxvI3XyrwdyQxChXioOngH3dLgOFjk0all56XRi/wDFQrGQU3Os5t0wJu1GNtNKHdPqYaGYQuRDfbfDf26AGLYSyGS3ZAK4S8XuoAlxGSdYMKwqZKM9XJMtyqXi7HX/CiAZS6d8bSVUz5J36mEMFDTlAFQzxOT1dzLRljjB6+++ejFqka+mXIe6F59mw22OuOw1F4T6lg/9VjL1rLDoI9Xzl1MSYDNHnPQnt3D1EE7PrXjye/3pVpr1Z45hMUdcACc5NVQI0bOdS1WA0wuz73e7/5TNqBPhQXPEFGJNV2zNqWI7QKBd2Gn6AiBko02zuAOXeWIXjV0jNqdKegaE/kJQ6Bfs4aju04lMLkA2T5wBSYPKDGF3RKhFYEa6A1L1LG2yacmsaZ6YPOSAMKNsO+N5dNTfkc5Aqe26uxHpx7ZirvgCwJpWq/lmX1hA7LyabQ34tt5RiJKXSwQ+0KU0V5xg+hZrd4Bn1n4EID+WkQdgLfRNtvil9SPfwy+WQ7PFBWQz6dGWZBLkeJFXZGCfLUjCgGgqXo5TuSu3cugdcTv/HjqnBTEMwzAMwzAMwzAMwzAMw/zf/AFbXiOA6frlMAAAAABJRU5ErkJggg==" alt="">
                        </div>
                        <div class="weui-media-box__bd">
                            <h4 class="weui-media-box__title">标题一</h4>
                            <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                        </div>
                    </a>
                    <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
                        <div class="weui-media-box__hd">
                            <img class="weui-media-box__thumb" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAMAAAAOusbgAAAAeFBMVEUAwAD///+U5ZTc9twOww7G8MYwzDCH4YcfyR9x23Hw+/DY9dhm2WZG0kbT9NP0/PTL8sux7LFe115T1VM+zz7i+OIXxhes6qxr2mvA8MCe6J6M4oz6/frr+us5zjn2/fa67rqB4IF13XWn6ad83nxa1loqyirn+eccHxx4AAAC/klEQVRo3u2W2ZKiQBBF8wpCNSCyLwri7v//4bRIFVXoTBBB+DAReV5sG6lTXDITiGEYhmEYhmEYhmEYhmEY5v9i5fsZGRx9PyGDne8f6K9cfd+mKXe1yNG/0CcqYE86AkBMBh66f20deBc7wA/1WFiTwvSEpBMA2JJOBsSLxe/4QEEaJRrASP8EVF8Q74GbmevKg0saa0B8QbwBdjRyADYxIhqxAZ++IKYtciPXLQVG+imw+oo4Bu56rjEJ4GYsvPmKOAB+xlz7L5aevqUXuePWVhvWJ4eWiwUQ67mK51qPj4dFDMlRLBZTqF3SDvmr4BwtkECu5gHWPkmDfQh02WLxXuvbvC8ku8F57GsI5e0CmUwLz1kq3kD17R1In5816rGvQ5VMk5FEtIiWislTffuDpl/k/PzscdQsv8r9qWq4LRWX6tQYtTxvI3XyrwdyQxChXioOngH3dLgOFjk0all56XRi/wDFQrGQU3Os5t0wJu1GNtNKHdPqYaGYQuRDfbfDf26AGLYSyGS3ZAK4S8XuoAlxGSdYMKwqZKM9XJMtyqXi7HX/CiAZS6d8bSVUz5J36mEMFDTlAFQzxOT1dzLRljjB6+++ejFqka+mXIe6F59mw22OuOw1F4T6lg/9VjL1rLDoI9Xzl1MSYDNHnPQnt3D1EE7PrXjye/3pVpr1Z45hMUdcACc5NVQI0bOdS1WA0wuz73e7/5TNqBPhQXPEFGJNV2zNqWI7QKBd2Gn6AiBko02zuAOXeWIXjV0jNqdKegaE/kJQ6Bfs4aju04lMLkA2T5wBSYPKDGF3RKhFYEa6A1L1LG2yacmsaZ6YPOSAMKNsO+N5dNTfkc5Aqe26uxHpx7ZirvgCwJpWq/lmX1hA7LyabQ34tt5RiJKXSwQ+0KU0V5xg+hZrd4Bn1n4EID+WkQdgLfRNtvil9SPfwy+WQ7PFBWQz6dGWZBLkeJFXZGCfLUjCgGgqXo5TuSu3cugdcTv/HjqnBTEMwzAMwzAMwzAMwzAMw/zf/AFbXiOA6frlMAAAAABJRU5ErkJggg==" alt="">
                        </div>
                        <div class="weui-media-box__bd">
                            <h4 class="weui-media-box__title">标题二</h4>
                            <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                        </div>
                    </a>
                </div>
                <div class="weui-panel__ft">
                    <a href="javascript:void(0);" class="weui-cell weui-cell_access weui-cell_link">
                        <div class="weui-cell__bd">查看更多</div>
                        <span class="weui-cell__ft"></span>
                    </a>
                </div>
            </div>
            <div class="weui-panel weui-panel_access">
                <div class="weui-panel__hd">文字组合列表</div>
                <div class="weui-panel__bd">
                    <div class="weui-media-box weui-media-box_text">
                        <h4 class="weui-media-box__title">标题一</h4>
                        <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                    </div>
                    <div class="weui-media-box weui-media-box_text">
                        <h4 class="weui-media-box__title">标题二</h4>
                        <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                    </div>
                </div>
                <div class="weui-panel__ft">
                    <a href="javascript:void(0);" class="weui-cell weui-cell_access weui-cell_link">
                        <div class="weui-cell__bd">查看更多</div>
                        <span class="weui-cell__ft"></span>
                    </a>
                </div>
            </div>
            <div class="weui-panel">
                <div class="weui-panel__hd">小图文组合列表</div>
                <div class="weui-panel__bd">
                    <div class="weui-media-box weui-media-box_small-appmsg">
                        <div class="weui-cells">
                            <a class="weui-cell weui-cell_access" href="javascript:;">
                                <div class="weui-cell__hd"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuCAMAAABgZ9sFAAAAVFBMVEXx8fHMzMzr6+vn5+fv7+/t7e3d3d2+vr7W1tbHx8eysrKdnZ3p6enk5OTR0dG7u7u3t7ejo6PY2Njh4eHf39/T09PExMSvr6+goKCqqqqnp6e4uLgcLY/OAAAAnklEQVRIx+3RSRLDIAxE0QYhAbGZPNu5/z0zrXHiqiz5W72FqhqtVuuXAl3iOV7iPV/iSsAqZa9BS7YOmMXnNNX4TWGxRMn3R6SxRNgy0bzXOW8EBO8SAClsPdB3psqlvG+Lw7ONXg/pTld52BjgSSkA3PV2OOemjIDcZQWgVvONw60q7sIpR38EnHPSMDQ4MjDjLPozhAkGrVbr/z0ANjAF4AcbXmYAAAAASUVORK5CYII=" alt="" style="width:20px;margin-right:5px;display:block"></div>
                                <div class="weui-cell__bd weui-cell_primary">
                                    <p>文字标题</p>
                                </div>
                                <span class="weui-cell__ft"></span>
                            </a>
                            <a class="weui-cell weui-cell_access" href="javascript:;">
                                <div class="weui-cell__hd"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuCAMAAABgZ9sFAAAAVFBMVEXx8fHMzMzr6+vn5+fv7+/t7e3d3d2+vr7W1tbHx8eysrKdnZ3p6enk5OTR0dG7u7u3t7ejo6PY2Njh4eHf39/T09PExMSvr6+goKCqqqqnp6e4uLgcLY/OAAAAnklEQVRIx+3RSRLDIAxE0QYhAbGZPNu5/z0zrXHiqiz5W72FqhqtVuuXAl3iOV7iPV/iSsAqZa9BS7YOmMXnNNX4TWGxRMn3R6SxRNgy0bzXOW8EBO8SAClsPdB3psqlvG+Lw7ONXg/pTld52BjgSSkA3PV2OOemjIDcZQWgVvONw60q7sIpR38EnHPSMDQ4MjDjLPozhAkGrVbr/z0ANjAF4AcbXmYAAAAASUVORK5CYII=" alt="" style="width:20px;margin-right:5px;display:block"></div>
                                <div class="weui-cell__bd weui-cell_primary">
                                    <p>文字标题</p>
                                </div>
                                <span class="weui-cell__ft"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="weui-panel">
                <div class="weui-panel__hd">文字列表附来源</div>
                <div class="weui-panel__bd">
                    <div class="weui-media-box weui-media-box_text">
                        <h4 class="weui-media-box__title">标题一</h4>
                        <p class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                        <ul class="weui-media-box__info">
                            <li class="weui-media-box__info__meta">文字来源</li>
                            <li class="weui-media-box__info__meta">时间</li>
                            <li class="weui-media-box__info__meta weui-media-box__info__meta_extra">其它信息</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page__ft">
            <a href="javascript:home()"><img src="./images/icon_footer_link.png" /></a>
        </div>
    </div>
</script>

<script type="text/html" id="tpl_icons">
    <div class="page">
        <div class="page__hd">
            <h1 class="page__title">Icons</h1>
            <p class="page__desc">图标</p>
        </div>
        <div class="page__bd page__bd_spacing">
            <div class="icon-box">
                <i class="weui-icon-success weui-icon_msg"></i>
                <div class="icon-box__ctn">
                    <h3 class="icon-box__title">成功</h3>
                    <p class="icon-box__desc">用于表示操作顺利达成</p>
                </div>
            </div>
            <div class="icon-box">
                <i class="weui-icon-info weui-icon_msg"></i>
                <div class="icon-box__ctn">
                    <h3 class="icon-box__title">提示</h3>
                    <p class="icon-box__desc">用于表示信息提示；也常用于缺乏条件的操作拦截，提示用户所需信息</p>
                </div>
            </div>
            <div class="icon-box">
                <i class="weui-icon-warn weui-icon_msg-primary"></i>
                <div class="icon-box__ctn">
                    <h3 class="icon-box__title">普通警告</h3>
                    <p class="icon-box__desc">用于表示操作后将引起一定后果的情况</p>
                </div>
            </div>
            <div class="icon-box">
                <i class="weui-icon-warn weui-icon_msg"></i>
                <div class="icon-box__ctn">
                    <h3 class="icon-box__title">强烈警告</h3>
                    <p class="icon-box__desc">用于表示操作后将引起严重的不可挽回的后果的情况</p>
                </div>
            </div>
            <div class="icon-box">
                <i class="weui-icon-waiting weui-icon_msg"></i>
                <div class="icon-box__ctn">
                    <h3 class="icon-box__title">等待</h3>
                    <p class="icon-box__desc">用于表示等待</p>
                </div>
            </div>
            <div class="icon_sp_area">
                <i class="weui-icon-success"></i>
                <i class="weui-icon-success-no-circle"></i>
                <i class="weui-icon-circle"></i>
                <i class="weui-icon-warn"></i>
                <i class="weui-icon-download"></i>
                <i class="weui-icon-info-circle"></i>
                <i class="weui-icon-cancel"></i>
                <i class="weui-icon-search"></i>
            </div>
        </div>
        <div class="page__ft">
            <a href="javascript:home()"><img src="./images/icon_footer_link.png" /></a>
        </div>
    </div>
</script>

<script type="text/html" id="tpl_footer">
    <div class="page">
        <div class="page__hd">
            <h1 class="page__title">Footer</h1>
            <p class="page__desc">页脚</p>
        </div>
        <div class="page__bd page__bd_spacing">
            <div class="weui-footer">
                <p class="weui-footer__text">Copyright &copy; 2008-2016 weui.io</p>
            </div>
            <br>
            <br>
            <div class="weui-footer">
                <p class="weui-footer__links">
                    <a href="javascript:void(0);" class="weui-footer__link">底部链接</a>
                </p>
                <p class="weui-footer__text">Copyright &copy; 2008-2016 weui.io</p>
            </div>
            <br>
            <br>
            <div class="weui-footer">
                <p class="weui-footer__links">
                    <a href="javascript:void(0);" class="weui-footer__link">底部链接</a>
                    <a href="javascript:void(0);" class="weui-footer__link">底部链接</a>
                </p>
                <p class="weui-footer__text">Copyright &copy; 2008-2016 weui.io</p>
            </div>
            <div class="weui-footer weui-footer_fixed-bottom">
                <p class="weui-footer__links">
                    <a href="javascript:home();" class="weui-footer__link">WeUI首页</a>
                </p>
                <p class="weui-footer__text">Copyright &copy; 2008-2016 weui.io</p>
            </div>
        </div>
    </div>
</script>
<script type="text/html" id="tpl_gallery">
    <div class="page">
        <div class="page__hd">
            <h1 class="page__title">Gallery</h1>
            <p class="page__desc">画廊，可实现上传图片的展示或幻灯片播放</p>
        </div>
        <div class="weui-gallery" style="display: block">
            <span class="weui-gallery__img" style="background-image: url(./images/pic_article.png);"></span>
            <div class="weui-gallery__opr">
                <a href="javascript:" class="weui-gallery__del">
                    <i class="weui-icon-delete weui-icon_gallery-delete"></i>
                </a>
            </div>
        </div>
    </div>
</script>
<script type="text/html" id="tpl_flex">
    <div class="page">
        <div class="page__hd">
            <h1 class="page__title">Flex</h1>
            <p class="page__desc">Flex布局</p>
        </div>
        <div class="page__bd page__bd_spacing">
            <div class="weui-flex">
                <div class="weui-flex__item"><div class="placeholder">weui</div></div>
            </div>
            <div class="weui-flex">
                <div class="weui-flex__item"><div class="placeholder">weui</div></div>
                <div class="weui-flex__item"><div class="placeholder">weui</div></div>
            </div>
            <div class="weui-flex">
                <div class="weui-flex__item"><div class="placeholder">weui</div></div>
                <div class="weui-flex__item"><div class="placeholder">weui</div></div>
                <div class="weui-flex__item"><div class="placeholder">weui</div></div>
            </div>
            <div class="weui-flex">
                <div class="weui-flex__item"><div class="placeholder">weui</div></div>
                <div class="weui-flex__item"><div class="placeholder">weui</div></div>
                <div class="weui-flex__item"><div class="placeholder">weui</div></div>
                <div class="weui-flex__item"><div class="placeholder">weui</div></div>
            </div>
            <div class="weui-flex">
                <div><div class="placeholder">weui</div></div>
                <div class="weui-flex__item"><div class="placeholder">weui</div></div>
                <div><div class="placeholder">weui</div></div>
            </div>
        </div>
        <div class="page__ft">
            <a href="javascript:home()"><img src="./images/icon_footer_link.png" /></a>
        </div>
    </div>
</script>
<script type="text/html" id="tpl_loadmore">
    <div class="page">
        <div class="page__hd">
            <h1 class="page__title">Loadmore</h1>
            <p class="page__desc">加载更多</p>
        </div>
        <div class="page__bd">
            <div class="weui-loadmore">
                <i class="weui-loading"></i>
                <span class="weui-loadmore__tips">正在加载</span>
            </div>
            <div class="weui-loadmore weui-loadmore_line">
                <span class="weui-loadmore__tips">暂无数据</span>
            </div>
            <div class="weui-loadmore weui-loadmore_line weui-loadmore_dot">
                <span class="weui-loadmore__tips"></span>
            </div>
        </div>
        <div class="page__ft">
            <a href="javascript:home()"><img src="./images/icon_footer_link.png" /></a>
        </div>
    </div>
</script>
<script type="text/html" id="tpl_preview">
    <div class="page">
        <div class="page__hd">
            <h1 class="page__title">Preview</h1>
            <p class="page__desc">表单预览</p>
        </div>
        <div class="page__bd">
            <div class="weui-form-preview">
                <div class="weui-form-preview__hd">
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">付款金额</label>
                        <em class="weui-form-preview__value">¥2400.00</em>
                    </div>
                </div>
                <div class="weui-form-preview__bd">
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">商品</label>
                        <span class="weui-form-preview__value">电动打蛋机</span>
                    </div>
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">标题标题</label>
                        <span class="weui-form-preview__value">名字名字名字</span>
                    </div>
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">标题标题</label>
                        <span class="weui-form-preview__value">很长很长的名字很长很长的名字很长很长的名字很长很长的名字很长很长的名字</span>
                    </div>
                </div>
                <div class="weui-form-preview__ft">
                    <a class="weui-form-preview__btn weui-form-preview__btn_primary" href="javascript:">操作</a>
                </div>
            </div>
            <br>
            <div class="weui-form-preview">
                <div class="weui-form-preview__hd">
                    <label class="weui-form-preview__label">付款金额</label>
                    <em class="weui-form-preview__value">¥2400.00</em>
                </div>
                <div class="weui-form-preview__bd">
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">商品</label>
                        <span class="weui-form-preview__value">电动打蛋机</span>
                    </div>
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">标题标题</label>
                        <span class="weui-form-preview__value">名字名字名字</span>
                    </div>
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">标题标题</label>
                        <span class="weui-form-preview__value">很长很长的名字很长很长的名字很长很长的名字很长很长的名字很长很长的名字</span>
                    </div>
                </div>
                <div class="weui-form-preview__ft">
                    <a class="weui-form-preview__btn weui-form-preview__btn_default" href="javascript:">辅助操作</a>
                    <button type="submit" class="weui-form-preview__btn weui-form-preview__btn_primary" href="javascript:">操作</button>
                </div>
            </div>
        </div>
        <div class="page__ft">
            <a href="javascript:home()"><img src="./images/icon_footer_link.png" /></a>
        </div>
    </div>
</script>
<script type="text/html" id="tpl_grid">
    <div class="page">
        <div class="page__hd">
            <h1 class="page__title">Grid</h1>
            <p class="page__desc">九宫格</p>
        </div>
        <div class="weui-grids">
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img src="./images/icon_tabbar.png" alt="">
                </div>
                <p class="weui-grid__label">Grid</p>
            </a>
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img src="./images/icon_tabbar.png" alt="">
                </div>
                <p class="weui-grid__label">Grid</p>
            </a>
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img src="./images/icon_tabbar.png" alt="">
                </div>
                <p class="weui-grid__label">Grid</p>
            </a>
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img src="./images/icon_tabbar.png" alt="">
                </div>
                <p class="weui-grid__label">Grid</p>
            </a>
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img src="./images/icon_tabbar.png" alt="">
                </div>
                <p class="weui-grid__label">Grid</p>
            </a>
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img src="./images/icon_tabbar.png" alt="">
                </div>
                <p class="weui-grid__label">Grid</p>
            </a>
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img src="./images/icon_tabbar.png" alt="">
                </div>
                <p class="weui-grid__label">Grid</p>
            </a>
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img src="./images/icon_tabbar.png" alt="">
                </div>
                <p class="weui-grid__label">Grid</p>
            </a>
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img src="./images/icon_tabbar.png" alt="">
                </div>
                <p class="weui-grid__label">Grid</p>
            </a>
        </div>
    </div>
</script>
<script type="text/html" id="tpl_badge">
    <div class="page">
        <div class="page__hd">
            <h1 class="page__title">Badge</h1>
            <p class="page__desc">徽章</p>
        </div>
        <div class="page__bd">
            <div class="weui-cells__title">新消息提示跟摘要信息后，统一在列表右侧</div>
            <div class="weui-cells">
                <div class="weui-cell weui-cell_access">
                    <div class="weui-cell__bd">单行列表</div>
                    <div class="weui-cell__ft" style="font-size: 0">
                        <span style="vertical-align:middle; font-size: 17px;">详细信息</span>
                        <span class="weui-badge weui-badge_dot" style="margin-left: 5px;margin-right: 5px;"></span>
                    </div>
                </div>
            </div>

            <div class="weui-cells__title">未读数红点跟在主题信息后，统一在列表左侧</div>
            <div class="weui-cells">
                <div class="weui-cell">
                    <div class="weui-cell__hd" style="position: relative;margin-right: 10px;">
                        <img src="images/pic_160.png" style="width: 50px;display: block"/>
                        <span class="weui-badge" style="position: absolute;top: -.4em;right: -.4em;">8</span>
                    </div>
                    <div class="weui-cell__bd">
                        <p>联系人名称</p>
                        <p style="font-size: 13px;color: #888888;">摘要信息</p>
                    </div>
                </div>
                <div class="weui-cell weui-cell_access">
                    <div class="weui-cell__bd">
                        <span style="vertical-align: middle">单行列表</span>
                        <span class="weui-badge" style="margin-left: 5px;">8</span>
                    </div>
                    <div class="weui-cell__ft"></div>
                </div>
                <div class="weui-cell weui-cell_access">
                    <div class="weui-cell__bd">
                        <span style="vertical-align: middle">单行列表</span>
                        <span class="weui-badge" style="margin-left: 5px;">8</span>
                    </div>
                    <div class="weui-cell__ft">详细信息</div>
                </div>
                <div class="weui-cell weui-cell_access">
                    <div class="weui-cell__bd">
                        <span style="vertical-align: middle">单行列表</span>
                        <span class="weui-badge" style="margin-left: 5px;">New</span>
                    </div>
                    <div class="weui-cell__ft"></div>
                </div>
            </div>
        </div>
        <div class="page__ft">
            <a href="javascript:home()"><img src="./images/icon_footer_link.png" /></a>
        </div>
    </div>
</script>

<script src="./zepto.min.js"></script>
<script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script src="./weui.min.js"></script>
<script src="./example.js"></script>


</body>
</html>
