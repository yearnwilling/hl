<?php

/* AppBundle:newPage:newPage.html.twig */
class __TwigTemplate_d7e9a29f53dbd58b9b659fbe5051812452b2ca9a2704f38a077fa5a39a29b288 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'header' => array($this, 'block_header'),
            'bannerTop' => array($this, 'block_bannerTop'),
            'bannerMiddle' => array($this, 'block_bannerMiddle'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resource/bootstrap/js/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/js/easyResponsiveTabs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resource/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("resource/bootstrap/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/css/useso.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/css/nav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>";
        // line 22
        $this->displayBlock('script', $context, $blocks);
        // line 26
        echo "<script type=\"text/javascript\">
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

    <style>
    .showWord{
    max-width:710px;
    height:auto;
    border:1px solid gray;
    margin:30px 0px;
    padding: 10px;
    font-family: Courier, \"Courier New\", monospace;
    font-weight: bold;
    border-radius: 10px;
    color: rgb(124,204,79);
    }
    </style>
</head>
<body>";
        // line 60
        $this->displayBlock('header', $context, $blocks);
        // line 93
        echo "<!-- //header -->

<!-- bg-banner -->

<div class=\"bg-banner\">
    <div class=\"banner-bottom-bg\">
        <div class=\"banner-bg\">
            <div class=\"container\">
                <!-- banner -->
                <div class=\"banner\">
                    <div class=\"banner-grids\">";
        // line 104
        $this->displayBlock('bannerTop', $context, $blocks);
        // line 136
        $this->displayBlock('bannerMiddle', $context, $blocks);
        // line 318
        echo "<!-- //banner-bottom-grids -->
                    </div>
                </div>
            </div>
            <!-- //banner -->
        </div>
    </div>
</div>

<!-- //bg-banner -->
";
        // line 329
        echo "    ";
        // line 330
        echo "        ";
        // line 331
        echo "    ";
        // line 333
        echo "
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "莉莉blog";
    }

    // line 22
    public function block_script($context, array $blocks = array())
    {
    }

    // line 60
    public function block_header($context, array $blocks = array())
    {
        // line 61
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
        // line 82
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
    }

    // line 104
    public function block_bannerTop($context, array $blocks = array())
    {
        // line 105
        echo "<div class=\"banner-top\">
                                <ul class=\"nav banner-nav\">
                                    <li class=\"dropdown1\"><a
                                                href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("new_page");
        echo "\">主页<span>my &nbsp;homepage</span></a>

                                    </li>
                                    <li class=\"dropdown1\"><a href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("page_blog");
        echo "\">日志<span>my &nbsp;blog</span></a>

                                    </li>
                                    <li class=\"dropdown1\"><a
                                                href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("page_photo");
        echo "\">相册<span>my &nbsp;photo</span></a>

                                    </li>
                                    <li class=\"dropdown1\"><a
                                                href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("page_study");
        echo "\">学习<span>my &nbsp;study</span></a>

                                    </li>
                                    <li class=\"dropdown1\"><a
                                                href=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("page_travel");
        echo "\">旅游<span>my &nbsp;travel</span></a>

                                    </li>
                                    <li class=\"dropdown1\"><a href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("page_single");
        echo "\">个人中心<span> individual &nbsp;center </span></a>

                                    </li>
                                </ul>
                                <script>

                                </script>
                            </div>";
    }

    // line 136
    public function block_bannerMiddle($context, array $blocks = array())
    {
        // line 137
        echo "<div class=\"banner-middle\">

                                <div class=\"slider\">
                                    <!-- Slideshow 3 -->
                                    <ul class=\"rslides\" id=\"slider\">
                                        <li><img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/1.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
                                        <li><img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/2.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
                                        <li><img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/3.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
                                        <li><img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/4.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
                                        <li><img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/5.jpg"), "html", null, true);
        echo "\" alt=\"\"></li>
                                        ";
        // line 148
        echo "                                    </ul>
                                    <!-- Slideshow 3 Pager -->
                                    <ul id=\"slider3-pager\">
                                        <li><a href=\"#\"><img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/1c.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        </li>
                                        <li><a href=\"#\"><img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/2c.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        </li>
                                        <li><a href=\"#\"><img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/3c.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        </li>
                                        <li><a href=\"#\"><img src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/4c.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        </li>
                                        <li><a href=\"#\"><img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/5c.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                        </li>
                                        ";
        // line 162
        echo "
                                    </ul>
                                </div>
                                <div class=\"strip1\"></div>
                                <!-- banner-bottom-grids -->
                                <div class=\"banner-bottom-grids\">
                                    <!-- banner-bottom-left -->
                                    <div class=\"col-md-8 banner-bottom-left\">
                                        <div class=\"banner-bottom-left-grids\">
                                            ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artcals"]) ? $context["artcals"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["artcal"]) {
            // line 172
            echo "                                            <div class=\"col-md-6 banner-left-grid\">
                                                <h3>";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["artcal"], "title", array()), "html", null, true);
            echo "</h3>
                                                <a href=\"blog.html\"><img src=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["artcal"], "image", array()), "html", null, true);
            echo "\" alt=\"\"/></a>

                                                <p class=\"text\">
                                                    ";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($context["artcal"], "info", array()), "html", null, true);
            echo "
                                                </p>
                                                <div class=\"blog-grids\">
                                                    <div class=\"blog-grid-left\">
                                                        <img src=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["artcal"], "frist_image", array()), "html", null, true);
            echo "\" alt=\"\"/>
                                                    </div>
                                                    <div class=\"blog-grid-right\">
                                                        ";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($context["artcal"], "frist_title", array()), "html", null, true);
            echo "
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                                <div class=\"blog-grids\">
                                                    <div class=\"blog-grid-left\">
                                                        <img src=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["artcal"], "next_image", array()), "html", null, true);
            echo "\" alt=\"\"/>
                                                    </div>
                                                    <div class=\"blog-grid-right\">
                                                        ";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($context["artcal"], "next_title", array()), "html", null, true);
            echo "
                                                    </div>
                                                    <div class=\"clearfix\"></div>
                                                </div>
                                            </div>
                                                ";
            // line 198
            if ((($this->getAttribute($context["loop"], "index", array()) == 2) || ($this->getAttribute($context["loop"], "index", array()) == 4))) {
                // line 199
                echo "                                                    <div class=\"clearfix\"></div>
                                                ";
            }
            // line 201
            echo "                                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artcal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "                                        </div>
                                        <!-- post -->
                                        <div class=\"post\">
                                            <h3>Latest artical</h3>
                                            <div class=\"post-grids\">
                                                <div class=\"col-md-4 post-left\">
                                                    <img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/p1.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                </div>
                                                <div class=\"col-md-8 post-right\">

                                                    <p class=\"text\">Search for knowledge, read more, sit on your front
                                                        porch
                                                        and admire the view without paying attention to your needs.
                                                        寻找更多的知识，多读一些书，坐在你家的前廊里，以赞美的眼光去享受眼前的风景，不要带上任何功利的想法</p>
                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"post-grids\">
                                                <div class=\"col-md-4 post-left\">
                                                    <img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/p2.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                </div>
                                                <div class=\"col-md-8 post-right\">

                                                    <p class=\"text\">Friendship isn't about whom you've known the
                                                        longest,
                                                        it's about who came, and never left your
                                                        side.——朋友不是那个你认识得最久的人，而是那个来到你身边后便不再离开的人。</p>
                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"post-grids\">
                                                <div class=\"col-md-4 post-left\">
                                                    <img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/p3.jpg"), "html", null, true);
        echo "\" alt=\"\"/>
                                                </div>
                                                <div class=\"col-md-8 post-right\">

                                                    <p class=\"text\">Travel the greatest benefit, not to see how many
                                                        people,
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
                                            <img src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/a.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                        <div class=\"sponsors\">
                                            <h3>my girl</h3>
                                            <div class=\"sponsors-grids\">
                                                <div class=\"sponsors-grid-left\">

                                                    <img src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/b.jpg"), "html", null, true);
        echo "\" alt=\"\">

                                                </div>
                                                <div class=\"sponsors-grid-left\">

                                                    <img src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("AppBundles/image/c.jpg"), "html", null, true);
        echo "\" alt=\"\">

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
                                                </li></ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- banner-bottom-right -->
                                <div class=\"clearfix\"></div>
                                <div class=\"up-arrow\">
                                    <a class=\"scroll\" href=\"#home\">Back to Top</a>
                                </div>
                            </div>";
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
        return array (  504 => 266,  496 => 261,  486 => 254,  463 => 234,  447 => 221,  431 => 208,  423 => 202,  409 => 201,  405 => 199,  403 => 198,  395 => 193,  388 => 190,  379 => 184,  372 => 181,  365 => 177,  358 => 174,  354 => 173,  351 => 172,  334 => 171,  323 => 162,  318 => 159,  313 => 157,  308 => 155,  303 => 153,  298 => 151,  293 => 148,  289 => 146,  285 => 145,  281 => 144,  277 => 143,  273 => 142,  266 => 137,  263 => 136,  251 => 126,  245 => 123,  238 => 119,  231 => 115,  224 => 111,  218 => 108,  213 => 105,  210 => 104,  196 => 82,  173 => 61,  170 => 60,  165 => 22,  161 => 6,  158 => 5,  152 => 333,  150 => 331,  148 => 330,  146 => 329,  134 => 318,  132 => 136,  130 => 104,  118 => 93,  116 => 60,  81 => 26,  79 => 22,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  52 => 15,  48 => 14,  44 => 13,  40 => 12,  36 => 11,  31 => 8,  29 => 5,  24 => 1,);
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
/*     <script src="{{ asset('resource/bootstrap/js/bootstrap-notify.js') }}"></script>*/
/*     <script src="{{ asset('AppBundles/js/easyResponsiveTabs.js') }}"></script>*/
/*     <script src="{{ asset('AppBundles/js/responsiveslides.min.js') }}"></script>*/
/*     <link href="{{ asset('resource/bootstrap/css/bootstrap.css') }}" rel="stylesheet"/>*/
/*     <link href="{{ asset('resource/bootstrap/css/animate.css') }}" rel="stylesheet"/>*/
/*     <link href="{{ asset('AppBundles/css/style.css') }}" rel="stylesheet"/>*/
/*     <link href="{{ asset('AppBundles/css/useso.css') }}" rel="stylesheet"/>*/
/*     <link href="{{ asset('AppBundles/css/nav.css') }}" rel="stylesheet"/>*/
/*     {%- block script -%}*/
/* */
/*     {%- endblock -%}*/
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
/* */
/*     <style>*/
/*     .showWord{*/
/*     max-width:710px;*/
/*     height:auto;*/
/*     border:1px solid gray;*/
/*     margin:30px 0px;*/
/*     padding: 10px;*/
/*     font-family: Courier, "Courier New", monospace;*/
/*     font-weight: bold;*/
/*     border-radius: 10px;*/
/*     color: rgb(124,204,79);*/
/*     }*/
/*     </style>*/
/* </head>*/
/* <body>*/
/* {%- block header -%}*/
/*     <div id="home" class="header">*/
/*         <div class="header-top">*/
/*             <!-- container -->*/
/*             <div class="container">*/
/*                 <div class="top-nav">*/
/*                     <script>*/
/*                         document.write(myDate.tolocaleString());*/
/*                     </script>*/
/*                 </div>*/
/*                 <div class="nav-right">*/
/*                     <p>created by hl, <a href="">Emaiil</a> for contact!</p>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*                 <!-- script-for-menu -->*/
/*             </div>*/
/*             <!-- //container -->*/
/*         </div>*/
/*         <div class="header-bottom">*/
/*             <!-- container -->*/
/*             <div class="container">*/
/*                 <div class="head-logo">*/
/*                     <a href="index.html"><img src="{{ asset('AppBundles/icon/logo.png') }}" alt=""/></a>*/
/*                 </div>*/
/*                 <div class="logo-right">*/
/* */
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*             <!-- //container -->*/
/*         </div>*/
/*     </div>*/
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
/*                             <div class="banner-top">*/
/*                                 <ul class="nav banner-nav">*/
/*                                     <li class="dropdown1"><a*/
/*                                                 href="{{ path('new_page') }}">主页<span>my &nbsp;homepage</span></a>*/
/* */
/*                                     </li>*/
/*                                     <li class="dropdown1"><a href="{{ path('page_blog') }}">日志<span>my &nbsp;blog</span></a>*/
/* */
/*                                     </li>*/
/*                                     <li class="dropdown1"><a*/
/*                                                 href="{{ path('page_photo') }}">相册<span>my &nbsp;photo</span></a>*/
/* */
/*                                     </li>*/
/*                                     <li class="dropdown1"><a*/
/*                                                 href="{{ path('page_study') }}">学习<span>my &nbsp;study</span></a>*/
/* */
/*                                     </li>*/
/*                                     <li class="dropdown1"><a*/
/*                                                 href="{{ path('page_travel') }}">旅游<span>my &nbsp;travel</span></a>*/
/* */
/*                                     </li>*/
/*                                     <li class="dropdown1"><a href="{{ path('page_single') }}">个人中心<span> individual &nbsp;center </span></a>*/
/* */
/*                                     </li>*/
/*                                 </ul>*/
/*                                 <script>*/
/* */
/*                                 </script>*/
/*                             </div>*/
/*                         {%- endblock -%}*/
/* */
/*                         {%- block bannerMiddle -%}*/
/*                             <div class="banner-middle">*/
/* */
/*                                 <div class="slider">*/
/*                                     <!-- Slideshow 3 -->*/
/*                                     <ul class="rslides" id="slider">*/
/*                                         <li><img src="{{ asset('AppBundles/image/1.jpg') }}" alt=""></li>*/
/*                                         <li><img src="{{ asset('AppBundles/image/2.jpg') }}" alt=""></li>*/
/*                                         <li><img src="{{ asset('AppBundles/image/3.jpg') }}" alt=""></li>*/
/*                                         <li><img src="{{ asset('AppBundles/image/4.jpg') }}" alt=""></li>*/
/*                                         <li><img src="{{ asset('AppBundles/image/5.jpg') }}" alt=""></li>*/
/*                                         {#<li><img src="{{ asset('AppBundles/image/6.jpg') }}" alt=""></li>#}*/
/*                                     </ul>*/
/*                                     <!-- Slideshow 3 Pager -->*/
/*                                     <ul id="slider3-pager">*/
/*                                         <li><a href="#"><img src="{{ asset('AppBundles/image/1c.jpg') }}" alt=""></a>*/
/*                                         </li>*/
/*                                         <li><a href="#"><img src="{{ asset('AppBundles/image/2c.jpg') }}" alt=""></a>*/
/*                                         </li>*/
/*                                         <li><a href="#"><img src="{{ asset('AppBundles/image/3c.jpg') }}" alt=""></a>*/
/*                                         </li>*/
/*                                         <li><a href="#"><img src="{{ asset('AppBundles/image/4c.jpg') }}" alt=""></a>*/
/*                                         </li>*/
/*                                         <li><a href="#"><img src="{{ asset('AppBundles/image/5c.jpg') }}" alt=""></a>*/
/*                                         </li>*/
/*                                         {#<li><a href="#"><img src="{{ asset('AppBundles/image/6c.jpg') }}" alt=""></a></li>#}*/
/* */
/*                                     </ul>*/
/*                                 </div>*/
/*                                 <div class="strip1"></div>*/
/*                                 <!-- banner-bottom-grids -->*/
/*                                 <div class="banner-bottom-grids">*/
/*                                     <!-- banner-bottom-left -->*/
/*                                     <div class="col-md-8 banner-bottom-left">*/
/*                                         <div class="banner-bottom-left-grids">*/
/*                                             {% for artcal in artcals %}*/
/*                                             <div class="col-md-6 banner-left-grid">*/
/*                                                 <h3>{{ artcal.title }}</h3>*/
/*                                                 <a href="blog.html"><img src="{{ asset('AppBundles/image/') }}{{ artcal.image }}" alt=""/></a>*/
/* */
/*                                                 <p class="text">*/
/*                                                     {{ artcal.info }}*/
/*                                                 </p>*/
/*                                                 <div class="blog-grids">*/
/*                                                     <div class="blog-grid-left">*/
/*                                                         <img src="{{ asset('AppBundles/image/') }}{{ artcal.frist_image }}" alt=""/>*/
/*                                                     </div>*/
/*                                                     <div class="blog-grid-right">*/
/*                                                         {{ artcal.frist_title }}*/
/*                                                     </div>*/
/*                                                     <div class="clearfix"></div>*/
/*                                                 </div>*/
/*                                                 <div class="blog-grids">*/
/*                                                     <div class="blog-grid-left">*/
/*                                                         <img src="{{ asset('AppBundles/image/') }}{{ artcal.next_image }}" alt=""/>*/
/*                                                     </div>*/
/*                                                     <div class="blog-grid-right">*/
/*                                                         {{ artcal.next_title }}*/
/*                                                     </div>*/
/*                                                     <div class="clearfix"></div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                                 {% if loop.index== 2 or loop.index == 4 %}*/
/*                                                     <div class="clearfix"></div>*/
/*                                                 {% endif %}*/
/*                                             {% endfor %}*/
/*                                         </div>*/
/*                                         <!-- post -->*/
/*                                         <div class="post">*/
/*                                             <h3>Latest artical</h3>*/
/*                                             <div class="post-grids">*/
/*                                                 <div class="col-md-4 post-left">*/
/*                                                     <img src="{{ asset('AppBundles/image/p1.jpg') }}" alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="col-md-8 post-right">*/
/* */
/*                                                     <p class="text">Search for knowledge, read more, sit on your front*/
/*                                                         porch*/
/*                                                         and admire the view without paying attention to your needs.*/
/*                                                         寻找更多的知识，多读一些书，坐在你家的前廊里，以赞美的眼光去享受眼前的风景，不要带上任何功利的想法</p>*/
/*                                                 </div>*/
/*                                                 <div class="clearfix"></div>*/
/*                                             </div>*/
/*                                             <div class="post-grids">*/
/*                                                 <div class="col-md-4 post-left">*/
/*                                                     <img src="{{ asset('AppBundles/image/p2.jpg') }}" alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="col-md-8 post-right">*/
/* */
/*                                                     <p class="text">Friendship isn't about whom you've known the*/
/*                                                         longest,*/
/*                                                         it's about who came, and never left your*/
/*                                                         side.——朋友不是那个你认识得最久的人，而是那个来到你身边后便不再离开的人。</p>*/
/*                                                 </div>*/
/*                                                 <div class="clearfix"></div>*/
/*                                             </div>*/
/*                                             <div class="post-grids">*/
/*                                                 <div class="col-md-4 post-left">*/
/*                                                     <img src="{{ asset('AppBundles/image/p3.jpg') }}" alt=""/>*/
/*                                                 </div>*/
/*                                                 <div class="col-md-8 post-right">*/
/* */
/*                                                     <p class="text">Travel the greatest benefit, not to see how many*/
/*                                                         people,*/
/*                                                         see more beautiful scenery, but walked, in a fate, suddenly find*/
/*                                                         themselves.旅行最大的好处，不是见到多少人，见过多美的风景，而是走着走着，在一个际遇下，突然重新认识了自己。</p>*/
/*                                                 </div>*/
/*                                                 <div class="clearfix"></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <!-- //post -->*/
/*                                     </div>*/
/*                                     <!-- //banner-bottom-left -->*/
/*                                     <!-- banner-bottom-right -->*/
/*                                     <div class="col-md-4 banner-bottom-right">*/
/* */
/*                                         <div class="advertisement">*/
/*                                             <h3>my girl</h3><br>*/
/*                                             <img src="{{ asset('AppBundles/image/a.jpg') }}" alt="">*/
/*                                         </div>*/
/*                                         <div class="sponsors">*/
/*                                             <h3>my girl</h3>*/
/*                                             <div class="sponsors-grids">*/
/*                                                 <div class="sponsors-grid-left">*/
/* */
/*                                                     <img src="{{ asset('AppBundles/image/b.jpg') }}" alt="">*/
/* */
/*                                                 </div>*/
/*                                                 <div class="sponsors-grid-left">*/
/* */
/*                                                     <img src="{{ asset('AppBundles/image/c.jpg') }}" alt="">*/
/* */
/*                                                 </div>*/
/*                                                 <div class="clearfix"></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="video">*/
/*                                             <h3>Taylor swift</h3>*/
/*                                             <iframe src="http://v.yinyuetai.com/video/535338"></iframe>*/
/*                                         </div>*/
/*                                         <div class="twitter">*/
/*                                             <h3>about she</h3>*/
/*                                             <div class="twitter-info">*/
/*                                                 <p>泰勒·斯威夫特（Taylor*/
/*                                                     Swift），1989年12月13日出生于美国宾夕法尼亚州，美国流行音乐、乡村音乐创作型女歌手、音乐制作人、演员、慈善家。</p>*/
/*                                             </div>*/
/*                                             <div class="twitter-info">*/
/*                                                 <p>2006年与独立唱片公司大机器唱片签约，发行首张录音室专辑《泰勒·斯威夫特》，获美国唱片业协会认证5倍白金唱片[1]*/
/*                                                     。2007年至2015年共获7届纳什维尔创作人协会国际奖年度创作人/艺人。</p>*/
/*                                             </div>*/
/*                                             <div class="twitter-info">*/
/*                                                 <p>2008年发行第二张录音室专辑《Fearless》，在美国公告牌专辑榜上获11周冠军，是2009年全美最畅销专辑，认证7倍白金唱片[2]*/
/*                                                     ，专辑获第52届格莱美奖年度专辑，使泰勒成为获此奖项的最年轻歌手， [3] 也是获奖最多的乡村音乐专辑[4] 。</p>*/
/*                                             </div>*/
/*                                             <div class="twitter-info">*/
/*                                                 <p>2015年4月获第50届乡村音乐学院奖50周年里程碑奖[13-14] 。5月，成为2015福布斯全球权势女性榜上榜最年轻女性[15-16]*/
/*                                                     。8月获MTV音乐录像带奖年度音乐录像带[17] 。</p>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="recent-posts">*/
/*                                             <h3>all CDs</h3>*/
/*                                             <ul>*/
/*                                                 <li>2006年10月24日，同名专辑《泰勒·斯威夫特》发行</li>*/
/*                                                 <li>2008年11月11日，泰勒的第二张专辑《Fearless》发行，*/
/*                                                     公告牌专辑榜夺冠，这也是泰勒的第一张冠军专辑。*/
/*                                                 </li>*/
/*                                                 <li>2010年10月25日，泰勒发行了第三张录音室专辑《Speak Now》</li>*/
/*                                                 <li>2012年10月22日，泰勒发行了她的第四张个人专辑《Red》</li>*/
/*                                                 <li>*/
/*                                                     2014年10月27日，发行第五张录音室专辑《1989》，这也是泰勒的第一张正式流行专辑，发行首周售出128万余张，成为美国唱片市场近十二年最高的首周销量纪录，泰勒也成为唯一一位拥有三张首周百万销量专辑的歌手*/
/*                                                 </li></ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <!-- banner-bottom-right -->*/
/*                                 <div class="clearfix"></div>*/
/*                                 <div class="up-arrow">*/
/*                                     <a class="scroll" href="#home">Back to Top</a>*/
/*                                 </div>*/
/*                             </div>*/
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
/* */
/* <!-- //bg-banner -->*/
/* {#<div class="footer">#}*/
/*     {#<div class="copyright">#}*/
/*         {#<p>Copyright &copy; 2016.All rights reserved.</p>#}*/
/*     {#</div>#}*/
/* {#</div>#}*/
/* */
/* </body>*/
/* </html>*/
