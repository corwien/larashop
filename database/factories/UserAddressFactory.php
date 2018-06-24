<?php

use Faker\Generator as Faker;



// 【注意】：如果填充的为中文，则需要设置 app/config.php 的 'faker_locale' => 'zh_CN',否则填充中文会报错。

/*
 * 填充文件使用
 *  php artisan tinker  // 进入tinker环境
 * （1）factory(App\Models\UserAddress::class)->make()   // 该方法只是创建了 UserAddress 对象，但并没有保存到数据库中
 * （2）factory(App\Models\UserAddress::class, 3)->create(['user_id' => 1])  // 创建并保存到数据库
 *
 */
$factory->define(App\Models\UserAddress::class, function (Faker $faker) {
    $addresses = [
        ["北京市", "市辖区", "东城区"],
        ["河北省", "石家庄市", "长安区"],
        ["江苏省", "南京市", "浦口区"],
        ["江苏省", "苏州市", "相城区"],
        ["广东省", "深圳市", "福田区"],
    ];
    $address   = $faker->randomElement($addresses);


    return [
        'province'      => $address[0],
        'city'          => $address[1],
        'district'      => $address[2],
        'address'       => sprintf('第%d街道第%d号', $faker->randomNumber(2), $faker->randomNumber(3)),
        'zip'           => $faker->postcode,
        'contact_name'  => $faker->name,
        'contact_phone' => $faker->phoneNumber,
    ];
});
