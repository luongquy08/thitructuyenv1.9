<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-2 paddingtop-bottom">
                <a href="http://uet.vnu.edu.vn/" target="_blank"><img src="{!! asset('uet_user/images/logos/logo-dai-hoc-cong-nghe.jpg') !!}"
                                                                      class="img-responsive logo-footer img-circle"></a>
            </div>
            <div class="col-md-3  footerleft ">
                <h6 class="heading7">Location & Contacts</h6>
                <p><i class="fa fa-home"></i> Đại học Công nghệ - 144 Xuân Thủy, Cầu Giấy, Hà Nội </p>
                <p><i class="fa fa-phone"></i> Phone : 01678238831</p>
                <p><i class="fa fa-phone"></i> Phone : 01232081097</p>
                <p><a href="mailto:hotro.thitructuyen@gmail.com"><i class="fa fa-envelope"></i> E-mail: hotro.thitructuyen@gmail.com</a></p>
                <p><a href="mailto:contact.thitructuyen@gmail.com"><i class="fa fa-envelope"></i> E-mail: contact.thitructuyen@gmail.com</a></p>
            </div>
            <div class="col-md-4  paddingtop-bottom">
                <h6 class=" heading7">Discover</h6>
                <div class="post">
                    <p>Giáo dục là vũ khí mạnh nhất mà người ta có thể sử dụng để thay đổi cả thế giới.
                        <span>N.Mandela</span>
                    </p>
                    <p>Nhà trường chỉ cho chúng ta chiếc chìa khóa tri thức, học trong cuộc sống là công việc cả đời.
                        <span>Bill Gates</span>
                    </p>
                    <p>Nếu phiên bản đầu tiên của bạn không thành công, hãy đặt tên nó là phiên bản 1.0 </p>
                </div>
            </div>
            <div class="col-md-3 paddingtop-bottom">
                <h6 class="heading7">Newsletter</h6>
                <div class="row">
                    <ul class="social">
                        <ul class="list-inline">
                            <li><a href="#" title=""><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#" title=""><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#" title=""><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li><a href="#" title=""><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </ul>
                </div>
                <div>
                    <form class="form-group" method="post" action="{!! route('postFolow') !!}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <p>Nhập email của bạn tại đây, chúng tôi sẽ gửi mail cho bạn khi có thông tin hữu ích!</p>
                        <input type="email" class="form-control" name="txtEmailFolow" placeholder="Nhập email của bạn...">
                        <button class="btn btn-info btn-block">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <div class="container-fluid">
        <div class="row navbar navbar-inverse navbar-footer">
            <ul class="nav navbar-nav coppy col-sm-4 col-xs-12">
                <li><a href="{!! route('getHomePage') !!}">Trang Chủ</a></li>
                <li><a href="{!! route('getHomePage') !!}">Giới thiệu</a></li>
                <li><a href="{!! route('getHomePage') !!}">Hướng dẫn</a></li>
                <li><a href="" class="pages" data-toggle="modal"
                       data-target="#contact_form">Phản hồi</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>