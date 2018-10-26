<?php

namespace common\models;

use common\models\base;

class Classified extends base\Classified
{
    const CAN_EXPORT = 0;
    const EXPORTED = 1;
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'path' => 'Path',
            'avatar' => 'Avatar',
            'seo_tool_id' => 'Seo Tool ID',
            'serial' => 'Serial',
            'category_id' => 'Category ID',
            'category_classified_id' => 'Category Classified ID',
            'slug' => 'Slug',
            'describe' => 'Describe',
            'content' => 'Content',
            'acreage' => 'Acreage',
            'views' => 'Views',
            'price' => 'Price',
            'province_id' => 'Province ID',
            'district_id' => 'District ID',
            'start_date' => 'Start Date',
            'expiration_date' => 'Expiration Date',
            'status' => 'Duyệt',
            'ad_type_id' => 'Ad Type ID',
            'unit_id' => 'Unit ID',
            'email' => 'Email',
            'phone' => 'Phone',
            'mobile' => 'Mobile',
            'address' => 'Address',
            'contacts' => 'Contacts',
            'contact_name' => 'Contact Name',
            'images' => 'Images',
            'display_homepage' => 'Đang bán',
            'featured' => 'Bán Chạy',
        ];
    }
}
