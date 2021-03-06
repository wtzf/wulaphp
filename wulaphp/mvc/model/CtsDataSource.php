<?php
/*
 * This file is part of wulacms.
 *
 * (c) Leo Ning <windywany@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace wulaphp\mvc\model;

use wulaphp\app\App;

/**
 * cts数据源.
 *
 * @package wulaphp\mvc\model
 */
abstract class CtsDataSource {
	protected $cols = ['id' => 'ID', 'title' => '标题'];

	/**
	 * 获取数据.
	 *
	 * @param array                         $con      条件.
	 * @param string                        $db       数据库
	 * @param \wulaphp\router\UrlParsedInfo $pageInfo 分页信息
	 * @param array                         $tplvars  模板变量.
	 *
	 * @return CtsData 数据.
	 */
	public final function getList($con, $db, $pageInfo, $tplvars) {
		try {
			$dbx = App::db($db);

			$data = $this->getData($con, $dbx, $pageInfo, $tplvars);
			if ($data instanceof CtsData) {
				return $data;
			}
		} catch (\Exception $e) {

		}

		return new CtsData([], 0);
	}

	/**
	 * 数据源名称
	 *
	 * @return string
	 */
	public abstract function getName();

	/**
	 * 取数据
	 *
	 * @param array                          $con
	 * @param \wulaphp\db\DatabaseConnection $db
	 * @param \wulaphp\router\UrlParsedInfo  $pageInfo
	 * @param array                          $tplvar
	 *
	 * @return CtsData
	 */
	protected abstract function getData($con, $db, $pageInfo, $tplvar);

	/**
	 * 条件表单.
	 *
	 * @return null|\wulaphp\form\FormTable
	 */
	public function getCondForm() {
		return null;
	}

	/**
	 * 定义变量名.
	 * @return string 变量名.
	 */
	public function getVarName() {
		return 'item';
	}

	/**
	 * 预览列表定义.
	 * @return array
	 */
	public function getCols() {
		return $this->cols;
	}
}