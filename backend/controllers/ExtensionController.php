<?php

namespace backend\controllers;

use common\models\Category;
use common\models\Page;
use fproject\components\DbHelper;
use MatthiasMullie\Minify;
use backend\controllers\base\AdminController;
use PhpOffice\PhpSpreadsheet\IOFactory;
use yii\db\Exception;
use yii\helpers\ArrayHelper;
use yii\web\BadRequestHttpException;

/**
 * ExtensionController implements the CRUD actions for GeneralInformation model.
 */
class ExtensionController extends AdminController {

	/**
	 * Library.
	 * @return mixed
	 */
	public function actionIndex() {
		return $this->render( 'index' );
	}

	/**
	 * @return string
	 */
	public function actionSimpleData() {

		$this->import_category( 1 );

		return $this->render( 'simple-data' );
	}

	/**
	 * @return string
	 */
	public function actionZip() {

		$root_path = '../../frontend/web';

		$files = $this->scan_folder( $root_path );

		$finish = [];

		foreach ( $files as $key => $value ) {

			switch ( pathinfo( $value, PATHINFO_EXTENSION ) ) {
				case 'css':
					$mini = new Minify\CSS( $value );
					$mini->minify( $value );

					$finish[] = str_replace( '../..', '', $value );

					break;
				case 'js':
					$mini = new Minify\JS( $value );
					$mini->minify( $value );

					$finish[] = str_replace( '../..', '', $value );

					break;
				default:
			}
		}

		$this->zip( $root_path );

		return $this->render( 'zip', [
			'finish' => $finish
		] );
	}

	/**
	 * @param $number
	 *
	 * @return \yii\web\Response
	 */
	private function import_category( $number ) {
		$table = 'category';

		$attributes = [
			'A' => 'serial',
			'B' => 'title'
		];

		$file  = '../../uploads/cms/excel/simple-data-' . $number . '.xlsx';
		$start = 2;

		$inputFileName = $file;

		$pages = ArrayHelper::map( Page::find()->all(), 'key', 'id' );

		if ( ! file_exists( $inputFileName ) ) {
			throw new BadRequestHttpException( 'File doesn\'t exists.' );
		}

		$inputFileName = $file;

//		try {
			$spreadsheet = IOFactory::load( $inputFileName );

			$sheetData = $spreadsheet->getSheetByName( 'category' )->toArray( null, true, true, true );

			$length = Category::find()->count();

			$data = [];
			foreach ( $sheetData as $key => $value ) {

				if ( ! isset( $value['A'] ) ) {
					break;
				}

				if ( $key > $start ) {
					$row = [];

					$length ++;

					$row['id'] = $length;

					foreach ( $attributes as $key_att => $value_att ) {
						$row[ $value_att ] = $value[ $key_att ];
					}

					$row['page_id']   = $pages[ $value['C'] ];
					$row['parent_id'] = $value['D'];
					$row['status']    = 1;
					$row['example']   = 1;

					$data[] = $row;
				}
			}

//			try {
				var_dump(DbHelper::insertMultiple( $table, $data ));die;

//			} catch ( Exception $e ) {
//			}

//		} catch ( \PhpOffice\PhpSpreadsheet\Reader\Exception $e ) {
//		}

		return $this->redirect( [ 'extension/simple-data' ] );
	}

	/**
	 * @param $root_path
	 */
	private function zip( $root_path ) {
		$folders = scandir( $root_path );

		foreach ( $folders as $key => $value ) {
			if ( $value != '.' && $value != '..' ) {
				switch ( $folders ) {
					case 'css':
						$source_path = $root_path . '/' . $folders . '/' . $value;
						$mini        = new Minify\CSS( $source_path );

						$mini->minify( $source_path );

					case 'js':
					default:
				}
			}
		}
	}

	/**
	 * @param string $path
	 * @param array $name
	 *
	 * @return array
	 */
	private function scan_folder( $path = '', &$name = array() ) {
		$path  = $path == '' ? dirname( __FILE__ ) : $path;
		$lists = @scandir( $path );

		if ( ! empty( $lists ) ) {
			foreach ( $lists as $f ) {

				if ( is_dir( $path . '/' . $f ) && $f != ".." && $f != "." ) {
					$this->scan_folder( $path . '/' . $f, $name );
				} else {
					if ( $f != ".." && $f != "." ) {
						$name[] = $path . '/' . $f;
					}
				}
			}
		}

		return $name;
	}
}