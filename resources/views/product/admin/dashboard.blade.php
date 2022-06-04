
    <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
<title>admin_economec</title>

</head>
<body>
<li class="nav-item"><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">المنتجات  </span>
                    <span
                        class="badge badge badge-warning  badge-pill float-right mr-2"></span>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('products.index')}}"> عرض المنتجات </a>
                    </li>
                    <br>
                    
                
                    <li class="active"><a class="menu-item" href="{{route('group_fs.index')}}"
                                          data-i18n="nav.dash.ecommerce">    الأقسام الأساسية</a>
                    </li>
                    <br>
                    <li class="active"><a class="menu-item" href="{{route('group_s.index')}}"
                                          data-i18n="nav.dash.ecommerce">  الأقسام الفرعية </a>
                    </li>
                    <br>
                    <li class="active"><a class="menu-item" href="{{route('admins.create')}}"
                                          data-i18n="nav.dash.ecommerce">  الإدارة </a>
                    </li>
                    <br>
                    <li class="active"><a class="menu-item" href="{{route('orders.index')}}"
                                          data-i18n="nav.dash.ecommerce">  الطلبات </a>
                    </li>

                    <br>
                    <li class="active"><a class="menu-item" href="{{route('getadminlogout')}}"
                                          data-i18n="nav.dash.ecommerce">  تسجيل الخروج </a>
                    </li>
                   
                </ul>

            </li>

</body>
</html>