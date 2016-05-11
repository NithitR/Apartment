<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,
        'languages'                     => [
        'en-US' => [
            'title'        => 'English',
            'dateFormat'   => 'dd MMMM yyyy',
            'yearOffset'   => 0,
            'dateSettings' => null,
            'timezone'     => null,
            'LC'           => 'en_US',
        ],
        'th-TH' => [
            'title'        => 'Thai',
            'dateFormat'   => 'dd MMMM yyyy',
            'yearOffset'   => 543,
            'timezone'     => null,
            'dateSettings' => [
                'days'        => ["อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัส", "ศุกร์", "เสาร์", "อาทิตย์"],
                'daysShort'   => ["อา", "จ", "อ", "พ", "พฤ", "ศ", "ส", "อา"],
                'months'      => ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"],
                'monthsShort' => ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."],
                'meridiem'    => ['AM', 'PM'],
            ],
            'LC'           => 'th_TH',
        ],
    ],
];
