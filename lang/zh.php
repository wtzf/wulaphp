<?php
/*
 * 系统内置语言翻译.
 */
return [
	'Add'                                                                     => '添加',
	'Delete'                                                                  => '删除',
	'Create'                                                                  => '创建',
	'New'                                                                     => '新增',
	'Upload'                                                                  => '上传',
	'Download'                                                                => '下载',
	'Open'                                                                    => '打开',
	'Close'                                                                   => '关闭',
	'User'                                                                    => '用户',
	'Username'                                                                => '用户名',
	'Account'                                                                 => '账户',
	'Phone'                                                                   => '手机',
	'Mail'                                                                    => '邮箱',
	'Email'                                                                   => '邮件',
	'Send'                                                                    => '发送',
	'Sending'                                                                 => '发送中',
	'Loading'                                                                 => '加载中',
	'Load'                                                                    => '加载',
	'Menu'                                                                    => '菜单',
	'System'                                                                  => '系统',
	'Page'                                                                    => '页面',
	'Log'                                                                     => '日志',
	'Module'                                                                  => '模块',
	'Theme'                                                                   => '主题',
	'Template'                                                                => '模板',
	'Extension'                                                               => '扩展',
	'File'                                                                    => '文件',
	'Display'                                                                 => '显示',
	'Directory'                                                               => '目录',
	'Configuration'                                                           => '配置',
	'Config'                                                                  => '配置',
	'Preference'                                                              => '首选项',
	'Profile'                                                                 => '用户资料',
	'Folder'                                                                  => '文件夹',
	'Path'                                                                    => '路径',
	'Password'                                                                => '密码',
	'Date'                                                                    => '日期',
	'Datetime'                                                                => '时间',
	'Edit'                                                                    => '编辑',
	'Update'                                                                  => '更新',
	'Update&Close'                                                            => '更新并关闭',
	'Save'                                                                    => '保存',
	'OK'                                                                      => '确定',
	'Oops'                                                                    => '靠',
	'Cancel'                                                                  => '取消',
	'Confirm'                                                                 => '确认',
	'Title'                                                                   => '标题',
	'Save&Close'                                                              => '保存并关闭',
	'Settings'                                                                => '设置',
	'Login'                                                                   => '登录',
	'Logout'                                                                  => '注销',
	'Help'                                                                    => '帮助',
	'Search'                                                                  => '搜索',
	'Back'                                                                    => '返回',
	'Return'                                                                  => '返回',
	'Refresh'                                                                 => '刷新',
	'Clear'                                                                   => '清除',
	'Empty'                                                                   => '清空',
	'Warning'                                                                 => '警告',
	'Error'                                                                   => '错误',
	'Info'                                                                    => '信息',
	'List'                                                                    => '列表',
	'View'                                                                    => '查看',
	'Reload'                                                                  => '重新加载',
	'Reloading'                                                               => '加载中',
	'Preview'                                                                 => '预览',
	'Publish'                                                                 => '发布',
	'Recycle'                                                                 => '回收',
	'Recycle Bin'                                                             => '回收站',
	'Trash'                                                                   => '废弃',
	'Trash Bin'                                                               => '垃圾桶',
	'Icon'                                                                    => '图标',
	'Image'                                                                   => '图片',
	'Site'                                                                    => '站点',
	'Web'                                                                     => '网站',
	'Article'                                                                 => '文章',
	'News'                                                                    => '新闻',
	'Table'                                                                   => '表',
	'Form'                                                                    => '表单',
	'Widget'                                                                  => '部件',
	'Manager'                                                                 => '管理',
	'Filter'                                                                  => '过滤',
	'Next'                                                                    => '下一个',
	'Prev'                                                                    => '上一个',
	'Dashboard'                                                               => '管理控制台',
	'Group'                                                                   => '分组',
	'Role'                                                                    => '角色',
	'Home'                                                                    => '主页',
	'About'                                                                   => '关于',
	'Features'                                                                => '特性',
	'wulacms'                                                                 => '由乌拉CMS v%s 提供动力',
	'no lock condition'                                                       => '未指定锁定条件',
	'Call Stack'                                                              => '调用堆栈',
	'Fatal error'                                                             => '致命错误',
	'Function'                                                                => '函数',
	'Location'                                                                => '位置',
	'The count of parameters of "%s" does not match, expect %s but %s given.' => '%s只能接收%s个参数，但是实际接收到了%s个',
	'%s is not instance of wulaphp\mvc\Controller'                            => '%s没有继承wulaphp\mvc\Controller',
	'The $layout property of %s is not found'                                 => '%s未定义$layout属性',
	'The redis extension is not installed'                                    => 'redis扩展未安装',
	'Please give me a template file to render'                                => '未指定模板文件',
	'The template %s is not found'                                            => '模板文件%s不存在',
	'No route for %s'                                                         => '无法路由%s',
	'the namespace of %s cannot be wulaphp'                                   => '模块%s不能使用wulaphp做为命名空间',
	'The namespace "%s" of %s is invalid'                                     => '%s的命名空间%s不合法',
	'@validator'                                                              => [
		'required'         => '这是必填字段',
		'datetime'         => '请输入合法的日期时间',
		'date'             => '请输入合法的日期',
		'IP'               => '请输入合法的IP地址',
		'email'            => '请输入合法的邮箱地址',
		'pattern'          => '请输入合法的格式',
		'callback'         => '%s 不是一合法的回调',
		'rangelength'      => '请输入长度在 %s 到 %s 之间的字符串',
		'maxlength'        => '最多可以输入 %s 个字符',
		'minlength'        => '最少要输入 %s 个字符',
		'range'            => '请输入范围在 %s 到 %s 之间的数值',
		'max'              => '请输入不大于 %s 的数值',
		'min'              => '请输入不小于 %s 的数值',
		'step'             => '请输入%s的倍数',
		'digits'           => '只能输入数字',
		'num'              => '请输入有效的数字',
		'notEqualTo'       => '你输入的值不能等于 %s',
		'equalTo'          => '你的输入不相同',
		'rangeWords'       => '请输入%s到%s个单词',
		'minWords'         => '请至少输入%s个单词',
		'maxWords'         => '最多输入%s个单词',
		'notsupportmethod' => '%s使用了系统不支持的验证方法:%s'
	]
];