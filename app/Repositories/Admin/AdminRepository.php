<?php
namespace App\Repositories\User;

use App\Repositories\BaseRepository;
use App\Models\Post;
use App\Http\Requests\UserAddRequest;
use App\Http\Requests\UserEditRequest;

class AdminRepository extends BaseRepository implements AdminRepositoryInterface
{
    public function getModel()
    {
        return Post::class;
    }
    public function index()
    {
        $posts = Post::selectRaw('DATE(created_at) as date, count(id) as count')
            ->whereBetween('created_at', [now()->subDays(7), now()])
            ->orderBy('created_at', 'ASC')
            ->groupBy('date')
            ->get();
        $datas = $days = [0, 0, 0, 0, 0, 0, 0];
        
        foreach ($posts as $index => $post) {
            $datas[$index] = $post['count'];
            $days[$index] = $post['date'];
            $days[$index] = $days[$index] . "\n" . Carbon::createFromFormat('Y-m-d', $post['date'])->format('l');
        }
        
        return [$datas, $days];
    }
}
