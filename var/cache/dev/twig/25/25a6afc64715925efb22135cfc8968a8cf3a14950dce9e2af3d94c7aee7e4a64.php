<?php

/* AppBundle:newPage:newPage.html.twig */
class __TwigTemplate_2f4ef24dda5fc69ff1e4f7165a7c49ecd272799d70e250c30c04da7cf607039e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'bannerTop' => array($this, 'block_bannerTop'),
            'bannerMiddle' => array($this, 'block_bannerMiddle'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53c7529b7d4753b315a0b2aebdb70c42115790608c035abd7efd666671fb8787 = $this->env->getExtension("native_profiler");
        $__internal_53c7529b7d4753b315a0b2aebdb70c42115790608c035abd7efd666671fb8787->enter($__internal_53c7529b7d4753b315a0b2aebdb70c42115790608c035abd7efd666671fb8787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:newPage:newPage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resource/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resource/jquery/jquery.easydropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resource/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/js/easyResponsiveTabs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resource/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/css/useso.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/css/nav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>


    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });

        \$(function () {
            \$(\"#slider\").responsiveSlides({
                auto: true,
                manualControls: '#slider3-pager',
            });
        });

        var myDate = new Date();
    </script>
</head>
<body>";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 75
        echo "<!-- //header -->

<!-- bg-banner -->

<div class=\"bg-banner\">
    <div class=\"banner-bottom-bg\">
        <div class=\"banner-bg\">
            <div class=\"container\">
                <!-- banner -->
                <div class=\"banner\">
                    <div class=\"banner-grids\">";
        // line 86
        $this->displayBlock('bannerTop', $context, $blocks);
        // line 114
        $this->displayBlock('bannerMiddle', $context, $blocks);
        // line 366
        echo "<!-- //banner-bottom-grids -->
                    </div>
                </div>
            </div>
            <!-- //banner -->
        </div>
    </div>
</div>
</div>
<!-- //bg-banner -->
<div class=\"footer\">
    <div class=\"copyright\">
        <p>Copyright &copy; 2016.All rights reserved.</p>
    </div>
</div>

