<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'accepted'             => '请认证:attribute。',
    'active_url'           => ':attribute非正确链接。',
    'after'                => '请将:attribute设定为:date后的日期。',
    'after_or_equal'       => '请将:attribute设定为:date当日之后的日期。',
    'alpha'                => '请将:attribute设定为只用英文字母。',
    'alpha_dash'           => '请将:attribute设定为英文数字和横线。',
    'alpha_num'            => '请将:attribute设定为只用英文字母和数字。',
    'array'                => '请将:attribute设定为阵列。',
    'before'               => '请将:attribute设定为:date前的日期。',
    'before_or_equal'      => '请将:attribute设定为:date当日之前的日期。',
    'between'              => [
        'numeric' => '请将:attribute设定为:min〜:max的大小。',
        'file'    => '请将:attribute设定为:min〜:max KB的文件。',
        'string'  => '请将:attribute设定为:min〜:max的文字。',
        'array'   => '请将:attribute设定为:min〜:max个。',
    ],
    'boolean'              => '请将:attribute设定为true或false。',
    'confirmed'            => ':attribute与确认用项目不一致。',
    'date'                 => ':attribute非正确日期。',
    'date_format'          => ':attribute与":format"的文字格式不一致。',
    'different'            => '请将:attribute与:other设定为不同。',
    'digits'               => '请将:attribute设定为:digits位',
    'digits_between'       => '请将:attribute设定为:min〜:max位。',
    'dimensions'           => ':attribute为无效容量的图片。',
    'distinct'             => ':attribute的数值重复。',
    'email'                => '请将:attribute设定为有效邮箱地址。',
    'exists'               => '已选择的:attribute不正确。',
    'file'                 => '请将:attribute为文件。',
    'filled'               => ':attribute是必须要的。',
    'image'                => '请将:attribute设定为图片。',
    'in'                   => '已选择的:attribute不正确。',
    'in_array'             => '请把:attribute从:other中选择。',
    'integer'              => '请将:attribute设定为整数。',
    'ip'                   => '请将:attribute设定为正确IP地址。',
    'ipv4'                 => '请将:attribute设定为正确IPv4地址。',
    'ipv6'                 => '请将:attribute设定为正确IPv6地址。',
    'json'                 => '请将:attribute设定为正确JSON。',
    'max'                  => [
        'numeric' => ':请将attribute设定为小于:max。',
        'file'    => ':请将attribute设定为小于:max KB的文件。',
        'string'  => ':请将attribute设定为小于:max字。',
        'array'   => ':请将attribute设定为小于:max个。',
    ],
    'mimes'                => ':请将attribute设定为:values形式的文件。',
    'mimetypes'            => ':请将attribute设定为:values形式的文件。',
    'min'                  => [
        'numeric' => ':请将attribute设定为大于:min。',
        'file'    => ':请将attribute设定为大于:min KB以上的文件。.',
        'string'  => ':请将attribute设定为大于:min字。',
        'array'   => ':请将attribute设定为大于:min个。',
    ],
    'not_in'               => '已选择的:attribute不正确。',
    'numeric'              => '请将:attribute设定为数字。',
    'present'              => ':attribute必须存在。',
    'regex'                => ':attribute的格式不正确。',
    'required'             => ':attribute是必须的。',
    'required_if'          => '如果:other为:value、:attribute是必须的。',
    'required_unless'      => ':otherが:valueにない場合、:attribute是必须的。',
    'required_with'        => '如果:values存在、:attributeは是必须的。',
    'required_with_all'    => '如果:values存在、:attributeは是必须的。',
    'required_without'     => '如果:values不存在、:attribute是必须的。',
    'required_without_all' => '如果:values不存在、:attribute是必须的。',
    'same'                 => ':attribute与:other不一致。',
    'size'                 => [
        'numeric' => '请将:attribute设定为:size。',
        'file'    => '请将:attribute设定为:size KB。.',
        'string'  => '请将:attribute设定为:size文字。',
        'array'   => '请将:attribute设定为:size个。',
    ],
    'string'               => '请将:attribute设定为文字列。',
    'timezone'             => '请将:attribute设定为正确时区。',
    'unique'               => ':attribute已存在。',
    'uploaded'             => ':attribute无法上传。',
    'url'                  => '请将:attribute设定为正确格式。',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes' => [],
];