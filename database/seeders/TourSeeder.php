<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tours')->insert([
            [

                'tour_name' => 'Hà Nội - Cao Nguyên Đá - Cột Cờ Lũng Cú - Mèo Vạc',
                'tour_image' => 'cotCoLungCu.jpg',
                'start_day' => '2024-04-01',
                'time' => '3 ngày 4 đêm',
                'star_from' => 'Hà Nội',
                'price' => 1560000,
                'vehicle' => 'Xe Khách',
                'tour_description' => 'Hành trình từ Hà Nội đến Cao Nguyên Đá và Cột Cờ Lũng Cú rồi tiếp tục đến Mèo Vạc là một cuộc phiêu lưu tuyệt vời qua những cung đường đồi núi hùng vĩ của vùng cao phía Bắc Việt Nam. Điều này mang lại cơ hội cho du khách khám phá vẻ đẹp hoang sơ của thiên nhiên, cũng như tìm hiểu về văn hóa địa phương và cuộc sống của cư dân nơi đây.',
                'tour_schedule' => '<h3> 1.	ĐÊM 01: HÀ NỘI - HÀ GIANG (NGỦ ĐÊM TRÊN XE)</h3>
                <p>19h00-20h00: Xe ô tô đón Quý khách tại Nhà Hát Lớn Hà Nội sau đó khởi hành đi Hà Giang bằng xe giường nằm.</p>
                <p>Lưu ý: Đối với khách hàng xuống sân bay Nội Bài sát giờ khởi hành, xe giường nằm có thể đón Quý khách tại Ngã 3 Kim Anh (đầu cao tốc Hà Nội - Lào Cai, cách sân bay Nội Bài 03km vào khoảng 22h00).</p>
                <p>Quý khách nghỉ đêm trên xe gường nằm.</p>
                <h3>2.	NGÀY 01: HÀ GIANG - LŨNG CÚ - ĐỒNG VĂN (ĂN SÁNG, TRƯA, TỐI)</h3>
                <p>04h00-04h30: Đến Hà Giang, xe đưa Quý khách về Homestay để nghỉ ngơi, vệ sinh cá nhân buổi sáng và ăn sáng tại Homestay.</p>
                <p>06h30: Quý khách ăn sáng sau đó lên xe đi khám phá mảnh đất Hà Giang với phong cảnh hùng vỹ nên thơ. Trên đường đi Quý khách dừng chân tại điểm dừng chân Cổng Trời Quản Bạ chụp hình Núi đôi Cô Tiên hay còn gọi là Núi đôi Quản Bạ và toàn cảnh thị trấn Tam Sơn từ trên cao.</p>
                <p>Trưa: Đến Yên Minh, ăn trưa tại nhà hàng.</p>
                <p>Chiều: Quý khách tiếp tục lên xe chiêm ngưỡng cảnh đẹp hùng vỹ của Công viên địa chất toàn cầu Cao nguyên đá Đồng Văn.</p>
                <p>Dọc đường đi Quý khách dừng ghé thăm:</p>
                <p>- Phố Cáo với những ngôi nhà đặc trưng của người Hmông bởi những hàng rào đá cung quanh nhà.</p>
                <p>- Thăm bản Sủng Là thăm ngôi nhà Cổ của người Hmông với tường trình bằng đất - nơi đã được sử dụng làm bối cảnh để quay bộ phim nhựa "Chuyện của Pao" năm 2006 của đạo diễn Ngô Quang Hải được chuyển thể từ truyện ngắn "Tiếng đàn môi sau bờ rào đá" của nhà văn Đỗ Bích Thủy đã giành được 4 giải Cánh diều vàng. Quý khách dừng chân nghỉ ngơi và chụp hình hoa tam giác mạch gần dốc chín khoanh.</p>
                <p>- Dinh Vua Mèo - Vương Chính Đức nằm trong một thung lũng của xã Sà Phìn, đây là dòng họ giàu có và quyền uy nhất Châu Đồng Văn vào đầu thế kỷ 20.</p>
                <p>- Thăm Cột Cờ Lũng Cũ - nơi địa đầu Tổ quốc, điểm có vĩ độ cao nhất trên bản đồ của Việt Nam.</p>
                <p>17h00: Về đến thị trấn Đồng Văn, nhận phòng khách sạn, nghỉ ngơi. Ăn tối. Buổi tối, Quý khách tự do thăm quan Phố Cổ Đồng Văn đã tồn tại cùng với thời gian gần một thế kỷ. Quý khách có thể ngồi nhâm nhi thưởng thức một ly cà phê tại quán Café phố Cổ (chi phí tự túc).</p>
                <p>Nghỉ đêm tại Đồng Văn.</p>
                <h3>3.	NGÀY 02: ĐỒNG VĂN - MÈO VẠC - HÀ GIANG (ĂN SÁNG, TRƯA, TỐI)</h3>
                <p>Sáng: Quý khách ăn sáng, tự do thăm quan mua sắm tại chợ Đồng Văn.</p>
                <p>08h00: Trả phòng khách sạn và lên xe đi thăm quan:</p>
                <p>- Chinh phục đèo Mã Pì Lèng trên đường đi Mèo Vạc, cũng là đoạn đẹp nhất trên con đường mang tên "Đường Hạnh phúc". </p>
                <p>Chụp hình với vẻ đẹp hùng vĩ của hẻm vực Mã Pì Lèng sâu 800m - nơi địa hình bị chia cắt sâu nhất của Việt Nam. Sau đó tiếp tục về qua thị trấn Mèo Vạc để về Yên Minh.</p>
                <p>- Trải nghiệm ngồi thuyền thăm quan Hẻm Tu Sản ( Không bao gồm phí xe ôm chở xuống bến thuyền và vé thuyền 200.000đ/ khách)</p>
                <p>- Dừng chân chụp hình tại con đường đèo chữ M nổi tiếng của Mèo Vạc.</p>
                <p>- Thăm chợ Phiên Mèo Vạc (nếu vào sáng chủ nhật hàng tuần)</p>
                <p>Trưa: Đến Yên Minh, ăn trưa tại nhà hàng. Sau bữa trưa, Quý khách tiếp tục lên xe về .</p>
                <p>Trong trường hợp kịp thời gian, xe và hướng dẫn viên sẽ đưa Quý khách vào thăm quan Làng dệt Lanh Lùng Tám nổi tiếng với kỹ thuật dệt lanh của người HMông trắng ( lưu ý: đây là điểm không bắt buộc phải đi).</p>',
                'tour_sale' => '10%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 1,
                'guide_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Đà Nẵng - Rừng Dừa Bảy Mẫu - Hội An - Bà Nà Hills',
                'tour_image' => 'baNaHill.jpg',
                'start_day' => '2024-03-26',
                'time' => '3 ngày 2 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 5990000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Kết hợp Đà Nẵng, Rừng Dừa Bảy Mẫu, Hội An và Bà Nà Hills trong một chuyến đi là một trải nghiệm đa dạng về văn hóa, thiên nhiên và giải trí. Từ bãi biển đẹp và các điểm tham quan lịch sử ở Hội An, đến những khu rừng dừa bao quanh Đà Nẵng và cuối cùng là khu du lịch nổi tiếng Bà Nà Hills với cảnh quan ngoạn mục và những trải nghiệm giải trí độc đáo. Đây sẽ là một chuyến đi đáng nhớ cho du khách muốn khám phá vùng đất miền Trung nước Việt.',

                'tour_schedule' => '<h3>Ngày 1: TP.HCM - ĐÀ NẴNG - BÁN ĐẢO SƠN TRÀ - RỪNG DỪA BẢY MẪU - PHỐ CỔ HỘI AN ( • Ăn sáng • Ăn trưa )</h3>
                <p>Sáng: Hướng dẫn viên đón quý khách tại sân bay Tân Sơn Nhất hỗ trợ làm thủ tục lên máy bay đi Đà Nẵng. Chuyến bay dự kiến: VJ622 SGNDAD 07:00 - 08:25</p>
                <p>Đến Đà Nẵng, xe và HDV địa phương đón đoàn tới dùng bữa sáng tại nhà hàng.</p>
                <p>Sau bữa sáng đoàn khởi hành tham quan:</p>
                <p>- Bán Đảo Sơn Trà: Một món quà lớn mà thiên nhiên ưu ái ban tặng cho thành phố Đà Nẵng. Mang trong mình một vẻ đẹp nguyên sơ, hữu tình, bãi biển nước trong vắt, những tán cây xanh rợp bóng, nơi đây có không khí trong lành kết hợp cùng nguồn tài nguyên phong phú và là nơi thu hút rất nhiều khách du lịch trên cả nước.</p>
                <p>- Viếng Chùa Linh Ứng: Được xem là cõi Phật giữa chốn trần gian. Nơi có tượng Quan Âm cao nhất Việt Nam, được xem là một trong Tứ Trấn Đà thành.</p>
                <p>Trưa: Xe đưa đoàn đến nhà hàng dùng bữa trưa với đặc sản “Bánh tráng cuốn thịt heo”, mì Quảng, bánh bèo,...</p>
                <p>Sau đó, đoàn khởi hành về khách sạn 4* nhận phòng nghỉ ngơi.</p>
                <p>Chiều: Xe đưa Quý khách khởi hành vào Hội An, đoàn tham quan:</p>
                <p>- Rừng dừa Bảy Mẫu: Quý khách đi bộ dọc theo con đường làng 5 phút đến bến thuyền. Ngồi trên những chiếc thuyền thúng quý khách được tận mắt xem người dân địa phương quăng chài trên sông để đánh bắt cá & có thể tự tay trải nghiệm kỹ năng quăng chài của mình. Sau đó, xem những màn lắc thúng chai, thưởng thức kĩ năng “chém nước” đặc sắc của những ngư dân làng dừa thôn Vạn Lăng.</p>
                <p>- Thuyền thúng cập bến Nhà hàng sinh thái, nghỉ ngơi trên nhà lá. Quý khách tham quan tự do không gian khu du lịch sinh thái.</p>
                <p>14h00: Rời Rừng dừa bảy mẫu, đoàn di chuyển đến Phố Cổ Hội An:</p>
                <p>- Tại đây, du khách bách bộ tham quan Phố Cổ với: Chùa Cầu Nhật Bản, Nhà cổ hàng trăm năm tuổi, Hội Quán Phước Kiến & Xưởng thủ công mỹ nghệ…</p>
                <p>- Đoàn tự do thưởng thức các món đặc sản tại Hội An như: Cao Lầu, Mì Quảng…</p>
                <h3>Ngày 2: ĐÀ NẴNG - BÀ NÀ HILLS - CHECK IN CẦU VÀNG - CẦU RỒNG - CẦU TÌNH YÊU - CÁ CHÉP HÓA LONG - TẮM BIỂN MỸ KHÊ ( • Ăn sáng • Ăn tối )</h3>
                <p>Sáng: Quý khách dùng bữa điểm tâm sáng tại nhà hàng. Sau đó xe sẽ đưa đoàn đi tham quan:</p>
                <p>Chương trình: Khám phá Bà Nà Hills (chi phí chưa bao gồm từ 1.250.000vnđ/khách)</p>
                <p>- Tham quan KDL Bà Nà - Núi Chúa nơi có những khoảnh khoắc giao mùa bất ngờ Xuân - Hạ - Thu - Đông trong một ngày. Qúy khách sẽ tận hưởng cảm giác bồng bền khi ngồi trên Cabin lơ lững giữa chừng mây.</p>
                <p>- Viếng Chùa Linh Ứng với Tượng Phật Thích Ca cao 27m, viếng đền thờ Bà Chúa Mẫu Thượng Ngàn.</p>
                <p>- Công viên Fantasy Park với các trò chơi phiêu lưu mới lạ như: Vòng Quay Tình Yêu, Phi Công Skiver, Đường Đua Lửa, Ngôi Nhà Ma và Khu trưng bày hơn 40 tượng sáp những nhân vật nổi tiếng trên thế giới…</p>
                <p>Bảo Tàng Sáp (tự túc từ: 100.000đ) một trong những điểm nổi bật tại KDL Bà Nà là nơi tạc những bức tượng sáp của những nhân vật nổi tiếng trên thế giới, rất thú vị.</p>
                <p>Trưa: Đoàn dùng bữa trưa tại nhà hàng của KDL Bà Nà với menu buffet cơm Việt Nam (nếu quý Khách có tham gia gói tham quan Bà Nà)</p>
                <p>Đoàn tiếp tục hành trình tham quan và khám phá Bà Nà: Núi Chúa, Biệt thự cổ, Thác Cầu Vồng, suối Nai, Miếu Bà, đồi Vọng Nguyệt, Biệt thự Hoàng Lan,...</p>
                <p>13h00: Quý khách lên cáp treo di chuyển đến cây Cầu Vàng (Cầu bàn tay Phật). Từ trên cáp treo, quý khách sẽ thấy cây Cầu Vàng hiện ra giữa mây trời và núi non trùng điệp.</p>
                <p>15h00: Đoàn di chuyển xuống cáp treo, xe đưa đoàn về lại khách sạn nghỉ ngơi.</p>
                <p>16h00: Trên đường về xe đưa Quý khách vòng qua Cầu Rồng, lưu lại dấu ấn trên Cầu Tình Yêu, tản bộ thưởng thức không khí trong lành bên bờ Hàn Giang với tượng Cá Chép Hóa Rồng - Biểu tượng mong muốn vươn lên của người Đà Nẵng.  </p>
                <p>Tối: Đến giờ hẹn xe đưa đoàn đến nhà hàng dùng bữa tối. Quý khách tự do dạo chơi, thăm quan Cầu Tình yêu, Cá chép hóa rồng, dạo bộ đường Bạch Đằng. Ngắm và thưởng thức cầu Rồng phun nước và phun lửa lúc 21h (thứ 7/CN hàng tuần)</p>
                <p>Nghỉ đêm tại Đà Nẵng.</p>
                <h3>Ngày 3: ĐÀ NẴNG - CÔNG VIÊN KÌ QUAN THẾ GIỚI - NGŨ HÀNH SƠN - TP. HCM ( • Ăn sáng • Ăn trưa )</h3>
                <p>Sáng: Quý khách dùng điểm tâm sáng, tự do nghỉ ngơi, tắm biển Mỹ Khê, tắm hồ bơi tại khách sạn.</p>
                <p>Đoàn làm thủ tục trả phòng khách sạn. Đoàn khởi hành đi tham quan:</p>
                <p>- Công viên Kì Quan Thế Giới, là một tuyệt tác nằm trong tổ hợp của khách sạn Hòa Bình Green. Với diện tích khoảng 200 m2, công viên như một thế giới thu nhỏ với các kỳ quan nổi tiếng của các nước trên thế giới. Đến đây thì quý khách không cần phải đi đâu xa. Không cần phải đến thủ đô Paris xa xôi, cũng chẳng cần đến Đảo Liberty, cảng New York,…. hay bất kỳ đâu. Qúy khách vẫn có thể có thể thoải mái nhìn ngắm và chụp ảnh thỏa thích với những công trình kiến trúc ấn tượng trên thế giới.</p>
                <p>Trưa: Xe đưa đoàn đến nhà hàng dùng cơm trưa.</p>
                <p>Chiều: Đoàn tham quan:</p>
                <p>- Ngũ Hành Sơn & Làng Nghề Điêu Khắc Đá Non Nước với các pho tượng bằng đá được điêu khắc dưới bàn tay tài hoa của nghệ nhân nơi đây.</p>
                <p>Đến giờ hẹn đoàn khởi hành ra sân bay Đà Nẵng làm thủ tục bay về TP. Hồ Chí Minh, trên chuyến bay VJ633 17:40. Kết thúc hành trình tour du lịch Đà Nẵng 3 ngày 2 đêm.</p>',

                'tour_sale' => '15%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 2,
                'guide_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Phú Quốc - Vinwonder - Safari World - Hòn Thơm',
                'tour_image' => 'phuQuoc.jpg',
                'start_day' => '2024-05-01',
                'time' => '3 ngày 2 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 7390000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Phú Quốc là điểm nghỉ dưỡng, lặn biển, tham quan, và khám phá sinh thái tuyệt vời. Mũi Ông Đội, Đá Chào là thế giới san hô và cá biển sặc sỡ. Bãi Sao cát trắng mịn, dáng cong, nước xanh ngọc bích. Đặc sản danh tiếng cả nước là tiêu sọ, nước mắm, rượu sim, ngọc trai.',
                'tour_schedule' => '<h3>Ngày 1: TP HỒ CHÍ MINH - PHÚ QUỐC - HÒN THƠM - THỊ TRẤN HOÀNG HÔN - GRAND WORLD (Ăn trưa, chiều)</h3>
                <p>Quý khách tập trung tại Sân bay Tân Sơn Nhất, ga đi Trong Nước, hướng dẫn viên hỗ trợ làm thủ tục đáp chuyến bay đi Phú Quốc. </p>
                <p>Xe đón đoàn tại sân bay đưa đến nhà ga cáp treo An Thới tham quan Sun World Hon Thom Nature Park với những hoạt động thú vị:</p>
                <p>- Trải nghiệm cáp treo 3 dây vượt biển dài nhất thế giới - 7.899.9 mét.</p>
                <p>- Phấn khích tột độ cùng thử thách "Mộc Xà thịnh nộ" - trò chơi tàu lượn bằng gỗ đầu tiên tại Việt Nam, có tốc độ tối đa 80km/h với nhiều góc lượn ngoạn mục; đài quan sát "Mắt đại bàng" cao 120m - du khách như được bay lên không trung, thưởng ngoạn đại dương xanh ngắt bao la, những cánh rừng nhiệt đới xanh mướt, những đảo nhỏ nhấp nhô giữa biển trời khoáng đạt (trò chơi có thể tạm dừng vì lịch bảo trì)</p>
                <p>- Thỏa thích tắm biển Hòn Thơm: một trong những bãi biển “quyến rũ nhất hành tinh”, với bãi cát trắng mịn, hoang sơ, hàng dừa nghiêng soi bóng, màu nước biển xanh màu ngọc bích, phản chiếu long lanh dưới ánh nắng mặt trời.</p>
                <p>- Tham gia các hoạt động giải trí trên biển: kayak, jetski, dù lượn, phao chuối (chi phí tự túc).</p>
                <p>- Vui chơi tại công viên nước Aquatopia: một trong những công viên nước chủ đề hàng đầu Đông Nam Á, trải nghiệm 6 khu check-in chủ đề hấp dẫn mang phong cách thổ dân huyền bí.</p>
                <p>Lãng du trên con đường Thị trấn Hoàng Hôn - được thiết kế với kiến trúc độc đáo, rực rỡ sắc màu của một thị trấn châu Âu cổ kính: check-in 1001 kiểu bậc thang, Quảng trường La Mã, “kỳ quan” Khải Hoàn Môn, Tháp đồng hồ cao 75m - lấy ý tưởng từ tháp chuông St. Marks Campanile của Ý; chiêm ngưỡng Kiss Bridge - cây cầu nổi lên như một dải lụa giữa bờ biển trong xanh, với hai nhịp cầu vươn mình ôm trọn bờ cát trắng, hướng đến nhau, hợp vào làm một thể thống nhất nhưng không chạm nhau.</p>
                <p>Buổi tối, Quý khách có thể tự do khám phá một số hạng mục nổi bật tại “thành phố không ngủ” Grand World như: </p>
                <p>- Công viên Nghệ Thuật Đương Đại: sự giao thoa đặc sắc giữa nghệ thuật đương đại và thiên nhiên Đảo Ngọc.</p>
                <p>- Huyền thoại Tre: công trình tre lớn nhất Việt Nam.</p>
                <p>- Tản bộ bên dòng “kênh đào Venice” và nhìn ngắm những chiếc thuyền Gondola, khu phố shophouse lộng lẫy sắc màu, cổng lâu đài tráng lệ, ba cây cầu vòm bán nguyệt mang đậm kiến trúc châu Âu ...</p>
                <p>- Tham quan bảo tàng Gấu Teddy: lưu giữ nhiều hiện vật quý giá và tái hiện chuyến phiêu lưu hài hước của “nhà thám hiểm tài ba” Teddy Jones (chi phí tự túc)</p>
                <p>- Mãn nhãn với show diễn thực cảnh “Tinh Hoa Việt Nam” quy tụ hơn 200 diễn viên (chi phí tự túc)</p>
                <p>- Thưởng thức bữa tiệc ánh sáng đỉnh cao với show diễn “Sắc màu Venice”</p>
                <p>Nghỉ đêm tại Phú Quốc.</p>
                <h3>Ngày 2: VUI CHƠI THỎA THÍCH TẠI CÔNG VIÊN CHỦ ĐỀ VINWONDERS PHÚ QUỐC - KHU BẢO TỒN THIÊN NHIÊN SAFARI (Ăn sáng, trưa, chiều)</h3>
                <p>Quý khách bắt đầu hành trình trở về với thiên nhiên tại Vinpearl Safari Phú Quốc - Vườn thú bán hoang dã đầu tiên tại Việt Nam: với quy mô 180 ha, hơn 130 loài động vật quý hiếm, du khách thưởng thức các chương trình biểu diễn, chụp ảnh với động vật; trải nghiệm vườn thú mở trong rừng tự nhiên, gần gũi và thân thiện với con người.</p>
                <p>Buổi chiều, Quý khách tham quan khám phá Khu vui chơi giải trí VinWonders - Công viên chủ đề lớn nhất Việt Nam, quy mô hàng đầu Châu Á, du khách sẽ được:</p>
                <p>- Trải nghiệm 12 nền văn minh nhân loại từ cổ chí kim;</p>
                <p>- Khám phá 06 phân khu với hơn 100 hoạt động giải trí siêu độc lạ;</p>
                <p>- Cuồng nhiệt tại Công Viên Nước lớn nhất Đông Nam Á;</p>
                <p>- Chinh phục 20 trò chơi mạo hiểm khủng nhất hành tinh như đường trượt nhanh nhất thế giới “Cơn thịnh nộ của Zeus”, đường trượt khô “Cuộc chiến Chằn tinh” cao 15m đầu tiên của Việt Nam, đường trượt trong nhà tối “Chiến binh Đại bàng” và “Lời nguyền Ác long” - trò chơi tương tác trong nhà tối đầu tiên của Việt Nam,…</p>
                <p>- Ngỡ ngàng với show diễn triệu đô Once đẳng cấp thế giới;</p>
                <p>- Choáng ngợp trước thế giới đại dương huyền ảo với tầm nhìn vô cực qua tấm kính acrylic khổng lồ 8x25m bên trong Cung điện Hải vương - thủy cung hình rùa lớn nhất thế giới.</p>
                <p>Quý khách thưởng thức bữa tối tại VinWonders.</p>
                <p>Nghỉ đêm tại Phú Quốc.</p>
                <h3>Ngày 3:  PHÚ QUỐC - TP HỒ CHÍ MINH (Ăn sáng)</h3>
                <p>Quý khách dùng bữa sáng, thư giãn tại khách sạn đến giờ trả phòng. Sau đó, xe đưa đoàn tham quan và mua sắm đặc sản nổi tiếng tại Nhà thùng nước mắm Hồng Đức 1 / Khải Hoàn / Phụng Hưng, Đặc sản Đức Thạnh, Cơ sở sản xuất ngọc trai Phú Quốc - Trưng bày các trang sức bằng ngọc trai chính hiệu được nuôi cấy tại Phú Quốc. </p>
                <p>Xe đưa Quý khách ra sân bay đáp chuyến bay trở về TP Hồ Chí Minh. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.</p>',
                'tour_sale' => '15%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 3,
                'guide_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Nha Trang - Làng Chài Xưa - Biển Nhũ Tiên - Vinwonders',
                'tour_image' => 'nhaTrang.jpg',
                'start_day' => '2024-05-09',
                'time' => '4 ngày 3 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 3590000,
                'vehicle' => 'Xe khách',
                'tour_description' => 'Nha Trang với khí hậu ôn hòa, biển xanh trong quanh năm cùng những điểm vui chơi bậc nhất và không ngừng đổi mới hằng ngày luôn thu hút du khách gần xa. Đến với Nha Trang, du khách không chỉ tận hưởng những đợt gió biển trong nắng ấm mà còn có dịp thưởng thức hải sản tươi ngon cùng sự chào đón nồng hậu từ những người dân vùng biển nghĩa tình, cho Quý khách trải nghiệm khó quên tại vùng đất này.',
                'tour_schedule' => '<h3>Ngày 1 - TP. HỒ CHÍ MINH - PHAN THIẾT - NHA TRANG (Ăn sáng, trưa, chiều)</h3>
                <p>Quý khách tập trung tại Discovery (39 Nguyễn Huệ, Bến Nghé, Quận 1, Thành phố Hồ Chí Minh). Xe đưa đoàn khởi hành đi Nha Trang. Trên đường đi đoàn ghé tham quan:</p>
                <p>• Bảo tàng Làng Chài Xưa: mở ra không gian tương tác tái hiện Làng Chài Xưa Mũi Né với lịch sử 300 năm cái nôi của nghề làm nước mắm, trải nghiệm cảm giác lao động trên đồng muối, đi trên con đường rạng xưa, thăm phố cổ Phan Thiết, vào xóm lò tĩn, thăm nhà lều của hàm hộ nước mắm xưa, đắm chìm cảm xúc trong biển 3D và thích thú khi đi chợ làng chài xưa với bàn tính tay, bàn cân xưa thú vị.</p>
                <p>Đến Nha Trang, Quý khách dùng bữa tối, tự do khám phá thành phố biển về đêm. Nghỉ đêm tại Nha Trang.</p>
                <h3>Ngày 2 - NHA TRANG - BIỂN NHŨ TIÊN - VINWONDERS (Ăn sáng, trưa, tự túc ăn chiều)</h3>
                <p>Dùng bữa sáng tại khách sạn, xe đưa đoàn tham quan:</p>
                <p>• Biển Nhũ Tiên: đắm mình trong làn nước biển trong xanh, mát mẻ, được bao bọc bởi bãi cát dài trắng xóa và những hàng dừa lao xao trong gió. Với vẻ đẹp hoang sơ, thơ mộng, biển Nhũ Tiên tựa như nàng tiên đang ngủ vùi giữa không gian mênh mông của sóng, của gió, của núi và của mây.
                </p>
                <p>Buổi chiều, Quý khách tự do khám phá thành phố Nha Trang hoặc đăng ký tham quan Vinwonders Nha Trang đầy sắc màu (chi phí tự túc): ngắm toàn cảnh Vịnh Nha Trang từ đỉnh vòng xoay mặt trời lớn nhất Việt Nam, tham quan bộ sưu tập “kỳ hoa, dị thảo” tại đồi Vạn Hoa, khu vườn thú mở - vườn Quý Vương, tham gia các trò chơi tương tác và liên hoàn tại Quảng trường Thần Thoại hay Vùng đất yêu thương, xem phim 4D tại lâu đài Đại Dương, khám phá khu trò chơi cảm giác mạnh, khu trò chơi trong nhà hay tắm biển, tắm hồ bơi lớn nhất Đông Nam Á… và thưởng thức chương trình biểu diễn Nhạc Nước hiện đại. Đoàn tự do dùng bữa tối tại đây và tiếp tục tham gia các hoạt động buổi tối tại Vinpearl đến giờ về lại đất liền. Nghỉ đêm tại Nha Trang</p>
                <h3>Ngày 3 - NHA TRANG - I-RESORT - THÁP BÀ PONARGAR (Ăn sáng, ăn trưa, chiều)</h3>
                <p>Dùng bữa sáng tại khách sạn, xe đưa đoàn tham quan và thư giãn tại:</p>
                <p>• Suối khoáng nóng I-Resort: với không gian yên tĩnh, cây cối xanh tươi, I-Resort sẽ hiện ra như một bức tranh thiên nhiên đậm chất Việt, Quý khách sẽ được trải nghiệm dịch vụ tắm khoáng thư giãn. Ngoài ra, Quý khách còn có thể tắm bùn khoáng hoặc massage cho làn da thêm tươi trẻ.
                </p>
                <p>Buổi chiều, đoàn tiếp tục tham quan các thắng cảnh tại thành phố biển:</p>
                <p>• Tháp Bà Ponagar: công trình tiêu biểu cho nghệ thuật kiến trúc và điêu khắc tín ngưỡng tôn giáo bậc nhất của dân tộc Chăm tại Nha Trang.</p>
                <p>• Hòn Chồng: một thắng cảnh tự nhiên nằm ở bờ biển phía Bắc thành phố Nha Trang. Nơi đây du khách có thể di chuyển vài bước đã chạm đến sóng biển hoặc chân đồi. Nhiều người bảo, Hòn Chồng là nơi giao nhau giữa biển và núi. Quần thể đá Hòn Chồng từ lâu đã trở thành điểm du lịch giàu tính nhân văn. Điều kỳ thú là những tảng đá lớn nằm chồng chất lên nhau bao đời nay nhưng sóng biển và mưa gió không thể xô ngã.
                </p>
                <p>• Ngọc trai Long Beach Pearl (đường Trương Hán Siêu): tham quan, mua sắm các sản phẩm từ ngọc trai - báu vật khơi xa kết hợp cùng sự sáng tạo của người nghệ nhân tạo thành những sản phẩm trang sức cao cấp, chất lượng cao. Không chỉ dành riêng cho phái nữ, Long Beach Pearl còn chế tác những chiếc vòng tay dây da ngọc trai dành cho nam giới. </p>
                <p>Nghỉ đêm tại Nha Trang.</p>
                <h3>Ngày 4 - NHA TRANG - TP. HỒ CHÍ MINH (Ăn sáng, trưa)</h3>
                <p>Sau khi dùng bữa sáng, xe đưa đoàn về lại thành phố Hồ Chí Minh, trên đường Quý khách ghé Ninh Thuận mua các sản phẩm đặc sản (nho, tỏi) của vùng đất nắng và gió nơi đây về làm quà cho người thân. Đến điểm đón ban đầu, chia tay đoàn và kết thúc chương trình du lịch.</p>',
                'tour_sale' => '5%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 2,
                'guide_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Hà Nội - Sapa - Fansipan - Hạ Long - Ninh Bình - Tràng An',
                'tour_image' => 'haLong.jpg',
                'start_day' => '2024-05-05',
                'time' => '7 ngày 6 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 10390000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Nói đến vùng đất Quảng Ninh, không thể không nhắc đến Vịnh Hạ Long - nơi được UNESCO Công nhận hai lần là Di sản thiên nghiên thế giới với nhiều đảo, hòn và hang động đẹp nổi tiếng. Bên cạnh đó Quảng Ninh còn có Bãi Cháy - là một bãi tắm rộng và đẹp nằm sát bờ vịnh Hạ Long; Núi Yên Tử - vốn là một thắng cảnh thiên nhiên - và cũng là nơi lưu giữ nhiều di tích lịch sử với mệnh danh "đất tổ Phật giáo Việt Nam"; và nhiều di tích, danh thắng nổi tiếng, hấp dẫn khác như đảo Tuần Châu, Cô Tô...',
                'tour_schedule' => '<h3>Ngày 1 - TPHCM - SÂN BAY NỘI BÀI (HÀ NỘI) 00 bữa ăn: (Tự túc ăn ngày đầu tiên)</h3>
                <p>Quý khách tập trung tại sân bay Tân Sơn Nhất (ga trong nước), hướng dẫn làm thủ tục cho Quý khách đáp chuyến bay đi Hà Nội. Đến sân bay Nội Bài, xe đưa quý khách về trung tâm Hà Nội nhận phòng khách sạn nghỉ ngơi. </p>
                <p>Nghỉ đêm tại Hà Nội.</p>
                <h3>Ngày 2 - HÀ NỘI - SAPA - BẢN CÁT CÁT 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng. Xe khởi hành đưa Quý khách đi tham quan: </p>
                <p>- Lăng Hồ Chủ Tịch (không viếng vào thứ 2, thứ 6 hàng tuần và giai đoạn bảo trì định kì hàng năm) tham quan và tìm hiểu cuộc đời và sự nghiệp của vị cha già dân tộc tại Nhà Sàn Bác Hồ, Bảo Tàng Hồ Chí Minh, Chùa Một Cột.</p>
                <p>Tiếp tục hành trình, Quý khách khởi hành đi Sapa theo cao tốc Hà Nội - Lào Cai. Trên đường, Quý khách dùng cơm trưa tại nhà hàng địa phương. Đến nơi, Quý khách tham quan:</p>
                <p>- Bản Cát Cát - đẹp như một bức tranh giữa vùng phố cổ Sapa, nơi đây thu hút du khách bởi cầu treo, thác nước, guồng nước và những mảng màu hoa mê hoặc du khách khi lạc bước đến đây. Thăm những nếp nhà của người Mông, Dao, Giáy trong bản, du khách sẽ không khỏi ngỡ ngàng trước vẻ đẹp mộng mị của một trong những ngôi làng cổ đẹp nhất Sapa. Tại đây Quý khách xem chương trình biểu diễn văn nghệ của người HMông.</p>
                <p>Quý khách dùng cơm tối và nhận phòng nghỉ ngơi hoặc tự do dạo phố ngắm nhà thờ Đá Sapa, tự do thưởng thức đặc sản vùng cao như: thịt lợn cắp nách nướng, trứng nướng, rượu táo mèo, giao lưu với người dân tộc vùng cao.</p>
                <p>Nghỉ đêm tại Sapa</p>
                <h3>Ngày 3 - SAPA - FANSIPAN LEGEND - ĐÈO Ô QUY HỒ 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách dùng điểm tâm sáng tại khách sạn. xe đưa đoàn ra ga Sapa, Quý khách trải nghiệm đến khu du lịch Fansipan Legend bằng Tàu hỏa leo núi Mường Hoa hiện đại nhất Việt Nam với tổng chiều dài gần 2000m, thưởng ngoạn bức tranh phong cảnh đầy màu sắc của cánh rừng nguyên sinh, thung lũng Mường Hoa.</p>
                <p>- Chinh phục đỉnh núi Fansipan với độ cao 3.143m hùng vĩ bằng cáp treo (chi phí tự túc). </p>
                <p>- Lễ Phật tại chùa Trình hay cầu phúc lộc, bình an cho gia đình tại Bích Vân Thiền Tự trong hệ thống cảnh quan tâm linh trên đỉnh Fansipan.</p>
                <p>Tiếp tục hành trình, Quý khách dùng cơm trưa và tham quan: </p>
                <p>- Chinh phục đèo Ô Quy Hồ - con đèo đẹp, hùng vĩ và dài nhất trong Tứ Đại Đỉnh Đèo miền Bắc.</p>
                <p>- Khu du lịch Cổng Trời Ô Quy Hồ - một trong những điểm săn mây, ngắm hoàng hôn cực đẹp tại Sapa.</p>
                <p>Quý khách dùng cơm tối tại Sapa và tự do nghỉ ngơi.</p>
                <p>Nghỉ đêm tại Sapa.</p>
                <h3>Ngày 4 - SAPA - LÀO CAI - HÀ NỘI 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe khởi hành đưa Quý khách về Hà Nội, trên đường dừng tham quan mua sắm tại Siêu thị Du lịch nông nghiệp OCOP Phú Thọ - chợ Tp Việt Trì và dùng cơm trưa tại nhà hàng địa phương. Đến Hà Nội nhận phòng khách sạn nghỉ ngơi hoặc tự do đi tham quan Hồ Hoàn Kiếm ngắm bên ngoài Tháp Rùa, Đền Ngọc Sơn, Cầu Thê Húc.</p>
                <p>Nghỉ đêm tại Hà Nội.  </p>
                <h3>Ngày 5 - HÀ NỘI - YÊN TỬ - HẠ LONG 03 Bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng. Xe khởi hành đưa Quý khách đến thành phố biển Hạ Long theo quốc lộ 18, trên đường dừng ăn trưa và tham quan vùng đất thiêng Yên Tử: </p>
                <p>- Tham quan chụp hình Làng Nương và dùng bữa trưa tại Cơm Quê </p>
                <p>- Quý khách lên cáp treo du ngoạn thắng cảnh thiên nhiên Đông Yên Tử (chi phí cáp treo tự túc), nơi còn lưu giữ nhiều di tích lịch sử mệnh danh “Đất tổ Phật giáo Việt Nam”, chiêm bái chùa Một Mái, chùa Hoa Yên - nơi tu hành của Phật Hoàng Trần Nhân Tông khai sinh ra dòng mới Thiền Phái Trúc Lâm, nằm trên lưng chừng núi ở độ cao 516m. Theo dấu chân Phật Hoàng viếng Chùa Đồng có tên Thiên Trúc Tự (chùa Cõi Phật), tọa lạc ở đỉnh cao nhất dãy Yên Tử (1.068m) - ngôi chùa bằng đồng lớn nhất Việt Nam.</p>
                <p>Đến Hạ Long, Quý khách tham quan mua sắm tại Trung tâm Mỹ Ngọc - Trung tâm Ngọc trai lớn nhất miền bắc Việt Nam.Tới đây Quý khách chiêm ngưỡng vẻ đẹp sang trọng, đủ các màu sắc hấp dẫn của những viên ngọc trai được nuôi trong lòng Di sản - Kỳ quan thiên nhiên thế giới vịnh Hạ Long tại phòng trưng bày sản phẩm. Quý khách có thể lựa chọn cho mình và người thân những đồ trang sức ngọc trai Hạ Long như ý và những sản phẩm lưu niệm được chế tác từ vỏ trai, sản phẩm đạt chất lượng OCOP 5 sao cấp Quốc gia đầu tiên của Việt Nam
                </p>
                <p>Dùng cơm chiều và nhận phòng khách sạn nghỉ ngơi. Buổi tối, Quý khách tự do khám phá nhiều hoạt động dịch vụ giải trí sôi nổi tại “phố cổ” Bãi Cháy - nằm cạnh công viên Sun World Hạ Long từ những ẩm thực đường phố đến các quán cà phê siêu dễ thương như Hòn Gai Coffee & Lounge hay thoải mái bung xõa tại The Mini Bar, Brothers Pub,…</p>
                <p>Nghỉ đêm tại Hạ Long. </p>
                <h3>Ngày 6 - VỊNH HẠ LONG - ĐỘNG THIÊN CUNG - NINH BÌNH 03 Bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe đưa quý khách ra bến tàu, xuống thuyền du ngoạn Vịnh Hạ Long - Thắng cảnh thiên nhiên tuyệt đẹp và vô cùng sống động, được UNESCO công nhận là di sản thiên nhiên Thế giới năm 1994.</p>
                <p>- Động Thiên Cung là một trong những động đẹp nhất ở Hạ Long. Vẻ đẹp nguy nga và lộng lẫy bởi những lớp thạch nhũ và những luồng ánh sáng lung linh.
                </p>
                <p>- Từ trên tàu ngắm nhìn các hòn đảo lớn nhỏ trong Vịnh Hạ Long: Hòn Gà Chọi, Hòn Lư Hương.</p>
                <p>Xe đón Quý khách tại bến thuyền khởi hành đi Ninh Bình - vùng đất mệnh danh là “Nơi mơ đến, chốn mong về” với nhiều di tích văn hóa, thiên nhiên vô cùng đặc sắc.
                </p>
                <p>Buổi tối quý khách tự do khám phá Phố cổ Hoa Lư, một không gian check-in cổ, đẹp, trầm mặc đẹp trở nên lung linh, huyền ảo hơn với sắc màu của những chiếc đèn lồng và Bảo Tháp trên Hồ Kỳ Lân; trải nghiệm nhiều hoạt động trò chơi dân gian và nhiều loại hình văn hóa nghệ thuật từ dân tộc như múa rối nước, nhảy múa Tắc Xình, hát xẩm, ... đến những buổi trình diễn acoustic sẽ được diễn ra vào các buổi tối ngày cuối tuần.</p>
                <p>Nghỉ đêm tại Ninh Bình.</p>
                <h3>Ngày 7 - NINH BÌNH - TRÀNG AN - BÁI ĐÍNH - SÂN BAY NỘI BÀI 02 Bữa ăn: (Sáng, Trưa)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe đưa Quý khách đi tham quan: </p>
                <p>- Khu Du Lịch Tràng An:  Quý khách lên thuyền truyền thống đi tham quan thắng cảnh hệ thống núi đá vôi hùng vĩ và các thung lũng ngập nước, thông với nhau bởi các dòng suối tạo nên các hang động ngập nước quanh năm. Điểm xuyến trong không gian hoang sơ, tĩnh lặng là hình ảnh rêu phong, cổ kính của các mái đình, đền, phủ nằm nép mình dưới chân các dãy núi cao. 
                </p>
                <p>- Viếng Chùa Bái Đính - một quần thể chùa với nhiều kỷ lục Việt Nam như pho tượng phật Di Lặc bằng đồng nặng 80 tấn, hành lang với 500 tượng vị La Hán, tòa Bảo Tháp cao 99m…
                </p>
                <p>Xe khởi hành đưa Quý khách ra sân bay Nội Bài làm thủ tục đón chuyến bay về Tp.HCM. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.</p>',
                'tour_sale' => '10%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 1,
                'guide_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Côn Đảo Huyền Thoại - Hành Hương Vùng Đất Tâm Linh',
                'tour_image' => 'conDao.jpg',
                'start_day' => '2024-05-16',
                'time' => '2 ngày 1 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 5390000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Đến với Côn Đảo - vùng đất thiêng liêng của Tổ Quốc, Quý khách sẽ được tìm hiểu về lịch sử oai hùng qua các di tích, thăm muôn vàn cảnh đẹp hoang sơ, kỳ bí và thưởng trọn nét yên bình của vùng biển hiền hòa.',
                'tour_schedule' => '<h3>Ngày 1 - TP.HCM - CÔN ĐẢO OAI HÙNG (Ăn trưa, chiều)</h3>
                <p>Quý khách tập trung tại sân bay Tân Sơn Nhất (ga trong nước), Hướng dẫn viên làm thủ tục cho đoàn đáp chuyến bay đến Côn Đảo. </p>
                <p>Đến nơi, xe và Hướng dẫn viên đưa đoàn theo con đường quanh co trải dài hàng cây xanh nối liền từ sân bay về trung tâm thị trấn, chiêm ngưỡng cảnh quan thiên nhiên của núi cao hùng vĩ, xa xa là những hòn đảo ẩn hiện trong sắc xanh của biển cả …  </p>
                <p>Quý khách tham quan các Di tích Văn hóa - Lịch sử hào hùng:</p>
                <p>- Bảo tàng Côn Đảo: nơi trưng bày những kỷ vật về năm tháng lịch sử hào hùng của dân tộc Việt Nam.</p>
                <p>- Dinh Chúa Đảo: nơi sống và làm việc các đời chúa đảo từ năm 1862 - 1975.</p>
                <p>- Trại Phú Hải: trại giam lớn và cổ nhất của hệ thống nhà tù Côn Đảo.</p>
                <p>- Chuồng cọp kiểu Pháp (trại Phú Tường): khám phá hệ thống chuồng Cọp kiên cố được xây dựng ẩn giữa các tòa nhà như mê cung.</p>
                <p>- Chuồng cọp kiểu Mỹ (trại Phú Bình): với các dãy phòng giam nhỏ hẹp và ẩm thấp được xây dựng vào năm 1971. Nơi đây chủ yếu tra tấn tù nhân về tinh thần và cũng là nơi nhận được tin Sài Gòn giải phóng đầu tiên. 
             </p>
                <p>Buổi chiều, Quý khách tham quan:</p>
                <p>- An Sơn Miếu: nghe kể về giai thoại thứ phi Phi Yến với câu hát ru nổi tiếng “Gió đưa cây cải về trời, rau răm ở lại chịu đời đắng cay”. </p>
                <p>- Ngắm nhìn vẻ đẹp của hồ An Hải tham quan Vân Sơn Tự - Ngôi chùa Phật giáo duy nhất ở Côn Đảo như rực rỡ trong bức tranh thủy mặc của mái ngói đỏ tươi giữa nền xanh của rừng cây cổ thụ</p>
                <p>Buổi tối, Quý khách viếng mộ cô Sáu nổi tiếng linh thiêng về đêm.</p>
                <p>Quý khách tự do tản bộ khám phá Côn Đảo yên bình về đêm; thưởng thức cà phê Côn Sơn ngắm cầu tàu 914 hoặc kem dừa đất Côn Đảo thơm ngon, cuốn khách.</p>
                <p>Nghỉ đêm tại Côn Đảo.</p>
                <h3>Ngày 2 - CÔN ĐẢO - TP.HCM (Ăn sáng)</h3>
                <p>Quý khách dùng bữa sáng tại khách sạn, tự do nghỉ ngơi thư giãn và tắm biển. </p>
                <p>Xe đưa Quý khách khởi hành ra sân bay Côn Đảo trở về TP.Hồ Chí Minh. Chia tay Quý khách và kết thúc chuyến du lịch tại sân bay Tân Sơn Nhất.</p>',
                'tour_sale' => '25%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 3,
                'guide_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Hà Nội - Hà Giang - Đồng Văn - Cao Bằng',
                'tour_image' => 'dongVan.jpg',
                'start_day' => '2024-05-16',
                'time' => '7 ngày 6 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 10990000,
                'vehicle' => 'Máy bay',
                'tour_description' => ' Hành trình khám phá vòng cung Đông Bắc sẽ đưa du khách tham quan những điểm đến thú vị của cao nguyên Đá Đồng Văn, cột cờ Lũng Cú uy nghiêm, đèo Mã Pí Lèng hùng vĩ. Và bên cạnh đó Cao Bằng cũng không kém phần hấp dẫn với Thác Bản Giốc cuồn cuộn và một Hồ Ba Bể trong xanh, tuyệt đẹp tại Bắc Kạn.',
                'tour_schedule' => ' <h3>Ngày 1 - SB NỘI BÀI – HÀ NỘI 00 bữa ăn: (Tự túc ăn ngày đầu tiên)</h3>
                                    <p>Quý khách tập trung tại sân bay Tân Sơn Nhất (Ga nội địa), hướng dẫn viên hỗ trợ khách làm thủ tục đáp chuyến bay đi Hà Nội. Đến sân bay Nội Bài, xe và HDV Vietravel đón Quý khách đi Hà Nội nhận phòng khách sạn nghỉ ngơi hoặc tự do đi tham quan.</p>
                                    <p>Nghỉ đêm tại Hà Nội.  </p>
                                    <h3>Ngày 2 - HÀ NỘI - HÀ GIANG 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                                    <p>Quý khách ăn sáng và trả phòng.  Xe khởi hành đưa Quý khách đi tham quan:</p>
                                    <p>- Dạo 1 vòng quanh Hồ Hoàn Kiếm ngắm Tháp Rùa, Đền Ngọc Sơn, Cầu Thê Húc.</p>
                                    <p>Tiếp tục hành trình đến với vùng đất Hà Giang - nơi có chè Shan Tuyết, rượu mật ong và thắng cố, xứ sở của đào phai, hoa lê, truyền thống và náo nhiệt trong buổi chợ phiên… Đến nơi, Quý khách tham quan:</p>
                                    <p>- Nghĩa Trang Liệt Sĩ Quốc Gia Vị Xuyên - nơi đây từ năm 1979 đến năm 1989, tại mảnh đất Hà Giang, đặc biệt tại địa phận huyện Vị Xuyên đã trở thành “Biển lửa” trên mặt trận chống quân xâm lược. Trong cuộc chiến đấu bảo vệ Tổ quốc, hàng ngàn chiến sĩ đã anh dũng hy sinh.</p>
                                    <p>- Cột mốc số 0: đánh dấu điểm khởi công của con đường Hạnh Phúc nối Hà Giang và 4 huyện vùng cao nguyên đá</p>
                                    <p>Xe đưa Quý khách về khách sạn nhận phòng và dùng cơm chiều, hoặc tự do thưởng thức món Chè Shan Tuyết, mật ong Bạc Hà và ấm bụng với món cháo Ấu Tẩu.</p>
                                    <p>Nghỉ đêm tại Hà Giang.</p>
                                    <h3>Ngày 3 - HÀ GIANG - QUẢN BẠ - YÊN MINH – ĐỒNG VĂN 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                                    <p>Ăn sáng và trả phòng khách sạn. Xe và hướng dẫn viên khởi hành đưa Quý khách khám phá Công viên địa chất toàn cầu Cao nguyên đá Đồng Văn (Bao gồm địa giới hành chính của 4 huyện phía Bắc tỉnh Hà Giang với diện tích 2.356 km2) với những điểm check-in đặc sắc:</p>
                                    <p>- Ngắm Núi Đôi Quản Bạ - biểu tượng vẻ đẹp của vùng cao nguyên đá, Quý khách đi bộ lên Cổng trời Quản Bạ ngắm toàn bộ vẻ đẹp thơ mộng của thị trấn Tam Sơn và hít thở bầu không khí mát mẻ trong lành quanh năm.</p>
                                    <p>Sau khi ăn trưa, Quý khách tiếp tục hành trình đi tham quan:</p>
                                    <p>- Dốc Thẩm Mã – những con đường đèo khúc khuỷu, quanh co tựa như một dải lụa uốn lượn mềm mại trải dài theo triền núi.</p>
                                    <p>- Làng văn hóa Lũng Cẩm – Thung lũng Sủng Là: được mênh danh là “ đóa hoa hồng” trong lòng cao nguyên đá luôn cuốn hút du khách bởi vẻ đẹp hết sức bình dị, mộc mạc. Nơi đây từng là bối cảnh quay bộ phim đoạt giải phim truyện nhựa xuất sắc nhất của Hội điện ảnh Việt Nam - phim “Chuyện của Pao”, du khách tìm hiểu văn hóa người Mông.</p>
                                    <p>- Khu kiến trúc nghệ thuật nhà Vương (Dinh Vua Mèo), công trình kiến trúc đẹp, hiếm có và rất độc đáo của vùng cao nguyên núi đá.</p>
                                    <p>- Chinh phục Cột cờ Lũng Cú hay còn gọi là đỉnh núi Rồng, nơi địa đầu Cực Bắc Tổ Quốc với lá cờ 54m2 tượng trưng cho 54 dân tộc anh em. Từ trên cao, Quý khách sẽ ngắm những mảng xanh mát của ruộng bậc thang và các bản làng Lô Lô Chải, Thèn Pả, xa xa có 2 hồ nước phía xa, nằm đối xứng nhau được người dân nơi đây ví như “mắt rồng”.</p>
                                    <p>Quý khách dùng cơm chiều và nhận phòng khách sạn nghỉ ngơi.</p>
                                    <p>Nghỉ đêm tại Đồng Văn hoặc Mèo Vạc</p>
                                    <p>Ghi chú: Điểm tham quan Cột Cờ Lũng Cú sẽ không tham quan được trong trường hợp thời tiết không thuận lợi.</p>
                                    <h3>Ngày 4 - ĐỒNG VĂN – MÈO VẠC – CAO BẰNG 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                                    <p>Ăn sáng và trả phòng khách sạn. Xe và hướng dẫn viên khởi hành đi tham quan:</p>
                                    <p>- Đèo Mã Pì Lèng: Một trong Tứ đại đỉnh đèo hùng vĩ của miền Bắc Việt Nam dài 24km, dừng chân nghỉ ngơi, chụp ảnh nơi bị chia cắt về địa hình sâu nhất của Việt Nam. Trên đường dừng chụp hình tại tượng đài Thanh Niên trước Bảo tàng Con Đường Hạnh Phúc, Mã Pí Lèng café (chi phí tự túc), ngắm con đường hạnh phúc và toàn cảnh dòng sông Nho Quế từ trên cao.</p>
                                    <p>- Dừng chụp hình lưu niệm tại Làng Văn hóa Du lịch Cộng đồng Pả Vi, nằm dưới chân đèo Mã Pì Lèng, bên cạnh dòng sông xanh nho Quế. Nơi đây thu hút sự quan tâm của du khách bởi thiết kế ấn tượng của cổng chào hình dáng chiếc khèn Mông khổng lồ, những homestay mang đậm nét văn hóa, phong cách của người Mông,…  </p>
                                    <p>Tiếp tục hành trình đến Cao Bằng, Quý khách dừng tại Bảo Lạc dùng cơm trưa tại nhà hàng địa phương. Đến Cao Bằng, Quý khách nhận phòng nghỉ ngơi và dùng cơm tối.</p>
                                    <p>Nghỉ đêm tại Cao Bằng.</p>
                                    <h3>Ngày 5 - THÁC BẢN GIỐC – ĐỘNG NGƯỜM NGAO – LÀNG ĐÁ KHUỔI KY 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                                    <p>Quý khách ăn sáng. Xe khởi hành đưa Quý khách đi tham quan:</p>
                                    <p>- Thác Bản Giốc - một trong những thác nước đẹp nhất của Việt Nam có đường ranh giới tự nhiên với Trung Quốc. Thác nước đẹp và hùng vỹ với dòng nước cuồn cuộn chảy quanh năm bắt nguồn từ dòng sông Quây Sơn nước xanh ngắt một màu ngọc Bích. Đẹp nhất vào mùa lúa chín (tháng 9) khung cảnh đường vào thác sáng rực một màu vàng óng và dòng nước trắng xóa mềm mại như tóc tiên càng làm khung cảnh thêm nên thơ, hùng vỹ.</p>
                                    <p>- Chùa Phật Tích Trúc Lâm Bản Giốc: được xây dựng theo lối kiến trúc thuần Việt trên diện tích 3 ha, đây là ngôi chùa đầu tiên được xây dựng tại nơi biên cương phía Bắc của tổ quốc.</p>
                                    <p> Quý khách dùng cơm trưa và tiếp tục tham quan:</p>
                                    <p>- Động Ngườm Ngao - một động lớn được hình thành từ sự phong hoá lâu đời của đá vôi; bước vào động, du khách như bước vào một thế giới kỳ ảo, choáng ngợp trước những dải thạch nhũ muôn màu, những tượng đá quyến rũ với nhiều kiểu dáng khác nhau mang dáng dấp hình người, cây rừng, súc vật..., các nhũ đá thả từ trên xuống hay mọc từ dưới đất lên vô cùng sống động</p>
                                    <p>- Làng Đá Khuổi Ky: với một ý niệm đá là khởi nguồn của sự sống và trung tâm của vũ trụ mà người Tày ở Trùng Khánh luôn gìn giữ ngôi nhà sàn, nơi sinh hoạt xung quanh mình là đá, điều đó đã tạo nên điểm nhấn cho ngôi làng nhìn từ xa như một bức tranh vững chãi giữa mây trời núi non hùng vỹ. Đến đây vào homestay và thưởng thức tách café giữa khung cảnh núi rừng sẽ cho quý khách cảm giác bình yên đến lạ.</p>
                                    <p>Xe đưa Quý khách về thành phố Cao Bằng dùng cơm tối tại nhà hàng địa phương, mua sắm đặc sản địa phương: Miến dong, thạch đen, lạp xưởng, ... Quý khách nhận phòng khách sạn nghỉ ngơi.</p>
                                    <p>Nghỉ đêm tại Cao Bằng.</p>
                                    <h3>Ngày 6 - CAO BẰNG – KHU DI TÍCH PÁC PÓ – BA BỂ 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                                    <p>Quý khách ăn sáng và trả phòng khách sạn. Xe khởi hành đưa Quý khách tham quan:</p>
                                    <p>- Khu di tích Pác Pó - nơi chủ tịch Hồ Chí Minh từng sống và làm việc với khung cảnh nên thơ, hữu tình. Dòng suối trong xanh, thơ mộng trước cửa hang được Bác đặt tên là Suối Lê Nin, ngọn núi hùng vĩ cạnh bên là Núi Các Mác</p>
                                    <p>- Khu di tích Kim Đồng - Nơi ghi nhớ anh hùng liệt sỹ có công bảo vệ cán bộ cách mạng trong thời kỳ kháng chiến.</p>
                                    <p>Sau khi dùng cơm trưa, Quý khách khởi hành đi Bắc Cạn, nhận phòng và nghỉ ngơi tại Ba Bể.</p>
                                    <p>Nghỉ đêm tại Ba Bể.</p>
                                    <h3>Ngày 7 - BA BỂ - BẮC CẠN – HÀ NỘI 02 bữa ăn: (Sáng, Trưa)</h3>
                                    <p>Quý khách ra bến thuyền tham quan:</p>
                                    <p>- Hồ Ba Bể (2 tiếng) – Khám phá bức tranh sơn thủy hữu tình vô cùng sống động, mặt nước hồ trong xanh như gương làm quyến rũ biết bao du khách làm quyến rũ biết bao du khách, thiên nhiên và con người như hòa quyện vào nhau, ngắm Ao Tiên, Đền An Mã, hòn Bà Góa. Thuyền dừng trên mặt hồ, Quý khách giao lưu hát then và đàn tính của người Tày, hoặc tham gia chèo thuyền kayak xung quanh đảo Bà Góa (chi phí tự túc).</p>
                                    <p>Quý khách trả phòng và dùng cơm trưa. Xe khởi hành đưa Quý khách đi Hà Nội. Đến sân bay Nội Bài, Hướng dẫn viên hỗ trợ Quý khách làm thủ tục đáp chuyến bay về Tp.HCM. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất. </p>
                                    <h4>KẾT THÚC CHƯƠNG TRÌNH, TẠM BIỆT QUÝ KHÁCH!</h4>',
                'tour_sale' => '5%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 1,
                'guide_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'tour_name' => 'Fanxibang - Sapa - Hạ Long - Tràng An',
                'tour_image' => 'trangAn.png',
                'start_day' => '2024-03-26',
                'time' => '7 ngày 6 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 11790000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Khu du lịch Tràng An nằm trong Quần thể danh thắng Tràng An (tỉnh  Ninh Bình) chỉ cách thủ đô Hà Nội chưa đầy 100km. Có lẽ vì thế mà nơi đây được đông đảo   du khách miền Bắc chọn làm điểm du lịch sinh thái, tâm linh mỗi dịp nghỉ hè, nghỉ lễ hay cuối tuần. Cùng khám phá xem nơi đây có đúng là “tiên cảnh chốn nhân gian” như du khách vẫn thường nhắc đến không nhé!',
                'tour_schedule' => '<h3>Ngày 1 - TPHCM – SÂN BAY NỘI BÀI (HÀ NỘI) 00 bữa ăn: (Tự túc ăn ngày đầu tiên)</h3>
                <p>Quý khách tập trung tại sân bay Tân Sơn Nhất (ga trong nước), hướng dẫn làm thủ tục cho Quý khách đáp chuyến bay đi Hà Nội. Đến sân bay Nội Bài, xe đưa quý khách về trung tâm Hà Nội nhận phòng khách sạn nghỉ ngơi. </p>
                <p>Nghỉ đêm tại Hà Nội.</p>
                <h3>Ngày 2 - HÀ NỘI – SAPA – BẢN CÁT CÁT 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng. Xe khởi hành đưa Quý khách đi tham quan:</p>
                <p>- Lăng Hồ Chủ Tịch (không viếng vào thứ 2, thứ 6 hàng tuần và giai đoạn bảo trì định kì hàng năm) tham quan và tìm hiểu cuộc đời và sự nghiệp của vị cha già dân tộc tại Nhà Sàn Bác Hồ, Bảo Tàng Hồ Chí Minh, Chùa Một Cột.</p>
                <p>Tiếp tục hành trình, Quý khách khởi hành đi Sapa theo cao tốc Hà Nội – Lào Cai. Trên đường, Quý khách dùng cơm trưa tại nhà hàng địa phương. Đến nơi, Quý khách tham quan:</p>
                <p>- Bản Cát Cát - đẹp như một bức tranh giữa vùng phố cổ Sapa, nơi đây thu hút du khách bởi cầu treo, thác nước, guồng nước và những mảng màu hoa mê hoặc du khách khi lạc bước đến đây. Thăm những nếp nhà của người Mông, Dao, Giáy trong bản, du khách sẽ không khỏi ngỡ ngàng trước vẻ đẹp mộng mị của một trong những ngôi làng cổ đẹp nhất Sapa. Tại đây Quý khách xem chương trình biểu diễn văn nghệ của người HMông.</p>
                <p>Quý khách dùng cơm tối và nhận phòng nghỉ ngơi hoặc tự do dạo phố ngắm nhà thờ Đá Sapa, tự do thưởng thức đặc sản vùng cao như: thịt lợn cắp nách nướng, trứng nướng, rượu táo mèo, giao lưu với người dân tộc vùng cao.</p>
                <p>Nghỉ đêm tại Sapa</p>
                <h3>Ngày 3 - SAPA – FANSIPAN LEGEND – ĐÈO Ô QUY HỒ 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách dùng điểm tâm sáng tại khách sạn. xe đưa đoàn ra ga Sapa, Quý khách trải nghiệm đến khu du lịch Fansipan Legend bằng Tàu hỏa leo núi Mường Hoa hiện đại nhất Việt Nam với tổng chiều dài gần 2000m, thưởng ngoạn bức tranh phong cảnh đầy màu sắc của cánh rừng nguyên sinh, thung lũng Mường Hoa.</p>
                <p>- Chinh phục đỉnh núi Fansipan với độ cao 3.143m hùng vĩ bằng cáp treo (chi phí tự túc). </p>
                <p>- Lễ Phật tại chùa Trình hay cầu phúc lộc, bình an cho gia đình tại Bích Vân Thiền Tự trong hệ thống cảnh quan tâm linh trên đỉnh Fansipan.</p>
                <p> Tiếp tục hành trình, Quý khách dùng cơm trưa và tham quan: </p>
                <p>- Chinh phục đèo Ô Quy Hồ - con đèo đẹp, hùng vĩ và dài nhất trong Tứ Đại Đỉnh Đèo miền Bắc.</p>
                <p>- Khu du lịch Cổng Trời Ô Quy Hồ - một trong những điểm săn mây, ngắm hoàng hôn cực đẹp tại Sapa.</p>
                <p>Quý khách dùng cơm tối tại Sapa và tự do nghỉ ngơi.</p>
                <p>Nghỉ đêm tại Sapa.</p>
                <h3>Ngày 4 - SAPA – LÀO CAI – HÀ NỘI 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe khởi hành đưa Quý khách về Hà Nội, trên đường dừng tham quan mua sắm tại Siêu thị Du lịch nông nghiệp OCOP Phú Thọ - chợ Tp Việt Trì và dùng cơm trưa tại nhà hàng địa phương. Đến Hà Nội nhận phòng khách sạn nghỉ ngơi hoặc tự do đi tham quan Hồ Hoàn Kiếm ngắm bên ngoài Tháp Rùa, Đền Ngọc Sơn, Cầu Thê Húc.</p>
                <p>Nghỉ đêm tại Hà Nội. </p>
                <h3>Ngày 5 - HÀ NỘI – YÊN TỬ – HẠ LONG 03 Bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng. Xe khởi hành đưa Quý khách đến thành phố biển Hạ Long theo quốc lộ 18, trên đường dừng ăn trưa và tham quan vùng đất thiêng Yên Tử: </p>
                <p>- Tham quan chụp hình Làng Nương và dùng bữa trưa tại Cơm Quê </p>
                <p>- Quý khách lên cáp treo du ngoạn thắng cảnh thiên nhiên Đông Yên Tử (chi phí cáp treo tự túc), nơi còn lưu giữ nhiều di tích lịch sử mệnh danh “Đất tổ Phật giáo Việt Nam”, chiêm bái chùa Một Mái, chùa Hoa Yên – nơi tu hành của Phật Hoàng Trần Nhân Tông khai sinh ra dòng mới Thiền Phái Trúc Lâm, nằm trên lưng chừng núi ở độ cao 516m. Theo dấu chân Phật Hoàng viếng Chùa Đồng có tên Thiên Trúc Tự (chùa Cõi Phật), tọa lạc ở đỉnh cao nhất dãy Yên Tử (1.068m) – ngôi chùa bằng đồng lớn nhất Việt Nam.</p>
                <p>Đến Hạ Long, Quý khách tham quan mua sắm tại Trung tâm Mỹ Ngọc - Trung tâm Ngọc trai lớn nhất miền bắc Việt Nam.Tới đây Quý khách chiêm ngưỡng vẻ đẹp sang trọng, đủ các màu sắc hấp dẫn của những viên ngọc trai được nuôi trong lòng Di sản – Kỳ quan thiên nhiên thế giới vịnh Hạ Long tại phòng trưng bày sản phẩm. Quý khách có thể lựa chọn cho mình và người thân những đồ trang sức ngọc trai Hạ Long như ý và những sản phẩm lưu niệm được chế tác từ vỏ trai, sản phẩm đạt chất lượng OCOP 5 sao cấp Quốc gia đầu tiên của Việt Nam</p>
                <p>Dùng cơm chiều và nhận phòng khách sạn nghỉ ngơi. Buổi tối, Quý khách tự do khám phá nhiều hoạt động dịch vụ giải trí sôi nổi tại “phố cổ” Bãi Cháy - nằm cạnh công viên Sun World Hạ Long từ những ẩm thực đường phố đến các quán cà phê siêu dễ thương như Hòn Gai Coffee & Lounge hay thoải mái bung xõa tại The Mini Bar, Brothers Pub,…</p>
                <p>Nghỉ đêm tại Hạ Long. </p>
                <h3>Ngày 6 - VỊNH HẠ LONG – ĐỘNG THIÊN CUNG – NINH BÌNH 03 Bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe đưa quý khách ra bến tàu, xuống thuyền du ngoạn Vịnh Hạ Long - Thắng cảnh thiên nhiên tuyệt đẹp và vô cùng sống động, được UNESCO công nhận là di sản thiên nhiên Thế giới năm 1994.</p>
                <p>- Động Thiên Cung là một trong những động đẹp nhất ở Hạ Long. Vẻ đẹp nguy nga và lộng lẫy bởi những lớp thạch nhũ và những luồng ánh sáng lung linh.</p>
                <p>- Từ trên tàu ngắm nhìn các hòn đảo lớn nhỏ trong Vịnh Hạ Long: Hòn Gà Chọi, Hòn Lư Hương.</p>
                <p>Xe đón Quý khách tại bến thuyền khởi hành đi Ninh Bình - vùng đất mệnh danh là “Nơi mơ đến, chốn mong về” với nhiều di tích văn hóa, thiên nhiên vô cùng đặc sắc.</p>
                <p>Buổi tối quý khách tự do khám phá Phố cổ Hoa Lư, một không gian check-in cổ, đẹp, trầm mặc đẹp trở nên lung linh, huyền ảo hơn với sắc màu của những chiếc đèn lồng và Bảo Tháp trên Hồ Kỳ Lân; trải nghiệm nhiều hoạt động trò chơi dân gian và nhiều loại hình văn hóa nghệ thuật từ dân tộc như múa rối nước, nhảy múa Tắc Xình, hát xẩm, ... đến những buổi trình diễn acoustic sẽ được diễn ra vào các buổi tối ngày cuối tuần.</p>
                <p>Nghỉ đêm tại Ninh Bình.</p>
                <h3>Ngày 7 - NINH BÌNH – TRÀNG AN – BÁI ĐÍNH – SÂN BAY NỘI BÀI 02 Bữa ăn: (Sáng, Trưa)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe đưa Quý khách đi tham quan: </p>
                <p>- Khu Du Lịch Tràng An:  Quý khách lên thuyền truyền thống đi tham quan thắng cảnh hệ thống núi đá vôi hùng vĩ và các thung lũng ngập nước, thông với nhau bởi các dòng suối tạo nên các hang động ngập nước quanh năm. Điểm xuyến trong không gian hoang sơ, tĩnh lặng là hình ảnh rêu phong, cổ kính của các mái đình, đền, phủ nằm nép mình dưới chân các dãy núi cao. </p>
                <p>- Viếng Chùa Bái Đính - một quần thể chùa với nhiều kỷ lục Việt Nam như pho tượng phật Di Lặc bằng đồng nặng 80 tấn, hành lang với 500 tượng vị La Hán, tòa Bảo Tháp cao 99m…</p>
                <p>Xe khởi hành đưa Quý khách ra sân bay Nội Bài làm thủ tục đón chuyến bay về Tp.HCM. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.</p>',
                'tour_sale' => '15%',
                'total_seats' => 40,
                'booked_seats' => 0,
                'location_id' => 1,
                'guide_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_name' => 'Hà Nội - Hà Giang - Đồng Văn - Cao Bằng',
                'tour_image' => 'dongVan.jpg',
                'start_day' => '2024-05-16',
                'time' => '7 ngày 6 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 10990000,
                'vehicle' => 'Máy bay',
                'tour_description' => ' Hành trình khám phá vòng cung Đông Bắc sẽ đưa du khách tham quan những điểm đến thú vị của cao nguyên Đá Đồng Văn, cột cờ Lũng Cú uy nghiêm, đèo Mã Pí Lèng hùng vĩ. Và bên cạnh đó Cao Bằng cũng không kém phần hấp dẫn với Thác Bản Giốc cuồn cuộn và một Hồ Ba Bể trong xanh, tuyệt đẹp tại Bắc Kạn.',
                'tour_schedule' => ' <h3>Ngày 1 - SB NỘI BÀI – HÀ NỘI 00 bữa ăn: (Tự túc ăn ngày đầu tiên)</h3>
                                    <p>Quý khách tập trung tại sân bay Tân Sơn Nhất (Ga nội địa), hướng dẫn viên hỗ trợ khách làm thủ tục đáp chuyến bay đi Hà Nội. Đến sân bay Nội Bài, xe và HDV Vietravel đón Quý khách đi Hà Nội nhận phòng khách sạn nghỉ ngơi hoặc tự do đi tham quan.</p>
                                    <p>Nghỉ đêm tại Hà Nội.  </p>
                                    <h3>Ngày 2 - HÀ NỘI - HÀ GIANG 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                                    <p>Quý khách ăn sáng và trả phòng.  Xe khởi hành đưa Quý khách đi tham quan:</p>
                                    <p>- Dạo 1 vòng quanh Hồ Hoàn Kiếm ngắm Tháp Rùa, Đền Ngọc Sơn, Cầu Thê Húc.</p>
                                    <p>Tiếp tục hành trình đến với vùng đất Hà Giang - nơi có chè Shan Tuyết, rượu mật ong và thắng cố, xứ sở của đào phai, hoa lê, truyền thống và náo nhiệt trong buổi chợ phiên… Đến nơi, Quý khách tham quan:</p>
                                    <p>- Nghĩa Trang Liệt Sĩ Quốc Gia Vị Xuyên - nơi đây từ năm 1979 đến năm 1989, tại mảnh đất Hà Giang, đặc biệt tại địa phận huyện Vị Xuyên đã trở thành “Biển lửa” trên mặt trận chống quân xâm lược. Trong cuộc chiến đấu bảo vệ Tổ quốc, hàng ngàn chiến sĩ đã anh dũng hy sinh.</p>
                                    <p>- Cột mốc số 0: đánh dấu điểm khởi công của con đường Hạnh Phúc nối Hà Giang và 4 huyện vùng cao nguyên đá</p>
                                    <p>Xe đưa Quý khách về khách sạn nhận phòng và dùng cơm chiều, hoặc tự do thưởng thức món Chè Shan Tuyết, mật ong Bạc Hà và ấm bụng với món cháo Ấu Tẩu.</p>
                                    <p>Nghỉ đêm tại Hà Giang.</p>
                                    <h3>Ngày 3 - HÀ GIANG - QUẢN BẠ - YÊN MINH – ĐỒNG VĂN 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                                    <p>Ăn sáng và trả phòng khách sạn. Xe và hướng dẫn viên khởi hành đưa Quý khách khám phá Công viên địa chất toàn cầu Cao nguyên đá Đồng Văn (Bao gồm địa giới hành chính của 4 huyện phía Bắc tỉnh Hà Giang với diện tích 2.356 km2) với những điểm check-in đặc sắc:</p>
                                    <p>- Ngắm Núi Đôi Quản Bạ - biểu tượng vẻ đẹp của vùng cao nguyên đá, Quý khách đi bộ lên Cổng trời Quản Bạ ngắm toàn bộ vẻ đẹp thơ mộng của thị trấn Tam Sơn và hít thở bầu không khí mát mẻ trong lành quanh năm.</p>
                                    <p>Sau khi ăn trưa, Quý khách tiếp tục hành trình đi tham quan:</p>
                                    <p>- Dốc Thẩm Mã – những con đường đèo khúc khuỷu, quanh co tựa như một dải lụa uốn lượn mềm mại trải dài theo triền núi.</p>
                                    <p>- Làng văn hóa Lũng Cẩm – Thung lũng Sủng Là: được mênh danh là “ đóa hoa hồng” trong lòng cao nguyên đá luôn cuốn hút du khách bởi vẻ đẹp hết sức bình dị, mộc mạc. Nơi đây từng là bối cảnh quay bộ phim đoạt giải phim truyện nhựa xuất sắc nhất của Hội điện ảnh Việt Nam - phim “Chuyện của Pao”, du khách tìm hiểu văn hóa người Mông.</p>
                                    <p>- Khu kiến trúc nghệ thuật nhà Vương (Dinh Vua Mèo), công trình kiến trúc đẹp, hiếm có và rất độc đáo của vùng cao nguyên núi đá.</p>
                                    <p>- Chinh phục Cột cờ Lũng Cú hay còn gọi là đỉnh núi Rồng, nơi địa đầu Cực Bắc Tổ Quốc với lá cờ 54m2 tượng trưng cho 54 dân tộc anh em. Từ trên cao, Quý khách sẽ ngắm những mảng xanh mát của ruộng bậc thang và các bản làng Lô Lô Chải, Thèn Pả, xa xa có 2 hồ nước phía xa, nằm đối xứng nhau được người dân nơi đây ví như “mắt rồng”.</p>
                                    <p>Quý khách dùng cơm chiều và nhận phòng khách sạn nghỉ ngơi.</p>
                                    <p>Nghỉ đêm tại Đồng Văn hoặc Mèo Vạc</p>
                                    <p>Ghi chú: Điểm tham quan Cột Cờ Lũng Cú sẽ không tham quan được trong trường hợp thời tiết không thuận lợi.</p>
                                    <h3>Ngày 4 - ĐỒNG VĂN – MÈO VẠC – CAO BẰNG 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                                    <p>Ăn sáng và trả phòng khách sạn. Xe và hướng dẫn viên khởi hành đi tham quan:</p>
                                    <p>- Đèo Mã Pì Lèng: Một trong Tứ đại đỉnh đèo hùng vĩ của miền Bắc Việt Nam dài 24km, dừng chân nghỉ ngơi, chụp ảnh nơi bị chia cắt về địa hình sâu nhất của Việt Nam. Trên đường dừng chụp hình tại tượng đài Thanh Niên trước Bảo tàng Con Đường Hạnh Phúc, Mã Pí Lèng café (chi phí tự túc), ngắm con đường hạnh phúc và toàn cảnh dòng sông Nho Quế từ trên cao.</p>
                                    <p>- Dừng chụp hình lưu niệm tại Làng Văn hóa Du lịch Cộng đồng Pả Vi, nằm dưới chân đèo Mã Pì Lèng, bên cạnh dòng sông xanh nho Quế. Nơi đây thu hút sự quan tâm của du khách bởi thiết kế ấn tượng của cổng chào hình dáng chiếc khèn Mông khổng lồ, những homestay mang đậm nét văn hóa, phong cách của người Mông,…  </p>
                                    <p>Tiếp tục hành trình đến Cao Bằng, Quý khách dừng tại Bảo Lạc dùng cơm trưa tại nhà hàng địa phương. Đến Cao Bằng, Quý khách nhận phòng nghỉ ngơi và dùng cơm tối.</p>
                                    <p>Nghỉ đêm tại Cao Bằng.</p>
                                    <h3>Ngày 5 - THÁC BẢN GIỐC – ĐỘNG NGƯỜM NGAO – LÀNG ĐÁ KHUỔI KY 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                                    <p>Quý khách ăn sáng. Xe khởi hành đưa Quý khách đi tham quan:</p>
                                    <p>- Thác Bản Giốc - một trong những thác nước đẹp nhất của Việt Nam có đường ranh giới tự nhiên với Trung Quốc. Thác nước đẹp và hùng vỹ với dòng nước cuồn cuộn chảy quanh năm bắt nguồn từ dòng sông Quây Sơn nước xanh ngắt một màu ngọc Bích. Đẹp nhất vào mùa lúa chín (tháng 9) khung cảnh đường vào thác sáng rực một màu vàng óng và dòng nước trắng xóa mềm mại như tóc tiên càng làm khung cảnh thêm nên thơ, hùng vỹ.</p>
                                    <p>- Chùa Phật Tích Trúc Lâm Bản Giốc: được xây dựng theo lối kiến trúc thuần Việt trên diện tích 3 ha, đây là ngôi chùa đầu tiên được xây dựng tại nơi biên cương phía Bắc của tổ quốc.</p>
                                    <p> Quý khách dùng cơm trưa và tiếp tục tham quan:</p>
                                    <p>- Động Ngườm Ngao - một động lớn được hình thành từ sự phong hoá lâu đời của đá vôi; bước vào động, du khách như bước vào một thế giới kỳ ảo, choáng ngợp trước những dải thạch nhũ muôn màu, những tượng đá quyến rũ với nhiều kiểu dáng khác nhau mang dáng dấp hình người, cây rừng, súc vật..., các nhũ đá thả từ trên xuống hay mọc từ dưới đất lên vô cùng sống động</p>
                                    <p>- Làng Đá Khuổi Ky: với một ý niệm đá là khởi nguồn của sự sống và trung tâm của vũ trụ mà người Tày ở Trùng Khánh luôn gìn giữ ngôi nhà sàn, nơi sinh hoạt xung quanh mình là đá, điều đó đã tạo nên điểm nhấn cho ngôi làng nhìn từ xa như một bức tranh vững chãi giữa mây trời núi non hùng vỹ. Đến đây vào homestay và thưởng thức tách café giữa khung cảnh núi rừng sẽ cho quý khách cảm giác bình yên đến lạ.</p>
                                    <p>Xe đưa Quý khách về thành phố Cao Bằng dùng cơm tối tại nhà hàng địa phương, mua sắm đặc sản địa phương: Miến dong, thạch đen, lạp xưởng, ... Quý khách nhận phòng khách sạn nghỉ ngơi.</p>
                                    <p>Nghỉ đêm tại Cao Bằng.</p>
                                    <h3>Ngày 6 - CAO BẰNG – KHU DI TÍCH PÁC PÓ – BA BỂ 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                                    <p>Quý khách ăn sáng và trả phòng khách sạn. Xe khởi hành đưa Quý khách tham quan:</p>
                                    <p>- Khu di tích Pác Pó - nơi chủ tịch Hồ Chí Minh từng sống và làm việc với khung cảnh nên thơ, hữu tình. Dòng suối trong xanh, thơ mộng trước cửa hang được Bác đặt tên là Suối Lê Nin, ngọn núi hùng vĩ cạnh bên là Núi Các Mác</p>
                                    <p>- Khu di tích Kim Đồng - Nơi ghi nhớ anh hùng liệt sỹ có công bảo vệ cán bộ cách mạng trong thời kỳ kháng chiến.</p>
                                    <p>Sau khi dùng cơm trưa, Quý khách khởi hành đi Bắc Cạn, nhận phòng và nghỉ ngơi tại Ba Bể.</p>
                                    <p>Nghỉ đêm tại Ba Bể.</p>
                                    <h3>Ngày 7 - BA BỂ - BẮC CẠN – HÀ NỘI 02 bữa ăn: (Sáng, Trưa)</h3>
                                    <p>Quý khách ra bến thuyền tham quan:</p>
                                    <p>- Hồ Ba Bể (2 tiếng) – Khám phá bức tranh sơn thủy hữu tình vô cùng sống động, mặt nước hồ trong xanh như gương làm quyến rũ biết bao du khách làm quyến rũ biết bao du khách, thiên nhiên và con người như hòa quyện vào nhau, ngắm Ao Tiên, Đền An Mã, hòn Bà Góa. Thuyền dừng trên mặt hồ, Quý khách giao lưu hát then và đàn tính của người Tày, hoặc tham gia chèo thuyền kayak xung quanh đảo Bà Góa (chi phí tự túc).</p>
                                    <p>Quý khách trả phòng và dùng cơm trưa. Xe khởi hành đưa Quý khách đi Hà Nội. Đến sân bay Nội Bài, Hướng dẫn viên hỗ trợ Quý khách làm thủ tục đáp chuyến bay về Tp.HCM. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất. </p>
                                    <h4>KẾT THÚC CHƯƠNG TRÌNH, TẠM BIỆT QUÝ KHÁCH!</h4>',
                'tour_sale' => '5%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 1,
                'guide_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'tour_name' => 'Cao Bằng - Sapa - Lạng Sơn - Hà Giang',
                'tour_image' => 'langSon.jpg',
                'start_day' => '2024-05-26',
                'time' => '7 ngày 6 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 10790000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Khu du lịch Tràng An nằm trong Quần thể danh thắng Tràng An (tỉnh  Ninh Bình) chỉ cách thủ đô Hà Nội chưa đầy 100km. Có lẽ vì thế mà nơi đây được đông đảo   du khách miền Bắc chọn làm điểm du lịch sinh thái, tâm linh mỗi dịp nghỉ hè, nghỉ lễ hay cuối tuần. Cùng khám phá xem nơi đây có đúng là “tiên cảnh chốn nhân gian” như du khách vẫn thường nhắc đến không nhé!',
                'tour_schedule' => '<h3>Ngày 1 - TPHCM – SÂN BAY NỘI BÀI (HÀ NỘI) 00 bữa ăn: (Tự túc ăn ngày đầu tiên)</h3>
                <p>Quý khách tập trung tại sân bay Tân Sơn Nhất (ga trong nước), hướng dẫn làm thủ tục cho Quý khách đáp chuyến bay đi Hà Nội. Đến sân bay Nội Bài, xe đưa quý khách về trung tâm Hà Nội nhận phòng khách sạn nghỉ ngơi. </p>
                <p>Nghỉ đêm tại Hà Nội.</p>
                <h3>Ngày 2 - HÀ NỘI – SAPA – BẢN CÁT CÁT 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng. Xe khởi hành đưa Quý khách đi tham quan:</p>
                <p>- Lăng Hồ Chủ Tịch (không viếng vào thứ 2, thứ 6 hàng tuần và giai đoạn bảo trì định kì hàng năm) tham quan và tìm hiểu cuộc đời và sự nghiệp của vị cha già dân tộc tại Nhà Sàn Bác Hồ, Bảo Tàng Hồ Chí Minh, Chùa Một Cột.</p>
                <p>Tiếp tục hành trình, Quý khách khởi hành đi Sapa theo cao tốc Hà Nội – Lào Cai. Trên đường, Quý khách dùng cơm trưa tại nhà hàng địa phương. Đến nơi, Quý khách tham quan:</p>
                <p>- Bản Cát Cát - đẹp như một bức tranh giữa vùng phố cổ Sapa, nơi đây thu hút du khách bởi cầu treo, thác nước, guồng nước và những mảng màu hoa mê hoặc du khách khi lạc bước đến đây. Thăm những nếp nhà của người Mông, Dao, Giáy trong bản, du khách sẽ không khỏi ngỡ ngàng trước vẻ đẹp mộng mị của một trong những ngôi làng cổ đẹp nhất Sapa. Tại đây Quý khách xem chương trình biểu diễn văn nghệ của người HMông.</p>
                <p>Quý khách dùng cơm tối và nhận phòng nghỉ ngơi hoặc tự do dạo phố ngắm nhà thờ Đá Sapa, tự do thưởng thức đặc sản vùng cao như: thịt lợn cắp nách nướng, trứng nướng, rượu táo mèo, giao lưu với người dân tộc vùng cao.</p>
                <p>Nghỉ đêm tại Sapa</p>
                <h3>Ngày 3 - SAPA – FANSIPAN LEGEND – ĐÈO Ô QUY HỒ 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách dùng điểm tâm sáng tại khách sạn. xe đưa đoàn ra ga Sapa, Quý khách trải nghiệm đến khu du lịch Fansipan Legend bằng Tàu hỏa leo núi Mường Hoa hiện đại nhất Việt Nam với tổng chiều dài gần 2000m, thưởng ngoạn bức tranh phong cảnh đầy màu sắc của cánh rừng nguyên sinh, thung lũng Mường Hoa.</p>
                <p>- Chinh phục đỉnh núi Fansipan với độ cao 3.143m hùng vĩ bằng cáp treo (chi phí tự túc). </p>
                <p>- Lễ Phật tại chùa Trình hay cầu phúc lộc, bình an cho gia đình tại Bích Vân Thiền Tự trong hệ thống cảnh quan tâm linh trên đỉnh Fansipan.</p>
                <p> Tiếp tục hành trình, Quý khách dùng cơm trưa và tham quan: </p>
                <p>- Chinh phục đèo Ô Quy Hồ - con đèo đẹp, hùng vĩ và dài nhất trong Tứ Đại Đỉnh Đèo miền Bắc.</p>
                <p>- Khu du lịch Cổng Trời Ô Quy Hồ - một trong những điểm săn mây, ngắm hoàng hôn cực đẹp tại Sapa.</p>
                <p>Quý khách dùng cơm tối tại Sapa và tự do nghỉ ngơi.</p>
                <p>Nghỉ đêm tại Sapa.</p>
                <h3>Ngày 4 - SAPA – LÀO CAI – HÀ NỘI 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe khởi hành đưa Quý khách về Hà Nội, trên đường dừng tham quan mua sắm tại Siêu thị Du lịch nông nghiệp OCOP Phú Thọ - chợ Tp Việt Trì và dùng cơm trưa tại nhà hàng địa phương. Đến Hà Nội nhận phòng khách sạn nghỉ ngơi hoặc tự do đi tham quan Hồ Hoàn Kiếm ngắm bên ngoài Tháp Rùa, Đền Ngọc Sơn, Cầu Thê Húc.</p>
                <p>Nghỉ đêm tại Hà Nội. </p>
                <h3>Ngày 5 - HÀ NỘI – YÊN TỬ – HẠ LONG 03 Bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng. Xe khởi hành đưa Quý khách đến thành phố biển Hạ Long theo quốc lộ 18, trên đường dừng ăn trưa và tham quan vùng đất thiêng Yên Tử: </p>
                <p>- Tham quan chụp hình Làng Nương và dùng bữa trưa tại Cơm Quê </p>
                <p>- Quý khách lên cáp treo du ngoạn thắng cảnh thiên nhiên Đông Yên Tử (chi phí cáp treo tự túc), nơi còn lưu giữ nhiều di tích lịch sử mệnh danh “Đất tổ Phật giáo Việt Nam”, chiêm bái chùa Một Mái, chùa Hoa Yên – nơi tu hành của Phật Hoàng Trần Nhân Tông khai sinh ra dòng mới Thiền Phái Trúc Lâm, nằm trên lưng chừng núi ở độ cao 516m. Theo dấu chân Phật Hoàng viếng Chùa Đồng có tên Thiên Trúc Tự (chùa Cõi Phật), tọa lạc ở đỉnh cao nhất dãy Yên Tử (1.068m) – ngôi chùa bằng đồng lớn nhất Việt Nam.</p>
                <p>Đến Hạ Long, Quý khách tham quan mua sắm tại Trung tâm Mỹ Ngọc - Trung tâm Ngọc trai lớn nhất miền bắc Việt Nam.Tới đây Quý khách chiêm ngưỡng vẻ đẹp sang trọng, đủ các màu sắc hấp dẫn của những viên ngọc trai được nuôi trong lòng Di sản – Kỳ quan thiên nhiên thế giới vịnh Hạ Long tại phòng trưng bày sản phẩm. Quý khách có thể lựa chọn cho mình và người thân những đồ trang sức ngọc trai Hạ Long như ý và những sản phẩm lưu niệm được chế tác từ vỏ trai, sản phẩm đạt chất lượng OCOP 5 sao cấp Quốc gia đầu tiên của Việt Nam</p>
                <p>Dùng cơm chiều và nhận phòng khách sạn nghỉ ngơi. Buổi tối, Quý khách tự do khám phá nhiều hoạt động dịch vụ giải trí sôi nổi tại “phố cổ” Bãi Cháy - nằm cạnh công viên Sun World Hạ Long từ những ẩm thực đường phố đến các quán cà phê siêu dễ thương như Hòn Gai Coffee & Lounge hay thoải mái bung xõa tại The Mini Bar, Brothers Pub,…</p>
                <p>Nghỉ đêm tại Hạ Long. </p>
                <h3>Ngày 6 - VỊNH HẠ LONG – ĐỘNG THIÊN CUNG – NINH BÌNH 03 Bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe đưa quý khách ra bến tàu, xuống thuyền du ngoạn Vịnh Hạ Long - Thắng cảnh thiên nhiên tuyệt đẹp và vô cùng sống động, được UNESCO công nhận là di sản thiên nhiên Thế giới năm 1994.</p>
                <p>- Động Thiên Cung là một trong những động đẹp nhất ở Hạ Long. Vẻ đẹp nguy nga và lộng lẫy bởi những lớp thạch nhũ và những luồng ánh sáng lung linh.</p>
                <p>- Từ trên tàu ngắm nhìn các hòn đảo lớn nhỏ trong Vịnh Hạ Long: Hòn Gà Chọi, Hòn Lư Hương.</p>
                <p>Xe đón Quý khách tại bến thuyền khởi hành đi Ninh Bình - vùng đất mệnh danh là “Nơi mơ đến, chốn mong về” với nhiều di tích văn hóa, thiên nhiên vô cùng đặc sắc.</p>
                <p>Buổi tối quý khách tự do khám phá Phố cổ Hoa Lư, một không gian check-in cổ, đẹp, trầm mặc đẹp trở nên lung linh, huyền ảo hơn với sắc màu của những chiếc đèn lồng và Bảo Tháp trên Hồ Kỳ Lân; trải nghiệm nhiều hoạt động trò chơi dân gian và nhiều loại hình văn hóa nghệ thuật từ dân tộc như múa rối nước, nhảy múa Tắc Xình, hát xẩm, ... đến những buổi trình diễn acoustic sẽ được diễn ra vào các buổi tối ngày cuối tuần.</p>
                <p>Nghỉ đêm tại Ninh Bình.</p>
                <h3>Ngày 7 - NINH BÌNH – TRÀNG AN – BÁI ĐÍNH – SÂN BAY NỘI BÀI 02 Bữa ăn: (Sáng, Trưa)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe đưa Quý khách đi tham quan: </p>
                <p>- Khu Du Lịch Tràng An:  Quý khách lên thuyền truyền thống đi tham quan thắng cảnh hệ thống núi đá vôi hùng vĩ và các thung lũng ngập nước, thông với nhau bởi các dòng suối tạo nên các hang động ngập nước quanh năm. Điểm xuyến trong không gian hoang sơ, tĩnh lặng là hình ảnh rêu phong, cổ kính của các mái đình, đền, phủ nằm nép mình dưới chân các dãy núi cao. </p>
                <p>- Viếng Chùa Bái Đính - một quần thể chùa với nhiều kỷ lục Việt Nam như pho tượng phật Di Lặc bằng đồng nặng 80 tấn, hành lang với 500 tượng vị La Hán, tòa Bảo Tháp cao 99m…</p>
                <p>Xe khởi hành đưa Quý khách ra sân bay Nội Bài làm thủ tục đón chuyến bay về Tp.HCM. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.</p>',
                'tour_sale' => '10%',
                'total_seats' => 40,
                'booked_seats' => 0,
                'location_id' => 1,
                'guide_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_name' => 'Yên Tử - Hạ Long - Ninh Bình - Tràng An',
                'tour_image' => 'yenTu.jpg',
                'start_day' => '2024-05-27',
                'time' => '7 ngày 6 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 12790000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Khu du lịch Tràng An nằm trong Quần thể danh thắng Tràng An (tỉnh  Ninh Bình) chỉ cách thủ đô Hà Nội chưa đầy 100km. Có lẽ vì thế mà nơi đây được đông đảo   du khách miền Bắc chọn làm điểm du lịch sinh thái, tâm linh mỗi dịp nghỉ hè, nghỉ lễ hay cuối tuần. Cùng khám phá xem nơi đây có đúng là “tiên cảnh chốn nhân gian” như du khách vẫn thường nhắc đến không nhé!',
                'tour_schedule' => '<h3>Ngày 1 - TPHCM – SÂN BAY NỘI BÀI (HÀ NỘI) 00 bữa ăn: (Tự túc ăn ngày đầu tiên)</h3>
                <p>Quý khách tập trung tại sân bay Tân Sơn Nhất (ga trong nước), hướng dẫn làm thủ tục cho Quý khách đáp chuyến bay đi Hà Nội. Đến sân bay Nội Bài, xe đưa quý khách về trung tâm Hà Nội nhận phòng khách sạn nghỉ ngơi. </p>
                <p>Nghỉ đêm tại Hà Nội.</p>
                <h3>Ngày 2 - HÀ NỘI – SAPA – BẢN CÁT CÁT 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng. Xe khởi hành đưa Quý khách đi tham quan:</p>
                <p>- Lăng Hồ Chủ Tịch (không viếng vào thứ 2, thứ 6 hàng tuần và giai đoạn bảo trì định kì hàng năm) tham quan và tìm hiểu cuộc đời và sự nghiệp của vị cha già dân tộc tại Nhà Sàn Bác Hồ, Bảo Tàng Hồ Chí Minh, Chùa Một Cột.</p>
                <p>Tiếp tục hành trình, Quý khách khởi hành đi Sapa theo cao tốc Hà Nội – Lào Cai. Trên đường, Quý khách dùng cơm trưa tại nhà hàng địa phương. Đến nơi, Quý khách tham quan:</p>
                <p>- Bản Cát Cát - đẹp như một bức tranh giữa vùng phố cổ Sapa, nơi đây thu hút du khách bởi cầu treo, thác nước, guồng nước và những mảng màu hoa mê hoặc du khách khi lạc bước đến đây. Thăm những nếp nhà của người Mông, Dao, Giáy trong bản, du khách sẽ không khỏi ngỡ ngàng trước vẻ đẹp mộng mị của một trong những ngôi làng cổ đẹp nhất Sapa. Tại đây Quý khách xem chương trình biểu diễn văn nghệ của người HMông.</p>
                <p>Quý khách dùng cơm tối và nhận phòng nghỉ ngơi hoặc tự do dạo phố ngắm nhà thờ Đá Sapa, tự do thưởng thức đặc sản vùng cao như: thịt lợn cắp nách nướng, trứng nướng, rượu táo mèo, giao lưu với người dân tộc vùng cao.</p>
                <p>Nghỉ đêm tại Sapa</p>
                <h3>Ngày 3 - SAPA – FANSIPAN LEGEND – ĐÈO Ô QUY HỒ 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách dùng điểm tâm sáng tại khách sạn. xe đưa đoàn ra ga Sapa, Quý khách trải nghiệm đến khu du lịch Fansipan Legend bằng Tàu hỏa leo núi Mường Hoa hiện đại nhất Việt Nam với tổng chiều dài gần 2000m, thưởng ngoạn bức tranh phong cảnh đầy màu sắc của cánh rừng nguyên sinh, thung lũng Mường Hoa.</p>
                <p>- Chinh phục đỉnh núi Fansipan với độ cao 3.143m hùng vĩ bằng cáp treo (chi phí tự túc). </p>
                <p>- Lễ Phật tại chùa Trình hay cầu phúc lộc, bình an cho gia đình tại Bích Vân Thiền Tự trong hệ thống cảnh quan tâm linh trên đỉnh Fansipan.</p>
                <p> Tiếp tục hành trình, Quý khách dùng cơm trưa và tham quan: </p>
                <p>- Chinh phục đèo Ô Quy Hồ - con đèo đẹp, hùng vĩ và dài nhất trong Tứ Đại Đỉnh Đèo miền Bắc.</p>
                <p>- Khu du lịch Cổng Trời Ô Quy Hồ - một trong những điểm săn mây, ngắm hoàng hôn cực đẹp tại Sapa.</p>
                <p>Quý khách dùng cơm tối tại Sapa và tự do nghỉ ngơi.</p>
                <p>Nghỉ đêm tại Sapa.</p>
                <h3>Ngày 4 - SAPA – LÀO CAI – HÀ NỘI 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe khởi hành đưa Quý khách về Hà Nội, trên đường dừng tham quan mua sắm tại Siêu thị Du lịch nông nghiệp OCOP Phú Thọ - chợ Tp Việt Trì và dùng cơm trưa tại nhà hàng địa phương. Đến Hà Nội nhận phòng khách sạn nghỉ ngơi hoặc tự do đi tham quan Hồ Hoàn Kiếm ngắm bên ngoài Tháp Rùa, Đền Ngọc Sơn, Cầu Thê Húc.</p>
                <p>Nghỉ đêm tại Hà Nội. </p>
                <h3>Ngày 5 - HÀ NỘI – YÊN TỬ – HẠ LONG 03 Bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng. Xe khởi hành đưa Quý khách đến thành phố biển Hạ Long theo quốc lộ 18, trên đường dừng ăn trưa và tham quan vùng đất thiêng Yên Tử: </p>
                <p>- Tham quan chụp hình Làng Nương và dùng bữa trưa tại Cơm Quê </p>
                <p>- Quý khách lên cáp treo du ngoạn thắng cảnh thiên nhiên Đông Yên Tử (chi phí cáp treo tự túc), nơi còn lưu giữ nhiều di tích lịch sử mệnh danh “Đất tổ Phật giáo Việt Nam”, chiêm bái chùa Một Mái, chùa Hoa Yên – nơi tu hành của Phật Hoàng Trần Nhân Tông khai sinh ra dòng mới Thiền Phái Trúc Lâm, nằm trên lưng chừng núi ở độ cao 516m. Theo dấu chân Phật Hoàng viếng Chùa Đồng có tên Thiên Trúc Tự (chùa Cõi Phật), tọa lạc ở đỉnh cao nhất dãy Yên Tử (1.068m) – ngôi chùa bằng đồng lớn nhất Việt Nam.</p>
                <p>Đến Hạ Long, Quý khách tham quan mua sắm tại Trung tâm Mỹ Ngọc - Trung tâm Ngọc trai lớn nhất miền bắc Việt Nam.Tới đây Quý khách chiêm ngưỡng vẻ đẹp sang trọng, đủ các màu sắc hấp dẫn của những viên ngọc trai được nuôi trong lòng Di sản – Kỳ quan thiên nhiên thế giới vịnh Hạ Long tại phòng trưng bày sản phẩm. Quý khách có thể lựa chọn cho mình và người thân những đồ trang sức ngọc trai Hạ Long như ý và những sản phẩm lưu niệm được chế tác từ vỏ trai, sản phẩm đạt chất lượng OCOP 5 sao cấp Quốc gia đầu tiên của Việt Nam</p>
                <p>Dùng cơm chiều và nhận phòng khách sạn nghỉ ngơi. Buổi tối, Quý khách tự do khám phá nhiều hoạt động dịch vụ giải trí sôi nổi tại “phố cổ” Bãi Cháy - nằm cạnh công viên Sun World Hạ Long từ những ẩm thực đường phố đến các quán cà phê siêu dễ thương như Hòn Gai Coffee & Lounge hay thoải mái bung xõa tại The Mini Bar, Brothers Pub,…</p>
                <p>Nghỉ đêm tại Hạ Long. </p>
                <h3>Ngày 6 - VỊNH HẠ LONG – ĐỘNG THIÊN CUNG – NINH BÌNH 03 Bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe đưa quý khách ra bến tàu, xuống thuyền du ngoạn Vịnh Hạ Long - Thắng cảnh thiên nhiên tuyệt đẹp và vô cùng sống động, được UNESCO công nhận là di sản thiên nhiên Thế giới năm 1994.</p>
                <p>- Động Thiên Cung là một trong những động đẹp nhất ở Hạ Long. Vẻ đẹp nguy nga và lộng lẫy bởi những lớp thạch nhũ và những luồng ánh sáng lung linh.</p>
                <p>- Từ trên tàu ngắm nhìn các hòn đảo lớn nhỏ trong Vịnh Hạ Long: Hòn Gà Chọi, Hòn Lư Hương.</p>
                <p>Xe đón Quý khách tại bến thuyền khởi hành đi Ninh Bình - vùng đất mệnh danh là “Nơi mơ đến, chốn mong về” với nhiều di tích văn hóa, thiên nhiên vô cùng đặc sắc.</p>
                <p>Buổi tối quý khách tự do khám phá Phố cổ Hoa Lư, một không gian check-in cổ, đẹp, trầm mặc đẹp trở nên lung linh, huyền ảo hơn với sắc màu của những chiếc đèn lồng và Bảo Tháp trên Hồ Kỳ Lân; trải nghiệm nhiều hoạt động trò chơi dân gian và nhiều loại hình văn hóa nghệ thuật từ dân tộc như múa rối nước, nhảy múa Tắc Xình, hát xẩm, ... đến những buổi trình diễn acoustic sẽ được diễn ra vào các buổi tối ngày cuối tuần.</p>
                <p>Nghỉ đêm tại Ninh Bình.</p>
                <h3>Ngày 7 - NINH BÌNH – TRÀNG AN – BÁI ĐÍNH – SÂN BAY NỘI BÀI 02 Bữa ăn: (Sáng, Trưa)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe đưa Quý khách đi tham quan: </p>
                <p>- Khu Du Lịch Tràng An:  Quý khách lên thuyền truyền thống đi tham quan thắng cảnh hệ thống núi đá vôi hùng vĩ và các thung lũng ngập nước, thông với nhau bởi các dòng suối tạo nên các hang động ngập nước quanh năm. Điểm xuyến trong không gian hoang sơ, tĩnh lặng là hình ảnh rêu phong, cổ kính của các mái đình, đền, phủ nằm nép mình dưới chân các dãy núi cao. </p>
                <p>- Viếng Chùa Bái Đính - một quần thể chùa với nhiều kỷ lục Việt Nam như pho tượng phật Di Lặc bằng đồng nặng 80 tấn, hành lang với 500 tượng vị La Hán, tòa Bảo Tháp cao 99m…</p>
                <p>Xe khởi hành đưa Quý khách ra sân bay Nội Bài làm thủ tục đón chuyến bay về Tp.HCM. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.</p>',
                'tour_sale' => '8%',
                'total_seats' => 40,
                'booked_seats' => 0,
                'location_id' => 1,
                'guide_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Sapa -  Fansipan - Yên Tử - Hạ Long',
                'tour_image' => 'saPa.jpg',
                'start_day' => '2024-05-28',
                'time' => '7 ngày 6 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 9790000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Khu du lịch Tràng An nằm trong Quần thể danh thắng Tràng An (tỉnh  Ninh Bình) chỉ cách thủ đô Hà Nội chưa đầy 100km. Có lẽ vì thế mà nơi đây được đông đảo   du khách miền Bắc chọn làm điểm du lịch sinh thái, tâm linh mỗi dịp nghỉ hè, nghỉ lễ hay cuối tuần. Cùng khám phá xem nơi đây có đúng là “tiên cảnh chốn nhân gian” như du khách vẫn thường nhắc đến không nhé!',
                'tour_schedule' => '<h3>Ngày 1 - TPHCM – SÂN BAY NỘI BÀI (HÀ NỘI) 00 bữa ăn: (Tự túc ăn ngày đầu tiên)</h3>
                <p>Quý khách tập trung tại sân bay Tân Sơn Nhất (ga trong nước), hướng dẫn làm thủ tục cho Quý khách đáp chuyến bay đi Hà Nội. Đến sân bay Nội Bài, xe đưa quý khách về trung tâm Hà Nội nhận phòng khách sạn nghỉ ngơi. </p>
                <p>Nghỉ đêm tại Hà Nội.</p>
                <h3>Ngày 2 - HÀ NỘI – SAPA – BẢN CÁT CÁT 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng. Xe khởi hành đưa Quý khách đi tham quan:</p>
                <p>- Lăng Hồ Chủ Tịch (không viếng vào thứ 2, thứ 6 hàng tuần và giai đoạn bảo trì định kì hàng năm) tham quan và tìm hiểu cuộc đời và sự nghiệp của vị cha già dân tộc tại Nhà Sàn Bác Hồ, Bảo Tàng Hồ Chí Minh, Chùa Một Cột.</p>
                <p>Tiếp tục hành trình, Quý khách khởi hành đi Sapa theo cao tốc Hà Nội – Lào Cai. Trên đường, Quý khách dùng cơm trưa tại nhà hàng địa phương. Đến nơi, Quý khách tham quan:</p>
                <p>- Bản Cát Cát - đẹp như một bức tranh giữa vùng phố cổ Sapa, nơi đây thu hút du khách bởi cầu treo, thác nước, guồng nước và những mảng màu hoa mê hoặc du khách khi lạc bước đến đây. Thăm những nếp nhà của người Mông, Dao, Giáy trong bản, du khách sẽ không khỏi ngỡ ngàng trước vẻ đẹp mộng mị của một trong những ngôi làng cổ đẹp nhất Sapa. Tại đây Quý khách xem chương trình biểu diễn văn nghệ của người HMông.</p>
                <p>Quý khách dùng cơm tối và nhận phòng nghỉ ngơi hoặc tự do dạo phố ngắm nhà thờ Đá Sapa, tự do thưởng thức đặc sản vùng cao như: thịt lợn cắp nách nướng, trứng nướng, rượu táo mèo, giao lưu với người dân tộc vùng cao.</p>
                <p>Nghỉ đêm tại Sapa</p>
                <h3>Ngày 3 - SAPA – FANSIPAN LEGEND – ĐÈO Ô QUY HỒ 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách dùng điểm tâm sáng tại khách sạn. xe đưa đoàn ra ga Sapa, Quý khách trải nghiệm đến khu du lịch Fansipan Legend bằng Tàu hỏa leo núi Mường Hoa hiện đại nhất Việt Nam với tổng chiều dài gần 2000m, thưởng ngoạn bức tranh phong cảnh đầy màu sắc của cánh rừng nguyên sinh, thung lũng Mường Hoa.</p>
                <p>- Chinh phục đỉnh núi Fansipan với độ cao 3.143m hùng vĩ bằng cáp treo (chi phí tự túc). </p>
                <p>- Lễ Phật tại chùa Trình hay cầu phúc lộc, bình an cho gia đình tại Bích Vân Thiền Tự trong hệ thống cảnh quan tâm linh trên đỉnh Fansipan.</p>
                <p> Tiếp tục hành trình, Quý khách dùng cơm trưa và tham quan: </p>
                <p>- Chinh phục đèo Ô Quy Hồ - con đèo đẹp, hùng vĩ và dài nhất trong Tứ Đại Đỉnh Đèo miền Bắc.</p>
                <p>- Khu du lịch Cổng Trời Ô Quy Hồ - một trong những điểm săn mây, ngắm hoàng hôn cực đẹp tại Sapa.</p>
                <p>Quý khách dùng cơm tối tại Sapa và tự do nghỉ ngơi.</p>
                <p>Nghỉ đêm tại Sapa.</p>
                <h3>Ngày 4 - SAPA – LÀO CAI – HÀ NỘI 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe khởi hành đưa Quý khách về Hà Nội, trên đường dừng tham quan mua sắm tại Siêu thị Du lịch nông nghiệp OCOP Phú Thọ - chợ Tp Việt Trì và dùng cơm trưa tại nhà hàng địa phương. Đến Hà Nội nhận phòng khách sạn nghỉ ngơi hoặc tự do đi tham quan Hồ Hoàn Kiếm ngắm bên ngoài Tháp Rùa, Đền Ngọc Sơn, Cầu Thê Húc.</p>
                <p>Nghỉ đêm tại Hà Nội. </p>
                <h3>Ngày 5 - HÀ NỘI – YÊN TỬ – HẠ LONG 03 Bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng. Xe khởi hành đưa Quý khách đến thành phố biển Hạ Long theo quốc lộ 18, trên đường dừng ăn trưa và tham quan vùng đất thiêng Yên Tử: </p>
                <p>- Tham quan chụp hình Làng Nương và dùng bữa trưa tại Cơm Quê </p>
                <p>- Quý khách lên cáp treo du ngoạn thắng cảnh thiên nhiên Đông Yên Tử (chi phí cáp treo tự túc), nơi còn lưu giữ nhiều di tích lịch sử mệnh danh “Đất tổ Phật giáo Việt Nam”, chiêm bái chùa Một Mái, chùa Hoa Yên – nơi tu hành của Phật Hoàng Trần Nhân Tông khai sinh ra dòng mới Thiền Phái Trúc Lâm, nằm trên lưng chừng núi ở độ cao 516m. Theo dấu chân Phật Hoàng viếng Chùa Đồng có tên Thiên Trúc Tự (chùa Cõi Phật), tọa lạc ở đỉnh cao nhất dãy Yên Tử (1.068m) – ngôi chùa bằng đồng lớn nhất Việt Nam.</p>
                <p>Đến Hạ Long, Quý khách tham quan mua sắm tại Trung tâm Mỹ Ngọc - Trung tâm Ngọc trai lớn nhất miền bắc Việt Nam.Tới đây Quý khách chiêm ngưỡng vẻ đẹp sang trọng, đủ các màu sắc hấp dẫn của những viên ngọc trai được nuôi trong lòng Di sản – Kỳ quan thiên nhiên thế giới vịnh Hạ Long tại phòng trưng bày sản phẩm. Quý khách có thể lựa chọn cho mình và người thân những đồ trang sức ngọc trai Hạ Long như ý và những sản phẩm lưu niệm được chế tác từ vỏ trai, sản phẩm đạt chất lượng OCOP 5 sao cấp Quốc gia đầu tiên của Việt Nam</p>
                <p>Dùng cơm chiều và nhận phòng khách sạn nghỉ ngơi. Buổi tối, Quý khách tự do khám phá nhiều hoạt động dịch vụ giải trí sôi nổi tại “phố cổ” Bãi Cháy - nằm cạnh công viên Sun World Hạ Long từ những ẩm thực đường phố đến các quán cà phê siêu dễ thương như Hòn Gai Coffee & Lounge hay thoải mái bung xõa tại The Mini Bar, Brothers Pub,…</p>
                <p>Nghỉ đêm tại Hạ Long. </p>
                <h3>Ngày 6 - VỊNH HẠ LONG – ĐỘNG THIÊN CUNG – NINH BÌNH 03 Bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe đưa quý khách ra bến tàu, xuống thuyền du ngoạn Vịnh Hạ Long - Thắng cảnh thiên nhiên tuyệt đẹp và vô cùng sống động, được UNESCO công nhận là di sản thiên nhiên Thế giới năm 1994.</p>
                <p>- Động Thiên Cung là một trong những động đẹp nhất ở Hạ Long. Vẻ đẹp nguy nga và lộng lẫy bởi những lớp thạch nhũ và những luồng ánh sáng lung linh.</p>
                <p>- Từ trên tàu ngắm nhìn các hòn đảo lớn nhỏ trong Vịnh Hạ Long: Hòn Gà Chọi, Hòn Lư Hương.</p>
                <p>Xe đón Quý khách tại bến thuyền khởi hành đi Ninh Bình - vùng đất mệnh danh là “Nơi mơ đến, chốn mong về” với nhiều di tích văn hóa, thiên nhiên vô cùng đặc sắc.</p>
                <p>Buổi tối quý khách tự do khám phá Phố cổ Hoa Lư, một không gian check-in cổ, đẹp, trầm mặc đẹp trở nên lung linh, huyền ảo hơn với sắc màu của những chiếc đèn lồng và Bảo Tháp trên Hồ Kỳ Lân; trải nghiệm nhiều hoạt động trò chơi dân gian và nhiều loại hình văn hóa nghệ thuật từ dân tộc như múa rối nước, nhảy múa Tắc Xình, hát xẩm, ... đến những buổi trình diễn acoustic sẽ được diễn ra vào các buổi tối ngày cuối tuần.</p>
                <p>Nghỉ đêm tại Ninh Bình.</p>
                <h3>Ngày 7 - NINH BÌNH – TRÀNG AN – BÁI ĐÍNH – SÂN BAY NỘI BÀI 02 Bữa ăn: (Sáng, Trưa)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe đưa Quý khách đi tham quan: </p>
                <p>- Khu Du Lịch Tràng An:  Quý khách lên thuyền truyền thống đi tham quan thắng cảnh hệ thống núi đá vôi hùng vĩ và các thung lũng ngập nước, thông với nhau bởi các dòng suối tạo nên các hang động ngập nước quanh năm. Điểm xuyến trong không gian hoang sơ, tĩnh lặng là hình ảnh rêu phong, cổ kính của các mái đình, đền, phủ nằm nép mình dưới chân các dãy núi cao. </p>
                <p>- Viếng Chùa Bái Đính - một quần thể chùa với nhiều kỷ lục Việt Nam như pho tượng phật Di Lặc bằng đồng nặng 80 tấn, hành lang với 500 tượng vị La Hán, tòa Bảo Tháp cao 99m…</p>
                <p>Xe khởi hành đưa Quý khách ra sân bay Nội Bài làm thủ tục đón chuyến bay về Tp.HCM. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.</p>',
                'tour_sale' => '5%',
                'total_seats' => 40,
                'booked_seats' => 0,
                'location_id' => 1,
                'guide_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Hà Nội - Fansibang - Yên Tử - Hạ Long',
                'tour_image' => 'fanxipan.jpg',
                'start_day' => '2024-05-28',
                'time' => '7 ngày 6 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 9790000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Khu du lịch Tràng An nằm trong Quần thể danh thắng Tràng An (tỉnh  Ninh Bình) chỉ cách thủ đô Hà Nội chưa đầy 100km. Có lẽ vì thế mà nơi đây được đông đảo   du khách miền Bắc chọn làm điểm du lịch sinh thái, tâm linh mỗi dịp nghỉ hè, nghỉ lễ hay cuối tuần. Cùng khám phá xem nơi đây có đúng là “tiên cảnh chốn nhân gian” như du khách vẫn thường nhắc đến không nhé!',
                'tour_schedule' => '<h3>Ngày 1 - TPHCM – SÂN BAY NỘI BÀI (HÀ NỘI) 00 bữa ăn: (Tự túc ăn ngày đầu tiên)</h3>
                <p>Quý khách tập trung tại sân bay Tân Sơn Nhất (ga trong nước), hướng dẫn làm thủ tục cho Quý khách đáp chuyến bay đi Hà Nội. Đến sân bay Nội Bài, xe đưa quý khách về trung tâm Hà Nội nhận phòng khách sạn nghỉ ngơi. </p>
                <p>Nghỉ đêm tại Hà Nội.</p>
                <h3>Ngày 2 - HÀ NỘI – SAPA – BẢN CÁT CÁT 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng. Xe khởi hành đưa Quý khách đi tham quan:</p>
                <p>- Lăng Hồ Chủ Tịch (không viếng vào thứ 2, thứ 6 hàng tuần và giai đoạn bảo trì định kì hàng năm) tham quan và tìm hiểu cuộc đời và sự nghiệp của vị cha già dân tộc tại Nhà Sàn Bác Hồ, Bảo Tàng Hồ Chí Minh, Chùa Một Cột.</p>
                <p>Tiếp tục hành trình, Quý khách khởi hành đi Sapa theo cao tốc Hà Nội – Lào Cai. Trên đường, Quý khách dùng cơm trưa tại nhà hàng địa phương. Đến nơi, Quý khách tham quan:</p>
                <p>- Bản Cát Cát - đẹp như một bức tranh giữa vùng phố cổ Sapa, nơi đây thu hút du khách bởi cầu treo, thác nước, guồng nước và những mảng màu hoa mê hoặc du khách khi lạc bước đến đây. Thăm những nếp nhà của người Mông, Dao, Giáy trong bản, du khách sẽ không khỏi ngỡ ngàng trước vẻ đẹp mộng mị của một trong những ngôi làng cổ đẹp nhất Sapa. Tại đây Quý khách xem chương trình biểu diễn văn nghệ của người HMông.</p>
                <p>Quý khách dùng cơm tối và nhận phòng nghỉ ngơi hoặc tự do dạo phố ngắm nhà thờ Đá Sapa, tự do thưởng thức đặc sản vùng cao như: thịt lợn cắp nách nướng, trứng nướng, rượu táo mèo, giao lưu với người dân tộc vùng cao.</p>
                <p>Nghỉ đêm tại Sapa</p>
                <h3>Ngày 3 - SAPA – FANSIPAN LEGEND – ĐÈO Ô QUY HỒ 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách dùng điểm tâm sáng tại khách sạn. xe đưa đoàn ra ga Sapa, Quý khách trải nghiệm đến khu du lịch Fansipan Legend bằng Tàu hỏa leo núi Mường Hoa hiện đại nhất Việt Nam với tổng chiều dài gần 2000m, thưởng ngoạn bức tranh phong cảnh đầy màu sắc của cánh rừng nguyên sinh, thung lũng Mường Hoa.</p>
                <p>- Chinh phục đỉnh núi Fansipan với độ cao 3.143m hùng vĩ bằng cáp treo (chi phí tự túc). </p>
                <p>- Lễ Phật tại chùa Trình hay cầu phúc lộc, bình an cho gia đình tại Bích Vân Thiền Tự trong hệ thống cảnh quan tâm linh trên đỉnh Fansipan.</p>
                <p> Tiếp tục hành trình, Quý khách dùng cơm trưa và tham quan: </p>
                <p>- Chinh phục đèo Ô Quy Hồ - con đèo đẹp, hùng vĩ và dài nhất trong Tứ Đại Đỉnh Đèo miền Bắc.</p>
                <p>- Khu du lịch Cổng Trời Ô Quy Hồ - một trong những điểm săn mây, ngắm hoàng hôn cực đẹp tại Sapa.</p>
                <p>Quý khách dùng cơm tối tại Sapa và tự do nghỉ ngơi.</p>
                <p>Nghỉ đêm tại Sapa.</p>
                <h3>Ngày 4 - SAPA – LÀO CAI – HÀ NỘI 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe khởi hành đưa Quý khách về Hà Nội, trên đường dừng tham quan mua sắm tại Siêu thị Du lịch nông nghiệp OCOP Phú Thọ - chợ Tp Việt Trì và dùng cơm trưa tại nhà hàng địa phương. Đến Hà Nội nhận phòng khách sạn nghỉ ngơi hoặc tự do đi tham quan Hồ Hoàn Kiếm ngắm bên ngoài Tháp Rùa, Đền Ngọc Sơn, Cầu Thê Húc.</p>
                <p>Nghỉ đêm tại Hà Nội. </p>
                <h3>Ngày 5 - HÀ NỘI – YÊN TỬ – HẠ LONG 03 Bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng. Xe khởi hành đưa Quý khách đến thành phố biển Hạ Long theo quốc lộ 18, trên đường dừng ăn trưa và tham quan vùng đất thiêng Yên Tử: </p>
                <p>- Tham quan chụp hình Làng Nương và dùng bữa trưa tại Cơm Quê </p>
                <p>- Quý khách lên cáp treo du ngoạn thắng cảnh thiên nhiên Đông Yên Tử (chi phí cáp treo tự túc), nơi còn lưu giữ nhiều di tích lịch sử mệnh danh “Đất tổ Phật giáo Việt Nam”, chiêm bái chùa Một Mái, chùa Hoa Yên – nơi tu hành của Phật Hoàng Trần Nhân Tông khai sinh ra dòng mới Thiền Phái Trúc Lâm, nằm trên lưng chừng núi ở độ cao 516m. Theo dấu chân Phật Hoàng viếng Chùa Đồng có tên Thiên Trúc Tự (chùa Cõi Phật), tọa lạc ở đỉnh cao nhất dãy Yên Tử (1.068m) – ngôi chùa bằng đồng lớn nhất Việt Nam.</p>
                <p>Đến Hạ Long, Quý khách tham quan mua sắm tại Trung tâm Mỹ Ngọc - Trung tâm Ngọc trai lớn nhất miền bắc Việt Nam.Tới đây Quý khách chiêm ngưỡng vẻ đẹp sang trọng, đủ các màu sắc hấp dẫn của những viên ngọc trai được nuôi trong lòng Di sản – Kỳ quan thiên nhiên thế giới vịnh Hạ Long tại phòng trưng bày sản phẩm. Quý khách có thể lựa chọn cho mình và người thân những đồ trang sức ngọc trai Hạ Long như ý và những sản phẩm lưu niệm được chế tác từ vỏ trai, sản phẩm đạt chất lượng OCOP 5 sao cấp Quốc gia đầu tiên của Việt Nam</p>
                <p>Dùng cơm chiều và nhận phòng khách sạn nghỉ ngơi. Buổi tối, Quý khách tự do khám phá nhiều hoạt động dịch vụ giải trí sôi nổi tại “phố cổ” Bãi Cháy - nằm cạnh công viên Sun World Hạ Long từ những ẩm thực đường phố đến các quán cà phê siêu dễ thương như Hòn Gai Coffee & Lounge hay thoải mái bung xõa tại The Mini Bar, Brothers Pub,…</p>
                <p>Nghỉ đêm tại Hạ Long. </p>
                <h3>Ngày 6 - VỊNH HẠ LONG – ĐỘNG THIÊN CUNG – NINH BÌNH 03 Bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe đưa quý khách ra bến tàu, xuống thuyền du ngoạn Vịnh Hạ Long - Thắng cảnh thiên nhiên tuyệt đẹp và vô cùng sống động, được UNESCO công nhận là di sản thiên nhiên Thế giới năm 1994.</p>
                <p>- Động Thiên Cung là một trong những động đẹp nhất ở Hạ Long. Vẻ đẹp nguy nga và lộng lẫy bởi những lớp thạch nhũ và những luồng ánh sáng lung linh.</p>
                <p>- Từ trên tàu ngắm nhìn các hòn đảo lớn nhỏ trong Vịnh Hạ Long: Hòn Gà Chọi, Hòn Lư Hương.</p>
                <p>Xe đón Quý khách tại bến thuyền khởi hành đi Ninh Bình - vùng đất mệnh danh là “Nơi mơ đến, chốn mong về” với nhiều di tích văn hóa, thiên nhiên vô cùng đặc sắc.</p>
                <p>Buổi tối quý khách tự do khám phá Phố cổ Hoa Lư, một không gian check-in cổ, đẹp, trầm mặc đẹp trở nên lung linh, huyền ảo hơn với sắc màu của những chiếc đèn lồng và Bảo Tháp trên Hồ Kỳ Lân; trải nghiệm nhiều hoạt động trò chơi dân gian và nhiều loại hình văn hóa nghệ thuật từ dân tộc như múa rối nước, nhảy múa Tắc Xình, hát xẩm, ... đến những buổi trình diễn acoustic sẽ được diễn ra vào các buổi tối ngày cuối tuần.</p>
                <p>Nghỉ đêm tại Ninh Bình.</p>
                <h3>Ngày 7 - NINH BÌNH – TRÀNG AN – BÁI ĐÍNH – SÂN BAY NỘI BÀI 02 Bữa ăn: (Sáng, Trưa)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe đưa Quý khách đi tham quan: </p>
                <p>- Khu Du Lịch Tràng An:  Quý khách lên thuyền truyền thống đi tham quan thắng cảnh hệ thống núi đá vôi hùng vĩ và các thung lũng ngập nước, thông với nhau bởi các dòng suối tạo nên các hang động ngập nước quanh năm. Điểm xuyến trong không gian hoang sơ, tĩnh lặng là hình ảnh rêu phong, cổ kính của các mái đình, đền, phủ nằm nép mình dưới chân các dãy núi cao. </p>
                <p>- Viếng Chùa Bái Đính - một quần thể chùa với nhiều kỷ lục Việt Nam như pho tượng phật Di Lặc bằng đồng nặng 80 tấn, hành lang với 500 tượng vị La Hán, tòa Bảo Tháp cao 99m…</p>
                <p>Xe khởi hành đưa Quý khách ra sân bay Nội Bài làm thủ tục đón chuyến bay về Tp.HCM. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.</p>',
                'tour_sale' => '12%',
                'total_seats' => 40,
                'booked_seats' => 0,
                'location_id' => 1,
                'guide_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Hà Nội - Yên Tử - Tràng An - Bái Đính',
                'tour_image' => 'Chua-Bai-Dinh.jpg',
                'start_day' => '2024-05-30',
                'time' => '7 ngày 6 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 9790000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Khu du lịch Tràng An nằm trong Quần thể danh thắng Tràng An (tỉnh  Ninh Bình) chỉ cách thủ đô Hà Nội chưa đầy 100km. Có lẽ vì thế mà nơi đây được đông đảo   du khách miền Bắc chọn làm điểm du lịch sinh thái, tâm linh mỗi dịp nghỉ hè, nghỉ lễ hay cuối tuần. Cùng khám phá xem nơi đây có đúng là “tiên cảnh chốn nhân gian” như du khách vẫn thường nhắc đến không nhé!',
                'tour_schedule' => '<h3>Ngày 1 - TPHCM – SÂN BAY NỘI BÀI (HÀ NỘI) 00 bữa ăn: (Tự túc ăn ngày đầu tiên)</h3>
                <p>Quý khách tập trung tại sân bay Tân Sơn Nhất (ga trong nước), hướng dẫn làm thủ tục cho Quý khách đáp chuyến bay đi Hà Nội. Đến sân bay Nội Bài, xe đưa quý khách về trung tâm Hà Nội nhận phòng khách sạn nghỉ ngơi. </p>
                <p>Nghỉ đêm tại Hà Nội.</p>
                <h3>Ngày 2 - HÀ NỘI – SAPA – BẢN CÁT CÁT 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng. Xe khởi hành đưa Quý khách đi tham quan:</p>
                <p>- Lăng Hồ Chủ Tịch (không viếng vào thứ 2, thứ 6 hàng tuần và giai đoạn bảo trì định kì hàng năm) tham quan và tìm hiểu cuộc đời và sự nghiệp của vị cha già dân tộc tại Nhà Sàn Bác Hồ, Bảo Tàng Hồ Chí Minh, Chùa Một Cột.</p>
                <p>Tiếp tục hành trình, Quý khách khởi hành đi Sapa theo cao tốc Hà Nội – Lào Cai. Trên đường, Quý khách dùng cơm trưa tại nhà hàng địa phương. Đến nơi, Quý khách tham quan:</p>
                <p>- Bản Cát Cát - đẹp như một bức tranh giữa vùng phố cổ Sapa, nơi đây thu hút du khách bởi cầu treo, thác nước, guồng nước và những mảng màu hoa mê hoặc du khách khi lạc bước đến đây. Thăm những nếp nhà của người Mông, Dao, Giáy trong bản, du khách sẽ không khỏi ngỡ ngàng trước vẻ đẹp mộng mị của một trong những ngôi làng cổ đẹp nhất Sapa. Tại đây Quý khách xem chương trình biểu diễn văn nghệ của người HMông.</p>
                <p>Quý khách dùng cơm tối và nhận phòng nghỉ ngơi hoặc tự do dạo phố ngắm nhà thờ Đá Sapa, tự do thưởng thức đặc sản vùng cao như: thịt lợn cắp nách nướng, trứng nướng, rượu táo mèo, giao lưu với người dân tộc vùng cao.</p>
                <p>Nghỉ đêm tại Sapa</p>
                <h3>Ngày 3 - SAPA – FANSIPAN LEGEND – ĐÈO Ô QUY HỒ 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách dùng điểm tâm sáng tại khách sạn. xe đưa đoàn ra ga Sapa, Quý khách trải nghiệm đến khu du lịch Fansipan Legend bằng Tàu hỏa leo núi Mường Hoa hiện đại nhất Việt Nam với tổng chiều dài gần 2000m, thưởng ngoạn bức tranh phong cảnh đầy màu sắc của cánh rừng nguyên sinh, thung lũng Mường Hoa.</p>
                <p>- Chinh phục đỉnh núi Fansipan với độ cao 3.143m hùng vĩ bằng cáp treo (chi phí tự túc). </p>
                <p>- Lễ Phật tại chùa Trình hay cầu phúc lộc, bình an cho gia đình tại Bích Vân Thiền Tự trong hệ thống cảnh quan tâm linh trên đỉnh Fansipan.</p>
                <p> Tiếp tục hành trình, Quý khách dùng cơm trưa và tham quan: </p>
                <p>- Chinh phục đèo Ô Quy Hồ - con đèo đẹp, hùng vĩ và dài nhất trong Tứ Đại Đỉnh Đèo miền Bắc.</p>
                <p>- Khu du lịch Cổng Trời Ô Quy Hồ - một trong những điểm săn mây, ngắm hoàng hôn cực đẹp tại Sapa.</p>
                <p>Quý khách dùng cơm tối tại Sapa và tự do nghỉ ngơi.</p>
                <p>Nghỉ đêm tại Sapa.</p>
                <h3>Ngày 4 - SAPA – LÀO CAI – HÀ NỘI 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe khởi hành đưa Quý khách về Hà Nội, trên đường dừng tham quan mua sắm tại Siêu thị Du lịch nông nghiệp OCOP Phú Thọ - chợ Tp Việt Trì và dùng cơm trưa tại nhà hàng địa phương. Đến Hà Nội nhận phòng khách sạn nghỉ ngơi hoặc tự do đi tham quan Hồ Hoàn Kiếm ngắm bên ngoài Tháp Rùa, Đền Ngọc Sơn, Cầu Thê Húc.</p>
                <p>Nghỉ đêm tại Hà Nội. </p>
                <h3>Ngày 5 - HÀ NỘI – YÊN TỬ – HẠ LONG 03 Bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng. Xe khởi hành đưa Quý khách đến thành phố biển Hạ Long theo quốc lộ 18, trên đường dừng ăn trưa và tham quan vùng đất thiêng Yên Tử: </p>
                <p>- Tham quan chụp hình Làng Nương và dùng bữa trưa tại Cơm Quê </p>
                <p>- Quý khách lên cáp treo du ngoạn thắng cảnh thiên nhiên Đông Yên Tử (chi phí cáp treo tự túc), nơi còn lưu giữ nhiều di tích lịch sử mệnh danh “Đất tổ Phật giáo Việt Nam”, chiêm bái chùa Một Mái, chùa Hoa Yên – nơi tu hành của Phật Hoàng Trần Nhân Tông khai sinh ra dòng mới Thiền Phái Trúc Lâm, nằm trên lưng chừng núi ở độ cao 516m. Theo dấu chân Phật Hoàng viếng Chùa Đồng có tên Thiên Trúc Tự (chùa Cõi Phật), tọa lạc ở đỉnh cao nhất dãy Yên Tử (1.068m) – ngôi chùa bằng đồng lớn nhất Việt Nam.</p>
                <p>Đến Hạ Long, Quý khách tham quan mua sắm tại Trung tâm Mỹ Ngọc - Trung tâm Ngọc trai lớn nhất miền bắc Việt Nam.Tới đây Quý khách chiêm ngưỡng vẻ đẹp sang trọng, đủ các màu sắc hấp dẫn của những viên ngọc trai được nuôi trong lòng Di sản – Kỳ quan thiên nhiên thế giới vịnh Hạ Long tại phòng trưng bày sản phẩm. Quý khách có thể lựa chọn cho mình và người thân những đồ trang sức ngọc trai Hạ Long như ý và những sản phẩm lưu niệm được chế tác từ vỏ trai, sản phẩm đạt chất lượng OCOP 5 sao cấp Quốc gia đầu tiên của Việt Nam</p>
                <p>Dùng cơm chiều và nhận phòng khách sạn nghỉ ngơi. Buổi tối, Quý khách tự do khám phá nhiều hoạt động dịch vụ giải trí sôi nổi tại “phố cổ” Bãi Cháy - nằm cạnh công viên Sun World Hạ Long từ những ẩm thực đường phố đến các quán cà phê siêu dễ thương như Hòn Gai Coffee & Lounge hay thoải mái bung xõa tại The Mini Bar, Brothers Pub,…</p>
                <p>Nghỉ đêm tại Hạ Long. </p>
                <h3>Ngày 6 - VỊNH HẠ LONG – ĐỘNG THIÊN CUNG – NINH BÌNH 03 Bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe đưa quý khách ra bến tàu, xuống thuyền du ngoạn Vịnh Hạ Long - Thắng cảnh thiên nhiên tuyệt đẹp và vô cùng sống động, được UNESCO công nhận là di sản thiên nhiên Thế giới năm 1994.</p>
                <p>- Động Thiên Cung là một trong những động đẹp nhất ở Hạ Long. Vẻ đẹp nguy nga và lộng lẫy bởi những lớp thạch nhũ và những luồng ánh sáng lung linh.</p>
                <p>- Từ trên tàu ngắm nhìn các hòn đảo lớn nhỏ trong Vịnh Hạ Long: Hòn Gà Chọi, Hòn Lư Hương.</p>
                <p>Xe đón Quý khách tại bến thuyền khởi hành đi Ninh Bình - vùng đất mệnh danh là “Nơi mơ đến, chốn mong về” với nhiều di tích văn hóa, thiên nhiên vô cùng đặc sắc.</p>
                <p>Buổi tối quý khách tự do khám phá Phố cổ Hoa Lư, một không gian check-in cổ, đẹp, trầm mặc đẹp trở nên lung linh, huyền ảo hơn với sắc màu của những chiếc đèn lồng và Bảo Tháp trên Hồ Kỳ Lân; trải nghiệm nhiều hoạt động trò chơi dân gian và nhiều loại hình văn hóa nghệ thuật từ dân tộc như múa rối nước, nhảy múa Tắc Xình, hát xẩm, ... đến những buổi trình diễn acoustic sẽ được diễn ra vào các buổi tối ngày cuối tuần.</p>
                <p>Nghỉ đêm tại Ninh Bình.</p>
                <h3>Ngày 7 - NINH BÌNH – TRÀNG AN – BÁI ĐÍNH – SÂN BAY NỘI BÀI 02 Bữa ăn: (Sáng, Trưa)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe đưa Quý khách đi tham quan: </p>
                <p>- Khu Du Lịch Tràng An:  Quý khách lên thuyền truyền thống đi tham quan thắng cảnh hệ thống núi đá vôi hùng vĩ và các thung lũng ngập nước, thông với nhau bởi các dòng suối tạo nên các hang động ngập nước quanh năm. Điểm xuyến trong không gian hoang sơ, tĩnh lặng là hình ảnh rêu phong, cổ kính của các mái đình, đền, phủ nằm nép mình dưới chân các dãy núi cao. </p>
                <p>- Viếng Chùa Bái Đính - một quần thể chùa với nhiều kỷ lục Việt Nam như pho tượng phật Di Lặc bằng đồng nặng 80 tấn, hành lang với 500 tượng vị La Hán, tòa Bảo Tháp cao 99m…</p>
                <p>Xe khởi hành đưa Quý khách ra sân bay Nội Bài làm thủ tục đón chuyến bay về Tp.HCM. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.</p>',
                'tour_sale' => '15%',
                'total_seats' => 40,
                'booked_seats' => 0,
                'location_id' => 1,
                'guide_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Đà Nẵng - Huế - Đầm Lập An - La Vang',
                'tour_image' => 'hue.jpg',
                'start_day' => '2024-05-26',
                'time' => '5 ngày 4 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 7490000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Đà Nẵng nằm giữa ba di sản thế giới: cố đô Huế, phố cổ Hội An và thánh địa Mỹ Sơn. Đà Nẵng còn có nhiều danh thắng tuyệt đẹp say lòng du khách như Ngũ Hành Sơn, Bà Nà, bán đảo Sơn Trà, đèo Hải Vân, sông Hàn thơ mộng và cầu quay Sông Hàn – niềm tự hào của thành phố, và biển Mỹ Khê đẹp nhất hành tinh.',
                'tour_schedule' => '<h3>Ngày 1 - TP HỒ CHÍ MINH – ĐÀ NẴNG – HUẾ (Ăn trưa, chiều)</h3>
                <p>Quý khách tập trung tại Ga đi Trong Nước, sân bay Tân Sơn Nhất, hướng dẫn viên Vietravel làm thủ tục cho Quý khách đáp chuyến bay đi Đà Nẵng. Xe đón Quý khách tại sân bay Đà Nẵng, lên đường đi Huế. Đoàn tham quan:</p>
                <p>– Chùa Thiên Mụ: ngôi chùa được xem là biểu tượng xứ Huế và là nơi lưu giữ nhiều cổ vật quý giá không chỉ về mặt lịch sử mà còn cả về nghệ thuật.</p>
                <p>– Đại Nội: hoàng cung xưa của 13 vị Vua triều Nguyễn, tham quan Ngọ Môn, Điện Thái Hòa, Tử Cấm Thành, Thế Miếu, Hiển Lâm Các, Cửu Đình, Điện Kiến Trung.</p>
                <p>Sau khi ăn tối, Quý khách tự do dạo phố đêm trải nghiệm một Huế về đêm không hề trầm mặc với các công trình trải theo chiều dài lịch sử mà như một thiếu nữ trẻ trung khoác lên mình bộ cánh sắc màu căng tràn nhựa sống với tại Phố đi bộ ven sông Hương hài hòa với vẻ lung linh cầu Trường Tiền, tranh thêu XQ, tự do thưởng thức các món đường phố xứ Huế như bánh mì lọc, chè Huế, ngắm nhìn thuyền rồng ngược xuôi bên bến Tòa Khâm văng vẳng âm vang điệu hò Huế. Khám phá khu phố Tây sôi động về đêm với nhiều quán xá đông vui, những hàng quà lưu niệm.</p>
                <p>Đoàn quay về khách sạn, nhận phòng tự do nghỉ ngơi.</p>
                <p>Nghỉ đêm tại Huế.</p>
                <h3>Ngày 2 - HUẾ – ĐỘNG THIÊN ĐƯỜNG – ĐỘNG PHONG NHA (Ăn sáng, trưa, chiều)</h3>
                <p>Dùng bữa sáng khách sạn. Quý khách khởi hành sớm đi Quảng Bình, đoàn ghé tham quan:</p>
                <p>–  Động Phong Nha: Nằm trong quần thể Di sản thiên nhiên thế giới Phong Nha - Kẻ Bàng, được xem như chốn thần tiên bởi hệ thống núi đá vôi và sông ngầm dài nhất thế giới.</p>
                <p>– Động Thiên Đường: Một trong những hang động kỳ vĩ nhất thế giới, được xem như hoàng cung dưới lòng đất, một nhánh thuộc Quần thể di sản thiên nhiên thế giới Vườn Quốc Gia Phong Nha Kẻ Bàng. </p>
                <p>Sau khi tham quan, đoàn khởi hành về khách sạn, nhận phòng tự do nghỉ ngơi và khám phá Quảng Bình về đêm.</p>
                <p>Nghỉ đêm tại Quảng Bình. </p>
                <h3>Ngày 3 - QUẢNG BÌNH - LA VANG - LẬP AN - ĐÀ NẴNG – HỘI AN (Ăn sáng, trưa, chiều)</h3>
                <p>Dùng bữa sáng tại khách sạn. Quý khách khởi hành về Đà Nẵng, trên đường đi dừng tham quan:</p>
                <p>- Thành cổ Quảng Trị: nghe hướng dẫn viên thuyết minh Khu phi quân sự DMZ và Cầu Hiền Lương Sông Bến Hải (Vĩ tuyến 17).</p>
                <p>- Thánh địa La Vang: một trong bốn tiểu vương cung thánh đường La Mã tại Việt Nam. </p>
                <h5>(Ghi chú: Giai đoạn từ 08/08 – 16/08 hàng năm, Thánh Địa La Vang diễn ra "Đại Hội Hành Hương Đức Mẹ La Vang" hàng năm, nên các tour khởi hành trong giai đoạn này sẽ không vào tham quan La Vang)</h5>
                <p>- Đầm Lập An: ngắm cảnh mây bồng bềnh trên những chop núi bao bọc quanh đầm.</p>
                <p>- Tinh dầu tràm Thái Hà: Huế được coi là xứ sở của loại dầu tràm nổi danh khắp nước với công dụng tuyệt vời, là phương thuốc lành tính, an toàn với mọi lứa tuổi, giúp tiêu tan cái mệt mỏi, các cơn đau kinh niên, cho giấc ngủ được sâu hơn,…</p>
                <p>- Bán đảo Sơn Trà và viếng Chùa Linh Ứng: Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam. Đứng nơi đây, quý khách sẽ được chiêm ngưỡng toàn cảnh thành phố, núi rừng và biển đảo Sơn Trà một cách hoàn hảo nhất.</p>
                <p>- Phố Cổ Hội An: Chùa Cầu, Nhà Cổ Phùng Hưng, Hội Quán Phước Kiến, Cơ sở Thủ Công Mỹ Nghệ,… Tự do thả đèn hoa đăng cầu sức khỏe bình an & phúc lộc năm mới trên dòng sông Hoài…. (chi phí tự túc). </p>
                <p>Đoàn quay về Đà Nẵng, nhận phòng khách sạn nghỉ ngơi.</p>
                <p>Nghỉ đêm tại Đà Nẵng.  </p>
                <h3>Ngày 4 - ĐÀ NẴNG - KHU DU LỊCH BÀ NÀ - CẦU VÀNG (Ăn sáng, chiều, tự túc bữa trưa)</h3>
                <p>Dùng bữa sáng tại khách sạn. Xe đưa Quý khách đi tham quan: </p>
                <p>- Khu du lịch Bà Nà (chi phí cáp treo & ăn trưa tự túc): tận hưởng không khí se lạnh của Đà Lạt tại miền Trung, đoàn tự do tham quan Chùa Linh Ứng, Hầm Rượu Debay, vườn hoa Le Jardin D’Amour, Khu Tâm linh mới của Bà Nà viếng Đền Lĩnh Chúa Linh Từ, khu vui chơi Fantasy Park, tự do chụp hình tại Cầu Vàng điểm tham quan siêu hot tại Bà Nà… Ăn trưa tại Bà Nà tự túc. Sau đó đoàn tiếp tục tham quan vui chơi đến giờ xuống cáp. </p>
                <p>- Làng Đá Non Nước Quốc Hiệp: mua sắm sản phẩm đá mỹ nghệ tạo phong thủy cho tổ ấm hoặc làm quà tặng ý nghĩa cho người thân và bạn bè.</p>
                <p>Buổi tối Quý khách tự túc đi dạo phố thưởng ngoạn cảnh đẹp của Đà Nẵng về đêm, ngắm nhìn Cầu Rồng, Cầu Tình Yêu, Cầu Trần Thị Lý, Trung Tâm Thương Mại, Khu phố ẩm thực, Café - Bar - Disco….</p>
                <p>Nghỉ đêm tại Đà Nẵng. </p>
                <h3>Ngày 5 - ĐÀ NẴNG – TP. HỒ CHÍ MINH (Ăn sáng)</h3>
                <p>Sau khi ăn sáng và trả phòng, đoàn khởi hành đi: </p>
                <p>– Mua sắm đặc sản phố biển tại Giao Mart hoặc Quà Đà Nẵng Thiên Phú: với hơn 2000 sản phẩm đặc sản Đà Nẵng, Miền Trung và các vùng miền lân cận, nổi bật nhất là chả bò, bò khô, mực rim me, mực khô, ghẹ sữa sốt và đầy đủ các loại khô cá,...</p>
                <p>Xe tiễn Quý khách ra sân bay Đà Nẵng đón chuyến bay trở về Tp.Hồ Chí Minh. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.   </p>',
                'tour_sale' => '5%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 2,
                'guide_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'La Vang - Động Phong Nha & Thiên Đường',
                'tour_image' => 'dongPhongNha.jpg',
                'start_day' => '2024-05-27',
                'time' => '5 ngày 4 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 7990000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Đà Nẵng nằm giữa ba di sản thế giới: cố đô Huế, phố cổ Hội An và thánh địa Mỹ Sơn. Đà Nẵng còn có nhiều danh thắng tuyệt đẹp say lòng du khách như Ngũ Hành Sơn, Bà Nà, bán đảo Sơn Trà, đèo Hải Vân, sông Hàn thơ mộng và cầu quay Sông Hàn – niềm tự hào của thành phố, và biển Mỹ Khê đẹp nhất hành tinh.',
                'tour_schedule' => '<h3>Ngày 1 - TP HỒ CHÍ MINH – ĐÀ NẴNG – HUẾ (Ăn trưa, chiều)</h3>
                <p>Quý khách tập trung tại Ga đi Trong Nước, sân bay Tân Sơn Nhất, hướng dẫn viên Vietravel làm thủ tục cho Quý khách đáp chuyến bay đi Đà Nẵng. Xe đón Quý khách tại sân bay Đà Nẵng, lên đường đi Huế. Đoàn tham quan:</p>
                <p>– Chùa Thiên Mụ: ngôi chùa được xem là biểu tượng xứ Huế và là nơi lưu giữ nhiều cổ vật quý giá không chỉ về mặt lịch sử mà còn cả về nghệ thuật.</p>
                <p>– Đại Nội: hoàng cung xưa của 13 vị Vua triều Nguyễn, tham quan Ngọ Môn, Điện Thái Hòa, Tử Cấm Thành, Thế Miếu, Hiển Lâm Các, Cửu Đình, Điện Kiến Trung.</p>
                <p>Sau khi ăn tối, Quý khách tự do dạo phố đêm trải nghiệm một Huế về đêm không hề trầm mặc với các công trình trải theo chiều dài lịch sử mà như một thiếu nữ trẻ trung khoác lên mình bộ cánh sắc màu căng tràn nhựa sống với tại Phố đi bộ ven sông Hương hài hòa với vẻ lung linh cầu Trường Tiền, tranh thêu XQ, tự do thưởng thức các món đường phố xứ Huế như bánh mì lọc, chè Huế, ngắm nhìn thuyền rồng ngược xuôi bên bến Tòa Khâm văng vẳng âm vang điệu hò Huế. Khám phá khu phố Tây sôi động về đêm với nhiều quán xá đông vui, những hàng quà lưu niệm.</p>
                <p>Đoàn quay về khách sạn, nhận phòng tự do nghỉ ngơi.</p>
                <p>Nghỉ đêm tại Huế.</p>
                <h3>Ngày 2 - HUẾ – ĐỘNG THIÊN ĐƯỜNG – ĐỘNG PHONG NHA (Ăn sáng, trưa, chiều)</h3>
                <p>Dùng bữa sáng khách sạn. Quý khách khởi hành sớm đi Quảng Bình, đoàn ghé tham quan:</p>
                <p>–  Động Phong Nha: Nằm trong quần thể Di sản thiên nhiên thế giới Phong Nha - Kẻ Bàng, được xem như chốn thần tiên bởi hệ thống núi đá vôi và sông ngầm dài nhất thế giới.</p>
                <p>– Động Thiên Đường: Một trong những hang động kỳ vĩ nhất thế giới, được xem như hoàng cung dưới lòng đất, một nhánh thuộc Quần thể di sản thiên nhiên thế giới Vườn Quốc Gia Phong Nha Kẻ Bàng. </p>
                <p>Sau khi tham quan, đoàn khởi hành về khách sạn, nhận phòng tự do nghỉ ngơi và khám phá Quảng Bình về đêm.</p>
                <p>Nghỉ đêm tại Quảng Bình. </p>
                <h3>Ngày 3 - QUẢNG BÌNH - LA VANG - LẬP AN - ĐÀ NẴNG – HỘI AN (Ăn sáng, trưa, chiều)</h3>
                <p>Dùng bữa sáng tại khách sạn. Quý khách khởi hành về Đà Nẵng, trên đường đi dừng tham quan:</p>
                <p>- Thành cổ Quảng Trị: nghe hướng dẫn viên thuyết minh Khu phi quân sự DMZ và Cầu Hiền Lương Sông Bến Hải (Vĩ tuyến 17).</p>
                <p>- Thánh địa La Vang: một trong bốn tiểu vương cung thánh đường La Mã tại Việt Nam. </p>
                <h5>(Ghi chú: Giai đoạn từ 08/08 – 16/08 hàng năm, Thánh Địa La Vang diễn ra "Đại Hội Hành Hương Đức Mẹ La Vang" hàng năm, nên các tour khởi hành trong giai đoạn này sẽ không vào tham quan La Vang)</h5>
                <p>- Đầm Lập An: ngắm cảnh mây bồng bềnh trên những chop núi bao bọc quanh đầm.</p>
                <p>- Tinh dầu tràm Thái Hà: Huế được coi là xứ sở của loại dầu tràm nổi danh khắp nước với công dụng tuyệt vời, là phương thuốc lành tính, an toàn với mọi lứa tuổi, giúp tiêu tan cái mệt mỏi, các cơn đau kinh niên, cho giấc ngủ được sâu hơn,…</p>
                <p>- Bán đảo Sơn Trà và viếng Chùa Linh Ứng: Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam. Đứng nơi đây, quý khách sẽ được chiêm ngưỡng toàn cảnh thành phố, núi rừng và biển đảo Sơn Trà một cách hoàn hảo nhất.</p>
                <p>- Phố Cổ Hội An: Chùa Cầu, Nhà Cổ Phùng Hưng, Hội Quán Phước Kiến, Cơ sở Thủ Công Mỹ Nghệ,… Tự do thả đèn hoa đăng cầu sức khỏe bình an & phúc lộc năm mới trên dòng sông Hoài…. (chi phí tự túc). </p>
                <p>Đoàn quay về Đà Nẵng, nhận phòng khách sạn nghỉ ngơi.</p>
                <p>Nghỉ đêm tại Đà Nẵng.  </p>
                <h3>Ngày 4 - ĐÀ NẴNG - KHU DU LỊCH BÀ NÀ - CẦU VÀNG (Ăn sáng, chiều, tự túc bữa trưa)</h3>
                <p>Dùng bữa sáng tại khách sạn. Xe đưa Quý khách đi tham quan: </p>
                <p>- Khu du lịch Bà Nà (chi phí cáp treo & ăn trưa tự túc): tận hưởng không khí se lạnh của Đà Lạt tại miền Trung, đoàn tự do tham quan Chùa Linh Ứng, Hầm Rượu Debay, vườn hoa Le Jardin D’Amour, Khu Tâm linh mới của Bà Nà viếng Đền Lĩnh Chúa Linh Từ, khu vui chơi Fantasy Park, tự do chụp hình tại Cầu Vàng điểm tham quan siêu hot tại Bà Nà… Ăn trưa tại Bà Nà tự túc. Sau đó đoàn tiếp tục tham quan vui chơi đến giờ xuống cáp. </p>
                <p>- Làng Đá Non Nước Quốc Hiệp: mua sắm sản phẩm đá mỹ nghệ tạo phong thủy cho tổ ấm hoặc làm quà tặng ý nghĩa cho người thân và bạn bè.</p>
                <p>Buổi tối Quý khách tự túc đi dạo phố thưởng ngoạn cảnh đẹp của Đà Nẵng về đêm, ngắm nhìn Cầu Rồng, Cầu Tình Yêu, Cầu Trần Thị Lý, Trung Tâm Thương Mại, Khu phố ẩm thực, Café - Bar - Disco….</p>
                <p>Nghỉ đêm tại Đà Nẵng. </p>
                <h3>Ngày 5 - ĐÀ NẴNG – TP. HỒ CHÍ MINH (Ăn sáng)</h3>
                <p>Sau khi ăn sáng và trả phòng, đoàn khởi hành đi: </p>
                <p>– Mua sắm đặc sản phố biển tại Giao Mart hoặc Quà Đà Nẵng Thiên Phú: với hơn 2000 sản phẩm đặc sản Đà Nẵng, Miền Trung và các vùng miền lân cận, nổi bật nhất là chả bò, bò khô, mực rim me, mực khô, ghẹ sữa sốt và đầy đủ các loại khô cá,...</p>
                <p>Xe tiễn Quý khách ra sân bay Đà Nẵng đón chuyến bay trở về Tp.Hồ Chí Minh. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.   </p>',
                'tour_sale' => '10%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 2,
                'guide_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Huế - Đầm Lập An - La Vang - Động Phong Nha',
                'tour_image' => 'damLapAn.jpg',
                'start_day' => '2024-05-28',
                'time' => '5 ngày 4 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 7690000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Đà Nẵng nằm giữa ba di sản thế giới: cố đô Huế, phố cổ Hội An và thánh địa Mỹ Sơn. Đà Nẵng còn có nhiều danh thắng tuyệt đẹp say lòng du khách như Ngũ Hành Sơn, Bà Nà, bán đảo Sơn Trà, đèo Hải Vân, sông Hàn thơ mộng và cầu quay Sông Hàn – niềm tự hào của thành phố, và biển Mỹ Khê đẹp nhất hành tinh.',
                'tour_schedule' => '<h3>Ngày 1 - TP HỒ CHÍ MINH – ĐÀ NẴNG – HUẾ (Ăn trưa, chiều)</h3>
                <p>Quý khách tập trung tại Ga đi Trong Nước, sân bay Tân Sơn Nhất, hướng dẫn viên Vietravel làm thủ tục cho Quý khách đáp chuyến bay đi Đà Nẵng. Xe đón Quý khách tại sân bay Đà Nẵng, lên đường đi Huế. Đoàn tham quan:</p>
                <p>– Chùa Thiên Mụ: ngôi chùa được xem là biểu tượng xứ Huế và là nơi lưu giữ nhiều cổ vật quý giá không chỉ về mặt lịch sử mà còn cả về nghệ thuật.</p>
                <p>– Đại Nội: hoàng cung xưa của 13 vị Vua triều Nguyễn, tham quan Ngọ Môn, Điện Thái Hòa, Tử Cấm Thành, Thế Miếu, Hiển Lâm Các, Cửu Đình, Điện Kiến Trung.</p>
                <p>Sau khi ăn tối, Quý khách tự do dạo phố đêm trải nghiệm một Huế về đêm không hề trầm mặc với các công trình trải theo chiều dài lịch sử mà như một thiếu nữ trẻ trung khoác lên mình bộ cánh sắc màu căng tràn nhựa sống với tại Phố đi bộ ven sông Hương hài hòa với vẻ lung linh cầu Trường Tiền, tranh thêu XQ, tự do thưởng thức các món đường phố xứ Huế như bánh mì lọc, chè Huế, ngắm nhìn thuyền rồng ngược xuôi bên bến Tòa Khâm văng vẳng âm vang điệu hò Huế. Khám phá khu phố Tây sôi động về đêm với nhiều quán xá đông vui, những hàng quà lưu niệm.</p>
                <p>Đoàn quay về khách sạn, nhận phòng tự do nghỉ ngơi.</p>
                <p>Nghỉ đêm tại Huế.</p>
                <h3>Ngày 2 - HUẾ – ĐỘNG THIÊN ĐƯỜNG – ĐỘNG PHONG NHA (Ăn sáng, trưa, chiều)</h3>
                <p>Dùng bữa sáng khách sạn. Quý khách khởi hành sớm đi Quảng Bình, đoàn ghé tham quan:</p>
                <p>–  Động Phong Nha: Nằm trong quần thể Di sản thiên nhiên thế giới Phong Nha - Kẻ Bàng, được xem như chốn thần tiên bởi hệ thống núi đá vôi và sông ngầm dài nhất thế giới.</p>
                <p>– Động Thiên Đường: Một trong những hang động kỳ vĩ nhất thế giới, được xem như hoàng cung dưới lòng đất, một nhánh thuộc Quần thể di sản thiên nhiên thế giới Vườn Quốc Gia Phong Nha Kẻ Bàng. </p>
                <p>Sau khi tham quan, đoàn khởi hành về khách sạn, nhận phòng tự do nghỉ ngơi và khám phá Quảng Bình về đêm.</p>
                <p>Nghỉ đêm tại Quảng Bình. </p>
                <h3>Ngày 3 - QUẢNG BÌNH - LA VANG - LẬP AN - ĐÀ NẴNG – HỘI AN (Ăn sáng, trưa, chiều)</h3>
                <p>Dùng bữa sáng tại khách sạn. Quý khách khởi hành về Đà Nẵng, trên đường đi dừng tham quan:</p>
                <p>- Thành cổ Quảng Trị: nghe hướng dẫn viên thuyết minh Khu phi quân sự DMZ và Cầu Hiền Lương Sông Bến Hải (Vĩ tuyến 17).</p>
                <p>- Thánh địa La Vang: một trong bốn tiểu vương cung thánh đường La Mã tại Việt Nam. </p>
                <h5>(Ghi chú: Giai đoạn từ 08/08 – 16/08 hàng năm, Thánh Địa La Vang diễn ra "Đại Hội Hành Hương Đức Mẹ La Vang" hàng năm, nên các tour khởi hành trong giai đoạn này sẽ không vào tham quan La Vang)</h5>
                <p>- Đầm Lập An: ngắm cảnh mây bồng bềnh trên những chop núi bao bọc quanh đầm.</p>
                <p>- Tinh dầu tràm Thái Hà: Huế được coi là xứ sở của loại dầu tràm nổi danh khắp nước với công dụng tuyệt vời, là phương thuốc lành tính, an toàn với mọi lứa tuổi, giúp tiêu tan cái mệt mỏi, các cơn đau kinh niên, cho giấc ngủ được sâu hơn,…</p>
                <p>- Bán đảo Sơn Trà và viếng Chùa Linh Ứng: Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam. Đứng nơi đây, quý khách sẽ được chiêm ngưỡng toàn cảnh thành phố, núi rừng và biển đảo Sơn Trà một cách hoàn hảo nhất.</p>
                <p>- Phố Cổ Hội An: Chùa Cầu, Nhà Cổ Phùng Hưng, Hội Quán Phước Kiến, Cơ sở Thủ Công Mỹ Nghệ,… Tự do thả đèn hoa đăng cầu sức khỏe bình an & phúc lộc năm mới trên dòng sông Hoài…. (chi phí tự túc). </p>
                <p>Đoàn quay về Đà Nẵng, nhận phòng khách sạn nghỉ ngơi.</p>
                <p>Nghỉ đêm tại Đà Nẵng.  </p>
                <h3>Ngày 4 - ĐÀ NẴNG - KHU DU LỊCH BÀ NÀ - CẦU VÀNG (Ăn sáng, chiều, tự túc bữa trưa)</h3>
                <p>Dùng bữa sáng tại khách sạn. Xe đưa Quý khách đi tham quan: </p>
                <p>- Khu du lịch Bà Nà (chi phí cáp treo & ăn trưa tự túc): tận hưởng không khí se lạnh của Đà Lạt tại miền Trung, đoàn tự do tham quan Chùa Linh Ứng, Hầm Rượu Debay, vườn hoa Le Jardin D’Amour, Khu Tâm linh mới của Bà Nà viếng Đền Lĩnh Chúa Linh Từ, khu vui chơi Fantasy Park, tự do chụp hình tại Cầu Vàng điểm tham quan siêu hot tại Bà Nà… Ăn trưa tại Bà Nà tự túc. Sau đó đoàn tiếp tục tham quan vui chơi đến giờ xuống cáp. </p>
                <p>- Làng Đá Non Nước Quốc Hiệp: mua sắm sản phẩm đá mỹ nghệ tạo phong thủy cho tổ ấm hoặc làm quà tặng ý nghĩa cho người thân và bạn bè.</p>
                <p>Buổi tối Quý khách tự túc đi dạo phố thưởng ngoạn cảnh đẹp của Đà Nẵng về đêm, ngắm nhìn Cầu Rồng, Cầu Tình Yêu, Cầu Trần Thị Lý, Trung Tâm Thương Mại, Khu phố ẩm thực, Café - Bar - Disco….</p>
                <p>Nghỉ đêm tại Đà Nẵng. </p>
                <h3>Ngày 5 - ĐÀ NẴNG – TP. HỒ CHÍ MINH (Ăn sáng)</h3>
                <p>Sau khi ăn sáng và trả phòng, đoàn khởi hành đi: </p>
                <p>– Mua sắm đặc sản phố biển tại Giao Mart hoặc Quà Đà Nẵng Thiên Phú: với hơn 2000 sản phẩm đặc sản Đà Nẵng, Miền Trung và các vùng miền lân cận, nổi bật nhất là chả bò, bò khô, mực rim me, mực khô, ghẹ sữa sốt và đầy đủ các loại khô cá,...</p>
                <p>Xe tiễn Quý khách ra sân bay Đà Nẵng đón chuyến bay trở về Tp.Hồ Chí Minh. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.   </p>',
                'tour_sale' => '10%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 2,
                'guide_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_name' => 'Đà Nẵng - La Vang - Động Phong Nha',
                'tour_image' => 'laVang.jpg',
                'start_day' => '2024-05-29',
                'time' => '5 ngày 4 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 8090000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Đà Nẵng nằm giữa ba di sản thế giới: cố đô Huế, phố cổ Hội An và thánh địa Mỹ Sơn. Đà Nẵng còn có nhiều danh thắng tuyệt đẹp say lòng du khách như Ngũ Hành Sơn, Bà Nà, bán đảo Sơn Trà, đèo Hải Vân, sông Hàn thơ mộng và cầu quay Sông Hàn – niềm tự hào của thành phố, và biển Mỹ Khê đẹp nhất hành tinh.',
                'tour_schedule' => '<h3>Ngày 1 - TP HỒ CHÍ MINH – ĐÀ NẴNG – HUẾ (Ăn trưa, chiều)</h3>
                <p>Quý khách tập trung tại Ga đi Trong Nước, sân bay Tân Sơn Nhất, hướng dẫn viên Vietravel làm thủ tục cho Quý khách đáp chuyến bay đi Đà Nẵng. Xe đón Quý khách tại sân bay Đà Nẵng, lên đường đi Huế. Đoàn tham quan:</p>
                <p>– Chùa Thiên Mụ: ngôi chùa được xem là biểu tượng xứ Huế và là nơi lưu giữ nhiều cổ vật quý giá không chỉ về mặt lịch sử mà còn cả về nghệ thuật.</p>
                <p>– Đại Nội: hoàng cung xưa của 13 vị Vua triều Nguyễn, tham quan Ngọ Môn, Điện Thái Hòa, Tử Cấm Thành, Thế Miếu, Hiển Lâm Các, Cửu Đình, Điện Kiến Trung.</p>
                <p>Sau khi ăn tối, Quý khách tự do dạo phố đêm trải nghiệm một Huế về đêm không hề trầm mặc với các công trình trải theo chiều dài lịch sử mà như một thiếu nữ trẻ trung khoác lên mình bộ cánh sắc màu căng tràn nhựa sống với tại Phố đi bộ ven sông Hương hài hòa với vẻ lung linh cầu Trường Tiền, tranh thêu XQ, tự do thưởng thức các món đường phố xứ Huế như bánh mì lọc, chè Huế, ngắm nhìn thuyền rồng ngược xuôi bên bến Tòa Khâm văng vẳng âm vang điệu hò Huế. Khám phá khu phố Tây sôi động về đêm với nhiều quán xá đông vui, những hàng quà lưu niệm.</p>
                <p>Đoàn quay về khách sạn, nhận phòng tự do nghỉ ngơi.</p>
                <p>Nghỉ đêm tại Huế.</p>
                <h3>Ngày 2 - HUẾ – ĐỘNG THIÊN ĐƯỜNG – ĐỘNG PHONG NHA (Ăn sáng, trưa, chiều)</h3>
                <p>Dùng bữa sáng khách sạn. Quý khách khởi hành sớm đi Quảng Bình, đoàn ghé tham quan:</p>
                <p>–  Động Phong Nha: Nằm trong quần thể Di sản thiên nhiên thế giới Phong Nha - Kẻ Bàng, được xem như chốn thần tiên bởi hệ thống núi đá vôi và sông ngầm dài nhất thế giới.</p>
                <p>– Động Thiên Đường: Một trong những hang động kỳ vĩ nhất thế giới, được xem như hoàng cung dưới lòng đất, một nhánh thuộc Quần thể di sản thiên nhiên thế giới Vườn Quốc Gia Phong Nha Kẻ Bàng. </p>
                <p>Sau khi tham quan, đoàn khởi hành về khách sạn, nhận phòng tự do nghỉ ngơi và khám phá Quảng Bình về đêm.</p>
                <p>Nghỉ đêm tại Quảng Bình. </p>
                <h3>Ngày 3 - QUẢNG BÌNH - LA VANG - LẬP AN - ĐÀ NẴNG – HỘI AN (Ăn sáng, trưa, chiều)</h3>
                <p>Dùng bữa sáng tại khách sạn. Quý khách khởi hành về Đà Nẵng, trên đường đi dừng tham quan:</p>
                <p>- Thành cổ Quảng Trị: nghe hướng dẫn viên thuyết minh Khu phi quân sự DMZ và Cầu Hiền Lương Sông Bến Hải (Vĩ tuyến 17).</p>
                <p>- Thánh địa La Vang: một trong bốn tiểu vương cung thánh đường La Mã tại Việt Nam. </p>
                <h5>(Ghi chú: Giai đoạn từ 08/08 – 16/08 hàng năm, Thánh Địa La Vang diễn ra "Đại Hội Hành Hương Đức Mẹ La Vang" hàng năm, nên các tour khởi hành trong giai đoạn này sẽ không vào tham quan La Vang)</h5>
                <p>- Đầm Lập An: ngắm cảnh mây bồng bềnh trên những chop núi bao bọc quanh đầm.</p>
                <p>- Tinh dầu tràm Thái Hà: Huế được coi là xứ sở của loại dầu tràm nổi danh khắp nước với công dụng tuyệt vời, là phương thuốc lành tính, an toàn với mọi lứa tuổi, giúp tiêu tan cái mệt mỏi, các cơn đau kinh niên, cho giấc ngủ được sâu hơn,…</p>
                <p>- Bán đảo Sơn Trà và viếng Chùa Linh Ứng: Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam. Đứng nơi đây, quý khách sẽ được chiêm ngưỡng toàn cảnh thành phố, núi rừng và biển đảo Sơn Trà một cách hoàn hảo nhất.</p>
                <p>- Phố Cổ Hội An: Chùa Cầu, Nhà Cổ Phùng Hưng, Hội Quán Phước Kiến, Cơ sở Thủ Công Mỹ Nghệ,… Tự do thả đèn hoa đăng cầu sức khỏe bình an & phúc lộc năm mới trên dòng sông Hoài…. (chi phí tự túc). </p>
                <p>Đoàn quay về Đà Nẵng, nhận phòng khách sạn nghỉ ngơi.</p>
                <p>Nghỉ đêm tại Đà Nẵng.  </p>
                <h3>Ngày 4 - ĐÀ NẴNG - KHU DU LỊCH BÀ NÀ - CẦU VÀNG (Ăn sáng, chiều, tự túc bữa trưa)</h3>
                <p>Dùng bữa sáng tại khách sạn. Xe đưa Quý khách đi tham quan: </p>
                <p>- Khu du lịch Bà Nà (chi phí cáp treo & ăn trưa tự túc): tận hưởng không khí se lạnh của Đà Lạt tại miền Trung, đoàn tự do tham quan Chùa Linh Ứng, Hầm Rượu Debay, vườn hoa Le Jardin D’Amour, Khu Tâm linh mới của Bà Nà viếng Đền Lĩnh Chúa Linh Từ, khu vui chơi Fantasy Park, tự do chụp hình tại Cầu Vàng điểm tham quan siêu hot tại Bà Nà… Ăn trưa tại Bà Nà tự túc. Sau đó đoàn tiếp tục tham quan vui chơi đến giờ xuống cáp. </p>
                <p>- Làng Đá Non Nước Quốc Hiệp: mua sắm sản phẩm đá mỹ nghệ tạo phong thủy cho tổ ấm hoặc làm quà tặng ý nghĩa cho người thân và bạn bè.</p>
                <p>Buổi tối Quý khách tự túc đi dạo phố thưởng ngoạn cảnh đẹp của Đà Nẵng về đêm, ngắm nhìn Cầu Rồng, Cầu Tình Yêu, Cầu Trần Thị Lý, Trung Tâm Thương Mại, Khu phố ẩm thực, Café - Bar - Disco….</p>
                <p>Nghỉ đêm tại Đà Nẵng. </p>
                <h3>Ngày 5 - ĐÀ NẴNG – TP. HỒ CHÍ MINH (Ăn sáng)</h3>
                <p>Sau khi ăn sáng và trả phòng, đoàn khởi hành đi: </p>
                <p>– Mua sắm đặc sản phố biển tại Giao Mart hoặc Quà Đà Nẵng Thiên Phú: với hơn 2000 sản phẩm đặc sản Đà Nẵng, Miền Trung và các vùng miền lân cận, nổi bật nhất là chả bò, bò khô, mực rim me, mực khô, ghẹ sữa sốt và đầy đủ các loại khô cá,...</p>
                <p>Xe tiễn Quý khách ra sân bay Đà Nẵng đón chuyến bay trở về Tp.Hồ Chí Minh. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.   </p>',
                'tour_sale' => '10%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 2,
                'guide_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Quy Nhơn - Eo Gió - Kỳ Co - Phú Yên',
                'tour_image' => 'quyNhon.jpg',
                'start_day' => '2024-05-26',
                'time' => '4 ngày 3 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 6590000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Quy Nhơn có lịch sử dài 400 năm, chịu ảnh hưởng Chămpa thế kỷ 11, triều đại Tây Sơn và cảng Thị Nại thế kỷ 18. Thiên nhiên hoang sơ tĩnh lặng, núi đồi, đầm lầy nước mặn, đường bờ biển dài 42km với các bán đảo xinh đẹp. Quy Nhơn là đô thị loại I, đang phát triển thành trung tâm du lịch của miền Trung.',
                'tour_schedule' => '<h3>Ngày 1 - TP.HỒ CHÍ MINH – QUY NHƠN Số bữa ăn: 1 bữa (tối)</h3>
                <p>Quý khách tập trung tại ga đi Trong Nước Sân bay Tân Sơn Nhất, hướng dẫn viên hỗ trợ làm thủ tục cho đoàn đáp chuyến bay đi sân bay Phù Cát (Quy Nhơn). Đến nơi, xe và hướng dẫn viên Vietravel đón đoàn đi tham quan:  </p>
                <p>- Chùa Thiên Hưng: Vẻ đẹp của “Phượng Hoàng cổ trấn” phiên bản Việt, là một trong những nơi không thể bỏ qua khi đến Quy Nhơn – Bình Định.</p>
                <p>Đoàn ăn tối và tự do khám phá thành phố biển về đêm với các quán cà phê nổi tiếng check in đẹp như: Surf Bar, S-Blue Café, Mộc Trà Café…hoặc thưởng thức hải sản tại phố ẩm thực Xuân Diệu, khu hồ sinh thái nổi tiếng với món: bọ biển, cua Huỳnh Đế và các loại ốc đặc trưng của vùng biển Quy Nhơn,.. (chi phí tự túc). </p>
                <p>Nghỉ đêm tại Quy Nhơn.</p>
                <h3>Ngày 2 - QUY NHƠN – PHÚ YÊN Số bữa ăn: 3 bữa (sáng, trưa, tối)</h3>
                <p>Dùng bữa sáng tại khách sạn, xe đưa đoàn khởi hành đi Phú Yên tham quan:</p>
                <p>- Nhà Thờ Mằng Lăng: nơi lưu giữ cuốn kinh thánh bằng chữ Quốc Ngữ đầu tiên của Việt Nam.</p>
                <p>- Gành Đá Dĩa: thắng cảnh độc nhất vô nhị của tỉnh Phú Yên và của Quốc Gia</p>
                <p>- Trên đường đi Quý khách còn được chiêm ngưỡng cảnh Đầm Ô Loan.</p>
                <p>- Quảng Đức Xưa: được chiêm ngưỡng những căn nhà gỗ cổ xưa được chạm khắc thủ công tinh xảo với những di vật, cổ vật bài trí hài hòa, đặc biệt là bộ sưu tập gốm Quảng Đức. Đến với Quảng Đức Xưa còn là đến với không gian làng nghề truyền thống và những món ăn dân giã. Du khách có thể thử dệt chiếu, nhâm nhi một tách trà ngon hay chọn cho mình một chiếc bánh đậm vị quê.</p>
                <p>Buổi chiều xe đưa đoàn trở về TP.Quy Nhơn. </p>
                <p>Nghỉ đêm tại Quy Nhơn </p>
                <h3>Ngày 3 - QUY NHƠN - EO GIÓ – KỲ CO Số bữa ăn: 3 bữa (sáng, trưa, tối)</h3>
                <p>Dùng bữa sáng tại khách sạn. Xe đưa đoàn đi tham quan: </p>
                <p>- Kỳ Co: với màu nước trong xanh, bãi cát trắng dài và mịn, những cơn sóng biển êm ái chính là điểm đến ấn tượng thu hút nhiều du khách trong thời gian gần đây. Ngoài tắm biển và thư giãn, quý khách có thể chụp hình check in nhiều góc cực đẹp.  </p>
                <p>- Eo Gió: nơi vẫn còn giữ được cho mình vẻ đẹp tự nhiên đầy hoang sơ. Đứng từ trên cao nhìn xuống, Eo Gió như một bức tranh sơn thủy hữu tình với trời, mây, nước… biển núi ôm nhau vừa gợi cảm, vừa hoang sơ đầy quyến rũ </p>
                <p>- Khu du lịch Ghềnh Ráng Tiên Sa, viếng Mộ Hàn Mặc Tử: mộ nằm dựa lưng vào núi, nhìn bao quát cả dải bờ biển Quy Nhơn chạy dài trước mặt, hút trọn tầm mắt một phần thành phố Quy Nhơn.</p>
                <p>- Mua sắm các đặc sản Quy Nhơn tại shop Hương Biển như Rượu Bàu Đá, Nem Chợ Huyện, Bánh Hồng, Tré Bình Định, Bánh Ít Lá Gai…</p>
                <p>Buổi tối Quý khách tự do nghỉ ngơi tham quan thưởng thức đặc sản Quy Nhơn: hải sản, bánh xèo tôm nhảy,…</p>
                <p>Nghỉ đêm tại Quy Nhơn.   </p>
                <p>Ghi chú: Trong trường hợp Quý khách không đi tham quan Eo Gió + Kỳ Co, ở lại khách sạn/resort tự do tắm biển hoặc nghỉ ngơi… vui lòng báo ngay khi đăng ký hoặc thanh toán, Vietravel sẽ hoàn chi phí: ăn trưa và phí tham quan là 400.000VND/ khách. Trong trường hợp báo sau sẽ không hoàn giảm. </p>
                <p>Ngày 4 - QUY NHƠN - TP.HỒ CHÍ MINH Số bữa ăn: 1 bữa (sáng)</p>
                <p>Dùng bữa sáng tại khách sạn, trả phòng. Xe đưa đoàn đi tham quan:</p>
                <p>- Khu du lịch Hầm Hô: lâm viên hoang dã và nên thơ, đoàn khám phá cảnh non nước hữu tình. Bên cạnh đó, Quý khách có thể tự túc lựa chọn thêm dịch vụ khác như: xe ngựa, câu cá thư giãn, chèo thuyền trên sông Kút, nghỉ võng dưới tán cây rừng đại ngàn…</p>
                <p>Xe đưa đoàn ra sân bay Phù Cát đáp chuyến bay về Tp.Hồ Chí Minh. Chia tay Quý khách và kết thúc chương trình tại sân bay.</p>',
                'tour_sale' => '10%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 2,
                'guide_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Eo Gió - Kỳ Co - Phú Yên - Gành Đá Dĩa',
                'tour_image' => 'ganhDaDia.jpg',
                'start_day' => '2024-05-27',
                'time' => '4 ngày 3 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 6690000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Quy Nhơn có lịch sử dài 400 năm, chịu ảnh hưởng Chămpa thế kỷ 11, triều đại Tây Sơn và cảng Thị Nại thế kỷ 18. Thiên nhiên hoang sơ tĩnh lặng, núi đồi, đầm lầy nước mặn, đường bờ biển dài 42km với các bán đảo xinh đẹp. Quy Nhơn là đô thị loại I, đang phát triển thành trung tâm du lịch của miền Trung.',
                'tour_schedule' => '<h3>Ngày 1 - TP.HỒ CHÍ MINH – QUY NHƠN Số bữa ăn: 1 bữa (tối)</h3>
                <p>Quý khách tập trung tại ga đi Trong Nước Sân bay Tân Sơn Nhất, hướng dẫn viên hỗ trợ làm thủ tục cho đoàn đáp chuyến bay đi sân bay Phù Cát (Quy Nhơn). Đến nơi, xe và hướng dẫn viên Vietravel đón đoàn đi tham quan:  </p>
                <p>- Chùa Thiên Hưng: Vẻ đẹp của “Phượng Hoàng cổ trấn” phiên bản Việt, là một trong những nơi không thể bỏ qua khi đến Quy Nhơn – Bình Định.</p>
                <p>Đoàn ăn tối và tự do khám phá thành phố biển về đêm với các quán cà phê nổi tiếng check in đẹp như: Surf Bar, S-Blue Café, Mộc Trà Café…hoặc thưởng thức hải sản tại phố ẩm thực Xuân Diệu, khu hồ sinh thái nổi tiếng với món: bọ biển, cua Huỳnh Đế và các loại ốc đặc trưng của vùng biển Quy Nhơn,.. (chi phí tự túc). </p>
                <p>Nghỉ đêm tại Quy Nhơn.</p>
                <h3>Ngày 2 - QUY NHƠN – PHÚ YÊN Số bữa ăn: 3 bữa (sáng, trưa, tối)</h3>
                <p>Dùng bữa sáng tại khách sạn, xe đưa đoàn khởi hành đi Phú Yên tham quan:</p>
                <p>- Nhà Thờ Mằng Lăng: nơi lưu giữ cuốn kinh thánh bằng chữ Quốc Ngữ đầu tiên của Việt Nam.</p>
                <p>- Gành Đá Dĩa: thắng cảnh độc nhất vô nhị của tỉnh Phú Yên và của Quốc Gia</p>
                <p>- Trên đường đi Quý khách còn được chiêm ngưỡng cảnh Đầm Ô Loan.</p>
                <p>- Quảng Đức Xưa: được chiêm ngưỡng những căn nhà gỗ cổ xưa được chạm khắc thủ công tinh xảo với những di vật, cổ vật bài trí hài hòa, đặc biệt là bộ sưu tập gốm Quảng Đức. Đến với Quảng Đức Xưa còn là đến với không gian làng nghề truyền thống và những món ăn dân giã. Du khách có thể thử dệt chiếu, nhâm nhi một tách trà ngon hay chọn cho mình một chiếc bánh đậm vị quê.</p>
                <p>Buổi chiều xe đưa đoàn trở về TP.Quy Nhơn. </p>
                <p>Nghỉ đêm tại Quy Nhơn </p>
                <h3>Ngày 3 - QUY NHƠN - EO GIÓ – KỲ CO Số bữa ăn: 3 bữa (sáng, trưa, tối)</h3>
                <p>Dùng bữa sáng tại khách sạn. Xe đưa đoàn đi tham quan: </p>
                <p>- Kỳ Co: với màu nước trong xanh, bãi cát trắng dài và mịn, những cơn sóng biển êm ái chính là điểm đến ấn tượng thu hút nhiều du khách trong thời gian gần đây. Ngoài tắm biển và thư giãn, quý khách có thể chụp hình check in nhiều góc cực đẹp.  </p>
                <p>- Eo Gió: nơi vẫn còn giữ được cho mình vẻ đẹp tự nhiên đầy hoang sơ. Đứng từ trên cao nhìn xuống, Eo Gió như một bức tranh sơn thủy hữu tình với trời, mây, nước… biển núi ôm nhau vừa gợi cảm, vừa hoang sơ đầy quyến rũ </p>
                <p>- Khu du lịch Ghềnh Ráng Tiên Sa, viếng Mộ Hàn Mặc Tử: mộ nằm dựa lưng vào núi, nhìn bao quát cả dải bờ biển Quy Nhơn chạy dài trước mặt, hút trọn tầm mắt một phần thành phố Quy Nhơn.</p>
                <p>- Mua sắm các đặc sản Quy Nhơn tại shop Hương Biển như Rượu Bàu Đá, Nem Chợ Huyện, Bánh Hồng, Tré Bình Định, Bánh Ít Lá Gai…</p>
                <p>Buổi tối Quý khách tự do nghỉ ngơi tham quan thưởng thức đặc sản Quy Nhơn: hải sản, bánh xèo tôm nhảy,…</p>
                <p>Nghỉ đêm tại Quy Nhơn.   </p>
                <p>Ghi chú: Trong trường hợp Quý khách không đi tham quan Eo Gió + Kỳ Co, ở lại khách sạn/resort tự do tắm biển hoặc nghỉ ngơi… vui lòng báo ngay khi đăng ký hoặc thanh toán, Vietravel sẽ hoàn chi phí: ăn trưa và phí tham quan là 400.000VND/ khách. Trong trường hợp báo sau sẽ không hoàn giảm. </p>
                <p>Ngày 4 - QUY NHƠN - TP.HỒ CHÍ MINH Số bữa ăn: 1 bữa (sáng)</p>
                <p>Dùng bữa sáng tại khách sạn, trả phòng. Xe đưa đoàn đi tham quan:</p>
                <p>- Khu du lịch Hầm Hô: lâm viên hoang dã và nên thơ, đoàn khám phá cảnh non nước hữu tình. Bên cạnh đó, Quý khách có thể tự túc lựa chọn thêm dịch vụ khác như: xe ngựa, câu cá thư giãn, chèo thuyền trên sông Kút, nghỉ võng dưới tán cây rừng đại ngàn…</p>
                <p>Xe đưa đoàn ra sân bay Phù Cát đáp chuyến bay về Tp.Hồ Chí Minh. Chia tay Quý khách và kết thúc chương trình tại sân bay.</p>',
                'tour_sale' => '10%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 2,
                'guide_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_name' => 'Quy Nhơn - Eo Gió - Phú Yên - Gành Đá Dĩa',
                'tour_image' => 'thapNghinhPhong.jpg',
                'start_day' => '2024-05-27',
                'time' => '4 ngày 3 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 6690000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Quy Nhơn có lịch sử dài 400 năm, chịu ảnh hưởng Chămpa thế kỷ 11, triều đại Tây Sơn và cảng Thị Nại thế kỷ 18. Thiên nhiên hoang sơ tĩnh lặng, núi đồi, đầm lầy nước mặn, đường bờ biển dài 42km với các bán đảo xinh đẹp. Quy Nhơn là đô thị loại I, đang phát triển thành trung tâm du lịch của miền Trung.',
                'tour_schedule' => '<h3>Ngày 1 - TP.HỒ CHÍ MINH – QUY NHƠN Số bữa ăn: 1 bữa (tối)</h3>
                <p>Quý khách tập trung tại ga đi Trong Nước Sân bay Tân Sơn Nhất, hướng dẫn viên hỗ trợ làm thủ tục cho đoàn đáp chuyến bay đi sân bay Phù Cát (Quy Nhơn). Đến nơi, xe và hướng dẫn viên Vietravel đón đoàn đi tham quan:  </p>
                <p>- Chùa Thiên Hưng: Vẻ đẹp của “Phượng Hoàng cổ trấn” phiên bản Việt, là một trong những nơi không thể bỏ qua khi đến Quy Nhơn – Bình Định.</p>
                <p>Đoàn ăn tối và tự do khám phá thành phố biển về đêm với các quán cà phê nổi tiếng check in đẹp như: Surf Bar, S-Blue Café, Mộc Trà Café…hoặc thưởng thức hải sản tại phố ẩm thực Xuân Diệu, khu hồ sinh thái nổi tiếng với món: bọ biển, cua Huỳnh Đế và các loại ốc đặc trưng của vùng biển Quy Nhơn,.. (chi phí tự túc). </p>
                <p>Nghỉ đêm tại Quy Nhơn.</p>
                <h3>Ngày 2 - QUY NHƠN – PHÚ YÊN Số bữa ăn: 3 bữa (sáng, trưa, tối)</h3>
                <p>Dùng bữa sáng tại khách sạn, xe đưa đoàn khởi hành đi Phú Yên tham quan:</p>
                <p>- Nhà Thờ Mằng Lăng: nơi lưu giữ cuốn kinh thánh bằng chữ Quốc Ngữ đầu tiên của Việt Nam.</p>
                <p>- Gành Đá Dĩa: thắng cảnh độc nhất vô nhị của tỉnh Phú Yên và của Quốc Gia</p>
                <p>- Trên đường đi Quý khách còn được chiêm ngưỡng cảnh Đầm Ô Loan.</p>
                <p>- Quảng Đức Xưa: được chiêm ngưỡng những căn nhà gỗ cổ xưa được chạm khắc thủ công tinh xảo với những di vật, cổ vật bài trí hài hòa, đặc biệt là bộ sưu tập gốm Quảng Đức. Đến với Quảng Đức Xưa còn là đến với không gian làng nghề truyền thống và những món ăn dân giã. Du khách có thể thử dệt chiếu, nhâm nhi một tách trà ngon hay chọn cho mình một chiếc bánh đậm vị quê.</p>
                <p>Buổi chiều xe đưa đoàn trở về TP.Quy Nhơn. </p>
                <p>Nghỉ đêm tại Quy Nhơn </p>
                <h3>Ngày 3 - QUY NHƠN - EO GIÓ – KỲ CO Số bữa ăn: 3 bữa (sáng, trưa, tối)</h3>
                <p>Dùng bữa sáng tại khách sạn. Xe đưa đoàn đi tham quan: </p>
                <p>- Kỳ Co: với màu nước trong xanh, bãi cát trắng dài và mịn, những cơn sóng biển êm ái chính là điểm đến ấn tượng thu hút nhiều du khách trong thời gian gần đây. Ngoài tắm biển và thư giãn, quý khách có thể chụp hình check in nhiều góc cực đẹp.  </p>
                <p>- Eo Gió: nơi vẫn còn giữ được cho mình vẻ đẹp tự nhiên đầy hoang sơ. Đứng từ trên cao nhìn xuống, Eo Gió như một bức tranh sơn thủy hữu tình với trời, mây, nước… biển núi ôm nhau vừa gợi cảm, vừa hoang sơ đầy quyến rũ </p>
                <p>- Khu du lịch Ghềnh Ráng Tiên Sa, viếng Mộ Hàn Mặc Tử: mộ nằm dựa lưng vào núi, nhìn bao quát cả dải bờ biển Quy Nhơn chạy dài trước mặt, hút trọn tầm mắt một phần thành phố Quy Nhơn.</p>
                <p>- Mua sắm các đặc sản Quy Nhơn tại shop Hương Biển như Rượu Bàu Đá, Nem Chợ Huyện, Bánh Hồng, Tré Bình Định, Bánh Ít Lá Gai…</p>
                <p>Buổi tối Quý khách tự do nghỉ ngơi tham quan thưởng thức đặc sản Quy Nhơn: hải sản, bánh xèo tôm nhảy,…</p>
                <p>Nghỉ đêm tại Quy Nhơn.   </p>
                <p>Ghi chú: Trong trường hợp Quý khách không đi tham quan Eo Gió + Kỳ Co, ở lại khách sạn/resort tự do tắm biển hoặc nghỉ ngơi… vui lòng báo ngay khi đăng ký hoặc thanh toán, Vietravel sẽ hoàn chi phí: ăn trưa và phí tham quan là 400.000VND/ khách. Trong trường hợp báo sau sẽ không hoàn giảm. </p>
                <p>Ngày 4 - QUY NHƠN - TP.HỒ CHÍ MINH Số bữa ăn: 1 bữa (sáng)</p>
                <p>Dùng bữa sáng tại khách sạn, trả phòng. Xe đưa đoàn đi tham quan:</p>
                <p>- Khu du lịch Hầm Hô: lâm viên hoang dã và nên thơ, đoàn khám phá cảnh non nước hữu tình. Bên cạnh đó, Quý khách có thể tự túc lựa chọn thêm dịch vụ khác như: xe ngựa, câu cá thư giãn, chèo thuyền trên sông Kút, nghỉ võng dưới tán cây rừng đại ngàn…</p>
                <p>Xe đưa đoàn ra sân bay Phù Cát đáp chuyến bay về Tp.Hồ Chí Minh. Chia tay Quý khách và kết thúc chương trình tại sân bay.</p>',
                'tour_sale' => '10%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 2,
                'guide_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Quy Nhơn - Eo Gió - Kỳ Co - Gành Đá Dĩa',
                'tour_image' => 'kyCo.jpg',
                'start_day' => '2024-05-28',
                'time' => '4 ngày 3 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 6800000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Quy Nhơn có lịch sử dài 400 năm, chịu ảnh hưởng Chămpa thế kỷ 11, triều đại Tây Sơn và cảng Thị Nại thế kỷ 18. Thiên nhiên hoang sơ tĩnh lặng, núi đồi, đầm lầy nước mặn, đường bờ biển dài 42km với các bán đảo xinh đẹp. Quy Nhơn là đô thị loại I, đang phát triển thành trung tâm du lịch của miền Trung.',
                'tour_schedule' => '<h3>Ngày 1 - TP.HỒ CHÍ MINH – QUY NHƠN Số bữa ăn: 1 bữa (tối)</h3>
                <p>Quý khách tập trung tại ga đi Trong Nước Sân bay Tân Sơn Nhất, hướng dẫn viên hỗ trợ làm thủ tục cho đoàn đáp chuyến bay đi sân bay Phù Cát (Quy Nhơn). Đến nơi, xe và hướng dẫn viên Vietravel đón đoàn đi tham quan:  </p>
                <p>- Chùa Thiên Hưng: Vẻ đẹp của “Phượng Hoàng cổ trấn” phiên bản Việt, là một trong những nơi không thể bỏ qua khi đến Quy Nhơn – Bình Định.</p>
                <p>Đoàn ăn tối và tự do khám phá thành phố biển về đêm với các quán cà phê nổi tiếng check in đẹp như: Surf Bar, S-Blue Café, Mộc Trà Café…hoặc thưởng thức hải sản tại phố ẩm thực Xuân Diệu, khu hồ sinh thái nổi tiếng với món: bọ biển, cua Huỳnh Đế và các loại ốc đặc trưng của vùng biển Quy Nhơn,.. (chi phí tự túc). </p>
                <p>Nghỉ đêm tại Quy Nhơn.</p>
                <h3>Ngày 2 - QUY NHƠN – PHÚ YÊN Số bữa ăn: 3 bữa (sáng, trưa, tối)</h3>
                <p>Dùng bữa sáng tại khách sạn, xe đưa đoàn khởi hành đi Phú Yên tham quan:</p>
                <p>- Nhà Thờ Mằng Lăng: nơi lưu giữ cuốn kinh thánh bằng chữ Quốc Ngữ đầu tiên của Việt Nam.</p>
                <p>- Gành Đá Dĩa: thắng cảnh độc nhất vô nhị của tỉnh Phú Yên và của Quốc Gia</p>
                <p>- Trên đường đi Quý khách còn được chiêm ngưỡng cảnh Đầm Ô Loan.</p>
                <p>- Quảng Đức Xưa: được chiêm ngưỡng những căn nhà gỗ cổ xưa được chạm khắc thủ công tinh xảo với những di vật, cổ vật bài trí hài hòa, đặc biệt là bộ sưu tập gốm Quảng Đức. Đến với Quảng Đức Xưa còn là đến với không gian làng nghề truyền thống và những món ăn dân giã. Du khách có thể thử dệt chiếu, nhâm nhi một tách trà ngon hay chọn cho mình một chiếc bánh đậm vị quê.</p>
                <p>Buổi chiều xe đưa đoàn trở về TP.Quy Nhơn. </p>
                <p>Nghỉ đêm tại Quy Nhơn </p>
                <h3>Ngày 3 - QUY NHƠN - EO GIÓ – KỲ CO Số bữa ăn: 3 bữa (sáng, trưa, tối)</h3>
                <p>Dùng bữa sáng tại khách sạn. Xe đưa đoàn đi tham quan: </p>
                <p>- Kỳ Co: với màu nước trong xanh, bãi cát trắng dài và mịn, những cơn sóng biển êm ái chính là điểm đến ấn tượng thu hút nhiều du khách trong thời gian gần đây. Ngoài tắm biển và thư giãn, quý khách có thể chụp hình check in nhiều góc cực đẹp.  </p>
                <p>- Eo Gió: nơi vẫn còn giữ được cho mình vẻ đẹp tự nhiên đầy hoang sơ. Đứng từ trên cao nhìn xuống, Eo Gió như một bức tranh sơn thủy hữu tình với trời, mây, nước… biển núi ôm nhau vừa gợi cảm, vừa hoang sơ đầy quyến rũ </p>
                <p>- Khu du lịch Ghềnh Ráng Tiên Sa, viếng Mộ Hàn Mặc Tử: mộ nằm dựa lưng vào núi, nhìn bao quát cả dải bờ biển Quy Nhơn chạy dài trước mặt, hút trọn tầm mắt một phần thành phố Quy Nhơn.</p>
                <p>- Mua sắm các đặc sản Quy Nhơn tại shop Hương Biển như Rượu Bàu Đá, Nem Chợ Huyện, Bánh Hồng, Tré Bình Định, Bánh Ít Lá Gai…</p>
                <p>Buổi tối Quý khách tự do nghỉ ngơi tham quan thưởng thức đặc sản Quy Nhơn: hải sản, bánh xèo tôm nhảy,…</p>
                <p>Nghỉ đêm tại Quy Nhơn.   </p>
                <p>Ghi chú: Trong trường hợp Quý khách không đi tham quan Eo Gió + Kỳ Co, ở lại khách sạn/resort tự do tắm biển hoặc nghỉ ngơi… vui lòng báo ngay khi đăng ký hoặc thanh toán, Vietravel sẽ hoàn chi phí: ăn trưa và phí tham quan là 400.000VND/ khách. Trong trường hợp báo sau sẽ không hoàn giảm. </p>
                <p>Ngày 4 - QUY NHƠN - TP.HỒ CHÍ MINH Số bữa ăn: 1 bữa (sáng)</p>
                <p>Dùng bữa sáng tại khách sạn, trả phòng. Xe đưa đoàn đi tham quan:</p>
                <p>- Khu du lịch Hầm Hô: lâm viên hoang dã và nên thơ, đoàn khám phá cảnh non nước hữu tình. Bên cạnh đó, Quý khách có thể tự túc lựa chọn thêm dịch vụ khác như: xe ngựa, câu cá thư giãn, chèo thuyền trên sông Kút, nghỉ võng dưới tán cây rừng đại ngàn…</p>
                <p>Xe đưa đoàn ra sân bay Phù Cát đáp chuyến bay về Tp.Hồ Chí Minh. Chia tay Quý khách và kết thúc chương trình tại sân bay.</p>',
                'tour_sale' => '8%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 2,
                'guide_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Tiền Giang - Cần Thơ - Sóc Trăng - Bạc Liêu',
                'tour_image' => 'tien-giang.jpg',
                'start_day' => '2024-05-26',
                'time' => '3 ngày 2 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 3590000,
                'vehicle' => 'Xe khách',
                'tour_description' => 'Bạc Liêu là vùng đất mới, gắn liền với lịch sử khẩn hoang của dân tộc về vùng đất phương Nam. Qua biết bao thăng trầm của lịch sử, vùng đất Bạc Liêu đã tích lũy cho mình những giá trị văn hóa riêng trong đó, Bạc Liêu nổi tiếng với di tích đồng Nọc Nạng, của dấu tích Văn hóa Óc Eo.',
                'tour_schedule' => '<h3>Ngày 1 - TP.HCM - TIỀN GIANG - CÁI BÈ - LÀNG CỔ ĐÔNG HÒA HIỆP - CÙ LAO TÂN PHONG - VĨNH LONG - CHÙA PHẬT NGỌC XÁ LỢI - CẦN THƠ (Ăn sáng, trưa, chiều)</h3>
                <p>Xe và hướng dẫn viên đón Quý khách tại Vietravel (190 Pasteur, Quận 3, TP.HCM) khởi hành đi miền Tây theo tuyến cao tốc TP.HCM - Trung Lương và Trung Lương - Mỹ Thuận ngắm nhìn những cánh đồng lúa và màu xanh vườn tược hai bên đường.</p>
                <p>Đến bến tàu du lịch Cái Bè, Quý khách lên tàu khám phá dòng sông Tiền đỏ nặng phù sa, quan sát các hoạt động giao thương và đời sống của người dân; thư thái giữa bốn bề sông nước, thưởng thức trái cây và giải nhiệt cùng nước dừa tươi ngay trên thuyền.</p>
                <p>- Làng nghề thủ công truyền thống của địa phương: lò cốm, lò bánh tráng, lò kẹo dừa, thưởng thức bánh mứt đặc sản tại địa phương; thưởng thức trà mật ong và bánh mứt đặc sản tại địa phương.</p>
                <p>- Thuyền đưa Quý khách tham quan hệ thống Làng cổ Đông Hòa Hiệp do Tổng cục Du lịch Việt Nam cùng Tổ chức Hợp tác Quốc tế Nhật Bản (JICA) chung tay phát triển du lịch cộng đồng: tản bộ trên những con đường làng yên bình tham quan nhà cổ Ba Đức hoặc nhà cổ Ông Kiệt một trong những ngôi nhà cổ kính và đẹp nhất tại địa phương.</p>
                <p>- Cù lao Tân Phong, đoàn ăn trưa tại nhà hàng sinh thái trải dài theo bờ sông Tiền, thưởng thức các món ăn dân dã miền sông nước. Tham quan vườn cây ăn trái cây rợp bóng mát (tùy theo mùa vụ) chôm chôm, ổi, mận, nhãn, vú sữa… Thưởng thức trái cây tươi và giao lưu đàn ca tài tử Nam Bộ.</p>
                <p>- Trải nghiệm xuồng chèo len lỏi vào trong rạch nhỏ: dưới những tàn cây xanh mát, tận hưởng không khí trong lành, mát mẻ và ngắm nhìn khung cảnh yên bình của làng quê Nam bộ.</p>
                <p>Đoàn khởi hành đi Cần Thơ, trên đường dừng chân vãn cảnh chùa Phật Ngọc Xá Lợi - kiến trúc mang nhiều phong cách nghệ thuật Phật giáo của nhiều nước trên thế giới: chiêm bái tượng Phật Bà Quan Thế Âm Bồ Tát lộ thiên cao 32 mét đứng uy nghiêm trên tòa sen hồng lớn có 9 rồng vàng uốn lượn; Tượng Phật Ngọc tạc bằng đá ngọc bích nguyên khối; chiêm ngưỡng Bảo Tháp hình lục giác 9 tầng cao nhất miền Tây. </p>
                <p>Sau khi dùng bữa tối tại TP.Cần Thơ, Quý khách tự do dạo phố đêm khám phá “Tây Đô” lung linh sắc màu: ngắm cảnh cầu Cần Thơ về đêm; Check-in cầu Tình Yêu - Thiết kế uốn lượn hình chữ S cùng hai đài sen và hệ thống đèn led rực rỡ sắc màu; Chụp ảnh tại chùa Ông cổ kính; Khám phá chợ đêm Ninh Kiều và con đường bích họa Cần Thơ xưa và nay - tái hiện nét đẹp văn hóa của người dân Cần Thơ nói riêng, vùng Đồng bằng sông Cửu Long nói chung.</p>
                <p>Nghỉ đêm tại Cần Thơ.</p>
                <h3>Ngày 2 - CẦN THƠ - CHỢ NỔI CÁI RĂNG - BẠC LIÊU - NHÀ THỜ TẮC SẬY - CÁNH ĐỒNG ĐIỆN GIÓ (Ăn sáng, trưa, chiều)</h3>
                <p>Đoàn trả phòng và khởi hành ra Bến Ninh Kiều, xuống thuyền du ngoạn trên sông Cần Thơ, nghe giới thiệu về Chợ thủy sản nước ngọt Cần Thơ; trải nghiệm Chợ nổi Cái Răng - một hình thức họp chợ đặc trưng tại các ngã sông của vùng đồng bằng sông Cửu Long, chợ nổi quy tụ hàng trăm ghe xuồng, tạo thành nơi mua bán, giao thương các loại trái cây, đặc sản sầm uất trên sông nước. Chợ Nổi Cái Răng đã được công nhận Di Sản Văn Hóa Phi Vật Thể Quốc Gia.</p>
                <p>Sau khi dừng chân tham quan và mua sắm tại siêu thị đặc sản và quà lưu niệm Hương Đảo, đoàn khởi hành đến Bạc Liêu tham quan:</p>
                <p>- Nhà công tử Bạc Liêu: do kỹ sư người Pháp thiết kế vào năm 1919, đây được xem là ngôi biệt thự bề thế nhất ở Nam kỳ lục tỉnh lúc bấy giờ. Đoàn nghe kể về giai thoại vàng son một thời của cậu Ba Huy - người được mệnh danh là “Công tử Bạc Liêu”.</p>
                <p>- Nhà thờ Tắc Sậy: nơi đây gắn liền với những câu chuyện cảm động về cuộc đời của cha Trương Bửu Diệp.</p>
                <p>- Cánh Đồng Điện Gió: chiêm ngưỡng vẻ đẹp những tua-bin gió khổng lồ cao hơn 80 m sừng sững trên nền trời xanh với ý nghĩa tạo một nguồn năng lượng sạch vô tận trên mặt biển, giảm thiểu tác động gây hiệu ứng nhà kính…</p>
                <p>Nghỉ đêm ở Bạc Liêu.</p>
                <h3>Ngày 3 - BẠC LIÊU - SÓC TRĂNG - KHÁM PHÁ VĂN HÓA KHMER - TP.HCM (Ăn sáng, trưa)</h3>
                <p>Sau bữa sáng, Quý khách tham quan:</p>
                <p>- Quảng Trường Hùng Vương: hình ảnh cây đàn kìm cách điệu (cao 18,6 m) nhạc cụ không thể thiếu trong đờn ca tài tử cải lương, biểu tượng văn hóa của tỉnh Bạc Liêu. </p>
                <p>- Khu lưu niệm nghệ thuật Đờn Ca Tài Tử Nam Bộ và cố nhạc sĩ Cao Văn Lầu: một công trình khái quát về thân thế, sự nghiệp của cố nhạc sĩ Cao Văn lầu, ghi nhận công lao và tôn vinh những đóng góp to lớn của ông cho nghệ thuật Đờn ca tài tử Nam bộ và là người sản sinh ra bản Dạ cổ Hoài lang bất hủ.</p>
                <p>Đoàn khởi hành đi Sóc Trăng, tham quan hai ngôi chùa nổi tiếng: </p>
                <p>- Chùa Sà Lôn: còn được gọi là "chùa Chén Kiểu" thể hiện được nét văn hóa độc đáo của người Khmer cùng cách thiết kế sáng tạo từ hàng vạn mảnh chén được ốp trên các công trình kiến trúc của chùa.</p>
                <p>- Chùa Wat Pătum Wôngsa Som Rông - Một quần thể kiến trúc Phật giáo rộng lớn, gồm nhiều công trình như: Chánh điện, ngôi bảo tháp “vạn người mê” đẹp tựa chùa Arun tại Thái Lan,… Đặc biệt, tượng Phật Thích Ca nhập niết bàn uy nghiêm với kích thước chiều dài  63 mét…</p>
                <h5>Trải nghiệm chương trình cùng nghệ nhân làm cốm dẹp trộn dừa - dẻo thơm đúng chuẩn vị miền Tây. </h5>
                <p>Thưởng thức bữa trưa với đặc sản gây thương nhớ như cá kèo nướng ống sậy - Dân dã vị đồng quê; bánh cống - Đặc sản của người Khmer ở Sóc Trăng; bún nước lèo - Món ăn mang đậm dấu ấn văn hóa ẩm thực Sóc Trăng kết hợp hài hòa của 2 dân tộc Kinh - Khmer; gạo ST25.</p>
                <p>Đoàn khởi hành về TP.HCM theo tuyến cao tốc Mỹ Thuận - Cần Thơ; Chiêm ngưỡng cầu Mỹ Thuận 2 - Dự án trọng điểm quốc gia có chiều dài 1,9km nối liền tỉnh Vĩnh Long và Tiền Giang.</p>
                <p>Kết thúc chương trình du lịch tại điểm đón ban đầu.</p>',
                'tour_sale' => '20%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 3,
                'guide_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_name' => 'Check in Cánh Đồng Điện Gió Bạc Liêu',
                'tour_image' => 'dienGioBacLieu.jpg',
                'start_day' => '2024-05-26',
                'time' => '3 ngày 2 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 3090000,
                'vehicle' => 'Xe khách',
                'tour_description' => 'Bạc Liêu là vùng đất mới, gắn liền với lịch sử khẩn hoang của dân tộc về vùng đất phương Nam. Qua biết bao thăng trầm của lịch sử, vùng đất Bạc Liêu đã tích lũy cho mình những giá trị văn hóa riêng trong đó, Bạc Liêu nổi tiếng với di tích đồng Nọc Nạng, của dấu tích Văn hóa Óc Eo.',
                'tour_schedule' => '<h3>Ngày 1 - TP.HCM - TIỀN GIANG - CÁI BÈ - LÀNG CỔ ĐÔNG HÒA HIỆP - CÙ LAO TÂN PHONG - VĨNH LONG - CHÙA PHẬT NGỌC XÁ LỢI - CẦN THƠ (Ăn sáng, trưa, chiều)</h3>
                <p>Xe và hướng dẫn viên đón Quý khách tại Vietravel (190 Pasteur, Quận 3, TP.HCM) khởi hành đi miền Tây theo tuyến cao tốc TP.HCM - Trung Lương và Trung Lương - Mỹ Thuận ngắm nhìn những cánh đồng lúa và màu xanh vườn tược hai bên đường.</p>
                <p>Đến bến tàu du lịch Cái Bè, Quý khách lên tàu khám phá dòng sông Tiền đỏ nặng phù sa, quan sát các hoạt động giao thương và đời sống của người dân; thư thái giữa bốn bề sông nước, thưởng thức trái cây và giải nhiệt cùng nước dừa tươi ngay trên thuyền.</p>
                <p>- Làng nghề thủ công truyền thống của địa phương: lò cốm, lò bánh tráng, lò kẹo dừa, thưởng thức bánh mứt đặc sản tại địa phương; thưởng thức trà mật ong và bánh mứt đặc sản tại địa phương.</p>
                <p>- Thuyền đưa Quý khách tham quan hệ thống Làng cổ Đông Hòa Hiệp do Tổng cục Du lịch Việt Nam cùng Tổ chức Hợp tác Quốc tế Nhật Bản (JICA) chung tay phát triển du lịch cộng đồng: tản bộ trên những con đường làng yên bình tham quan nhà cổ Ba Đức hoặc nhà cổ Ông Kiệt một trong những ngôi nhà cổ kính và đẹp nhất tại địa phương.</p>
                <p>- Cù lao Tân Phong, đoàn ăn trưa tại nhà hàng sinh thái trải dài theo bờ sông Tiền, thưởng thức các món ăn dân dã miền sông nước. Tham quan vườn cây ăn trái cây rợp bóng mát (tùy theo mùa vụ) chôm chôm, ổi, mận, nhãn, vú sữa… Thưởng thức trái cây tươi và giao lưu đàn ca tài tử Nam Bộ.</p>
                <p>- Trải nghiệm xuồng chèo len lỏi vào trong rạch nhỏ: dưới những tàn cây xanh mát, tận hưởng không khí trong lành, mát mẻ và ngắm nhìn khung cảnh yên bình của làng quê Nam bộ.</p>
                <p>Đoàn khởi hành đi Cần Thơ, trên đường dừng chân vãn cảnh chùa Phật Ngọc Xá Lợi - kiến trúc mang nhiều phong cách nghệ thuật Phật giáo của nhiều nước trên thế giới: chiêm bái tượng Phật Bà Quan Thế Âm Bồ Tát lộ thiên cao 32 mét đứng uy nghiêm trên tòa sen hồng lớn có 9 rồng vàng uốn lượn; Tượng Phật Ngọc tạc bằng đá ngọc bích nguyên khối; chiêm ngưỡng Bảo Tháp hình lục giác 9 tầng cao nhất miền Tây. </p>
                <p>Sau khi dùng bữa tối tại TP.Cần Thơ, Quý khách tự do dạo phố đêm khám phá “Tây Đô” lung linh sắc màu: ngắm cảnh cầu Cần Thơ về đêm; Check-in cầu Tình Yêu - Thiết kế uốn lượn hình chữ S cùng hai đài sen và hệ thống đèn led rực rỡ sắc màu; Chụp ảnh tại chùa Ông cổ kính; Khám phá chợ đêm Ninh Kiều và con đường bích họa Cần Thơ xưa và nay - tái hiện nét đẹp văn hóa của người dân Cần Thơ nói riêng, vùng Đồng bằng sông Cửu Long nói chung.</p>
                <p>Nghỉ đêm tại Cần Thơ.</p>
                <h3>Ngày 2 - CẦN THƠ - CHỢ NỔI CÁI RĂNG - BẠC LIÊU - NHÀ THỜ TẮC SẬY - CÁNH ĐỒNG ĐIỆN GIÓ (Ăn sáng, trưa, chiều)</h3>
                <p>Đoàn trả phòng và khởi hành ra Bến Ninh Kiều, xuống thuyền du ngoạn trên sông Cần Thơ, nghe giới thiệu về Chợ thủy sản nước ngọt Cần Thơ; trải nghiệm Chợ nổi Cái Răng - một hình thức họp chợ đặc trưng tại các ngã sông của vùng đồng bằng sông Cửu Long, chợ nổi quy tụ hàng trăm ghe xuồng, tạo thành nơi mua bán, giao thương các loại trái cây, đặc sản sầm uất trên sông nước. Chợ Nổi Cái Răng đã được công nhận Di Sản Văn Hóa Phi Vật Thể Quốc Gia.</p>
                <p>Sau khi dừng chân tham quan và mua sắm tại siêu thị đặc sản và quà lưu niệm Hương Đảo, đoàn khởi hành đến Bạc Liêu tham quan:</p>
                <p>- Nhà công tử Bạc Liêu: do kỹ sư người Pháp thiết kế vào năm 1919, đây được xem là ngôi biệt thự bề thế nhất ở Nam kỳ lục tỉnh lúc bấy giờ. Đoàn nghe kể về giai thoại vàng son một thời của cậu Ba Huy - người được mệnh danh là “Công tử Bạc Liêu”.</p>
                <p>- Nhà thờ Tắc Sậy: nơi đây gắn liền với những câu chuyện cảm động về cuộc đời của cha Trương Bửu Diệp.</p>
                <p>- Cánh Đồng Điện Gió: chiêm ngưỡng vẻ đẹp những tua-bin gió khổng lồ cao hơn 80 m sừng sững trên nền trời xanh với ý nghĩa tạo một nguồn năng lượng sạch vô tận trên mặt biển, giảm thiểu tác động gây hiệu ứng nhà kính…</p>
                <p>Nghỉ đêm ở Bạc Liêu.</p>
                <h3>Ngày 3 - BẠC LIÊU - SÓC TRĂNG - KHÁM PHÁ VĂN HÓA KHMER - TP.HCM (Ăn sáng, trưa)</h3>
                <p>Sau bữa sáng, Quý khách tham quan:</p>
                <p>- Quảng Trường Hùng Vương: hình ảnh cây đàn kìm cách điệu (cao 18,6 m) nhạc cụ không thể thiếu trong đờn ca tài tử cải lương, biểu tượng văn hóa của tỉnh Bạc Liêu. </p>
                <p>- Khu lưu niệm nghệ thuật Đờn Ca Tài Tử Nam Bộ và cố nhạc sĩ Cao Văn Lầu: một công trình khái quát về thân thế, sự nghiệp của cố nhạc sĩ Cao Văn lầu, ghi nhận công lao và tôn vinh những đóng góp to lớn của ông cho nghệ thuật Đờn ca tài tử Nam bộ và là người sản sinh ra bản Dạ cổ Hoài lang bất hủ.</p>
                <p>Đoàn khởi hành đi Sóc Trăng, tham quan hai ngôi chùa nổi tiếng: </p>
                <p>- Chùa Sà Lôn: còn được gọi là "chùa Chén Kiểu" thể hiện được nét văn hóa độc đáo của người Khmer cùng cách thiết kế sáng tạo từ hàng vạn mảnh chén được ốp trên các công trình kiến trúc của chùa.</p>
                <p>- Chùa Wat Pătum Wôngsa Som Rông - Một quần thể kiến trúc Phật giáo rộng lớn, gồm nhiều công trình như: Chánh điện, ngôi bảo tháp “vạn người mê” đẹp tựa chùa Arun tại Thái Lan,… Đặc biệt, tượng Phật Thích Ca nhập niết bàn uy nghiêm với kích thước chiều dài  63 mét…</p>
                <h5>Trải nghiệm chương trình cùng nghệ nhân làm cốm dẹp trộn dừa - dẻo thơm đúng chuẩn vị miền Tây. </h5>
                <p>Thưởng thức bữa trưa với đặc sản gây thương nhớ như cá kèo nướng ống sậy - Dân dã vị đồng quê; bánh cống - Đặc sản của người Khmer ở Sóc Trăng; bún nước lèo - Món ăn mang đậm dấu ấn văn hóa ẩm thực Sóc Trăng kết hợp hài hòa của 2 dân tộc Kinh - Khmer; gạo ST25.</p>
                <p>Đoàn khởi hành về TP.HCM theo tuyến cao tốc Mỹ Thuận - Cần Thơ; Chiêm ngưỡng cầu Mỹ Thuận 2 - Dự án trọng điểm quốc gia có chiều dài 1,9km nối liền tỉnh Vĩnh Long và Tiền Giang.</p>
                <p>Kết thúc chương trình du lịch tại điểm đón ban đầu.</p>',
                'tour_sale' => '20%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 3,
                'guide_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_name' => 'Hồ Tràm - Hamptons Pier',
                'tour_image' => 'Hotram.jpg',
                'start_day' => '2024-05-26',
                'time' => '1 ngày',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 399000,
                'vehicle' => 'Xe khách',
                'tour_description' => 'Những cung đường biển đẹp như mơ, ngọn Hải đăng cổ nổi tiếng, tượng Chúa giang tay bình yên, những góc phố thơ mộng, cùng những món ăn hấp dẫn là những gì du khách không thể bỏ qua khi đến với Vũng Tàu. Vũng Tàu trở thành đô thị loại I năm 2013, là một thành phố đáng tới, đáng sống và hạnh phúc.',
                'tour_schedule' => '<h3>Ngày 1 - TP.HCM - PHƯỚC HẢI - HỒ TRÀM (Ăn trưa)</h3>
                <p>Quý khách tập trung tại Vietravel (190 Pasteur, Quận 3) khởi hành đi Phước Hải - Hồ Tràm theo tuyến đường cao tốc TP. Hồ Chí Minh - Long Thành.  Trên đường đoàn dừng chân chiêm ngưỡng Nhà thờ giáo xứ Song Vĩnh: đẹp tựa cung điện nguy nga mang phong cách Gothic - kiểu thiết kế đặc trưng của Tây Âu thời Trung cổ.</p>
                <p>Đến Phước Hải, đoàn trải nghiệm:</p>
                <p>- Thiền Viện Trúc Lâm Chân Nguyên: Chùa hấp dẫn du khách  chính là hàng trăm chú khỉ ngộ nghĩnh, được nuôi trong môi trường tự nhiên trên ngọn núi Kỳ Vân phía sau chùa.</p>
                <p>- Thoả thích hòa mình cùng dòng nước biển xanh mát hay phơi mình đón ánh nắng lung linh trên bãi cát vàng trải dài; hoặc thỏa sức vui đùa trong hồ bơi nước ngọt (Khách Vietravel được phục vụ đầy đủ dịch vụ ghế bố, chòi là và tắm nước ngọt)</p>
                <p>- Sống ảo với những điểm check-in siêu hot: Tháp Vọng Thiên và Cầu Tình Yêu - rực rỡ sắc đỏ, du khách phóng tầm mắt chiêm ngưỡng vẻ đẹp bao la của biển cả và tàu thuyền ngoài khơi xa.</p>
                <p>Tiếp tục hành trình đến Hồ Tràm đoàn tham quan:</p>
                <p>- Hamptons Pier - cầu ngắm biển dài nhất Đông Nam Á 300 mét: nơi du khách có thể tận hưởng gió biển trong lành và lưu giữ khoảnh khắc quý báu bên cạnh những người thân yêu.</p>
                <p>Xe đưa khách quay lại điểm ban đầu, chia tay quý khách và kết thúc chương trình.</p>',
                'tour_sale' => '20%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 3,
                'guide_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_name' => 'Vũng Tàu: Sắc Màu Biển Xanh',
                'tour_image' => 'tuongChua.jpg',
                'start_day' => '2024-05-26',
                'time' => '1 ngày',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 299000,
                'vehicle' => 'Xe khách',
                'tour_description' => 'Những cung đường biển đẹp như mơ, ngọn Hải đăng cổ nổi tiếng, tượng Chúa giang tay bình yên, những góc phố thơ mộng, cùng những món ăn hấp dẫn là những gì du khách không thể bỏ qua khi đến với Vũng Tàu. Vũng Tàu trở thành đô thị loại I năm 2013, là một thành phố đáng tới, đáng sống và hạnh phúc.',
                'tour_schedule' => '<h3>Ngày 1 - TPHCM – BÀ RỊA – VŨNG TÀU (Ăn trưa)</h3>
                <p>Quý khách tập trung tại Vietravel (190 Pasteur, Quận 3) khởi hành đi Bà Rịa - Vũng Tàu theo tuyến đường cao tốc TP. Hồ Chí Minh - Long Thành. Đoàn dừng chân ăn sáng trên cung đường đi (chi phí tự túc) và tiếp tục hành trình  đến thành phố biển Vũng Tàu, đoàn tham quan:</p>
                <p>- Chiêm ngưỡng Nhà thờ giáo xứ Song Vĩnh: đẹp tựa cung điện nguy nga, với kiến trúc mang phong cách Gothic - kiểu thiết kế đặc trưng nở rộ từ nửa sau thời Trung cổ ở Tây Âu.</p>
                <p>- Tượng Chúa Kito: trên đỉnh Tao Phùng, từ trên cánh tay của Tượng Chúa, Quý khách sẽ cảm nhận được hương biển đan trong gió và chiêm ngưỡng toàn diện vẻ đẹp của phố biển Vũng Tàu mộng mơ.</p>
                <p>- Bãi biển Thùy Vân (bãi sau Vũng Tàu): Quý khách hòa mình cùng dòng nước xanh mát hay phơi mình đón ánh nắng lung linh trên bãi cát vàng trải dài trong không khí nhộn nhịp nơi phố biển.</p>
                <p>- Vạn Phật Quang Đại Tòng Lâm Tự: một ngôi đại tự bao gồm nhiều quần thể kiến trúc quy mô như tịnh thất và trường Phật học. Chùa còn sở hữu những kỷ lục như Ngôi chùa có tượng Di Lặc Bồ Tát nguyên khối bằng đá hoa cương lớn nhất; Ngôi chùa có tượng Phật nhiều nhất…</p>
                <p>Trên đường về lại TP. Hồ Chí Minh, đoàn dừng chân tại Bò Sữa Long Thành - mua sắm những đặc sản làm quà cho người thân, bạn bè. </p>
                <p>Xe đưa đoàn về điểm đón ban đầu, kết thúc chuyến du lịch.</p>',
                'tour_sale' => '20%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 3,
                'guide_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_name' => 'Phan Thiết - Mũi Né - Bàu Trắng - Mango Beach ',
                'tour_image' => 'phan-thiet.jpg',
                'start_day' => '2024-05-26',
                'time' => '3 ngày 2 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 3590000,
                'vehicle' => 'Xe khách',
                'tour_description' => 'Phan Thiết hấp dẫn với Lầu Ông Hoàng, tháp Chàm Pôshanư, bãi đá Ông Địa, rạn dừa Hàm Tiến. KDL Hòn Rơm cát trắng bên hàng dương xanh. Trượt cát trên Đồi Cát Bay, ngắm hoàng hôn trên đỉnh Đồi Hồng là nguồn cảm hứng bất tận của các nhiếp ảnh gia.',
                'tour_schedule' => '<h3>Ngày 1 - TP.HỒ CHÍ MINH - MŨI NÉ Số bữa ăn: 3 bữa (Ăn sáng, trưa, tối)</h3>
                <p>Quý khách tập trung tại Công ty Discovery (39 Nguyễn Huệ, Phường Bến Nghé, Quận 1, TP.Hồ Chí Minh) khởi hành đi Phan Thiết. Quý khách ăn sáng trên cung đường đi. Đến nơi xe đưa đoàn dừng tham quan:</p>
                <p>- Lâu đài Rượu Vang RD: nghe giới thiệu về quy trình sản xuất, đóng chai và thưởng thức một trong những loại rượu vang hảo hạng nổi tiếng thế giới được xuất xứ từ Thung Lũng Napa (Mỹ).</p>
                <p>Đoàn dùng bữa trưa tại nhà hàng địa phương và làm thủ tục nhận phòng nghỉ ngơi. </p>
                <p>Buổi chiều, Quý khách tự do tắm biển hoặc hồ bơi, tận hưởng và trải nghiệm các dịch vụ có tại khách sạn/resort.</p>
                <p>Sau khi đoàn ăn tối, Quý khách tự do dạo phố khám phá Mũi Né về đêm hoặc thưởng thức các món ẩm thực địa phương như bánh tráng nướng, kem dừa, dừa ba nhát,… hay các loại hải sản tươi sống. </p>
                <p>Nghỉ đêm tại Mũi Né.</p>
                <h3>Ngày 2 - MŨI NÉ - BÀU TRẮNG – MANGO BEACH Số bữa ăn: 3 bữa (Ăn sáng, trưa, tối)</h3>
                <p>Quý khách dùng bữa sáng tại khách sạn. Sau đó xe đưa đoàn khởi hành theo cung đường ven biển Mũi Né</p>
                <p>Bàu Trắng thẳng tắp, check-in con đường đôi cong vút & chiếc xe tải bán nước màu vàng cam nổi bật được điểm xuyến bởi hoang mạc cát hai bên cùng màu xanh của biển trời. /p>
                <p>- Đến Bàu Trắng: ngắm nhìn biển hồ lấp lánh ánh bạc dưới ánh mặt trời rực rỡ cùng sự kì vỹ của những cồn cát trắng xóa. Cứ độ tháng 05 - 08 những cánh hoa sen hồng lấp ló sau chiếc lá xanh mướt  tạo nên một khung cảnh thiên nhiên thơ mộng. Quý khách thử sức với xe Jeep tốc độ cao, chinh phục đồi cát “nóng bỏng” nhất Việt Nam mang tên Trinh Nữ (chi phí xe Jeep tự túc). </p>
                <p>Đoàn dùng bữa trưa tại nhà hàng địa phương, buổi chiều xe và HDV đưa khách đến tham quan vui chơi tại:</p>
                <p>– Mango Beach: tổ hợp vui chơi giải trí độc đáo, thú vị tràn ngập sắc màu bên bờ biển thành phố Phan Thiết. Tại đây, Quý khách sẽ được:</p>
                <p>• Tận hưởng không gian thoáng đãng bên bờ biển và đắm mình trong làn nước trong xanh tại bãi tắm ngay cạnh Mango Beach</p>
                <p>• Tham quan thế giới thú cưng tại vườn thú mang phong cách Châu Âu cùng các bạn Alpaca, Pony, rùa, thỏ hay bò tuyết siêu đáng yêu và thân thiện (Tham quan trước 17h hàng ngày).</p>
                <p>• Thưởng thức các chương trình ca nhạc đặc sắc với DJ trong khi ngắm hoàng hôn lãng mạn bên biển (chương trình biểu diễn vào tối thứ 7 hàng tuần)</p>
                <p>• Nhâm nhi những món nước giải nhiệt đặc biệt là món “Dừa ba nhát” – thức uống nổi tiếng của vùng đất Bình Thuận này </p>
                <p>Quý khách dùng bữa tối tại Mango Beach trong không gian âm nhạc hoà cùng tiếng sóng biển tạo nên một buổi tối cuối tuần thư giãn. Sau bữa tối tự do dạo phố khám phá Mũi Né về đêm.</p>
                <p>Nghỉ đêm tại Mũi Né. </p>
                <h3>Ngày 3 - MŨI NÉ – LÀNG CHÀI XƯA - TP HỒ CHÍ MINH Số bữa ăn: 2 bữa (Ăn sáng, trưa)</h3>
                <p>Quý khách dùng bữa sáng và tự do tắm biển. Đến giờ trả phòng, đoàn đi tham quan:</p>
                <p>- Làng Chài Xưa Mũi Né: với lịch sử 300 năm cái nôi của nghề làm nước mắm, trải nghiệm cảm giác lao động trên đồng muối, đi trên con đường rạng xưa, thăm phố cổ Phan Thiết, , thăm nhà lều của hàm hộ nước mắm xưa, đắm chìm cảm xúc trong biển 3D và thích thú khi đi chợ làng chài xưa với bàn tính tay, bàn cân xưa thú vị,…</p>
                <p>- Mua sắm đặc sản Phan Thiết tại Đặc Sản Hương Đà (chi phí tự túc) - nước mắm Phan Thiết, các loại hản sản khô như: mực khô câu, mực một nắng, cá cơm rút xương, cá thu một nắng, cá đù một nắng….. về làm quà cho người thân và bạn bè </p>
                <p>Chiều đoàn về đến TP.Hồ Chí Minh, xe đưa về điểm đón ban đầu. Chia tay Quý khách và kết thúc chương trình du lịch.</p>',
                'tour_sale' => '20%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 3,
                'guide_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            [
                'tour_name' => 'Mũi Né - Bàu Trắng - Mango Beach - Phan Thiết',
                'tour_image' => 'Mui-Ne.jpg',
                'start_day' => '2024-05-26',
                'time' => '3 ngày 2 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 3690000,
                'vehicle' => 'Xe khách',
                'tour_description' => 'Phan Thiết hấp dẫn với Lầu Ông Hoàng, tháp Chàm Pôshanư, bãi đá Ông Địa, rạn dừa Hàm Tiến. KDL Hòn Rơm cát trắng bên hàng dương xanh. Trượt cát trên Đồi Cát Bay, ngắm hoàng hôn trên đỉnh Đồi Hồng là nguồn cảm hứng bất tận của các nhiếp ảnh gia.',
                'tour_schedule' => '<h3>Ngày 1 - TP.HỒ CHÍ MINH - MŨI NÉ Số bữa ăn: 3 bữa (Ăn sáng, trưa, tối)</h3>
                <p>Quý khách tập trung tại Công ty Discovery (39 Nguyễn Huệ, Phường Bến Nghé, Quận 1, TP.Hồ Chí Minh) khởi hành đi Phan Thiết. Quý khách ăn sáng trên cung đường đi. Đến nơi xe đưa đoàn dừng tham quan:</p>
                <p>- Lâu đài Rượu Vang RD: nghe giới thiệu về quy trình sản xuất, đóng chai và thưởng thức một trong những loại rượu vang hảo hạng nổi tiếng thế giới được xuất xứ từ Thung Lũng Napa (Mỹ).</p>
                <p>Đoàn dùng bữa trưa tại nhà hàng địa phương và làm thủ tục nhận phòng nghỉ ngơi. </p>
                <p>Buổi chiều, Quý khách tự do tắm biển hoặc hồ bơi, tận hưởng và trải nghiệm các dịch vụ có tại khách sạn/resort.</p>
                <p>Sau khi đoàn ăn tối, Quý khách tự do dạo phố khám phá Mũi Né về đêm hoặc thưởng thức các món ẩm thực địa phương như bánh tráng nướng, kem dừa, dừa ba nhát,… hay các loại hải sản tươi sống. </p>
                <p>Nghỉ đêm tại Mũi Né.</p>
                <h3>Ngày 2 - MŨI NÉ - BÀU TRẮNG – MANGO BEACH Số bữa ăn: 3 bữa (Ăn sáng, trưa, tối)</h3>
                <p>Quý khách dùng bữa sáng tại khách sạn. Sau đó xe đưa đoàn khởi hành theo cung đường ven biển Mũi Né</p>
                <p>Bàu Trắng thẳng tắp, check-in con đường đôi cong vút & chiếc xe tải bán nước màu vàng cam nổi bật được điểm xuyến bởi hoang mạc cát hai bên cùng màu xanh của biển trời. /p>
                <p>- Đến Bàu Trắng: ngắm nhìn biển hồ lấp lánh ánh bạc dưới ánh mặt trời rực rỡ cùng sự kì vỹ của những cồn cát trắng xóa. Cứ độ tháng 05 - 08 những cánh hoa sen hồng lấp ló sau chiếc lá xanh mướt  tạo nên một khung cảnh thiên nhiên thơ mộng. Quý khách thử sức với xe Jeep tốc độ cao, chinh phục đồi cát “nóng bỏng” nhất Việt Nam mang tên Trinh Nữ (chi phí xe Jeep tự túc). </p>
                <p>Đoàn dùng bữa trưa tại nhà hàng địa phương, buổi chiều xe và HDV đưa khách đến tham quan vui chơi tại:</p>
                <p>– Mango Beach: tổ hợp vui chơi giải trí độc đáo, thú vị tràn ngập sắc màu bên bờ biển thành phố Phan Thiết. Tại đây, Quý khách sẽ được:</p>
                <p>• Tận hưởng không gian thoáng đãng bên bờ biển và đắm mình trong làn nước trong xanh tại bãi tắm ngay cạnh Mango Beach</p>
                <p>• Tham quan thế giới thú cưng tại vườn thú mang phong cách Châu Âu cùng các bạn Alpaca, Pony, rùa, thỏ hay bò tuyết siêu đáng yêu và thân thiện (Tham quan trước 17h hàng ngày).</p>
                <p>• Thưởng thức các chương trình ca nhạc đặc sắc với DJ trong khi ngắm hoàng hôn lãng mạn bên biển (chương trình biểu diễn vào tối thứ 7 hàng tuần)</p>
                <p>• Nhâm nhi những món nước giải nhiệt đặc biệt là món “Dừa ba nhát” – thức uống nổi tiếng của vùng đất Bình Thuận này </p>
                <p>Quý khách dùng bữa tối tại Mango Beach trong không gian âm nhạc hoà cùng tiếng sóng biển tạo nên một buổi tối cuối tuần thư giãn. Sau bữa tối tự do dạo phố khám phá Mũi Né về đêm.</p>
                <p>Nghỉ đêm tại Mũi Né. </p>
                <h3>Ngày 3 - MŨI NÉ – LÀNG CHÀI XƯA - TP HỒ CHÍ MINH Số bữa ăn: 2 bữa (Ăn sáng, trưa)</h3>
                <p>Quý khách dùng bữa sáng và tự do tắm biển. Đến giờ trả phòng, đoàn đi tham quan:</p>
                <p>- Làng Chài Xưa Mũi Né: với lịch sử 300 năm cái nôi của nghề làm nước mắm, trải nghiệm cảm giác lao động trên đồng muối, đi trên con đường rạng xưa, thăm phố cổ Phan Thiết, , thăm nhà lều của hàm hộ nước mắm xưa, đắm chìm cảm xúc trong biển 3D và thích thú khi đi chợ làng chài xưa với bàn tính tay, bàn cân xưa thú vị,…</p>
                <p>- Mua sắm đặc sản Phan Thiết tại Đặc Sản Hương Đà (chi phí tự túc) - nước mắm Phan Thiết, các loại hản sản khô như: mực khô câu, mực một nắng, cá cơm rút xương, cá thu một nắng, cá đù một nắng….. về làm quà cho người thân và bạn bè </p>
                <p>Chiều đoàn về đến TP.Hồ Chí Minh, xe đưa về điểm đón ban đầu. Chia tay Quý khách và kết thúc chương trình du lịch.</p>',
                'tour_sale' => '20%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 3,
                'guide_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Bàu Trắng - Mango Beach - Phan Thiết - Mũi Né',
                'tour_image' => 'bau-trang-mui-ne1.jpg',
                'start_day' => '2024-05-27',
                'time' => '3 ngày 2 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 3790000,
                'vehicle' => 'Xe khách',
                'tour_description' => 'Phan Thiết hấp dẫn với Lầu Ông Hoàng, tháp Chàm Pôshanư, bãi đá Ông Địa, rạn dừa Hàm Tiến. KDL Hòn Rơm cát trắng bên hàng dương xanh. Trượt cát trên Đồi Cát Bay, ngắm hoàng hôn trên đỉnh Đồi Hồng là nguồn cảm hứng bất tận của các nhiếp ảnh gia.',
                'tour_schedule' => '<h3>Ngày 1 - TP.HỒ CHÍ MINH - MŨI NÉ Số bữa ăn: 3 bữa (Ăn sáng, trưa, tối)</h3>
                <p>Quý khách tập trung tại Công ty Discovery (39 Nguyễn Huệ, Phường Bến Nghé, Quận 1, TP.Hồ Chí Minh) khởi hành đi Phan Thiết. Quý khách ăn sáng trên cung đường đi. Đến nơi xe đưa đoàn dừng tham quan:</p>
                <p>- Lâu đài Rượu Vang RD: nghe giới thiệu về quy trình sản xuất, đóng chai và thưởng thức một trong những loại rượu vang hảo hạng nổi tiếng thế giới được xuất xứ từ Thung Lũng Napa (Mỹ).</p>
                <p>Đoàn dùng bữa trưa tại nhà hàng địa phương và làm thủ tục nhận phòng nghỉ ngơi. </p>
                <p>Buổi chiều, Quý khách tự do tắm biển hoặc hồ bơi, tận hưởng và trải nghiệm các dịch vụ có tại khách sạn/resort.</p>
                <p>Sau khi đoàn ăn tối, Quý khách tự do dạo phố khám phá Mũi Né về đêm hoặc thưởng thức các món ẩm thực địa phương như bánh tráng nướng, kem dừa, dừa ba nhát,… hay các loại hải sản tươi sống. </p>
                <p>Nghỉ đêm tại Mũi Né.</p>
                <h3>Ngày 2 - MŨI NÉ - BÀU TRẮNG – MANGO BEACH Số bữa ăn: 3 bữa (Ăn sáng, trưa, tối)</h3>
                <p>Quý khách dùng bữa sáng tại khách sạn. Sau đó xe đưa đoàn khởi hành theo cung đường ven biển Mũi Né</p>
                <p>Bàu Trắng thẳng tắp, check-in con đường đôi cong vút & chiếc xe tải bán nước màu vàng cam nổi bật được điểm xuyến bởi hoang mạc cát hai bên cùng màu xanh của biển trời. /p>
                <p>- Đến Bàu Trắng: ngắm nhìn biển hồ lấp lánh ánh bạc dưới ánh mặt trời rực rỡ cùng sự kì vỹ của những cồn cát trắng xóa. Cứ độ tháng 05 - 08 những cánh hoa sen hồng lấp ló sau chiếc lá xanh mướt  tạo nên một khung cảnh thiên nhiên thơ mộng. Quý khách thử sức với xe Jeep tốc độ cao, chinh phục đồi cát “nóng bỏng” nhất Việt Nam mang tên Trinh Nữ (chi phí xe Jeep tự túc). </p>
                <p>Đoàn dùng bữa trưa tại nhà hàng địa phương, buổi chiều xe và HDV đưa khách đến tham quan vui chơi tại:</p>
                <p>– Mango Beach: tổ hợp vui chơi giải trí độc đáo, thú vị tràn ngập sắc màu bên bờ biển thành phố Phan Thiết. Tại đây, Quý khách sẽ được:</p>
                <p>• Tận hưởng không gian thoáng đãng bên bờ biển và đắm mình trong làn nước trong xanh tại bãi tắm ngay cạnh Mango Beach</p>
                <p>• Tham quan thế giới thú cưng tại vườn thú mang phong cách Châu Âu cùng các bạn Alpaca, Pony, rùa, thỏ hay bò tuyết siêu đáng yêu và thân thiện (Tham quan trước 17h hàng ngày).</p>
                <p>• Thưởng thức các chương trình ca nhạc đặc sắc với DJ trong khi ngắm hoàng hôn lãng mạn bên biển (chương trình biểu diễn vào tối thứ 7 hàng tuần)</p>
                <p>• Nhâm nhi những món nước giải nhiệt đặc biệt là món “Dừa ba nhát” – thức uống nổi tiếng của vùng đất Bình Thuận này </p>
                <p>Quý khách dùng bữa tối tại Mango Beach trong không gian âm nhạc hoà cùng tiếng sóng biển tạo nên một buổi tối cuối tuần thư giãn. Sau bữa tối tự do dạo phố khám phá Mũi Né về đêm.</p>
                <p>Nghỉ đêm tại Mũi Né. </p>
                <h3>Ngày 3 - MŨI NÉ – LÀNG CHÀI XƯA - TP HỒ CHÍ MINH Số bữa ăn: 2 bữa (Ăn sáng, trưa)</h3>
                <p>Quý khách dùng bữa sáng và tự do tắm biển. Đến giờ trả phòng, đoàn đi tham quan:</p>
                <p>- Làng Chài Xưa Mũi Né: với lịch sử 300 năm cái nôi của nghề làm nước mắm, trải nghiệm cảm giác lao động trên đồng muối, đi trên con đường rạng xưa, thăm phố cổ Phan Thiết, , thăm nhà lều của hàm hộ nước mắm xưa, đắm chìm cảm xúc trong biển 3D và thích thú khi đi chợ làng chài xưa với bàn tính tay, bàn cân xưa thú vị,…</p>
                <p>- Mua sắm đặc sản Phan Thiết tại Đặc Sản Hương Đà (chi phí tự túc) - nước mắm Phan Thiết, các loại hản sản khô như: mực khô câu, mực một nắng, cá cơm rút xương, cá thu một nắng, cá đù một nắng….. về làm quà cho người thân và bạn bè </p>
                <p>Chiều đoàn về đến TP.Hồ Chí Minh, xe đưa về điểm đón ban đầu. Chia tay Quý khách và kết thúc chương trình du lịch.</p>',
                'tour_sale' => '20%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 3,
                'guide_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Mango Beach - Phan Thiết - Mũi Né - Bàu Trắng',
                'tour_image' => 'mangoBeach.jpg',
                'start_day' => '2024-05-28',
                'time' => '3 ngày 2 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 3890000,
                'vehicle' => 'Xe khách',
                'tour_description' => 'Phan Thiết hấp dẫn với Lầu Ông Hoàng, tháp Chàm Pôshanư, bãi đá Ông Địa, rạn dừa Hàm Tiến. KDL Hòn Rơm cát trắng bên hàng dương xanh. Trượt cát trên Đồi Cát Bay, ngắm hoàng hôn trên đỉnh Đồi Hồng là nguồn cảm hứng bất tận của các nhiếp ảnh gia.',
                'tour_schedule' => '<h3>Ngày 1 - TP.HỒ CHÍ MINH - MŨI NÉ Số bữa ăn: 3 bữa (Ăn sáng, trưa, tối)</h3>
                <p>Quý khách tập trung tại Công ty Discovery (39 Nguyễn Huệ, Phường Bến Nghé, Quận 1, TP.Hồ Chí Minh) khởi hành đi Phan Thiết. Quý khách ăn sáng trên cung đường đi. Đến nơi xe đưa đoàn dừng tham quan:</p>
                <p>- Lâu đài Rượu Vang RD: nghe giới thiệu về quy trình sản xuất, đóng chai và thưởng thức một trong những loại rượu vang hảo hạng nổi tiếng thế giới được xuất xứ từ Thung Lũng Napa (Mỹ).</p>
                <p>Đoàn dùng bữa trưa tại nhà hàng địa phương và làm thủ tục nhận phòng nghỉ ngơi. </p>
                <p>Buổi chiều, Quý khách tự do tắm biển hoặc hồ bơi, tận hưởng và trải nghiệm các dịch vụ có tại khách sạn/resort.</p>
                <p>Sau khi đoàn ăn tối, Quý khách tự do dạo phố khám phá Mũi Né về đêm hoặc thưởng thức các món ẩm thực địa phương như bánh tráng nướng, kem dừa, dừa ba nhát,… hay các loại hải sản tươi sống. </p>
                <p>Nghỉ đêm tại Mũi Né.</p>
                <h3>Ngày 2 - MŨI NÉ - BÀU TRẮNG – MANGO BEACH Số bữa ăn: 3 bữa (Ăn sáng, trưa, tối)</h3>
                <p>Quý khách dùng bữa sáng tại khách sạn. Sau đó xe đưa đoàn khởi hành theo cung đường ven biển Mũi Né</p>
                <p>Bàu Trắng thẳng tắp, check-in con đường đôi cong vút & chiếc xe tải bán nước màu vàng cam nổi bật được điểm xuyến bởi hoang mạc cát hai bên cùng màu xanh của biển trời. /p>
                <p>- Đến Bàu Trắng: ngắm nhìn biển hồ lấp lánh ánh bạc dưới ánh mặt trời rực rỡ cùng sự kì vỹ của những cồn cát trắng xóa. Cứ độ tháng 05 - 08 những cánh hoa sen hồng lấp ló sau chiếc lá xanh mướt  tạo nên một khung cảnh thiên nhiên thơ mộng. Quý khách thử sức với xe Jeep tốc độ cao, chinh phục đồi cát “nóng bỏng” nhất Việt Nam mang tên Trinh Nữ (chi phí xe Jeep tự túc). </p>
                <p>Đoàn dùng bữa trưa tại nhà hàng địa phương, buổi chiều xe và HDV đưa khách đến tham quan vui chơi tại:</p>
                <p>– Mango Beach: tổ hợp vui chơi giải trí độc đáo, thú vị tràn ngập sắc màu bên bờ biển thành phố Phan Thiết. Tại đây, Quý khách sẽ được:</p>
                <p>• Tận hưởng không gian thoáng đãng bên bờ biển và đắm mình trong làn nước trong xanh tại bãi tắm ngay cạnh Mango Beach</p>
                <p>• Tham quan thế giới thú cưng tại vườn thú mang phong cách Châu Âu cùng các bạn Alpaca, Pony, rùa, thỏ hay bò tuyết siêu đáng yêu và thân thiện (Tham quan trước 17h hàng ngày).</p>
                <p>• Thưởng thức các chương trình ca nhạc đặc sắc với DJ trong khi ngắm hoàng hôn lãng mạn bên biển (chương trình biểu diễn vào tối thứ 7 hàng tuần)</p>
                <p>• Nhâm nhi những món nước giải nhiệt đặc biệt là món “Dừa ba nhát” – thức uống nổi tiếng của vùng đất Bình Thuận này </p>
                <p>Quý khách dùng bữa tối tại Mango Beach trong không gian âm nhạc hoà cùng tiếng sóng biển tạo nên một buổi tối cuối tuần thư giãn. Sau bữa tối tự do dạo phố khám phá Mũi Né về đêm.</p>
                <p>Nghỉ đêm tại Mũi Né. </p>
                <h3>Ngày 3 - MŨI NÉ – LÀNG CHÀI XƯA - TP HỒ CHÍ MINH Số bữa ăn: 2 bữa (Ăn sáng, trưa)</h3>
                <p>Quý khách dùng bữa sáng và tự do tắm biển. Đến giờ trả phòng, đoàn đi tham quan:</p>
                <p>- Làng Chài Xưa Mũi Né: với lịch sử 300 năm cái nôi của nghề làm nước mắm, trải nghiệm cảm giác lao động trên đồng muối, đi trên con đường rạng xưa, thăm phố cổ Phan Thiết, , thăm nhà lều của hàm hộ nước mắm xưa, đắm chìm cảm xúc trong biển 3D và thích thú khi đi chợ làng chài xưa với bàn tính tay, bàn cân xưa thú vị,…</p>
                <p>- Mua sắm đặc sản Phan Thiết tại Đặc Sản Hương Đà (chi phí tự túc) - nước mắm Phan Thiết, các loại hản sản khô như: mực khô câu, mực một nắng, cá cơm rút xương, cá thu một nắng, cá đù một nắng….. về làm quà cho người thân và bạn bè </p>
                <p>Chiều đoàn về đến TP.Hồ Chí Minh, xe đưa về điểm đón ban đầu. Chia tay Quý khách và kết thúc chương trình du lịch.</p>',
                'tour_sale' => '20%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 3,
                'guide_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
        ]);
    }
}
