<?php

    use Illuminate\Database\Eloquent\Model;


    use Illuminate\Database\Eloquent\Factories\HasFactory;


    class users extends Model{

        use HasFactory;
        protected $table= 'users';
          protected $hidden = ['password'];
        protected $fillable=[
            'username',
            'nome',
            'cognome',
            'email',
            'password',

        ];
        
    }



?>