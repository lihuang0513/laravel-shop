<?php

return [
    'alipay' => [
        'app_id'         => '2016072900115983',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgABCOIPgG7iE3zNwyWbIOlQ5ul1dNlTgqRSUDaHXNcZz193sYdFBiKjXnLfEm1VUXe5oZpEtPP2V0bfihQnCUD+X0dlpIeUQIt5/Mnl42MNElw0QYblwBNu0/V4MA5DGYzck2KXz7StTsojg8GQg3DH9MFct0irZ+THbV0KXJsHLR11E0gGjBVXE/2Rs5nJcXWAdbFhCaVeQoTSMbQiLPJhdAxhnQDZ9AtjVfZRmzWC5hsINhosYPHcieBbcGgsxCEAPvdf7/OBlDhxps/yVnNn+YgjNEZAP2hvQW/gpqI3koyGYrdc/llM7ePKQqxhZDgsHt+7164dsB7y7YiCdzQIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAjszfknv46rD5qXpbFPZ542dj2CgdZ4gYGH18lVkRQORJmU+bSNVsci4lf+iCogOlnFG/ACtK7dSqAfTrdgu2bD56jmLkwwEf+CAAfScamDS1mwV1l+nJ7lVN3A+f0h9HjBNsCWCxjA1nZOhgOWjv66Uq4iW0dCosuKZCpYXT8nkid1rPYE5+25PvJUf+SZ60u/AFa4pM7Rx2TAKS+AH13CsO0SA/12AUWjAlzONGMcxZtmhipr1kUrBvjVGCFPUfTAQpRLRInmDDu7sYIp6J+8yTKzCSblnhUyF39SxZ10PKpbkxTUlIcX8t9IU78RIMqBiRodpbntvX0ZyX6bzBTwIDAQABAoIBAEVpcINTn3r062ZmAz/9TuIqr22ykhhxHsVIufYehTR1wxCykVil5UDbDX9PFbCK9UU2txDt+k4AwWKSGqIWr2WOOSRdDbV8Jn4FkDdFerfhZyUjUjW1fmJLNL1zGsyYR77e8fTc+3CIU2nJSnyddYGll2K10TFmDrbymhK7KnsBjMqekQbPmuGtL7U5alVEX6arpRAC4WfXCPH++Tz9v0T6/k0pSfzGfrRouuAQ3bAb+qU6kFHl0NaTvyt4eQNs9OSkcpNORRB0eGy2owDIuUTpbdkifLyBgztU5QXuGNSKMmH2+yo6wAjW68RTfK2VyW9UQco/8eEeOr5MTEHbygECgYEAwcDDiiSnMlryxWPSfEk3Oes//JCxS6Welx4SBm6OhvIXKyxzlw0V+OT2TDKvRZ1U1+dvXMwsSwH//VmmDZMg9mb/T9+jeZwCqTKhxj4ZB6kCCSAU02quPQGj6CSYVEMNHCnU/rWlV9N8ldPXnXTjG1cEUwDrFGTYAPxoxh7T3dECgYEAvK1/xoo1wBWWWfQLsPF/3sK12tvP/jxduIiGH8q2c+gx80OqSZfh/rJ/i5zwAJJ14LCWGfDC9yRr3hXoG7E57VmQjl8EAxgFUCSvwlbcu7A/Al9THcjsk3/4euXlrd3+Tvsb5S2k4tSZoxhTmyIolfwbb6EMoBDedMFYQEGm1R8CgYAXxDR4MozL0XosGlWMZ1K96Qx9R6Zn2BX/BXJClbcn+HQ9GIPJSJKkaDmKGUGEsYrhvQLdCDJ6tPEYu7FxwtVtRC8XNiCQX0G4TXyom59oYCPeyK+lS1W6KARaCnshAuSNytfUsqVog4mpu0Wci+T7yo2+PMOZSdFxNYUIoGlusQKBgA9ilmi6HGftWrU7ETj8eFDRz8Jo6izw/zNs7oLpJLeO14PeoKQfnm4GYCAiS+/AAZywyYyT9VHxxln1r1eSvAZ+pyr01H7sFoLSewJ90sH7PSgUXdKv75qXdMuQs4nZ8ELAdyXY8vkMHPsPoMGlp2mThSk1GLJ0ra8XlPqoX9JBAoGAR0yknPn8IjDI+Z0CiCuAcmVfT9GmSGDEalzEyvH+Xq/Vt299+YEW1E13mLtT34XO4UV4Nd62lTwSzXZJu8qRdO4z3BFmu+Nwo6oI0RlWCuUcD2exkA9ni++loamz8aK4pv8eQO/SS1aZ8SxbODvqJ21tmRWf4kIMpYtdRvhcZFw=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
