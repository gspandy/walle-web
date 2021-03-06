<?php

return [
    'md5 title' => '线上文件指纹',
    'file' => '文件',
    'file placeholder' => '项目的相对地址：backend/web/index.php',
    'project' => '项目',
    'file md5' => '查询文件md5',
    'error todo' => '请联系SA或者重新部署',
    'error title' => '上线出错:（',
    'done' => '上线成功: )',
    'done praise' => '辛苦了，小主：）',
    'version' => '版本号：',
    'deploy' => '部署',
    'return' => '返回',
    'process_detect' => '权限、目录检查',
    'process_pre-deploy' => 'pre-deploy任务',
    'process_checkout' => '代码检出',
    'process_post-deploy' => 'post-deploy任务',
    'process_rsync' => '同步至服务器',
    'process_update' => '全量更新(pre-release、更新版本、post-release)',
    'deploying' => '部署上线',

    'deployment id is empty' => '上线单号不能为空：）',
    'deployment id not exists' => '上线单不存在：）',
    'deployment only done for once' => '已完成的上线单不能被重复执行：）',
    'init deployment workspace error' => '初始化部署隔离空间出错',
    'update code error' => '更新代码文件出错',
    'pre deploy task error' => '代码检出前置任务操作失败',
    'post deploy task error' => '代码检出后置任务操作失败',
    'rsync error' => '同步文件到目标服务器群出错',
    'project configuration works' => '配置检测通过，恭喜：）',
    'update servers error' => '全量更新服务器出错',
    'ssh-key to git' => '把ssh-key加入git的deploy-keys列表',
    'correct username passwd' => '用户名密码无误',
    'hosted server error' => '宿主机代码检出检测出错，请确认php进程用户{user}有代码存储仓库{path}读写权限，并且{ssh_passwd}。详细错误：{error}<br>',
    'hosted server sys error' => '宿主机检测时发生系统错误：{error}<br>',
    'target server error' => '目标机器部署出错，请确认php进程{local_user}用户ssh-key加入目标机器的{remote_user}用户ssh-key信任列表，且{remote_user}有目标机器发布版本库{path}写入权限。详细错误：{error}<br>',
    'target server sys error' => '目标机检测时发生系统错误：{error}<br>',
    'unknown config' => '未知的配置',
    'you are not the manager' => '非管理员不能操作：（',
    'get branches failed' => '获取分支列表失败：',
    'get commit log failed' => '获取提交历史失败：',
    'get tags failed' => '获取tag列表失败：',
    'unknown scm' => '未知的版本管理',

];