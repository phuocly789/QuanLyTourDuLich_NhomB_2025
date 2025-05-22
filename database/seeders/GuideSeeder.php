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
                'guide_Name' => 'Lý Minh Phước',
                'guide_Pno' => '0363896372',
                'guide_Img' => 'team-1.jpg',
                'guide_Mail' => 'hsmt@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'guide_Name' => 'HIEUTHUHAI',
                'guide_Pno' => '0952746512',
                'guide_Img' => 'team-2.jpg',
                'guide_Mail' => 'mtat@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'guide_Name' => 'Trịnh Trần Phương Tuấn',
                'guide_Pno' => '0123456789',
                'guide_Img' => 'team-3.jpg',
                'guide_Mail' => 'tvk@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'guide_Name' => 'Võ Cao Thùy Huyên',
                'guide_Pno' => '0987654321',
                'guide_Img' => 'team-4.jpg',
                'guide_Mail' => 'ntt@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'guide_Name' => 'Vũ Lê Huy Trường',
                'guide_Pno' => '0741852963',
                'guide_Img' => 'team-3.jpg',
                'guide_Mail' => 'vlht@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'guide_Name' => 'Nguyễn Văn A',
                'guide_Pno' => '0987654321',
                'guide_Img' => 'team-1.jpg',
                'guide_Mail' => 'nva@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'guide_Name' => 'Trần Thị B',
                'guide_Pno' => '0753159842',
                'guide_Img' => 'team-2.jpg',
                'guide_Mail' => 'ttb@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'guide_Name' => 'Lê Văn C',
                'guide_Pno' => '0968574123',
                'guide_Img' => 'team-4.jpg',
                'guide_Mail' => 'lvc@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),

            ],

        ]);
    }
}
