<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index/bodyIndex.html.twig */
class __TwigTemplate_7fcafd8fa38771d648bb14c1e58972f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/bodyIndex.html.twig"));

        // line 1
        echo "<section class=\"hero\">
        <div class=\"hero__slider owl-carousel\">
            <div class=\"hero__item set-bg\" data-setbg=\" ";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//hero/hero-1.jpg"), "html", null, true);
        echo "\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"hero__text\">
                                <span>For website and video editing</span>
                                <h2>Videographer’s Portfolio</h2>
                                <a href=\"#\" class=\"primary-btn\">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"hero__item set-bg\" data-setbg=\" ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//hero/hero-1.jpg"), "html", null, true);
        echo "\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"hero__text\">
                                <span>For website and video editing</span>
                                <h2>Videographer’s Portfolio</h2>
                                <a href=\"#\" class=\"primary-btn\">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"hero__item set-bg\" data-setbg=\" ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//hero/hero-1.jpg"), "html", null, true);
        echo "\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"hero__text\">
                                <span>For website and video editing</span>
                                <h2>Videographer’s Portfolio</h2>
                                <a href=\"#\" class=\"primary-btn\">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class=\"services spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"services__title\">
                        <div class=\"section-title\">
                            <span>Our services</span>
                            <h2>What We do?</h2>
                        </div>
                        <p>If you hire a videographer of our team you will get a video professional to make a custom
                            video for your business and, once the project is over.</p>
                        <a href=\"#\" class=\"primary-btn\">View all services</a>
                    </div>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-6 col-sm-6\">
                            <div class=\"services__item\">
                                <div class=\"services__item__icon\">
                                    <img src=\" ";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//icons/si-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <h4>Motion graphics</h4>
                                <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                    post production services can put the finishing touches.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-6\">
                            <div class=\"services__item\">
                                <div class=\"services__item__icon\">
                                    <img src=\" ";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//icons/si-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <h4>Scriptwriting and editing</h4>
                                <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                    post production services can put the finishing touches.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-6\">
                            <div class=\"services__item\">
                                <div class=\"services__item__icon\">
                                    <img src=\" ";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//icons/si-3.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <h4>Video distribution</h4>
                                <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                    post production services can put the finishing touches.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-6\">
                            <div class=\"services__item\">
                                <div class=\"services__item__icon\">
                                    <img src=\" ";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//icons/si-4.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <h4>Video hosting</h4>
                                <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                    post production services can put the finishing touches.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Work Section Begin -->
    <section class=\"work\">
        <div class=\"work__gallery\">
            <div class=\"grid-sizer\"></div>
            <div class=\"work__item wide__item set-bg\" data-setbg=\" ";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//work/work-1.jpg"), "html", null, true);
        echo "\">
                <a href=\"https://www.youtube.com/watch?v=LXb3EKWsInQ\" class=\"play-btn video-popup\"><i
                        class=\"fa fa-play\"></i></a>
                <div class=\"work__item__hover\">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div>
            </div>
            <div class=\"work__item small__item set-bg\" data-setbg=\" ";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//work/work-2.jpg"), "html", null, true);
        echo "\">
                <a href=\"https://www.youtube.com/watch?v=LXb3EKWsInQ\" class=\"play-btn video-popup\"><i
                        class=\"fa fa-play\"></i></a>
            </div>
            <div class=\"work__item small__item set-bg\" data-setbg=\" ";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//work/work-3.jpg"), "html", null, true);
        echo "\">
                <a href=\"https://www.youtube.com/watch?v=LXb3EKWsInQ\" class=\"play-btn video-popup\"><i
                        class=\"fa fa-play\"></i></a>
            </div>
            <div class=\"work__item large__item set-bg\" data-setbg=\" ";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//work/work-4.jpg"), "html", null, true);
        echo "\">
                <a href=\"https://www.youtube.com/watch?v=LXb3EKWsInQ\" class=\"play-btn video-popup\"><i
                        class=\"fa fa-play\"></i></a>
                <div class=\"work__item__hover\">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div>
            </div>
            <div class=\"work__item small__item set-bg\" data-setbg=\" ";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//work/work-5.jpg"), "html", null, true);
        echo "\">
                <a href=\"https://www.youtube.com/watch?v=LXb3EKWsInQ\" class=\"play-btn video-popup\"><i
                        class=\"fa fa-play\"></i></a>
            </div>
            <div class=\"work__item small__item set-bg\" data-setbg=\" ";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//work/work-6.jpg"), "html", null, true);
        echo "\">
                <a href=\"https://www.youtube.com/watch?v=LXb3EKWsInQ\" class=\"play-btn video-popup\"><i
                        class=\"fa fa-play\"></i></a>
            </div>
            <div class=\"work__item wide__item set-bg\" data-setbg=\" ";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//work/work-7.jpg"), "html", null, true);
        echo "\">
                <a href=\"https://www.youtube.com/watch?v=LXb3EKWsInQ\" class=\"play-btn video-popup\"><i
                        class=\"fa fa-play\"></i></a>
                <div class=\"work__item__hover\">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Section End -->

    <!-- Counter Section Begin -->
    <section class=\"counter\">
        <div class=\"container\">
            <div class=\"counter__content\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6 col-sm-6\">
                        <div class=\"counter__item\">
                            <div class=\"counter__item__text\">
                                <img src=\" ";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//icons/ci-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                <h2 class=\"counter_num\">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6\">
                        <div class=\"counter__item second__item\">
                            <div class=\"counter__item__text\">
                                <img src=\" ";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//icons/ci-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                <h2 class=\"counter_num\">1068</h2>
                                <p>Happy clients</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6\">
                        <div class=\"counter__item third__item\">
                            <div class=\"counter__item__text\">
                                <img src=\" ";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//icons/ci-3.png"), "html", null, true);
        echo "\" alt=\"\">
                                <h2 class=\"counter_num\">230</h2>
                                <p>Perspective clients</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6\">
                        <div class=\"counter__item four__item\">
                            <div class=\"counter__item__text\">
                                <img src=\" ";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//icons/ci-4.png"), "html", null, true);
        echo "\" alt=\"\">
                                <h2 class=\"counter_num\">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Team Section Begin -->
    <section class=\"team spad set-bg\" data-setbg=\" ";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//team-bg.jpg"), "html", null, true);
        echo "\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title team__title\">
                        <span>Nice to meet</span>
                        <h2>OUR Team</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 col-sm-6 p-0\">
                    <div class=\"team__item set-bg\" data-setbg=\" ";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//team/team-1.jpg"), "html", null, true);
        echo "\">
                        <div class=\"team__item__text\">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class=\"team__item__social\">
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6 p-0\">
                    <div class=\"team__item team__item--second set-bg\" data-setbg=\" ";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//team/team-2.jpg"), "html", null, true);
        echo "\">
                        <div class=\"team__item__text\">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class=\"team__item__social\">
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6 p-0\">
                    <div class=\"team__item team__item--third set-bg\" data-setbg=\" ";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//team/team-3.jpg"), "html", null, true);
        echo "\">
                        <div class=\"team__item__text\">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class=\"team__item__social\">
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6 p-0\">
                    <div class=\"team__item team__item--four set-bg\" data-setbg=\" ";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//team/team-4.jpg"), "html", null, true);
        echo "\">
                        <div class=\"team__item__text\">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class=\"team__item__social\">
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-12 p-0\">
                    <div class=\"team__btn\">
                        <a href=\"#\" class=\"primary-btn\">Meet Our Team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Latest Blog Section Begin -->
    <section class=\"latest spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title center-title\">
                        <span>Our Blog</span>
                        <h2>Blog Update</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"latest__slider owl-carousel\">
                    <div class=\"col-lg-4\">
                        <div class=\"blog__item latest__item\">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href=\"#\">Read more <span class=\"arrow_right\"></span></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"blog__item latest__item\">
                            <h4>Bumper Ads: How to Tell a Story in 6 Seconds</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href=\"#\">Read more <span class=\"arrow_right\"></span></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"blog__item latest__item\">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href=\"#\">Read more <span class=\"arrow_right\"></span></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"blog__item latest__item\">
                            <h4>Bumper Ads: How to Tell a Story in 6 Seconds</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href=\"#\">Read more <span class=\"arrow_right\"></span></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"blog__item latest__item\">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href=\"#\">Read more <span class=\"arrow_right\"></span></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"blog__item latest__item\">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href=\"#\">Read more <span class=\"arrow_right\"></span></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"blog__item latest__item\">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href=\"#\">Read more <span class=\"arrow_right\"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Call To Action Section Begin -->
    <section class=\"callto spad set-bg\" data-setbg=\" ";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img//callto-bg.jpg"), "html", null, true);
        echo "\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"callto__text\">
                        <h2>Fresh Ideas, Fresh Moments Giving Wings to your Stories.</h2>
                        <p>INC5000, Best places to work 2019</p>
                        <a href=\"#\">Start your stories</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "index/bodyIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  506 => 396,  376 => 269,  359 => 255,  342 => 241,  325 => 227,  310 => 215,  294 => 202,  282 => 193,  270 => 184,  258 => 175,  232 => 152,  225 => 148,  218 => 144,  204 => 133,  197 => 129,  190 => 125,  176 => 114,  155 => 96,  142 => 86,  129 => 76,  116 => 66,  76 => 29,  60 => 16,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"hero\">
        <div class=\"hero__slider owl-carousel\">
            <div class=\"hero__item set-bg\" data-setbg=\" {{ asset('img//hero/hero-1.jpg') }}\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"hero__text\">
                                <span>For website and video editing</span>
                                <h2>Videographer’s Portfolio</h2>
                                <a href=\"#\" class=\"primary-btn\">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"hero__item set-bg\" data-setbg=\" {{ asset('img//hero/hero-1.jpg') }}\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"hero__text\">
                                <span>For website and video editing</span>
                                <h2>Videographer’s Portfolio</h2>
                                <a href=\"#\" class=\"primary-btn\">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"hero__item set-bg\" data-setbg=\" {{ asset('img//hero/hero-1.jpg') }}\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div class=\"hero__text\">
                                <span>For website and video editing</span>
                                <h2>Videographer’s Portfolio</h2>
                                <a href=\"#\" class=\"primary-btn\">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class=\"services spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"services__title\">
                        <div class=\"section-title\">
                            <span>Our services</span>
                            <h2>What We do?</h2>
                        </div>
                        <p>If you hire a videographer of our team you will get a video professional to make a custom
                            video for your business and, once the project is over.</p>
                        <a href=\"#\" class=\"primary-btn\">View all services</a>
                    </div>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-md-6 col-sm-6\">
                            <div class=\"services__item\">
                                <div class=\"services__item__icon\">
                                    <img src=\" {{ asset('img//icons/si-1.png') }}\" alt=\"\">
                                </div>
                                <h4>Motion graphics</h4>
                                <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                    post production services can put the finishing touches.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-6\">
                            <div class=\"services__item\">
                                <div class=\"services__item__icon\">
                                    <img src=\" {{ asset('img//icons/si-2.png') }}\" alt=\"\">
                                </div>
                                <h4>Scriptwriting and editing</h4>
                                <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                    post production services can put the finishing touches.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-6\">
                            <div class=\"services__item\">
                                <div class=\"services__item__icon\">
                                    <img src=\" {{ asset('img//icons/si-3.png') }}\" alt=\"\">
                                </div>
                                <h4>Video distribution</h4>
                                <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                    post production services can put the finishing touches.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-md-6 col-sm-6\">
                            <div class=\"services__item\">
                                <div class=\"services__item__icon\">
                                    <img src=\" {{ asset('img//icons/si-4.png') }}\" alt=\"\">
                                </div>
                                <h4>Video hosting</h4>
                                <p>Whether you’re halfway through the editing process, or you haven’t even started, our
                                    post production services can put the finishing touches.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Work Section Begin -->
    <section class=\"work\">
        <div class=\"work__gallery\">
            <div class=\"grid-sizer\"></div>
            <div class=\"work__item wide__item set-bg\" data-setbg=\" {{ asset('img//work/work-1.jpg') }}\">
                <a href=\"https://www.youtube.com/watch?v=LXb3EKWsInQ\" class=\"play-btn video-popup\"><i
                        class=\"fa fa-play\"></i></a>
                <div class=\"work__item__hover\">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div>
            </div>
            <div class=\"work__item small__item set-bg\" data-setbg=\" {{ asset('img//work/work-2.jpg') }}\">
                <a href=\"https://www.youtube.com/watch?v=LXb3EKWsInQ\" class=\"play-btn video-popup\"><i
                        class=\"fa fa-play\"></i></a>
            </div>
            <div class=\"work__item small__item set-bg\" data-setbg=\" {{ asset('img//work/work-3.jpg') }}\">
                <a href=\"https://www.youtube.com/watch?v=LXb3EKWsInQ\" class=\"play-btn video-popup\"><i
                        class=\"fa fa-play\"></i></a>
            </div>
            <div class=\"work__item large__item set-bg\" data-setbg=\" {{ asset('img//work/work-4.jpg') }}\">
                <a href=\"https://www.youtube.com/watch?v=LXb3EKWsInQ\" class=\"play-btn video-popup\"><i
                        class=\"fa fa-play\"></i></a>
                <div class=\"work__item__hover\">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div>
            </div>
            <div class=\"work__item small__item set-bg\" data-setbg=\" {{ asset('img//work/work-5.jpg') }}\">
                <a href=\"https://www.youtube.com/watch?v=LXb3EKWsInQ\" class=\"play-btn video-popup\"><i
                        class=\"fa fa-play\"></i></a>
            </div>
            <div class=\"work__item small__item set-bg\" data-setbg=\" {{ asset('img//work/work-6.jpg') }}\">
                <a href=\"https://www.youtube.com/watch?v=LXb3EKWsInQ\" class=\"play-btn video-popup\"><i
                        class=\"fa fa-play\"></i></a>
            </div>
            <div class=\"work__item wide__item set-bg\" data-setbg=\" {{ asset('img//work/work-7.jpg') }}\">
                <a href=\"https://www.youtube.com/watch?v=LXb3EKWsInQ\" class=\"play-btn video-popup\"><i
                        class=\"fa fa-play\"></i></a>
                <div class=\"work__item__hover\">
                    <h4>VIP Auto Tires & Service</h4>
                    <ul>
                        <li>eCommerce</li>
                        <li>Magento</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Section End -->

    <!-- Counter Section Begin -->
    <section class=\"counter\">
        <div class=\"container\">
            <div class=\"counter__content\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6 col-sm-6\">
                        <div class=\"counter__item\">
                            <div class=\"counter__item__text\">
                                <img src=\" {{ asset('img//icons/ci-1.png') }}\" alt=\"\">
                                <h2 class=\"counter_num\">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6\">
                        <div class=\"counter__item second__item\">
                            <div class=\"counter__item__text\">
                                <img src=\" {{ asset('img//icons/ci-2.png') }}\" alt=\"\">
                                <h2 class=\"counter_num\">1068</h2>
                                <p>Happy clients</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6\">
                        <div class=\"counter__item third__item\">
                            <div class=\"counter__item__text\">
                                <img src=\" {{ asset('img//icons/ci-3.png') }}\" alt=\"\">
                                <h2 class=\"counter_num\">230</h2>
                                <p>Perspective clients</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6 col-sm-6\">
                        <div class=\"counter__item four__item\">
                            <div class=\"counter__item__text\">
                                <img src=\" {{ asset('img//icons/ci-4.png') }}\" alt=\"\">
                                <h2 class=\"counter_num\">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Team Section Begin -->
    <section class=\"team spad set-bg\" data-setbg=\" {{ asset('img//team-bg.jpg') }}\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title team__title\">
                        <span>Nice to meet</span>
                        <h2>OUR Team</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 col-sm-6 p-0\">
                    <div class=\"team__item set-bg\" data-setbg=\" {{ asset('img//team/team-1.jpg') }}\">
                        <div class=\"team__item__text\">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class=\"team__item__social\">
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6 p-0\">
                    <div class=\"team__item team__item--second set-bg\" data-setbg=\" {{ asset('img//team/team-2.jpg') }}\">
                        <div class=\"team__item__text\">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class=\"team__item__social\">
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6 p-0\">
                    <div class=\"team__item team__item--third set-bg\" data-setbg=\" {{ asset('img//team/team-3.jpg') }}\">
                        <div class=\"team__item__text\">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class=\"team__item__social\">
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6 p-0\">
                    <div class=\"team__item team__item--four set-bg\" data-setbg=\" {{ asset('img//team/team-4.jpg') }}\">
                        <div class=\"team__item__text\">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class=\"team__item__social\">
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-12 p-0\">
                    <div class=\"team__btn\">
                        <a href=\"#\" class=\"primary-btn\">Meet Our Team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Latest Blog Section Begin -->
    <section class=\"latest spad\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"section-title center-title\">
                        <span>Our Blog</span>
                        <h2>Blog Update</h2>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"latest__slider owl-carousel\">
                    <div class=\"col-lg-4\">
                        <div class=\"blog__item latest__item\">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href=\"#\">Read more <span class=\"arrow_right\"></span></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"blog__item latest__item\">
                            <h4>Bumper Ads: How to Tell a Story in 6 Seconds</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href=\"#\">Read more <span class=\"arrow_right\"></span></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"blog__item latest__item\">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href=\"#\">Read more <span class=\"arrow_right\"></span></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"blog__item latest__item\">
                            <h4>Bumper Ads: How to Tell a Story in 6 Seconds</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href=\"#\">Read more <span class=\"arrow_right\"></span></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"blog__item latest__item\">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href=\"#\">Read more <span class=\"arrow_right\"></span></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"blog__item latest__item\">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href=\"#\">Read more <span class=\"arrow_right\"></span></a>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"blog__item latest__item\">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href=\"#\">Read more <span class=\"arrow_right\"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Call To Action Section Begin -->
    <section class=\"callto spad set-bg\" data-setbg=\" {{ asset('img//callto-bg.jpg') }}\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"callto__text\">
                        <h2>Fresh Ideas, Fresh Moments Giving Wings to your Stories.</h2>
                        <p>INC5000, Best places to work 2019</p>
                        <a href=\"#\">Start your stories</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
", "index/bodyIndex.html.twig", "C:\\Users\\Kazu\\Desktop\\StromZu\\templates\\index\\bodyIndex.html.twig");
    }
}
