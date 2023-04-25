<div class="row">
    <div class="col-12">
        <h6 class="alert alert-info text-center">إختر ما تريد نسخة</h6>
        <ul class="zipzip">
            <li>
                <input type="checkbox" value="all" id="all" />
                <label for="all">نسخ الكل</label>
            </li>
            <li>
                <input type="checkbox" value="actions" id="actions" />
                <label for="actions">الأوامر actions</label>
            </li>
            <li>
                <input type="checkbox" value="components" id="components" />
                <label for="components">المكونات components</label>
                <ul>
                    <li>
                        <input type="checkbox" value="components_1" id="components_1" />
                        <label for="components_1">buttons</label>
                    </li>
                    <li>
                        <input type="checkbox" value="components_2" id="components_2" />
                        <label for="components_2">styles</label>
                    </li>
                    <li>
                        <input type="checkbox" value="components_3" id="components_3" />
                        <label for="components_3">accordions</label>
                    </li>
                    <li>
                        <input type="checkbox" value="components_4" id="components_4" />
                        <label for="components_4">tabs and pills</label>
                    </li>
                </ul>
            </li>
            <li>
                <input type="checkbox" value="images" id="images" />
                <label for="images">الصور images</label>
            </li>
            <li>
                <input type="checkbox" value="library" id="library" />
                <label for="library">المكتبات library</label>
                <ul>
                    <li>
                        <input type="checkbox" value="bootstrap" id="bootstrap" />
                        <label for="bootstrap">bootstrap</label>
                    </li>
                    <li>
                        <input type="checkbox" value="chosen" id="chosen" />
                        <label for="chosen">chosen</label>
                    </li>
                    <li>
                        <input type="checkbox" value="fontawesome" id="fontawesome" />
                        <label for="fontawesome">fontawesome</label>
                    </li>
                    <li>
                        <input type="checkbox" value="general" id="general" />
                        <label for="general">general</label>
                    </li>
                    <li>
                        <input type="checkbox" value="jquery" id="jquery" />
                        <label for="jquery">jquery</label>
                    </li>
                    <li>
                        <input type="checkbox" value="slick" id="slick" />
                        <label for="slick">slick</label>
                    </li>
                    <li>
                        <input type="checkbox" value="summernote" id="summernote" />
                        <label for="summernote">summernote</label>
                    </li>
                    <li>
                        <input type="checkbox" value="swiper" id="swiper" />
                        <label for="swiper">swiper</label>
                    </li>
                </ul>
            </li>
            <li>
                <input type="checkbox" value="pages" id="pages" />
                <label for="pages">الصفحات pages</label>
            </li>
            <li>
                <input type="checkbox" value="partial" id="partial" />
                <label for="partial">الصفحات الفرعية partial</label>
                <ul>
                    <li>
                        <input type="checkbox" value="partial_1" id="partial_1" />
                        <label for="partial_1">الهيدر</label>
                    </li>
                    <li>
                        <input type="checkbox" value="partial_2" id="partial_2" />
                        <label for="partial_2">الفوتر</label>
                    </li>
                    <li>
                        <input type="checkbox" value="partial_3" id="partial_3" />
                        <label for="partial_3">القائمة الجانبية</label>
                    </li>
                    <li>
                        <input type="checkbox" value="partial_4" id="partial_4" />
                        <label for="partial_4">ميتا</label>
                    </li>
                    <li>
                        <input type="checkbox" value="partial_5" id="partial_5" />
                        <label for="partial_5">السكربتات</label>
                    </li>
                    <li>
                        <input type="checkbox" value="partial_6" id="partial_6" />
                        <label for="partial_6">الستايلات</label>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="col-12 mt-3 text-center">
        <hr />
        <form method="post" action="./actions/create/engine.php">
            <input type="submit" class="btn btn-primary" name="create_version" value="إنشاء النسخة" />
        </form>
    </div>
</div>

<script>
    $("input#all").click(function() {
        if ($(this).is(":checked")) {
            $(`.zipzip input[type="checkbox"]`).attr("checked", true);
        } else {
            $(`.zipzip input[type="checkbox"]`).removeAttr("checked");
        }
    });
</script>