</body>
</html>";
        
        $__internal_53c7529b7d4753b315a0b2aebdb70c42115790608c035abd7efd666671fb8787->leave($__internal_53c7529b7d4753b315a0b2aebdb70c42115790608c035abd7efd666671fb8787_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ba96bae268120b61eddb9b565d1fcd42cbce46dbc1861748c47f5b57ca854e7 = $this->env->getExtension("native_profiler");
        $__internal_7ba96bae268120b61eddb9b565d1fcd42cbce46dbc1861748c47f5b57ca854e7->enter($__internal_7ba96bae268120b61eddb9b565d1fcd42cbce46dbc1861748c47f5b57ca854e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "莉莉blog";
        
        $__internal_7ba96bae268120b61eddb9b565d1fcd42cbce46dbc1861748c47f5b57ca854e7->leave($__internal_7ba96bae268120b61eddb9b565d1fcd42cbce46dbc1861748c47f5b57ca854e7_prof);

    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        $__internal_b18103cebaf5d2d2305d3e5387fcdf457b15c42d893543c960f74c3ab2216b48 = $this->env->getExtension("native_profiler");
        $__internal_b18103cebaf5d2d2305d3e5387fcdf457b15c42d893543c960f74c3ab2216b48->enter($__internal_b18103cebaf5d2d2305d3e5387fcdf457b15c42d893543c960f74c3ab2216b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 43
        echo "<div id=\"home\" class=\"header\">
    <div class=\"header-top\">
        <!-- container -->
        <div class=\"container\">
            <div class=\"top-nav\">
                <script>
                    document.write(myDate.tolocaleString());
                </script>
            </div>
            <div class=\"nav-right\">
                <p>created by hl, <a href=\"\">Emaiil</a> for contact!</p>
            </div>
            <div class=\"clearfix\"></div>
            <!-- script-for-menu -->
        </div>
        <!-- //container -->
    </div>
    <div class=\"header-bottom\">
        <!-- container -->
        <div class=\"container\">
            <div class=\"head-logo\">
                <a href=\"index.html\"><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/icon/logo.png"), "html", null, true);
        echo "\" alt=\"\"/></a>
            </div>
            <div class=\"logo-right\">

            </div>
            <div class=\"clearfix\"></div>
        </div>
        <!-- //container -->
    </div>
</div>";
        
        $__internal_b18103cebaf5d2d2305d3e5387fcdf457b15c42d893543c960f74c3ab2216b48->leave($__internal_b18103cebaf5d2d2305d3e5387fcdf457b15c42d893543c960f74c3ab2216b48_prof);

    }

    // line 86
    public function block_bannerTop($context, array $blocks = array())
    {
        $__internal_78461b2ef6dcf5a7da4f4cf0c896137d854b966f3c59ca32a615362a2041ca5d = $this->env->getExtension("native_profiler");
        $__internal_78461b2ef6dcf5a7da4f4cf0c896137d854b966f3c59ca32a615362a2041ca5d->enter($__internal_78461b2ef6dcf5a7da4f4cf0c896137d854b966f3c59ca32a615362a2041ca5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bannerTop"));

        // line 87
        echo "<div class=\"banner-top\">
                            <ul class=\"nav banner-nav\">
                                <li class=\"dropdown1\"><a href=\"index.html\">主页<span>my &nbsp;homepage</span></a>

                                </li>
                                <li class=\"dropdown1\"><a href=\"blog.html\">日志<span>my &nbsp;blog</span></a>

                                </li>
                                <li class=\"dropdown1\"><a href=\"photo.html\">相册<span>my &nbsp;photo</span></a>

                                </li>
                                <li class=\"dropdown1\"><a href=\"study.html\">学习<span>my &nbsp;study</span></a>

                                </li>
                                <li class=\"dropdown1\"><a href=\"travel.html\">旅游<span>my &nbsp;travel</span></a>

                                </li>
                                <li class=\"dropdown1\"><a href=\"single.html\">个人中心<span> individual &nbsp;center </span></a>

                                </li>
                            </ul>
                            <script>

                            </script>
                        </div>";
        
        $__internal_78461b2ef6dcf5a7da4f4cf0c896137d854b966f3c59ca32a615362a2041ca5d->leave($__internal_78461b2ef6dcf5a7da4f4cf0c896137d854b966f3c59ca32a615362a2041ca5d_prof);

    }

    // line 114
    public function block_bannerMiddle($context, array $blocks = array())
    {
        $__internal_b1ab97560e23cb65ad4a08f91ff5f4fd7d23bb505311aeaf18347f1c1298acba = $this->env->getExtension("native_profiler");
        $__internal_b1ab97560e23cb65ad4a08f91ff5f4fd7d23bb505311aeaf18347f1c1298acba->enter($__internal_b1ab97560e23cb65ad4a08f91ff5f4fd7d23bb505311aeaf18347f1c1298acba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bannerMiddle"));

        // line 115
        echo "<div class=\"banner-middle\">

                            <div class=\"slider\">
                                <!-- Slideshow 3 -->
                                <ul class=\"rslides\" id=\"slider\">
                                    <li><img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/1.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
                                    <li><img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/2.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
                                    <li><img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/3.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
                                    <li><img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/4.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
                                    <li><img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/5.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
                                    <li><img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/6.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
                                </ul>
                                <!-- Slideshow 3 Pager -->
                                <ul id=\"slider3-pager\">
                                    <li><a href=\"#\"><img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/1c.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"#\"><img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/2c.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"#\"><img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/3c.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"#\"><img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/4c.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"#\"><img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/5c.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                    <li><a href=\"#\"><img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/6c.jpg"), "html", null, true);
        echo "\" alt=\"\"></a></li>

                                </ul>
                            </div>
                            <div class=\"strip1\"></div>
                            <!-- banner-bottom-grids -->
                            <div class=\"banner-bottom-grids\">
                                <!-- banner-bottom-left -->
                                <div class=\"col-md-8 banner-bottom-left\">
                                    <div class=\"banner-bottom-left-grids\">
                                        <div class=\"col-md-6 banner-left-grid\">
                                            <h3>artical</h3>
                                            <a href=\"blog.html\"><img src=\"images/b1.jpg\" alt=\"\"/></a>

                                            <p class=\"text\">
                                                西风卷帘笑落花,低吟浅唱泻芳华。日出东海落西山，兰溪幽悠浣流沙。梦逐天涯。风吹雨成花。岁月蒸发，掌心的梦匣。浮尘轻抹，渡过春秋冬夏。<br>
                                                朝暮踏歌，悲欢离合。了搓跎，花开风过，一步一岁末。潺潺地淌过岁月之河。日子轻轻的在指间跌落......</p>
                                            <div class=\"blog-grids\">
                                                <div class=\"blog-grid-left\">
                                                    <img src=\"images/b5.jpg\" alt=\"\"/>
                                                </div>
                                                <div class=\"blog-grid-right\">
                                                    不去追逐你所渴求，你将永远不会拥有。不开口问，回答永远是No。不往前走，就将永远停留。

                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"blog-grids\">
                                                <div class=\"blog-grid-left\">
                                                    <img src=\"images/b6.jpg\" alt=\"\"/>
                                                </div>
                                                <div class=\"blog-grid-right\">
                                                    昨天很重要，它构建了我们的记忆；明天很重要，它让我们有了憧憬和梦想。
                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 banner-left-grid\">
                                            <h3>artical</h3>
                                            <a href=\"blog.html\"><img src=\"images/b2.jpg\" alt=\"\"/></a>

                                            <p class=\"text\">
                                                总是在回眸之间，才想留住你脸上那一抹微笑，也才知道那熟悉的浪漫，其实每天都在我的生活中展现。突然觉得自己好像错过了命运对我的恩惠，准确的说不是好像，是肯定……美好的只属于回忆，现实的却总是残缺，离我们的憧憬总是存在一定的距离......</p>
                                            <div class=\"blog-grids\">
                                                <div class=\"blog-grid-left\">
                                                    <img src=\"images/b5.jpg\" alt=\"\"/>
                                                </div>
                                                <div class=\"blog-grid-right\">
                                                    用最少的悔恨面对过去，用最少的浪费面对现在，用最多的梦想面对未来。
                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"blog-grids\">
                                                <div class=\"blog-grid-left\">
                                                    <img src=\"images/b6.jpg\" alt=\"\"/>
                                                </div>
                                                <div class=\"blog-grid-right\">
                                                    我只是一朵向日葵，等待着属于我的唯一的阳光

                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                    <div class=\"banner-bottom-left-grids\">
                                        <div class=\"col-md-6 banner-left-grid\">
                                            <h3>artical</h3>
                                            <a href=\"blog.html\"><img src=\"images/b3.jpg\" alt=\"\"/></a>

                                            <p class=\"text\">
                                                最近看了一部影片叫《蓝色迷情》，唤起了我对海的向往。虽然自己是个平原长大的孩子，但是对海却情有独钟，因为站在海的面前，心情会无比的旷达与纯净。一泓幽蓝浩浩汤汤，仿佛卷走了尘世间所有的喧嚣与浮躁，剩下的只是心灵的跃动和神思的空灵……</p>
                                            <div class=\"blog-grids\">
                                                <div class=\"blog-grid-left\">
                                                    <img src=\"images/b7.jpg\" alt=\"\"/>
                                                </div>
                                                <div class=\"blog-grid-right\">
                                                    <p>伤痛使你更坚强，眼泪使你更勇敢，心碎使你更明智。</p>

                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"blog-grids\">
                                                <div class=\"blog-grid-left\">
                                                    <img src=\"images/b8.jpg\" alt=\"\"/>
                                                </div>
                                                <div class=\"blog-grid-right\">
                                                    <p>生命就好像旅行，在过程中我们可以拥有一些东西，但终究不能带走它。</p>

                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6 banner-left-grid\">
                                            <h3>artical</h3>
                                            <a href=\"blog.html\"><img src=\"images/b4.jpg\" alt=\"\"/></a>

                                            <p class=\"text\">
                                                在你的沉思与歌唱里，我发现窗的曼妙和无与伦比。倚窗而立，凭窗远眺，临窗而坐，拥窗入眠，落窗凝思，一卷书，一杯茗，一首歌，是你的情怀，亦是人生欢景，那些窗内窗外的世象，或许是你于红尘中，独爱窗棱的缘故。世间有窗，总那么一点点，似有似无，开开合合....</p>
                                            <div class=\"blog-grids\">
                                                <div class=\"blog-grid-left\">
                                                    <img src=\"images/b7.jpg\" alt=\"\"/>
                                                </div>
                                                <div class=\"blog-grid-right\">
                                                    <p>不管发生什么，都不要放弃，坚持走下去，肯定会有意想不到的风景。</p>
                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"blog-grids\">
                                                <div class=\"blog-grid-left\">
                                                    <img src=\"images/b8.jpg\" alt=\"\"/>
                                                </div>
                                                <div class=\"blog-grid-right\">
                                                    <p>人与人之间最远的距离，不是隔了千山万水，而是心与心的距离。</p>
                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                    <!-- post -->
                                    <div class=\"post\">
                                        <h3>Latest artical</h3>
                                        <div class=\"post-grids\">
                                            <div class=\"col-md-4 post-left\">
                                                <img src=\"images/p1.jpg\" alt=\"\"/>
                                            </div>
                                            <div class=\"col-md-8 post-right\">

                                                <p class=\"text\">Search for knowledge, read more, sit on your front porch
                                                    and admire the view without paying attention to your needs.
                                                    寻找更多的知识，多读一些书，坐在你家的前廊里，以赞美的眼光去享受眼前的风景，不要带上任何功利的想法</p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </div>
                                        <div class=\"post-grids\">
                                            <div class=\"col-md-4 post-left\">
                                                <img src=\"images/p2.jpg\" alt=\"\"/>
                                            </div>
                                            <div class=\"col-md-8 post-right\">

                                                <p class=\"text\">Friendship isn't about whom you've known the longest,
                                                    it's about who came, and never left your
                                                    side.——朋友不是那个你认识得最久的人，而是那个来到你身边后便不再离开的人。</p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </div>
                                        <div class=\"post-grids\">
                                            <div class=\"col-md-4 post-left\">
                                                <img src=\"images/p3.jpg\" alt=\"\"/>
                                            </div>
                                            <div class=\"col-md-8 post-right\">

                                                <p class=\"text\">Travel the greatest benefit, not to see how many people,
                                                    see more beautiful scenery, but walked, in a fate, suddenly find
                                                    themselves.旅行最大的好处，不是见到多少人，见过多美的风景，而是走着走着，在一个际遇下，突然重新认识了自己。</p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </div>
                                    </div>
                                    <!-- //post -->
                                </div>
                                <!-- //banner-bottom-left -->
                                <!-- banner-bottom-right -->
                                <div class=\"col-md-4 banner-bottom-right\">

                                    <div class=\"advertisement\">
                                        <h3>my girl</h3><br>
                                        <img src=\"images/a.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"sponsors\">
                                        <h3>my girl</h3>
                                        <div class=\"sponsors-grids\">
                                            <div class=\"sponsors-grid-left\">

                                                <img src=\"images/b.jpg\" alt=\"\">

                                            </div>
                                            <div class=\"sponsors-grid-left\">

                                                <img src=\"images/c.jpg\" alt=\"\">

                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </div>
                                    </div>
                                    <div class=\"video\">
                                        <h3>Taylor swift</h3>
                                        <iframe src=\"http://v.yinyuetai.com/video/535338\"></iframe>
                                    </div>
                                    <div class=\"twitter\">
                                        <h3>about she</h3>
                                        <div class=\"twitter-info\">
                                            <p>泰勒·斯威夫特（Taylor
                                                Swift），1989年12月13日出生于美国宾夕法尼亚州，美国流行音乐、乡村音乐创作型女歌手、音乐制作人、演员、慈善家。</p>
                                        </div>
                                        <div class=\"twitter-info\">
                                            <p>2006年与独立唱片公司大机器唱片签约，发行首张录音室专辑《泰勒·斯威夫特》，获美国唱片业协会认证5倍白金唱片[1]
                                                。2007年至2015年共获7届纳什维尔创作人协会国际奖年度创作人/艺人。</p>
                                        </div>
                                        <div class=\"twitter-info\">
                                            <p>2008年发行第二张录音室专辑《Fearless》，在美国公告牌专辑榜上获11周冠军，是2009年全美最畅销专辑，认证7倍白金唱片[2]
                                                ，专辑获第52届格莱美奖年度专辑，使泰勒成为获此奖项的最年轻歌手， [3] 也是获奖最多的乡村音乐专辑[4] 。</p>
                                        </div>
                                        <div class=\"twitter-info\">
                                            <p>2015年4月获第50届乡村音乐学院奖50周年里程碑奖[13-14] 。5月，成为2015福布斯全球权势女性榜上榜最年轻女性[15-16]
                                                。8月获MTV音乐录像带奖年度音乐录像带[17] 。</p>
                                        </div>
                                    </div>
                                    <div class=\"recent-posts\">
                                        <h3>all CDs</h3>
                                        <ul>
                                            <li>2006年10月24日，同名专辑《泰勒·斯威夫特》发行</li>
                                            <li>2008年11月11日，泰勒的第二张专辑《Fearless》发行，
                                                公告牌专辑榜夺冠，这也是泰勒的第一张冠军专辑。
                                            </li>
                                            <li>2010年10月25日，泰勒发行了第三张录音室专辑《Speak Now》</li>
                                            <li>2012年10月22日，泰勒发行了她的第四张个人专辑《Red》</li>
                                            <li>
                                                2014年10月27日，发行第五张录音室专辑《1989》，这也是泰勒的第一张正式流行专辑，发行首周售出128万余张，成为美国唱片市场近十二年最高的首周销量纪录，泰勒也成为唯一一位拥有三张首周百万销量专辑的歌手
                                            </li>
                                    </div>
                                </div>
                            </div>
                            <!-- banner-bottom-right -->
                            <div class=\"clearfix\"></div>
                            <div class=\"up-arrow\">
                                <a class=\"scroll\" href=\"#home\">Back to Top</a>
                            </div>
                        </div>";
        
        $__internal_b1ab97560e23cb65ad4a08f91ff5f4fd7d23bb505311aeaf18347f1c1298acba->leave($__internal_b1ab97560e23cb65ad4a08f91ff5f4fd7d23bb505311aeaf18347f1c1298acba_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:newPage:newPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 134,  289 => 133,  285 => 132,  281 => 131,  277 => 130,  273 => 129,  266 => 125,  262 => 124,  258 => 123,  254 => 122,  250 => 121,  246 => 120,  239 => 115,  233 => 114,  202 => 87,  196 => 86,  179 => 64,  156 => 43,  150 => 42,  143 => 6,  137 => 5,  113 => 366,  111 => 114,  109 => 86,  97 => 75,  95 => 42,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  33 => 8,  31 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>*/
/*         {%- block title -%}*/
/*             莉莉blog*/
/*         {%- endblock -%}*/
/*     </title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>*/
/*     <script src="{{ asset('resource/jquery/jquery.js') }}"></script>*/
/*     <script src="{{ asset('resource/jquery/jquery.easydropdown.js') }}"></script>*/
/*     <script src="{{ asset('resource/bootstrap/js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('AppBundles/js/easyResponsiveTabs.js') }}"></script>*/
/*     <script src="{{ asset('AppBundles/js/responsiveslides.min.js') }}"></script>*/
/*     <link href="{{ asset('resource/bootstrap/css/bootstrap.css') }}" rel="stylesheet"/>*/
/*     <link href="{{ asset('AppBundles/css/style.css') }}" rel="stylesheet"/>*/
/*     <link href="{{ asset('AppBundles/css/useso.css') }}" rel="stylesheet"/>*/
/*     <link href="{{ asset('AppBundles/css/nav.css') }}" rel="stylesheet"/>*/
/* */
/* */
/*     <script type="text/javascript">*/
/*         $(document).ready(function () {*/
/*             $('#horizontalTab').easyResponsiveTabs({*/
/*                 type: 'default', //Types: default, vertical, accordion*/
/*                 width: 'auto', //auto or any width like 600px*/
/*                 fit: true   // 100% fit in a container*/
/*             });*/
/*         });*/
/* */
/*         $(function () {*/
/*             $("#slider").responsiveSlides({*/
/*                 auto: true,*/
/*                 manualControls: '#slider3-pager',*/
/*             });*/
/*         });*/
/* */
/*         var myDate = new Date();*/
/*     </script>*/
/* </head>*/
/* <body>*/
/* {%- block header -%}*/
/* <div id="home" class="header">*/
/*     <div class="header-top">*/
/*         <!-- container -->*/
/*         <div class="container">*/
/*             <div class="top-nav">*/
/*                 <script>*/
/*                     document.write(myDate.tolocaleString());*/
/*                 </script>*/
/*             </div>*/
/*             <div class="nav-right">*/
/*                 <p>created by hl, <a href="">Emaiil</a> for contact!</p>*/
/*             </div>*/
/*             <div class="clearfix"></div>*/
/*             <!-- script-for-menu -->*/
/*         </div>*/
/*         <!-- //container -->*/
/*     </div>*/
/*     <div class="header-bottom">*/
/*         <!-- container -->*/
/*         <div class="container">*/
/*             <div class="head-logo">*/
/*                 <a href="index.html"><img src="{{ asset('AppBundles/icon/logo.png') }}" alt=""/></a>*/
/*             </div>*/
/*             <div class="logo-right">*/
/* */
/*             </div>*/
/*             <div class="clearfix"></div>*/
/*         </div>*/
/*         <!-- //container -->*/
/*     </div>*/
/* </div>*/
/* {%- endblock -%}*/
/* <!-- //header -->*/
/* */
/* <!-- bg-banner -->*/
/* */
/* <div class="bg-banner">*/
/*     <div class="banner-bottom-bg">*/
/*         <div class="banner-bg">*/
/*             <div class="container">*/
/*                 <!-- banner -->*/
/*                 <div class="banner">*/
/*                     <div class="banner-grids">*/
/*                         {%- block bannerTop -%}*/
/*                         <div class="banner-top">*/
/*                             <ul class="nav banner-nav">*/
/*                                 <li class="dropdown1"><a href="index.html">主页<span>my &nbsp;homepage</span></a>*/
/* */
/*                                 </li>*/
/*                                 <li class="dropdown1"><a href="blog.html">日志<span>my &nbsp;blog</span></a>*/
/* */
/*                                 </li>*/
/*                                 <li class="dropdown1"><a href="photo.html">相册<span>my &nbsp;photo</span></a>*/
/* */
/*                                 </li>*/
/*                                 <li class="dropdown1"><a href="study.html">学习<span>my &nbsp;study</span></a>*/
/* */
/*                                 </li>*/
/*                                 <li class="dropdown1"><a href="travel.html">旅游<span>my &nbsp;travel</span></a>*/
/* */
/*                                 </li>*/
/*                                 <li class="dropdown1"><a href="single.html">个人中心<span> individual &nbsp;center </span></a>*/
/* */
/*                                 </li>*/
/*                             </ul>*/
/*                             <script>*/
/* */
/*                             </script>*/
/*                         </div>*/
/*                         {%- endblock -%}*/
/* */
/*                         {%- block bannerMiddle-%}*/
/*                         <div class="banner-middle">*/
/* */
/*                             <div class="slider">*/
/*                                 <!-- Slideshow 3 -->*/
/*                                 <ul class="rslides" id="slider">*/
/*                                     <li><img src="{{ asset('AppBundles/image/1.jpg') }}" alt=""></li>*/
/*                                     <li><img src="{{ asset('AppBundles/image/2.jpg') }}" alt=""></li>*/
/*                                     <li><img src="{{ asset('AppBundles/image/3.jpg') }}" alt=""></li>*/
/*                                     <li><img src="{{ asset('AppBundles/image/4.jpg') }}" alt=""></li>*/
/*                                     <li><img src="{{ asset('AppBundles/image/5.jpg') }}" alt=""></li>*/
/*                                     <li><img src="{{ asset('AppBundles/image/6.jpg') }}" alt=""></li>*/
/*                                 </ul>*/
/*                                 <!-- Slideshow 3 Pager -->*/
/*                                 <ul id="slider3-pager">*/
/*                                     <li><a href="#"><img src="{{ asset('AppBundles/image/1c.jpg') }}" alt=""></a></li>*/
/*                                     <li><a href="#"><img src="{{ asset('AppBundles/image/2c.jpg') }}" alt=""></a></li>*/
/*                                     <li><a href="#"><img src="{{ asset('AppBundles/image/3c.jpg') }}" alt=""></a></li>*/
/*                                     <li><a href="#"><img src="{{ asset('AppBundles/image/4c.jpg') }}" alt=""></a></li>*/
/*                                     <li><a href="#"><img src="{{ asset('AppBundles/image/5c.jpg') }}" alt=""></a></li>*/
/*                                     <li><a href="#"><img src="{{ asset('AppBundles/image/6c.jpg') }}" alt=""></a></li>*/
/* */
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="strip1"></div>*/
/*                             <!-- banner-bottom-grids -->*/
/*                             <div class="banner-bottom-grids">*/
/*                                 <!-- banner-bottom-left -->*/
/*                                 <div class="col-md-8 banner-bottom-left">*/
/*                                     <div class="banner-bottom-left-grids">*/
/*                                         <div class="col-md-6 banner-left-grid">*/
/*                                             <h3>artical</h3>*/
/*                                             <a href="blog.html"><img src="images/b1.jpg" alt=""/></a>*/
/* */
/*                                             <p class="text">*/
/*                                                 西风卷帘笑落花,低吟浅唱泻芳华。日出东海落西山，兰溪幽悠浣流沙。梦逐天涯。风吹雨成花。岁月蒸发，掌心的梦匣。浮尘轻抹，渡过春秋冬夏。<br>*/
/*                                                 朝暮踏歌，悲欢离合。了搓跎，花开风过，一步一岁末。潺潺地淌过岁月之河。日子轻轻的在指间跌落......</p>*/
/*                                             <div class="blog-grids">*/
/*                                                 <div class="blog-grid-left">*/
/*                                                     <img src="images/b5.jpg" alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="blog-grid-right">*/
/*                                                     不去追逐你所渴求，你将永远不会拥有。不开口问，回答永远是No。不往前走，就将永远停留。*/
/* */
/*                                                 </div>*/
/*                                                 <div class="clearfix"></div>*/
/*                                             </div>*/
/*                                             <div class="blog-grids">*/
/*                                                 <div class="blog-grid-left">*/
/*                                                     <img src="images/b6.jpg" alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="blog-grid-right">*/
/*                                                     昨天很重要，它构建了我们的记忆；明天很重要，它让我们有了憧憬和梦想。*/
/*                                                 </div>*/
/*                                                 <div class="clearfix"></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col-md-6 banner-left-grid">*/
/*                                             <h3>artical</h3>*/
/*                                             <a href="blog.html"><img src="images/b2.jpg" alt=""/></a>*/
/* */
/*                                             <p class="text">*/
/*                                                 总是在回眸之间，才想留住你脸上那一抹微笑，也才知道那熟悉的浪漫，其实每天都在我的生活中展现。突然觉得自己好像错过了命运对我的恩惠，准确的说不是好像，是肯定……美好的只属于回忆，现实的却总是残缺，离我们的憧憬总是存在一定的距离......</p>*/
/*                                             <div class="blog-grids">*/
/*                                                 <div class="blog-grid-left">*/
/*                                                     <img src="images/b5.jpg" alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="blog-grid-right">*/
/*                                                     用最少的悔恨面对过去，用最少的浪费面对现在，用最多的梦想面对未来。*/
/*                                                 </div>*/
/*                                                 <div class="clearfix"></div>*/
/*                                             </div>*/
/*                                             <div class="blog-grids">*/
/*                                                 <div class="blog-grid-left">*/
/*                                                     <img src="images/b6.jpg" alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="blog-grid-right">*/
/*                                                     我只是一朵向日葵，等待着属于我的唯一的阳光*/
/* */
/*                                                 </div>*/
/*                                                 <div class="clearfix"></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="clearfix"></div>*/
/*                                     </div>*/
/*                                     <div class="banner-bottom-left-grids">*/
/*                                         <div class="col-md-6 banner-left-grid">*/
/*                                             <h3>artical</h3>*/
/*                                             <a href="blog.html"><img src="images/b3.jpg" alt=""/></a>*/
/* */
/*                                             <p class="text">*/
/*                                                 最近看了一部影片叫《蓝色迷情》，唤起了我对海的向往。虽然自己是个平原长大的孩子，但是对海却情有独钟，因为站在海的面前，心情会无比的旷达与纯净。一泓幽蓝浩浩汤汤，仿佛卷走了尘世间所有的喧嚣与浮躁，剩下的只是心灵的跃动和神思的空灵……</p>*/
/*                                             <div class="blog-grids">*/
/*                                                 <div class="blog-grid-left">*/
/*                                                     <img src="images/b7.jpg" alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="blog-grid-right">*/
/*                                                     <p>伤痛使你更坚强，眼泪使你更勇敢，心碎使你更明智。</p>*/
/* */
/*                                                 </div>*/
/*                                                 <div class="clearfix"></div>*/
/*                                             </div>*/
/*                                             <div class="blog-grids">*/
/*                                                 <div class="blog-grid-left">*/
/*                                                     <img src="images/b8.jpg" alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="blog-grid-right">*/
/*                                                     <p>生命就好像旅行，在过程中我们可以拥有一些东西，但终究不能带走它。</p>*/
/* */
/*                                                 </div>*/
/*                                                 <div class="clearfix"></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col-md-6 banner-left-grid">*/
/*                                             <h3>artical</h3>*/
/*                                             <a href="blog.html"><img src="images/b4.jpg" alt=""/></a>*/
/* */
/*                                             <p class="text">*/
/*                                                 在你的沉思与歌唱里，我发现窗的曼妙和无与伦比。倚窗而立，凭窗远眺，临窗而坐，拥窗入眠，落窗凝思，一卷书，一杯茗，一首歌，是你的情怀，亦是人生欢景，那些窗内窗外的世象，或许是你于红尘中，独爱窗棱的缘故。世间有窗，总那么一点点，似有似无，开开合合....</p>*/
/*                                             <div class="blog-grids">*/
/*                                                 <div class="blog-grid-left">*/
/*                                                     <img src="images/b7.jpg" alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="blog-grid-right">*/
/*                                                     <p>不管发生什么，都不要放弃，坚持走下去，肯定会有意想不到的风景。</p>*/
/*                                                 </div>*/
/*                                                 <div class="clearfix"></div>*/
/*                                             </div>*/
/*                                             <div class="blog-grids">*/
/*                                                 <div class="blog-grid-left">*/
/*                                                     <img src="images/b8.jpg" alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="blog-grid-right">*/
/*                                                     <p>人与人之间最远的距离，不是隔了千山万水，而是心与心的距离。</p>*/
/*                                                 </div>*/
/*                                                 <div class="clearfix"></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="clearfix"></div>*/
/*                                     </div>*/
/*                                     <!-- post -->*/
/*                                     <div class="post">*/
/*                                         <h3>Latest artical</h3>*/
/*                                         <div class="post-grids">*/
/*                                             <div class="col-md-4 post-left">*/
/*                                                 <img src="images/p1.jpg" alt=""/>*/
/*                                             </div>*/
/*                                             <div class="col-md-8 post-right">*/
/* */
/*                                                 <p class="text">Search for knowledge, read more, sit on your front porch*/
/*                                                     and admire the view without paying attention to your needs.*/
/*                                                     寻找更多的知识，多读一些书，坐在你家的前廊里，以赞美的眼光去享受眼前的风景，不要带上任何功利的想法</p>*/
/*                                             </div>*/
/*                                             <div class="clearfix"></div>*/
/*                                         </div>*/
/*                                         <div class="post-grids">*/
/*                                             <div class="col-md-4 post-left">*/
/*                                                 <img src="images/p2.jpg" alt=""/>*/
/*                                             </div>*/
/*                                             <div class="col-md-8 post-right">*/
/* */
/*                                                 <p class="text">Friendship isn't about whom you've known the longest,*/
/*                                                     it's about who came, and never left your*/
/*                                                     side.——朋友不是那个你认识得最久的人，而是那个来到你身边后便不再离开的人。</p>*/
/*                                             </div>*/
/*                                             <div class="clearfix"></div>*/
/*                                         </div>*/
/*                                         <div class="post-grids">*/
/*                                             <div class="col-md-4 post-left">*/
/*                                                 <img src="images/p3.jpg" alt=""/>*/
/*                                             </div>*/
/*                                             <div class="col-md-8 post-right">*/
/* */
/*                                                 <p class="text">Travel the greatest benefit, not to see how many people,*/
/*                                                     see more beautiful scenery, but walked, in a fate, suddenly find*/
/*                                                     themselves.旅行最大的好处，不是见到多少人，见过多美的风景，而是走着走着，在一个际遇下，突然重新认识了自己。</p>*/
/*                                             </div>*/
/*                                             <div class="clearfix"></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <!-- //post -->*/
/*                                 </div>*/
/*                                 <!-- //banner-bottom-left -->*/
/*                                 <!-- banner-bottom-right -->*/
/*                                 <div class="col-md-4 banner-bottom-right">*/
/* */
/*                                     <div class="advertisement">*/
/*                                         <h3>my girl</h3><br>*/
/*                                         <img src="images/a.jpg" alt="">*/
/*                                     </div>*/
/*                                     <div class="sponsors">*/
/*                                         <h3>my girl</h3>*/
/*                                         <div class="sponsors-grids">*/
/*                                             <div class="sponsors-grid-left">*/
/* */
/*                                                 <img src="images/b.jpg" alt="">*/
/* */
/*                                             </div>*/
/*                                             <div class="sponsors-grid-left">*/
/* */
/*                                                 <img src="images/c.jpg" alt="">*/
/* */
/*                                             </div>*/
/*                                             <div class="clearfix"></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="video">*/
/*                                         <h3>Taylor swift</h3>*/
/*                                         <iframe src="http://v.yinyuetai.com/video/535338"></iframe>*/
/*                                     </div>*/
/*                                     <div class="twitter">*/
/*                                         <h3>about she</h3>*/
/*                                         <div class="twitter-info">*/
/*                                             <p>泰勒·斯威夫特（Taylor*/
/*                                                 Swift），1989年12月13日出生于美国宾夕法尼亚州，美国流行音乐、乡村音乐创作型女歌手、音乐制作人、演员、慈善家。</p>*/
/*                                         </div>*/
/*                                         <div class="twitter-info">*/
/*                                             <p>2006年与独立唱片公司大机器唱片签约，发行首张录音室专辑《泰勒·斯威夫特》，获美国唱片业协会认证5倍白金唱片[1]*/
/*                                                 。2007年至2015年共获7届纳什维尔创作人协会国际奖年度创作人/艺人。</p>*/
/*                                         </div>*/
/*                                         <div class="twitter-info">*/
/*                                             <p>2008年发行第二张录音室专辑《Fearless》，在美国公告牌专辑榜上获11周冠军，是2009年全美最畅销专辑，认证7倍白金唱片[2]*/
/*                                                 ，专辑获第52届格莱美奖年度专辑，使泰勒成为获此奖项的最年轻歌手， [3] 也是获奖最多的乡村音乐专辑[4] 。</p>*/
/*                                         </div>*/
/*                                         <div class="twitter-info">*/
/*                                             <p>2015年4月获第50届乡村音乐学院奖50周年里程碑奖[13-14] 。5月，成为2015福布斯全球权势女性榜上榜最年轻女性[15-16]*/
/*                                                 。8月获MTV音乐录像带奖年度音乐录像带[17] 。</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="recent-posts">*/
/*                                         <h3>all CDs</h3>*/
/*                                         <ul>*/
/*                                             <li>2006年10月24日，同名专辑《泰勒·斯威夫特》发行</li>*/
/*                                             <li>2008年11月11日，泰勒的第二张专辑《Fearless》发行，*/
/*                                                 公告牌专辑榜夺冠，这也是泰勒的第一张冠军专辑。*/
/*                                             </li>*/
/*                                             <li>2010年10月25日，泰勒发行了第三张录音室专辑《Speak Now》</li>*/
/*                                             <li>2012年10月22日，泰勒发行了她的第四张个人专辑《Red》</li>*/
/*                                             <li>*/
/*                                                 2014年10月27日，发行第五张录音室专辑《1989》，这也是泰勒的第一张正式流行专辑，发行首周售出128万余张，成为美国唱片市场近十二年最高的首周销量纪录，泰勒也成为唯一一位拥有三张首周百万销量专辑的歌手*/
/*                                             </li>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!-- banner-bottom-right -->*/
/*                             <div class="clearfix"></div>*/
/*                             <div class="up-arrow">*/
/*                                 <a class="scroll" href="#home">Back to Top</a>*/
/*                             </div>*/
/*                         </div>*/
/*                         {%- endblock -%}*/
/* */
/*                         <!-- //banner-bottom-grids -->*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- //banner -->*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* <!-- //bg-banner -->*/
/* <div class="footer">*/
/*     <div class="copyright">*/
/*         <p>Copyright &copy; 2016.All rights reserved.</p>*/
/*     </div>*/
/* </div>*/
/* */
/* </body>*/
/* </html>*/
