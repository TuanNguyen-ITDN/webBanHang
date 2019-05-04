<?php

use Illuminate\Database\Seeder;

class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('products')->insert([
    		[ 'name'=>'Bánh Crepe Sầu riêng', 'id_type'=>5, 'description'=>'Bánh crepe sầu riêng nhà làm','unit_price'=> 150000, 'promotion_price'=>120000,'image'=> '1430967449-pancake-sau-rieng-6.jpg', 'unit'=>'hộp','new'=> 1],
    		['name'=> 'Bánh Crepe Chocolate', 'id_type'=>6, 'description'=>'','unit_price'=> 180000, 'promotion_price'=>160000, 'image'=>'crepe-chocolate.jpg', 'unit'=>'hộp','new'=> 1],
    		['name'=>'Bánh Crepe Sầu riêng - Chuối', 'id_type'=>5,'description'=> '', 'unit_price'=>150000, 'promotion_price'=>120000, 'image'=>'crepe-chuoi.jpg','unit'=> 'hộp','new'=> 0],
    		[ 'name'=>'Bánh Crepe Đào', 'id_type'=>5, 'description'=>'k', 'unit_price'=>160000,'promotion_price'=> 0, 'image'=>'crepe-dao.jpg', 'unit'=>'hộp','new'=> 0],
    		['name'=> 'Bánh Crepe Dâu', 'id_type'=>5, 'description'=>'ok','unit_price'=> 160000,'promotion_price'=> 0, 'image'=>'crepedau.jpg','unit'=> 'hộp','new'=> 0],
    		['name'=> 'Bánh Crepe Pháp','id_type'=> 5, 'description'=>'k','unit_price'=> 200000, 'promotion_price'=>180000, 'image'=>'crepe-phap.jpg','unit'=> 'hộp','new'=> 0],
    		['name'=> 'Bánh Crepe Táo','id_type'=>5,'description'=> 'k','unit_price'=> 160000, 'promotion_price'=>0, 'image'=>'crepe-tao.jpg','unit'=> 'hộp','new'=> 1],
    		['name'=>'Bánh Crepe Trà xanh', 'id_type'=>5, 'description'=>'k','unit_price'=> 160000,'promotion_price'=> 150000,'image'=> 'crepe-traxanh.jpg','unit'=> 'hộp','new'=> 0],
    		['name'=> 'Bánh Crepe Sầu riêng và Dứa','id_type'=> 5,'description'=> '','unit_price'=>160000, 'promotion_price'=>  150000, 'image'=>'saurieng-dua.jpg', 'unit'=>'hộp', 'new'=>0],
    		[ 'name'=>'Bánh Gato Trái cây Việt Quất','id_type'=> 3, 'description'=>'','unit_price'=> 250000,'promotion_price'=> 0, 'image'=>'544bc48782741.png', 'unit'=>'cái','new'=> 0],
    		[ 'name'=>'Bánh sinh nhật rau câu trái cây','id_type'=> 3, 'description'=>'','unit_price'=> 200000,'promotion_price'=> 180000,'image'=> '210215-banh-sinh-nhat-rau-cau-body- (6).jpg', 'unit'=>'cái', 'new'=>0],
    		['name'=> 'Bánh kem Chocolate Dâu','id_type'=> 3, 'description'=>'','unit_price'=> 300000, 'promotion_price'=>280000, 'image'=>'banh kem sinh nhat.jpg','unit'=> 'cái','new'=> 1],
    		[ 'name'=>'Bánh kem Dâu III','id_type'=> 3, 'description'=>'','unit_price'=> 300000, 'promotion_price'=>280000,'image'=> 'Banh-kem (6).jpg', 'unit'=>'cái', 'new'=>0],
    		[ 'name'=>'Bánh kem Dâu I', 'id_type'=>3, 'description'=>'', 'unit_price'=>350000,'promotion_price'=> 320000, 'image'=>'banhkem-dau.jpg', 'unit'=>'cái','new'=> 1],
    		[ 'name'=>'Bánh trái cây II','id_type'=> 3,'description'=> '','unit_price'=> 150000, 'promotion_price'=>120000, 'image'=>'banhtraicay.jpg', 'unit'=>'hộp', 'new'=>0],
    		[ 'name'=>'Apple Cake', 'id_type'=>3, 'description'=>'','unit_price'=> 250000, 'promotion_price'=>240000, 'image'=>'Fruit-Cake_7979.jpg','unit'=> 'cai','new'=> 0],
    		['name'=> 'Bánh ngọt nhân cream táo','id_type'=>2, 'description'=>'','unit_price'=> 180000,'promotion_price'=> 0, 'image'=>'20131108144733.jpg','unit'=> 'hộp','new'=> 0],
    		['name'=>'Bánh Chocolate Trái cây','id_type'=> 2,'description'=> '','unit_price'=> 150000, 'promotion_price'=>0, 'image'=>'Fruit-Cake_7976.jpg', 'unit'=>'hộp', 'new'=>1],
    		['name'=> 'Bánh Chocolate Trái cây II','id_type'=> 2, 'description'=>'','unit_price'=> 150000,'promotion_price'=> 0,'image'=> 'Fruit-Cake_7981.jpg', 'unit'=>'hộp','new'=> 0],
    		['name'=> 'Peach Cake', 'id_type'=>2,'description'=> '', 'unit_price'=>160000,'promotion_price'=> 150000, 'image'=>'Peach-Cake_3294.jpg', 'unit'=>'cái','new'=> 0],
    		['name'=> 'Bánh bông lan trứng muối I', 'id_type'=>1, 'description'=>'','unit_price'=> 160000,'promotion_price'=> 150000, 'image'=>'banhbonglantrung.jpg','unit'=> 'hộp','new'=> 1],
    		['name'=> 'Bánh bông lan trứng muối II','id_type'=> 1,'description'=> '', 'unit_price'=>180000,'promotion_price'=> 0, 'image'=>'banhbonglantrungmuoi.jpg','unit'=> 'hộp','new'=> 0],
    		['name'=> 'Bánh French', 'id_type'=>1, 'description'=>'', 'unit_price'=>180000, 'promotion_price'=>0, 'image'=>'banh-man-thu-vi-nhat-1.jpg', 'unit'=>'hộp','new'=> 0],
    		['name'=> 'Bánh mì Australia', 'id_type'=>1, 'description'=>'', 'unit_price'=>80000,'promotion_price'=> 70000, 'image'=>'dung-khoai-tay-lam-banh-gato-man-cuc-ngon.jpg','unit'=> 'hộp','new'=> 0],
    		['name'=> 'Bánh mặn thập cẩm','id_type'=> 1, 'description'=>'', 'unit_price'=>50000,'promotion_price'=> 0, 'image'=>'Fruit-Cake.png', 'hộp','new'=> 0],
    		['name'=> 'Bánh Muffins trứng', 'id_type'=>1,'description'=> '', 'unit_price'=>100000, 'promotion_price'=>80000, 'image'=>'maxresdefault.jpg', 'unit'=>'hộp','new'=> 0],
    		[ 'name'=>'Bánh Scone Peach Cake','id_type'=> 1, 'description'=>'','unit_price'=> 120000, 'promotion_price'=>0,'image'=> 'Peach-Cake_3300.jpg', 'unit'=>'hộp','new'=> 1],
    		['name'=> 'Bánh mì Loaf I','id_type'=>1, 'description'=>'', 'unit_price'=>100000,'promotion_price'=> 0,'image'=> 'sli12.jpg','unit'=> 'hộp','new'=> 0],
    		[ 'name'=>'Bánh kem Chocolate Dâu I','id_type'=> 4,'description'=> '', 'unit_price'=>380000, 'promotion_price'=>350000, 'image'=>'sli12.jpg','unit'=> 'cái','new'=> 1],
    		['name'=> 'Bánh kem Trái cây I','id_type'=> 4,'description'=> '','unit_price'=> 380000, 'promotion_price'=>350000,'image'=> 'Fruit-Cake.jpg','unit'=> 'cái','new'=> 0],
    		['name'=> 'Bánh kem Trái cây II','id_type'=> 4,'description'=> '','unit_price'=> 380000, 'promotion_price'=>350000,'image'=> 'Fruit-Cake_7971.jpg','unit'=> 'cái', 'new'=>0],
    		['name'=> 'Bánh kem Doraemon','id_type'=> 4,'description'=> '','unit_price'=> 280000, 'promotion_price'=>250000, 'image'=>'p1392962167_banh74.jpg', 'unit'=>'cái', 'new'=>1],
    		[ 'name'=>'Bánh kem Caramen Pudding','id_type'=> 4, 'description'=>'','unit_price'=> 280000, 'promotion_price'=>0, 'image'=>'Caramen-pudding636099031482099583.jpg','unit'=> 'cái','new'=> 1],
    		['name'=> 'Bánh kem Chocolate Fruit','id_type'=> 4, 'description'=>'','unit_price'=> 320000,'promotion_price'=> 300000, 'image'=>'chocolate-fruit636098975917921990.jpg', 'unit'=>'cái', 'new'=>1],
    		['name'=> 'Bánh kem Chocolate Fruit','id_type'=> 4, 'description'=>'','unit_price'=> 320000,'promotion_price'=> 300000, 'image'=>'chocolate-fruit636098975917921990.jpg', 'unit'=>'cái', 'new'=>1],
    		['name'=> 'Bánh kem Mango Mouse','id_type'=> 4,'description'=> '', 'unit_price'=>320000, 'promotion_price'=>300000, 'image'=>'mango-mousse-cake.jpg', 'unit'=>'cái', 'new'=>1],
    		['name'=> 'Bánh kem Matcha Mouse', 'id_type'=>4, 'description'=>'','unit_price'=> 350000,'promotion_price'=> 330000, 'image'=>'MATCHA-MOUSSE.jpg', 'unit'=>'cái','new'=> 0],
    		['name'=> 'Bánh kem Flower Fruit', 'id_type'=>4,'description'=> '', 'unit_price'=>350000, 'promotion_price'=>330000, 'image'=>'flower-fruits636102461981788938.jpg', 'unit'=>'cái','new'=> 0],
    		['name'=> 'Bánh kem Strawberry Delight','id_type'=> 4, 'description'=>'', 'unit_price'=>350000, 'promotion_price'=>330000,'image'=> 'strawberry-delight636102445035635173.jpg','unit'=> 'cái','new'=> 0],
    		['name'=> 'Bánh kem Raspberry Delight','id_type'=> 4,'description'=> '', 'unit_price'=>350000,'promotion_price'=> 330000, 'image'=>'raspberry.jpg','unit'=> 'cái','new'=> 0],
    		['name'=> 'Beefy Pizza', 'id_type'=>6, 'description'=>'Thịt bò xay, ngô, sốt BBQ, phô mai mozzarella','unit_price'=> 150000, 'promotion_price'=>130000, 'image'=>'40819_food_pizza.jpg','unit'=> 'cái','new'=> 0],
    		['name'=> 'Hawaii Pizza','id_type'=> 6, 'description'=>'Sốt cà chua, ham , dứa, pho mai mozzarella','unit_price'=> 120000,'promotion_price'=> 0, 'image'=>'hawaiian paradise_large-900x900.jpg','unit'=> 'cái','new'=> 1],
    		['name'=>'Smoke Chicken Pizza','id_type'=> 6, 'description'=>'Gà hun khói,nấm, sốt cà chua, pho mai mozzarella.','unit_price'=> 120000,'promotion_price'=> 0, 'image'=>'chicken black pepper_large-900x900.jpg', 'unit'=>'cái','new'=> 0],
    		['name'=> 'Sausage Pizza', 'id_type'=>6, 'description'=>'Xúc xích klobasa, Nấm, Ngô, sốtcà chua, pho mai Mozzarella.','unit_price'=> 120000, 'promotion_price'=>0,'image'=> 'pizza-miami.jpg','unit'=> 'cái', 'new'=>0],
    		['name'=> 'Ocean Pizza','id_type'=> 6, 'description'=>'Tôm , mực, xào cay,ớt xanh, hành tây, cà chua, phomai mozzarella.','unit_price'=> 120000, 'promotion_price'=>0, 'image'=>'seafood curry_large-900x900.jpg','unit'=> 'cái','new'=> 0],
    		['name'=> 'All Meaty Pizza','id_type'=> 6, 'description'=>'Ham, bacon, chorizo, pho mai mozzarella.', 'unit_price'=>140000, 'promotion_price'=>0,'image'=> 'all1).jpg', 'unit'=>'cái','new'=> 0],
    		['name'=> 'Tuna Pizza', 'id_type'=>6, 'description'=>'Cá Ngừ, sốt Mayonnaise,sốt càchua, hành tây, pho mai Mozzarella', 'unit_price'=>140000,'promotion_price'=> 0, 'image'=>'54eaf93713081_-_07-germany-tuna.jpg', 'unit'=>'cái','new'=> 0],
    		['name'=> 'Bánh su kem nhân dừa', 'id_type'=>7,'description'=> '', 'unit_price'=>120000,'promotion_price'=> 100000, 'image'=>'maxresdefault.jpg', 'cái','new'=> 0],
    		['name'=> 'Bánh kem Chocolate Fruit','id_type'=> 4, 'description'=>'','unit_price'=> 320000,'promotion_price'=> 300000, 'image'=>'chocolate-fruit636098975917921990.jpg', 'unit'=>'cái', 'new'=>1],
    		['name'=> 'Bánh su kem sữa tươi chiên giòn', 'id_type'=>7, 'description'=>'', 'unit_price'=>150000,'promotion_price'=> 0, 'image'=>'1434429117-banh-su-kem-chien-20.jpg', 'unit'=>'hộp','new'=>0],
    		['name'=> 'Bánh su kem dâu sữa tươi','id_type'=> 7, 'description'=>'','unit_price'=> 150000,'promotion_price'=> 0, 'image'=>'sukemdau.jpg', 'unit'=>'hộp','new'=> 0],
    		['name'=> 'Bánh su kem bơ sữa tươi','id_type'=> 7, 'description'=>'','unit_price'=> 150000, 'promotion_price'=>0, 'image'=>'He-Thong-Banh-Su-Singapore-Chewy-Junior.jpg', 'unit'=>'hộp', 'new'=>0],
    		[ 'name'=>'Bánh su kem nhân trái cây sữa tươi', 'id_type'=>7,'description'=> '', 'unit_price'=>150000,'promotion_price'=> 0, 'image'=>'foody-banh-su-que-635930347896369908.jpg', 'unit'=>'hộp', 'new'=>1],
    		['name'=> 'Bánh su kem cà phê','id_type'=> 7, 'description'=>'', 'unit_price'=>150000,'promotion_price'=> 0, 'image'=>'banh-su-kem-ca-phe-1.jpg', 'unit'=>'hộp','new'=> 0],
    		['name'=> 'Bánh su kem phô mai', 'id_type'=>7, 'description'=>'','unit_price'=> 150000, 'promotion_price'=>0, 'image'=>'50020041-combo-20-banh-su-que-pho-mai-9.jpg','unit'=> 'hộp','new'=> 0],
    		['name'=> 'Bánh su kem sữa tươi chocolate', 'id_type'=>7,'description'=> '','unit_price'=>150000,'promotion_price'=> 0, 'image'=>'combo-20-banh-su-que-kem-sua-tuoi-phu-socola.jpg', 'unit'=>'hộp','new'=> 1],
    		['name'=> 'Bánh Macaron Pháp','id_type'=> 2,'description'=> 'Thưởng thức macaron, người ta có thể tìm thấy từ những hương vị truyền thống như mâm xôi, chocolate, cho đến những hương vị mới như nấm và trà xanh. Macaron với vị giòn tan của vỏ bánh, béo ngậy ngọt ngào của phần nhân, với vẻ ngoài đáng yêu và nhiều màu sắc đẹp mắt, đây là món bạn không nên bỏ qua khi khám phá nền ẩm thực Pháp.','unit_price'=> 200000, 'promotion_price'=>180000, 'image'=>'Macaron9.jpg','unit'=> '', 'new'=>0],
    		['name'=> 'Bánh Tiramisu - Italia', 'id_type'=>2,'description'=> 'Chỉ cần cắn một miếng, bạn sẽ cảm nhận được tất cả các hương vị đó hòa quyện cùng một chính vì thế người ta còn ví món bánh này là Thiên đường trong miệng của bạn','unit_price'=> 200000,'promotion_price'=> 0,'image'=> '234.jpg', 'unit'=>'','new'=> 0],
    		[ 'name'=>'Bánh Táo - Mỹ','id_type'=> 2,'description'=> 'Bánh táo Mỹ với phần vỏ bánh mỏng, giòn mềm, ẩn chứa phần nhân táo thơm ngọt, điểm chút vị chua dịu của trái cây quả sẽ là một lựa chọn hoàn hảo cho những tín đồ bánh ngọt trên toàn thế giới.', 'unit_price'=>200000,'promotion_price'=> 0,'image'=> '1234.jpg', 'unit'=>'','new'=> 0],
    		[ 'name'=>'Bánh Cupcake - Anh Quốc','id_type'=> 6,'description'=> 'Những chiếc cupcake có cấu tạo gồm phần vỏ bánh xốp mịn và phần kem trang trí bên trên rất bắt mắt với nhiều hình dạng và màu sắc khác nhau. Cupcake còn được cho là chiếc bánh mang lại niềm vui và tiếng cười như chính hình dáng đáng yêu của chúng.','unit_price'=>150000, 'promotion_price'=>120000, 'image'=>'cupcake.jpg', 'unit'=>'cái','new'=> 1],
         ['name'=> 'Bánh Sachertorte', 'id_type'=>6, 'description'=>'Sachertorte là một loại bánh xốp được tạo ra bởi loại&nbsp;chocholate&nbsp;tuyệt hảo nhất của nước Áo. Sachertorte có vị ngọt nhẹ, gồm nhiều lớp bánh được làm từ ruột bánh mì và bánh sữa chocholate, xen lẫn giữa các lớp bánh là mứt mơ. Món bánh chocholate này nổi tiếng tới mức thành phố Vienna của Áo đã ấn định&nbsp;tổ chức một ngày Sachertorte quốc gia, vào 5/12 hằng năm', 'unit_price'=>250000, 'promotion_price'=>220000, 'image'=>'111.jpg', 'unit'=>'cái','new'=> 0]
     ]);
}
}
