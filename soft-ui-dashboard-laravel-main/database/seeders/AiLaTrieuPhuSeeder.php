<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\AiLaTrieuPhu;

class AiLaTrieuPhuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {DB::table('ai_la_trieu_phus')->insert([
        [
            'category' => '1',
            'question' => 'Kích thước của 1 Char là bao nhiêu bit?',
            'correct_answer' => '16',
            'incorrect_1' => '7',
            'incorrect_2' => '8',
            'incorrect_3' => '4',

        ],
        [
            'category' => '1',
            'question' => 'Kết quả sau khi biên dịch mã int a = 3.5',
            'correct_answer' => 'Compilation error',
            'incorrect_1' => 'Runtime error',
            'incorrect_2' => '3.5',
            'incorrect_3' => '3',

        ],
        [
            'category' => '1',
            'question' => 'Kết quả sau khi biên dịch mã int a = 9/0',
            'correct_answer' => 'Runtime Exception',
            'incorrect_1' => 'Compilatinon error: Phép tính chia phải nằm trong cú pháp try',
            'incorrect_2' => 'Compilation error: DivideByZeroException',
            'incorrect_3' => 'No Error: kết quả là NaN',

        ],
        [
            'category' => '1',
            'question' => 'Kết quả sau khi biên dịch mã: Class A{int b = 1; public static void main(String[] args) {System.out.println(“b is” + b);}}',
            'correct_answer' => 'Compilation error',
            'incorrect_1' => 'Runtime Error',
            'incorrect_2' => 'Runtime Exception',
            'incorrect_3' => 'Kết quả của b là 1',

        ],
        [
            'category' => '2',
            'question' => 'NNLT C++ được ra đời năm nào?',
            'correct_answer' => '1985',
            'incorrect_1' => '1984',
            'incorrect_2' => '1982',
            'incorrect_3' => '1983',

        ],
        [
            'category' => '2',
            'question' => 'Ai là người đã sáng tạo ra NNLT C++?',
            'correct_answer' => 'Bjarne Stroustrup',
            'incorrect_1' => 'Guido van Rossum',
            'incorrect_2' => 'Blaise Pascal',
            'incorrect_3' => 'Dennis Ritchie',

        ],
        [
            'category' => '2',
            'question' => 'NNLT C++ có đuôi mở rộng là?',
            'correct_answer' => '.cpp',
            'incorrect_1' => '.java',
            'incorrect_2' => '.py',
            'incorrect_3' => '.c',

        ],
        [
            'category' => '2',
            'question' => 'Từ khoá nào có trong C++ mà không có trong C?',
            'correct_answer' => 'bool',
            'incorrect_1' => 'break',
            'incorrect_2' => 'continue',
            'incorrect_3' => 'switch',

        ],
        [
            'category' => '3',
            'question' => 'Để class sử dụng interface nó phải:',
            'correct_answer' => 'Tất cả các đáp án trên',
            'incorrect_1' => 'Tạo một interface object ',
            'incorrect_2' => 'Chứa các phương thức giống như interface',
            'incorrect_3' => 'Kế thừa các đặc tính của interface',

        ],
        [
            'category' => '3',
            'question' => 'Khái niệm composition xác định rằng bạn có thể:',
            'correct_answer' => 'Soạn các dự án C# với những object khác nhau.',
            'incorrect_1' => 'Biên soạn code tốt với C#.',
            'incorrect_2' => 'Giảm lỗi bằng cách viết lại trong quá trình lập trình.',
            'incorrect_3' => 'Tất cả các đáp án trên.',

        ],
        [
            'category' => '3',
            'question' => 'Mọi class đều trực tiếp hoặc gián tiếp mở rộng lớp nào sau đây:',
            'correct_answer' => 'Object',
            'incorrect_1' => 'Drawing',
            'incorrect_2' => 'System',
            'incorrect_3' => 'Console',

        ],
    ]);

    }
}
