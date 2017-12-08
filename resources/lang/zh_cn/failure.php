<?php
return [
  'captcha' => [
    'send_captcha_failed' => '短信验证码发送失败',
    'gen_captcha_failed'  => '手机验证码创建失败',
    'ip_limit'            => '当前IP访问过于频繁',
    'day_limit'           => '1天只能仅能发送 10 条验证短信',
    'hour_limit'          => '1小时内仅能发送 3 条验证短信',
    'minute_limit'        => '1分钟内仅能发送 1 条验证短信',
  ],
  'login'   => [
    'no_user' => '该号码的用户不存在，请检查号码是否正确或注册用户账号',
    'match'   => '验证码错误或已过期,请检查输入是否正确或重新获取',
  ],
  'role'    => [
    'delete_admin' => '无法删除超级管理员',
    'exists'       => '此管理员已经存在'
  ]
];
