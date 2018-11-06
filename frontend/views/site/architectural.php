<?php
/**
 * Created by PhpStorm.
 * Date: 10/29/2018
 * Time: 9:53 AM
 */

use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use common\models\Province;
use common\models\District;
use common\models\Commune;

?>

<script src="/theme/js/jquery-3.3.1.min.js"></script>
<section>
    <div class="part-01-banner-top">
        <div class="container">
            <div class="pull-right col-md-4">
                <div class="bg-black">
                    <h1 class="text-center">30 GIÂY ĐỂ TRỞ THÀNH <br> KIẾN TRÚC SƯ THÔNG QUA<br>3 BƯỚC ĐƠN GIẢN</h1>
                    <div class="div-step">
                        <div class="div-step-00"><b>1</b>
                            <span class="fa fa-circle"></span>
                            <i>
                                Điền thông tin của bạn
                            </i>
                        </div>
                        <div class="div-step-00">
                            <b>
                                2
                            </b>
                            <span class="fa fa-circle"></span>
                            <i>
                                Up 1 dự án của chính bạn thiết kế
                            </i>
                        </div>
                        <div class="div-step-00">
                            <b>
                                3
                            </b>
                            <span class="fa fa-circle"></span>
                            <i>
                                Xác nhận
                            </i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="frm-step">
            <div class="col-md-12">
                <div class="menu-step">
                    <div class="col-xs-4 menu-step-00 active">
                        <a href="javascript:">
                            1. ĐĂNG KÝ THÔNG TIN CÁ NHÂN
                            <span></span>
                        </a>
                    </div>
                    <div class="col-xs-4 menu-step-00">
                        <a href="javascript:">
                            2. UPLOAD 1 DỰ ÁN MÀ BẠN THIẾT KẾ
                            <span></span>
                        </a>
                    </div>
                    <div class="col-xs-4 menu-step-00">
                        <a href="javascript:">
                            3. XÁC NHẬN ĐIỀU KHOẢN
                        </a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-6 col-md-offset-3">
                <div id="p0" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="1000">
                    <?php $form = ActiveForm::begin(); ?>
                    <form id="thong-tin-tai-khoan-form" class="form-horizontal"
                          data-pjax="1">
                        <input type="hidden" name="_csrf-frontend"
                               value="GfRos40lEuFXXqD4TdTy4jMdmlg-07Gj64jzBXNTZQtPowSH6hx3lzUn1q14oJ21X379Cn-45eq8_KNsP2EAZg==">
                        <div class="form-group field-dangkiktsstep01-nick_name required">
                            <label class="control-label col-sm-4 col-md-4 col-lg-4" for="dangkiktsstep01-nick_name">
                                Tên đăng nhập:
                            </label>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'username')->textInput([
                                    'disabled' => 'disabled',
                                    'class' => 'form-control'
                                ])->label(false) ?>
                                <p class="help-block help-block-error "></p>
                            </div>
                        </div>
                        <div class="form-group field-dangkiktsstep01-last_name required">
                            <label class="control-label col-sm-4 col-md-4 col-lg-4" for="dangkiktsstep01-last_name">
                                Tên hiển thị:
                            </label>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?= $form->field($model, 'full_name')->textInput(['class' => 'form-control'])->label(false) ?>
                                </div>
                                <p class="help-block help-block-error "></p>
                            </div>

                        </div>

                        <div class="form-group field-dangkiktsstep01-phone required">
                            <label class="control-label col-sm-4 col-md-4 col-lg-4" for="dangkiktsstep01-phone">
                                Điện thoại
                            </label>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'phone')->textInput(['class' => 'form-control'])->label(false) ?>
                                <p class="help-block help-block-error "></p>
                            </div>

                        </div>
                        <div class="form-group field-dangkiktsstep01-phone required">
                            <label class="control-label col-sm-4 col-md-4 col-lg-4" for="dangkiktsstep01-phone">
                                Email
                            </label>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'email')->textInput(['class' => 'form-control'])->label(false) ?>
                                <p class="help-block help-block-error "></p>
                            </div>

                        </div>
                        <div class="form-group field-dangkiktsstep01-sex">
                            <label class="control-label col-sm-4 col-md-4 col-lg-4">Giới tính</label>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'gender')->textInput(
                                    ['class' => 'hidden', 'id' => 'gender']
                                )->label(false) ?>
                                <div id="gender-radio">
                                    <label class="radio-inline">
                                        <input type="radio" name="sex"
                                               value="Nam">
                                        Nam
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="sex"
                                               value="Nữ" checked="">
                                        Nữ
                                    </label>
                                </div>
                                <p class="help-block help-block-error "></p>
                            </div>
                        </div>
                        <div class="form-group field-cat1-id required">
                            <label class="control-label col-sm-4 col-md-4 col-lg-4" for="cat1-id">
                                Chọn tỉnh/Thành phố
                            </label>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'province_id')->dropDownList(
                                    ArrayHelper::map(Province::find()->all(), 'id', 'ten'),
                                    [
                                        'prompt' => '- ' . Yii::t('app', 'Chọn tỉnh') . ' -',
                                        'onchange' => '$.post( "' . Yii::$app->urlManager->createUrl('admin/ajax/get-district-by-province-id?province_id=') . '"+$(this).val(), function( data ) {
                                            $("select#district" ).html(data);
                                        });',
                                        'id' => 'province',
                                        'class' => 'form-control js-example-basic-single',
                                    ], [
                                        'onchange' => 'getThongTinMaps(1)',
                                    ]
                                )->label(false) ?>
                                <p class="help-block help-block-error "></p>
                            </div>
                        </div>
                        <input type="hidden" id="input-type-1" name="input-type-1">
                        <input type="hidden"
                               id="input-type-2"
                               name="input-type-2"
                               value="Additional value 2">
                        <input type="hidden" id="input-type-lat" name="input-type-lat" value="14.058324">
                        <input type="hidden" id="input-type-lng" name="input-type-lng" value="108.277199">
                        <div class="form-group field-subcat1-id required">
                            <label class="control-label col-sm-4 col-md-4 col-lg-4" for="subcat1-id">
                                Chọn quận/huyện
                            </label>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'district_id')->dropDownList(
                                    ArrayHelper::map(District::find()->where(['=', 'province_id', $model->province_id])->all(), 'id', 'ten'),
                                    [
                                        'prompt' => Yii::t('app', '--Chọn huyện--'),
                                        'onchange' => '$.post( "' . Yii::$app->urlManager->createUrl('admin/ajax/get-commune-by-district-id?district_id=') . '"+$(this).val(), function( data ) {
                                            $("select#commune" ).html(data);
                                        });',
                                        'id' => 'district',
                                    ], ['onchange' => 'getThongTinMaps(2)',])->label(false) ?>
                                <p class="help-block help-block-error "></p>
                            </div>

                        </div>
                        <div class="form-group field-subcat2-id">
                            <label class="control-label col-sm-4 col-md-4 col-lg-4" for="subcat2-id">Phường/xã</label>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'commune_id')->dropDownList(
                                    ArrayHelper::map(Commune::find()->where(['=', 'district_id', $model->district_id])->all(), 'id', 'ten'),
                                    [
                                        'prompt' => Yii::t('app', '--Chọn xã--'),
                                        'id' => 'commune',
                                        'onchange' => 'getThongTinMaps(3)',
                                    ])->label(false) ?>
                                <p class="help-block help-block-error "></p>
                            </div>

                        </div>
                        <div class="form-group field-subcat3-id">
                            <label class="control-label col-sm-4 col-md-4 col-lg-4" for="subcat3-id">Địa chỉ</label>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'address')->textInput(['class' => 'form-control', 'onchange' => 'getThongTinMaps(3)'])->label(false) ?>
                                <p class="help-block help-block-error "></p>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <div id="mapinfo_kts_p"
                             style="min-height: 300px; margin-bottom: 20px; position: relative; overflow: hidden;">
                            <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                <div class="gm-style"
                                     style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                    <div tabindex="0"
                                         style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                        <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                    <div style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -216, -177);">
                                                        <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                        <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                            <div style="width: 256px; height: 256px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;">
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 30;">
                                                    <div style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -216, -177);">
                                                        <div style="width: 256px; height: 256px; position: absolute; left: 256px; top: 256px;"></div>
                                                        <div style="width: 256px; height: 256px; position: absolute; left: 0px; top: 256px;"></div>
                                                        <div style="width: 256px; height: 256px; position: absolute; left: 0px; top: 0px;"></div>
                                                        <div style="width: 256px; height: 256px; position: absolute; left: 256px; top: 0px;"></div>
                                                        <div style="width: 256px; height: 256px; position: absolute; left: 512px; top: 0px;"></div>
                                                        <div style="width: 256px; height: 256px; position: absolute; left: 512px; top: 256px;"></div>
                                                        <div style="width: 256px; height: 256px; position: absolute; left: -256px; top: 256px;"></div>
                                                        <div style="width: 256px; height: 256px; position: absolute; left: -256px; top: 0px;"></div>
                                                        <div style="width: 256px; height: 256px; position: absolute; left: 0px; top: -256px;"></div>
                                                        <div style="width: 256px; height: 256px; position: absolute; left: 256px; top: -256px;"></div>
                                                        <div style="width: 256px; height: 256px; position: absolute; left: 512px; top: -256px;"></div>
                                                        <div style="width: 256px; height: 256px; position: absolute; left: -256px; top: -256px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                    <div style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -216, -177);">
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 0px;"></div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 256px;"></div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;"></div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;"></div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: -256px;"></div>
                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;"></div>
                                                    </div>
                                                </div>
                                                <div style="width: 27px; height: 43px; overflow: hidden; position: absolute; left: -21px; top: -48px; z-index: -5;">
                                                    <img alt=""
                                                         src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png"
                                                         draggable="false"
                                                         style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; opacity: 1;">
                                                </div>
                                            </div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                <div style="position: absolute; z-index: 986; transform: matrix(1, 0, 0, 1, -216, -177);">
                                                    <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation"
                                                             src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i13120!3i7546!4i256!2m3!1e0!2sm!3i441145208!3m14!2svi-VN!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmd8cC5jOiNmZmY1ZjVmNSxzLmU6bC5pfHAudjpvZmYscy5lOmwudC5mfHAuYzojZmY2MTYxNjEscy5lOmwudC5zfHAuYzojZmZmNWY1ZjUscy50OjF8cy5lOmd8cC52Om9mZixzLnQ6MjF8cy5lOmwudC5mfHAuYzojZmZiZGJkYmQscy50OjJ8cC52Om9mZixzLnQ6MnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDoyfHMuZTpsLnQuZnxwLmM6I2ZmNzU3NTc1LHMudDo0MHxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo0MHxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6M3xzLmU6Z3xwLmM6I2ZmZmZmZmZmLHMudDozfHMuZTpsLml8cC52Om9mZixzLnQ6NTB8cy5lOmwudC5mfHAuYzojZmY3NTc1NzUscy50OjQ5fHMuZTpnfHAuYzojZmZkYWRhZGEscy50OjQ5fHMuZTpsLnQuZnxwLmM6I2ZmNjE2MTYxLHMudDo1MXxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6NHxwLnY6b2ZmLHMudDo2NXxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo2NnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDo2fHMuZTpnfHAuYzojZmZhYWRhZmYscy50OjZ8cy5lOmwudC5mfHAuYzojZmZhYWRhZmY!4e0!23i1301875&amp;key=AIzaSyD_FzZofFTP3vNGYR220_oGq9-mixLk4N8&amp;token=34538"
                                                             style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation"
                                                             src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i13119!3i7546!4i256!2m3!1e0!2sm!3i441145208!3m14!2svi-VN!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmd8cC5jOiNmZmY1ZjVmNSxzLmU6bC5pfHAudjpvZmYscy5lOmwudC5mfHAuYzojZmY2MTYxNjEscy5lOmwudC5zfHAuYzojZmZmNWY1ZjUscy50OjF8cy5lOmd8cC52Om9mZixzLnQ6MjF8cy5lOmwudC5mfHAuYzojZmZiZGJkYmQscy50OjJ8cC52Om9mZixzLnQ6MnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDoyfHMuZTpsLnQuZnxwLmM6I2ZmNzU3NTc1LHMudDo0MHxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo0MHxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6M3xzLmU6Z3xwLmM6I2ZmZmZmZmZmLHMudDozfHMuZTpsLml8cC52Om9mZixzLnQ6NTB8cy5lOmwudC5mfHAuYzojZmY3NTc1NzUscy50OjQ5fHMuZTpnfHAuYzojZmZkYWRhZGEscy50OjQ5fHMuZTpsLnQuZnxwLmM6I2ZmNjE2MTYxLHMudDo1MXxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6NHxwLnY6b2ZmLHMudDo2NXxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo2NnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDo2fHMuZTpnfHAuYzojZmZhYWRhZmYscy50OjZ8cy5lOmwudC5mfHAuYzojZmZhYWRhZmY!4e0!23i1301875&amp;key=AIzaSyD_FzZofFTP3vNGYR220_oGq9-mixLk4N8&amp;token=118182"
                                                             style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation"
                                                             src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i13119!3i7545!4i256!2m3!1e0!2sm!3i441145208!3m14!2svi-VN!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmd8cC5jOiNmZmY1ZjVmNSxzLmU6bC5pfHAudjpvZmYscy5lOmwudC5mfHAuYzojZmY2MTYxNjEscy5lOmwudC5zfHAuYzojZmZmNWY1ZjUscy50OjF8cy5lOmd8cC52Om9mZixzLnQ6MjF8cy5lOmwudC5mfHAuYzojZmZiZGJkYmQscy50OjJ8cC52Om9mZixzLnQ6MnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDoyfHMuZTpsLnQuZnxwLmM6I2ZmNzU3NTc1LHMudDo0MHxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo0MHxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6M3xzLmU6Z3xwLmM6I2ZmZmZmZmZmLHMudDozfHMuZTpsLml8cC52Om9mZixzLnQ6NTB8cy5lOmwudC5mfHAuYzojZmY3NTc1NzUscy50OjQ5fHMuZTpnfHAuYzojZmZkYWRhZGEscy50OjQ5fHMuZTpsLnQuZnxwLmM6I2ZmNjE2MTYxLHMudDo1MXxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6NHxwLnY6b2ZmLHMudDo2NXxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo2NnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDo2fHMuZTpnfHAuYzojZmZhYWRhZmYscy50OjZ8cy5lOmwudC5mfHAuYzojZmZhYWRhZmY!4e0!23i1301875&amp;key=AIzaSyD_FzZofFTP3vNGYR220_oGq9-mixLk4N8&amp;token=71602"
                                                             style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation"
                                                             src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i13120!3i7545!4i256!2m3!1e0!2sm!3i441145208!3m14!2svi-VN!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmd8cC5jOiNmZmY1ZjVmNSxzLmU6bC5pfHAudjpvZmYscy5lOmwudC5mfHAuYzojZmY2MTYxNjEscy5lOmwudC5zfHAuYzojZmZmNWY1ZjUscy50OjF8cy5lOmd8cC52Om9mZixzLnQ6MjF8cy5lOmwudC5mfHAuYzojZmZiZGJkYmQscy50OjJ8cC52Om9mZixzLnQ6MnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDoyfHMuZTpsLnQuZnxwLmM6I2ZmNzU3NTc1LHMudDo0MHxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo0MHxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6M3xzLmU6Z3xwLmM6I2ZmZmZmZmZmLHMudDozfHMuZTpsLml8cC52Om9mZixzLnQ6NTB8cy5lOmwudC5mfHAuYzojZmY3NTc1NzUscy50OjQ5fHMuZTpnfHAuYzojZmZkYWRhZGEscy50OjQ5fHMuZTpsLnQuZnxwLmM6I2ZmNjE2MTYxLHMudDo1MXxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6NHxwLnY6b2ZmLHMudDo2NXxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo2NnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDo2fHMuZTpnfHAuYzojZmZhYWRhZmYscy50OjZ8cy5lOmwudC5mfHAuYzojZmZhYWRhZmY!4e0!23i1301875&amp;key=AIzaSyD_FzZofFTP3vNGYR220_oGq9-mixLk4N8&amp;token=119029"
                                                             style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation"
                                                             src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i13121!3i7545!4i256!2m3!1e0!2sm!3i441145148!3m14!2svi-VN!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmd8cC5jOiNmZmY1ZjVmNSxzLmU6bC5pfHAudjpvZmYscy5lOmwudC5mfHAuYzojZmY2MTYxNjEscy5lOmwudC5zfHAuYzojZmZmNWY1ZjUscy50OjF8cy5lOmd8cC52Om9mZixzLnQ6MjF8cy5lOmwudC5mfHAuYzojZmZiZGJkYmQscy50OjJ8cC52Om9mZixzLnQ6MnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDoyfHMuZTpsLnQuZnxwLmM6I2ZmNzU3NTc1LHMudDo0MHxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo0MHxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6M3xzLmU6Z3xwLmM6I2ZmZmZmZmZmLHMudDozfHMuZTpsLml8cC52Om9mZixzLnQ6NTB8cy5lOmwudC5mfHAuYzojZmY3NTc1NzUscy50OjQ5fHMuZTpnfHAuYzojZmZkYWRhZGEscy50OjQ5fHMuZTpsLnQuZnxwLmM6I2ZmNjE2MTYxLHMudDo1MXxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6NHxwLnY6b2ZmLHMudDo2NXxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo2NnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDo2fHMuZTpnfHAuYzojZmZhYWRhZmYscy50OjZ8cy5lOmwudC5mfHAuYzojZmZhYWRhZmY!4e0!23i1301875&amp;key=AIzaSyD_FzZofFTP3vNGYR220_oGq9-mixLk4N8&amp;token=123117"
                                                             style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation"
                                                             src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i13121!3i7546!4i256!2m3!1e0!2sm!3i441145148!3m14!2svi-VN!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmd8cC5jOiNmZmY1ZjVmNSxzLmU6bC5pfHAudjpvZmYscy5lOmwudC5mfHAuYzojZmY2MTYxNjEscy5lOmwudC5zfHAuYzojZmZmNWY1ZjUscy50OjF8cy5lOmd8cC52Om9mZixzLnQ6MjF8cy5lOmwudC5mfHAuYzojZmZiZGJkYmQscy50OjJ8cC52Om9mZixzLnQ6MnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDoyfHMuZTpsLnQuZnxwLmM6I2ZmNzU3NTc1LHMudDo0MHxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo0MHxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6M3xzLmU6Z3xwLmM6I2ZmZmZmZmZmLHMudDozfHMuZTpsLml8cC52Om9mZixzLnQ6NTB8cy5lOmwudC5mfHAuYzojZmY3NTc1NzUscy50OjQ5fHMuZTpnfHAuYzojZmZkYWRhZGEscy50OjQ5fHMuZTpsLnQuZnxwLmM6I2ZmNjE2MTYxLHMudDo1MXxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6NHxwLnY6b2ZmLHMudDo2NXxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo2NnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDo2fHMuZTpnfHAuYzojZmZhYWRhZmYscy50OjZ8cy5lOmwudC5mfHAuYzojZmZhYWRhZmY!4e0!23i1301875&amp;key=AIzaSyD_FzZofFTP3vNGYR220_oGq9-mixLk4N8&amp;token=38626"
                                                             style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation"
                                                             src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i13118!3i7546!4i256!2m3!1e0!2sm!3i441145208!3m14!2svi-VN!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmd8cC5jOiNmZmY1ZjVmNSxzLmU6bC5pfHAudjpvZmYscy5lOmwudC5mfHAuYzojZmY2MTYxNjEscy5lOmwudC5zfHAuYzojZmZmNWY1ZjUscy50OjF8cy5lOmd8cC52Om9mZixzLnQ6MjF8cy5lOmwudC5mfHAuYzojZmZiZGJkYmQscy50OjJ8cC52Om9mZixzLnQ6MnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDoyfHMuZTpsLnQuZnxwLmM6I2ZmNzU3NTc1LHMudDo0MHxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo0MHxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6M3xzLmU6Z3xwLmM6I2ZmZmZmZmZmLHMudDozfHMuZTpsLml8cC52Om9mZixzLnQ6NTB8cy5lOmwudC5mfHAuYzojZmY3NTc1NzUscy50OjQ5fHMuZTpnfHAuYzojZmZkYWRhZGEscy50OjQ5fHMuZTpsLnQuZnxwLmM6I2ZmNjE2MTYxLHMudDo1MXxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6NHxwLnY6b2ZmLHMudDo2NXxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo2NnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDo2fHMuZTpnfHAuYzojZmZhYWRhZmYscy50OjZ8cy5lOmwudC5mfHAuYzojZmZhYWRhZmY!4e0!23i1301875&amp;key=AIzaSyD_FzZofFTP3vNGYR220_oGq9-mixLk4N8&amp;token=102685"
                                                             style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation"
                                                             src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i13118!3i7545!4i256!2m3!1e0!2sm!3i441145208!3m14!2svi-VN!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmd8cC5jOiNmZmY1ZjVmNSxzLmU6bC5pfHAudjpvZmYscy5lOmwudC5mfHAuYzojZmY2MTYxNjEscy5lOmwudC5zfHAuYzojZmZmNWY1ZjUscy50OjF8cy5lOmd8cC52Om9mZixzLnQ6MjF8cy5lOmwudC5mfHAuYzojZmZiZGJkYmQscy50OjJ8cC52Om9mZixzLnQ6MnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDoyfHMuZTpsLnQuZnxwLmM6I2ZmNzU3NTc1LHMudDo0MHxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo0MHxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6M3xzLmU6Z3xwLmM6I2ZmZmZmZmZmLHMudDozfHMuZTpsLml8cC52Om9mZixzLnQ6NTB8cy5lOmwudC5mfHAuYzojZmY3NTc1NzUscy50OjQ5fHMuZTpnfHAuYzojZmZkYWRhZGEscy50OjQ5fHMuZTpsLnQuZnxwLmM6I2ZmNjE2MTYxLHMudDo1MXxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6NHxwLnY6b2ZmLHMudDo2NXxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo2NnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDo2fHMuZTpnfHAuYzojZmZhYWRhZmYscy50OjZ8cy5lOmwudC5mfHAuYzojZmZhYWRhZmY!4e0!23i1301875&amp;key=AIzaSyD_FzZofFTP3vNGYR220_oGq9-mixLk4N8&amp;token=56105"
                                                             style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation"
                                                             src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i13119!3i7544!4i256!2m3!1e0!2sm!3i441145208!3m14!2svi-VN!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmd8cC5jOiNmZmY1ZjVmNSxzLmU6bC5pfHAudjpvZmYscy5lOmwudC5mfHAuYzojZmY2MTYxNjEscy5lOmwudC5zfHAuYzojZmZmNWY1ZjUscy50OjF8cy5lOmd8cC52Om9mZixzLnQ6MjF8cy5lOmwudC5mfHAuYzojZmZiZGJkYmQscy50OjJ8cC52Om9mZixzLnQ6MnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDoyfHMuZTpsLnQuZnxwLmM6I2ZmNzU3NTc1LHMudDo0MHxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo0MHxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6M3xzLmU6Z3xwLmM6I2ZmZmZmZmZmLHMudDozfHMuZTpsLml8cC52Om9mZixzLnQ6NTB8cy5lOmwudC5mfHAuYzojZmY3NTc1NzUscy50OjQ5fHMuZTpnfHAuYzojZmZkYWRhZGEscy50OjQ5fHMuZTpsLnQuZnxwLmM6I2ZmNjE2MTYxLHMudDo1MXxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6NHxwLnY6b2ZmLHMudDo2NXxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo2NnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDo2fHMuZTpnfHAuYzojZmZhYWRhZmYscy50OjZ8cy5lOmwudC5mfHAuYzojZmZhYWRhZmY!4e0!23i1301875&amp;key=AIzaSyD_FzZofFTP3vNGYR220_oGq9-mixLk4N8&amp;token=25022"
                                                             style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation"
                                                             src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i13121!3i7544!4i256!2m3!1e0!2sm!3i441145148!3m14!2svi-VN!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmd8cC5jOiNmZmY1ZjVmNSxzLmU6bC5pfHAudjpvZmYscy5lOmwudC5mfHAuYzojZmY2MTYxNjEscy5lOmwudC5zfHAuYzojZmZmNWY1ZjUscy50OjF8cy5lOmd8cC52Om9mZixzLnQ6MjF8cy5lOmwudC5mfHAuYzojZmZiZGJkYmQscy50OjJ8cC52Om9mZixzLnQ6MnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDoyfHMuZTpsLnQuZnxwLmM6I2ZmNzU3NTc1LHMudDo0MHxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo0MHxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6M3xzLmU6Z3xwLmM6I2ZmZmZmZmZmLHMudDozfHMuZTpsLml8cC52Om9mZixzLnQ6NTB8cy5lOmwudC5mfHAuYzojZmY3NTc1NzUscy50OjQ5fHMuZTpnfHAuYzojZmZkYWRhZGEscy50OjQ5fHMuZTpsLnQuZnxwLmM6I2ZmNjE2MTYxLHMudDo1MXxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6NHxwLnY6b2ZmLHMudDo2NXxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo2NnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDo2fHMuZTpnfHAuYzojZmZhYWRhZmYscy50OjZ8cy5lOmwudC5mfHAuYzojZmZhYWRhZmY!4e0!23i1301875&amp;key=AIzaSyD_FzZofFTP3vNGYR220_oGq9-mixLk4N8&amp;token=76537"
                                                             style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation"
                                                             src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i13118!3i7544!4i256!2m3!1e0!2sm!3i441145208!3m14!2svi-VN!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmd8cC5jOiNmZmY1ZjVmNSxzLmU6bC5pfHAudjpvZmYscy5lOmwudC5mfHAuYzojZmY2MTYxNjEscy5lOmwudC5zfHAuYzojZmZmNWY1ZjUscy50OjF8cy5lOmd8cC52Om9mZixzLnQ6MjF8cy5lOmwudC5mfHAuYzojZmZiZGJkYmQscy50OjJ8cC52Om9mZixzLnQ6MnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDoyfHMuZTpsLnQuZnxwLmM6I2ZmNzU3NTc1LHMudDo0MHxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo0MHxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6M3xzLmU6Z3xwLmM6I2ZmZmZmZmZmLHMudDozfHMuZTpsLml8cC52Om9mZixzLnQ6NTB8cy5lOmwudC5mfHAuYzojZmY3NTc1NzUscy50OjQ5fHMuZTpnfHAuYzojZmZkYWRhZGEscy50OjQ5fHMuZTpsLnQuZnxwLmM6I2ZmNjE2MTYxLHMudDo1MXxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6NHxwLnY6b2ZmLHMudDo2NXxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo2NnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDo2fHMuZTpnfHAuYzojZmZhYWRhZmYscy50OjZ8cy5lOmwudC5mfHAuYzojZmZhYWRhZmY!4e0!23i1301875&amp;key=AIzaSyD_FzZofFTP3vNGYR220_oGq9-mixLk4N8&amp;token=9525"
                                                             style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                    <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                        <img draggable="false" alt="" role="presentation"
                                                             src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i13120!3i7544!4i256!2m3!1e0!2sm!3i441145208!3m14!2svi-VN!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy5lOmd8cC5jOiNmZmY1ZjVmNSxzLmU6bC5pfHAudjpvZmYscy5lOmwudC5mfHAuYzojZmY2MTYxNjEscy5lOmwudC5zfHAuYzojZmZmNWY1ZjUscy50OjF8cy5lOmd8cC52Om9mZixzLnQ6MjF8cy5lOmwudC5mfHAuYzojZmZiZGJkYmQscy50OjJ8cC52Om9mZixzLnQ6MnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDoyfHMuZTpsLnQuZnxwLmM6I2ZmNzU3NTc1LHMudDo0MHxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo0MHxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6M3xzLmU6Z3xwLmM6I2ZmZmZmZmZmLHMudDozfHMuZTpsLml8cC52Om9mZixzLnQ6NTB8cy5lOmwudC5mfHAuYzojZmY3NTc1NzUscy50OjQ5fHMuZTpnfHAuYzojZmZkYWRhZGEscy50OjQ5fHMuZTpsLnQuZnxwLmM6I2ZmNjE2MTYxLHMudDo1MXxzLmU6bC50LmZ8cC5jOiNmZjllOWU5ZSxzLnQ6NHxwLnY6b2ZmLHMudDo2NXxzLmU6Z3xwLmM6I2ZmZTVlNWU1LHMudDo2NnxzLmU6Z3xwLmM6I2ZmZWVlZWVlLHMudDo2fHMuZTpnfHAuYzojZmZhYWRhZmYscy50OjZ8cy5lOmwudC5mfHAuYzojZmZhYWRhZmY!4e0!23i1301875&amp;key=AIzaSyD_FzZofFTP3vNGYR220_oGq9-mixLk4N8&amp;token=72449"
                                                             style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gm-style-pbc"
                                             style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0; transition-duration: 0.8s;">
                                            <p class="gm-style-pbt"></p></div>
                                        <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                            <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                                    <div style="width: 27px; height: 43px; overflow: hidden; position: absolute; opacity: 0; left: -21px; top: -48px; z-index: -5;">
                                                        <img alt=""
                                                             src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi2.png"
                                                             draggable="false" usemap="#gmimap0"
                                                             style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; opacity: 1;">
                                                        <map name="gmimap0" id="gmimap0">
                                                            <area log="miw"
                                                                  coords="13.5,0,4,3.75,0,13.5,13.5,43,27,13.5,23,3.75"
                                                                  shape="poly" title=""
                                                                  style="cursor: pointer; touch-action: none;">
                                                        </map>
                                                    </div>
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
                                                    <div style="cursor: default; position: absolute; width: 330px; height: 36px; left: -172px; top: -108px; z-index: -108;">
                                                        <div style="position: absolute; left: 0px; top: 0px;">
                                                            <div style="width: 0px; height: 0px; border-right: 10px solid transparent; border-left: 10px solid transparent; border-top: 24px solid rgba(0, 0, 0, 0.1); position: absolute; left: 155px; top: 36px;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; background-color: rgba(0, 0, 0, 0.2); border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; width: 330px; height: 36px;"></div>
                                                            <div style="border-top-width: 24px; position: absolute; left: 155px; top: 33px;">
                                                                <div style="position: absolute; overflow: hidden; left: -6px; top: -1px; width: 16px; height: 30px;">
                                                                    <div style="position: absolute; left: 6px; background-color: rgb(255, 255, 255); transform: skewX(22.6deg); transform-origin: 0px 0px 0px; height: 24px; width: 10px; box-shadow: rgba(0, 0, 0, 0.6) 0px 1px 6px;"></div>
                                                                </div>
                                                                <div style="position: absolute; overflow: hidden; top: -1px; left: 10px; width: 16px; height: 30px;">
                                                                    <div style="position: absolute; left: 0px; background-color: rgb(255, 255, 255); transform: skewX(-22.6deg); transform-origin: 10px 0px 0px; height: 24px; width: 10px; box-shadow: rgba(0, 0, 0, 0.6) 0px 1px 6px;"></div>
                                                                </div>
                                                            </div>
                                                            <div style="position: absolute; left: 1px; top: 1px; border-radius: 2px; background-color: rgb(255, 255, 255); width: 328px; height: 34px;"></div>
                                                        </div>
                                                        <div class="gm-style-iw"
                                                             style="top: 9px; position: absolute; left: 15px; width: 300px;">
                                                            <div style="display: inline-block; overflow: auto; max-height: 115px; max-width: 485px;">
                                                                <div>,Select ...,Select ...,Select Type Category,Việt
                                                                    Nam
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button draggable="false" title="Close" aria-label="Close"
                                                                type="button" class="gm-ui-hover-effect"
                                                                style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 33px;">
                                                            <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                                 style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 10px 12px;">
                                                        </button>
                                                    </div>
                                                    <div style="z-index: -202; cursor: pointer; display: none; touch-action: none;">
                                                        <div style="width: 30px; height: 27px; overflow: hidden; position: absolute;">
                                                            <img alt=""
                                                                 src="https://maps.gstatic.com/mapfiles/undo_poly.png"
                                                                 draggable="false"
                                                                 style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 90px; height: 27px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <iframe aria-hidden="true" frameborder="0"
                                            style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"
                                            src="about:blank"></iframe>
                                    <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                        <a target="_blank" rel="noopener"
                                           href="https://maps.google.com/maps?ll=14.057908,108.2778&amp;z=14&amp;t=m&amp;hl=vi-VN&amp;gl=US&amp;mapclient=apiv3"
                                           title="Nhấp để xem khu vực này trên Google Maps"
                                           style="position: static; overflow: visible; float: none; display: inline;">
                                            <div style="width: 66px; height: 26px; cursor: pointer;"><img alt=""
                                                                                                          src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png"
                                                                                                          draggable="false"
                                                                                                          style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                            </div>
                                        </a></div>
                                    <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 169px; top: 60px;">
                                        <div style="padding: 0px 0px 10px; font-size: 16px;">Dữ liệu Bản đồ</div>
                                        <div style="font-size: 13px;">Dữ liệu bản đồ ©2018 Google</div>
                                        <button draggable="false" title="Close" aria-label="Close" type="button"
                                                class="gm-ui-hover-effect"
                                                style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;">
                                            <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                 style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;">
                                        </button>
                                    </div>
                                    <div class="gmnoprint"
                                         style="z-index: 1000001; position: absolute; right: 215px; bottom: 0px; width: 143px;">
                                        <div draggable="false" class="gm-style-cc"
                                             style="user-select: none; height: 14px; line-height: 14px;">
                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                <div style="width: 1px;"></div>
                                                <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                            </div>
                                            <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                <a style="text-decoration: none; cursor: pointer; display: none;">Dữ
                                                    liệu Bản đồ</a><span>Dữ liệu bản đồ ©2018 Google</span></div>
                                        </div>
                                    </div>
                                    <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                        <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                                            Dữ liệu bản đồ ©2018 Google
                                        </div>
                                    </div>
                                    <div class="gmnoprint gm-style-cc" draggable="false"
                                         style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 115px; bottom: 0px;">
                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                            <div style="width: 1px;"></div>
                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                        </div>
                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                            <a href="https://www.google.com/intl/vi-VN_US/help/terms_maps.html"
                                               target="_blank" rel="noopener"
                                               style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Điều
                                                khoản sử dụng</a></div>
                                    </div>
                                    <button draggable="false" title="Chuyển đổi chế độ xem toàn màn hình"
                                            aria-label="Chuyển đổi chế độ xem toàn màn hình" type="button"
                                            class="gm-control-active gm-fullscreen-control"
                                            style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;">
                                        <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                             style="height: 18px; width: 18px; margin: 11px;"><img
                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                style="height: 18px; width: 18px; margin: 11px;"><img
                                                src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                style="height: 18px; width: 18px; margin: 11px;"></button>
                                    <div draggable="false" class="gm-style-cc"
                                         style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                            <div style="width: 1px;"></div>
                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                        </div>
                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                            <a target="_blank" rel="noopener"
                                               title="Báo cáo lỗi trong bản đồ đường hoặc hình ảnh đến Google"
                                               href="https://www.google.com/maps/@14.0579077,108.2777998,14z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3"
                                               style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Báo
                                                cáo một lỗi bản đồ</a></div>
                                    </div>
                                    <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom"
                                         draggable="false" controlwidth="40" controlheight="153"
                                         style="margin: 10px; user-select: none; position: absolute; bottom: 167px; right: 40px;">
                                        <div class="gmnoprint" controlwidth="40" controlheight="81"
                                             style="position: absolute; left: 0px; top: 72px;">
                                            <div draggable="false"
                                                 style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;">
                                                <button draggable="false" title="Phóng to" aria-label="Phóng to"
                                                        type="button" class="gm-control-active"
                                                        style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;">
                                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                         style="height: 18px; width: 18px; margin: 9px 11px 13px;"><img
                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                            style="height: 18px; width: 18px; margin: 9px 11px 13px;"><img
                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                            style="height: 18px; width: 18px; margin: 9px 11px 13px;">
                                                </button>
                                                <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                                <button draggable="false" title="Thu nhỏ" aria-label="Thu nhỏ"
                                                        type="button" class="gm-control-active"
                                                        style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;">
                                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                         style="height: 18px; width: 18px; margin: 13px 11px 9px;"><img
                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                            style="height: 18px; width: 18px; margin: 13px 11px 9px;"><img
                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                            style="height: 18px; width: 18px; margin: 13px 11px 9px;">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="gm-svpc" controlwidth="40" controlheight="40"
                                             style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 40px; height: 40px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: none; position: absolute; left: 0px; top: 0px;">
                                            <div style="position: absolute; left: 50%; top: 50%;"></div>
                                            <div style="position: absolute; left: 50%; top: 50%;"><img
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2223%22%20height%3D%2238%22%20viewBox%3D%220%200%2023%2038%22%3E%0A%3Cpath%20d%3D%22M16.6%2C38.1h-5.5l-0.2-2.9-0.2%2C2.9h-5.5L5%2C25.3l-0.8%2C2a1.53%2C1.53%2C0%2C0%2C1-1.9.9l-1.2-.4a1.58%2C1.58%2C0%2C0%2C1-1-1.9v-0.1c0.3-.9%2C3.1-11.2%2C3.1-11.2a2.66%2C2.66%2C0%2C0%2C1%2C2.3-2l0.6-.5a6.93%2C6.93%2C0%2C0%2C1%2C4.7-12%2C6.8%2C6.8%2C0%2C0%2C1%2C4.9%2C2%2C7%2C7%2C0%2C0%2C1%2C2%2C4.9%2C6.65%2C6.65%2C0%2C0%2C1-2.2%2C5l0.7%2C0.5a2.78%2C2.78%2C0%2C0%2C1%2C2.4%2C2s2.9%2C11.2%2C2.9%2C11.3a1.53%2C1.53%2C0%2C0%2C1-.9%2C1.9l-1.3.4a1.63%2C1.63%2C0%2C0%2C1-1.9-.9l-0.7-1.8-0.1%2C12.7h0Zm-3.6-2h1.7L14.9%2C20.3l1.9-.3%2C2.4%2C6.3%2C0.3-.1c-0.2-.8-0.8-3.2-2.8-10.9a0.63%2C0.63%2C0%2C0%2C0-.6-0.5h-0.6l-1.1-.9h-1.9l-0.3-2a4.83%2C4.83%2C0%2C0%2C0%2C3.5-4.7A4.78%2C4.78%200%200%2C0%2011%202.3H10.8a4.9%2C4.9%2C0%2C0%2C0-1.4%2C9.6l-0.3%2C2h-1.9l-1%2C.9h-0.6a0.74%2C0.74%2C0%2C0%2C0-.6.5c-2%2C7.5-2.7%2C10-3%2C10.9l0.3%2C0.1%2C2.5-6.3%2C1.9%2C0.3%2C0.2%2C15.8h1.6l0.6-8.4a1.52%2C1.52%2C0%2C0%2C1%2C1.5-1.4%2C1.5%2C1.5%2C0%2C0%2C1%2C1.5%2C1.4l0.9%2C8.4h0Zm-10.9-9.6h0Zm17.5-.1h0Z%22%20style%3D%22fill%3A%23333%3Bopacity%3A0.7%3Bisolation%3Aisolate%22%2F%3E%0A%3Cpath%20d%3D%22M5.9%2C13.6l1.1-.9h7.8l1.2%2C0.9%22%20style%3D%22fill%3A%23ce592c%22%2F%3E%0A%3Cellipse%20cx%3D%2210.9%22%20cy%3D%2213.1%22%20rx%3D%222.7%22%20ry%3D%220.3%22%20style%3D%22fill%3A%23ce592c%3Bopacity%3A0.5%3Bisolation%3Aisolate%22%2F%3E%0A%3Cpath%20d%3D%22M20.6%2C26.1l-2.9-11.3a1.71%2C1.71%2C0%2C0%2C0-1.6-1.2H5.7a1.69%2C1.69%2C0%2C0%2C0-1.5%2C1.3l-3.1%2C11.3a0.61%2C0.61%2C0%2C0%2C0%2C.3.7l1.1%2C0.4a0.61%2C0.61%2C0%2C0%2C0%2C.7-0.3l2.7-6.7%2C0.2%2C16.8h3.6l0.6-9.3a0.47%2C0.47%2C0%2C0%2C1%2C.44-0.5h0.06c0.4%2C0%2C.4.2%2C0.5%2C0.5l0.6%2C9.3h3.6L15.7%2C20.3l2.5%2C6.6a0.52%2C0.52%2C0%2C0%2C0%2C.66.31h0l1.2-.4a0.57%2C0.57%2C0%2C0%2C0%2C.5-0.7h0Z%22%20style%3D%22fill%3A%23fdbf2d%22%2F%3E%0A%3Cpath%20d%3D%22M7%2C13.6l3.9%2C6.7%2C3.9-6.7%22%20style%3D%22fill%3A%23cf572e%3Bopacity%3A0.6%3Bisolation%3Aisolate%22%2F%3E%0A%3Ccircle%20cx%3D%2210.9%22%20cy%3D%227%22%20r%3D%225.9%22%20style%3D%22fill%3A%23fdbf2d%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                        aria-label="Kiểm soát người hình mắc áo trong chế độ xem phố"
                                                        style="width: 18px; height: 30px; position: absolute; left: -9px; top: -15px; pointer-events: none;"><img
                                                        src="data:image/svg+xml,%3Csvg%20width%3D%2224px%22%20height%3D%2238px%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20viewBox%3D%220%200%2024%2038%22%3E%0A%3Cpath%20d%3D%22M22%2C26.6l-2.9-11.3a2.78%2C2.78%2C0%2C0%2C0-2.4-2l-0.7-.5a6.82%2C6.82%2C0%2C0%2C0%2C2.2-5%2C6.9%2C6.9%2C0%2C0%2C0-13.8%2C0%2C7%2C7%2C0%2C0%2C0%2C2.2%2C5.1l-0.6.5a2.55%2C2.55%2C0%2C0%2C0-2.3%2C2s-3%2C11.1-3%2C11.2v0.1a1.58%2C1.58%2C0%2C0%2C0%2C1%2C1.9l1.2%2C0.4a1.63%2C1.63%2C0%2C0%2C0%2C1.9-.9l0.8-2%2C0.2%2C12.8h11.3l0.2-12.6%2C0.7%2C1.8a1.54%2C1.54%2C0%2C0%2C0%2C1.5%2C1%2C1.09%2C1.09%2C0%2C0%2C0%2C.5-0.1l1.3-.4a1.85%2C1.85%2C0%2C0%2C0%2C.7-2h0Zm-1.2.9-1.2.4a0.61%2C0.61%2C0%2C0%2C1-.7-0.3l-2.5-6.6-0.2%2C16.8h-9.4L6.6%2C21l-2.7%2C6.7a0.52%2C0.52%2C0%2C0%2C1-.66.31h0l-1.1-.4a0.52%2C0.52%2C0%2C0%2C1-.31-0.66v0l3.1-11.3a1.69%2C1.69%2C0%2C0%2C1%2C1.5-1.3h0.2l1-.9h2.3a5.9%2C5.9%2C0%2C1%2C1%2C3.2%2C0h2.3l1.1%2C0.9h0.2a1.71%2C1.71%2C0%2C0%2C1%2C1.6%2C1.2l2.9%2C11.3a0.84%2C0.84%2C0%2C0%2C1-.4.7h0Z%22%20style%3D%22fill%3A%23333%3Bfill-opacity%3A0.2%22%2F%3E%22%0A%3C%2Fsvg%3E%0A%0A"
                                                        aria-label="Người hình mắc áo ở đầu Bản đồ"
                                                        style="display: none; width: 18px; height: 30px; position: absolute; left: -9px; top: -15px; pointer-events: none;"><img
                                                        src="data:image/svg+xml,%3Csvg%20width%3D%2240px%22%20height%3D%2250px%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20viewBox%3D%220%200%2040%2050%22%3E%0A%3Cpath%20d%3D%22M34.00%2C-30.40l-2.9-11.3a2.78%2C2.78%2C0%2C0%2C0-2.4-2l-0.7-.5a6.82%2C6.82%2C0%2C0%2C0%2C2.2-5%2C6.9%2C6.9%2C0%2C0%2C0-13.8%2C0%2C7%2C7%2C0%2C0%2C0%2C2.2%2C5.1l-0.6.5a2.55%2C2.55%2C0%2C0%2C0-2.3%2C2s-3%2C11.1-3%2C11.2v0.1a1.58%2C1.58%2C0%2C0%2C0%2C1%2C1.9l1.2%2C0.4a1.63%2C1.63%2C0%2C0%2C0%2C1.9-.9l0.8-2%2C0.2%2C12.8h11.3l0.2-12.6%2C0.7%2C1.8a1.54%2C1.54%2C0%2C0%2C0%2C1.5%2C1%2C1.09%2C1.09%2C0%2C0%2C0%2C.5-0.1l1.3-.4a1.85%2C1.85%2C0%2C0%2C0%2C.7-2h0Zm-1.2.9-1.2.4a0.61%2C0.61%2C0%2C0%2C1-.7-0.3l-2.5-6.6-0.2%2C16.8h-9.4L18.60%2C-36.00l-2.7%2C6.7a0.52%2C0.52%2C0%2C0%2C1-.66.31h0l-1.1-.4a0.52%2C0.52%2C0%2C0%2C1-.31-0.66v0l3.1-11.3a1.69%2C1.69%2C0%2C0%2C1%2C1.5-1.3h0.2l1-.9h2.3a5.9%2C5.9%2C0%2C1%2C1%2C3.2%2C0h2.3l1.1%2C0.9h0.2a1.71%2C1.71%2C0%2C0%2C1%2C1.6%2C1.2l2.9%2C11.3a0.84%2C0.84%2C0%2C0%2C1-.4.7h0Zm1.2%2C59.1-2.9-11.3a2.78%2C2.78%2C0%2C0%2C0-2.4-2l-0.7-.5a6.82%2C6.82%2C0%2C0%2C0%2C2.2-5%2C6.9%2C6.9%2C0%2C0%2C0-13.8%2C0%2C7%2C7%2C0%2C0%2C0%2C2.2%2C5.1l-0.6.5a2.55%2C2.55%2C0%2C0%2C0-2.3%2C2s-3%2C11.1-3%2C11.2v0.1a1.58%2C1.58%2C0%2C0%2C0%2C1%2C1.9l1.2%2C0.4a1.63%2C1.63%2C0%2C0%2C0%2C1.9-.9l0.8-2%2C0.2%2C12.8h11.3l0.2-12.6%2C0.7%2C1.8a1.54%2C1.54%2C0%2C0%2C0%2C1.5%2C1%2C1.09%2C1.09%2C0%2C0%2C0%2C.5-0.1l1.3-.4a1.85%2C1.85%2C0%2C0%2C0%2C.7-2h0Zm-1.2.9-1.2.4a0.61%2C0.61%2C0%2C0%2C1-.7-0.3l-2.5-6.6-0.2%2C16.8h-9.4L18.60%2C24.00l-2.7%2C6.7a0.52%2C0.52%2C0%2C0%2C1-.66.31h0l-1.1-.4a0.52%2C0.52%2C0%2C0%2C1-.31-0.66v0l3.1-11.3a1.69%2C1.69%2C0%2C0%2C1%2C1.5-1.3h0.2l1-.9h2.3a5.9%2C5.9%2C0%2C1%2C1%2C3.2%2C0h2.3l1.1%2C0.9h0.2a1.71%2C1.71%2C0%2C0%2C1%2C1.6%2C1.2l2.9%2C11.3a0.84%2C0.84%2C0%2C0%2C1-.4.7h0Z%22%20style%3D%22fill%3A%23333%3Bfill-opacity%3A0.2%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M15.40%2C38.80h-4a1.64%2C1.64%2C0%2C0%2C1-1.4-1.1l-3.1-8a0.9%2C0.9%2C0%2C0%2C1-.5.1l-1.4.1a1.62%2C1.62%2C0%2C0%2C1-1.6-1.4l-1.1-13.1%2C1.6-1.3a6.87%2C6.87%2C0%2C0%2C1-3-4.6A7.14%2C7.14%200%200%2C1%202%204a7.6%2C7.6%2C0%2C0%2C1%2C4.7-3.1%2C7.14%2C7.14%2C0%2C0%2C1%2C5.5%2C1.1%2C7.28%2C7.28%2C0%2C0%2C1%2C2.3%2C9.6l2.1-.1%2C0.1%2C1c0%2C0.2.1%2C0.5%2C0.1%2C0.8a2.41%2C2.41%2C0%2C0%2C1%2C1%2C1s1.9%2C3.2%2C2.8%2C4.9c0.7%2C1.2%2C2.1%2C4.2%2C2.8%2C5.9a2.1%2C2.1%2C0%2C0%2C1-.8%2C2.6l-0.6.4a1.63%2C1.63%2C0%2C0%2C1-1.5.2l-0.6-.3a8.93%2C8.93%2C0%2C0%2C0%2C.5%2C1.3%2C7.91%2C7.91%2C0%2C0%2C0%2C1.8%2C2.6l0.6%2C0.3v4.6l-4.5-.1a7.32%2C7.32%2C0%2C0%2C1-2.5-1.5l-0.4%2C3.6h0Zm-10-19.2%2C3.5%2C9.8%2C2.9%2C7.5h1.6V35l-1.9-9.4%2C3.1%2C5.4a8.24%2C8.24%2C0%2C0%2C0%2C3.8%2C3.8h2.1v-1.4a14%2C14%2C0%2C0%2C1-2.2-3.1%2C44.55%2C44.55%2C0%2C0%2C1-2.2-8l-1.3-6.3%2C3.2%2C5.6c0.6%2C1.1%2C2.1%2C3.6%2C2.8%2C4.9l0.6-.4c-0.8-1.6-2.1-4.6-2.8-5.8-0.9-1.7-2.8-4.9-2.8-4.9a0.54%2C0.54%2C0%2C0%2C0-.4-0.3l-0.7-.1-0.1-.7a4.33%2C4.33%2C0%2C0%2C0-.1-0.5l-5.3.3%2C2.2-1.9a4.3%2C4.3%2C0%2C0%2C0%2C.9-1%2C5.17%2C5.17%2C0%2C0%2C0%2C.8-4%2C5.67%2C5.67%2C0%2C0%2C0-2.2-3.4%2C5.09%2C5.09%2C0%2C0%2C0-4-.8%2C5.67%2C5.67%2C0%2C0%2C0-3.4%2C2.2%2C5.17%2C5.17%2C0%2C0%2C0-.8%2C4%2C5.67%2C5.67%2C0%2C0%2C0%2C2.2%2C3.4%2C3.13%2C3.13%2C0%2C0%2C0%2C1%2C.5l1.6%2C0.6-3.2%2C2.6%2C1%2C11.5h0.4l-0.3-8.2h0Z%22%20style%3D%22fill%3A%23333%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M3.35%2C15.90l1.1%2C12.5a0.39%2C0.39%2C0%2C0%2C0%2C.36.42l0.14%2C0%2C1.4-.1a0.66%2C0.66%2C0%2C0%2C0%2C.5-0.4l-0.2-3.8-3.3-8.6h0Z%22%20style%3D%22fill%3A%23fdbf2d%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M5.20%2C28.80l1.1-.1a0.66%2C0.66%2C0%2C0%2C0%2C.5-0.4l-0.2-3.8-1.2-3.1Z%22%20style%3D%22fill%3A%23ce592b%3Bfill-opacity%3A0.25%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M21.40%2C35.70l-3.8-1.2-2.7-7.8L12.00%2C15.5l3.4-2.9c0.2%2C2.4%2C2.2%2C14.1%2C3.7%2C17.1%2C0%2C0%2C1.3%2C2.6%2C2.3%2C3.1v2.9m-8.4-8.1-2-.3%2C2.5%2C10.1%2C0.9%2C0.4v-2.9%22%20style%3D%22fill%3A%23e5892b%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M17.80%2C25.40c-0.4-1.5-.7-3.1-1.1-4.8-0.1-.4-0.1-0.7-0.2-1.1l-1.1-2-1.7-1.6s0.9%2C5%2C2.4%2C7.1a19.12%2C19.12%2C0%2C0%2C0%2C1.7%2C2.4h0Z%22%20style%3D%22fill%3A%23cf572e%3Bopacity%3A0.6%3Bisolation%3Aisolate%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M14.40%2C37.80h-3a0.43%2C0.43%2C0%2C0%2C1-.4-0.4l-3-7.8-1.7-4.8-3-9%2C8.9-.4s2.9%2C11.3%2C4.3%2C14.4c1.9%2C4.1%2C3.1%2C4.7%2C5%2C5.8h-3.2s-4.1-1.2-5.9-7.7a0.59%2C0.59%2C0%2C0%2C0-.6-0.4%2C0.62%2C0.62%2C0%2C0%2C0-.3.7s0.5%2C2.4.9%2C3.6a34.87%2C34.87%2C0%2C0%2C0%2C2%2C6h0Z%22%20style%3D%22fill%3A%23fdbf2d%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M15.40%2C12.70l-3.3%2C2.9-8.9.4%2C3.3-2.7%22%20style%3D%22fill%3A%23ce592b%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M9.10%2C21.10l1.4-6.2-5.9.5%22%20style%3D%22fill%3A%23cf572e%3Bopacity%3A0.6%3Bisolation%3Aisolate%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M12.00%2C13.5a4.75%2C4.75%2C0%2C0%2C1-2.6%2C1.1c-1.5.3-2.9%2C0.2-2.9%2C0s1.1-.6%2C2.7-1%22%20style%3D%22fill%3A%23bb3d19%22%3E%3C%2Fpath%3E%0A%3Ccircle%20cx%3D%227.92%22%20cy%3D%228.19%22%20r%3D%226.3%22%20style%3D%22fill%3A%23fdbf2d%22%3E%3C%2Fcircle%3E%0A%3Cpath%20d%3D%22M4.70%2C13.60a6.21%2C6.21%2C0%2C0%2C0%2C8.4-1.9v-0.1a8.89%2C8.89%2C0%2C0%2C1-8.4%2C2h0Z%22%20style%3D%22fill%3A%23ce592b%3Bfill-opacity%3A0.25%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M21.20%2C27.20l0.6-.4a1.09%2C1.09%2C0%2C0%2C0%2C.4-1.3c-0.7-1.5-2.1-4.6-2.8-5.8-0.9-1.7-2.8-4.9-2.8-4.9a1.6%2C1.6%2C0%2C0%2C0-2.17-.65l-0.23.15a1.68%2C1.68%2C0%2C0%2C0-.4%2C2.1s2.3%2C3.9%2C3.1%2C5.3c0.6%2C1%2C2.1%2C3.7%2C2.9%2C5.1a0.94%2C0.94%2C0%2C0%2C0%2C1.24.49l0.16-.09h0Z%22%20style%3D%22fill%3A%23fdbf2d%22%3E%3C%2Fpath%3E%0A%3Cpath%20d%3D%22M19.40%2C19.80c-0.9-1.7-2.8-4.9-2.8-4.9a1.6%2C1.6%2C0%2C0%2C0-2.17-.65l-0.23.15-0.3.3c1.1%2C1.5%2C2.9%2C3.8%2C3.9%2C5.4%2C1.1%2C1.8%2C2.9%2C5%2C3.8%2C6.7l0.1-.1a1.09%2C1.09%2C0%2C0%2C0%2C.4-1.3%2C57.67%2C57.67%2C0%2C0%2C0-2.7-5.6h0Z%22%20style%3D%22fill%3A%23ce592b%3Bfill-opacity%3A0.25%22%3E%3C%2Fpath%3E%0A%3C%2Fsvg%3E%0A"
                                                        aria-label="Kiểm soát người hình mắc áo trong chế độ xem phố"
                                                        style="display: none; width: 32px; height: 40px; position: absolute; left: -18px; top: -18px; pointer-events: none;">
                                            </div>
                                        </div>
                                        <div class="gmnoprint" controlwidth="40" controlheight="40"
                                             style="display: none; position: absolute;">
                                            <div style="width: 40px; height: 40px;">
                                                <button draggable="false" title="Rotate map 90 degrees"
                                                        aria-label="Rotate map 90 degrees" type="button"
                                                        class="gm-control-active"
                                                        style="background: none rgb(255, 255, 255); display: none; border: 0px; margin: 0px 0px 32px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;">
                                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                         style="height: 28px; width: 28px; margin: 6px;"><img
                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                            style="height: 28px; width: 28px; margin: 6px;"><img
                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                            style="height: 28px; width: 28px; margin: 6px;"></button>
                                                <button draggable="false" title="Tilt map" aria-label="Tilt map"
                                                        type="button" class="gm-tilt gm-control-active"
                                                        style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;">
                                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                         style="width: 18px; height: 16px; margin: 12px 11px;">
                                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                         style="width: 18px; height: 16px; margin: 12px 11px;">
                                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                         style="width: 18px; height: 16px; margin: 12px 11px;">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gmnoprint"
                                         style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;">
                                        <div class="gm-style-mtc" style="float: left; position: relative;">
                                            <div role="button" tabindex="0" title="Hiển thị bản đồ phố"
                                                 aria-label="Hiển thị bản đồ phố" aria-pressed="true" draggable="false"
                                                 style="direction: ltr; overflow: hidden; text-align: center; height: 40px; display: table-cell; vertical-align: middle; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 0px 17px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 57px; font-weight: 500;">
                                                Bản đồ
                                            </div>
                                            <div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; left: 0px; top: 40px; text-align: left; display: none;">
                                                <div draggable="false" title="Hiển thị bản đồ phố với địa hình"
                                                     style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;">
                                                    <span role="checkbox"
                                                          style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;">
                                                        <div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;">
                                                            <img alt=""
                                                                 src="https://maps.gstatic.com/mapfiles/mv/imgs8.png"
                                                                 draggable="false"
                                                                 style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;">
                                                        </div>
                                                    </span>
                                                    <label style="vertical-align: middle; cursor: pointer;">
                                                        Địa hình
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gm-style-mtc" style="float: left; position: relative;">
                                            <div role="button" tabindex="0" title="Hiển thị hình ảnh qua vệ tinh"
                                                 aria-label="Hiển thị hình ảnh qua vệ tinh" aria-pressed="false"
                                                 draggable="false"
                                                 style="direction: ltr; overflow: hidden; text-align: center; height: 40px; display: table-cell; vertical-align: middle; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 0px 17px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 56px; border-left: 0px;">
                                                Vệ tinh
                                            </div>
                                            <div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; right: 0px; top: 40px; text-align: left; display: none;">
                                                <div draggable="false" title="Hiển thị hình ảnh có tên phố"
                                                     style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;">
                                                    <span role="checkbox"
                                                          style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div
                                                                style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img
                                                                    alt=""
                                                                    src="https://maps.gstatic.com/mapfiles/mv/imgs8.png"
                                                                    draggable="false"
                                                                    style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label
                                                            style="vertical-align: middle; cursor: pointer;">Nhãn</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">

                            var uluru = {lat: 10.8230989, lng: 106.6296638};
                            var zoom = 6;
                            var map;
                            var marker;
                            var info = 'Hồ Chí Minh, Việt Nam';

                            var markers = [];//chứa tất cả marker trong map

                            //infomation to set color
                            var $styles = [
                                {
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "color": "#f5f5f5"
                                        }
                                    ]
                                },
                                {
                                    "elementType": "labels.icon",
                                    "stylers": [
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                        {
                                            "color": "#616161"
                                        }
                                    ]
                                },
                                {
                                    "elementType": "labels.text.stroke",
                                    "stylers": [
                                        {
                                            "color": "#f5f5f5"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "administrative",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "administrative.land_parcel",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                        {
                                            "color": "#bdbdbd"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "poi",
                                    "stylers": [
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "poi",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "color": "#eeeeee"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "poi",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                        {
                                            "color": "#757575"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "poi.park",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "color": "#e5e5e5"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "poi.park",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                        {
                                            "color": "#9e9e9e"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "color": "#ffffff"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road",
                                    "elementType": "labels.icon",
                                    "stylers": [
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.arterial",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                        {
                                            "color": "#757575"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.highway",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "color": "#dadada"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.highway",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                        {
                                            "color": "#616161"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "road.local",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                        {
                                            "color": "#9e9e9e"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "transit",
                                    "stylers": [
                                        {
                                            "visibility": "off"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "transit.line",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "color": "#e5e5e5"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "transit.station",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "color": "#eeeeee"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "water",
                                    "elementType": "geometry",
                                    "stylers": [
                                        {
                                            "color": "#aadaff"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "water",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                        {
                                            "color": "#aadaff"
                                        }
                                    ]
                                }
                            ];

                            function getThongTinMapsInit(id) {//ham nay khoi tao dia diem luc ban dau ma nguoi dung da nhap
                                var str = '';
                                if ($('#district').length > 0 && $('#province').length > 0) {
                                    var quan = $('#district option:selected').text() + ',';
                                    var thanhpho = $('#province option:selected').text() + ',';
                                    var phuong = $('#commune option:selected').text() + ',';
                                    var diachi = ($('#address').val()) ? ($('#address').val()) + ',' : ',';
                                    str = diachi + phuong + quan + thanhpho + 'Việt Nam';
                                } else {
                                    str = info;
                                }
                                //https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=YOUR_API_KEY
                                //$.get("https://maps.googleapis.com/maps/api/geocode/json?address=" + str + "&sensor=false", function (data) {
                                $.get("https://maps.googleapis.com/maps/api/geocode/json?address=" + str + "&key=AIzaSyD_FzZofFTP3vNGYR220_oGq9-mixLk4N8", function (data) {
                                    uluru = data.results[0].geometry.location;

                                    console.log(uluru);
                                    zoom = 14;
                                    info = str;
                                    initMap();
                                    var latMark = data.results[0].geometry.location.lat;
                                    var lngMark = data.results[0].geometry.location.lng;
                                    changeLatlag(latMark, lngMark);//change address lat and lag in google map this function have exits in file content
                                });
                            }

                            function getThongTinMaps(id) {//ham nay khoi tao dia diem ajax luc thay doi du lieu cho input form
                                var str = '';
                                if ($('#district').length > 0 && $('#province').length > 0) {
                                    var quan = $('#district option:selected').text() + ',';
                                    var thanhpho = $('#province option:selected').text() + ',';
                                    var phuong = ($('#commune option:selected').text()) ? $('#commune option:selected').text() + ',' : '';
                                    var diachi = ($('#address').val()) ? ($('#address').val()) + ',' : '';

                                    if (id == 1) {
                                        quan = '';
                                        phuong = '';
                                    }
                                    if (id == 2) {
                                        phuong = '';
                                    }
                                    str = diachi + phuong + quan + thanhpho + 'Việt Nam';
                                } else {
                                    str = info;
                                }
                                $.get("https://maps.googleapis.com/maps/api/geocode/json?address=" + str + "&key=AIzaSyD_FzZofFTP3vNGYR220_oGq9-mixLk4N8", function (data) {
                                    if ((typeof data.results[0] != "undefined")) {
                                        uluru = data.results[0].geometry.location;
                                        zoom = 10;
                                        info = str;
                                        initMap();
                                        var latMark = data.results[0].geometry.location.lat;
                                        var lngMark = data.results[0].geometry.location.lng;
                                        changeLatlag(latMark, lngMark);//change address lat and lag in google map this function have exits in file content
                                    }
                                });
                            }

                            function toggleBounce() {
                                if (marker.getAnimation() !== null) {
                                    marker.setAnimation(null);
                                } else {
                                    marker.setAnimation(google.maps.Animation.BOUNCE);
                                }
                            }

                            // Adds a marker to the map and push to the array.
                            function addMarker(location) {
                                clearMarkers();
                                var marker = new google.maps.Marker({
                                    position: location,
                                    map: map
                                });
                                markers.push(marker);
                            }

                            // Removes the markers from the map, but keeps them in the array.
                            function clearMarkers() {
                                setMapOnAll(null);
                                markers = [];
                            }

                            // Sets the map on all markers in the array.
                            function setMapOnAll(map) {
                                for (var i = 0; i < markers.length; i++) {
                                    markers[i].setMap(map);
                                }
                            }

                            function initMap() {
                                map = new google.maps.Map(document.getElementById('mapinfo_kts_p'), {
                                    zoom: zoom,
                                    center: uluru,
                                    styles: $styles
                                });

                                marker = new google.maps.Marker({
                                    position: uluru,
                                    map: map
                                });

                                marker.addListener('click', toggleBounce);

                                markers.push(marker);

                                var rectangle = new google.maps.Rectangle({
                                    strokeColor: '#FF0000',
                                    strokeOpacity: 0.8,
                                    strokeWeight: 2,
                                    fillColor: '#FF0000',
                                    fillOpacity: 0.35,
                                    map: map,
                                    bounds: {
                                        north: 33.685,
                                        south: 33.671,
                                        east: -116.234,
                                        west: -116.251
                                    }
                                });

                                // Create info window content.
                                var content = document.createElement('div');
                                content.textContent = info;

                                // Create open an info window attached to the marker.
                                infoWindow = new google.maps.InfoWindow({content: content});
                                infoWindow.open(map, marker);

                                // This event listener will call addMarker() when the map is clicked.
                                map.addListener('click', function (event) {
                                    var clickLat = event.latLng.lat();
                                    var clickLng = event.latLng.lng();
                                    addMarker(event.latLng);
                                    changeLatlag(clickLat, clickLng);//change address lat and lag in google map this function have exits in file content
                                });

                            }

                        </script>
                        <div class="form-group">
                            <div class="text-right col-md-12" style="margin-bottom: 15px">
                                <button type="submit" class="btn btn-success" name="login-button">Lưu thông tin</button>
                            </div>
                        </div>

                    </form>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $('#gender-radio input').on('change', function () {
        let gender = $('input[name=sex]:checked').val();
        $('#gender').val(gender);
    });
    let gender = $('input[name=sex]:checked').val();
    $('#gender').val(gender);
</script>
<style>
    select {
        text-align-last: auto !important;
    }
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_FzZofFTP3vNGYR220_oGq9-mixLk4N8&amp;callback=getThongTinMapsInit"></script>