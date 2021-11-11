@extends("layouts.master")

@section("title")
    Articles
@endsection

@section("content")

    <div class="page-content blog-list">
        <!-- HEADING PAGE-->
        <div class="heading-page heading-normal heading-project">
            <div class="container">
                <ul class="au-breadcrumb">
                    <li class="au-breadcrumb-item">
                        <i class="fa fa-home"></i>
                        <a href="/home">Home</a>
                    </li>
                    <li class="au-breadcrumb-item active">
                        <a href="/articles">Articles</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END HEADING PAGE-->
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <!-- BLOG LIST-->
                    <div class="blog-list-wrapper">
                        <div class="blog-item">
                            <div class="blog-image">
                                <img alt="Life Insurance Charges" class="img-fluid"
                                     src="{{asset('img/blogs/blog-1.jpg')}}"/>
                            </div>
                            <div class="blog-main">
                                <div class="blog-title">
                                    <a href="/article-detail">Life Insurance Charges</a>
                                </div>
                                <div class="blog-subtitle">
                                    <div class="blog-topic">
                                        <a href="#">Financial</a>
                                        <a href="#">Maketing</a>
                                    </div>
                                    <div class="blog-date">
                                        <span>March 22, 2021</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p>Nulla eleifend, sapien eget porttitor maximus, nisl ante convallis dolor, nec
                                        consequat felis ex a ex. Etiam vestibulum enim euismod dui vestibulum, vitae
                                        fringilla nibh consectetur. Integer at volutpat augue . Donec
                                        consectetur, est nec laoreet scelerisque, lacus nulla fermentum odio, ut
                                        accumsan
                                        enim ipsum a justo. Interdum et malesuada fames ac ante ipsum primis in
                                        faucibus.</p>
                                </div>
                                <div class="blog-link">
                                    <button class="btn bg-warning"><a href="/article-detail">Continue Reading</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-image">
                                <img alt="Is Your Home At Risk?" class="img-fluid"
                                     src="{{asset('img/blogs/blog-2.jpg')}}"/>
                            </div>
                            <div class="blog-main">
                                <div class="blog-title">
                                    <a href="/article-detail">Is Your Home At Risk?</a>
                                </div>
                                <div class="blog-subtitle">
                                    <div class="blog-topic">
                                        <a href="#">Financial</a>
                                        <a href="#">Maketing</a>
                                    </div>
                                    <div class="blog-date">
                                        <span>March 19, 2021</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p>Aliquam aliquet dignissim urna, at placerat neque. Aliquam posuere id eros ut
                                        semper.
                                        Nam mollis, odio eu consequat tincidunt, nulla augue faucibus tellus, id tempor
                                        lectus tortor eget est. Vivamus aliquet, felis quis
                                        laoreet lobortis, tortor purus ultricies enim, vel vestibulum turpis nisl vel
                                        risus.
                                        Donec vehicula dolor in interdum ultrices. Nulla congue nunc et magna mattis</p>
                                </div>
                                <div class="blog-link">
                                    <button class="btn bg-warning"><a href="/article-detail">Continue Reading</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-image">
                                <img alt="Learn about auto insurance companies" class="img-fluid"
                                     src="{{asset('img/blogs/blog-3.jpg')}}"/>
                            </div>
                            <div class="blog-main">
                                <div class="blog-title">
                                    <a href="/article-detail">Learn about auto insurance
                                        companies</a>
                                </div>
                                <div class="blog-subtitle">
                                    <div class="blog-topic">
                                        <a href="#">Retirement</a>
                                    </div>
                                    <div class="blog-date">
                                        <span>March 18, 2021</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p>Proin dapibus molestie eros porta porta. Aenean vitae orci at ante laoreet
                                        rhoncus a
                                        ut felis. Etiam urna nisi, vulputate aliquam rhoncus quis, pharetra et dui.
                                        Vivamus
                                        bibendum, nibh ac interdum efficitur, justo turpis
                                        rhoncus ante, eu euismod ante dui sit amet arcu. Curabitur sed nulla congue,
                                        bibendum arcu et, pretium magna. Vivamus a nulla elementum, malesuada nibh sit
                                        amet,
                                        efficitur metus</p>
                                </div>
                                <div class="blog-link">
                                    <button class="btn bg-warning"><a href="/article-detail">Continue Reading</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-image">
                                <img alt="How To Get A Lower Rate In Your Car Insurance" class="img-fluid"
                                     src="{{asset('img/blogs/blog-4.jpg')}}"/>
                            </div>
                            <div class="blog-main">
                                <div class="blog-title">
                                    <a href="/article-detail">How To Get A Lower Rate In Your
                                        Car Insurance</a>
                                </div>
                                <div class="blog-subtitle">
                                    <div class="blog-topic">
                                        <a href="#">Retirement</a>
                                    </div>
                                    <div class="blog-date">
                                        <span>March 12, 2021</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p>Pellentesque dapibus mollis tellus, non eleifend neque imperdiet ut. Curabitur
                                        hendrerit id elit ut condimentum. Phasellus venenatis sagittis molestie.
                                        Pellentesque diam ligula, rutrum ac ultricies vel, placerat vitae
                                        libero. Vestibulum sed tincidunt metus. Curabitur efficitur tortor nunc,
                                        tristique
                                        porttitor ex pretium ut. Duis vel vulputate sem, ac mollis massa. In felis
                                        felis,
                                        vestibulum at erat eu</p>
                                </div>
                                <div class="blog-link">
                                    <button class="btn bg-warning"><a href="/article-detail">Continue Reading</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-image">
                                <img alt="7 Habits Of Highly Effective Landlords" class="img-fluid"
                                     src="{{asset('img/blogs/blog-5.jpg')}}"/>
                            </div>
                            <div class="blog-main">
                                <div class="blog-title">
                                    <a href="/article-detail">7 Habits Of Highly Effective
                                        Landlords</a>
                                </div>
                                <div class="blog-subtitle">
                                    <div class="blog-topic">
                                        <a href="#">Tips</a>
                                    </div>
                                    <div class="blog-date">
                                        <span>March 05, 2021</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p>Integer lobortis leo tellus, non tristique elit auctor nec. Nulla ornare odio ex,
                                        at
                                        scelerisque tellus cursus eu. In luctus, ipsum placerat pellentesque ultrices,
                                        lectus mauris suscipit elit, et scelerisque massa nunc
                                        ac odio. Proin commodo orci lectus, vel faucibus risus pellentesque et. Cum
                                        sociis
                                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                </div>
                                <div class="blog-link">
                                    <button class="btn bg-warning"><a href="/article-detail">Continue Reading</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-ui text-center">
                            <ul class="pagination-list clearfix">
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li class="dot">
                                    <span>...</span>
                                </li>
                                <li>
                                    <a href="#">25</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END BLOG LIST-->
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
                                            <i class="fa fa-angle-right"></i>March 2021</a>
                                        <span class="post-total">9</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>Febuary 2021</a>
                                        <span class="post-total">39</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>January 2021</a>
                                        <span class="post-total">29</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>December 2020</a>
                                        <span class="post-total">35</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>November 2020</a>
                                        <span class="post-total">22</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>Octorber 2020</a>
                                        <span class="post-total">32</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>September 2020</a>
                                        <span class="post-total">21</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-angle-right"></i>August 2020</a>
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

@endsection
