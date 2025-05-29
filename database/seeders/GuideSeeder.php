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
                'guide_Pno' => '035863586',
                'guide_Img' => 'lmp.jpg',
                'guide_Mail' => 'lmp@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'guide_Name' => 'HIEUTHUHAI',
                'guide_Pno' => '0967854323',
                'guide_Img' => 'hth.jpg',
                'guide_Mail' => 'hth@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'guide_Name' => 'Trịnh Trần Phương Tuấn',
                'guide_Pno' => '0932847361',
                'guide_Img' => 'j97.jpg',
                'guide_Mail' => 'j97@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'guide_Name' => 'Võ Cao Thùy Huyên',
                'guide_Pno' => '0897465231',
                'guide_Img' => 'vtth.jpg',
                'guide_Mail' => 'vtth@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'guide_Name' => 'Bray',
                'guide_Pno' => '0978123564',
                'guide_Img' => 'bray.jpg',
                'guide_Mail' => 'vlht@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'guide_Name' => 'Bình Gold',
                'guide_Pno' => '0934872356',
                'guide_Img' => 'donalgold.jpg',
                'guide_Mail' => 'nva@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'guide_Name' => 'Nguyễn Thúc Thùy Tiên',
                'guide_Pno' => '0123456789',
                'guide_Img' => 'raucu.jpg',
                'guide_Mail' => 'ttb@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'guide_Name' => 'Viruss',
                'guide_Pno' => '0987654321',
                'guide_Img' => 'v.jpg',
                'guide_Mail' => 'lvc@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'guide_Name' => 'Nguyễn Văn A',
                'guide_Pno' => '0921238423',
                'guide_Img' => 'team-1.jpg',
                'guide_Mail' => 'lbb@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'guide_Name' => 'Lê Văn Cường',
                'guide_Pno' => '0939392374',
                'guide_Img' => 'team-2.jpg',
                'guide_Mail' => 'lds@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'guide_Name' => 'Lê Văn Cường',
                'guide_Pno' => '0939392374',
                'guide_Img' => 'team-3.jpg',
                'guide_Mail' => 'team@gmail.com',
                'guide_Intro' => 'Là người có thâm niên hơn 10 năm kinh nghiệm trong việc dẫn dắt các tour lớn nhỏ, tôi sẽ đồng hành cùng các bạn trọng mọi cuộc hành trình. Bạn chỉ cần đi và trải nghiệm, còn lại tôi sẽ lo cho bạn tất cả. Nếu có gì thắc mắc, vui lòng liên hệ với tôi qua email hoặc số điện thoại. Chúc bạn có những phút giây thật tuyệt vời cùng với Discovery.',
                'created_at' => now(),
                'updated_at' => now(),

            ],

        ]);
    }
}
