<?php
namespace App\Shop\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Booking extends Model {
    use Notifiable;

    // 資料表名稱
    protected $table = 'bookings';

    // 主鍵名稱
    protected $primaryKey = 'id';

    // 允許 Mass Assignment（批量填充）
    protected $fillable = [
        "name",
        "email",
        "phone",
        "num_people",
        "booking_time"
    ];

    // 自動管理 `created_at` 和 `updated_at`
    public $timestamps = true;
}
