<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Task extends Model
{
  /** @use HasFactory<\Database\Factories\UserFactory> */
  use HasFactory, Notifiable;

  const STATUS_PENDING = 'pending';
  const STATUS_COMPLETED = 'completed';
  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
      'title',
      'description',
      'statut',
       'user_id',
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
      //
  ];

  /**
   * Get the attributes that should be cast.
   *
   * @return array<string, string>
   */
  protected function casts(): array
  {
      return [
      //
      ];
  }


  public function markAsCompleted()
  {
      $this->update(['status' => self::STATUS_COMPLETED]);
  }

  public function markAsPending()
  {
      $this->update(['status' => self::STATUS_PENDING]);
  }

  public function user()
  {
      return $this->belongsTo(User::class);
  }
}
