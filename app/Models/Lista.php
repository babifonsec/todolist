<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lista extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "lista";
    protected $fillable = [
        "nome",
        "descricao",
        "id_user",

    ];

    public function tarefas(): HasMany
    {
        return $this->hasMany(Tarefa::class, "id_lista", "id");
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class,"user_id","id");
    }
}
