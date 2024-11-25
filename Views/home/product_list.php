<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Shop product list - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
bodyli{
            padding-top:20px;
background:#f1f2f7;
}

/*panel*/
.panel {
    border: none;
    box-shadow: none;
}

.panel-heading {
    border-color:#eff2f7 ;
    font-size: 16px;
    font-weight: 300;
}

.panel-title {
    color: #2A3542;
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 0;
    margin-top: 0;
    font-family: 'Open Sans', sans-serif;
}


/*product list*/

.prod-cat li a{
    border-bottom: 1px dashed #2f2929;
}

.prod-cat li a {
    color: #3b3b3b;
}

.prod-cat li ul {
    margin-left: 30px;
}

.prod-cat li ul li a{
    border-bottom:none;
}
.prod-cat li ul li a:hover,.prod-cat li ul li a:focus, .prod-cat li ul li.active a , .prod-cat li a:hover,.prod-cat li a:focus, .prod-cat li a.active{
    background: none;
    color: #ff7261;
}

.pro-lab{
    margin-right: 20px;
    font-weight: normal;
}

.pro-sort {
    padding-right: 20px;
    float: left;
}

.pro-page-list {
    margin: 5px 0 0 0;
}

.product-list img{
    width: 100%;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
}

.product-list .pro-img-box {
    position: relative;
}
.adtocart {
    background: #fc5959;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    color: #fff;
    display: inline-block;
    text-align: center;
    border: 3px solid #fff;
    left: 45%;
    bottom: -25px;
    position: absolute;
}

.adtocart i{
    color: #fff;
    font-size: 25px;
    line-height: 42px;
}

.pro-title {
    color: #5A5A5A;
    display: inline-block;
    margin-top: 20px;
    font-size: 16px;
}

.product-list .price {
    color:#fc5959 ;
    font-size: 15px;
}

.pro-img-details {
    margin-left: -15px;
}

.pro-img-details img {
    width: 100%;
}

.pro-d-title {
    font-size: 16px;
    margin-top: 0;
}



.pro-price, .amount-old {
    font-size: 18px;
    padding: 0 10px;
}

.amount-old {
    text-decoration: line-through;
}

.quantity {
    width: 120px;
}

.pro-img-list {
    margin: 10px 0 0 -15px;
    width: 100%;
    display: inline-block;
}

.pro-img-list a {
    float: left;
    margin-right: 10px;
    margin-bottom: 10px;
}

.pro-d-head {
    font-size: 18px;
    font-weight: 300;
}

.product-deatil h5 a span {
    color: #9aa7af; /* Màu chữ cho Category */
    display: block;
    font-size: 13px;
}
.panel-body {
    position: relative; /* Để điều chỉnh vị trí cho các phần tử con */
    padding-bottom: 40px; /* Tạo không gian cho nội dung phía dưới */
}
.pro-details {
    display: flex; /* Sử dụng Flexbox để xếp rating và price theo chiều ngang */
    justify-content: space-between; /* Đẩy rating sang trái và price sang phải */
    align-items: center; /* Căn giữa theo chiều dọc */
    position: absolute; /* Đặt cố định ở đáy của panel-body */
    bottom: 10px;
    left: 0;
    width: 100%; /* Đảm bảo chiếm toàn bộ chiều rộng container */
    padding: 0 15px;
    box-sizing: border-box; /* Đảm bảo padding không ảnh hưởng đến kích thước */
}
.rating label {
    margin-right: 5px; /* Khoảng cách giữa các sao */
}

.rating .fa {
    font-size: 18px; /* Kích thước của sao */
    color: #333; /* Mặc định sao không được chọn có màu #333 */
}

.rating .fa.text-primary {
    color: #FFD700; /* Màu vàng cho sao được chọn */
}

.rating .fa.text-muted {
    color: #333; /* Màu cho sao không được chọn, kể cả half */
}
.rating {
    display: flex;
    gap: 5px; /* Khoảng cách giữa các sao */
}

.star {
    position: relative;
    display: inline-block;
    width: 20px;
    height: 20px;
    background-color: #333; /* Mặc định là xám */
    clip-path: polygon(
        50% 0%, 61% 35%, 98% 35%, 
        68% 57%, 79% 91%, 50% 70%, 
        21% 91%, 32% 57%, 2% 35%, 39% 35%
    ); /* Hình ngôi sao */
}

.star.full {
    background-color: #FFD700; /* Màu vàng cho sao đầy */
}

