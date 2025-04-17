<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guides')->insert([
            [
                'guide_Name' => 'Hồ Sĩ Minh Trí',
                'guide_Pno' => '035863586',
                'guide_Img' => 'team-1.jpg',
                'guide_Mail' => 'hsmt@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'guide_Name' => 'Mai Trần Anh Tuấn',
                'guide_Pno' => '8356238965',
                'guide_Img' => 'team-2.jpg',
                'guide_Mail' => 'mtat@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'guide_Name' => 'Trịnh Viết Ký',
                'guide_Pno' => '4257895',
                'guide_Img' => 'team-3.jpg',
                'guide_Mail' => 'tvk@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'guide_Name' => 'Nguyễn Thành Tài',
                'guide_Pno' => '329528956',
                'guide_Img' => 'team-4.jpg',
                'guide_Mail' => 'ntt@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'guide_Name' => 'Vũ Lê Huy Trường',
                'guide_Pno' => '4348688',
                'guide_Img' => 'team-3.jpg',
                'guide_Mail' => 'vlht@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'guide_Name' => 'Nguyễn Văn A',
                'guide_Pno' => '2995610587',
                'guide_Img' => 'team-1.jpg',
                'guide_Mail' => 'nva@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'guide_Name' => 'Trần Thị B',
                'guide_Pno' => '3862986',
                'guide_Img' => 'team-2.jpg',
                'guide_Mail' => 'ttb@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'guide_Name' => 'Lê Văn C',
                'guide_Pno' => '48567986',
                'guide_Img' => 'team-4.jpg',
                'guide_Mail' => 'lvc@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),

            ],

        ]);
    }
}
