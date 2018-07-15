<?php

return [
    'alipay' => [
        'app_id'         => '2016072900117882',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA2nwD5JJ8Ch9OwwkkILDRCRVszql8IzCQ2B6g5E4+y4mOQFm3lcntDaE1NnDzdEtCvUBoRmMNc5M/8WPaivWyIxnphqsgSLdKX0s5GzucAj8/rXlQOTh9zgZyHla9CnaQbkxxLehBFhYIJAgntCfy5CXU6r8GJUQj3I3yD0iiawGlGm/bLBItFVaveaqku1rK5gfiYw5kdGBi1j0VmmVxi5wZQ5jM+bahyExq5iv0edtRn6PJGmpqf6OIUKSB5TZ+q/ahs4I0pNXzXlwZOlCwfAIGl/RL8cnzf/gTKXEifYPkTbcDyaugq/OPLtH+fpJ97eEQ07DqJToUvus6jw+K8QIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEA2nwD5JJ8Ch9OwwkkILDRCRVszql8IzCQ2B6g5E4+y4mOQFm3lcntDaE1NnDzdEtCvUBoRmMNc5M/8WPaivWyIxnphqsgSLdKX0s5GzucAj8/rXlQOTh9zgZyHla9CnaQbkxxLehBFhYIJAgntCfy5CXU6r8GJUQj3I3yD0iiawGlGm/bLBItFVaveaqku1rK5gfiYw5kdGBi1j0VmmVxi5wZQ5jM+bahyExq5iv0edtRn6PJGmpqf6OIUKSB5TZ+q/ahs4I0pNXzXlwZOlCwfAIGl/RL8cnzf/gTKXEifYPkTbcDyaugq/OPLtH+fpJ97eEQ07DqJToUvus6jw+K8QIDAQABAoIBAQC23rJLcKhNuKKt8ErC6fwsxDgMSiPTOGUj347/SNaaegoMpotY3miBzfrCFIxRPGUiDnS45VNu90LAArn7MWbmplumEjm1Y2Tmmgm0V5Je9x2PT0jse/IgrZh6+FLGHTMKfwUETa+ckthBgGnrCrzsZRXvXfAA5SW3B0AhtsPrFyqb/UWb7W1B5Sg/NJIzkUn9koAkLyYIYtkFQusce9IzqVzFIfGBOx6uuDPbM4jTN96b7bJ7FFjg7IHV2K9Ukgp9vRcMvyjmB5eVMG10lC2JBp82a4wn0S9TbujjILli4YH8wgjC9ukPXg33TOIx4NX0GAhhxhvcrlalHyG4nOqhAoGBAPyj9zRtDGw5HUcEn7dyKufYM10CMzqzDv+sOr47HxePGeHrCSw1iLlZqRgdJNeEy0tYCjYPRoEBMC70WACrbba6CZGUf4VXUoU8/aN/wYy3YyEBHwbtvuNrKbY7Zcnsy4Ebo5BZXtyj/YU3MNG7OClXCp4VQFIEpE+QeJLTSLHVAoGBAN1jxq8ycxgWojemEdYz3I5kTmBBHWxYWr4fRCJNdiDdkaSf4xttMbBFYzJv1hBCe9mlZP6rMY7zEh+7SYWUKsW5ftOJJ31oX71CXTmMcTSZyW4ewjdrWB4ujqE+iDZIqv+ocq/HCB1ywQaSoheIyZAbYPEifL1DV+r3qx8FguatAoGBAK+cffJoNrFnhg1ejnLiniZoZ1Ooetm7q5pXKsIesH8czp32VXrwf2hvhZWodHqG6RUnTnnDZnu3yrloyV81yl6wtIQIWBfk2gyZl6k13eElfHdtoxaa3gyQ6f6tDRUuT0sgXjKxnLn8F/aopXu0CtbZlRzLotkgNuLDhrxwt2A9AoGARr2UBfU7242X5eo1ttk5d3JLrOwBh9YvoKKC9ecEgPnriMviGKhqgSWazcn4f5eO1XvI6qsvGbtHpkYE9x7iD+32vYcMzECmnuXuve3HWoRtXbeMXYL6VCKSRqmhgp7zrN9ZThtt12MMlJoUGysFJPvqnQJlE2DKXfUng7ESI70CgYEA3P8GtkvczF39lsGZUrM4cGJ+dLkVZ+i+WshhLTjiajT16tZhtHM1b0uP7gxz2FoELwBqVjz37iVrodhw1odim1myyuxeD6JV3cvhDUumiKCtjsVG94WiNaQmVCslsGBhKN7utsLSjtY8o7G1ZQBzZozYR0VjQlzT6jIO3NRUBFA=',
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
