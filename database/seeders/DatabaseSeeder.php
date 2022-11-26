<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
<<<<<<< HEAD
=======

use Illuminate\Database\Seeder;
>>>>>>> kien_nhomE

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Table others
        DB::table('others')->insert([
            [
                'product_id' => '1',
<<<<<<< HEAD
                'user_id' => '1',
=======
                'user_id' => '2',
>>>>>>> kien_nhomE
                'like' => '1',
                'submit' => 'Good!',
                'star' => '4',
            ],
<<<<<<< HEAD
        ]);

<<<<<<< HEAD
=======
            [
                'product_id' => '1',
                'user_id' => '3',
                'like' => '1',
                'submit' => 'Verry good!',
                'star' => '5',
            ],
            [
                'product_id' => '2',
                'user_id' => '2',
                'like' => '0',
                'submit' => 'Bad!',
                'star' => '3',
            ],
            [
                'product_id' => '2',
                'user_id' => '3',
                'like' => '0',
                'submit' => 'Verry bad!',
                'star' => '2',
            ],
        ]);

>>>>>>> kien_nhomE
        // Table detail
        DB::table('details')->insert([
            [
                'payment_id' => '1',
                'product_id' => '1',
                'quantity' => '2',
<<<<<<< HEAD
            ],
=======
                'address' => 'quang binh',
                'telephone' => '0867',
                'status' => '0',
            ],
            [
                'payment_id' => '1',
                'product_id' => '2',
                'quantity' => '1',
                'address' => 'quang binh',
                'telephone' => '0867',
                'status' => '0',
            ],
            [
                'payment_id' => '2',
                'product_id' => '3',
                'quantity' => '3',
                'address' => 'quang binh',
                'telephone' => '0867',
                'status' => '0',
            ]
>>>>>>> kien_nhomE
        ]);

        // Table Payment
        DB::table('payments')->insert([
<<<<<<< HEAD
=======
            [
                'user_id' => '2',
                'discount' => '3',
                'status' => '0',
                'created_at' => '2022-03-05',

            ],
            [
                'user_id' => '3',
                'discount' => '5',
                'status' => '0',
                'created_at' => '2022-01-21',
            ]
>>>>>>> kien_nhomE
        ]);

        //Table Users
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123456'),
                'admin' => '1',
            ],
            [
<<<<<<< HEAD
                'name' => 'thang',
                'email' => 'thang@gmail.com',
                'password' => Hash::make('thang123456'),
                'admin' => '0',
            ],
=======
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('user123456'),
                'admin' => '0',
            ],
            [
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('user23456'),
                'admin' => '0',
            ],
            [
                'name' => 'user3',
                'email' => 'user3@gmail.com',
                'password' => Hash::make('user3456'),
                'admin' => '0',
            ]
>>>>>>> kien_nhomE
        ]);

        // Table Protypes
        DB::table('protypes')->insert([
            [
                'manu_name' => 'Ao',
            ],
            [
                'manu_name' => 'Quan',
            ],
            [
                'manu_name' => 'Giay',
            ],
            [
                'manu_name' => 'Tui',
            ],
        ]);
