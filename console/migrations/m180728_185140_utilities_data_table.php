<?php

use yii\db\Migration;
use common\models\User;

/**
 * Class m180728_185140_utilities_data_table
 */
class m180728_185140_utilities_data_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%utilities}}', [
            'id',
            'serial',
            'permission',
            'title',
            'icon',
            'path',
            'parent_id',
            'released',
            'status'
        ], [
            [1, 1, User::ROLE_ADMIN, 'Trang chủ', 'fa fa-home', 'site/index', null, 1, 1],

            [2, 2, User::ROLE_SENIOR, 'Cài đặt nâng cao', 'fa fa-cogs', null, null, 1, 1],
            [3, 1, User::ROLE_SENIOR, 'Trang', 'fa fa-clone', 'page/index', 2, 1, 1],
            [4, 2, User::ROLE_SENIOR, 'Vị trí ảnh', 'fa fa-picture-o', 'photo-location/index', 2, 1, 1],
            [5, 3, User::ROLE_SENIOR, 'Cấu hình', 'fa fa-cog', 'setting/index', 2, 1, 1],
            [6, 4, User::ROLE_SENIOR, 'Tiện ích', 'fa fa-arrows-alt', 'utilities/index', 2, 1, 1],

            [7, 3, User::ROLE_SENIOR, 'Quản trị hệ thống', 'fa fa-shield', null, null, 1, 1],
            [8, 1, User::ROLE_SENIOR, 'Lịch sử hoạt động', 'fa fa-history', 'audit-log/index', 7, 1, 1],
            [9, 2, User::ROLE_SENIOR, 'Dữ liệu mẫu', 'fa fa-database', null, 7, 1, 1],

            [10, 4, User::ROLE_SENIOR, 'Tối ưu mã nguồn', 'fa fa-lightbulb-o', null, null, 1, 1],
            [11, 1, User::ROLE_SENIOR, 'Nén dữ liệu', 'fa fa-sort-alpha-desc', null, 10, 1, 1],
            [12, 2, User::ROLE_SENIOR, 'Dữ liệu mẫu', 'fa fa-database', null, 10, 1, 1],

            [13, 5, User::ROLE_ADMIN, 'Cài đặt hệ thống', 'fa fa-sliders', 'general-information/index', null, 1, 1],
            [14, 6, User::ROLE_ADMIN, 'Cấu hình', 'fa fa-cog', 'setting/index', null, 1, 1],
            [15, 7, User::ROLE_ADMIN, 'Hình ảnh', 'fa fa-image', 'image/index', null, 1, 1],
            [16, 8, User::ROLE_ADMIN, 'Danh mục', 'fa fa-tags', 'category/index', null, 1, 1],
            [17, 9, User::ROLE_ADMIN, 'Bài viết', 'fa fa-edit', 'post/index', null, 1, 1],
            [18, 10, User::ROLE_ADMIN, 'Tin rao', 'fa fa-rocket', 'classified/index', null, 1, 1],
            [19, 11, User::ROLE_ADMIN, 'Sản phẩm', 'fa fa-shopping-cart', 'product/index', null, 1, 1],
            [20, 12, User::ROLE_ADMIN, 'Liên hệ', 'fa fa-envelope-o', 'contact/index', null, 1, 1],
            [21, 13, User::ROLE_ADMIN, 'Hỗ trợ viên', 'fa fa-phone', 'supporter/index', null, 1, 1],
            [22, 14, User::ROLE_ADMIN, 'Mã mở rộng', 'fa fa-code', 'meta/index', null, 1, 1],
            [23, 15, User::ROLE_ADMIN, 'Thư viện', 'fa fa-folder', 'library/index', null, 1, 1],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180728_185140_utilities_data_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180728_185140_utilities_data_table cannot be reverted.\n";

        return false;
    }
    */
}
