<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarefa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "tarefa";
    protected $fillable = [
        "titulo",
        "descricao",
        "dataCriacao",
        "dataConclusao",
        "status",
        "id_lista",
    ];

    protected $casts = [
        "dataCriacao" => "datetime:Y-m-d H:i",
        "dataConclusao" => "datetime:Y-m-d H:i",
    ];

    public function lista(): BelongsTo
    {
        return $this->belongsTo(Lista::class, "id_lista", "id");
    }
}