.star.half {
    background: linear-gradient(to right, #FFD700 50%, #333 50%);
    /* Nửa vàng, nửa xám */
}

.star.empty {
    background-color: #333; /* Xám cho sao rỗng */
}

.category {
    display: block; /* Hiển thị trên dòng riêng */
    font-size: 13px; /* Kích thước nhỏ hơn */
    color: #9aa7af; /* Màu xám nhạt */
    margin-top: 5px; /* Khoảng cách từ tên sản phẩm */
    font-style: italic; /* Tùy chọn: làm chữ nghiêng */
}

    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="bootstrap3">
<div class="container bootdey" style="padding-top: 10px;">
    <div class="col-md-3">
        <section class="panel">
            <header class="panel-heading">
                Category
            </header>
            <div class="panel-body">
                <ul class="nav prod-cat">
                    <li>
                        <a href="#" class="active"><i class="fa fa-angle-right"></i> Dress</a>
                        <ul class="nav">
                            <li class="active"><a href="#">- Shirt</a></li>
                            <li><a href="#">- Pant</a></li>
                            <li><a href="#">- Shoes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Bags &amp; Purses</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Beauty</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Coat &amp; Jacket</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Jeans</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Jewellery</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Electronics</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Sports</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Technology</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Watches</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i> Accessories</a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="panel">
            <header class="panel-heading">
                Price Range
            </header>
            <div class="panel-body sliders">
                <div id="slider-range" class="slider"></div>
                <div class="slider-info">
                    <span id="slider-range-amount"></span>
                </div>
            </div>
        </section>
        <section class="panel">
            <header class="panel-heading">
                Filter
            </header>
            <div class="panel-body">
                <form role="form product-form">
                    <div class="form-group">
                        <label>Brand</label>
                        <select class="form-control hasCustomSelect" style="-webkit-appearance: menulist-button; width: 231px; position: absolute; opacity: 0; height: 34px; font-size: 12px;">
                            <option>Wallmart</option>
                            <option>Catseye</option>
                            <option>Moonsoon</option>
                            <option>Textmart</option>
                        </select>
                        <span class="customSelect form-control" style="display: inline-block;"><span class="customSelectInner" style="width: 209px; display: inline-block;">Wallmart</span></span>
                    </div>
                    <div class="form-group">
                        <label>Color</label>
                        <select class="form-control hasCustomSelect" style="-webkit-appearance: menulist-button; width: 231px; position: absolute; opacity: 0; height: 34px; font-size: 12px;">
                            <option>White</option>
                            <option>Black</option>
                            <option>Red</option>
                            <option>Green</option>
                        </select>
                        <span class="customSelect form-control" style="display: inline-block;"><span class="customSelectInner" style="width: 209px; display: inline-block;">White</span></span>
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <select class="form-control hasCustomSelect" style="-webkit-appearance: menulist-button; width: 231px; position: absolute; opacity: 0; height: 34px; font-size: 12px;">
                            <option>Small</option>
                            <option>Medium</option>
                            <option>Large</option>
                            <option>Extra Large</option>
                        </select>
                        <span class="customSelect form-control" style="display: inline-block;"><span class="customSelectInner" style="width: 209px; display: inline-block;">Small</span></span>
                    </div>
                    <button class="btn btn-primary" type="submit">Filter</button>
                </form>
            </div>
        </section>
        
    </div>
    <div class="col-md-9">

        <div class="row product-list">
            <div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="https://www.bootdey.com/image/250x220/FFB6C1/000000" alt="" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>
                
                    <div class="panel-body">
                        <h4 class="text-center">
                            <a href="#" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                            <span class="category">Women's Fashion</span>
                        </h4>
                        <div class="pro-details">
                            <div class="rating">
                                <span class="star full"></span>
                                <span class="star full"></span>
                                <span class="star full"></span>
                                <span class="star half"></span>
                                <span class="star empty"></span>
                            </div>
                            <p class="price">$300.00</p>
                        </div>
                    </div>
                </section>    
            </div><div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="https://www.bootdey.com/image/250x220/FFB6C1/000000" alt="" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>
                
                    <div class="panel-body">
                        <h4 class="text-center">
                            <a href="#" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                            <span class="category">Women's Fashion</span>
                        </h4>
                        <div class="pro-details">
                            <div class="rating">
                                <span class="star full"></span>
                                <span class="star full"></span>
                                <span class="star full"></span>
                                <span class="star half"></span>
                                <span class="star empty"></span>
                            </div>
                            <p class="price">$300.00</p>
                        </div>
                    </div>
                </section>    
            </div><div class="col-md-4">
                <section class="panel">
                    <div class="pro-img-box">
                        <img src="https://www.bootdey.com/image/250x220/FFB6C1/000000" alt="" />
                        <a href="#" class="adtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>
                
                    <div class="panel-body">
                        <h4 class="text-center">
                            <a href="#" class="pro-title">
                                Leopard Shirt Dress
                            </a>
                            <span class="category">Women's Fashion</span>
                        </h4>
                        <div class="pro-details">
                            <div class="rating">
                                <span class="star full"></span>
                                <span class="star full"></span>
                                <span class="star full"></span>
                                <span class="star half"></span>
                                <span class="star empty"></span>
                            </div>
                            <p class="price">$300.00</p>
                        </div>
                    </div>
                </section>    
            </div>
        </div>
        <section class="panel">
            <div class="panel-body">
                <div class="pull-right">
                    <ul class="pagination pagination-sm pro-page-list">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>