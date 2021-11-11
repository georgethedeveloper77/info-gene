@extends("layouts.master")

@section('title')
    Article Detail
@endsection

@section('content')


    <div class="page-content blog-single">
        <!-- HEADING PAGE-->
        <div class="heading-page heading-normal heading-project">
            <div class="container">
                <ul class="au-breadcrumb">
                    <li class="au-breadcrumb-item">
                        <i class="fa fa-home"></i>
                        <a href="/home">Home</a>
                    </li>
                    <li class="au-breadcrumb-item">
                        <i aria-hidden="true" class="fa fa-file-text"></i>
                        <a href="resources/views/pages/articles.blade.phpde.php">Articles</a>
                    </li>
                    <li class="au-breadcrumb-item active">
                        <a href="/article-detail">Article Detail</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END HEADING PAGE-->
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <!-- BLOG DETAIL-->
                    <section class="blog-single">
                        <div class="post-title">
                            <h1>Learn about auto insurance companies</h1>
                        </div>
                        <div class="post-info">
                            <div class="post-topic">
                                <a href="#">Financial</a>,
                                <a href="#">Maketing</a>
                            </div>
                            <div class="post-date">
                                <span>March 22, 2017</span>
                            </div>
                        </div>
                        <div class="post-image">
                            <img alt="Blog Single" class="img-fluid" src="public/img/blogs/blog-detail-1.jpg"/>
                        </div>
                        <div class="post-paragraph">
                            <div class="post-heading">
                                <h3>Context of Business</h3>
                            </div>
                            <div class="post-content">
                                <p>
                                    Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit
                                    ornare
                                    vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus
                                    interdum
                                    urna at sapien varius elementum. Suspendisse ut mi felis et interdum libero
                                    lacinia vel. Aenean elementum odio ut lorem cursus, eu auctor magna pellentesque.
                                    Cras
                                    facilisis quam sed rhoncus dapibus. Quisque lorem enim, dictum at magna eu,
                                    hendrerit
                                    hendrerit arcu. Etiam vulputate ac tortor
                                    ac gravida. Proin accumsan placerat rutrum. Praesent ut eros ac nisi ultrices
                                    rhoncus et
                                    nec nunc
                                </p>
                                <p>
                                    Nulla fermentum eros vitae est finibus dapibus. Aliquam porta nulla a elit varius
                                    efficitur. In in magna sed turpis venenatis tristique eu eget neque. Duis
                                    condimentum
                                    libero ornare quam tincidunt interdum. Phasellus porttitor nisi ut lectus
                                    pellentesque,
                                    ut fringilla leo convallis.
                                </p>
                                <div class="post-quote">
                                    <blockquote>
                                        Wullam placerat vehicula pulvinar. Nam convallis euismod maximus. Suspendisse
                                        dignissim, ante at posuere cursus, diam nisl viverra felis, vel malesuada ex
                                        ante ac
                                        urna.
                                        <span class="quote-author">Cheryl Cruz</span>
                                    </blockquote>
                                </div>
                                <p>
                                    Duis gravida tempus imperdiet. Vivamus elit vel consequat elementum. Cras consequat
                                    lorem non orci sagittis, eget volutpat neque imperdiet. Nam auctor nisi vitae enim
                                    accumsan, ac dignissim tortor consequat.
                                </p>
                            </div>
                        </div>
                        <div class="post-lists">
                            <ul>
                                <li>
                                    <i class="fa fa-check-circle"></i>Vestibulum nibh purus, porta non molestie eget,
                                    laoreet orci.
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>Nam malesuada dolor eget aliquet rhoncus
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>Sed feugiat vestibulum mauris, at ultricies eros
                                    feugiat feugiat
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>Aliquam lacinia urna vulputate molestie volutpat
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>Aenean et orci eget neque faucibus iaculis feugiat
                                    sed
                                    sapien.
                                </li>
                            </ul>
                        </div>
                        <div class="post-footer">
                            <div class="post-tags">
                                <span>Tags:</span>
                                <a href="#">Insurance</a>,
                                <a href="#">Finance</a>,
                                <a href="#">Business</a>,
                                <a href="#">Car</a>
                            </div>
                            <div class="post-share">
                                <span>Share:</span>
                                <a href="#">Facebook</a>,
                                <a href="#">Twitter</a>,
                                <a href="#">Google+</a>
                            </div>
                        </div>
                        <div class="post-more-link">
                            <div class="post-prev">
                                <div class="link">
                                    <a href="#">
                                        <i class="fa fa-angle-double-left"></i>Preview</a>
                                </div>
                                <div class="title">
                                    <h4>Plans for growing businesses</h4>
                                </div>
                            </div>
                            <div class="post-next">
                                <div class="link">
                                    <a href="#">Next
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                                <div class="title">
                                    <h4>Help you planning for your retirement</h4>
                                </div>
                            </div>
                        </div>
                        <div class="post-comments post-paragraph">
                            <div class="post-heading">
                                <h3>Leave a Reply</h3>
                            </div>
                            <div class="post-content">
                                <p>You must be logged in to post a comment.</p>
                            </div>
                            <div class="post-comments-form">
                                <div class="post-comments-form-group">
                                    <div class="post-comments-form-item">
                                        <input class="au-form-control au-form-radius au-form-border"
                                               placeholder="Your Name"
                                               type="text"/>
                                    </div>
                                    <div class="post-comments-form-item">
                                        <input class="au-form-control au-form-radius au-form-border"
                                               placeholder="Your Email" type="text"/>
                                    </div>
                                </div>
                                <div class="post-comments-form-textarea">
                                    <textarea class="au-form-control au-form-radius au-form-border"
                                              placeholder="Your Comment"></textarea>
                                </div>
                                <div class="post-comments-submit">
                                    <button class="au-btn au-btn-sm">Comment</button>
                                </div>
                            </div>
                        </div>
                        <div class="post-comments-list post-paragraph">
                            <div class="post-heading">
                                <h3>3 Comments</h3>
                            </div>
                            <ul>
                                <li class="post-comments-has-reply">
                                    <div class="post-comments-item">
                                        <div class="post-comments-item-image">
                                            <img alt="user" class="img-fluid" src="public/img/avatar/user-1.jpg"/>
                                        </div>
                                        <div class="post-comments-item-main">
                                            <div class="content">
                                                <p>
                                                    Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus
                                                    sem
                                                    magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia
                                                    velit a eros porttitor, in interdum ante faucibus.
                                                </p>
                                            </div>
                                            <div class="sub-content">
                                                <span>Angela Allen - Feb 25, 2016</span>
                                                <a class="btn-reply" href="#post-comment">
                                                    <i class="fa fa-share"></i>Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="post-reply-lists">
                                        <li>
                                            <div class="post-comments-item">
                                                <div class="post-comments-item-image">
                                                    <img alt="user" class="img-fluid"
                                                         src="public/img/avatar/user-2.jpg"/>
                                                </div>
                                                <div class="post-comments-item-main">
                                                    <div class="content">
                                                        <p>
                                                            Nullam ipsum urna, dapibus sed justo sed, imperdiet
                                                            malesuada
                                                            commodo, eros eleifend laoreet fringilla,
                                                        </p>
                                                    </div>
                                                    <div class="sub-content">
                                                        <span>Timothy Guzman - Feb 25, 2016</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="post-comments-item">
                                        <div class="post-comments-item-image">
                                            <img alt="user" class="img-fluid" src="public/img/avatar/user-3.jpg"/>
                                        </div>
                                        <div class="post-comments-item-main">
                                            <div class="content">
                                                <p>
                                                    Donec sollicitudin nisi sed eros elementum, non vestibulum quam
                                                    convallis. Curabitur bibendum magna at nisl hendrerit, et tempus
                                                    metus
                                                    facilisis. Praesent augue tellus, euismod id posuere eget, gravida
                                                    id
                                                    dolor
                                                </p>
                                            </div>
                                            <div class="sub-content">
                                                <span>Julia Garza - Feb 25, 2016</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <!-- END BLOG DETAIL-->
                </div>
                <div class="col-2">
                    <!-- SIDEBAR, STYLE 3-->
                    <div class="sidebar sidebar-style-3">
                        <div class="sidebar-cate sidebar-element">
                            <div class="sidebar-heading">
                                <h3>Categories</h3>
                            </div>
                            <div class="sidebar-cate-list">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>Business Market</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>Socials Network</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>Team Work</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>Rebuild Services</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>Electrical System</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-archive sidebar-element">
                            <div class="sidebar-heading">
                                <h3>Archive</h3>
                            </div>
                            <div class="sidebar-archive-list">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>March 2017</a>
                                        <span class="post-total">9</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>Febuary 2017</a>
                                        <span class="post-total">39</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>January 2017</a>
                                        <span class="post-total">29</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>December 2016</a>
                                        <span class="post-total">35</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>November 2016</a>
                                        <span class="post-total">22</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>Octorber 2016</a>
                                        <span class="post-total">32</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>September 2016</a>
                                        <span class="post-total">21</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>August 2016</a>
                                        <span class="post-total">26</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END SIDEBAR, STYLE 3-->
                </div>
            </div>
        </div>
    </div>

@section('content')
