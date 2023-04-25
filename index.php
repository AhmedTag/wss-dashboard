<!DOCTYPE html>
<html dir="rtl" lang="ar-EG">

<head>
    <?php
    include 'partial/meta.php';
    include 'partial/styles.php';
    ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="main__header">
                <?php
                include 'partial/header.php';
                ?>
            </div>
        </div>
        <div class="row">
            <div id="app">
                <?php
                include 'partial/sidemenu.php';
                ?>
                <div id="app__content">

                    <div class="row stat">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="box">
                                <label>طلبات اليوم</label>
                                <span>1</span>
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="box">
                                <label>أرباح اليوم</label>
                                <span>0</span>
                                <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="box">
                                <label>المستخدمين الجدد</label>
                                <span>1</span>
                                <i class="fa-solid fa-users"></i>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mt-4">
                            <div class="box">
                                <label>زيارات اليوم</label>
                                <span>0</span>
                                <i class="fa-solid fa-eye"></i>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-4">
                            <div class="box">
                                <label>الرسائل الجديدة</label>
                                <span>0</span>
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-4">
                            <div class="box">
                                <label>إجمالي المنتجات</label>
                                <span>2</span>
                                <i class="fa-solid fa-boxes-stacked"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row cards mt-4">
                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="box">
                                <div class="box__title">
                                    آخر 5 طلبات
                                </div>
                                <div class="box__body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 25px;">#</th>
                                                <th>بيانات الطلب</th>
                                                <th>الحالة</th>
                                                <th style="width: 125px;">إجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for ($i = 1; $i < 6; $i++) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td>
                                                        <span>Ahmed Tag Amer</span>
                                                        <div>
                                                            <span>عدد العناصر : 1</span>
                                                            <span>01/02/2023</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        مؤكد
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-info">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-success">
                                                            <i class="fas fa-check"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-danger">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-12 col-lg-6">
                            <div class="box">
                                <div class="box__title">
                                    المنتجات الـ 5 الأفضل أداء
                                </div>
                                <div class="box__body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 25px;">#</th>
                                                <th>المنتج</th>
                                                <th style="width: 60px;">إجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for ($j = 1; $j < 6; $j++) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $j?></td>
                                                    <td>
                                                        <span>إسم المنتج</span>
                                                        <div>
                                                            <span>التصنيف</span>
                                                            <span>590 مشاهدة</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-info">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-4 text-center">
                            <button class="btn btn-primary" gotoAction="create,version,0" title="إنشاء تحديث جديد">إرسال تحديث</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php
    include 'partial/scripts.php';
    include 'partial/footer.php';
    ?>
</body>

</html>