<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title'       => 'How to Master Laravel in 30 Days',
                'description' => 'Laravel is one of the most popular PHP frameworks. In this tutorial, we cover everything from installation to advanced topics like queues, events, and APIs — all in just 30 days.',
                'status'      => 'published',
                'post_type'   => 'tutorial',
                'views'       => 12400,
                'likes'       => 348,
            ],
            [
                'title'       => 'Breaking: Tech Giants Merge',
                'description' => 'In a surprising move, two of the world\'s largest tech companies have announced a major merger deal worth billions. Industry experts say this could reshape the entire technology landscape.',
                'status'      => 'published',
                'post_type'   => 'news',
                'views'       => 8750,
                'likes'       => 210,
            ],
            [
                'title'       => 'My Journey as a Developer',
                'description' => 'I started coding with zero experience five years ago. This is my personal story — the struggles, the failures, the late nights, and finally landing my first developer job.',
                'status'      => 'draft',
                'post_type'   => 'blog',
                'views'       => 320,
                'likes'       => 45,
            ],
            [
                'title'       => 'Top 10 VS Code Extensions',
                'description' => 'Boost your productivity with these must-have VS Code extensions. From code formatting to Git integration, these 10 extensions will completely change how you write code every day.',
                'status'      => 'published',
                'post_type'   => 'article',
                'views'       => 21000,
                'likes'       => 980,
            ],
            [
                'title'       => 'Summer Vibes Post',
                'description' => 'Capturing the best moments of the summer season. Sun, beach, good vibes, and great company — this post is a visual diary of an unforgettable summer trip.',
                'status'      => 'archived',
                'post_type'   => 'Instagram',
                'views'       => 15600,
                'likes'       => 4320,
            ],
            [
                'title'       => 'New Product Launch Thread',
                'description' => 'We are thrilled to announce the official launch of our newest product. This thread covers all the features, pricing, and the story behind how we built it from scratch.',
                'status'      => 'published',
                'post_type'   => 'Thread',
                'views'       => 5400,
                'likes'       => 127,
            ],
            [
                'title'       => 'Behind the Scenes of Our Startup',
                'description' => 'Ever wondered what really goes on inside an early-stage startup? We are sharing the raw, unfiltered behind-the-scenes of building our company — the good, the bad, and the ugly.',
                'status'      => 'draft',
                'post_type'   => 'Linkedin',
                'views'       => 890,
                'likes'       => 67,
            ],
            [
                'title'       => 'Viral Dance Challenge',
                'description' => 'We jumped on the latest viral dance trend taking over social media. Watch our team give it their best shot — it is funnier than you think. Do not miss the last clip!',
                'status'      => 'published',
                'post_type'   => 'TikTok',
                'views'       => 98000,
                'likes'       => 12500,
            ],
            [
                'title'       => 'Understanding AI & Machine Learning',
                'description' => 'Artificial Intelligence and Machine Learning can seem overwhelming at first. This article breaks down the core concepts in simple language so anyone can understand how it all works.',
                'status'      => 'draft',
                'post_type'   => 'article',
                'views'       => 0,
                'likes'       => 0,
            ],
            [
                'title'       => 'Morning Motivation Tweet',
                'description' => 'Start your morning with the right mindset. A short reminder that consistency beats perfection every single time. Keep going, even on the hard days.',
                'status'      => 'published',
                'post_type'   => 'Twitter',
                'views'       => 3400,
                'likes'       => 560,
            ],
        ];

        Post::insert($posts);
    }
}
