<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Solution extends Model
{
    use HasFactory;

    /**
     * Поля, которые можно массово назначать.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
    ];
    public function getImageUrlAttribute(): string
    {
        return $this->image ? asset('storage/' . $this->image) : asset('images/default.jpg');
    }
    /**
     * Отношение "один ко многим" с моделью ContactRequest.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactRequests(): HasMany
    {
        return $this->hasMany(ContactRequest::class);
    }

    /**
     * Отношение "один ко многим" с моделью Order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    /**
     * Получить отформатированную цену.
     *
     * @return string
     */
    public function getFormattedPriceAttribute(): string
    {
        return number_format($this->price, 0, ',', ' ') . ' руб.';
    }

    /**
     * Получить URL изображения.
     *
     * @return string
     */


    /**
     * Получить краткое описание.
     *
     * @param int $length Длина описания (по умолчанию 100 символов).
     * @return string
     */
    public function getShortDescriptionAttribute(int $length = 100): string
    {
        return strlen($this->description) > $length
            ? substr($this->description, 0, $length) . '...'
            : $this->description;
    }
}
