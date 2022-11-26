<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Factories\HasFactory;

    class Funcionario extends Model
    {
        use HasFactory;
        protected $table = 'funcionarios';
        public $timestamps = true;

        protected $fillable = [
            'nome',
            'cpf',
            'carteira_trabalho',
            'setor',
            'contato',
            'contato_2',

        ];

    }