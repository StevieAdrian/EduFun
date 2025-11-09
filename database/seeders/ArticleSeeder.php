<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::insert([
            [
                'title' => 'Human and Computer Interaction',
                'description' => 'Artikel ini membahas secara mendalam mengenai interaksi antara manusia dan komputer, bagaimana desain antarmuka dapat mempengaruhi pengalaman pengguna, serta prinsip-prinsip dasar yang membuat penggunaan sistem digital menjadi lebih efektif dan menyenangkan.',
                'synopsis' => 'Membahas interaksi manusia-komputer dan prinsip desain antarmuka untuk pengalaman pengguna optimal.',
                'view_count' => 12,
                'category_id' => 1,
                'writer_id' => 1,
                'publish_date' => now(),
                'query_string' => 'human-computer-interaction',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'User Experience',
                'description' => 'Artikel ini menjelaskan konsep User Experience (UX), mulai dari pemahaman kebutuhan pengguna hingga perancangan antarmuka yang intuitif. Ditekankan bagaimana UX yang baik dapat meningkatkan kepuasan pengguna dan keberhasilan produk digital.',
                'synopsis' => 'Mengenal konsep UX dan bagaimana merancang pengalaman pengguna yang efektif dan menyenangkan.',
                'view_count' => 10,
                'category_id' => 1,
                'writer_id' => 2,
                'publish_date' => now(),
                'query_string' => 'user-experience',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'User Experience for Digital Immersive Technology',
                'description' => 'Artikel ini membahas penerapan UX pada teknologi imersif digital, seperti AR dan VR. Fokus pada bagaimana merancang pengalaman yang realistis, interaktif, dan nyaman bagi pengguna, sekaligus menghindari masalah seperti motion sickness dan kebingungan navigasi.',
                'synopsis' => 'Membahas UX untuk teknologi imersif digital, termasuk AR dan VR, agar pengalaman pengguna optimal.',
                'view_count' => 14,
                'category_id' => 1,
                'writer_id' => 3,
                'publish_date' => now(),
                'query_string' => 'user-experience-digital-immersive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pattern Software Design',
                'description' => 'Artikel ini menjelaskan berbagai pola desain perangkat lunak yang membantu pengembang membangun sistem yang terstruktur, mudah dipelihara, dan scalable. Dilengkapi contoh implementasi dalam berbagai konteks pengembangan aplikasi modern.',
                'synopsis' => 'Mengenal pola desain perangkat lunak untuk membangun aplikasi lebih terstruktur dan mudah dipelihara.',
                'view_count' => 16,
                'category_id' => 2,
                'writer_id' => 1,
                'publish_date' => now(),
                'query_string' => 'pattern-software-design',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Agile Software Development',
                'description' => 'Artikel ini membahas metode Agile dalam pengembangan perangkat lunak, termasuk prinsip-prinsip iteratif, kolaborasi tim, dan adaptasi terhadap perubahan. Dijelaskan bagaimana Agile dapat meningkatkan produktivitas, kualitas kode, dan kepuasan pengguna.',
                'synopsis' => 'Membahas metode Agile untuk pengembangan perangkat lunak yang fleksibel, iteratif, dan kolaboratif.',
                'view_count' => 22,
                'category_id' => 2,
                'writer_id' => 2,
                'publish_date' => now(),
                'query_string' => 'agile-software-development',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Code Reengineering',
                'description' => 'Artikel ini menjelaskan konsep Code Reengineering, yaitu proses memperbaiki, merestrukturisasi, dan meningkatkan kualitas kode yang sudah ada. Fokus pada teknik untuk meningkatkan maintainability, readability, dan performa tanpa mengubah fungsionalitas utama sistem.',
                'synopsis' => 'Membahas proses reengineering kode untuk meningkatkan kualitas, maintainability, dan performa sistem.',
                'view_count' => 29,
                'category_id' => 2,
                'writer_id' => 3,
                'publish_date' => now(),
                'query_string' => 'code-reengineering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
