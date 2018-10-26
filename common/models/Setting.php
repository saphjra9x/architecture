<?php

namespace common\models;

use common\models\base;

class Setting extends base\Setting {
	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels() {
		return [
			'id'       => 'ID',
			'title'    => 'Tiêu đề',
			'avatar'   => 'Ảnh đại diện',
			'link'     => 'Đường dẫn',
			'code'     => 'Code',
			'key'      => 'Khóa',
			'describe' => 'Mô tả',
			'content'  => 'Nội dung',
			'released' => 'Phát hành',
			'status'   => 'Trạng thái',
			'slug'     => 'Slug',
			'images'   => 'Images',
		];
	}
}