<<<<<<< HEAD
=======
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
>>>>>>> nhomE_thinh
=======
>>>>>>> kien_nhomE
        // Table Manufacturer
        DB::table('manufacturers')->insert([
            [
                'manu_name' => 'Adidas',
            ],
            [
                'manu_name' => 'Nike',
            ],
            [
                'manu_name' => 'Dior',
            ],
            [
                'manu_name' => 'LouisVuiton',
            ],
        ]);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> kien_nhomE

          // Table Products
          DB::table('products')->insert([
            [
                'manu_id' => '3',
                'product_name' => 'Giày Thể Thao Nam Vải Lanh BN0106',
                'price' => '299000',
                'image' => 'giayvailanh.jpg',            
                'description' => 'Nhãn hiệu:	Agiay#Tên sản phẩm:	Giày Thể Thao Nam Vải Lanh BN0106#Mã SP:	BN0106#Chất liệu mũ:	Vải Lanh Cao Cấp#Chất liệu đế:	Cao Su Non#Màu:	Xám - Đen#Size:	39-44#Sản phẩm lỗi:	1 đổi 1 trong 14 ngày#Bảo hành:	12 tháng',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '0',
                'star' => '5',
                'created_at' => '2022-01-09',
            ],
            [
                'manu_id' => '3',
                'product_name' => 'Giày Thể Thao Nam AG0140',
                'price' => '299000',
                'image' => 'giay-the-thao-nam-ag0140-4.jpg',
                'description' => 'Nhãn hiệu:	Agiay
                #Tên sản phẩm:	Giày Thể Thao Nam AG0140
                #Mã SP:	AG0140
                #Chất liệu mũ:	Da lộn - Vải dù
                #Chất liệu đế:	Cao su non
                #Màu:	Đen - Trắng
                #Size:	39 - 44
                #Sản phẩm lỗi:	1 đổi 1 trong 14 ngày
                #Bảo hành:	12 tháng',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '5',
                'star' => '4',
                'created_at' => '2021-02-09',
            ],
            [
                'manu_id' => '3',
                'product_name' => 'Giày Sneaker AG0006',
                'price' => '300000',
                'image' => '4bc089796378f1c5d60772c819d789ba.jpg',
                'description' =>   'Giày sneaker nữ cổ cao DILY đế cao su 5cm    #Giày sneaker AG0006 được làm bằng da cao cấp rất mềm mại# Phom dáng ôm chân dày dặn và êm ái giúp đôi chân luôn thoải mái dù bạn mang giày cả ngày# Đường chỉ may rất tinh tế và chắc chắn tạo điểm nhấn độc đáo cho đôi giày.',
                'quantity' => '10',
                'feature' => '1',
                'sale' => '5',
                'star' => '3',
                'created_at' => '2021-03-09',
            ],
            [
                'manu_id' => '3',
                'product_name' => 'GIÀY SNEAKER CHỐNG BÁM NƯỚC - LESS TIRING 22.0cm TRẮNG NGÀ ',
                'price' => '588000',
                'image' => '4550344415924_1260.jpg',
                'description' => 'TRÊN: BÔNG100%, ĐẾ GIÀY: CÁC VẬT LIỆU KHÁC (ANH)/ĐẾ CAO SU (MỸ)',
                'quantity' => '15',
                'feature' => '1',
                'sale' => '10',
                'star' => '3',
                'created_at' => '2020-04-19',
            ],
            [
                'manu_id' => '3',
                'product_name' => 'Giày Sneaker basic họa tiết cắt laser SE0009',
                'price' => '556000',
                'image' => 'se0009_org_1000x1000_2914683691.jpg',
                'description' => '
                Mã SP	SE0009
                #Chất liệu	Da tổng hợp
                #Độ cao gót	2 cm
                #Dòng	casual
                #- Thiết kế họa tiết cắt plazer tròn nhỏ ở mũi giày tạo điểm nhấn.',
                'quantity' => '20',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2020-05-09',
            ],
            // 
            [
                'manu_id' => '3',
                'product_name' => 'Giày Chạy Bộ Nam Nike Zoom Tempo Next Fk CI9923-005',
                'price' => '5200000',
                'image' => 'nike-air-zoom-tempo-next-fk-ci9923-005-1.jpg',
                'description' => 'Thương hiệu: Nike (Mỹ)#Phù hợp với: Nam#Môn thể thao: Chạy bộ/ Đi bộ#Loại giày: Thể thao chuyên dụng#Chất liệu thân:8% sợi tổng hợp,92% vải dệt#Lớp lót trong: Hãng không công bố#Công nghệ: Air Zoom#Chất liệu đế:Hãng không công bố#Kiểu dáng:Giày cổ thấp#Khối lượng: Hãng không công bố#Thông tin cảnh báo:An toàn cho người sử dụng',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '0',
                'star' => '5',
                'created_at' => '2021-06-09',
            ],
            [
                'manu_id' => '3',
                'product_name' => 'Giày Lifestyle Nam Nike',
                'price' => '5280000',
                'image' => 'nike-air-vapormax-2021-fk-dh4084-100-1.jpg',
                'description' => 'Thương hiệu:Nike (Mỹ)# Phù hợp với: Nam#Loại giày: Thể thao lifestyle (thời trang)#Chất liệu thân: Vải dệt#Lớp lót trong: Hãng không công bố#Công nghệ: Flyknit#
                
                Chất liệu đế: Cao su#Kiểu dáng: Giày cổ thấp#Khối lượng: Hãng không công bố#  Thông tin cảnh báo: An toàn cho người sử dụng',
                'quantity' => '10',
                'feature' => '1',
                'sale' => '5',
                'star' => '4',
                'created_at' => '2021-07-19',
            ],
            [
                'manu_id' => '3',
                'product_name' => 'Giày Chạy Bộ Nam Adidas Ultraboost',
                'price' => '4500000',
                'image' => 'adidas-ultraboost-21-s23873-1.jpg',
                'description' => 'Thương hiệu: Adidas (Đức)#
                
                Phù hợp với: Nam#Môn thể thao: Chạy bộ/ Đi bộ#Loại giàyThể thao: chuyên dụng#Chất liệu thân: Vải dệt#Lớp lót trong: Hãng không công bố#Công nghệ: Adidas Primeknit+ Primeblue#Chất liệu đế: Cao su Continental#Kiểu dáng: Giày cổ thấp#Khối lượng: Hãng không công bố#Thông tin cảnh báo: An toàn cho người sử dụng',
                'quantity' => '10',
                'feature' => '1',
                'sale' => '5',
                'star' => '3',
                'created_at' => '2020-01-19',
            ],
            [
                'manu_id' => '3',
                'product_name' => 'Giày Adidas Ultra Boost SPEEDFACTORY',
                'price' => '4500000',
                'image' => 'adidas-ultraboost-21-crdy-w-s23754-xanh-1.jpg',
                'description' => 'Thương hiệu: Adidas (Đức)#
                Phù hợp với: Nữ#Môn thể thao: Chạy bộ/ Đi bộ#Loại giày: Thể thao chuyên dụng#Chất liệu thân: Vải dệt Primeknit#Lớp lót trong: Vải dệt#Công nghệ: Boost,Primeblue# Chất liệu đế: Cao su Continental#Kiểu dáng: Giày cổ thấp#Khối lượng: Hãng không công bố#Thông tin cảnh báo: An toàn cho người sử dụng',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '10',
                'star' => '3',
                'created_at' => '2021-03-08',
            ],
            [
                'manu_id' => '1',
                'product_name' => 'ÁO SƠ MI',
                'price' => '58800',
                'image' => 'as220834d.jpg',
                'description' => 'Áo sơ mi dài tay, kiểu dáng dễ mặc, hợp form dáng#Màu sắc hiện đại, dễ phối đồ#Chất liệu vải Bamboo siêu nhẹ, siêu mát.',
                'quantity' => '15',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2022-02-01',
            ],
            [
                'manu_id' => '1',
                'product_name' => 'Áo Thun Cổ Tròn Tối Giản Ver12',
                'price' => '199000',
                'image' => '965b68cb-8c13-0100-6043-001994304a16.jpg',
                'description' => 'Áo Thun Cổ Tròn Tối Giản Ver12#Thành phần: 100% Polyester#Cấu trúc dệt WAFFLE đặc biệt#- Chống ngăn#- Mềm mại#- Tỏa nhiệt bề mặt#- Co dãn tốt#+ Họa tiết thêu 2D',
                'quantity' => '15',
                'feature' => '1',
                'sale' => '0',
                'star' => '5',
                'created_at' => '2021-12-09',
            ],
            [
                'manu_id' => '1',
                'product_name' => 'Áo Khoác Hoodie Zipper Đơn Giản Y Nguyên Bản Ver64',
                'price' => '557000',
                'image' => '79fc3b16-3ba2-3a00-6f64-001989302328.jpg',
                'description' => 'Áo Khoác Hoodie Zipper Đơn Giản Y Nguyên Bản Ver64#Chất liệu : French Terry#Thành phần :100% cotton#Chất liệu: French Terry#Thành phần: 100% Cotton#- Thấm hút thoát ẩm#- Mềm mại#- Co giãn đàn hồi#- Thân thiện môi trường#+ Họa tiết in dẻo#+ Reverse Coil Zipper ',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '5',
                'star' => '4',
                'created_at' => '2021-05-10',
            ],
            [
                'manu_id' => '1',
                'product_name' => 'Áo Sơ Mi Tay Dài Đơn Giản Y Nguyên Bản Ver32',
                'price' => '457000',
                'image' => '0431599b-de9d-0100-2579-001991e0e0c6.jpg',
                'description' => 'Áo Sơ Mi Tay Dài Đơn Giản Y Nguyên Bản Ver32#Chất liệu: Vải Caro#Thành phần : 70% Polyester 30% Rayon#+ Phối logo kim loại',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '5',
                'star' => '3',
                'created_at' => '2019-04-09',
            ],
            [
                'manu_id' => '1',
                'product_name' => 'Áo Khoác Hoodie Zipper Đơn Giản Y Nguyên Bản Ver64',
                'price' => '557000',
                'image' => '4a5e6cf2-41fa-4e00-ac01-00198930a133.jpg',
                'description' => 'Áo Khoác Hoodie Zipper Đơn Giản Y Nguyên Bản Ver64#Chất liệu : French Terry #Thành phần :100% cotton#Chất liệu: French Terry#Thành phần: 100% Cotton#- Thấm hút thoát ẩm#- Mềm mại#- Co giãn đàn hồi#- Thân thiện môi trường#+ Họa tiết in dẻo#+ Reverse Coil Zipper ',
                'quantity' => '5',
                'feature' => '0',
                'sale' => '10',
                'star' => '3',
                'created_at' => '2021-08-09',
            ],
            [
                'manu_id' => '1',
                'product_name' => 'Áo Khoác Hoodie Đơn Giản Y Nguyên Bản Ver63',
                'price' => '52000',
                'image' => '8136ed62-7256-4400-9ad7-001978b4a0a7.jpg',
                'description' => 'Áo Khoác Hoodie Đơn Giản Y Nguyên Bản Ver63#Chất liệu : French Terry#Thành phần :100% cotton#- Thấm hút thoát ẩm #- Mềm mại#- Co giãn đàn hồi #- Thân thiện môi trường#+ Họa tiết in dẻo',
                'quantity' => '10',
                'feature' => '0',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2020-07-09',
            ],
            [
                'manu_id' => '1',
                'product_name' => 'Áo Khoác Gile Linh Vật Laula Ver2',
                'price' => '397000',
                'image' => 'e1ae9b39-96f6-d900-f936-00197e36a733.jpg',
                'description' => 'Áo Khoác Gile Linh Vật Laula Ver2#Chất liệu : French Terry#Thành phần :100% cotton#- Thấm hút thoát ẩm#- Mềm mại#- Co giãn đàn hồi#- Thân thiện môi trường #+ Họa tiết in trực + may logo TPR',
                'quantity' => '20',
                'feature' => '1',
                'sale' => '0',
                'star' => '5',
                'created_at' => '2021-09-09',
            ],
            [
                'manu_id' => '1',
                'product_name' => 'Áo Khoác Varsity Linh Vật Laula Ver1',
                'price' => '597000',
                'image' => '244a4c61-7a04-fb00-b227-00197e37ce67.jpg',
                'description' => 'Áo Khoác Varsity Linh Vật Laula Ver1#Chất liệu: Vải Kaki Nhung#Thành phần: 100% Polyester#- Họa tiết thêu#+ Cổ áo, cổ tay, lai áo được bo vải gân#+ Áo được cài bằng nút bấm#+ Túi trong tiện dụng',
                'quantity' => '15',
                'feature' => '1',
                'sale' => '5',
                'star' => '4',
                'created_at' => '2021-10-09',
            ],
            [
                'manu_id' => '1',
                'product_name' => 'Áo Khoác Hoodie Zipper Đơn Giản Y Nguyên Bản Ver44',
                'price' => '597000',
                'image' => 'dd157bc5-b2a2-6001-0b0c-00194cb5a760.jpg',
                'description' => 'Áo Khoác Hoodie Zipper Đơn Giản Y Nguyên Bản Ver44#Chất liệu : French Terry#Thành phần :100% cotton#Chất liệu: French Terry#Thành phần: 100% Cotton#- Thấm hút thoát ẩm#- Mềm mại#- Co giãn đàn hồi#- Thân thiện môi trường#+ Kẹp logo #y2010#+ Reverse Coil Zipper',
                'quantity' => '10',
                'feature' => '1',
                'sale' => '5',
                'star' => '3',
                'created_at' => '2022-02-22',
            ],
            [
                'manu_id' => '2',
                'product_name' => 'Quần Tây Đơn Giản Y Nguyên Bản Ver23',
                'price' => '427000',
                'image' => '5c7a8290-f4e7-3a00-e35d-00198eb28651.jpg',
                'description' => 'Quần Tây Đơn Giản Y Nguyên Bản Ver23#Chất liệu: Vải Quần Tây# Thành phần: 76% Polyester 23% Rayon 1% Spandex#+ Thêu logo',
                'quantity' => '10',
                'feature' => '1',
                'sale' => '10',
                'star' => '3',
                'created_at' => '2022-02-22',
            ],
            [
                'manu_id' => '2',
                'product_name' => 'Quần Tây Đơn Giản Y Nguyên Bản Ver22',
                'price' => '427000',
                'image' => '3e132da5-4796-2c00-15e8-00198eb124d9.jpg',
                'description' => 'Quần Tây Đơn Giản Y Nguyên Bản Ver22#Chất liệu: Vải Quần Tây#Thành phần: 70% Polyester 28% Rayon 2% Spandex#+ Thêu logo ',
                'quantity' => '10',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2020-02-24',
            ],
            [
                'manu_id' => '2',
                'product_name' => 'Quần Jean Slimfit Đơn Giản B43',
                'price' => '425000',
                'image' => 'be94499b-b1df-5001-7d32-00197e3ad2db.jpg',
                'description' => 'Quần Jean Slimfit Đơn Giản B43#Chất liêu : Jean Cotton#Thành phần : 100% Cotton#+ Họa tiết thêu 2D',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '0',
                'star' => '5',
                'created_at' => '2021-03-22',
            ],
            [
                'manu_id' => '2',
                'product_name' => 'Quần Jean Slimfit 12VAHDT Vạn Xuân Kiến Quốc Ver2',
                'price' => '341000',
                'image' => '421e0533-017a-3801-d6a5-001999bf4794.jpg',
                'description' => 'Quần Jean Slimfit 12VAHDT Vạn Xuân Kiến Quốc Ver2#Chất liệu: Vải Jean#Thành phần: 100% Cotton #+ họa tiết thêu',
                'quantity' => '8',
                'feature' => '1',
                'sale' => '5',
                'star' => '4',
                'created_at' => '2021-11-19',
            ],
            [
                'manu_id' => '2',
                'product_name' => 'Quần Dài Vải Linh Vật Olygre Ver2',
                'price' => '399000',
                'image' => '7af71e16-f0ec-4000-3cdf-0018fa3020d3.jpg',
                'description' => 'Quần Dài Sweatpants Linh Vật Olygre Ver2 #Chất liệu : Vải dù Polyester #Thành phần : 100%Polyester#- Co giãn#- Vải nhẹ#- Mềm mịn#- Độ bền cao#- Dễ dàng giặt ủi#+ Họa tiết in dẻo (mặt trước) + nhãn ép (mặt sau) + viền gân phản quang#+ Dây rút phản quang#+ Gấu quần bo vào mắt cá chân, cực kì hiệu quả trong việc che khuyết điểm #+ Túi bên hông: Reverse Coil Zipper',
                'quantity' => '9',
                'feature' => '1',
                'sale' => '5',
                'star' => '3',
                'created_at' => '2021-01-01',
            ],
            [
                'manu_id' => '2',
                'product_name' => 'Quần Jogger Tối Giản A01',
                'price' => '385000',
                'image' => '391a4d7d-fadd-0200-3bb2-00190637d94c.jpg',
                'description' => 'Chất liệu: Cotton Plus #Quần Dài Jogger Form Tiêu Chuẩn ',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2021-11-02',
            ],
            [
                'manu_id' => '2',
                'product_name' => 'Quần Tây Tối Giản B2HG05',
                'price' => '425000',
                'image' => 'b8b43eb5-5037-3c00-f4f9-001637e5496b.jpg',
                'description' => 'Chất liệu: Poly Plus # Quần Dài Form Tiêu Chuẩn  ',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2021-11-02',
            ],
            [
                'manu_id' => '2',
                'product_name' => 'Quần Short Đơn Giản Y Nguyên Bản Ver38',
                'price' => '287000',
                'image' => 'ba56d941-d76c-6a00-c174-00197e339be4.jpg',
                'description' => 'Quần Short Đơn Giản Y Nguyên Bản Ver38#Chất liệu: COTTON DOUBLE FACE#- Vải sợi Cotton được dệt theo "DOUBLE-FACE" có cấu trúc 2 bề mặt giống nhau, có thể sử dụng được cả 2 mặt vải .#Thành phần: 87% Cotton 13% Polyester#- Co giãn #- Độ bền cao#- Thoáng Khí#- Nhanh khô #+ Họa tiết in dẻo#+ Hai túi bên hông Reverse Coil Zipper  ',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2021-11-02',
            ],
            [
                'manu_id' => '2',
                'product_name' => 'Quần Short Đơn Giản Y Nguyên Bản Ver38',
                'price' => '287000',
                'image' => '18b489e3-53b3-7b00-e09c-00197e3477bf.jpg',
                'description' => 'Quần Short Đơn Giản Y Nguyên Bản Ver38# Chất liệu: COTTON DOUBLE FACE#- Vải sợi Cotton được dệt theo "DOUBLE-FACE" có cấu trúc 2 bề mặt giống nhau, có thể sử dụng được cả 2 mặt vải .#Thành phần: 87% Cotton 13% Polyester #- Co giãn #- Độ bền cao #- Thoáng Khí#- Nhanh khô# + Họa tiết in dẻo# + Hai túi bên hông Reverse Coil Zipper',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2021-11-02',
            ],

            [
                'manu_id' => '4',
                'product_name' => 'Túi Đeo Morden 12VAHDT Vạn Xuân Kiến Quốc Ver2',
                'price' => '287000',
                'image' => '6e8347e6-2a71-5801-dc65-001962b92dcd.jpg',
                'description' => 'Túi Đeo 12VAHDT Vạn Xuân Kiến Quốc Ver2 #- Chất liệu vải cotton #- Dây đeo nylon  #- Khóa bóp cam#- Họa tiết thêu#- Kích thước 36x37x11.5cm',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2021-11-02',
            ],
            [
                'manu_id' => '4',
                'product_name' => 'Túi Đeo Daily Nguyên Bản B17',
                'price' => '249000',
                'image' => 'bb29f85e-4f0b-0c00-efa3-0019182b65c5.jpg',
                'description' => '- Logo YaMe cao su sang trọng #- Dây đeo biến hình tiện lợi. Túi có thể dùng đeo chéo hoặc đeo ngang hông#- Ngăn chính siêu rộng đựng được rất nhiều vật dụng cá nhân: ví - kính - điện thoại..v.v..#- Ngăn phụ bên trong và sau lưng túi tiện dụng.#- Chất liệu 1680D + Lót 210D HD bền tốt.',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2021-11-02',
            ],
            [
                'manu_id' => '4',
                'product_name' => 'TÚI XÁCH NỮ THỜI TRANG CAO CẤP ELLY - EL210',
                'price' => '1190000',
                'image' => 'tui-xach-nu-thoi-trang-cao-cap-elly-el210-510x510.jpg',
                'description' => '- Thương hiệu: ELLY.# Sản xuất: Trung Quốc (theo tiêu chuẩn chất lượng của thương hiệu ELLY). #- Màu sắc: Đen. #- Kích thước: 24 x 16 x 7 cm (Chiều ngang x chiều dọc x độ dày).#- Chất liệu: Da tổng hợp cao cấp.#- Kiểu dáng: Crossbody bag.#-Bảo hành: 03 tháng (với lỗi do sản xuất).',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2021-11-02',
            ],
            [
                'manu_id' => '4',
                'product_name' => 'TÚI XÁCH NỮ MONOGRAM CANVAS ELLY - EL202',
                'price' => '1279000',
                'image' => 'el202-1-510x455.jpg',
                'description' => '#- Thương hiệu: ELLY. #-Sản xuất: Trung Quốc (theo tiêu chuẩn chất lượng của thương hiệu ELLY). #- Màu sắc: Đen, trắng. #- Kích thước: 19 x 14,5 x 4 cm (Chiều ngang x chiều dọc x độ dày).#- Chất liệu: Monogram Canvas, chống nước, chống trầy xước.#- Kiểu dáng: Crossbody bag.#- Công năng sử dụng: Đựng điện thoại, thẻ cá nhân, sạc dự phòng, thỏi son, đồ dùng cá nhân…#- Bảo hành: 03 tháng (với lỗi do sản xuất).',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2021-11-02',
            ],
            [
                'manu_id' => '4',
                'product_name' => 'TÚI XÁCH NỮ MONOGRAM CANVAS ELLY - EL206',
                'price' => '1899000',
                'image' => 'EL206-3.jpg',
                'description' => '- Thương hiệu: ELLY.#- Sản xuất: Trung Quốc (theo tiêu chuẩn chất lượng của thương hiệu ELLY).#-Màu sắc: Đen, trắng.#- Kích thước: 27 x 18,5 x 12,5 cm (Chiều ngang x chiều dọc x độ dày).#- Chất liệu: Monogram Canvas.#- Kiểu dáng: Hand bag.#- Công năng sử dụng: Đựng điện thoại, ví nhỏ, sạc dự phòng, thỏi son, đồ dùng cá nhân…#-Bảo hành: 03 tháng (với lỗi do sản xuất).',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2021-11-02',
            ],
            [
                'manu_id' => '4',
                'product_name' => 'TÚI XÁCH NỮ CAO CẤP DA THẬT ELLY - ET140',
                'price' => '2990000',
                'image' => 'ET140-21-510x510.jpg',
                'description' => '- Thương hiệu: ELLY.#- Sản xuất: Trung Quốc (theo tiêu chuẩn chất lượng của thương hiệu ELLY).#-Màu sắc: Đen, nâu.#- Kích thước: 32 x 30 x 14 cm (Chiều ngang x chiều dọc x độ dày). #-Chất liệu: Da thật cao cấp nhập khẩu.#- Kiểu dáng: Tote bag.#- Công năng sử dụng: Đựng Tablet, giấy A4, sách vở, tài liệu, điện thoại, ví tiền, card, sạc dự phòng, thỏi son, đồ dùng cá nhân.#-Bảo hành: 06 tháng (với lỗi do sản xuất).',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2021-11-02',
            ],
            [
                'manu_id' => '4',
                'product_name' => 'TÚI CLUTCH NỮ THỜI TRANG ELLY- ECH52',
                'price' => '990000',
                'image' => 'Túi-clutch-nữ-thời-trang-ELLY-ECH52-11-510x510.jpg',
                'description' => '-Thương hiệu: ELLY.#- Sản xuất: Trung Quốc (theo tiêu chuẩn chất lượng của thương hiệu ELLY).#- Màu sắc: Đen, nude#- Kích thước: 27 x 17 x 1 cm (Chiều ngang x chiều dọc x độ dày).#- Chất liệu: Da tổng hợp cao cấp.#- Kiểu dáng: Clutch.#- Bảo hành: 03 tháng (với lỗi do sản xuất).',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2021-11-02',
            ],
            [
                'manu_id' => '4',
                'product_name' => 'TÚI XÁCH NỮ CAO CẤP DA THẬT ELLY - ET106',
                'price' => '2400000',
                'image' => 'tui-xach-nu-cao-cap-da-that-ELLY-ET106-17-2-1-510x468.jpg',
                'description' => '- Thương hiệu: ELLY.#- Sản xuất: Việt Nam; Trung Quốc (theo tiêu chuẩn chất lượng của thương hiệu ELLY).#- Màu sắc: Đỏ#- Kích thước: 17,7 x 12 x 7 cm (Chiều ngang x chiều dọc x độ dày).#- Chất liệu: Da thật cao cấp nhập khẩu.#- Kiểu dáng: Crossbody bag.#- Bảo hành: 06 tháng (với lỗi do sản xuất).',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2021-11-02',
            ],
            [
                'manu_id' => '4',
                'product_name' => 'TÚI XÁCH NỮ CAO CẤP DA THẬT ELLY - ET100',
                'price' => '2400000',
                'image' => 'tui-xach-nu-cao-cap-da-that-elly-et100-510x510.jpg',
                'description' => '- Thương hiệu: ELLY.#- Sản xuất: Việt Nam; Trung Quốc (theo tiêu chuẩn chất lượng của thương hiệu ELLY). #- Màu sắc: Đỏ#- Kích thước: 17,7 x 12 x 7 cm (Chiều ngang x chiều dọc x độ dày).#- Chất liệu: Da thật cao cấp nhập khẩu.#- Kiểu dáng: Crossbody bag.#- Bảo hành: 06 tháng (với lỗi do sản xuất).',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2021-11-02',
            ],
            [
                'manu_id' => '4',
                'product_name' => 'TÚI XÁCH NỮ CAO CẤP DA THẬT ELLY - ET106',
                'price' => '2990000',
                'image' => 'tui-xach-nu-cao-cap-da-that-ELLY-ET106-17-2-1-510x468.jpg',
                'description' => '#- Thương hiệu: ELLY.#- Sản xuất: Việt Nam; Trung Quốc (theo tiêu chuẩn chất lượng của thương hiệu ELLY).#- Màu sắc: Đen.#- Kích thước: 20 x 13 x 9 cm (Chiều ngang x chiều dọc x độ dày).#- Chất liệu: Da thật cao cấp nhập khẩu.#- Kiểu dáng: Handheld bag.#- Bảo hành: 06 tháng (với lỗi do sản xuất)',
                'quantity' => '5',
                'feature' => '1',
                'sale' => '15',
                'star' => '3',
                'created_at' => '2021-11-02',
            ],

            
        ]);
<<<<<<< HEAD
=======
>>>>>>> nhomE_thinh
=======
>>>>>>> kien_nhomE
    }
}
